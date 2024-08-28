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

/* pig/play.html.twig */
class __TwigTemplate_9b586143496c45d1fd4ed468c72b16aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pig/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pig/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pig/play.html.twig", 1);
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

        yield "Pig Game";
        
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
        yield "<h1>Pig game [PLAYING]</h1>

<p>Roll the dices or save the points you have.</p>

<p>You are playing with ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pigDices"]) || array_key_exists("pigDices", $context) ? $context["pigDices"] : (function () { throw new RuntimeError('Variable "pigDices" does not exist.', 10, $this->source); })()), "html", null, true);
        yield " dices.</p>

<p>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["diceValues"]) || array_key_exists("diceValues", $context) ? $context["diceValues"] : (function () { throw new RuntimeError('Variable "diceValues" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            yield "    <span class=\"die\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</p>

<p>Round: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pigRound"]) || array_key_exists("pigRound", $context) ? $context["pigRound"] : (function () { throw new RuntimeError('Variable "pigRound" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</p>
<p>Total: ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pigTotal"]) || array_key_exists("pigTotal", $context) ? $context["pigTotal"] : (function () { throw new RuntimeError('Variable "pigTotal" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</p>

<form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"roll\" value=\"Roll\"
            onClick=\"this.form.action='";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rollUrl"]) || array_key_exists("rollUrl", $context) ? $context["rollUrl"] : (function () { throw new RuntimeError('Variable "rollUrl" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "';\"
        >
        <input type=\"submit\" name=\"save\" value=\"Save\"
            onClick=\"this.form.action='";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saveUrl"]) || array_key_exists("saveUrl", $context) ? $context["saveUrl"] : (function () { throw new RuntimeError('Variable "saveUrl" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "';\"
        >
        <input type=\"submit\" name=\"restart\" value=\"Restart\"
            onClick=\"this.form.action='";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["restartUrl"]) || array_key_exists("restartUrl", $context) ? $context["restartUrl"] : (function () { throw new RuntimeError('Variable "restartUrl" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "';this.form.method='get';\"
        >
    </p>

    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pig/flash.html.twig");
        yield "

</form>

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
        return "pig/play.html.twig";
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
        return array (  150 => 34,  143 => 30,  137 => 27,  131 => 24,  123 => 19,  119 => 18,  115 => 16,  106 => 14,  102 => 13,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Pig Game{% endblock %}

{% block body %}
<h1>Pig game [PLAYING]</h1>

<p>Roll the dices or save the points you have.</p>

<p>You are playing with {{ pigDices }} dices.</p>

<p>
{% for value in diceValues %}
    <span class=\"die\">{{ value }}</span>
{% endfor %}
</p>

<p>Round: {{ pigRound }}</p>
<p>Total: {{ pigTotal }}</p>

<form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"roll\" value=\"Roll\"
            onClick=\"this.form.action='{{ rollUrl }}';\"
        >
        <input type=\"submit\" name=\"save\" value=\"Save\"
            onClick=\"this.form.action='{{ saveUrl }}';\"
        >
        <input type=\"submit\" name=\"restart\" value=\"Restart\"
            onClick=\"this.form.action='{{ restartUrl }}';this.form.method='get';\"
        >
    </p>

    {{ include('pig/flash.html.twig') }}

</form>

{% endblock %}
", "pig/play.html.twig", "/home/ciderfabriken/dbwebb-kurser/mvc/me/report/templates/pig/play.html.twig");
    }
}
