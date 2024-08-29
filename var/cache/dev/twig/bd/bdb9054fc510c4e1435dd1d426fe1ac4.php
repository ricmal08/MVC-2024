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

/* report.html.twig */
class __TwigTemplate_51e5af1c1c6a58d81f7407ff83ed0c5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<h1> Report </h1>
<h2> Kursmoment:</h2>
<li><a href=\"#kmom01\">Kmom01</a>
<li><a href=\"#kmom02\">Kmom02</a>
<li><a href=\"#kmom03\">Kmom03</a>    
</li>

<div class=\"presentation\">
<h2 id=\"kmom01\">Kmom01</h2>
<p>Jag har inte tidigare någon direkt erfarenhet av objektorientering annat än att jag själv försökte att lära mig lite java via Youtube för något år sedan, och givetvis kurserna design och webbteknologier där vi arbetade med PHP i ganska bred utsräckning.</p>

<p>PHP är ett objektorienterat programmeringsspråk, vilket innebär att det har stöd för att definiera klasser och skapa objekt från dessa klasser. En klass är en mall eller en ritning för att skapa objekt. Den beskriver vilka egenskaper och metoder som objekt av klassen kommer att ha.</p>

<p>För att skapa en klass i PHP behöver man först definiera dess namn och sedan ange dess egenskaper och metoder. Egenskaper beskriver vilka variabler objektet kommer att ha och metoder beskriver vilka funktioner objektet kommer att kunna utföra.</p>

<p>Jag uppfattar min kodbas som användes till uppgiften me/report som generellt god. Jag lånade strukturen från föreläsningen i kmom01 då jag ansåg att den var tillräckligt praktisk och jag utgick ifrån den när jag adderade till egna filer.</p>

<p>Efter att ha läst “PHP The Right Way” var min första tanke att det är otroligt brett och innefattar väldigt mycket mer än vad jag hade kunnat föreställa mig. Jag blev även förvånad över att PHP integrerar databaser, templating, testing med mera, delar som jag arbetat med enskilt men inte reflekterat över deras gemensamma nämnare. Det som var extra intressant var kapitel 14, Virtualization, där det nämndes att det är rekommenderat att arbeta i VMware, VirtualBox eller dylikt för att i förväg se hur implementationer kan påverkas av vilken utvecklingsmiljö de tillämpas för.</p>

<p>Jag själv har noterat, redan efter ett fåtal kurser på Blekinge Tekniska Högskola, att Windows-användare många gånger behöver hitta alternativa vägar för att installationer av virtuella verktyg, terminaler och uppkopplingar till server att fungera. I min mening verkar detta skilja sig exempelvis mot Mac-användare.</p>

<p>Min til för detta moment är att jag fortsättningsvis ska vara extra noggrann när det kommer till att kontrollera att alla verktyg så som PHP, Composer, npm etc är uppdaterade med senaste version då detta gav mig problem vid initiala installationen inför påbörjandet av uppgiften för detta kursmoment.</p>
<h2 id=\"kmom02\">Kmom02</h2>

<p>Arv är en mekanism som gör det möjligt för en klass att ärva egenskaper och metoder från en annan klass. Detta kan användas för att undvika att skriva redundanta kodblokkar och för att skapa en hierarki av klasser som bygger på varandra. I PHP kan man använda \"extends\" nyckelordet för att ange att en klass ärver från en annan klass.</p>

<p>Komposition innebär att man kombinerar flera klasser för att skapa en mer komplex struktur. Detta kan användas för att bygga mer flexibla system som är lättare att underhålla. I PHP kan man skapa en instans av en klass som en egenskap i en annan klass.</p>
    
<p>Ett interface definierar en uppsättning metoder som en klass kan implementera. Detta gör det möjligt att dela upp funktionalitet mellan klasser på ett mer flexibelt sätt, utan att behöva ändra på själva klasserna. I PHP kan man använda \"interface\" nyckelordet för att definiera ett interface.</p>

<p>Ett trait är en samling av metoder som kan användas av flera klasser. Detta kan användas för att undvika redundans i koden och för att göra det lättare att återanvända kod. I PHP kan man använda \"trait\" nyckelordet för att definiera ett trait som sedan kan användas i flera klasser.</p>

<p>Jag anser att implementeringen av uppgiften gick förhållandevis bra. Jag återanvände mig av mapp-strukturen från övningsuppgiften i kursmomenten och jag använde liknande logik i mina controller-/template-filer.</p>

<p>Gällande mina klasser anser jag att jag skulle kunna bättra både namn och definition för att göra det enklare att arbeta. Det är möjligt att mina befintliga klasser kunde vara mer specifika.</p>  

<p>Min känsla gällande att modellera kortspelet med flödesdiagram och psuedokod är att det påminde om att arbeta utefter ett flödesschema i databas-modellering. Det hjälpte mig definitivt med att visualisera en idé och bygga upp en logik att arbeta vidare med.</p>

<p>Min TIL för detta moment är att det är viktigt att tänka igenom hur man ska använda arv, komposition, interface och trait på ett effektivt sätt för att undvika vanliga misstag och skapa en kodbas som är lätt att förstå och underhålla. Några misstag som jag stötte på i min arbetsprocess är överanvändning av arv när komposition eventuellt skulle kunna varit bättre, men även att inte ha en tydlig plan för hur jag ska använda arv, kompositon, trait och interface vilket resulterade i att min kod blev svår att underhålla. Jag anser även att min bristfälliga design bidrog till överkomplicerade lösningar vilket är svårt att bryta ner allteftersom nya implementeringar sker löpande.</p>

<p>*Jag skulle såhär i efterhand även vilja lägga till att jag även stötte på problem med POST-metoden för JSON routerna och lösningen blev att tillfälligt ersätta POST-metoden mot en GET-metod. Jag noterade även att fler studenter hade skrivit om detta i Discord och att det lyfts fram att GET-metod var en acceptabel \"nödlösning\" för tillfället.</p>

<h2 id=\"kmom03\">Kmom03</h2>

</div>
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
        return "report.html.twig";
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
        return array (  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}
<h1> Report </h1>
<h2> Kursmoment:</h2>
<li><a href=\"#kmom01\">Kmom01</a>
<li><a href=\"#kmom02\">Kmom02</a>
<li><a href=\"#kmom03\">Kmom03</a>    
</li>

<div class=\"presentation\">
<h2 id=\"kmom01\">Kmom01</h2>
<p>Jag har inte tidigare någon direkt erfarenhet av objektorientering annat än att jag själv försökte att lära mig lite java via Youtube för något år sedan, och givetvis kurserna design och webbteknologier där vi arbetade med PHP i ganska bred utsräckning.</p>

<p>PHP är ett objektorienterat programmeringsspråk, vilket innebär att det har stöd för att definiera klasser och skapa objekt från dessa klasser. En klass är en mall eller en ritning för att skapa objekt. Den beskriver vilka egenskaper och metoder som objekt av klassen kommer att ha.</p>

<p>För att skapa en klass i PHP behöver man först definiera dess namn och sedan ange dess egenskaper och metoder. Egenskaper beskriver vilka variabler objektet kommer att ha och metoder beskriver vilka funktioner objektet kommer att kunna utföra.</p>

<p>Jag uppfattar min kodbas som användes till uppgiften me/report som generellt god. Jag lånade strukturen från föreläsningen i kmom01 då jag ansåg att den var tillräckligt praktisk och jag utgick ifrån den när jag adderade till egna filer.</p>

<p>Efter att ha läst “PHP The Right Way” var min första tanke att det är otroligt brett och innefattar väldigt mycket mer än vad jag hade kunnat föreställa mig. Jag blev även förvånad över att PHP integrerar databaser, templating, testing med mera, delar som jag arbetat med enskilt men inte reflekterat över deras gemensamma nämnare. Det som var extra intressant var kapitel 14, Virtualization, där det nämndes att det är rekommenderat att arbeta i VMware, VirtualBox eller dylikt för att i förväg se hur implementationer kan påverkas av vilken utvecklingsmiljö de tillämpas för.</p>

<p>Jag själv har noterat, redan efter ett fåtal kurser på Blekinge Tekniska Högskola, att Windows-användare många gånger behöver hitta alternativa vägar för att installationer av virtuella verktyg, terminaler och uppkopplingar till server att fungera. I min mening verkar detta skilja sig exempelvis mot Mac-användare.</p>

<p>Min til för detta moment är att jag fortsättningsvis ska vara extra noggrann när det kommer till att kontrollera att alla verktyg så som PHP, Composer, npm etc är uppdaterade med senaste version då detta gav mig problem vid initiala installationen inför påbörjandet av uppgiften för detta kursmoment.</p>
<h2 id=\"kmom02\">Kmom02</h2>

<p>Arv är en mekanism som gör det möjligt för en klass att ärva egenskaper och metoder från en annan klass. Detta kan användas för att undvika att skriva redundanta kodblokkar och för att skapa en hierarki av klasser som bygger på varandra. I PHP kan man använda \"extends\" nyckelordet för att ange att en klass ärver från en annan klass.</p>

<p>Komposition innebär att man kombinerar flera klasser för att skapa en mer komplex struktur. Detta kan användas för att bygga mer flexibla system som är lättare att underhålla. I PHP kan man skapa en instans av en klass som en egenskap i en annan klass.</p>
    
<p>Ett interface definierar en uppsättning metoder som en klass kan implementera. Detta gör det möjligt att dela upp funktionalitet mellan klasser på ett mer flexibelt sätt, utan att behöva ändra på själva klasserna. I PHP kan man använda \"interface\" nyckelordet för att definiera ett interface.</p>

<p>Ett trait är en samling av metoder som kan användas av flera klasser. Detta kan användas för att undvika redundans i koden och för att göra det lättare att återanvända kod. I PHP kan man använda \"trait\" nyckelordet för att definiera ett trait som sedan kan användas i flera klasser.</p>

<p>Jag anser att implementeringen av uppgiften gick förhållandevis bra. Jag återanvände mig av mapp-strukturen från övningsuppgiften i kursmomenten och jag använde liknande logik i mina controller-/template-filer.</p>

<p>Gällande mina klasser anser jag att jag skulle kunna bättra både namn och definition för att göra det enklare att arbeta. Det är möjligt att mina befintliga klasser kunde vara mer specifika.</p>  

<p>Min känsla gällande att modellera kortspelet med flödesdiagram och psuedokod är att det påminde om att arbeta utefter ett flödesschema i databas-modellering. Det hjälpte mig definitivt med att visualisera en idé och bygga upp en logik att arbeta vidare med.</p>

<p>Min TIL för detta moment är att det är viktigt att tänka igenom hur man ska använda arv, komposition, interface och trait på ett effektivt sätt för att undvika vanliga misstag och skapa en kodbas som är lätt att förstå och underhålla. Några misstag som jag stötte på i min arbetsprocess är överanvändning av arv när komposition eventuellt skulle kunna varit bättre, men även att inte ha en tydlig plan för hur jag ska använda arv, kompositon, trait och interface vilket resulterade i att min kod blev svår att underhålla. Jag anser även att min bristfälliga design bidrog till överkomplicerade lösningar vilket är svårt att bryta ner allteftersom nya implementeringar sker löpande.</p>

<p>*Jag skulle såhär i efterhand även vilja lägga till att jag även stötte på problem med POST-metoden för JSON routerna och lösningen blev att tillfälligt ersätta POST-metoden mot en GET-metod. Jag noterade även att fler studenter hade skrivit om detta i Discord och att det lyfts fram att GET-metod var en acceptabel \"nödlösning\" för tillfället.</p>

<h2 id=\"kmom03\">Kmom03</h2>

</div>
{% endblock %}
", "report.html.twig", "/home/ciderfabriken/dbwebb-kurser/mvc_new/me/report/templates/report.html.twig");
    }
}
