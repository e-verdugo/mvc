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

/* card/doc.html.twig */
class __TwigTemplate_2ed77420e04eb687b92c66a86e2d34ab extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "card/doc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dokumentation";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Spel</h1>

<h4>Beskrivning</h4>
<p>Jag har valt att göra spelet 21. Spelaren får ett kort i taget, och ska försöka ta sig så nära 21 i värde som möjligt. Går man över 21 så förlorar man. Det kommer att finnas en knapp som låter en dra ett kort, och en knapp för när man är nöjd. Kommer man över 21 avslutas spelet automatiskt. Drar man ett kort så hamnar det synligt i ens hand/på bordet. Om man känner sig nöjd så lägger banken ut lika många kort som spelaren. Går banken över 21 så vinner spelaren. Hamnar banken på 21 så vinner banken. Om banken hamnar under 21 så vinner den med högst poäng.</p>

<h4>Flödesschema</h4>
<img src=\"../../public/img/flowchart.png\">

<h4>Psuedokod</h4>
<p>Om nytt-kort knappen klickas -> kör draw() på deck som är i session. Spara kortet i player objekt. For card in cards i player, kör value. Value += value[0]. Om value > 21, förlora. Om value == 21, vinn. Om value < 21, fortsätt. 
Om klar-knappen klickas -> ny spelare \"bank\". Draw() körs count(player->cards()) gånger. Testas sen på samma sätt som player.</p>

<h4>Klasser</h4>
<p>Jag kommer att behöva en test-funktion, som kör en loop där den räknar ihop värdet i en hand. Även en funktion som kör själva spelet, om jag vill hålla kontrollern så ren som möjligt. En enda klass förutom de som jag redan har borde fungera. Den kan få heta twentyone, efter spelet (jag vet att det inte heter så på engelska men all min kod är på engelska redan).</p>

";
    }

    public function getTemplateName()
    {
        return "card/doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "card/doc.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\card\\doc.html.twig");
    }
}
