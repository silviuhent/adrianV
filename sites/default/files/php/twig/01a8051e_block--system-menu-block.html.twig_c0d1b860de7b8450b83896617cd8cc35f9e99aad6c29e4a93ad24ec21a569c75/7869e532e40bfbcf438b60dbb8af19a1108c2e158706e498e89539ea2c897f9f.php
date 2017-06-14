<?php

/* themes/volt/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_9f1628408f824e359cec92e180b890b2755b013f4f9a5a19b07f4199ff58fb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 34, "block" => 36, "if" => 37);
        $filters = array("clean_id" => 34);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_id'),
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

        // line 34
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "  ";
        if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) == "block-volt-main-menu")) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        } elseif (($this->getAttribute(        // line 39
(isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) == "block-social")) {
            // line 40
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        } elseif (($this->getAttribute(        // line 41
(isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) != "block-social")) {
            // line 42
            echo "    ";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
                // line 43
                echo "      <div class=\"col-md-4\">
        <h4>";
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
                echo "</h4>
    ";
            }
            // line 46
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    ";
            // line 47
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
                // line 48
                echo "      </div>
    ";
            }
            // line 50
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 50,  90 => 48,  88 => 47,  83 => 46,  78 => 44,  75 => 43,  72 => 42,  70 => 41,  65 => 40,  63 => 39,  58 => 38,  55 => 37,  49 => 36,  46 => 35,  44 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML a[[[[[;ttributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  *//* */
/* #}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* */
/* {% block content %}*/
/*   {% if attributes.id == "block-volt-main-menu" %}*/
/*     {{ content }}*/
/*   {% elseif attributes.id == "block-social" %}*/
/*     {{ content }}*/
/*   {% elseif attributes.id != "block-social" %}*/
/*     {% if configuration.label_display %}*/
/*       <div class="col-md-4">*/
/*         <h4>{{ configuration.label }}</h4>*/
/*     {% endif %}*/
/*         {{ content }}*/
/*     {% if configuration.label_display %}*/
/*       </div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
