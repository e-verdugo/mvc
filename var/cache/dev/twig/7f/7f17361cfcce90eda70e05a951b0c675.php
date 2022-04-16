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
        if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 9, $this->source); })()) < 21)) {
            // line 10
            echo "<h4>Fold or pull another card</h4>
";
        } elseif ((        // line 11
(isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 11, $this->source); })()) == 21)) {
            // line 12
            echo "<h4>You won!</h4>
";
        } elseif ((        // line 13
(isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 13, $this->source); })()) > 21)) {
            // line 14
            echo "<h4>You lost!</h4>
";
        }
        // line 16
        echo "
";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 17, $this->source); })()), "name", [], "method", false, false, false, 17), "html", null, true);
        echo "'s cards: 
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 18, $this->source); })()), "cards", [], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 19
            echo "    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 19), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 19), 2, 6) < 127184))) {
                // line 20
                echo "        <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 20);
                echo "</button>
    ";
            } else {
                // line 22
                echo "        <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 22);
                echo "</button>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
<br>

";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 28, $this->source); })()), "name", [], "method", false, false, false, 28), "html", null, true);
        echo "'s cards: 
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 29, $this->source); })()), "cards", [], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 30
            echo "    ";
            if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 30), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 30), 2, 6) < 127184))) {
                // line 31
                echo "        <button style='font-size: 95px; color: red;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 31);
                echo "</button>
    ";
            } else {
                // line 33
                echo "        <button style='font-size: 95px; color: black;'>";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 33);
                echo "</button>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
<form method=\"post\">
    <fieldset>
        <p>
            <input type=\"submit\" name=\"draw\" value=\"Draw\">
            <input type=\"submit\" name=\"fold\" value=\"Fold\">
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
        return array (  171 => 36,  161 => 33,  155 => 31,  152 => 30,  148 => 29,  144 => 28,  139 => 25,  129 => 22,  123 => 20,  120 => 19,  116 => 18,  112 => 17,  109 => 16,  105 => 14,  103 => 13,  100 => 12,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}21{% endblock %}

{% block content %}

<h1>Spela  21</h1>

{% if check < 21 %}
<h4>Fold or pull another card</h4>
{% elseif check == 21 %}
<h4>You won!</h4>
{% elseif check > 21 %}
<h4>You lost!</h4>
{% endif %}

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
            <input type=\"submit\" name=\"draw\" value=\"Draw\">
            <input type=\"submit\" name=\"fold\" value=\"Fold\">
        </p>
    </fieldset>
</form>

{% endblock %}
", "card/play.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\card\\play.html.twig");
    }
}
