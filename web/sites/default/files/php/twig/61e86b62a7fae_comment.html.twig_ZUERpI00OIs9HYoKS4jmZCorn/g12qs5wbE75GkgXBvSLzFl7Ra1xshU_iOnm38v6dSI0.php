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

/* core/themes/olivero/templates/content/comment.html.twig */
class __TwigTemplate_137ac5fc271ec70f827fffcca58db710a7ddcd7596127b73b252fc8d2d1fa6fd extends \Twig\Template
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
        // line 68
        $context["classes"] = [0 => "comment", 1 => (( !        // line 70
($context["parent_comment"] ?? null)) ? ("comment--level-1") : ("")), 2 => (((        // line 71
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 71, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["comment"] ?? null), "owner", [], "any", false, false, true, 72), "anonymous", [], "any", false, false, true, 72)) ? ("by-anonymous") : ("")), 4 => (((        // line 73
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 73)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 73), 73, $this->source)) . "-author")) : (""))];
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/comments"), "html", null, true);
        echo "
<article ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 77), "setAttribute", [0 => "role", 1 => "article"], "method", false, false, true, 77), "setAttribute", [0 => "data-drupal-selector", 1 => "comment"], "method", false, false, true, 77), 77, $this->source), "html", null, true);
        echo ">
  <div class=\"comment__picture-wrapper\">
    <div class=\"comment__picture\">
      ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 80, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"comment__text-wrapper\">
    <footer class=\"comment__meta\">
      <p class=\"comment__author\">";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 85, $this->source), "html", null, true);
        echo "</p>
      <p class=\"comment__time\">";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 86, $this->source), "html", null, true);
        echo "</p>
      ";
        // line 92
        echo "      ";
        if (($context["parent"] ?? null)) {
            // line 93
            echo "        <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 93, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 95
        echo "    </footer>
    <div";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
        echo ">
      ";
        // line 97
        if (($context["title"] ?? null)) {
            // line 98
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 98, $this->source), "html", null, true);
            echo "
        <h3";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 99, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 99, $this->source), "html", null, true);
            echo "</h3>
        ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 100, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 102
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 102, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 102,  100 => 100,  94 => 99,  89 => 98,  87 => 97,  83 => 96,  80 => 95,  74 => 93,  71 => 92,  67 => 86,  63 => 85,  55 => 80,  49 => 77,  45 => 76,  43 => 73,  42 => 72,  41 => 71,  40 => 70,  39 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/comment.html.twig", "/srv/http/drupal/petition2/web/core/themes/olivero/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 92);
        static $filters = array("escape" => 76);
        static $functions = array("attach_library" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['attach_library']
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
