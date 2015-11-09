<?php

/* NFQWeatherBundle:Default:index.html.twig */
class __TwigTemplate_17b7f615e17afd9f6aff252b84b3a04870a7d551666055727265cd77c1a749b9 extends Twig_Template
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
        $__internal_7b49f103b07bbb60ea3f198bf0301135e8e06dcc92a0f41db0cc58dc5cf36220 = $this->env->getExtension("native_profiler");
        $__internal_7b49f103b07bbb60ea3f198bf0301135e8e06dcc92a0f41db0cc58dc5cf36220->enter($__internal_7b49f103b07bbb60ea3f198bf0301135e8e06dcc92a0f41db0cc58dc5cf36220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NFQWeatherBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_7b49f103b07bbb60ea3f198bf0301135e8e06dcc92a0f41db0cc58dc5cf36220->leave($__internal_7b49f103b07bbb60ea3f198bf0301135e8e06dcc92a0f41db0cc58dc5cf36220_prof);

    }

    public function getTemplateName()
    {
        return "NFQWeatherBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
