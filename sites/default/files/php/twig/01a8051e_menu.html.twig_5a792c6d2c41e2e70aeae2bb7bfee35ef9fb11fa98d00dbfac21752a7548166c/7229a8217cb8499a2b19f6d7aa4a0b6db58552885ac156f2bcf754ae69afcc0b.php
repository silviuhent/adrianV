<?php

/* themes/volt/templates/navigation/menu.html.twig */
class __TwigTemplate_08a74a2bc1b7971727350a941e0afb2980f5f6e4df2fbcf4a3c994aa5d46a7fe extends Twig_Template
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
        $tags = array("import" => 22, "if" => 28, "set" => 34, "macro" => 41, "for" => 50);
        $filters = array();
        $functions = array("link" => 52);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'if', 'set', 'macro', 'for'),
                array(),
                array('link')
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

        // line 21
        echo "
";
        // line 22
        $context["menus"] = $this;
        // line 23
        echo "
";
        // line 28
        if ((((isset($context["menu_name"]) ? $context["menu_name"] : null) == "main") || ((isset($context["menu_name"]) ? $context["menu_name"] : null) == "navigare-principala"))) {
            // line 29
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmain_nav((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
            echo "
";
        } else {
            // line 31
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
            echo "
";
        }
        // line 34
        $context["class"] = array(0 => "nav", 1 => "navbar-nav");
        // line 39
        echo "

  ";
        // line 62
        echo "

  ";
    }

    // line 41
    public function getmain_nav($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    ";
            $context["menus"] = $this;
            // line 43
            echo "    ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 44
                echo "    <div class=\"main_menu_container\">
      ";
                // line 45
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 46
                    echo "        <ul class=\"nav navbar-nav navbar-main \">
      ";
                } else {
                    // line 48
                    echo "        <ul>
      ";
                }
                // line 50
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 51
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">
          ";
                    // line 52
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
          ";
                    // line 53
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 54
                        echo "            ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
          ";
                    }
                    // line 56
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "      </ul>
      </div>
    ";
            }
            // line 61
            echo "  ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "    ";
            $context["menus"] = $this;
            // line 66
            echo "    ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 67
                echo "      ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 68
                    echo "          <ul class=\"social\">
      ";
                } else {
                    // line 70
                    echo "        <ul>
      ";
                }
                // line 72
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 73
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">
          ";
                    // line 74
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
          ";
                    // line 75
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 76
                        echo "            ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
          ";
                    }
                    // line 78
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "      </ul>
    ";
            }
            // line 82
            echo "  ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 82,  215 => 80,  208 => 78,  202 => 76,  200 => 75,  196 => 74,  191 => 73,  186 => 72,  182 => 70,  178 => 68,  175 => 67,  172 => 66,  169 => 65,  155 => 64,  144 => 61,  139 => 58,  132 => 56,  126 => 54,  124 => 53,  120 => 52,  115 => 51,  110 => 50,  106 => 48,  102 => 46,  100 => 45,  97 => 44,  94 => 43,  91 => 42,  77 => 41,  71 => 62,  67 => 39,  65 => 34,  59 => 31,  53 => 29,  51 => 28,  48 => 23,  46 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  *//* */
/* #}*/
/* */
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {% if (menu_name == "main") or (menu_name == "navigare-principala") %}*/
/*   {{ menus.main_nav(items, attributes, 0) }}*/
/* {% else %}*/
/*   {{ menus.menu_links(items, attributes, 0) }}*/
/* {% endif %}*/
/* {%*/
/*   set class = [*/
/*     'nav',*/
/*     'navbar-nav',*/
/*   ]*/
/* %}*/
/* */
/* */
/*   {% macro main_nav(items, attributes, menu_level) %}*/
/*     {% import _self as menus %}*/
/*     {% if items %}*/
/*     <div class="main_menu_container">*/
/*       {% if menu_level == 0 %}*/
/*         <ul class="nav navbar-nav navbar-main ">*/
/*       {% else %}*/
/*         <ul>*/
/*       {% endif %}*/
/*       {% for item in items %}*/
/*         <li{{ item.attributes }}>*/
/*           {{ link(item.title, item.url) }}*/
/*           {% if item.below %}*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       </ul>*/
/*       </div>*/
/*     {% endif %}*/
/*   {% endmacro %}*/
/* */
/* */
/*   {% macro menu_links(items, attributes, menu_level) %}*/
/*     {% import _self as menus %}*/
/*     {% if items %}*/
/*       {% if menu_level == 0 %}*/
/*           <ul class="social">*/
/*       {% else %}*/
/*         <ul>*/
/*       {% endif %}*/
/*       {% for item in items %}*/
/*         <li{{ item.attributes }}>*/
/*           {{ link(item.title, item.url) }}*/
/*           {% if item.below %}*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/*   {% endmacro %}*/
/* */
