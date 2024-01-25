<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* entreprise_profil/offer/edit.html.twig */
class __TwigTemplate_db78b6a459f81fc4f63cb80aa305753f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise_profil/offer/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise_profil/offer/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise_profil/offer/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t- Mon Compte
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-2 p-0 m-0\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("partials/_sidebar.html.twig", "entreprise_profil/offer/edit.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<div class=\"col-10\">
\t\t\t\t";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<h1 class=\"text-center my-2\">
\t\t\t\t\t\t\t\tCréation d'une offre d'emploi
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"col-12 mx-auto\">
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), 'row');
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 27, $this->source); })()), "location", [], "any", false, false, false, 27), 'row');
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 28, $this->source); })()), "contractType", [], "any", false, false, false, 28), 'row');
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 29, $this->source); })()), "salary", [], "any", false, false, false, 29), 'row');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 32, $this->source); })()), "shortDescription", [], "any", false, false, false, 32), 'row');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 35, $this->source); })()), "tags", [], "any", false, false, false, 35), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 38, $this->source); })()), "content", [], "any", false, false, false, 38), 'row');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
\t\t\t\t\t\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["offerForm"]) || array_key_exists("offerForm", $context) ? $context["offerForm"] : (function () { throw new RuntimeError('Variable "offerForm" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "entreprise_profil/offer/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  183 => 41,  177 => 38,  171 => 35,  165 => 32,  159 => 29,  155 => 28,  151 => 27,  147 => 26,  141 => 23,  133 => 17,  123 => 16,  108 => 45,  106 => 16,  102 => 14,  100 => 13,  94 => 9,  84 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ parent() }}
\t- Mon Compte
{% endblock %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-2 p-0 m-0\">
\t\t\t\t{% include \"partials/_sidebar.html.twig\" %}
\t\t\t</div>
\t\t\t<div class=\"col-10\">
\t\t\t\t{% block content %}
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<h1 class=\"text-center my-2\">
\t\t\t\t\t\t\t\tCréation d'une offre d'emploi
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{form_start(offerForm)}}
\t\t\t\t\t\t<div class=\"col-12 mx-auto\">
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col\">{{form_row(offerForm.title)}}</div>
\t\t\t\t\t\t\t\t<div class=\"col\">{{form_row(offerForm.location)}}</div>
\t\t\t\t\t\t\t\t<div class=\"col\">{{form_row(offerForm.contractType)}}</div>
\t\t\t\t\t\t\t\t<div class=\"col\">{{form_row(offerForm.salary)}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col\">{{form_row(offerForm.shortDescription)}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t{{form_row(offerForm.tags)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col\">{{form_row(offerForm.content)}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
\t\t\t\t\t\t\t{{form_end(offerForm)}}
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endblock %}
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t{% endblock %}

", "entreprise_profil/offer/edit.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\entreprise_profil\\offer\\edit.html.twig");
    }
}
