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

/* modules/contrib/slick/templates/slick.html.twig */
class __TwigTemplate_402a1c2fa0a16a848794a69a2045ab3dc8a848019f3f525b75cc9ae96c3af2e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 31
        $context["classes"] = [0 => "slick", 1 => (($this->getAttribute(        // line 33
($context["settings"] ?? null), "unslick", [])) ? ("unslick") : ("")), 2 => ((((        // line 34
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "blazy", []))) ? ("blazy") : ("")), 3 => (($this->getAttribute(        // line 35
($context["settings"] ?? null), "vertical", [])) ? ("slick--vertical") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 36
($context["settings"] ?? null), "attributes", []), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "attributes", []), "class", [])), " ")) : ("")), 5 => (($this->getAttribute(        // line 37
($context["settings"] ?? null), "skin", [])) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 6 => ((twig_in_filter("boxed", $this->getAttribute(        // line 38
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--boxed") : ("")), 7 => ((twig_in_filter("split", $this->getAttribute(        // line 39
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--split") : ("")), 8 => (($this->getAttribute(        // line 40
($context["settings"] ?? null), "optionset", [])) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "optionset", []))))) : ("")), 9 => ((        // line 41
(isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) ? ("slick--has-arrow-down") : ("")), 10 => (($this->getAttribute(        // line 42
($context["settings"] ?? null), "asNavFor", [])) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["display"] ?? null))))) : ("")), 11 => ((($this->getAttribute(        // line 43
($context["settings"] ?? null), "slidesToShow", []) > 1)) ? ("slick--multiple-view") : ("")), 12 => ((($this->getAttribute(        // line 44
($context["settings"] ?? null), "count", []) <= $this->getAttribute(($context["settings"] ?? null), "slidesToShow", []))) ? ("slick--less") : ("")), 13 => ((((        // line 45
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "media_switch", []))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 14 => ((((        // line 46
($context["display"] ?? null) == "thumbnail") && $this->getAttribute(($context["settings"] ?? null), "thumbnail_caption", []))) ? ("slick--has-caption") : (""))];
        // line 50
        $context["arrow_classes"] = [0 => "slick__arrow", 1 => (($this->getAttribute(        // line 52
($context["settings"] ?? null), "vertical", [])) ? ("slick__arrow--v") : ("")), 2 => (($this->getAttribute(        // line 53
($context["settings"] ?? null), "skin_arrows", [])) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_arrows", []))))) : (""))];
        // line 56
        echo "
<div";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 58
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 59
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "slick__slider"], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('slick_content', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 69
            echo "    </div>
    ";
            // line 70
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 82
            echo "  ";
        }
        // line 83
        echo "</div>
";
    }

    // line 62
    public function block_slick_content($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  ";
    }

    // line 70
    public function block_slick_arrow($context, array $blocks = [])
    {
        // line 71
        echo "      <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["arrow_attributes"] ?? null), "addClass", [0 => ($context["arrow_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", [])), "<a><em><span><strong><button><div>"));
        echo "
        ";
        // line 73
        if ((isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) {
            // line 74
            echo "          <button";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrow_down_attributes"] ?? null), "addClass", [0 => "slick-down"], "method"), "setAttribute", [0 => "type", 1 => "button"], "method"), "setAttribute", [0 => "data-target", 1 => $this->getAttribute(            // line 76
($context["settings"] ?? null), "downArrowTarget", [])], "method"), "setAttribute", [0 => "data-offset", 1 => $this->getAttribute(            // line 77
($context["settings"] ?? null), "downArrowOffset", [])], "method")), "html", null, true);
            echo "></button>
        ";
        }
        // line 79
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", [])), "<a><em><span><strong><button><div>"));
        echo "
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 79,  130 => 77,  129 => 76,  127 => 74,  125 => 73,  121 => 72,  116 => 71,  113 => 70,  109 => 66,  100 => 64,  95 => 63,  92 => 62,  87 => 83,  84 => 82,  82 => 70,  79 => 69,  77 => 68,  74 => 67,  72 => 62,  69 => 61,  63 => 59,  61 => 58,  57 => 57,  54 => 56,  52 => 53,  51 => 52,  50 => 50,  48 => 46,  47 => 45,  46 => 44,  45 => 43,  44 => 42,  43 => 41,  42 => 40,  41 => 39,  40 => 38,  39 => 37,  38 => 36,  37 => 35,  36 => 34,  35 => 33,  34 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/slick/templates/slick.html.twig", "/home/wheavy/watkinsheavyhauling.com/modules/contrib/slick/templates/slick.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 58, "block" => 62, "for" => 63];
        static $filters = ["join" => 36, "clean_class" => 37, "escape" => 57, "raw" => 72, "striptags" => 72];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['join', 'clean_class', 'escape', 'raw', 'striptags'],
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
