<?php

/* themes/volt/templates/content/node--masini.html.twig */
class __TwigTemplate_0fd846c5c532b004eabfd6760bbcf00f744368ef4ec55de04c3400bb9295a2fe extends Twig_Template
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
        $filters = array("render" => 100, "raw" => 107);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array('render', 'raw'),
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
        echo "<article";
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
        echo "  <div class=\"descriere_masina\" id=\"invalid_data\">
    <div class=\"field_logo\">
      <div class=\"logo_masina\">";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_logo_masina", array()), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</div>
    </div>
    <div class=\"description\">";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_specificatii_masina", array()), "html", null, true));
        echo "</div>
  </div>
  <h3 class=\"title_masini\"></h3>
  <div class=\"specificatii_masini\">
    ";
        // line 100
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tip_", array()))) {
            // line 101
            echo "      <div class=\"car_field tip_masina\">
        ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tip_", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 105
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_b", array()))) {
            // line 106
            echo "      <div class=\"car_field baterie\">
        ";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_b", array()), "html", null, true));
            echo " <div id=\"tip_baterie\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_tip_baterie", array()), "value", array())));
            echo "</div>
      </div>
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_autonomie", array()))) {
            // line 112
            echo "      <div class=\"car_field autonomie\">
        ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_autonomie", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 116
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_b", array()))) {
            // line 117
            echo "      <div class=\"car_field capacitate_maxima_incarcare\">
        ";
            // line 118
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_capacitate_incarcare", array()))) {
                // line 119
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_capacitate_incarcare", array()), "html", null, true));
                echo "
        ";
            }
            // line 121
            echo "      </div>
    ";
        }
        // line 123
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_b", array()))) {
            // line 124
            echo "      <div class=\"car_field timp_incarcare\">
        <div>
          <div class=\"timp_incarcare_title\"></div>
          <div id=\"timp_incarcare\" class=\"item\"></div>
        </div>
      </div>
    ";
        }
        // line 131
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_b", array()))) {
            // line 132
            echo "      <div class=\"car_field consum\">
        <div>
          <div class=\"consum_title\">

          </div>
          <div class=\"item\" id=\"consum\"></div>
        </div>
      </div>
    ";
        }
        // line 141
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tip_cablu", array()))) {
            // line 142
            echo "      <div class=\"car_field tip_cablu\">
        ";
            // line 143
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tip_cablu", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 146
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_locatie_alimentare_masina", array()))) {
            // line 147
            echo "      <div class=\"car_field locatie_incarcare\">
        ";
            // line 148
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_locatie_alimentare_masina", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 151
        echo "    ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_pret_kwh", array()))) {
            // line 152
            echo "
      <div class=\"car_field pret_kwh\">

      </div>
      <input type=\"hidden\" id=\"pret_kwh\" value=\"";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_pret_kwh", array()), "value", array()), "html", null, true));
            echo "\" />
    ";
        }
        // line 158
        echo "  </div>

  <div id=\"prompt\"></div>

  <div class=\"chargers\">
    <div class=\"tabs\">
      <div class=\"tab text_recomandare\"></div>
      <div class=\"tab_block\"> 
        <div class=\"tab tab_home\"></div>
        <div class=\"tab tab_business\"></div>
      </div>
    </div>
    <div class=\"tab_content\">
      ";
        // line 171
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tab_statie", array()), "html", null, true));
        echo "
    </div>
  </div>
  ";
        // line 174
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_url_configureaza_statia", array()))) {
            // line 175
            echo "    <div class=\"statii_links\">
      <div class=\"link_statie_left\">
        ";
            // line 177
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_url_configureaza_statia", array()), "html", null, true));
            echo "
        <img src=\"/themes/volt/images/configureaza_statie.png\"/>
      </div>
      <div class=\"link_statie_right\">
        ";
            // line 181
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_url_contact_oferta", array()), "html", null, true));
            echo "
        <img src=\"/themes/volt/images/contact_statie.png\"/>
      </div>
    </div>
  ";
        }
        // line 186
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/content/node--masini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 186,  269 => 181,  262 => 177,  258 => 175,  256 => 174,  250 => 171,  235 => 158,  230 => 156,  224 => 152,  221 => 151,  215 => 148,  212 => 147,  209 => 146,  203 => 143,  200 => 142,  197 => 141,  186 => 132,  183 => 131,  174 => 124,  171 => 123,  167 => 121,  161 => 119,  159 => 118,  156 => 117,  153 => 116,  147 => 113,  144 => 112,  142 => 111,  139 => 110,  131 => 107,  128 => 106,  125 => 105,  119 => 102,  116 => 101,  114 => 100,  107 => 96,  101 => 94,  97 => 92,  89 => 88,  87 => 87,  83 => 86,  79 => 85,  76 => 84,  74 => 83,  68 => 81,  60 => 78,  55 => 77,  53 => 76,  49 => 75,  43 => 73,);
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
/* <article{{ attributes }}>*/
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
/*   <div class="descriere_masina" id="invalid_data">*/
/*     <div class="field_logo">*/
/*       <div class="logo_masina">{{ content.field_logo_masina }}{{ label }}</div>*/
/*     </div>*/
/*     <div class="description">{{ content.field_specificatii_masina }}</div>*/
/*   </div>*/
/*   <h3 class="title_masini"></h3>*/
/*   <div class="specificatii_masini">*/
/*     {% if content.field_tip_|render %}*/
/*       <div class="car_field tip_masina">*/
/*         {{ content.field_tip_ }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_b|render %}*/
/*       <div class="car_field baterie">*/
/*         {{ content.field_b }} <div id="tip_baterie">{{ node.field_tip_baterie.value|raw }}</div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if content.field_autonomie|render %}*/
/*       <div class="car_field autonomie">*/
/*         {{ content.field_autonomie }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_b|render %}*/
/*       <div class="car_field capacitate_maxima_incarcare">*/
/*         {% if content.field_capacitate_incarcare|render %}*/
/*           {{ content.field_capacitate_incarcare }}*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_b|render %}*/
/*       <div class="car_field timp_incarcare">*/
/*         <div>*/
/*           <div class="timp_incarcare_title"></div>*/
/*           <div id="timp_incarcare" class="item"></div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_b|render %}*/
/*       <div class="car_field consum">*/
/*         <div>*/
/*           <div class="consum_title">*/
/* */
/*           </div>*/
/*           <div class="item" id="consum"></div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_tip_cablu|render %}*/
/*       <div class="car_field tip_cablu">*/
/*         {{ content.field_tip_cablu }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_locatie_alimentare_masina|render %}*/
/*       <div class="car_field locatie_incarcare">*/
/*         {{ content.field_locatie_alimentare_masina }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if content.field_pret_kwh|render %}*/
/* */
/*       <div class="car_field pret_kwh">*/
/* */
/*       </div>*/
/*       <input type="hidden" id="pret_kwh" value="{{ node.field_pret_kwh.value }}" />*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <div id="prompt"></div>*/
/* */
/*   <div class="chargers">*/
/*     <div class="tabs">*/
/*       <div class="tab text_recomandare"></div>*/
/*       <div class="tab_block"> */
/*         <div class="tab tab_home"></div>*/
/*         <div class="tab tab_business"></div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="tab_content">*/
/*       {{ content.field_tab_statie }}*/
/*     </div>*/
/*   </div>*/
/*   {% if content.field_url_configureaza_statia|render %}*/
/*     <div class="statii_links">*/
/*       <div class="link_statie_left">*/
/*         {{ content.field_url_configureaza_statia }}*/
/*         <img src="/themes/volt/images/configureaza_statie.png"/>*/
/*       </div>*/
/*       <div class="link_statie_right">*/
/*         {{ content.field_url_contact_oferta }}*/
/*         <img src="/themes/volt/images/contact_statie.png"/>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* </article>*/
/* */
