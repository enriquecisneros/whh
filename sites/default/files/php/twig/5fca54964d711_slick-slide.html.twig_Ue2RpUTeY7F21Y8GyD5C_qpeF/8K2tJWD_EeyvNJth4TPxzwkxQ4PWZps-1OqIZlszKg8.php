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

/* modules/contrib/slick/templates/slick-slide.html.twig */
class __TwigTemplate_a5e2e8626efb24631b1e71e1ca5728abafece7990c53e71531889d3c45501735 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_slide' => [$this, 'block_slick_slide'],
            'slick_caption' => [$this, 'block_slick_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        $context["classes"] = [0 => "slick__slide", 1 => "slide", 2 => ("slide--" . $this->sandbox->ensureToStringAllowed(        // line 22
($context["delta"] ?? null))), 3 => ((twig_test_empty($this->getAttribute(        // line 23
($context["item"] ?? null), "slide", []))) ? ("slide--text") : ("")), 4 => (($this->getAttribute(        // line 24
($context["settings"] ?? null), "layout", [])) ? (("slide--caption--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "layout", []))))) : ("")), 5 => (($this->getAttribute(        // line 25
($context["settings"] ?? null), "class", [])) ? ($this->getAttribute(($context["settings"] ?? null), "class", [])) : (""))];
        // line 29
        $context["content_classes"] = [0 => (($this->getAttribute(        // line 30
($context["settings"] ?? null), "detroy", [])) ? ("slide") : ("")), 1 => (( !$this->getAttribute(        // line 31
($context["settings"] ?? null), "detroy", [])) ? ("slide__content") : (""))];
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "  ";
        $this->displayBlock('slick_slide', $context, $blocks);
        $context["slide"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
";
        // line 44
        if ($this->getAttribute(($context["settings"] ?? null), "wrapper", [])) {
            // line 45
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
            // line 46
            if (twig_test_empty($this->getAttribute(($context["settings"] ?? null), "grid", []))) {
                echo "<div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
                echo ">";
            }
        }
        // line 48
        echo "
  ";
        // line 49
        if ($this->getAttribute(($context["item"] ?? null), "slide", [])) {
            // line 50
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 52
        echo "
  ";
        // line 53
        if ($this->getAttribute(($context["item"] ?? null), "caption", [])) {
            // line 54
            echo "    ";
            $this->displayBlock('slick_caption', $context, $blocks);
            // line 82
            echo "  ";
        }
        // line 83
        echo "
";
        // line 84
        if ($this->getAttribute(($context["settings"] ?? null), "wrapper", [])) {
            // line 85
            echo "  ";
            if (twig_test_empty($this->getAttribute(($context["settings"] ?? null), "grid", []))) {
                echo "</div>";
            }
            // line 86
            echo "  </div>
";
        }
    }

    // line 35
    public function block_slick_slide($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        if (($this->getAttribute(($context["settings"] ?? null), "split", []) &&  !$this->getAttribute(($context["settings"] ?? null), "unslick", []))) {
            // line 37
            echo "      <div class=\"slide__media\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "slide", [])), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 39
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "slide", [])), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "  ";
    }

    // line 54
    public function block_slick_caption($context, array $blocks = [])
    {
        // line 55
        echo "      ";
        if ($this->getAttribute(($context["settings"] ?? null), "fullwidth", [])) {
            echo "<div class=\"slide__constrained\">";
        }
        // line 56
        echo "
        <div class=\"slide__caption\">
          ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "overlay", [])) {
            // line 59
            echo "            <div class=\"slide__overlay\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "overlay", [])), "html", null, true);
            echo "</div>
            ";
            // line 60
            if ($this->getAttribute(($context["settings"] ?? null), "data", [])) {
                echo "<div class=\"slide__data\">";
            }
            // line 61
            echo "          ";
        }
        // line 62
        echo "
          ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "title", [])) {
            // line 64
            echo "            <h2 class=\"slide__title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "title", [])), "html", null, true);
            echo "</h2>
          ";
        }
        // line 66
        echo "
          ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "alt", [])) {
            // line 68
            echo "            <p class=\"slide__description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "alt", [])), "html", null, true);
            echo "</p>
          ";
        }
        // line 70
        echo "
          ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "data", [])), "html", null, true);
        echo "

          ";
        // line 73
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "link", [])) {
            // line 74
            echo "            <div class=\"slide__link\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "link", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 76
        echo "
          ";
        // line 77
        if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "overlay", []) && $this->getAttribute(($context["settings"] ?? null), "data", []))) {
            echo "</div>";
        }
        // line 78
        echo "        </div>

      ";
        // line 80
        if ($this->getAttribute(($context["settings"] ?? null), "fullwidth", [])) {
            echo "</div>";
        }
        // line 81
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  202 => 80,  198 => 78,  194 => 77,  191 => 76,  185 => 74,  183 => 73,  178 => 71,  175 => 70,  169 => 68,  167 => 67,  164 => 66,  158 => 64,  156 => 63,  153 => 62,  150 => 61,  146 => 60,  141 => 59,  139 => 58,  135 => 56,  130 => 55,  127 => 54,  123 => 41,  117 => 39,  111 => 37,  108 => 36,  105 => 35,  99 => 86,  94 => 85,  92 => 84,  89 => 83,  86 => 82,  83 => 54,  81 => 53,  78 => 52,  72 => 50,  70 => 49,  67 => 48,  60 => 46,  55 => 45,  53 => 44,  50 => 43,  46 => 35,  44 => 34,  42 => 31,  41 => 30,  40 => 29,  38 => 25,  37 => 24,  36 => 23,  35 => 22,  34 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/slick/templates/slick-slide.html.twig", "/home/wheavy/watkinsheavyhauling.com/modules/contrib/slick/templates/slick-slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 21, "block" => 35, "if" => 44];
        static $filters = ["clean_class" => 24, "escape" => 45];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
