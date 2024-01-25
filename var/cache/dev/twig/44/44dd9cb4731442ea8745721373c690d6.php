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

/* partials/_navbar.html.twig */
class __TwigTemplate_4e190e786d2a41eb75373fe9bfaba41e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 64
        echo "

<header class=\"p-3 text-bg-dark\">
\t<div class=\"container\">
\t\t<div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"40\" height=\"40\" class=\"me-2\">
\t\t\t</a>

\t\t\t<ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_emploi");
        echo "\" class=\"nav-link px-2 text-white\">Offres</a>

\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprises");
        echo "\" class=\"nav-link px-2 text-white\">Entreprise</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 90
            echo "
\t\t\t\t";
            // line 91
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "status", [], "any", false, false, false, 91) == "Candidat") && (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "userProfil", [], "any", false, false, false, 91)))) {
                // line 92
                echo "\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
                echo "\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 98
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
                echo "\">Profile</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 102
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 107
            echo "
\t\t\t\t";
            // line 108
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "status", [], "any", false, false, false, 108) == "Candidat") &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "userProfil", [], "any", false, false, false, 108)))) {
                // line 109
                echo "

\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "userProfil", [], "any", false, false, false, 113), "picture", [], "any", false, false, false, 113))), "html", null, true);
                echo "\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "userProfil", [], "any", false, false, false, 117), "slug", [], "any", false, false, false, 117)]), "html", null, true);
                echo "\" class=\"dropdown-item\">Profile</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 125
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 130
            echo "
\t\t\t\t";
            // line 131
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "status", [], "any", false, false, false, 131) == "Professionnel") && (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "entrepriseProfil", [], "any", false, false, false, 131)))) {
                // line 132
                echo "
\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
                echo "\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 139
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_profil");
                echo "\">Profile</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 144
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 149
            echo "
\t\t\t\t";
            // line 150
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "status", [], "any", false, false, false, 150) == "Professionnel") &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "entrepriseProfil", [], "any", false, false, false, 150)))) {
                // line 151
                echo "\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "entrepriseProfil", [], "any", false, false, false, 153), "logo", [], "any", false, false, false, 153))), "html", null, true);
                echo "\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 157
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entreprise_profil");
                echo "\" class=\"dropdown-item\">Profile</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 165
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 170
            echo "

\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t<a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-light me-2\">Login</a>

\t\t\t\t\t<a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-warning\">Sign-up</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 179
        echo "
\t\t</div>
\t</div>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_navbar.html.twig";
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
        return array (  239 => 179,  233 => 176,  228 => 174,  225 => 173,  220 => 170,  212 => 165,  201 => 157,  194 => 153,  190 => 151,  188 => 150,  185 => 149,  177 => 144,  169 => 139,  162 => 135,  157 => 132,  155 => 131,  152 => 130,  144 => 125,  133 => 117,  126 => 113,  120 => 109,  118 => 108,  115 => 107,  107 => 102,  100 => 98,  93 => 94,  89 => 92,  87 => 91,  84 => 90,  82 => 89,  72 => 82,  65 => 78,  59 => 75,  51 => 70,  43 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("{# <header class=\"p-3 text-bg-dark\">
\t<div class=\"container\">
\t\t<div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
\t\t\t\t<img src=\"{{asset('uploads/logo.png')}}\" alt=\"logo\" width=\"40\" height=\"40\" class=\"me-2\">
\t\t\t</a>

\t\t\t<ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_home')}}\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Offres</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Entreprise</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t{% set userStatus = app.user.status %}

\t\t\t\t{% set userProfile = userStatus == 'Candidat' ? app.user.userProfil : app.user.entrepriseProfil %}


\t\t\t\t{% set defaultImage = asset('uploads/default.png') %}

\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<img src=\"{{ userProfile is not null and userProfile.logo is not null ? asset('uploads/' ~ userProfile.logo) : defaultImage }}\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ userStatus == 'Candidat' ? path('app_user_profil') : path('app_entreprise_profil') }}\" class=\"dropdown-item\">Profile</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% if userStatus == 'Professionnel' and userProfile is not null %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Sign out</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>


\t\t\t{% else %}
\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t<a href=\"{{path('app_login')}}\" class=\"btn btn-outline-light me-2\">Login</a>

\t\t\t\t\t<a href=\"{{path('app_register')}}\" class=\"btn btn-warning\">Sign-up</a>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t</div>
</header> #}


<header class=\"p-3 text-bg-dark\">
\t<div class=\"container\">
\t\t<div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
\t\t\t\t<img src=\"{{asset('uploads/logo.png')}}\" alt=\"logo\" width=\"40\" height=\"40\" class=\"me-2\">
\t\t\t</a>

\t\t\t<ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_home')}}\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_offre_emploi')}}\" class=\"nav-link px-2 text-white\">Offres</a>

\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_entreprises')}}\" class=\"nav-link px-2 text-white\">Entreprise</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t{% if is_granted('ROLE_USER') %}

\t\t\t\t{% if app.user.status =='Candidat' and app.user.userProfil is null %}
\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"{{asset('uploads/default.png')}}\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_user_profil')}}\">Profile</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if app.user.status =='Candidat' and app.user.userProfil is not null %}


\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"{{asset('uploads/'~ app.user.userProfil.picture)}}\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_user_profil_show',{'slug':app.user.userProfil.slug})}}\" class=\"dropdown-item\">Profile</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if app.user.status =='Professionnel' and app.user.entrepriseProfil is null %}

\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"{{asset('uploads/default.png')}}\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_entreprise_profil')}}\">Profile</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if app.user.status =='Professionnel' and app.user.entrepriseProfil is not null %}
\t\t\t\t\t<div class=\"dropdown text-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"{{asset('uploads/'~ app.user.entrepriseProfil.logo)}}\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_entreprise_profil')}}\" class=\"dropdown-item\">Profile</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}


\t\t\t{% else %}
\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t<a href=\"{{path('app_login')}}\" class=\"btn btn-outline-light me-2\">Login</a>

\t\t\t\t\t<a href=\"{{path('app_register')}}\" class=\"btn btn-warning\">Sign-up</a>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t</div>
</header>
", "partials/_navbar.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\partials\\_navbar.html.twig");
    }
}
