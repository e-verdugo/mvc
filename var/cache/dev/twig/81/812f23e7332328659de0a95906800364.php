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

/* report/kmom03.markdown.twig */
class __TwigTemplate_c7df0954402fd921ebad06424613596d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/kmom03.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/kmom03.markdown.twig"));

        // line 1
        echo "Kmom 03
--------

**Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?**
Det gjorde det absolut lättare att \"komma ihåg\" vad man behövde och skulle göra när man väl började koda. När man väl hade gjort det så kändes även spelet inte lika jobbigt. Innan kändes det som en helt enorm uppgift, och ja, den är kanske lite omfattande, men själva koden var ganska rättfram när man väl visste vad man skulle koda. Sen så fastnade man ändå på saker, vissa saker gick inte att göra exakt som man tänkt, etc. Men det var bra att ha spelet i dess simplaste form framför en i ett flödesschema, för det hjälpte verkligen.

**Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?**
Jag började med att fixa alla sidorna, fixa flödesschema och pseudokod, och all text. Sen la jag in så att ett spel skapades. Det fick innehålla ett eget deck, och två spelare, banken och den faktiska spelaren. Jag la in lite knappar för att kunna dra kort och lägga sig. Först fixade jag koden för att dra kort, den var ganska enkel för all kod var redan skriven. Jag använde draw funktionen. Sen fixade jag tjugoetträknaren. Den räknar igenom alla värden på korten i en spelares hand, och returnerar värdet. Först hade jag den att returnera ett meddelande, typ \"du vann!\", men senare så kom jag på att jag behövde nå själva siffran. Efter att jag fått till räknaren (fastnade lite då jag kedjade funktioner fel, blev lite syntaxproblem) så gick jag på att koda fold-knappen. Där behövde jag att banken drog lika många kort som spelaren, och att den sen meddelade vem som vann. Först lägger den till kort i bankens hand på samma sätt som spelaren, och sen så kollar den vem som har mest poäng/om banken kom på 21/om banken kom över 21/etc. Sen använder controllern resultatet och skickar in det i templaten, där det finns en if-sats som skriver ut vem som vann. Jag är nöjd med min implementation, men det finns många förbättringar som kan göras. Till exempel så skulle banken kunna vara lite mer intelligent.

**Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?**
Jag tycker att det fungerar bra. Det är lite svårt att komma ihåg vad som är specifikt Symfony, allt liksom flyter ihop. Men det här sättet att jobba fungerar bra för mig.

**Vilken är din TIL för detta kmom?**
Linters och vad mixed är. Jag lyckades efter lite efterforskningar lösa alla varningar i de linters som används, vilket jag känner mig väldigt nöjd med. Det var lite fundersamt över hur man skulle fixa vissa saker men nu vet jag lite mer om phpdoc, då det mesta löstes med att sätta in variabelförklaringar. Det enda jag inte har \"löst\" är att den klagar på för många funktioner i CardController. Men det vore ju enkelt att flytta över alla spelfunktioner till en egen fil, för att ta bort några går inte eftersom de behövs för alla sidor. Jag har frågat i chatten om man får lägga till en specifik controller för spelet, men det är påsk och sent på kvällen så jag kommer nog att lämna in innan jag får ett svar. Om man kan lägga till en till controller så kommer jag att göra det nästa kursmoment 😊";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "report/kmom03.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Kmom 03
--------

**Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?**
Det gjorde det absolut lättare att \"komma ihåg\" vad man behövde och skulle göra när man väl började koda. När man väl hade gjort det så kändes även spelet inte lika jobbigt. Innan kändes det som en helt enorm uppgift, och ja, den är kanske lite omfattande, men själva koden var ganska rättfram när man väl visste vad man skulle koda. Sen så fastnade man ändå på saker, vissa saker gick inte att göra exakt som man tänkt, etc. Men det var bra att ha spelet i dess simplaste form framför en i ett flödesschema, för det hjälpte verkligen.

**Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?**
Jag började med att fixa alla sidorna, fixa flödesschema och pseudokod, och all text. Sen la jag in så att ett spel skapades. Det fick innehålla ett eget deck, och två spelare, banken och den faktiska spelaren. Jag la in lite knappar för att kunna dra kort och lägga sig. Först fixade jag koden för att dra kort, den var ganska enkel för all kod var redan skriven. Jag använde draw funktionen. Sen fixade jag tjugoetträknaren. Den räknar igenom alla värden på korten i en spelares hand, och returnerar värdet. Först hade jag den att returnera ett meddelande, typ \"du vann!\", men senare så kom jag på att jag behövde nå själva siffran. Efter att jag fått till räknaren (fastnade lite då jag kedjade funktioner fel, blev lite syntaxproblem) så gick jag på att koda fold-knappen. Där behövde jag att banken drog lika många kort som spelaren, och att den sen meddelade vem som vann. Först lägger den till kort i bankens hand på samma sätt som spelaren, och sen så kollar den vem som har mest poäng/om banken kom på 21/om banken kom över 21/etc. Sen använder controllern resultatet och skickar in det i templaten, där det finns en if-sats som skriver ut vem som vann. Jag är nöjd med min implementation, men det finns många förbättringar som kan göras. Till exempel så skulle banken kunna vara lite mer intelligent.

**Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?**
Jag tycker att det fungerar bra. Det är lite svårt att komma ihåg vad som är specifikt Symfony, allt liksom flyter ihop. Men det här sättet att jobba fungerar bra för mig.

**Vilken är din TIL för detta kmom?**
Linters och vad mixed är. Jag lyckades efter lite efterforskningar lösa alla varningar i de linters som används, vilket jag känner mig väldigt nöjd med. Det var lite fundersamt över hur man skulle fixa vissa saker men nu vet jag lite mer om phpdoc, då det mesta löstes med att sätta in variabelförklaringar. Det enda jag inte har \"löst\" är att den klagar på för många funktioner i CardController. Men det vore ju enkelt att flytta över alla spelfunktioner till en egen fil, för att ta bort några går inte eftersom de behövs för alla sidor. Jag har frågat i chatten om man får lägga till en specifik controller för spelet, men det är påsk och sent på kvällen så jag kommer nog att lämna in innan jag får ett svar. Om man kan lägga till en till controller så kommer jag att göra det nästa kursmoment 😊", "report/kmom03.markdown.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\report\\kmom03.markdown.twig");
    }
}
