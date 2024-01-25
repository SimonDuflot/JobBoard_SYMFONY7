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

/* user_profil/show.html.twig */
class __TwigTemplate_bf676f897a3434a6a348f680370d88a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/show.html.twig"));

        $this->parent = $this->loadTemplate("user_profil/index.html.twig", "user_profil/show.html.twig", 1);
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
        $context["profil"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "userProfil", [], "any", false, false, false, 11);
        // line 12
        echo "
\t<div class=\"container mt-5\">
\t\t<h1 class=\"text-center mb-4\">
\t\t\tPoste recherché :
\t\t\t<span class=\"badge bg-secondary\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 16, $this->source); })()), "jobSought", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
\t\t</h1>
\t\t<div class=\"card card-text mb-4\">
\t\t\t<div class=\"card-body d-flex justify-content-between\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 21
        if (twig_in_filter("https://api.dicebear.com", twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 21, $this->source); })()), "picture", [], "any", false, false, false, 21))) {
            // line 22
            echo "
\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 23, $this->source); })()), "picture", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"img-fluid rounded shadow-lg\">
\t\t\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 25, $this->source); })()), "picture", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"img-fluid rounded shadow-lg\">
\t\t\t\t\t";
        }
        // line 27
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h2 class=\"text-center\">
\t\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 31, $this->source); })()), "firstName", [], "any", false, false, false, 31), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 32, $this->source); })()), "lastName", [], "any", false, false, false, 32), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t<details>
\t\t\t\t\t\t<summary>Informations personnelles</summary>
\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 36, $this->source); })()), "address", [], "any", false, false, false, 36), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 37, $this->source); })()), "zipCode", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 38, $this->source); })()), "city", [], "any", false, false, false, 38), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 39, $this->source); })()), "country", [], "any", false, false, false, 39), "html", null, true);
        echo "
\t\t\t\t\t</details>
\t\t\t\t\t<p>Tel :";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 41, $this->source); })()), "phoneNumber", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 43, $this->source); })()), "availability", [], "any", false, false, false, 43)) {
            // line 44
            echo "\t\t\t\t\t\t\t<span class=\"badge rounded-pill text-bg-success\">Disponible</span>
\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t<span class=\"badge rounded-pill text-bg-danger\">Indisponible</span>
\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"card-body\">
\t\t\t\t<b>
\t\t\t\t\tQui suis-je ?</b>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 56, $this->source); })()), "presentation", [], "any", false, false, false, 56), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 58, $this->source); })()), "slug", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">

\t\t\t\t\t<i class=\"bi bi-pencil-square\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 62, $this->source); })()), "slug", [], "any", false, false, false, 62)]), "html", null, true);
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
        return "user_profil/show.html.twig";
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
        return array (  203 => 62,  196 => 58,  191 => 56,  181 => 48,  177 => 46,  173 => 44,  171 => 43,  166 => 41,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  142 => 32,  138 => 31,  132 => 27,  124 => 25,  117 => 23,  114 => 22,  112 => 21,  104 => 16,  98 => 12,  96 => 11,  93 => 10,  83 => 9,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_profil/index.html.twig' %}


{% block title %}
\t{{ parent() }}
\t- Mon profil
{% endblock %}

{% block content %}

\t{% set profil = app.user.userProfil %}

\t<div class=\"container mt-5\">
\t\t<h1 class=\"text-center mb-4\">
\t\t\tPoste recherché :
\t\t\t<span class=\"badge bg-secondary\">{{ profil.jobSought }}</span>
\t\t</h1>
\t\t<div class=\"card card-text mb-4\">
\t\t\t<div class=\"card-body d-flex justify-content-between\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t{% if 'https://api.dicebear.com' in  profil.picture %}

\t\t\t\t\t\t<img src=\"{{ profil.picture}}\" alt=\"{{ profil.slug }}\" class=\"img-fluid rounded shadow-lg\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ profil.picture) }}\" alt=\"{{ profil.slug }}\" class=\"img-fluid rounded shadow-lg\">
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h2 class=\"text-center\">
\t\t\t\t\t\t{{ profil.firstName }}
\t\t\t\t\t\t{{ profil.lastName }}
\t\t\t\t\t</h2>
\t\t\t\t\t<details>
\t\t\t\t\t\t<summary>Informations personnelles</summary>
\t\t\t\t\t\t{{profil.address}}
\t\t\t\t\t\t{{profil.zipCode}}
\t\t\t\t\t\t{{profil.city}}
\t\t\t\t\t\t{{profil.country}}
\t\t\t\t\t</details>
\t\t\t\t\t<p>Tel :{{profil.phoneNumber}}</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t{% if profil.availability %}
\t\t\t\t\t\t\t<span class=\"badge rounded-pill text-bg-success\">Disponible</span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span class=\"badge rounded-pill text-bg-danger\">Indisponible</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"card-body\">
\t\t\t\t<b>
\t\t\t\t\tQui suis-je ?</b>
\t\t\t\t<p>
\t\t\t\t\t{{profil.presentation}}
\t\t\t\t</p>
\t\t\t\t<a href=\"{{path('app_user_profil_edit',{'slug':profil.slug})}}\" class=\"btn btn-warning\">

\t\t\t\t\t<i class=\"bi bi-pencil-square\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"{{path('app_user_profil_delete',{'slug':profil.slug})}}\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t</div>
</div>{% endblock %}
", "user_profil/show.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\user_profil\\show.html.twig");
    }
}
