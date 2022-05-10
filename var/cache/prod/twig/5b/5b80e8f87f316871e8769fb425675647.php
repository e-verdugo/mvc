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
class __TwigTemplate_b58ab92fd21439a2696a59012cb7d5c2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "card/play.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "21";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Spela  21</h1>

";
        // line 9
        if (preg_match("/^\\d+\$/", ($context["check"] ?? null))) {
            echo " ";
            // line 10
            echo "    ";
            if ((($context["check"] ?? null) < 21)) {
                // line 11
                echo "        <h4>Fold or pull another card</h4>
    ";
            } elseif ((            // line 12
($context["check"] ?? null) == 21)) {
                // line 13
                echo "        <h4>You won!</h4>
        ";
                // line 14
                $context["disabled"] = "disabled";
                // line 15
                echo "    ";
            } elseif ((($context["check"] ?? null) > 21)) {
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
            echo twig_escape_filter($this->env, ($context["check"] ?? null), "html", null, true);
            echo "</h4>
";
        }
        // line 22
        echo "
<br>

";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "name", [], "method", false, false, false, 25), "html", null, true);
        echo "'s cards: 
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "cards", [], "method", false, false, false, 26));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bank"] ?? null), "name", [], "method", false, false, false, 36), "html", null, true);
        echo "'s cards: 
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["bank"] ?? null), "cards", [], "method", false, false, false, 37));
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
        echo twig_escape_filter($this->env, ($context["disabled"] ?? null), "html", null, true);
        echo " name=\"draw\" value=\"Draw\">
            <input type=\"submit\" ";
        // line 49
        echo twig_escape_filter($this->env, ($context["disabled"] ?? null), "html", null, true);
        echo " name=\"fold\" value=\"Fold\">
            <input type=\"submit\" name=\"reset\" value=\"Reset\">
        </p>
    </fieldset>
</form>

";
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
        return array (  171 => 49,  167 => 48,  161 => 44,  151 => 41,  145 => 39,  142 => 38,  138 => 37,  134 => 36,  129 => 33,  119 => 30,  113 => 28,  110 => 27,  106 => 26,  102 => 25,  97 => 22,  91 => 20,  87 => 18,  85 => 17,  82 => 16,  79 => 15,  77 => 14,  74 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "card/play.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\card\\play.html.twig");
    }
}
