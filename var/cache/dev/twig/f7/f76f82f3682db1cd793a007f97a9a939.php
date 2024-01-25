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

/* partials/_footer.html.twig */
class __TwigTemplate_4c4f513049cdbd3a602a3ed8c661863e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "<div class=\"container-fluid bg-dark\">
\t<footer class=\"py-1\">
\t\t<ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Jobs</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Entreprise</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">FAQs</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Conctact</a>
\t\t\t</li>
\t\t</ul>
\t\t<p class=\"text-center text-white\">
\t\t\t&copy; Made with
\t\t\t<i class=\"bi bi-heart-fill text-danger\"></i>
\t\t\tby
\t\t\t<a href=\"#\" class=\"text-decoration-none text-white\">symfony job board project konexio promo 10 - 2024</a>
\t\t</p>
\t</footer>
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
        return "partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-dark\">
\t<footer class=\"py-1\">
\t\t<ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Jobs</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Entreprise</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">FAQs</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-white\">Conctact</a>
\t\t\t</li>
\t\t</ul>
\t\t<p class=\"text-center text-white\">
\t\t\t&copy; Made with
\t\t\t<i class=\"bi bi-heart-fill text-danger\"></i>
\t\t\tby
\t\t\t<a href=\"#\" class=\"text-decoration-none text-white\">symfony job board project konexio promo 10 - 2024</a>
\t\t</p>
\t</footer>
</div>
", "partials/_footer.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\partials\\_footer.html.twig");
    }
}
