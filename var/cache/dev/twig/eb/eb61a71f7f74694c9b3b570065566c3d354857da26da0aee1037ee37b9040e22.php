<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fab9bb5854cac30006deb9b6a6a42be5e59c07e3be8399325b67f2f76e0561de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e7c7bf919ea0f2edd515ad6f51ac1c00de7f576e804e073febe11a446cf6c97 = $this->env->getExtension("native_profiler");
        $__internal_4e7c7bf919ea0f2edd515ad6f51ac1c00de7f576e804e073febe11a446cf6c97->enter($__internal_4e7c7bf919ea0f2edd515ad6f51ac1c00de7f576e804e073febe11a446cf6c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7c7bf919ea0f2edd515ad6f51ac1c00de7f576e804e073febe11a446cf6c97->leave($__internal_4e7c7bf919ea0f2edd515ad6f51ac1c00de7f576e804e073febe11a446cf6c97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83d17a4cb49799472e166ecaa691a2b2090ace050a4a53a86983c11cf142b3b7 = $this->env->getExtension("native_profiler");
        $__internal_83d17a4cb49799472e166ecaa691a2b2090ace050a4a53a86983c11cf142b3b7->enter($__internal_83d17a4cb49799472e166ecaa691a2b2090ace050a4a53a86983c11cf142b3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83d17a4cb49799472e166ecaa691a2b2090ace050a4a53a86983c11cf142b3b7->leave($__internal_83d17a4cb49799472e166ecaa691a2b2090ace050a4a53a86983c11cf142b3b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9ece424fca0f7aa044d41f0f959166a26a45a9953072ace07572934f4372c84 = $this->env->getExtension("native_profiler");
        $__internal_d9ece424fca0f7aa044d41f0f959166a26a45a9953072ace07572934f4372c84->enter($__internal_d9ece424fca0f7aa044d41f0f959166a26a45a9953072ace07572934f4372c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9ece424fca0f7aa044d41f0f959166a26a45a9953072ace07572934f4372c84->leave($__internal_d9ece424fca0f7aa044d41f0f959166a26a45a9953072ace07572934f4372c84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0df3b867c787d128e6bfa9f7d0cf5ab95ec6994ac6cc5e781c6f90ba32877340 = $this->env->getExtension("native_profiler");
        $__internal_0df3b867c787d128e6bfa9f7d0cf5ab95ec6994ac6cc5e781c6f90ba32877340->enter($__internal_0df3b867c787d128e6bfa9f7d0cf5ab95ec6994ac6cc5e781c6f90ba32877340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0df3b867c787d128e6bfa9f7d0cf5ab95ec6994ac6cc5e781c6f90ba32877340->leave($__internal_0df3b867c787d128e6bfa9f7d0cf5ab95ec6994ac6cc5e781c6f90ba32877340_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
