<?php

/* base.html.twig */
class __TwigTemplate_1881d74c31b4b819b1fc9ca330150dd79135d48a842e32a6a74ae6c1b776fde1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1db86c068d2b5060f93cca9b4be64a717c35bfadddd6b18558bec0c082827f = $this->env->getExtension("native_profiler");
        $__internal_1c1db86c068d2b5060f93cca9b4be64a717c35bfadddd6b18558bec0c082827f->enter($__internal_1c1db86c068d2b5060f93cca9b4be64a717c35bfadddd6b18558bec0c082827f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1c1db86c068d2b5060f93cca9b4be64a717c35bfadddd6b18558bec0c082827f->leave($__internal_1c1db86c068d2b5060f93cca9b4be64a717c35bfadddd6b18558bec0c082827f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ad73b22703b31679d86765f3228edda7eccc17bdb9bc183886a79faf475aec4 = $this->env->getExtension("native_profiler");
        $__internal_2ad73b22703b31679d86765f3228edda7eccc17bdb9bc183886a79faf475aec4->enter($__internal_2ad73b22703b31679d86765f3228edda7eccc17bdb9bc183886a79faf475aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ad73b22703b31679d86765f3228edda7eccc17bdb9bc183886a79faf475aec4->leave($__internal_2ad73b22703b31679d86765f3228edda7eccc17bdb9bc183886a79faf475aec4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdcbf20b95d292b80cf062b98f4fb2cbc68d31acc8d96474c8a3e1adef1a60f9 = $this->env->getExtension("native_profiler");
        $__internal_bdcbf20b95d292b80cf062b98f4fb2cbc68d31acc8d96474c8a3e1adef1a60f9->enter($__internal_bdcbf20b95d292b80cf062b98f4fb2cbc68d31acc8d96474c8a3e1adef1a60f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bdcbf20b95d292b80cf062b98f4fb2cbc68d31acc8d96474c8a3e1adef1a60f9->leave($__internal_bdcbf20b95d292b80cf062b98f4fb2cbc68d31acc8d96474c8a3e1adef1a60f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d4bfc75f82c73b163463ce880cfec9af90c9026c178b0d0bcd1383d656d3c5f = $this->env->getExtension("native_profiler");
        $__internal_1d4bfc75f82c73b163463ce880cfec9af90c9026c178b0d0bcd1383d656d3c5f->enter($__internal_1d4bfc75f82c73b163463ce880cfec9af90c9026c178b0d0bcd1383d656d3c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d4bfc75f82c73b163463ce880cfec9af90c9026c178b0d0bcd1383d656d3c5f->leave($__internal_1d4bfc75f82c73b163463ce880cfec9af90c9026c178b0d0bcd1383d656d3c5f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34187162cd1528216d03ec71a7fe90d52e3e6ab4f63dad478472a9d298912729 = $this->env->getExtension("native_profiler");
        $__internal_34187162cd1528216d03ec71a7fe90d52e3e6ab4f63dad478472a9d298912729->enter($__internal_34187162cd1528216d03ec71a7fe90d52e3e6ab4f63dad478472a9d298912729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34187162cd1528216d03ec71a7fe90d52e3e6ab4f63dad478472a9d298912729->leave($__internal_34187162cd1528216d03ec71a7fe90d52e3e6ab4f63dad478472a9d298912729_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
