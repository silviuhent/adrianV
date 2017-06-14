<?php

/* themes/volt/templates/paragraphs/paragraph--accesoriu.html.twig */
class __TwigTemplate_5da3f3f7e93843e7c3566c4bcf7449015474a177626b039f716fbf89227340ea extends Twig_Template
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
        $filters = array("raw" => 2);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
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
        echo "<div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_class", array()), 0, array()), "#context", array(), "array"), "value", array()), "html", null, true));
        echo "\" class=\"accesoriu_individual\">
  <div class=\"title\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_titlu", array())));
        echo "</div>
  <div class=\"description\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_continut", array())));
        echo "</div>
  <div class=\"image\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_imagine", array())));
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/volt/templates/paragraphs/paragraph--accesoriu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }
}
/* <div id="{{ content.field_class.0['#context'].value }}" class="accesoriu_individual">*/
/*   <div class="title">{{ content.field_titlu|raw }}</div>*/
/*   <div class="description">{{ content.field_continut|raw }}</div>*/
/*   <div class="image">{{ content.field_imagine|raw }}</div>*/
/* </div>*/
/* */
