<?php

/* themes/volt/templates/paragraphs/paragraph--statii.html.twig */
class __TwigTemplate_2c84d982ef8808e5a882ff4e553102e7801a1fafd9a91c62a62e0810e0bde580 extends Twig_Template
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
        $tags = array("set" => 41, "if" => 49);
        $filters = array("clean_class" => 43, "trim" => 48, "striptags" => 48, "render" => 48);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'trim', 'striptags', 'render'),
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
        echo "
";
        // line 48
        $context["class"] = trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_clasa", array()))));
        // line 49
        if (((isset($context["class"]) ? $context["class"] : null) == "left")) {
            // line 50
            echo "  <div class=\"statie_left\">
    <div class=\"content_block\" data-aos=\"fade-right\" data-aos-once=\"true\" data-aos-duration=\"2000\">
      ";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_descriere_statie", array()), "html", null, true));
            echo "
    </div>
    <div class=\"imagine_statie\">
      ";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_imagine_stati", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        } else {
            // line 59
            echo "  <div class=\"statie_right\">
    <div class=\"imagine_statie\">
      ";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_imagine_stati", array()), "html", null, true));
            echo "
    </div>
    <div class=\"content_block\" data-aos=\"fade-left\" data-aos-once=\"true\" data-aos-duration=\"2000\">
      ";
            // line 64
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_descriere_statie", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/paragraphs/paragraph--statii.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 64,  78 => 61,  74 => 59,  67 => 55,  61 => 52,  57 => 50,  55 => 49,  53 => 48,  50 => 47,  48 => 44,  47 => 43,  46 => 41,  43 => 39,);
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
/* */
/* {% set class = content.field_clasa|render|striptags|trim %}*/
/* {% if class == "left" %}*/
/*   <div class="statie_left">*/
/*     <div class="content_block" data-aos="fade-right" data-aos-once="true" data-aos-duration="2000">*/
/*       {{ content.field_descriere_statie }}*/
/*     </div>*/
/*     <div class="imagine_statie">*/
/*       {{ content.field_imagine_stati }}*/
/*     </div>*/
/*   </div>*/
/* {% else %}*/
/*   <div class="statie_right">*/
/*     <div class="imagine_statie">*/
/*       {{ content.field_imagine_stati }}*/
/*     </div>*/
/*     <div class="content_block" data-aos="fade-left" data-aos-once="true" data-aos-duration="2000">*/
/*       {{ content.field_descriere_statie }}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
