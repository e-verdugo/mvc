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

/* report/kmom02.markdown.twig */
class __TwigTemplate_82f6d042b18728ad219f005f9cab2536 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "Kmom 02
--------

**Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.**
Arv är när en sak \"bygger ut\" på en annan sak. Den har allt som originalet har, plus sitt egna. Till exempel en klass där originalklassen har en viss egenskap, så får klassen som ärver också den egenskapen. Komposition är när en sak innehåller en annan sak. Till exempel en klass som har en annan klass's objekt som variabel. Ett trait är som en liten kodmodul. Den liknar arv, fast istället för att ärva allt så ärvs bara den biten som är ett trait. Interface är en sorts innehållsförteckning för en klass. Den säger att vissa saker ska finnas, så man kan lita på att de sakerna ska finnas kvar. Det påminner om abstract method som vi använde i oopython.

**Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?**
Jag gillar att jag kom undan med att använda kortens htmlkoder. I början så hade jag väldigt svårt att komma igång, det kändes som att det saknades instruktioner för vad vi skulle göra. Men efter ett antal timmars stirrande så lyckades jag få till routen/klassen/templatens kopplingar och kunde komma vidare. Resten tog tid, men jag fastnade aldrig lika hårt igen, utan det gick alltid framåt. Som förbättring så skulle det nog gå att ändra lite på templatesen så att man kan återanvända samma för det mesta. Till exempel deck, draw, och drawnum har bara några få skillnader, som säkert skulle kunna knåpas ihop till en enda fil. Annars tycker jag ändå att jag har kommit undan med ganska lite kod. Det går så klart alltid att förbättra, men jag kommer inte på nåt mer än templatefilerna.

**Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?**
Jag har inte gjort denna än, utan kör den nästa kmom. Men min gissning är att det kommer att hjälpa en att reda ut tankarna kring hur spelet ska fungera och vilka bitar man kommer behöva koda.

**Vilken är din TIL för detta kmom?**
Nu när jag har repeterat hur man använder git och php server ganska mycket så skulle jag vilja säga att jag har lyckats memorera de kommandon som man använder för det. Tidigare har jag behövt kolla upp hur man gör hela tiden men nu känns det som att de sitter. Det känns också som att jag har lyckats lista ut chaining i php nu. Förra gången vi använde php så kände jag mig inte alls säker på det, men nu tycker jag att själva språket börjar bli mycket mer förståeligt än vad det har varit tidigare. Nu vet jag även om att inte döpa mina repon till samma som namn som dbwebb har. Vilket krångel det hela ledde till!";
    }

    public function getTemplateName()
    {
        return "report/kmom02.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report/kmom02.markdown.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\report\\kmom02.markdown.twig");
    }
}
