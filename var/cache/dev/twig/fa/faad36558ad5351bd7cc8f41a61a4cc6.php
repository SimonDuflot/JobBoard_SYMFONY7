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

/* home/offre_emploi.html.twig */
class __TwigTemplate_0278e9f1054949a9c6a5c82ef535b470 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/offre_emploi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/offre_emploi.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/offre_emploi.html.twig", 1);
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
\t- Liste des offres d'emploi
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
\t\t\t\t\t<h1 class=\"\">Liste des offres d'emploi</h1>
\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\tRecherchez une offre d'emploi parmi les offres disponibles.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-3\">
\t\t\t<form>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search\" name=\"search\" placeholder=\"Rechercher une offre d'emploi\">
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<select class=\"form-select\" name=\"category\">
\t\t\t\t\t\t<option value=\"recent\">Plus récent</option>
\t\t\t\t\t\t<option value=\"old\">Plus ancien</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\tMots clés
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 45
            echo "                                        <div class=\"form-check me-3 m-b-2 d-inline-block\">

                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"tags[]\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" id=\"tag-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">

                                        <label class=\"form-check-label\" for=\"tag-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</label>

                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div>

\t\t\t\t</div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\">
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-9\">
\t\t\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4\">
\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 64, $this->source); })()), "data", [], "any", false, false, false, 64));
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
            // line 65
            echo "\t\t\t\t\t";
            $this->loadTemplate("partials/_job_card.html.twig", "home/offre_emploi.html.twig", 65)->display($context);
            // line 66
            echo "\t\t\t\t";
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
        // line 67
        echo "\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"col-md-6 mx-auto\">
\t\t\t\t";
        // line 71
        $this->loadTemplate("partials/_pagination_offres.html.twig", "home/offre_emploi.html.twig", 71)->display($context);
        // line 72
        echo "\t\t\t</div>
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
        return "home/offre_emploi.html.twig";
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
        return array (  212 => 72,  210 => 71,  204 => 67,  190 => 66,  187 => 65,  170 => 64,  157 => 53,  145 => 49,  138 => 47,  134 => 45,  130 => 44,  93 => 9,  83 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ parent() }}
\t- Liste des offres d'emploi
{% endblock %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div class=\"container text-center mt-5\">
\t\t\t\t\t<h1 class=\"\">Liste des offres d'emploi</h1>
\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\tRecherchez une offre d'emploi parmi les offres disponibles.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-3\">
\t\t\t<form>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search\" name=\"search\" placeholder=\"Rechercher une offre d'emploi\">
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<select class=\"form-select\" name=\"category\">
\t\t\t\t\t\t<option value=\"recent\">Plus récent</option>
\t\t\t\t\t\t<option value=\"old\">Plus ancien</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\tMots clés
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t{% for tag in tags %}
                                        <div class=\"form-check me-3 m-b-2 d-inline-block\">

                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"tags[]\" value=\"{{ tag.id }}\" id=\"tag-{{ tag.id }}\">

                                        <label class=\"form-check-label\" for=\"tag-{{ tag.id }}\">{{ tag.name }}</label>

                                    </div>
                                    {% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div>

\t\t\t\t</div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\">
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-9\">
\t\t\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4\">
\t\t\t\t{% for offer in offers.data %}
\t\t\t\t\t{% include \"partials/_job_card.html.twig\" %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"col-md-6 mx-auto\">
\t\t\t\t{% include \"partials/_pagination_offres.html.twig\" %}
\t\t\t</div>
\t</div>

{% endblock %}
", "home/offre_emploi.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\home\\offre_emploi.html.twig");
    }
}
