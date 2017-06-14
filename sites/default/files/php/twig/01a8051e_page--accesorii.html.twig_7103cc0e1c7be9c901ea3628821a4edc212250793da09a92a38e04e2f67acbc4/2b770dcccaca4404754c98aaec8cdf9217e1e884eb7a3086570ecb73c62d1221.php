<?php

/* themes/volt/templates/layout/page--accesorii.html.twig */
class __TwigTemplate_75adef132d7309ae362622e5e69fa42f4fa751af6f5f99be31de62e96e0f9fe0 extends Twig_Template
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
        $tags = array("include" => 49);
        $filters = array("raw" => 60);
        $functions = array("file_url" => 56);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array('raw'),
                array('file_url')
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

        // line 46
        echo "
<div class=\"page_volt accesorii container-fluid\" id=\"page_layout\">
<div class=\"large_scale\">
  ";
        // line 49
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/layout/header.html.twig"), "themes/volt/templates/layout/page--accesorii.html.twig", 49)->display($context);
        // line 50
        echo "    <div class=\"content_wrapper\">
      <div class=\"container-fluid\">
        <div class=\"messages alert alert-dismissible\" role=\"alert\">
          ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
        </div>
        <div class=\"content_content accessories\">
          <div class=\"slide_condu_electric container\"><img src=\"";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_banner_masina", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\"/>
            <div class=\"condu_electric_abs\">
              <div class=\"content_block content\">
                <p class=\"title\">";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_titlu_incarca", array()), "value", array()), "html", null, true));
        echo "</p>
                <p>";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "value", array())));
        echo "</p>
              </div>
            </div>
          </div>
          <div id=\"side-menu\">
            <div class=\"acc_menus\">
              <div class=\"panou\"></div>
              <ul class=\"acc_menus_container\"></ul>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"content_content\">
              ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 79
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/layout/footer.html.twig"), "themes/volt/templates/layout/page--accesorii.html.twig", 79)->display($context);
        // line 80
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/layout/page--accesorii.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 80,  96 => 79,  86 => 72,  71 => 60,  67 => 59,  61 => 56,  55 => 53,  50 => 50,  48 => 49,  43 => 46,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <div class="page_volt accesorii container-fluid" id="page_layout">*/
/* <div class="large_scale">*/
/*   {% include directory ~ '/templates/layout/header.html.twig' %}*/
/*     <div class="content_wrapper">*/
/*       <div class="container-fluid">*/
/*         <div class="messages alert alert-dismissible" role="alert">*/
/*           {{ page.highlighted }}*/
/*         </div>*/
/*         <div class="content_content accessories">*/
/*           <div class="slide_condu_electric container"><img src="{{ file_url(node.field_banner_masina.entity.fileuri) }}"/>*/
/*             <div class="condu_electric_abs">*/
/*               <div class="content_block content">*/
/*                 <p class="title">{{ node.field_titlu_incarca.value }}</p>*/
/*                 <p>{{ node.body.value|raw }}</p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div id="side-menu">*/
/*             <div class="acc_menus">*/
/*               <div class="panou"></div>*/
/*               <ul class="acc_menus_container"></ul>*/
/*             </div>*/
/*           </div>*/
/*           <div class="container">*/
/*             <div class="content_content">*/
/*               {{ page.content }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% include directory ~ '/templates/layout/footer.html.twig' %}*/
/* </div>*/
/* */
