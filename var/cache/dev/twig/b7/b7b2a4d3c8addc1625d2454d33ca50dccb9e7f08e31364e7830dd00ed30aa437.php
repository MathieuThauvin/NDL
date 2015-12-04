<?php

/* base.html.twig */
class __TwigTemplate_bb5e4cccc445ad164b0c3a723a8b53e4590ecdc82ef38e3e72f644d0f536531d extends Twig_Template
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
        $__internal_89dd83787cf9e5ae240fc98aece5a7bb49c2aa394f41abc37aaf3fb08dff1827 = $this->env->getExtension("native_profiler");
        $__internal_89dd83787cf9e5ae240fc98aece5a7bb49c2aa394f41abc37aaf3fb08dff1827->enter($__internal_89dd83787cf9e5ae240fc98aece5a7bb49c2aa394f41abc37aaf3fb08dff1827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_89dd83787cf9e5ae240fc98aece5a7bb49c2aa394f41abc37aaf3fb08dff1827->leave($__internal_89dd83787cf9e5ae240fc98aece5a7bb49c2aa394f41abc37aaf3fb08dff1827_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_445aa3167660d1ca29d7b8a058e1c68884ff785a779c5df479c3855542c3c950 = $this->env->getExtension("native_profiler");
        $__internal_445aa3167660d1ca29d7b8a058e1c68884ff785a779c5df479c3855542c3c950->enter($__internal_445aa3167660d1ca29d7b8a058e1c68884ff785a779c5df479c3855542c3c950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_445aa3167660d1ca29d7b8a058e1c68884ff785a779c5df479c3855542c3c950->leave($__internal_445aa3167660d1ca29d7b8a058e1c68884ff785a779c5df479c3855542c3c950_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6001f5b71f09d3dec9f38ad22b0ca29e5eb093c1d65679e7f32052d20c1bedc9 = $this->env->getExtension("native_profiler");
        $__internal_6001f5b71f09d3dec9f38ad22b0ca29e5eb093c1d65679e7f32052d20c1bedc9->enter($__internal_6001f5b71f09d3dec9f38ad22b0ca29e5eb093c1d65679e7f32052d20c1bedc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6001f5b71f09d3dec9f38ad22b0ca29e5eb093c1d65679e7f32052d20c1bedc9->leave($__internal_6001f5b71f09d3dec9f38ad22b0ca29e5eb093c1d65679e7f32052d20c1bedc9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a29d9b011f81497c44dd19c5d55ca96e01b48dfc643796efa9450d20da15b6c = $this->env->getExtension("native_profiler");
        $__internal_6a29d9b011f81497c44dd19c5d55ca96e01b48dfc643796efa9450d20da15b6c->enter($__internal_6a29d9b011f81497c44dd19c5d55ca96e01b48dfc643796efa9450d20da15b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a29d9b011f81497c44dd19c5d55ca96e01b48dfc643796efa9450d20da15b6c->leave($__internal_6a29d9b011f81497c44dd19c5d55ca96e01b48dfc643796efa9450d20da15b6c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0e9c5f5125cf7a2a288bcb4e0cff3ff64efec81ab464d8c07ebbd6c999fdad6 = $this->env->getExtension("native_profiler");
        $__internal_e0e9c5f5125cf7a2a288bcb4e0cff3ff64efec81ab464d8c07ebbd6c999fdad6->enter($__internal_e0e9c5f5125cf7a2a288bcb4e0cff3ff64efec81ab464d8c07ebbd6c999fdad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0e9c5f5125cf7a2a288bcb4e0cff3ff64efec81ab464d8c07ebbd6c999fdad6->leave($__internal_e0e9c5f5125cf7a2a288bcb4e0cff3ff64efec81ab464d8c07ebbd6c999fdad6_prof);

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
