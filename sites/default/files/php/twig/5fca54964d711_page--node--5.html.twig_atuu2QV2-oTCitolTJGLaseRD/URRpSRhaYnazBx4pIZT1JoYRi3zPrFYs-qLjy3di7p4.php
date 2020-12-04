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

/* themes/watkins/templates/page--node--5.html.twig */
class __TwigTemplate_ef13b0a4514e5ec6ac1be34ef3bc86f62c7602293dca03a873105997294ec71a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "<section class=\"master-header\" id=\"sticktacular\">
  <div class=\"container\">
    <div class=\"col-sm-4 col-xs-0\">
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_menu", [])), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-4 col-xs-10\">
      ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo_area", [])), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-4 col-xs-2\">
      ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_menu", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
<section class=\"page-title-section\">
  <div class=\"seper\"></div>
  ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
        echo "
  <div class=\"seper\"></div>
</section>
";
        // line 72
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 74
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 75
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 112
        echo "
";
        // line 114
        $this->displayBlock('main', $context, $blocks);
        // line 179
        echo "<section class=\"prefooter\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        ";
        // line 183
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 189
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter3", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 192
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter4", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>
<section class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        <p>&copy;  ";
        // line 201
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["post"] ?? null), "published_at", [])), "Y"), "html", null, true);
        echo " Watkins Heavy Hauling, Meban NC USA</p>
      </div>
    </div>
  </div>
</section>

";
    }

    // line 75
    public function block_navbar($context, array $blocks = [])
    {
        // line 76
        echo "    ";
        // line 77
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 79
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 80
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 83
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 84
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 85
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 87
        echo "      <div class=\"navbar-header\">
        ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 90
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 91
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 98
        echo "      </div>

      ";
        // line 101
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 102
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 106
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 107
            echo "        </div>
      ";
        }
        // line 109
        echo "    </header>
  ";
    }

    // line 114
    public function block_main($context, array $blocks = [])
    {
        // line 115
        echo "  <div role=\"main\" class=\"main-container main-container-sp ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 119
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 120
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 125
            echo "      ";
        }
        // line 126
        echo "
      ";
        // line 128
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 129
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 134
            echo "      ";
        }
        // line 135
        echo "
      ";
        // line 137
        echo "      ";
        // line 138
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 139
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 140
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 141
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 142
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 145
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 148
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 149
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 156
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 159
            echo "        ";
        }
        // line 160
        echo "
        ";
        // line 162
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 166
        echo "      </section>

      ";
        // line 169
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 170
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 175
            echo "      ";
        }
        // line 176
        echo "    </div>
  </div>
";
    }

    // line 120
    public function block_header($context, array $blocks = [])
    {
        // line 121
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 129
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 130
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 149
    public function block_highlighted($context, array $blocks = [])
    {
        // line 150
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 156
    public function block_help($context, array $blocks = [])
    {
        // line 157
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 162
    public function block_content($context, array $blocks = [])
    {
        // line 163
        echo "          <a id=\"main-content\"></a>
          ";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 170
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 171
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 172
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/watkins/templates/page--node--5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 172,  359 => 171,  356 => 170,  350 => 164,  347 => 163,  344 => 162,  337 => 157,  334 => 156,  327 => 150,  324 => 149,  317 => 131,  314 => 130,  311 => 129,  304 => 122,  301 => 121,  298 => 120,  292 => 176,  289 => 175,  286 => 170,  283 => 169,  279 => 166,  276 => 162,  273 => 160,  270 => 159,  267 => 156,  264 => 155,  261 => 153,  258 => 152,  255 => 149,  252 => 148,  246 => 145,  244 => 142,  243 => 141,  242 => 140,  241 => 139,  240 => 138,  238 => 137,  235 => 135,  232 => 134,  229 => 129,  226 => 128,  223 => 126,  220 => 125,  217 => 120,  214 => 119,  207 => 115,  204 => 114,  199 => 109,  195 => 107,  192 => 106,  186 => 103,  183 => 102,  180 => 101,  176 => 98,  167 => 92,  164 => 91,  161 => 90,  157 => 88,  154 => 87,  148 => 85,  146 => 84,  141 => 83,  139 => 80,  138 => 79,  137 => 77,  135 => 76,  132 => 75,  121 => 201,  109 => 192,  103 => 189,  97 => 186,  91 => 183,  85 => 179,  83 => 114,  80 => 112,  76 => 75,  74 => 74,  72 => 72,  66 => 69,  57 => 63,  51 => 60,  45 => 57,  40 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/watkins/templates/page--node--5.html.twig", "/home/wheavy/watkinsheavyhauling.com/themes/watkins/templates/page--node--5.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 72, "if" => 74, "block" => 75];
        static $filters = ["escape" => 57, "date" => 201, "clean_class" => 80, "t" => 92];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'date', 'clean_class', 't'],
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
}
