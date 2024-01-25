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

/* entreprise_profil/show.html.twig */
class __TwigTemplate_d98c1a1c0343a2c56fe7e5ee445e35de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user_profil/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise_profil/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise_profil/show.html.twig"));

        $this->parent = $this->loadTemplate("user_profil/index.html.twig", "entreprise_profil/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t- Mon profil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
\t";
        // line 11
        $context["entreprise"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "entrepriseProfil", [], "any", false, false, false, 11);
        // line 12
        echo "

\t<div class=\"container mt-5\">
\t\t<h1 class=\"text-center mb-4\">
\t\t\tDomaine d'activité :
\t\t\t<span class=\"badge bg-secondary\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 17, $this->source); })()), "activityArea", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>

\t\t</h1>
\t\t<div class=\"card card-text mb-4\">
\t\t\t<div class=\"card-body d-flex justify-content-between\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t";
        // line 25
        echo "\t\t\t\t\t";
        if (twig_in_filter("https://api.dicebear.com", twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 25, $this->source); })()), "logo", [], "any", false, false, false, 25))) {
            // line 26
            echo "
\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 27, $this->source); })()), "logo", [], "any", false, false, false, 27), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 27, $this->source); })()), "slug", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"img-fluid rounded shadow-lg\">

\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 30, $this->source); })()), "logo", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 30, $this->source); })()), "slug", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"img-fluid rounded shadow-lg\">

\t\t\t\t\t";
        }
        // line 33
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h2 class=\"text-center\">
\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t<details>
\t\t\t\t\t\t<summary>Informations sur la société</summary>
\t\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 41, $this->source); })()), "address", [], "any", false, false, false, 41), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 42, $this->source); })()), "zipCode", [], "any", false, false, false, 42), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 43, $this->source); })()), "city", [], "any", false, false, false, 43), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 44, $this->source); })()), "country", [], "any", false, false, false, 44), "html", null, true);
        echo "
\t\t\t\t\t</details>
\t\t\t\t\t<p>Tel :";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 46, $this->source); })()), "phoneNumber", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"card-body\">
\t\t\t\t<b>
\t\t\t\t\tQui suis-je ?</b>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_profil_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">

\t\t\t\t\t<i class=\"bi bi-pencil-square\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_profil_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 61, $this->source); })()), "slug", [], "any", false, false, false, 61)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "entreprise_profil/show.html.twig";
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
        return array (  192 => 61,  185 => 57,  180 => 55,  168 => 46,  163 => 44,  159 => 43,  155 => 42,  151 => 41,  144 => 37,  138 => 33,  129 => 30,  121 => 27,  118 => 26,  115 => 25,  105 => 17,  98 => 12,  96 => 11,  93 => 10,  83 => 9,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_profil/index.html.twig' %}


{% block title %}
\t{{ parent() }}
\t- Mon profil
{% endblock %}

{% block content %}

\t{% set entreprise= app.user.entrepriseProfil %}


\t<div class=\"container mt-5\">
\t\t<h1 class=\"text-center mb-4\">
\t\t\tDomaine d'activité :
\t\t\t<span class=\"badge bg-secondary\">{{ entreprise.activityArea }}</span>

\t\t</h1>
\t\t<div class=\"card card-text mb-4\">
\t\t\t<div class=\"card-body d-flex justify-content-between\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t{# <img src=\"{{ asset('uploads/' ~ entreprise.logo) }}\" alt=\"{{ entreprise.slug }}\" class=\"img-fluid rounded shadow-lg\"> #}
\t\t\t\t\t{% if 'https://api.dicebear.com' in  entreprise.logo %}

\t\t\t\t\t\t<img src=\"{{ entreprise.logo}}\" alt=\"{{ entreprise.slug }}\" class=\"img-fluid rounded shadow-lg\">

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ entreprise.logo) }}\" alt=\"{{ entreprise.slug }}\" class=\"img-fluid rounded shadow-lg\">

\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h2 class=\"text-center\">
\t\t\t\t\t\t{{ entreprise.name }}
\t\t\t\t\t</h2>
\t\t\t\t\t<details>
\t\t\t\t\t\t<summary>Informations sur la société</summary>
\t\t\t\t\t\t{{entreprise.address}}
\t\t\t\t\t\t{{entreprise.zipCode}}
\t\t\t\t\t\t{{entreprise.city}}
\t\t\t\t\t\t{{entreprise.country}}
\t\t\t\t\t</details>
\t\t\t\t\t<p>Tel :{{entreprise.phoneNumber}}</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"card-body\">
\t\t\t\t<b>
\t\t\t\t\tQui suis-je ?</b>
\t\t\t\t<p>
\t\t\t\t\t{{entreprise.description}}
\t\t\t\t</p>
\t\t\t\t<a href=\"{{path('app_entreprise_profil_edit',{'slug':entreprise.slug})}}\" class=\"btn btn-warning\">

\t\t\t\t\t<i class=\"bi bi-pencil-square\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"{{path('app_entreprise_profil_delete',{'slug':entreprise.slug})}}\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t</div>
</div>{% endblock %}
", "entreprise_profil/show.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\entreprise_profil\\show.html.twig");
    }
}
