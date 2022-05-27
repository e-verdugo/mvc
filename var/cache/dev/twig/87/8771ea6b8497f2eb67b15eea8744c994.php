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

<div class=\"container\">
    <div style=\"justify-content: space-around;\">
        <h3>Trumf: </h3>
        ";
        // line 12
        if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 12, $this->source); })()), "card", [], "method", false, false, false, 12), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 12, $this->source); })()), "card", [], "method", false, false, false, 12), 2, 6) < 127184))) {
            // line 13
            echo "            <button style='font-size: 95px; color: red;'>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 13, $this->source); })()), "card", [], "method", false, false, false, 13);
            echo "</button>
        ";
        } else {
            // line 15
            echo "            <button style='font-size: 95px; color: black;'>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["trumf"]) || array_key_exists("trumf", $context) ? $context["trumf"] : (function () { throw new RuntimeError('Variable "trumf" does not exist.', 15, $this->source); })()), "card", [], "method", false, false, false, 15);
            echo "</button>
        ";
        }
        // line 17
        echo "    </div>
    <div>
        <h3>Hög: </h3>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pile"]) || array_key_exists("pile", $context) ? $context["pile"] : (function () { throw new RuntimeError('Variable "pile" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 21
            echo "            ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 21), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 21), 2, 6) < 127184))) {
                // line 22
                echo "                <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 22);
                echo "</button>
            ";
            } else {
                // line 24
                echo "                <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 24);
                echo "</button>
            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        <form method=\"post\">
            <fieldset>
                <input type=\"submit\" ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " value=\"Se vem som vann\">
            </fieldset>
        </form>
    </div>
    <div>
        ";
        // line 34
        if (((isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 34, $this->source); })()) != null)) {
            // line 35
            echo "        <h3>Vinnande kort: </h3>
        ";
            // line 36
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 36, $this->source); })()), "card", [], "method", false, false, false, 36), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 36, $this->source); })()), "card", [], "method", false, false, false, 36), 2, 6) < 127184))) {
                // line 37
                echo "            <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 37, $this->source); })()), "card", [], "method", false, false, false, 37);
                echo "</button>
        ";
            } else {
                // line 39
                echo "            <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 39, $this->source); })()), "card", [], "method", false, false, false, 39);
                echo "</button>
        ";
            }
            // line 41
            echo "        <form method=\"post\">
            <fieldset>
                <input type=\"submit\" name=\"roundDone\" value=\"Starta nästa runda\">
            </fieldset>
        </form>
    ";
        }
        // line 47
        echo "    </div>

    ";
        // line 55
        echo "</div>

    <div>
        <h3>Kort: </h3>
        ";
        // line 60
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "
        <br>
        Satsning: ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["stick"]) || array_key_exists("stick", $context) ? $context["stick"] : (function () { throw new RuntimeError('Variable "stick" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "
        <br>
        Nuvarande stick: ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["currStick"]) || array_key_exists("currStick", $context) ? $context["currStick"] : (function () { throw new RuntimeError('Variable "currStick" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "
        <br>
        <form method=\"post\">
            <fieldset>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 68, $this->source); })()), "cards", [], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 69
            echo "                    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 69), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 69), 2, 6) < 127184))) {
                // line 70
                echo "                        <input type=\"submit\" ";
                echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 70, $this->source); })()), "html", null, true);
                echo " style='font-size: 95px; color: red;' name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "match", [], "method", false, false, false, 70), "html", null, true);
                echo " value=";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 70);
                echo ">
                    ";
            } else {
                // line 72
                echo "                        <input type=\"submit\" ";
                echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 72, $this->source); })()), "html", null, true);
                echo " style='font-size: 95px; color: black;' name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "match", [], "method", false, false, false, 72), "html", null, true);
                echo " value=";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 72);
                echo ">
                    ";
            }
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </fieldset>
        </form>
        <hr>
        ";
        // line 79
        echo "    </div>

    <form method=\"post\">
        <fieldset>
            <p>
                <input type=\"text\" name=\"betNum\" value=\"Hur många stick?\">
                <input type=\"submit\" ";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["bet"]) || array_key_exists("bet", $context) ? $context["bet"] : (function () { throw new RuntimeError('Variable "bet" does not exist.', 85, $this->source); })()), "html", null, true);
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
        return array (  253 => 85,  245 => 79,  240 => 75,  234 => 74,  224 => 72,  214 => 70,  211 => 69,  207 => 68,  200 => 64,  195 => 62,  189 => 60,  183 => 55,  179 => 47,  171 => 41,  165 => 39,  159 => 37,  157 => 36,  154 => 35,  152 => 34,  144 => 29,  140 => 27,  134 => 26,  128 => 24,  122 => 22,  119 => 21,  115 => 20,  110 => 17,  104 => 15,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Plump{% endblock %}

{% block content %}

<h1>Plump</h1>

<div class=\"container\">
    <div style=\"justify-content: space-around;\">
        <h3>Trumf: </h3>
        {% if 127153 <= trumf.card()[2:6] and trumf.card()[2:6] < 127184 %}
            <button style='font-size: 95px; color: red;'>{{ trumf.card()|raw }}</button>
        {% else %}
            <button style='font-size: 95px; color: black;'>{{ trumf.card()|raw }}</button>
        {% endif %}
    </div>
    <div>
        <h3>Hög: </h3>
        {% for card in pile %}
            {% if 127153 <= card.card()[2:6] and card.card()[2:6] < 127184 %}
                <button style='font-size: 95px; color: red;'>{{ card.card()|raw }}</button>
            {% else %}
                <button style='font-size: 95px; color: black;'>{{ card.card()|raw }}</button>
            {% endif %}
        {% endfor %}
        <form method=\"post\">
            <fieldset>
                <input type=\"submit\" {{check}} value=\"Se vem som vann\">
            </fieldset>
        </form>
    </div>
    <div>
        {% if winner != null %}
        <h3>Vinnande kort: </h3>
        {% if 127153 <= winner.card()[2:6] and winner.card()[2:6] < 127184 %}
            <button style='font-size: 95px; color: red;'>{{ winner.card()|raw }}</button>
        {% else %}
            <button style='font-size: 95px; color: black;'>{{ winner.card()|raw }}</button>
        {% endif %}
        <form method=\"post\">
            <fieldset>
                <input type=\"submit\" name=\"roundDone\" value=\"Starta nästa runda\">
            </fieldset>
        </form>
    {% endif %}
    </div>

    {# <table>
        {% for player in players %}
            <thead>{{player.name}}</thead>
            <tbody>{{player.score}}</tbody>
        {% endfor %}
    </table> #}
</div>

    <div>
        <h3>Kort: </h3>
        {# {% for player in players %} #}
        {{player.name}}
        <br>
        Satsning: {{stick}}
        <br>
        Nuvarande stick: {{currStick}}
        <br>
        <form method=\"post\">
            <fieldset>
                {% for card in player.cards() %}
                    {% if 127153 <= card.card()[2:6] and card.card()[2:6] < 127184 %}
                        <input type=\"submit\" {{disabled}} style='font-size: 95px; color: red;' name={{card.match() }} value={{ card.card()|raw }}>
                    {% else %}
                        <input type=\"submit\" {{disabled}} style='font-size: 95px; color: black;' name={{card.match() }} value={{ card.card()|raw }}>
                    {% endif %}
                {% endfor %}
            </fieldset>
        </form>
        <hr>
        {# {% endfor %} #}
    </div>

    <form method=\"post\">
        <fieldset>
            <p>
                <input type=\"text\" name=\"betNum\" value=\"Hur många stick?\">
                <input type=\"submit\" {{bet}} name=\"bet\" value=\"Bet\">
                <input type=\"submit\" name=\"reset\" value=\"Reset game\">
            </p>
        </fieldset>
    </form>


{% endblock %}
", "proj/plump.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\plump.html.twig");
    }
}
