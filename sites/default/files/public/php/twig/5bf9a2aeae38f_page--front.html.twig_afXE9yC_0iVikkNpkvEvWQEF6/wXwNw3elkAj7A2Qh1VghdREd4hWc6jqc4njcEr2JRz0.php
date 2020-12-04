<?php

/* themes/watkins/templates/page--front.html.twig */
class __TwigTemplate_c8d3d4fa3577db3d9f661cfd93724fff5f7022cb454ba7854a9b5a3b51b66b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("date" => 148);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        echo "<section class=\"master-header\" id=\"sticktacular\">
  <div class=\"container\">
    <div class=\"col-sm-4 col-xs-0\">
      ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_menu", array()), "html", null, true));
        echo "
    </div>
    <div class=\"col-sm-4 col-xs-10\">
      ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo_area", array()), "html", null, true));
        echo "
    </div>
    <div class=\"col-sm-4 col-xs-2\">
      ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_menu", array()), "html", null, true));
        echo "
    </div>
  </div>
</section>
<section class=\"slider\">
  ";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
        echo "
</section>
<div class=\"homepage\">
<section class=\"callout-front\">
  <div class=\"container\">
    <div class=\"col-sm-8 col-sm-offset-2\">
      ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "callout", array()), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "ourServicesData", array()), "html", null, true));
        echo "
    </div>
  </div>
</section>
<section class=\"secondCallout\">
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondCallout", array()), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "whatWeDoData", array()), "html", null, true));
        echo "
    </div>
  </div>
</section>
<section class=\"testimonials\">
  <div class=\"container\">
    <div class=\"col-sm-6 col-sm-offset-3\">
      ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "testimonials", array()), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "prefooter1", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "prefooter2", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "prefooter3", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "prefooter4", array()), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "Y"), "html", null, true));
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
        return array (  178 => 148,  166 => 139,  160 => 136,  154 => 133,  148 => 130,  136 => 121,  126 => 114,  106 => 97,  96 => 90,  77 => 74,  68 => 68,  60 => 63,  54 => 60,  48 => 57,  43 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/watkins/templates/page--front.html.twig", "/home/watkinsmaster/watkinsheavyhauling.com/themes/watkins/templates/page--front.html.twig");
    }
}
