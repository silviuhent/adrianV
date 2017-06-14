<?php

/* themes/volt/templates/navigation/links--language-block.html.twig */
class __TwigTemplate_a3616465ecc9d409e4c0bfb3397761e038357588e2f2c6281cff5cf5f9f5b43e extends Twig_Template
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
        $tags = array("set" => 35, "if" => 40, "for" => 49);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
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

        // line 35
        $context["classes"] = array(0 => "nav", 1 => "navbar-nav");
        // line 40
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 41
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 42
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array())) {
                    // line 43
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 45
                    echo "<h2";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 48
            echo "<ul";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "<li";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">";
                // line 51
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 52
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                } elseif ($this->getAttribute(                // line 53
$context["item"], "text_attributes", array())) {
                    // line 54
                    echo "<span";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</span>";
                } else {
                    // line 56
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                }
                // line 58
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/navigation/links--language-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 60,  97 => 58,  94 => 56,  87 => 54,  85 => 53,  83 => 52,  81 => 51,  77 => 50,  73 => 49,  69 => 48,  61 => 45,  51 => 43,  49 => 42,  47 => 41,  45 => 40,  43 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a set of links.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Attributes for the UL containing the list of links.*/
/*  * - links: Links to be output.*/
/*  *   Each link will have the following elements:*/
/*  *   - title: The link text.*/
/*  *   - href: The link URL. If omitted, the 'title' is shown as a plain text*/
/*  *     item in the links list. If 'href' is supplied, the entire link is passed*/
/*  *     to l() as its $options parameter.*/
/*  *   - attributes: (optional) HTML attributes for the anchor, or for the <span>*/
/*  *     tag if no 'href' is supplied.*/
/*  * - heading: (optional) A heading to precede the links.*/
/*  *   - text: The heading text.*/
/*  *   - level: The heading level (e.g. 'h2', 'h3').*/
/*  *   - attributes: (optional) A keyed list of attributes for the heading.*/
/*  *   If the heading is a string, it will be used as the text of the heading and*/
/*  *   the level will default to 'h2'.*/
/*  **/
/*  *   Headings should be used on navigation menus and any list of links that*/
/*  *   consistently appears on multiple pages. To make the heading invisible use*/
/*  *   the 'visually-hidden' CSS class. Do not use 'display:none', which*/
/*  *   removes it from screen readers and assistive technology. Headings allow*/
/*  *   screen reader and keyboard only users to navigate to or skip the links.*/
/*  *   See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @see template_preprocess_links()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'nav',*/
/*     'navbar-nav',*/
/*   ]*/
/* %}*/
/* {% if links -%}*/
/*   {%- if heading -%}*/
/*     {%- if heading.level -%}*/
/*       <{{ heading.level }}{{ heading.attributes }}>{{ heading.text }}</{{ heading.level }}>*/
/*     {%- else -%}*/
/*       <h2{{ heading.attributes }}>{{ heading.text }}</h2>*/
/*     {%- endif -%}*/
/*   {%- endif -%}*/
/*   <ul{{ attributes.addClass(classes) }}>*/
/*     {%- for item in links -%}*/
/*       <li{{ item.attributes }}>*/
/*         {%- if item.link -%}*/
/*           {{ item.link }}*/
/*         {%- elseif item.text_attributes -%}*/
/*           <span{{ item.text_attributes }}>{{ item.text }}</span>*/
/*         {%- else -%}*/
/*           {{ item.text }}*/
/*         {%- endif -%}*/
/*       </li>*/
/*     {%- endfor -%}*/
/*   </ul>*/
/* {%- endif %}*/
/* */
