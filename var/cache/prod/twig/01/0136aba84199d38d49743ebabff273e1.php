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

/* report/kmom04.markdown.twig */
class __TwigTemplate_75d401312f87baa9532c8433433d3d8a extends Template
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
        echo "Kmom 04
--------


**Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.**
Det fungerar bra! I de flesta fall var det enkelt att komma på hur och vad man skulle testa. Det var bara för några lite mer komplicerade funktioner som jag fick tänka till. 

**Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?**
Ja, den enda delen som inte täcks helt är i en funktion där jag har flera utfall beroende på ett randomiserat urval av kort. För den la jag in flera funktioner för att försöka täcka så mycket som möjligt, men jag skulle egentligen behöva mocka två spelare (spelaren och banken) för att få till det på ett riktigt bra sätt.

**Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?**
Det mesta tycker jag att jag hade lyckats bra med, då det inte behövdes många rader kod för att testa, och med fanns egentligen bara ett utfall. Det finns tre delar som jag skulle kunnat förbättra dock. Jag har skrivit om dem i kommentarerna för de funktionerna, men det är draw-funktionen som drar ett random kort ur leken, funktionen som testar värdet av en hand, och funktionen som avgör vem som vinner. Draw-funktionen hade kunnat delas upp i två funktioner, en del som drar ett kort, och en del som bestämmer ett kort. På så sätt hade man kunnat återanvända den koden om man ville dra ett specifikt kort, och kunnat använda random-funktionen för att ändå kunna få ut ett random kort ur leken. Alternativt ha random-delen i controllerns kod, men det skulle bli lite stökigt. Funktionen som testar värdet hade kunnat bli bättre av att mocka själva spelaren, så att man vet exakt hur utfallet borde se ut. Lite samma sak gäller för funktionen som räknar ut vem som vinner. Det är den enda delen som kan bli olika varje gång man kör PHPUnit, då den har samma randomness som spelet har i verkligheten.

**Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.**
Nej, jag valde att behålla den som den är. Däremot så funderade jag på att ändra i både draw-funktionen och i hur den räknar kortens värde i Card. I draw funderade jag på att dela upp funktionen i två, men kom snabbt på att det inte egentligen skulle hjälpa så mycket. När det gäller värdesräkningen så börjar den på 0, trots att det lägsta kortet är 1, ett ess. Det gjorde mig lite förvirrad till en början men sen kom jag på att vilket värde den har inte riktigt spelar nån roll, och att det är lika bra att börja på 0 i det här språket.

**Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.**
Jag tror att den kan göra det till viss del. Vissa delar verkar svåra att testa (flera utfall som beror på ett random tal), men kan vara väldigt självklara i koden. Men det blir nog mindre invecklad kod och inte lika mycket funktioner som är totalt beroende av varandra på ett icke genomskådligt sätt om koden är testbar.

**Vilken är din TIL för detta kmom?**
Hur man återställer behörighet i windows. Av nån anledning så började vissa mappar låsa sig efter att jag låtit datorn gå i ide. När jag sen försökte komma åt vissa mappar (märkte av tests och src först) så sa den att jag behövde vara admin (jag är admin, det är min dator) och när jag godkänt så nekade den ändå. När jag gick in och kollade på behörigheterna så låg det en massa konstiga användare där (en hetter NULL). Efter att jag tog bort dem och gav tillbaka läs och skriv rättigheter till SYSTEM och Admin så fick jag tillbaka mina mappar igen, men först satt jag och krånglade för att få till det. Det här hände flera gånger efter, och det verkar vara när jag kör nåt i composer. Fattar inte alls varför det här händer, men datorn är en 5+ år gammal laptop som jag drar med ut på balkongen när det är 45 grader, så den kanske börjar ge upp.
";
    }

    public function getTemplateName()
    {
        return "report/kmom04.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report/kmom04.markdown.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\report\\kmom04.markdown.twig");
    }
}
