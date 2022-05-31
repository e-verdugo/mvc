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
        echo "    </div>
    <div>
        ";
        // line 29
        if (((isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 29, $this->source); })()) != null)) {
            // line 30
            echo "        <h3>Vinnande kort: </h3>
        ";
            // line 31
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 31, $this->source); })()), "card", [], "method", false, false, false, 31), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 31, $this->source); })()), "card", [], "method", false, false, false, 31), 2, 6) < 127184))) {
                // line 32
                echo "            <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 32, $this->source); })()), "card", [], "method", false, false, false, 32);
                echo "</button>
        ";
            } else {
                // line 34
                echo "            <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 34, $this->source); })()), "card", [], "method", false, false, false, 34);
                echo "</button>
        ";
            }
            // line 36
            echo "        <form method=\"post\">
            <fieldset>
                <input type=\"submit\" name=\"roundDone\" value=\"Starta nästa runda\">
            </fieldset>
        </form>
    ";
        }
        // line 42
        echo "    </div>
    <div>
        <table>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 46
            echo "                <tr>
                    <th>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "method", false, false, false, 47), "html", null, true);
            echo " Runda</th>
                    <th>Poäng</th>
                </tr>
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["player"], "score", [], "method", false, false, false, 50));
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
            foreach ($context['_seq'] as $context["_key"] => $context["round"]) {
                // line 51
                echo "                <tr>
                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $context["round"], "html", null, true);
                echo "</td>
                </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['round'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </table>
    </div>
</div>

    <div>
        <h3>Kort: </h3>
        <br>
        Satsning: ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["playerBet"]) || array_key_exists("playerBet", $context) ? $context["playerBet"] : (function () { throw new RuntimeError('Variable "playerBet" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "
        <br>
        Nuvarande stick: ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["playerStick"]) || array_key_exists("playerStick", $context) ? $context["playerStick"] : (function () { throw new RuntimeError('Variable "playerStick" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "
        <br>
        Datorns satsning: ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["cpuBet"]) || array_key_exists("cpuBet", $context) ? $context["cpuBet"] : (function () { throw new RuntimeError('Variable "cpuBet" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "
        <br>
        Datorns stick: ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["cpuStick"]) || array_key_exists("cpuStick", $context) ? $context["cpuStick"] : (function () { throw new RuntimeError('Variable "cpuStick" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "
        <br>
        <form method=\"post\">
            <fieldset>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 74, $this->source); })()), "cards", [], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 75
            echo "                    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 75), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 75), 2, 6) < 127184))) {
                // line 76
                echo "                        <input type=\"submit\" ";
                echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 76, $this->source); })()), "html", null, true);
                echo " style='font-size: 95px; color: red;' name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "match", [], "method", false, false, false, 76), "html", null, true);
                echo " value=";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 76);
                echo ">
                    ";
            } else {
                // line 78
                echo "                        <input type=\"submit\" ";
                echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 78, $this->source); })()), "html", null, true);
                echo " style='font-size: 95px; color: black;' name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "match", [], "method", false, false, false, 78), "html", null, true);
                echo " value=";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 78);
                echo ">
                    ";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </fieldset>
        </form>
        <hr>
    </div>

    <form method=\"post\">
        <fieldset>
            <input type=\"number\" name=\"betNum\" min=\"0\" max=";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["round"]) || array_key_exists("round", $context) ? $context["round"] : (function () { throw new RuntimeError('Variable "round" does not exist.', 88, $this->source); })()), "html", null, true);
        echo " value=";
        echo twig_escape_filter($this->env, (isset($context["playerBet"]) || array_key_exists("playerBet", $context) ? $context["playerBet"] : (function () { throw new RuntimeError('Variable "playerBet" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ">
            <input type=\"submit\" ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["bet"]) || array_key_exists("bet", $context) ? $context["bet"] : (function () { throw new RuntimeError('Variable "bet" does not exist.', 89, $this->source); })()), "html", null, true);
        echo " name=\"bet\" value=\"Satsa stick!\">
        </fieldset>
    </form>
    <form method=\"post\">
        <fieldset>
            <input type=\"submit\" name=\"reset\" value=\"Reset game\">
            <input type=\"submit\" value=\"Starta nästa runda\">
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
        return array (  315 => 89,  309 => 88,  300 => 81,  294 => 80,  284 => 78,  274 => 76,  271 => 75,  267 => 74,  260 => 70,  255 => 68,  250 => 66,  245 => 64,  236 => 57,  230 => 56,  213 => 53,  209 => 52,  206 => 51,  189 => 50,  183 => 47,  180 => 46,  176 => 45,  171 => 42,  163 => 36,  157 => 34,  151 => 32,  149 => 31,  146 => 30,  144 => 29,  140 => 27,  134 => 26,  128 => 24,  122 => 22,  119 => 21,  115 => 20,  110 => 17,  104 => 15,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div>
        <table>
            {% for player in players %}
                <tr>
                    <th>{{ player.name() }} Runda</th>
                    <th>Poäng</th>
                </tr>
                {% for round in player.score() %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ round }}</td>
                </tr>
                {% endfor %}
            {% endfor %}
        </table>
    </div>
</div>

    <div>
        <h3>Kort: </h3>
        <br>
        Satsning: {{playerBet}}
        <br>
        Nuvarande stick: {{playerStick}}
        <br>
        Datorns satsning: {{cpuBet}}
        <br>
        Datorns stick: {{cpuStick}}
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
    </div>

    <form method=\"post\">
        <fieldset>
            <input type=\"number\" name=\"betNum\" min=\"0\" max={{round}} value={{playerBet}}>
            <input type=\"submit\" {{bet}} name=\"bet\" value=\"Satsa stick!\">
        </fieldset>
    </form>
    <form method=\"post\">
        <fieldset>
            <input type=\"submit\" name=\"reset\" value=\"Reset game\">
            <input type=\"submit\" value=\"Starta nästa runda\">
        </fieldset>
    </form>

{% endblock %}
", "proj/plump.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\plump.html.twig");
    }
}
