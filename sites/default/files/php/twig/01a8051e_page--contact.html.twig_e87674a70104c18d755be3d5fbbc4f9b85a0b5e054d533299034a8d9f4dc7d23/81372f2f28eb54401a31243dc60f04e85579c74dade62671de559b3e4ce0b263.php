<?php

/* themes/volt/templates/layout/page--contact.html.twig */
class __TwigTemplate_f76497d59c33d917d1a8b6ec9049ecdb3a217ad3ad9b3aa4aaf5c83fd06f7074 extends Twig_Template
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
        $tags = array("include" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        echo "<div class=\"page_volt container-fluid\" id=\"page_layout\">
  ";
        // line 2
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/layout/header.html.twig"), "themes/volt/templates/layout/page--contact.html.twig", 2)->display($context);
        // line 3
        echo "  <div class=\"content_wrapper\">
    <div class=\"container-fluid\">
      <iframe id=\"contact_map\" src=\"http://maps.google.com/maps?q=12.927923,77.627108&z=15&output=embed\"></iframe>
      <div class=\"messages alert alert-dismissible\" role=\"alert\">
        ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
      </div>
      <div class=\"container contact_page\">
        <h1>";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
        echo "</h1>
        ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
  ";
        // line 15
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/layout/footer.html.twig"), "themes/volt/templates/layout/page--contact.html.twig", 15)->display($context);
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/layout/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  71 => 15,  64 => 11,  60 => 10,  54 => 7,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div class="page_volt container-fluid" id="page_layout">*/
/*   {% include directory ~ '/templates/layout/header.html.twig' %}*/
/*   <div class="content_wrapper">*/
/*     <div class="container-fluid">*/
/*       <iframe id="contact_map" src="http://maps.google.com/maps?q=12.927923,77.627108&z=15&output=embed"></iframe>*/
/*       <div class="messages alert alert-dismissible" role="alert">*/
/*         {{ page.highlighted }}*/
/*       </div>*/
/*       <div class="container contact_page">*/
/*         <h1>{{ page.title }}</h1>*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% include directory ~ '/templates/layout/footer.html.twig' %}*/
/* </div>*/
/* */
