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

/* partials/_job_card.html.twig */
class __TwigTemplate_b2bd44a771c1a42d9c5c6d1673feda65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_job_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_job_card.html.twig"));

        // line 1
        echo "<div class=\"col mb-4\">
\t<div class=\"card h-100 home-card\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between mb-2\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 5, $this->source); })()), "entreprise", [], "any", false, false, false, 5), "logo", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Logo de l'entreprise\" style=\"height: 50px; width: 50px; object-fit: cover;border-radius: 50%;\"/>

\t\t\t\t<p class=\"card-subtitle text-end ms-2\">
\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 9, $this->source); })()), "location", [], "any", false, false, false, 9), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<h5 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 16, $this->source); })()), "entreprise", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 19, $this->source); })()), "contractType", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 22, $this->source); })()), "salary", [], "any", false, false, false, 22) / 100), "html", null, true);
        echo "
\t\t\t\t\t€/an</p>
\t\t\t</div>
\t\t\t<p class=\"card-text\">
\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 26, $this->source); })()), "shortDescription", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<div class=\"mb-1\">
\t\t\t\t<p class=\"card-text\">Compétences</p>
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 31, $this->source); })()), "tags", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 32
            echo "\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<p class=\"card-text\">
\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t<i class=\"bi bi-clock\"></i>
\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 41, $this->source); })()), "createdAt", [], "any", false, false, false, 41), null, "fr");
        echo "
\t\t\t\t</small>
\t\t\t</p>
\t\t</div>
\t\t<div class=\"card-footer text-center\">
\t\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_emploi_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 46, $this->source); })()), "slug", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\tPostuler
\t\t\t</a>
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
        return "partials/_job_card.html.twig";
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
        return array (  127 => 46,  119 => 41,  112 => 36,  103 => 33,  100 => 32,  96 => 31,  88 => 26,  81 => 22,  75 => 19,  69 => 16,  62 => 12,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col mb-4\">
\t<div class=\"card h-100 home-card\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between mb-2\">
\t\t\t\t<img src=\"{{offer.entreprise.logo}}\" class=\"card-img-top\" alt=\"Logo de l'entreprise\" style=\"height: 50px; width: 50px; object-fit: cover;border-radius: 50%;\"/>

\t\t\t\t<p class=\"card-subtitle text-end ms-2\">
\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t{{offer.location}}
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<h5 class=\"card-title\">{{offer.title}}</h5>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t{{offer.entreprise.name}}
\t\t\t\t</p>
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t{{offer.contractType.name}}
\t\t\t\t</p>
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t{{offer.salary / 100}}
\t\t\t\t\t€/an</p>
\t\t\t</div>
\t\t\t<p class=\"card-text\">
\t\t\t\t{{offer.shortDescription}}
\t\t\t</p>
\t\t\t<div class=\"mb-1\">
\t\t\t\t<p class=\"card-text\">Compétences</p>
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t{% for tag in offer.tags %}
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">{{tag.name}}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<p class=\"card-text\">
\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t<i class=\"bi bi-clock\"></i>
\t\t\t\t\t{{offer.createdAt|ago(locale='fr')}}
\t\t\t\t</small>
\t\t\t</p>
\t\t</div>
\t\t<div class=\"card-footer text-center\">
\t\t\t<a href=\"{{path('app_offre_emploi_show',{'slug':offer.slug})}}\" class=\"btn btn-primary\">
\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\tPostuler
\t\t\t</a>
\t\t</div>
\t</div>
</div>
", "partials/_job_card.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\partials\\_job_card.html.twig");
    }
}
