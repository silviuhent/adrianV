<?php

/* themes/volt/templates/layout/page--node--17.html.twig */
class __TwigTemplate_acc142f2534e0ddb25b849ad7f78df955f8eada720046b7450613e477c132a1d extends Twig_Template
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
        $tags = array("include" => 2, "if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"page_volt masini_first container-fluid\" id=\"page_layout\">
  ";
        // line 2
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/layout/header.html.twig"), "themes/volt/templates/layout/page--node--17.html.twig", 2)->display($context);
        // line 3
        echo "  <div class=\"content_wrapper\">
    <div class=\"container-fluid\">
      <div class=\"messages alert alert-dismissible\" role=\"alert\">
        ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
      </div>
      <div class=\"content_content condu_electric\">
        <h1>";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
        echo "</h1>
        <div class=\"container\">
          <div class=\"content_content\">
            <div class=\"inner_content\">
              ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </div>
            ";
        // line 15
        if ((isset($context["filter_cars"]) ? $context["filter_cars"] : null)) {
            // line 16
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["filter_cars"]) ? $context["filter_cars"] : null), "html", null, true));
            echo "
            ";
        }
        // line 18
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 23
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/layout/footer.html.twig"), "themes/volt/templates/layout/page--node--17.html.twig", 23)->display($context);
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/layout/page--node--17.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  86 => 23,  79 => 18,  73 => 16,  71 => 15,  66 => 13,  59 => 9,  53 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div class="page_volt masini_first container-fluid" id="page_layout">*/
/*   {% include directory ~ '/templates/layout/header.html.twig' %}*/
/*   <div class="content_wrapper">*/
/*     <div class="container-fluid">*/
/*       <div class="messages alert alert-dismissible" role="alert">*/
/*         {{ page.highlighted }}*/
/*       </div>*/
/*       <div class="content_content condu_electric">*/
/*         <h1>{{ page.title }}</h1>*/
/*         <div class="container">*/
/*           <div class="content_content">*/
/*             <div class="inner_content">*/
/*               {{ page.content }}*/
/*             </div>*/
/*             {% if filter_cars %}*/
/*                 {{ filter_cars }}*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% include directory ~ '/templates/layout/footer.html.twig' %}*/
/* </div>*/
/* */
