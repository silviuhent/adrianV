<?php

/* themes/volt/templates/layout/header.html.twig */
class __TwigTemplate_f4e8f1de29679019344d3e39c0efe1945589a64022994178c14bed1c3fd1f963 extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "
  <div id=\"header_top\">
    <div class=\"content container\">
      <div id=\"block-social\" class=\"visible-sm-block visible-md-block visible-lg-block pull-left\">
        ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_social", array()), "html", null, true));
        echo "
      </div>
      <div id=\"block-comutatorlimbi\" class=\"pull-right\">
        ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_contact", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-default navbar-fixed-top header_top container\">
    <div class=\"container-fluid\">
      <div class=\"content\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
          <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"></span>
        </button>
        ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo", array()), "html", null, true));
        echo "
      </div>
      <div id=\"navbar\" class=\"navbar-collapse collapse main_menu\">
        ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
        echo "


        <div id=\"alege_electric\" class=\"submenu\">
          <div class=\"wrap_menu \">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"close_alege_electric\" class=\"close\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ultimenu_main_alege_electric", array()), "html", null, true));
        echo "
            <div class=\"clear\"></div>
          </div>
        </div>
        <div id=\"produse\" class=\"submenu\">
          <div class=\"wrap_menu \">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"close_produse\" class=\"close\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ultimenu_main_produse", array()), "html", null, true));
        echo "
            <div class=\"clear\"></div>
          </div>
        </div>
        <div id=\"centru_de_informare\" class=\"submenu\">
          <div class=\"wrap_menu \">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"close_centru_de_informare\" class=\"close\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ultimenu_main_centrul_de_informare", array()), "html", null, true));
        echo "
            <div class=\"clear\"></div>
          </div>
        </div>
        <div id=\"despre_noi\" class=\"submenu\">
          <div class=\"wrap_menu \">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"close_despre_noi\" class=\"close\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ultimenu_main_despre_noi", array()), "html", null, true));
        echo "
            <div class=\"clear\"></div>
          </div>
        </div>

        <div id=\"search_block\" class=\"submenu\">
          <div class=\"wrap_menu \">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"close_search\" class=\"close\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ultimenu_contact_search", array()), "html", null, true));
        echo "
            <div class=\"clear\"></div>
          </div>
        </div>
      </div><!--/.nav-collapse -->

      </div>

    </div>
  </nav>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 77,  130 => 65,  116 => 54,  102 => 43,  88 => 32,  75 => 22,  69 => 19,  55 => 8,  49 => 5,  43 => 1,);
    }
}
/* */
/*   <div id="header_top">*/
/*     <div class="content container">*/
/*       <div id="block-social" class="visible-sm-block visible-md-block visible-lg-block pull-left">*/
/*         {{ page.top_social}}*/
/*       </div>*/
/*       <div id="block-comutatorlimbi" class="pull-right">*/
/*         {{ page.top_contact}}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <nav class="navbar navbar-default navbar-fixed-top header_top container">*/
/*     <div class="container-fluid">*/
/*       <div class="content">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*           <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>*/
/*         </button>*/
/*         {{ page.logo }}*/
/*       </div>*/
/*       <div id="navbar" class="navbar-collapse collapse main_menu">*/
/*         {{ page.main_menu }}*/
/* */
/* */
/*         <div id="alege_electric" class="submenu">*/
/*           <div class="wrap_menu ">*/
/*             <div class="pull-right">*/
/*               <button type="button" id="close_alege_electric" class="close" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*             </div>*/
/*             {{ page.ultimenu_main_alege_electric }}*/
/*             <div class="clear"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="produse" class="submenu">*/
/*           <div class="wrap_menu ">*/
/*             <div class="pull-right">*/
/*               <button type="button" id="close_produse" class="close" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*             </div>*/
/*             {{ page.ultimenu_main_produse }}*/
/*             <div class="clear"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="centru_de_informare" class="submenu">*/
/*           <div class="wrap_menu ">*/
/*             <div class="pull-right">*/
/*               <button type="button" id="close_centru_de_informare" class="close" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*             </div>*/
/*             {{ page.ultimenu_main_centrul_de_informare }}*/
/*             <div class="clear"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="despre_noi" class="submenu">*/
/*           <div class="wrap_menu ">*/
/*             <div class="pull-right">*/
/*               <button type="button" id="close_despre_noi" class="close" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*             </div>*/
/*             {{ page.ultimenu_main_despre_noi }}*/
/*             <div class="clear"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div id="search_block" class="submenu">*/
/*           <div class="wrap_menu ">*/
/*             <div class="pull-right">*/
/*               <button type="button" id="close_search" class="close" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*             </div>*/
/*             {{ page.ultimenu_contact_search }}*/
/*             <div class="clear"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div><!--/.nav-collapse -->*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/*   </nav>*/
/* */
