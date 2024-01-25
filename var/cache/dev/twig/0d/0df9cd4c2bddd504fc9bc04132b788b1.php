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

/* partials/_entreprise_card.html.twig */
class __TwigTemplate_e9d213c744d5f41d4e1ee2fe130bda09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_entreprise_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_entreprise_card.html.twig"));

        // line 1
        echo "<div class=\"col-md-6 mb-4\">
\t<div class=\"card mb-3 p-2 home-card\" style=\"max-width: 540px;\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 5, $this->source); })()), "logo", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"img-fluid rounded-start \" alt=\"Logo de l'entreprise\" style=\"height: 100%; width: 100%; object-fit: cover;\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 14, $this->source); })()), "address", [], "any", false, false, false, 14), "html", null, true);
        echo ",
\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 15, $this->source); })()), "city", [], "any", false, false, false, 15), "html", null, true);
        echo ",
\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 16, $this->source); })()), "country", [], "any", false, false, false, 16), "html", null, true);
        echo "<br>
\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 18, $this->source); })()), "phoneNumber", [], "any", false, false, false, 18), "html", null, true);
        echo "<br>
\t\t\t\t\t\t<i class=\"bi bi-envelope-fill\"></i>
\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"mailto:";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Envoyer un email</a>
\t\t\t\t\t<a href=\"tel:";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 23, $this->source); })()), "phoneNumber", [], "any", false, false, false, 23), "html", null, true);
        echo "\" class=\"btn  btn-sm btn-warning\">Appeler</a>

\t\t\t\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 25, $this->source); })()), "website", [], "any", false, false, false, 25), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">Site web</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_entreprise_card.html.twig";
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
        return array (  96 => 25,  91 => 23,  87 => 22,  82 => 20,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-6 mb-4\">
\t<div class=\"card mb-3 p-2 home-card\" style=\"max-width: 540px;\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"{{entreprise.logo}}\" class=\"img-fluid rounded-start \" alt=\"Logo de l'entreprise\" style=\"height: 100%; width: 100%; object-fit: cover;\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t{{entreprise.name}}
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t\t{{entreprise.address}},
\t\t\t\t\t\t{{entreprise.city}},
\t\t\t\t\t\t{{entreprise.country}}<br>
\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t{{entreprise.phoneNumber}}<br>
\t\t\t\t\t\t<i class=\"bi bi-envelope-fill\"></i>
\t\t\t\t\t\t{{entreprise.email}}
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"mailto:{{entreprise.email}}\" class=\"btn btn-sm btn-outline-secondary\">Envoyer un email</a>
\t\t\t\t\t<a href=\"tel:{{entreprise.phoneNumber}}\" class=\"btn  btn-sm btn-warning\">Appeler</a>

\t\t\t\t\t<a href=\"{{entreprise.website}}\" class=\"btn btn-sm btn-info\">Site web</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "partials/_entreprise_card.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\partials\\_entreprise_card.html.twig");
    }
}
