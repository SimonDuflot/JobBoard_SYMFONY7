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

/* partials/_pagination.html.twig */
class __TwigTemplate_2247b25da4cb85ea66ad292ffb78d79b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_pagination.html.twig"));

        // line 1
        $context["routeName"] = "app_offre_emploi";
        // line 2
        $context["pages"] = twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2);
        // line 3
        $context["page"] = twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 3, $this->source); })()), "page", [], "any", false, false, false, 3);
        // line 4
        echo "
<nav aria-label=\"Page navigation example\">
  <ul class=\"pagination justify-content-center\">
    <li class=\"page-item ";
        // line 7
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()) == 1)) {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 8, $this->source); })()), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()) - 1)]), "html", null, true);
        echo "\" tabindex=\"-1\">
      <i class=\"bi bi-arrow-left\"></i>
      </a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 12, $this->source); })()) - 2), ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 12, $this->source); })()) + 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "\t\t\t";
            if ((($context["i"] > 0) && ($context["i"] <= (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 13, $this->source); })())))) {
                // line 14
                echo "\t\t\t\t<li class=\"page-item ";
                if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 14, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 15, $this->source); })()), ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 18
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <li class=\"page-item ";
        // line 20
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 20, $this->source); })()))) {
            echo "disabled";
        }
        echo "\"><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 20, $this->source); })()), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()) + 1)]), "html", null, true);
        echo "\"><i class=\"bi bi-arrow-right\"></i>
    </a>
    </li>
  </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_pagination.html.twig";
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
        return array (  98 => 20,  95 => 19,  89 => 18,  81 => 15,  74 => 14,  71 => 13,  67 => 12,  60 => 8,  54 => 7,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set routeName = 'app_offre_emploi' %}
{% set pages = offers.pages %}
{% set page = offers.page %}

<nav aria-label=\"Page navigation example\">
  <ul class=\"pagination justify-content-center\">
    <li class=\"page-item {% if page == 1 %}disabled{% endif %}\">
      <a class=\"page-link\" href=\"{{path(routeName,{page: page -1})}}\" tabindex=\"-1\">
      <i class=\"bi bi-arrow-left\"></i>
      </a>
    </li>
    {% for i in (page - 2) .. (page + 2) %}
\t\t\t{% if i > 0 and i <= pages %}
\t\t\t\t<li class=\"page-item {% if i == page %}active{% endif %}\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(routeName, {'page': i}) }}\">{{ i }}</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}

    <li class=\"page-item {% if page == pages %}disabled{% endif %}\"><a class=\"page-link\" href=\"{{path(routeName, {page: page+1})}}\"><i class=\"bi bi-arrow-right\"></i>
    </a>
    </li>
  </ul>
</nav>", "partials/_pagination.html.twig", "C:\\wamp64\\www\\SYMFONY\\job_board_final\\project_job_board\\templates\\partials\\_pagination.html.twig");
    }
}
