<?php

/* themes/volt/templates/layout/footer.html.twig */
class __TwigTemplate_57f50b6b64ab67c8c1ce3ebb12860818c79b52e0487a5b745b9fc490e69a9e09 extends Twig_Template
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
        echo "<div class=\"footer_top know-more\">
  <div class=\"container\">
    <div class=\"row small\">
    <!-- row newsletter block -->
      <div class=\"newsletter col-xs-12 col-sm-12 col-md-12 col-lg-12\">
        ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"footer_mid\">
  <div class=\"container\">
    <div id=\"footer_bot\">
      <div class=\"breadcrumbs pull-left\">
        ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
      </div>
      <div class=\"social_footer col-md-3 pull-right\">
        ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"footer_bottom\">
    <div class=\"container footer_bot\">
      <div class=\"row\">
        <div class=\"menu_footer_left\">
          ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
        echo "
        </div>
        <div class=\"menu_footer_right\">
          ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
        echo "
        </div>
        <div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-right menu_footer_contact\">
          ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
  <div class=\"copy\">
    <div class=\"container\">
      <div class=\"footer_menu pull-left  col-md-9\">
        ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
        echo "
      </div>
      <div class=\"copyright pull-right col-md-3\">
        ";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  105 => 43,  94 => 35,  88 => 32,  82 => 29,  69 => 19,  63 => 16,  50 => 6,  43 => 1,);
    }
}
/* <div class="footer_top know-more">*/
/*   <div class="container">*/
/*     <div class="row small">*/
/*     <!-- row newsletter block -->*/
/*       <div class="newsletter col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*         {{ page.featured_bottom_first }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="footer_mid">*/
/*   <div class="container">*/
/*     <div id="footer_bot">*/
/*       <div class="breadcrumbs pull-left">*/
/*         {{ page.breadcrumb }}*/
/*       </div>*/
/*       <div class="social_footer col-md-3 pull-right">*/
/*         {{ page.featured_bottom_second }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="footer_bottom">*/
/*     <div class="container footer_bot">*/
/*       <div class="row">*/
/*         <div class="menu_footer_left">*/
/*           {{ page.footer_first }}*/
/*         </div>*/
/*         <div class="menu_footer_right">*/
/*           {{ page.footer_second }}*/
/*         </div>*/
/*         <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-right menu_footer_contact">*/
/*           {{ page.footer_third }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="copy">*/
/*     <div class="container">*/
/*       <div class="footer_menu pull-left  col-md-9">*/
/*         {{ page.footer_fourth }}*/
/*       </div>*/
/*       <div class="copyright pull-right col-md-3">*/
/*         {{ page.footer_fifth }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
