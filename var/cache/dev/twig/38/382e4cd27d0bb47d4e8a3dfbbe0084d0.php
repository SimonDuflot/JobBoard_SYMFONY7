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

/* partials/_sidebar.html.twig */
class __TwigTemplate_ba4f4717350507c8a834571d6e21ade1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-shrink-0 text-bg-dark\" style=\"width: 100%; height: 100vh;\">
\t<a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
\t\t<span class=\"fs-4 d-block\">Mon dashboard</span>
\t</a>
\t<hr>
\t";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "status", [], "any", false, false, false, 6) == "Candidat")) {
            // line 7
            echo "\t\t<ul class=\"nav nav-pills flex-column mb-auto menu-link-items\">
\t\t\t";
            // line 8
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "userProfil", [], "any", false, false, false, 8)) {
                // line 9
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link text-white\">
\t\t\t\t\t\tMes candidatures
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link text-white\">
\t\t\t\t\t\tMes informations
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 20
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
            echo "\" class=\"nav-link text-white\">
\t\t\t\t\tProfil
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>

\t";
        } else {
            // line 28
            echo "\t\t<ul class=\"nav nav-pills flex-column mb-auto menu-link-items\">
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_profil");
            echo "\" class=\"nav-link text-white\">
\t\t\t\t\tProfil
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer");
            echo "\" class=\"nav-link text-white\">Mes offres

\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"nav-link text-white\">
\t\t\t\t\tInformations
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag");
            echo "\" class=\"nav-link text-white\">
\t\t\t\t\tLes Mot clés</a>
\t\t\t</li>
\t\t</li>
\t";
        }
        // line 51
        echo "</ul></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_sidebar.html.twig";
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
        return array (  117 => 51,  109 => 46,  96 => 36,  87 => 30,  83 => 28,  73 => 21,  70 => 20,  57 => 9,  55 => 8,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-shrink-0 text-bg-dark\" style=\"width: 100%; height: 100vh;\">
\t<a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
\t\t<span class=\"fs-4 d-block\">Mon dashboard</span>
\t</a>
\t<hr>
\t{% if app.user.status == \"Candidat\" %}
\t\t<ul class=\"nav nav-pills flex-column mb-auto menu-link-items\">
\t\t\t{% if app.user.userProfil %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link text-white\">
\t\t\t\t\t\tMes candidatures
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link text-white\">
\t\t\t\t\t\tMes informations
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_user_profil')}}\" class=\"nav-link text-white\">
\t\t\t\t\tProfil
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>

\t{% else %}
\t\t<ul class=\"nav nav-pills flex-column mb-auto menu-link-items\">
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_entreprise_profil')}}\" class=\"nav-link text-white\">
\t\t\t\t\tProfil
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_offer')}}\" class=\"nav-link text-white\">Mes offres

\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"nav-link text-white\">
\t\t\t\t\tInformations
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_tag')}}\" class=\"nav-link text-white\">
\t\t\t\t\tLes Mot clés</a>
\t\t\t</li>
\t\t</li>
\t{% endif %}
</ul></div>
", "partials/_sidebar.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\partials\\_sidebar.html.twig");
    }
}
