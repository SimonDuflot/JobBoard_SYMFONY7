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

/* home/offre_emploi_show.html.twig */
class __TwigTemplate_a433ec68bbde8bec1072947a8dbe55dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/offre_emploi_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/offre_emploi_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/offre_emploi_show.html.twig", 1);
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
\t- Liste des offers d'emploi
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
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div class=\"container text-center mt-5\">
\t\t\t\t\t<h1 class=\"\">
\t\t\t\t\t\tDétails de l'offre :
\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row my-3\">
\t\t\t<div class=\"col-9 border rounded\">
\t\t\t\t<h2 class=\"text-center mb-4\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "</h2>
\t\t\t\t<p class=\"card-text text-secondary\">Lieu de travail :";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 27, $this->source); })()), "entreprise", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">Contrat :
\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 29, $this->source); })()), "contractType", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">Salaire:
\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 31, $this->source); })()), "salary", [], "any", false, false, false, 31) / 100), "html", null, true);
        echo "
\t\t\t\t\t€/an brut</p>
\t\t\t\t<p class=\"card-text\">Présentation du poste :
\t\t\t\t\t<br>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 34, $this->source); })()), "shortDescription", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">Description de l'offre:
\t\t\t\t\t<br>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<p class=\"card-text \">Compétences:</p>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 40, $this->source); })()), "tags", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 41
            echo "\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t<i class=\"bi bi-clock\"></i>
\t\t\t\t\tPublié
\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51), null, "fr");
        echo "
\t\t\t\t</small>

\t\t\t\t<div>
\t\t\t\t\t";
        // line 55
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55))) {
            // line 56
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t\tConnectez-vous pour postuler
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 60
        echo "
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 65
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "userProfil", [], "any", false, false, false, 65))) {
            // line 66
            echo "

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
            // line 69
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "message", [], "any", false, false, false, 70), 'row');
            echo "
\t\t\t\t\t";
            // line 71
            if ((null === (isset($context["existingsApplication"]) || array_key_exists("existingsApplication", $context) ? $context["existingsApplication"] : (function () { throw new RuntimeError('Variable "existingsApplication" does not exist.', 71, $this->source); })()))) {
                // line 72
                echo "\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Postuler</button>
\t\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" disabled>Vous avez déjà postulé</button>
\t\t\t\t\t";
            }
            // line 76
            echo "
\t\t\t\t\t";
            // line 77
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
            echo "
\t\t\t\t</div>

\t\t\t";
        }
        // line 81
        echo "

\t\t</div>


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/offre_emploi_show.html.twig";
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
        return array (  230 => 81,  223 => 77,  220 => 76,  216 => 74,  212 => 72,  210 => 71,  206 => 70,  202 => 69,  197 => 66,  195 => 65,  188 => 60,  180 => 56,  178 => 55,  171 => 51,  163 => 45,  154 => 42,  151 => 41,  147 => 40,  140 => 36,  135 => 34,  129 => 31,  124 => 29,  119 => 27,  115 => 26,  101 => 15,  93 => 9,  83 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ parent() }}
\t- Liste des offers d'emploi
{% endblock %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div class=\"container text-center mt-5\">
\t\t\t\t\t<h1 class=\"\">
\t\t\t\t\t\tDétails de l'offre :
\t\t\t\t\t\t{{offer.title}}
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row my-3\">
\t\t\t<div class=\"col-9 border rounded\">
\t\t\t\t<h2 class=\"text-center mb-4\">{{offer.title}}</h2>
\t\t\t\t<p class=\"card-text text-secondary\">Lieu de travail :{{offer.entreprise.name}}</p>
\t\t\t\t<p class=\"card-text\">Contrat :
\t\t\t\t\t{{offer.contractType.name}}</p>
\t\t\t\t<p class=\"card-text\">Salaire:
\t\t\t\t\t{{offer.salary / 100}}
\t\t\t\t\t€/an brut</p>
\t\t\t\t<p class=\"card-text\">Présentation du poste :
\t\t\t\t\t<br>{{offer.shortDescription}}</p>
\t\t\t\t<p class=\"card-text\">Description de l'offre:
\t\t\t\t\t<br>{{offer.content}}</p>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<p class=\"card-text \">Compétences:</p>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t{% for tag in offer.tags %}
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary\">{{tag.name}}</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t<i class=\"bi bi-clock\"></i>
\t\t\t\t\tPublié
\t\t\t\t\t{{offer.createdAt|time_diff(locale='fr')}}
\t\t\t\t</small>

\t\t\t\t<div>
\t\t\t\t\t{% if app.user is null %}
\t\t\t\t\t\t<a href=\"{{path('app_login')}}\" class=\"btn btn-info\">
\t\t\t\t\t\t\tConnectez-vous pour postuler
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t</div>


\t\t\t{% if app.user.userProfil is not null %}


\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t{{ form_row(form.message) }}
\t\t\t\t\t{% if existingsApplication is null %}
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Postuler</button>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" disabled>Vous avez déjà postulé</button>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{{form_end(form)}}
\t\t\t\t</div>

\t\t\t{% endif %}


\t\t</div>


\t</div>
{% endblock %}
", "home/offre_emploi_show.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\home\\offre_emploi_show.html.twig");
    }
}
