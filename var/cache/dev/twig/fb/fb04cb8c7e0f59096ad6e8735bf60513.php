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

/* home/index.html.twig */
class __TwigTemplate_08851cfe42c9dceac0932297ac639128 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
\t- Accueil
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
        echo "\t<div id=\"carouselExample\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-inner\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 11, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["setting"]) {
            // line 12
            echo "
\t\t\t\t<div class=\"carousel-item ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"d-block w-100 home-img\" alt=\"First Image\">

\t\t\t\t\t";
            // line 18
            echo "
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-flex align-items-center justify-content-start h-100\">
\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t<h3 class=\"text-left home-text\">
\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["setting"], "message", [], "any", false, false, false, 22);
            echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg mt-2\">
\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "callToAction", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t</div>
\t</div>

\t<section class=\"container py-5\">
\t\t<h2 class=\"text-center mb-4\">Offres d'emploi récentes</h2>

\t\t<div
\t\t\tclass=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
\t\t\t<!-- Carte offre d'emploi -->
\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 45, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 46
            echo "\t\t\t\t";
            $this->loadTemplate("partials/_job_card.html.twig", "home/index.html.twig", 46)->display($context);
            // line 47
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t<!-- Fin carte offre d'emploi -->
\t\t</div>
\t\t<div class=\"text-center\">
\t\t<button class=\"btn btn-primary btn-lg mt-2\"><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_emploi");
        echo "\">Plus d'offres</a></button>
\t\t</div>
\t</section>



<section class=\"container py-5 m-1  mx-auto\">

\t\t<h2 class=\"text-center mb-4\">Entreprises récentes</h2>
\t\t<div
\t\t\tclass=\"row g-4\">
\t\t\t<!-- Carte d'entreprise 1 -->
\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 63, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 64
            echo "\t\t\t\t";
            $this->loadTemplate("partials/_entreprise_card.html.twig", "home/index.html.twig", 64)->display($context);
            // line 65
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t</div>
\t</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  265 => 66,  251 => 65,  248 => 64,  231 => 63,  216 => 51,  211 => 48,  197 => 47,  194 => 46,  177 => 45,  165 => 35,  141 => 25,  135 => 22,  129 => 18,  124 => 15,  117 => 13,  114 => 12,  97 => 11,  93 => 9,  83 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ parent() }}
\t- Accueil
{% endblock %}

{% block body %}
\t<div id=\"carouselExample\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-inner\">
\t\t\t{% for setting in settings %}

\t\t\t\t<div class=\"carousel-item {% if loop.first %} active {% endif %}\">
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"{{setting.image}}\" class=\"d-block w-100 home-img\" alt=\"First Image\">

\t\t\t\t\t{# <img src=\"{{asset('uploads/'~ setting.image)}}\" class=\"d-block w-100 home-img\" alt=\"First Image\"> #}

\t\t\t\t\t<div class=\"carousel-caption d-none d-md-flex align-items-center justify-content-start h-100\">
\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t<h3 class=\"text-left home-text\">
\t\t\t\t\t\t\t\t{{ setting.message|raw }}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg mt-2\">
\t\t\t\t\t\t\t\t{{ setting.callToAction}}
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t{% endfor %}

\t\t</div>
\t</div>

\t<section class=\"container py-5\">
\t\t<h2 class=\"text-center mb-4\">Offres d'emploi récentes</h2>

\t\t<div
\t\t\tclass=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
\t\t\t<!-- Carte offre d'emploi -->
\t\t\t{% for offer in offers %}
\t\t\t\t{% include \"partials/_job_card.html.twig\" %}
\t\t\t{% endfor %}
\t\t\t<!-- Fin carte offre d'emploi -->
\t\t</div>
\t\t<div class=\"text-center\">
\t\t<button class=\"btn btn-primary btn-lg mt-2\"><a href=\"{{path('app_offre_emploi')}}\">Plus d'offres</a></button>
\t\t</div>
\t</section>



<section class=\"container py-5 m-1  mx-auto\">

\t\t<h2 class=\"text-center mb-4\">Entreprises récentes</h2>
\t\t<div
\t\t\tclass=\"row g-4\">
\t\t\t<!-- Carte d'entreprise 1 -->
\t\t\t{% for entreprise in entreprises %}
\t\t\t\t{% include \"partials/_entreprise_card.html.twig\" %}
\t\t\t{% endfor %}
\t\t</div>
\t</section>


{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\home\\index.html.twig");
    }
}
