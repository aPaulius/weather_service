<?php

/* lucky/number.html.twig */
class __TwigTemplate_656e66f3d7162cdb8f2f11db026986863a6096a4ae34bc63f074e624456712da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad99a1742a38f6cdbd662e31693500af77e78fc05b83bd35eb710f9ba90f7bd4 = $this->env->getExtension("native_profiler");
        $__internal_ad99a1742a38f6cdbd662e31693500af77e78fc05b83bd35eb710f9ba90f7bd4->enter($__internal_ad99a1742a38f6cdbd662e31693500af77e78fc05b83bd35eb710f9ba90f7bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad99a1742a38f6cdbd662e31693500af77e78fc05b83bd35eb710f9ba90f7bd4->leave($__internal_ad99a1742a38f6cdbd662e31693500af77e78fc05b83bd35eb710f9ba90f7bd4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c5997614c0ca07fbfbb03b1bee121d123c1e007435de03c183c086fed2f94bc = $this->env->getExtension("native_profiler");
        $__internal_6c5997614c0ca07fbfbb03b1bee121d123c1e007435de03c183c086fed2f94bc->enter($__internal_6c5997614c0ca07fbfbb03b1bee121d123c1e007435de03c183c086fed2f94bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumbersList"]) ? $context["luckyNumbersList"] : $this->getContext($context, "luckyNumbersList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_6c5997614c0ca07fbfbb03b1bee121d123c1e007435de03c183c086fed2f94bc->leave($__internal_6c5997614c0ca07fbfbb03b1bee121d123c1e007435de03c183c086fed2f94bc_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%  extends 'base.html.twig' %}*/
/* */
/* {%  block body %}*/
/*     <h1>Lucky Numbers: {{  luckyNumbersList }}</h1>*/
/* {%  endblock %}*/
