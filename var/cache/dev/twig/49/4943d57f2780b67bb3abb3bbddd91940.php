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

/* entreprise_profil/offer/show.html.twig */
class __TwigTemplate_dd5b24a5d1d2b480d4e57de1da846de7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise_profil/offer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise_profil/offer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise_profil/offer/show.html.twig", 1);
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
        $this->loadTemplate("partials/_sidebar.html.twig", "entreprise_profil/offer/show.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<div class=\"col-10\">
\t\t\t\t";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "\t\t</div>

\t</div>

</div>";
        
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
        echo "\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<h2>Détails de l'offre:
\t\t\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">Titre</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Ajouté le :</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 26, $this->source); })()), "createdAt", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Courte description</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 29, $this->source); })()), "ShortDescription", [], "any", false, false, false, 29), "html", null, true);
        echo "</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Détail de l'offre</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32), "html", null, true);
        echo "</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Salaire</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 35, $this->source); })()), "salary", [], "any", false, false, false, 35), "html", null, true);
        echo "</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Localisation</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 38, $this->source); })()), "location", [], "any", false, false, false, 38), "html", null, true);
        echo "</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Contrat</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 41, $this->source); })()), "contractType", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">Mots clés</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 44, $this->source); })()), "tags", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 51, $this->source); })()), "slug", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\t\t\t\t\tRetour
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-10 my-3\">
\t\t\t\t\t\t<h4 class=\"text-center\">
\t\t\t\t\t\t\tListe des candidatures
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<table class=\"table table-striped table-hover text-center\">
\t\t\t\t\t\t<thead class=\"table-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Message</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Gérer</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 79
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "user", [], "any", false, false, false, 80), "userProfil", [], "any", false, false, false, 80), "lastName", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "user", [], "any", false, false, false, 82), "userProfil", [], "any", false, false, false, 82), "firstName", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "user", [], "any", false, false, false, 83), "email", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 85) == "STATUS_REFUSED")) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">Refusé</span>
\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 87
$context["application"], "status", [], "any", false, false, false, 87) == "STATUS_ACCEPTED")) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Accepté</span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">En attente</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 92
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["application"], "message", [], "any", false, false, false, 94), 0, 50), "html", null, true);
            echo "...</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(twig_get_attribute($this->env, $this->source, $context["application"], "createdAt", [], "any", false, false, false, 95), null, "fr");
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_candidate", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "offer", [], "any", false, false, false, 97), "slug", [], "any", false, false, false, 97), "id" => twig_get_attribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-info\">

\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen-fill\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>


\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "entreprise_profil/offer/show.html.twig";
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
        return array (  297 => 105,  283 => 97,  278 => 95,  274 => 94,  270 => 92,  266 => 90,  262 => 88,  260 => 87,  257 => 86,  255 => 85,  250 => 83,  246 => 82,  241 => 80,  238 => 79,  234 => 78,  204 => 51,  198 => 47,  189 => 45,  185 => 44,  179 => 41,  173 => 38,  167 => 35,  161 => 32,  155 => 29,  149 => 26,  143 => 23,  136 => 19,  132 => 17,  122 => 16,  108 => 111,  106 => 16,  102 => 14,  100 => 13,  94 => 9,  84 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<h2>Détails de l'offre:
\t\t\t\t\t\t\t{{ offer.title }}</h2>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">Titre</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.title }}</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Ajouté le :</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.createdAt|date('Y-m-d H:i:s') }}</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Courte description</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.ShortDescription }}</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Détail de l'offre</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.content }}</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Salaire</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.salary }}</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Localisation</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.location }}</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">Contrat</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">{{ offer.contractType.name }}</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">Mots clés</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t{% for tag in offer.tags %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary\">{{ tag.name }}</span>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offer', {'slug': offer.slug}) }}\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\t\t\t\t\tRetour
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-10 my-3\">
\t\t\t\t\t\t<h4 class=\"text-center\">
\t\t\t\t\t\t\tListe des candidatures
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<table class=\"table table-striped table-hover text-center\">
\t\t\t\t\t\t<thead class=\"table-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Message</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Gérer</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for application in applications %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ application.user.userProfil.lastName }}</td>

\t\t\t\t\t\t\t\t\t<td>{{ application.user.userProfil.firstName }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ application.user.email }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if application.status =='STATUS_REFUSED' %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">Refusé</span>
\t\t\t\t\t\t\t\t\t\t{% elseif application.status =='STATUS_ACCEPTED' %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Accepté</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">En attente</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>{{ application.message|slice(0,50) }}...</td>
\t\t\t\t\t\t\t\t\t<td>{{ application.createdAt|ago(locale='fr') }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_offer_candidate',{'slug':application.offer.slug,'id':application.id})}}\" class=\"btn btn-info\">

\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen-fill\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>


\t\t\t{% endblock %}
\t\t</div>

\t</div>

</div>{% endblock %}
", "entreprise_profil/offer/show.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\entreprise_profil\\offer\\show.html.twig");
    }
}
