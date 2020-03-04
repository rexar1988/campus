<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/campus/templates/system/page.html.twig */
class __TwigTemplate_e68ead54dd87e8ee4296f3ac7a5c579ef8d67667340402d17b5d3f3912b0789b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 50, "if" => 71];
        $filters = ["escape" => 59, "striptags" => 89, "render" => 89];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'striptags', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 48
        echo "
";
        // line 50
        $context["classes"] = [0 => "layout", 1 => ((        // line 52
($context["is_front"] ?? null)) ? ("page-front") : ("page-inside")), 2 => ((        // line 53
($context["node"] ?? null)) ? (("page-node-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [])))) : ("")), 3 => (($this->getAttribute(        // line 54
($context["page"] ?? null), "sidebar", [])) ? ("with-sidebar") : ("without-sidebar")), 4 => ((        // line 55
($context["logged_in"] ?? null)) ? ("authorized") : ("not-authorized"))];
        // line 58
        echo "
<div";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <header class=\"layout__header\">
    <div class=\"container\">
      ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </div>
  </header>
  <nav class=\"layout__nav\">
    <div class=\"container\">
      ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav", [])), "html", null, true);
        echo "
    </div>
  </nav>

  ";
        // line 71
        if (($context["is_front"] ?? null)) {
            // line 72
            echo "    <main role=\"main\" class=\"layout__page\">
      <div class=\"container\">
        ";
            // line 74
            if ($this->getAttribute(($context["page"] ?? null), "messages", [])) {
                // line 75
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
                echo "
        ";
            }
            // line 77
            echo "      </div>

      ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "front_page", [])), "html", null, true);
            echo "
    </main>
  ";
        } else {
            // line 82
            echo "    <main role=\"main\" class=\"layout__page\">
      ";
            // line 83
            if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
                // line 84
                echo "        <div class=\"layout__sidebar\">
          ";
                // line 85
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 88
            echo "      <div class=\"layout__content\">
        ";
            // line 89
            if (strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "messages", [])))) {
                // line 90
                echo "          <div class=\"container\">
            ";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 94
            echo "
        ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
      </div>
    </main>
  ";
        }
        // line 99
        echo "
  <footer role=\"contentinfo\" class=\"layout__footer\">
    <div class=\"container layout__footer-content\">
      ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left", [])), "html", null, true);
        echo "
      ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right", [])), "html", null, true);
        echo "
    </div>
  </footer>

  ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "modal", [])), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/campus/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 107,  159 => 103,  155 => 102,  150 => 99,  143 => 95,  140 => 94,  134 => 91,  131 => 90,  129 => 89,  126 => 88,  120 => 85,  117 => 84,  115 => 83,  112 => 82,  106 => 79,  102 => 77,  96 => 75,  94 => 74,  90 => 72,  88 => 71,  81 => 67,  73 => 62,  67 => 59,  64 => 58,  62 => 55,  61 => 54,  60 => 53,  59 => 52,  58 => 50,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/campus/templates/system/page.html.twig", "H:\\Work\\open-server\\domains\\blog.local\\themes\\campus\\templates\\system\\page.html.twig");
    }
}
