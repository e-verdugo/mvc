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

/* card/play.html.twig */
class __TwigTemplate_03ec775666ea5485ac94066617de5fd5 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/play.html.twig", 1);
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

        echo "21";
        
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
<h1>Spela  21</h1>

";
        // line 9
        if (preg_match("/^\\d+\$/", (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 9, $this->source); })()))) {
            echo " ";
            // line 10
            echo "    ";
            if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 10, $this->source); })()) < 21)) {
                // line 11
                echo "        <h4>Fold or pull another card</h4>
    ";
            } elseif ((            // line 12
(isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 12, $this->source); })()) == 21)) {
                // line 13
                echo "        <h4>You won!</h4>
        ";
                // line 14
                $context["disabled"] = "disabled";
                // line 15
                echo "    ";
            } elseif (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 15, $this->source); })()) > 21)) {
                // line 16
                echo "        <h4>You lost!</h4>
        ";
                // line 17
                $context["disabled"] = "disabled";
                // line 18
                echo "    ";
            }
        } else {
            // line 20
            echo "    <h4>";
            echo twig_escape_filter($this->env, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</h4>
";
        }
        // line 22
        echo "
<br>

";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 25, $this->source); })()), "name", [], "method", false, false, false, 25), "html", null, true);
        echo "'s cards: 
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 26, $this->source); })()), "cards", [], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 27
            echo "    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 27), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 27), 2, 6) < 127184))) {
                // line 28
                echo "        <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 28);
                echo "</button>
    ";
            } else {
                // line 30
                echo "        <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 30);
                echo "</button>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
<br>

";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 36, $this->source); })()), "name", [], "method", false, false, false, 36), "html", null, true);
        echo "'s cards: 
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 37, $this->source); })()), "cards", [], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 38
            echo "    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 38), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 38), 2, 6) < 127184))) {
                // line 39
                echo "        <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 39);
                echo "</button>
    ";
            } else {
                // line 41
                echo "        <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 41);
                echo "</button>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<form method=\"post\">
    <fieldset>
        <p>
            <input type=\"submit\" ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " name=\"draw\" value=\"Draw\">
            <input type=\"submit\" ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " name=\"fold\" value=\"Fold\">
            <input type=\"submit\" name=\"reset\" value=\"Reset\">
        </p>
    </fieldset>
</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 49,  197 => 48,  191 => 44,  181 => 41,  175 => 39,  172 => 38,  168 => 37,  164 => 36,  159 => 33,  149 => 30,  143 => 28,  140 => 27,  136 => 26,  132 => 25,  127 => 22,  121 => 20,  117 => 18,  115 => 17,  112 => 16,  109 => 15,  107 => 14,  104 => 13,  102 => 12,  99 => 11,  96 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}21{% endblock %}

{% block content %}

<h1>Spela  21</h1>

{% if check matches '/^\\\\d+\$/' %} {# check if int #}
    {% if check < 21 %}
        <h4>Fold or pull another card</h4>
    {% elseif check == 21 %}
        <h4>You won!</h4>
        {% set disabled = \"disabled\" %}
    {% elseif check > 21 %}
        <h4>You lost!</h4>
        {% set disabled = \"disabled\" %}
    {% endif %}
{% else %}
    <h4>{{check}}</h4>
{% endif %}

<br>

{{player.name()}}'s cards: 
{% for card in player.cards() %}
    {% if 127153 <= card.card()[2:6] and card.card()[2:6] < 127184 %}
        <button style='font-size: 95px; color: red;'>{{ card.card()|raw }}</button>
    {% else %}
        <button style='font-size: 95px; color: black;'>{{ card.card()|raw }}</button>
    {% endif %}
{% endfor %}

<br>

{{bank.name()}}'s cards: 
{% for card in bank.cards() %}
    {% if 127153 <= card.card()[2:6] and card.card()[2:6] < 127184 %}
        <button style='font-size: 95px; color: red;'>{{ card.card()|raw }}</button>
    {% else %}
        <button style='font-size: 95px; color: black;'>{{ card.card()|raw }}</button>
    {% endif %}
{% endfor %}

<form method=\"post\">
    <fieldset>
        <p>
            <input type=\"submit\" {{disabled}} name=\"draw\" value=\"Draw\">
            <input type=\"submit\" {{disabled}} name=\"fold\" value=\"Fold\">
            <input type=\"submit\" name=\"reset\" value=\"Reset\">
        </p>
    </fieldset>
</form>

{% endblock %}
", "card/play.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\card\\play.html.twig");
    }
}
