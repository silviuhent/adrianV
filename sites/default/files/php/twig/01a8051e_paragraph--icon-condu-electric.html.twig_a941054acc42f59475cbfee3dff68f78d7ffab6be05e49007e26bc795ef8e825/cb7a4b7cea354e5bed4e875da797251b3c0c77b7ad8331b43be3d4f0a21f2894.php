<?php

/* themes/volt/templates/paragraphs/paragraph--icon-condu-electric.html.twig */
class __TwigTemplate_cba4679d5792d0b75e0e310983c20bf2dff9179b1739a3808628efa344e8ec15 extends Twig_Template
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
        $tags = array("set" => 41);
        $filters = array("clean_class" => 43);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 39
        echo "
";
        // line 41
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 43
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => ((        // line 44
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 47
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_class", array()), "html", null, true));
        echo "\">
  <div class=\"container_condu_electric\">
    <div";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
        <h3> ";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_icon", array()), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_titlu", array()), "html", null, true));
        echo "</h3>
        <div class=\"content_paragraph\">
          ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_continut", array()), "html", null, true));
        echo "
        </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/paragraphs/paragraph--icon-condu-electric.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 52,  60 => 50,  56 => 49,  50 => 47,  48 => 44,  47 => 43,  46 => 41,  43 => 39,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a paragraph.*/
/*  **/
/*  * Available variables:*/
/*  * - paragraph: Full paragraph entity.*/
/*  *   - id: The paragraph ID.*/
/*  *   - bundle: The type of the paragraph, for example, "image" or "text".*/
/*  *   - authorid: The user ID of the paragraph author.*/
/*  *   - createdtime: Formatted creation date. Preprocess functions can*/
/*  *     reformat it by calling format_date() with the desired parameters on*/
/*  *     $variables['paragraph']->getCreatedTime().*/
/*  * - content: All paragraph items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - paragraphs: The current template type (also known as a "theming hook").*/
/*  *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an*/
/*  *     "Image" it would result in "paragraphs--type--image". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a*/
/*  *     preview would result in: "paragraphs--view-mode--preview", and*/
/*  *     default: "paragraphs--view-mode--default".*/
/*  * - view_mode: View mode; for example, "preview" or "full".*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_paragraph()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {%*/
/* set classes = [*/
/* 'paragraph',*/
/* 'paragraph--type--' ~ paragraph.bundle|clean_class,*/
/* view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,*/
/* ]*/
/* %}*/
/* <div class="{{ content.field_class }}">*/
/*   <div class="container_condu_electric">*/
/*     <div{{ attributes.addClass(classes) }}>*/
/*         <h3> {{ content.field_icon }}{{ content.field_titlu }}</h3>*/
/*         <div class="content_paragraph">*/
/*           {{ content.field_continut }}*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
