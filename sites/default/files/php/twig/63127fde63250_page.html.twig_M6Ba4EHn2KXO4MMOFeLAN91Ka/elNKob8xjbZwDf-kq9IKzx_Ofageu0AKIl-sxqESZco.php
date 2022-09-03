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

/* themes/contrib/dan/templates/page.html.twig */
class __TwigTemplate_09672641f1a34b6abc368ab6e571f3a0bc626a7bb19cad514ca54f3846c81281 extends \Twig\Template
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
        // line 46
        echo "<div id=\"page\" class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
    <section id=\"top\">
      ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
    </section><!-- /#top -->
    <section id=\"navigation\">
      <div class=\"table\">
        <div class=\"row\">
          ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
          ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </section><!-- /#navigation -->
  </header>

  ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "

  ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "

  ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "

  <main id=\"main\" role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 73
        echo "
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 74)) {
            // line 75
            echo "      <aside class=\"sidebar\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
      </aside><!-- /.sidebar -->
    ";
        }
        // line 79
        echo "
    ";
        // line 81
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 82
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 82) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 82))) ? ("three-columns") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 83
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 83) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 83)))) ? ("two-columns") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 84
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 84) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 84)))) ? ("two-columns") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 85
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 85)))) ? ("one-column") : ("")), 4 => "column"];
        // line 89
        echo "
    <div id=\"content\"role=\"main\" ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 90), 90, $this->source), "html", null, true);
        echo ">
      ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
      ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
    </div>";
        // line 94
        echo "
    ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)) {
            // line 96
            echo "      <aside class=\"sidebar\">
        ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
      </aside><!-- /.sidebar -->
    ";
        }
        // line 100
        echo "
  </main>

  ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 103)) {
            // line 104
            echo "    <footer role=\"contentinfo\">
      ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 108
        echo "
  ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 109) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 109))) {
            // line 110
            echo "    <section id=\"bottom\">
      ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
      ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
    </section><!-- /#bottom -->
  ";
        }
        // line 115
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/dan/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 115,  174 => 112,  170 => 111,  167 => 110,  165 => 109,  162 => 108,  156 => 105,  153 => 104,  151 => 103,  146 => 100,  140 => 97,  137 => 96,  135 => 95,  132 => 94,  128 => 92,  124 => 91,  120 => 90,  117 => 89,  115 => 85,  114 => 84,  113 => 83,  112 => 82,  111 => 81,  108 => 79,  102 => 76,  99 => 75,  97 => 74,  94 => 73,  88 => 69,  83 => 67,  78 => 65,  74 => 64,  65 => 58,  61 => 57,  53 => 52,  49 => 51,  44 => 49,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dan/templates/page.html.twig", "/opt/lampp/htdocs/filmes/themes/contrib/dan/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74, "set" => 81);
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
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
