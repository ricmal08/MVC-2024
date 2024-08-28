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

<p>Här är en genomgång över samtliga applikationsklasser samt struktur på klasserna och dess relationer som används i min konstruktion för 'Card Game'.</p>

<p>Ytterligare längre ned på sidan har jag även inkluderat ett UML klass diagram som visualiserar strukturen och relationerna.</p>

<br>
<p>Card - En klass som representerar ett enskilt kort i en kortlek. Klassen innehåller egenskaper som färg(suit), värde(value) och en rang(rank). Klassen innehåller också två metoder getSuit() och getRank() för att hämta färg och rang.</p>
<p>CardHand - En klass som representerar en giv</p>
<p>DeckOfCards - En klass som representerar en kortlek. Klassen innehåller en array av Card-objekt och metoder för att skapa, blanda och dra kort från kortleken.</p>
<p>CardGraphic - En subklass till Card som innehåller en länk till en bild som representerar kortet.</p>
<p>CardGameController - En controller-klass som hanterar alla förfrågningar som rör spelet. Klassen använder DeckOfCards för att skapa en kortlek och CardGraphic för att visa korten i spelet.</p>
<p>Twig-templates - En serie Twig-templates för att visa kortleken och resultaten av dragningarna.</p>
<br>
<li><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_index");
        yield "\">Klicka här för att komma till min 'api/' route </a></li>
<br>
<br>
<img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uml.jpg"), "html", null, true);
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
        return array (  112 => 23,  106 => 20,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block body %}
<h1>Card game</h1>

<p>Här är en genomgång över samtliga applikationsklasser samt struktur på klasserna och dess relationer som används i min konstruktion för 'Card Game'.</p>

<p>Ytterligare längre ned på sidan har jag även inkluderat ett UML klass diagram som visualiserar strukturen och relationerna.</p>

<br>
<p>Card - En klass som representerar ett enskilt kort i en kortlek. Klassen innehåller egenskaper som färg(suit), värde(value) och en rang(rank). Klassen innehåller också två metoder getSuit() och getRank() för att hämta färg och rang.</p>
<p>CardHand - En klass som representerar en giv</p>
<p>DeckOfCards - En klass som representerar en kortlek. Klassen innehåller en array av Card-objekt och metoder för att skapa, blanda och dra kort från kortleken.</p>
<p>CardGraphic - En subklass till Card som innehåller en länk till en bild som representerar kortet.</p>
<p>CardGameController - En controller-klass som hanterar alla förfrågningar som rör spelet. Klassen använder DeckOfCards för att skapa en kortlek och CardGraphic för att visa korten i spelet.</p>
<p>Twig-templates - En serie Twig-templates för att visa kortleken och resultaten av dragningarna.</p>
<br>
<li><a href=\"{{ path('api_index') }}\">Klicka här för att komma till min 'api/' route </a></li>
<br>
<br>
<img src=\"{{ asset('img/uml.jpg') }}\" alt=\"\" class=\"uml\">
<br>

{% endblock %}", "card/card.html.twig", "/home/ciderfabriken/dbwebb-kurser/mvc/me/report/templates/card/card.html.twig");
    }
}
