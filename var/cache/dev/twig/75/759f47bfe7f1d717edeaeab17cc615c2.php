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

/* card/card.html.twig */
class __TwigTemplate_8d718869edad3f41e90b02a174bc7269 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/card.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Card Game";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<h1>Card game</h1>
        <ul>
            <li><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck");
        yield "\">Deck</li>
            <li><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_shuffle");
        yield "\">Shuffle Deck</a></li>
            <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_draw");
        yield "\">Draw</a></li>
        </ul>
<br>
<p>Här är en genomgång över samtliga applikationsklasser samt struktur på klasserna och dess relationer som används i min konstruktion för 'Card Game'.</p>

<p>Jag har även inkluderat ett UML-klass diagram som visualiserar strukturen och relationerna.</p>

<br>
<p><b>Card</b> - Representerar ett enskilt spelkort med egenskaper för färg (suit), rank (värde på kortet, till exempel \"Kung\" eller \"Ess\") samt ett numeriskt värde (value).</p>
<p><b>CardGraphic</b> - En subklass till Card som innehåller en rank till en symbol som representerar kortet.</p>
<p><b>CardGameController</b> - Hanterar spelrelaterad logik för kortleken, såsom att visa kortleken, dra kort, och visa korten som har dragits. Denna controller innehåller flera rutter (routes) som definierar olika funktioner i kortspelet. Controllern använder Card-klassen för att representera varje enskilt kort i kortleken. När kort dras eller visas, skapas och hanteras instanser av Card-klassen inom kontrollern. Funktionen för att initialisera kortleken (initializeDeck) skapar kort som är instanser av Card-klassen.</p>
<br>
<img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/UMLCardgame.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"uml\">
<br>

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
        return "card/card.html.twig";
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
        return array (  117 => 22,  102 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block body %}
<h1>Card game</h1>
        <ul>
            <li><a href=\"{{ path('card_deck') }}\">Deck</li>
            <li><a href=\"{{ path('card_deck_shuffle') }}\">Shuffle Deck</a></li>
            <li><a href=\"{{ path('card_deck_draw') }}\">Draw</a></li>
        </ul>
<br>
<p>Här är en genomgång över samtliga applikationsklasser samt struktur på klasserna och dess relationer som används i min konstruktion för 'Card Game'.</p>

<p>Jag har även inkluderat ett UML-klass diagram som visualiserar strukturen och relationerna.</p>

<br>
<p><b>Card</b> - Representerar ett enskilt spelkort med egenskaper för färg (suit), rank (värde på kortet, till exempel \"Kung\" eller \"Ess\") samt ett numeriskt värde (value).</p>
<p><b>CardGraphic</b> - En subklass till Card som innehåller en rank till en symbol som representerar kortet.</p>
<p><b>CardGameController</b> - Hanterar spelrelaterad logik för kortleken, såsom att visa kortleken, dra kort, och visa korten som har dragits. Denna controller innehåller flera rutter (routes) som definierar olika funktioner i kortspelet. Controllern använder Card-klassen för att representera varje enskilt kort i kortleken. När kort dras eller visas, skapas och hanteras instanser av Card-klassen inom kontrollern. Funktionen för att initialisera kortleken (initializeDeck) skapar kort som är instanser av Card-klassen.</p>
<br>
<img src=\"{{ asset('img/UMLCardgame.jpg') }}\" alt=\"\" class=\"uml\">
<br>

{% endblock %}", "card/card.html.twig", "/home/ciderfabriken/dbwebb-kurser/mvc_new/me/report/templates/card/card.html.twig");
    }
}
