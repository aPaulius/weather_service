<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_86661ffd2ec82a563d87d89544fe3d8f217e2b65d7ecbeca402489de00c4121c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ded3907f9097fc75231ad203427957b7d9745a2499c7c7fbf792162624aae3c = $this->env->getExtension("native_profiler");
        $__internal_6ded3907f9097fc75231ad203427957b7d9745a2499c7c7fbf792162624aae3c->enter($__internal_6ded3907f9097fc75231ad203427957b7d9745a2499c7c7fbf792162624aae3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ded3907f9097fc75231ad203427957b7d9745a2499c7c7fbf792162624aae3c->leave($__internal_6ded3907f9097fc75231ad203427957b7d9745a2499c7c7fbf792162624aae3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bd98710bbd89347a40a1025801fbe7edca83c92059f5411b554b315e3f4114c = $this->env->getExtension("native_profiler");
        $__internal_6bd98710bbd89347a40a1025801fbe7edca83c92059f5411b554b315e3f4114c->enter($__internal_6bd98710bbd89347a40a1025801fbe7edca83c92059f5411b554b315e3f4114c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6bd98710bbd89347a40a1025801fbe7edca83c92059f5411b554b315e3f4114c->leave($__internal_6bd98710bbd89347a40a1025801fbe7edca83c92059f5411b554b315e3f4114c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3e4d2a2313e32b4963552d838a53e8e64e1fd84bdfce0058db65e2deab90595 = $this->env->getExtension("native_profiler");
        $__internal_c3e4d2a2313e32b4963552d838a53e8e64e1fd84bdfce0058db65e2deab90595->enter($__internal_c3e4d2a2313e32b4963552d838a53e8e64e1fd84bdfce0058db65e2deab90595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3e4d2a2313e32b4963552d838a53e8e64e1fd84bdfce0058db65e2deab90595->leave($__internal_c3e4d2a2313e32b4963552d838a53e8e64e1fd84bdfce0058db65e2deab90595_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a9eb4db00d06ea3372cb5f7f7a82e461adf28c051b53e0684add95ca3af41d7 = $this->env->getExtension("native_profiler");
        $__internal_9a9eb4db00d06ea3372cb5f7f7a82e461adf28c051b53e0684add95ca3af41d7->enter($__internal_9a9eb4db00d06ea3372cb5f7f7a82e461adf28c051b53e0684add95ca3af41d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9a9eb4db00d06ea3372cb5f7f7a82e461adf28c051b53e0684add95ca3af41d7->leave($__internal_9a9eb4db00d06ea3372cb5f7f7a82e461adf28c051b53e0684add95ca3af41d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
