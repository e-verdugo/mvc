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

/* card/player.html.twig */
class __TwigTemplate_c9ceb7f771dcc023740d9e563bfed721 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "card/player.html.twig", 1);
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
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 9
            echo "    Player ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "method", false, false, false, 9), "html", null, true);
            echo "'s cards:
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["player"], "cards", [], "method", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 11
                echo "        ";
                if (((127153 <= twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 11), 2, 6)) && (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 11), 2, 6) < 127184))) {
                    // line 12
                    echo "            <button style='font-size: 95px; color: red;'>";
                    echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 12);
                    echo "</button>
        ";
                } else {
                    // line 14
                    echo "            <button style='font-size: 95px; color: black;'>";
                    echo twig_get_attribute($this->env, $this->source, $context["card"], "card", [], "method", false, false, false, 14);
                    echo "</button>
        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
Numer of cards left:
";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["deck"] ?? null)), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "card/player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  100 => 18,  90 => 16,  84 => 14,  78 => 12,  75 => 11,  71 => 10,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "card/player.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\card\\player.html.twig");
    }
}
