<?php

/**
 * @file
 * Contains \Drupal\spn\Controller\SignatureValidation.
 */

namespace Drupal\spn\Controller;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Controller\ControllerBase;
use Drupal\spn\Entity\PetitionSignature;
use Drupal\spn\Entity\PetitionUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\user\Entity\User;
use Drupal\node\Entity\Node;

/**
 * Provides route responses for the signature validation.
 */
class SignatureValidation extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return RedirectResponse
   *   A simple renderable array.
   */
  public function validate($nid, $token) {

    $config = \Drupal::service('config.factory')->getEditable('spn.settings');

    // variables
    $signature = new PetitionSignature();
    $load_signature = $signature->getSignatureByToken($token);

    // if signature of this token is found
    // TODO: check if can be replaced by empty()
    if(isset($load_signature) && $load_signature) {

      // If token already validated, alert
      if($signature->ifValidated()) {
        $message = $config->get('spn_message_expiry');
      } else {

        // validate the signature
        $signature->validate();
        $signature->updateValidated();
        $message = $config->get('spn_message_validation');

        //To load node data using nid
        $node = Node::load($signature->getNID());

        $host = \Drupal::request()->getSchemeAndHttpHost();

        $params = [
          'email_content' => $node->get('field_email_appreciation')->getValue(),
          'email_subject' => $node->get('field_email_appreciation_subject')->getValue(),
          'entity_title' => $node->getTitle(),
          'node_url' => $host . '/node/' . $signature->getNID(),
        ];

        // setup confirmation email
        $mailManager = \Drupal::service('plugin.manager.mail');
        $module = 'spn';
        $mail_key = 'petition_confirmed';
        $language_code = \Drupal::languageManager()->getCurrentLanguage()->getId();
        $reply = null;
        $send = true;

        // add email based on the user typ
        if ($signature->getIsDrupalUser()) {
          $user = User::load($signature->getDrupalUID());
          $to = $user->getEmail();
        } else {
          $puser = PetitionUser::loadPetitionUser($signature->getUID());
          $to = $puser->getEmail();
        }

        // send email
        $mailManager->mail($module, $mail_key, $to, $language_code, $params, $reply, $send);
        // Clear cache tag.
        Cache::invalidateTags(['node:' . $signature->getNID()]);

        $message = $this->t('Your signature has been counted, thank you.');

      }

    // if signature is not found, send error
    } else {
      $message = $config->get('spn_message_error');
    }

    // redirect the user back to the node page
    // TODO: use machine route name => $url = \Drupal\Core\Url::fromRoute('entity.node.canonical')->setRouteParameters([ 'node' => $nid ]);
    $petition_link = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$nid);
    $response = new RedirectResponse($petition_link);
    \Drupal::messenger()->addStatus($this->t($message), FALSE);
    return $response;

  }

}
