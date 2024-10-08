<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* api/index.html.twig */
class __TwigTemplate_f84a5cfd7f20ef3090bf94d89e6c13af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1>API Routes</h1>
  <ul class=\"api-list\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 7
            yield "        <li>
            ";
            // line 8
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 8) == "api_deck_draw_number")) {
                // line 9
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "path", [], "any", false, false, false, 9), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "description", [], "any", false, false, false, 9), "html", null, true);
                yield "
            ";
            } else {
                // line 11
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 11));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "path", [], "any", false, false, false, 11), "html", null, true);
                yield "</a> - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "description", [], "any", false, false, false, 11), "html", null, true);
                yield "
            ";
            }
            // line 13
            yield "        </li>

        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
    <form action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_shuffle");
        yield "\" method=\"post\" style=\"display:inline;\">
        <button type=\"submit\">Shuffle Deck</button>
    </form> - Shuffles the deck of cards.
  <br>
   <br>
    <form action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw");
        yield "\" method=\"post\" style=\"display:inline;\">
    <button type=\"submit\">Draw One Card</button>
    </form> - Draws one card from the deck.
    <br>
     <br>

    <form action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_number", ["number" => 1]);
        yield "\" method=\"post\" style=\"display:inline;\">
    <input type=\"number\" name=\"number\" value=\"1\" min=\"1\" required>
    <button type=\"submit\">Draw Multiple Cards</button>
    </form> - Draws multiple cards from the deck.
        




</ul>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "api/index.html.twig";
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
        return array (  129 => 29,  120 => 23,  112 => 18,  109 => 17,  100 => 13,  90 => 11,  82 => 9,  80 => 8,  77 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>API Routes</h1>
  <ul class=\"api-list\">
    {% for route in routes %}
        <li>
            {% if route.name == 'api_deck_draw_number' %}
                {{ route.path }} - {{ route.description }}
            {% else %}
                <a href=\"{{ path(route.name) }}\">{{ route.path }}</a> - {{ route.description }}
            {% endif %}
        </li>

        
    {% endfor %}

    <form action=\"{{ path('api_deck_shuffle') }}\" method=\"post\" style=\"display:inline;\">
        <button type=\"submit\">Shuffle Deck</button>
    </form> - Shuffles the deck of cards.
  <br>
   <br>
    <form action=\"{{ path('api_deck_draw') }}\" method=\"post\" style=\"display:inline;\">
    <button type=\"submit\">Draw One Card</button>
    </form> - Draws one card from the deck.
    <br>
     <br>

    <form action=\"{{ path('api_deck_draw_number', { 'number': 1 }) }}\" method=\"post\" style=\"display:inline;\">
    <input type=\"number\" name=\"number\" value=\"1\" min=\"1\" required>
    <button type=\"submit\">Draw Multiple Cards</button>
    </form> - Draws multiple cards from the deck.
        




</ul>


{% endblock %}
", "api/index.html.twig", "/home/ciderfabriken/dbwebb-kurser/mvc_new/me/report/templates/api/index.html.twig");
    }
}
