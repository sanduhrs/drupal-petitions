<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @gin/admin/entity-add-list.html.twig */
class __TwigTemplate_ad2150bf60f835f6238b9e75d9ffebf9a6589df75b36786f7fc8a72d5e94889d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["item_classes"] = [0 => "admin-item"];
        // line 23
        if ( !twig_test_empty(($context["bundles"] ?? null))) {
            // line 24
            echo "<div class=\"panel\">
  ";
            // line 25
            if (($context["title"] ?? null)) {
                // line 26
                echo "    <h3 class=\"panel__title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
                echo "</h3>
  ";
            }
            // line 28
            echo "
  <dl";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "admin-list", 1 => "panel__content"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ">
    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 31
                echo "      ";
                // line 35
                echo "      ";
                $context["bundle_attributes"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 35), "url", [], "any", false, false, true, 35), "getOption", [0 => "attributes"], "method", false, false, true, 35)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 35), "url", [], "any", false, false, true, 35), "getOption", [0 => "attributes"], "method", false, false, true, 35)) : ([]));
                // line 36
                echo "      ";
                $context["link_attributes"] = twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(($context["bundle_attributes"] ?? null), 36, $this->source)), "addClass", [0 => "admin-item__link"], "method", false, false, true, 36);
                // line 37
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                echo ">
        <a class=\"admin-item__link\" href=\"";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 38), "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\"></a>
        <dt class=\"admin-item__title\">
          ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 40), "text", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
        </dt>
        ";
                // line 43
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 43)) {
                    // line 44
                    echo "          <dd class=\"admin-item__description\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 46
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  </dl>
</div>
";
        } elseif ( !twig_test_empty(        // line 50
($context["add_bundle_message"] ?? null))) {
            // line 51
            echo "  <p>
    ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add_bundle_message"] ?? null), 52, $this->source), "html", null, true);
            echo "
  </p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gin/admin/entity-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 52,  110 => 51,  108 => 50,  104 => 48,  97 => 46,  91 => 44,  88 => 43,  83 => 40,  78 => 38,  73 => 37,  70 => 36,  67 => 35,  65 => 31,  61 => 30,  57 => 29,  54 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 23,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/admin/entity-add-list.html.twig", "/srv/http/drupal/petition2/web/themes/contrib/gin/templates/admin/entity-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 23, "for" => 30);
        static $filters = array("escape" => 26);
        static $functions = array("create_attribute" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
