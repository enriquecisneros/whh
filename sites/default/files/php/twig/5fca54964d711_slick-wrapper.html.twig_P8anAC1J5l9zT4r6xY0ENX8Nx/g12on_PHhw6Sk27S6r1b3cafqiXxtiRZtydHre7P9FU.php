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

/* modules/contrib/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_6d0d27c50ed4f2ef7df68eb6ef42c5f1e17f1b641cea5897dba3edad1c899d48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        $context["classes"] = [0 => "slick-wrapper", 1 => (($this->getAttribute(        // line 18
($context["settings"] ?? null), "nav", [])) ? ("slick-wrapper--asnavfor") : ("")), 2 => (($this->getAttribute(        // line 19
($context["settings"] ?? null), "skin", [])) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 3 => (($this->getAttribute(        // line 20
($context["settings"] ?? null), "skin_thumbnail", [])) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_thumbnail", []))))) : ("")), 4 => (($this->getAttribute(        // line 21
($context["settings"] ?? null), "vertical", [])) ? ("slick-wrapper--v") : ("")), 5 => (($this->getAttribute(        // line 22
($context["settings"] ?? null), "vertical_tn", [])) ? ("slick-wrapper--v-tn") : ("")), 6 => (($this->getAttribute(        // line 23
($context["settings"] ?? null), "thumbnail_position", [])) ? (("slick-wrapper--tn-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "thumbnail_position", []))))) : ("")), 7 => ((twig_in_filter("over", $this->getAttribute(        // line 24
($context["settings"] ?? null), "thumbnail_position", []))) ? ("slick-wrapper--tn-overlay") : ("")), 8 => ((twig_in_filter("over", $this->getAttribute(        // line 25
($context["settings"] ?? null), "thumbnail_position", []))) ? (("slick-wrapper--tn-" . twig_replace_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "thumbnail_position", [])), ["over-" => ""]))) : (""))];
        // line 28
        echo "
";
        // line 29
        ob_start(function () { return ''; });
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start(function () { return ''; });
        // line 36
        echo "  ";
        if ($this->getAttribute(($context["settings"] ?? null), "nav", [])) {
            // line 37
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "id"), "html", null, true);
            echo ">
      ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } else {
            // line 41
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 41,  75 => 38,  70 => 37,  67 => 36,  65 => 35,  62 => 34,  52 => 31,  47 => 30,  45 => 29,  42 => 28,  40 => 25,  39 => 24,  38 => 23,  37 => 22,  36 => 21,  35 => 20,  34 => 19,  33 => 18,  32 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/slick/templates/slick-wrapper.html.twig", "/home/wheavy/watkinsheavyhauling.com/modules/contrib/slick/templates/slick-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "for" => 30, "spaceless" => 35, "if" => 36];
        static $filters = ["clean_class" => 19, "replace" => 25, "escape" => 31, "without" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
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
