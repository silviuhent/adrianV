<?php

/* block.html.twig */
class __TwigTemplate_4e51c0a3009461c5cb19ffd6a257b9ec64b6f2cfe82100b5e3c4ef47b0500afb extends Twig_Template
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
        $tags = array("block" => 28, "if" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'if'),
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

        // line 28
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "  ";
        if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) == "block-volt-branding")) {
            // line 30
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        } else {
            // line 32
            echo "
    ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    ";
            // line 34
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 35
                echo "      <h2";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</h2>
    ";
            }
            // line 37
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
<div class=\"";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()), "html", null, true));
            echo "\">
      ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  81 => 38,  76 => 37,  68 => 35,  66 => 34,  62 => 33,  59 => 32,  53 => 30,  50 => 29,  44 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a block.*/
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
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if attributes.id == "block-volt-branding" %}*/
/*     {{ content }}*/
/*   {% else %}*/
/* */
/*     {{ title_prefix }}*/
/*     {% if label %}*/
/*       <h2{{ title_attributes }}>{{ label }}</h2>*/
/*     {% endif %}*/
/*     {{ title_suffix }}*/
/* <div class="{{ attributes.id}}">*/
/*       {{ content }}*/
/* </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
