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

/* themes/watkins/templates/page--front.html.twig */
class __TwigTemplate_cc86bef56fd12d57e8a2a3244e1dea27185387f1785317f2a2d89e7d9cc5e084 extends \Twig\Template
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
<section class=\"slider\">
  ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
        echo "
</section>
<div class=\"homepage\">
<section class=\"callout-front\">
  <div class=\"container\">
    <div class=\"col-sm-8 col-sm-offset-2\">
      ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "callout", [])), "html", null, true);
        echo "    
    </div>
  </div>
</section>
<section class=\"our-services\">
  <div class=\"container\">
    <div class=\"col-sm-12\">
      <div class=\"seper\"></div>
        <h2 class=\"page__title\">our services</h2>
      <div class=\"seper\"></div>
    </div>
  </div>
</section>
<section class=\"sevicesData\">
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "ourServicesData", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
<section class=\"secondCallout\">
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondCallout", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
<section class=\"whatWeDoTitle\">
  <div class=\"container\">
    <div class=\"col-sm-12 text-center\">
      <div class=\"seper\"></div>
        <h2 class=\"page__title\">Our Fleet</h2>
      <div class=\"seper\"></div>
  </div>
    </div>
  
</section>
<section class=\"whatWeDoData\">
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "whatWeDoData", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
<section class=\"testimonials\">
  <div class=\"container\">
    <div class=\"col-sm-6 col-sm-offset-3\">
      ";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "testimonials", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
</div>
<section class=\"prefooter\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 136
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter3", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 139
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
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["post"] ?? null), "published_at", [])), "Y"), "html", null, true);
        echo " Watkins Heavy Hauling, Meban NC USA</p>
      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/watkins/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 148,  155 => 139,  149 => 136,  143 => 133,  137 => 130,  125 => 121,  115 => 114,  95 => 97,  85 => 90,  66 => 74,  57 => 68,  49 => 63,  43 => 60,  37 => 57,  32 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/watkins/templates/page--front.html.twig", "/home/wheavy/watkinsheavyhauling.com/themes/watkins/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 57, "date" => 148];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
