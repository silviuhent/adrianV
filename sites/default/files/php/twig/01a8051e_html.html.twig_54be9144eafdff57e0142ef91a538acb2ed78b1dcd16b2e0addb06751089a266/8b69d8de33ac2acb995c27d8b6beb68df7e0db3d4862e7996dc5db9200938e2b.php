<?php

/* themes/volt/templates/layout/html.html.twig */
class __TwigTemplate_83302fa38cbbf98364f1dac4f6ab914f51c4bde97b01bd37b14d444571e228a8 extends Twig_Template
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
        $filters = array("raw" => 29, "safe_join" => 30, "t" => 42);
        $functions = array("attach_library" => 34);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw', 'safe_join', 't'),
                array('attach_library')
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

        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
    <css-placeholder token=\"";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("volt/js.volt"), "html", null, true));
        echo "
  </head>
  <body";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 41
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <div id=\"loading\"></div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  93 => 46,  89 => 45,  85 => 44,  80 => 42,  77 => 41,  73 => 36,  68 => 34,  64 => 33,  60 => 32,  55 => 30,  51 => 29,  46 => 27,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain one or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <meta name="viewport" content="width=device-width, user-scalable=no">*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*     {{ attach_library('volt/js.volt') }}*/
/*   </head>*/
/*   <body{{ attributes }}>*/
/*     {#*/
/*       Keyboard navigation/accessibility link to main content section in*/
/*       page.html.twig.*/
/*     #}*/
/*     <a href="#main-content" class="visually-hidden focusable">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*     <div id="loading"></div>*/
/*   </body>*/
/* </html>*/
/* */
