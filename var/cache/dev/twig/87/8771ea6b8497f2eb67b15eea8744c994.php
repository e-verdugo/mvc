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

/* proj/plump.html.twig */
class __TwigTemplate_2175ea94f11c20db9378e3aecf469f56 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "projbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/plump.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/plump.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/plump.html.twig", 1);
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

        echo "Plump";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<h1>Plump</h1>

<h3>Trumf: </h3>
";
        // line 10
        if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 10, $this->source); })()), "card", [], "method", false, false, false, 10), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 10, $this->source); })()), "card", [], "method", false, false, false, 10), 2, 6) < 127184))) {
            // line 11
            echo "    <button style='font-size: 95px; color: red;'>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 11, $this->source); })()), "card", [], "method", false, false, false, 11);
            echo "</button>
";
        } else {
            // line 13
            echo "    <button style='font-size: 95px; color: black;'>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 13, $this->source); })()), "card", [], "method", false, false, false, 13);
            echo "</button>
";
        }
        // line 15
        echo "
<h3>Hög: </h3>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pile"]) || array_key_exists("pile", $context) ? $context["pile"] : (function () { throw new RuntimeError('Variable "pile" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 18
            echo "    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 18), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 18), 2, 6) < 127184))) {
                // line 19
                echo "        <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 19);
                echo "</button>
    ";
            } else {
                // line 21
                echo "        <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 21);
                echo "</button>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<h3>Kort: </h3>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 27
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "
    Antal stick: ";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["stick"]) || array_key_exists("stick", $context) ? $context["stick"] : (function () { throw new RuntimeError('Variable "stick" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "
    <br>
    <form method=\"post\">
        <fieldset>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["player"], "cards", [], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 33
                echo "                ";
                if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 33), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 33), 2, 6) < 127184))) {
                    // line 34
                    echo "                    <input type=\"submit\" style='font-size: 95px; color: red;' name=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 34), "html", null, true);
                    echo " value=";
                    echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 34);
                    echo ">
                ";
                } else {
                    // line 36
                    echo "                    <input type=\"submit\" style='font-size: 95px; color: black;' name=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 36), "html", null, true);
                    echo " value=";
                    echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 36);
                    echo ">
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </fieldset>
    </form>
    <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        // line 50
        echo "
<form method=\"post\">
    <fieldset>
        <p>
            <input type=\"text\" name=\"betNum\" value=\"Hur många stick?\">
            <input type=\"submit\" ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 55, $this->source); })()), "html", null, true);
        echo " name=\"bet\" value=\"Bet\">
            <input type=\"submit\" name=\"reset\" value=\"Reset game\">
        </p>
    </fieldset>
</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/plump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 55,  196 => 50,  193 => 43,  184 => 39,  178 => 38,  170 => 36,  162 => 34,  159 => 33,  155 => 32,  148 => 28,  143 => 27,  139 => 26,  135 => 24,  125 => 21,  119 => 19,  116 => 18,  112 => 17,  108 => 15,  102 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Plump{% endblock %}

{% block content %}

<h1>Plump</h1>

<h3>Trumf: </h3>
{% if 127153 <= trumf.card()[2:6] and trumf.card()[2:6] < 127184 %}
    <button style='font-size: 95px; color: red;'>{{ trumf.card()|raw }}</button>
{% else %}
    <button style='font-size: 95px; color: black;'>{{ trumf.card()|raw }}</button>
{% endif %}

<h3>Hög: </h3>
{% for card in pile %}
    {% if 127153 <= card.card()[2:6] and card.card()[2:6] < 127184 %}
        <button style='font-size: 95px; color: red;'>{{ card.card()|raw }}</button>
    {% else %}
        <button style='font-size: 95px; color: black;'>{{ card.card()|raw }}</button>
    {% endif %}
{% endfor %}

<h3>Kort: </h3>
{% for player in players %}
    {{player.name}}
    Antal stick: {{stick}}
    <br>
    <form method=\"post\">
        <fieldset>
            {% for card in player.cards() %}
                {% if 127153 <= card.card()[2:6] and card.card()[2:6] < 127184 %}
                    <input type=\"submit\" style='font-size: 95px; color: red;' name={{card.card()}} value={{ card.card()|raw }}>
                {% else %}
                    <input type=\"submit\" style='font-size: 95px; color: black;' name={{card.card()}} value={{ card.card()|raw }}>
                {% endif %}
            {% endfor %}
        </fieldset>
    </form>
    <hr>
{% endfor %}

{# <table>
    {% for player in players %}
        <thead>{{player.name}}</thead>
        <tbody>{{player.score}}</tbody>
    {% endfor %}
</table> #}

<form method=\"post\">
    <fieldset>
        <p>
            <input type=\"text\" name=\"betNum\" value=\"Hur många stick?\">
            <input type=\"submit\" {{disabled}} name=\"bet\" value=\"Bet\">
            <input type=\"submit\" name=\"reset\" value=\"Reset game\">
        </p>
    </fieldset>
</form>

{% endblock %}
", "proj/plump.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\plump.html.twig");
    }
}
