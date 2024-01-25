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

/* tag/index.html.twig */
class __TwigTemplate_4a92035c3ca933a8688f7f07a3b6ae0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
\t- Les mots clés
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
        $this->loadTemplate("partials/_sidebar.html.twig", "tag/index.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<div class=\"col-10\">
\t\t\t\t";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "\t\t\t</div>

\t\t</div>

\t</div>
";
        
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
\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t<h1>Les mots clés</h1>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tVous pouvez des mots clés afin d'enrichir votre contenu.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"bg-white shadow p-5 rounded\">
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-10 mx-auto\">
\t\t\t\t\t\t\t<h4 class=\"text-center fw-bold\">
\t\t\t\t\t\t\t\tListe des mots clés
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t";
        // line 43
        if ((twig_length_filter($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 43, $this->source); })())) <= 0)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\tAucun mot clé n'a été trouvé.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill text-bg-primary\">
                                    <i class=\"bi bi-tag-fill\"></i>
                                    ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tag/index.html.twig";
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
        return array (  199 => 55,  195 => 53,  187 => 51,  183 => 49,  178 => 48,  172 => 44,  170 => 43,  155 => 31,  150 => 29,  146 => 28,  133 => 17,  123 => 16,  108 => 59,  106 => 16,  102 => 14,  100 => 13,  94 => 9,  84 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ parent() }}
\t- Les mots clés
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
\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t<h1>Les mots clés</h1>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tVous pouvez des mots clés afin d'enrichir votre contenu.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"bg-white shadow p-5 rounded\">
\t\t\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t\t{{form_widget(form)}}
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-10 mx-auto\">
\t\t\t\t\t\t\t<h4 class=\"text-center fw-bold\">
\t\t\t\t\t\t\t\tListe des mots clés
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t{% if tags|length <= 0 %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\tAucun mot clé n'a été trouvé.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill text-bg-primary\">
                                    <i class=\"bi bi-tag-fill\"></i>
                                    {{tag.name}}</span>
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t{% endblock %}
\t\t\t</div>

\t\t</div>

\t</div>
{% endblock %}
", "tag/index.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\tag\\index.html.twig");
    }
}
