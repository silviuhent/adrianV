<?php

/* themes/volt/templates/content/node--incarca-electric.html.twig */
class __TwigTemplate_10abd583ece2dda0c4e4df65af30284dddcae6bc14d44aea91971f7a0a8f9b4a extends Twig_Template
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
        $tags = array("if" => 76, "trans" => 87);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 73
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">

  ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 76
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 77
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
      <a href=\"";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 81
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 83
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 84
            echo "    <footer>
      ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
      <div";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true));
            echo ">
        ";
            // line 87
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 88
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 92
        echo "  <div class=\"banner_image slide_condu_electric\">
    ";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
        echo "
    <div class=\"condu_electric_abs\">
      <div class=\"content_block content\">
        <div class=\"title\">";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_banner_title", array()), "html", null, true));
        echo "</div>

        <div class=\"subtitle\">";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_banner_content", array()), "html", null, true));
        echo "</div>
      </div>
    </div>
  </div>
  <div";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
    <div class=\"video\">
      <div class=\"video_image\"></div>
        ";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_text_video", array()), "html", null, true));
        echo "
      <div class=\"clear\"></div>
      <div class=\"video_block\">
        ";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video", array()), "html", null, true));
        echo "
      </div>
    </div>
    <div class=\"middle_video_block\">
      <div class=\"incarca_title\">";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_titlu_incarca", array()), "html", null, true));
        echo "</div>
      <div class=\"incarca_content\">";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_descriere_incarca", array()), "html", null, true));
        echo "</div>
    </div>
    <div class=\"paragraph_incarca_blocks\">
      ";
        // line 116
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_descriere_moduri", array()), "html", null, true));
        echo "
    </div>
    <div class=\"ghid\">
      <div class=\"logo_ghid\"></div>
      ";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_ghid", array()), "html", null, true));
        echo "
    </div>
    <div class=\"statii_bottom_block\">
      ";
        // line 123
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_bloc_statie", array()), "html", null, true));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/content/node--incarca-electric.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 123,  154 => 120,  147 => 116,  141 => 113,  137 => 112,  130 => 108,  124 => 105,  118 => 102,  111 => 98,  106 => 96,  100 => 93,  97 => 92,  89 => 88,  87 => 87,  83 => 86,  79 => 85,  76 => 84,  74 => 83,  68 => 81,  60 => 78,  55 => 77,  53 => 76,  49 => 75,  43 => 73,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: The node entity with limited access to object properties and methods.*/
/*  *   Only method names starting with "get", "has", or "is" and a few common*/
/*  *   methods such as "id", "label", and "bundle" are available. For example:*/
/*  *   - node.getCreatedTime() will return the node creation timestamp.*/
/*  *   - node.hasField('field_example') returns TRUE if the node bundle includes*/
/*  *     field_example. (This does not indicate the presence of a value in this*/
/*  *     field.)*/
/*  *   - node.isPublished() will return whether the node is published or not.*/
/*  *   Calling other methods, such as node.delete(), will result in an exception.*/
/*  *   See \Drupal\node\Entity\Node for a full list of public properties and*/
/*  *   methods for the node object.*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  **/
/*  * @todo Remove the id attribute (or make it a class), because if that gets*/
/*  *   rendered twice on a page this is invalid CSS for example: two lists*/
/*  *   in different view modes.*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/* */
/*   {{ title_prefix }}*/
/*   {% if not page %}*/
/*     <h2{{ title_attributes }}>*/
/*       <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*     </h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/*   {% if display_submitted %}*/
/*     <footer>*/
/*       {{ author_picture }}*/
/*       <div{{ author_attributes }}>*/
/*         {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}*/
/*         {{ metadata }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/*   <div class="banner_image slide_condu_electric">*/
/*     {{ content.field_image }}*/
/*     <div class="condu_electric_abs">*/
/*       <div class="content_block content">*/
/*         <div class="title">{{ content.field_banner_title }}</div>*/
/* */
/*         <div class="subtitle">{{ content.field_banner_content }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div{{ content_attributes }}>*/
/*     <div class="video">*/
/*       <div class="video_image"></div>*/
/*         {{ content.field_text_video }}*/
/*       <div class="clear"></div>*/
/*       <div class="video_block">*/
/*         {{ content.field_video }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="middle_video_block">*/
/*       <div class="incarca_title">{{ content.field_titlu_incarca }}</div>*/
/*       <div class="incarca_content">{{ content.field_descriere_incarca }}</div>*/
/*     </div>*/
/*     <div class="paragraph_incarca_blocks">*/
/*       {{ content.field_descriere_moduri }}*/
/*     </div>*/
/*     <div class="ghid">*/
/*       <div class="logo_ghid"></div>*/
/*       {{ content.field_block_ghid }}*/
/*     </div>*/
/*     <div class="statii_bottom_block">*/
/*       {{ content.field_bloc_statie }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */