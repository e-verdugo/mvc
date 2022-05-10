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

/* card/draw.html.twig */
class __TwigTemplate_1f748bc3121594d9b74cf11e50749647 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "card/draw.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Deck";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Deck</h1>

";
        // line 9
        if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "card", [], "method", false, false, false, 9), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "card", [], "method", false, false, false, 9), 2, 6) < 127184))) {
            // line 10
            echo "    <button style='font-size: 95px; color: red;'>";
            echo twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "card", [], "method", false, false, false, 10);
            echo "</button>
";
        } else {
            // line 12
            echo "    <button style='font-size: 95px; color: black;'>";
            echo twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "card", [], "method", false, false, false, 12);
            echo "</button>
";
        }
        // line 14
        echo "

Numer of cards left:
";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["deck"] ?? null)), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "card/draw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  77 => 14,  71 => 12,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "card/draw.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\card\\draw.html.twig");
    }
}
