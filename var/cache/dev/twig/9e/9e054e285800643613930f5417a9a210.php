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

/* proj/cleancode.html.twig */
class __TwigTemplate_f51a0f051472a49814761406d7dc68fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/cleancode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/cleancode.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/cleancode.html.twig", 1);
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

        echo "Clean code";
        
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
";
        // line 7
        $___internal_parse_0_ = ('' === $tmp = "Clean code
======

Vad är snygg kod? Är bra kod snygg, och är snygg kod bra? Vad är snygg kod?

För mig så är snygg kod lättläslig och lättförståelig. Koncepten \"bra\" och \"snygg\" är dock inte samma, då det finns snygg kod som inte fungerar, och bra kod som inte är snygg. Däremot så tror jag att kod som är bra oftast är snygg.

Till exempel:
Att dra ner på komplexiteten genom att dela upp stora funktioner till mindre funktioner enligt Single-responsibility principen hjälper även till att få funktioner att bli enklare att testa och enklare att förstå, felsöka, och återanvända. Kod som är mindre komplex är bättre kod än kod som är komplex, och mindre funktioner är snyggare, så här går bra och snygg kod hand i hand. Däremot så kan det ibland vara svårt att lyckas dela upp större funktioner till mindre, och då kan man behöva lägga ner lite tid på att omstrukturera sin kod.

Att använda linters och mess detectors hjälper också till att få en snygg och fin kod. Koden blir renare och struktureras efter en kodstruktur som gör det enklare för andra som är vana med samma struktur att hitta och förstå delar av ens kod. Personen som ska underhålla koden eller behöver förstå den kan mycket väl vara en själv om några veckor. Beroende på varningen så kan den tillfixade koden även blir bättre, då den kanske körs snabbare eller inte körs alls om det inte behövs.

Baserat på dessa två exempel så vill jag säga att kod som är snygg för det mesta är bra, och vice versa. Men det finns så klart exempel som pekar åt andra hållet. Om en klass blir för komplex så vill man kanske dela upp den till två, men om alla funktionerna i klassen hör tillsammans så måste man välja mellan att ha en komplex klass, eller två klasser som är nära kopplade. Alltså ett högre mätvärde för koppling, och en låg kohesion. Det gör det svårare att få en bra överblick över vilka funktioner som finns och vad de gör, för nu så har man två klasser som innehåller väldigt lika saker. Man får välja mellan att ha svårt att se helheten, eller svårt att se saker på detaljnivå. En tredje lösning kan vara att skriva om sin kod på djupet, så att det är mer rimligt att ha flera mindre klasser än en stor.

Kodduplikation är ett problem till som kan lösas genom att ha mindre funktioner. Om varje funktion endast gör en sak, så kan den återanvändas till flera saker. Så istället för att ha en stor funktion som kör samma kod flera gånger baserat på en if-sats eller liknande, så kan man ha att den kör en funktion som innehåller den koden. På det sättet så sparar man plats/tecken, kan återanvända funktionen, och får lättare en överblick över vilka funktioner man har och vad de gör. Koden blir både snyggare och bättre. Det negativa är att det kan lätt bli extra mycket kod, vilket ökar storleken och komplexiteten, så man måste överväga vad som är bäst för varje individuell situation.

Personligen så tycker jag att det är bra att ha en snygg kod, men det är bättre att ha en fungerande men ful kod än en kod som är snygg och inte fungerar. Nu så tänker jag ändå att koden man diskuterar är förväntad att fungera, och i så fall så är det alltid bra med en fin kod. En fin kod lär vara enklare att underhålla och bygga ut på, vilket jag tycker känns som en väldigt viktig grej. Det är också enklare att få en överblick och en förståelse när en kod är snygg och användarvänlig.

Jag tror att det kan ta längre tid att få till en snygg kod, på samma sätt som att det kan ta längre tid att få spagettikod att inte längre vara spagettikod. Själv så brukar jag lätt hamna i att man skriver en stor del av koden i en funktion, då man inte visste vilka funktioner man ville ha från början. Som exempel kan vi ta koden för den här sidan. Jag skapade funktioner och klasser för allt som jag visste skulle behövas (till exempel kort och kortlek) och när jag hade en sorts ”ram” så fyllde jag i den med själva koden. Delar av den koden blev mer komplex än jag hade tänkt mig, så jag fick flytta ut den till sina egna funktioner. Själva flytten räknar jag till tiden det tar att få en snygg kod, för den fungerade redan innan, men blev bättre efter.
Min slutsats är att så länge koden fungerar så fungerar den, men den är bättre både från en kvalitetssynpunkt och från en lätt-att-förstå vinkel om den är ”snygg”. Snygghet för mig är hur förståelig, underhållsvänlig, och snabb koden är. Ju \"enklare\" funktionerna är, detso lättare är det också att testa dem.
") ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert($___internal_parse_0_);
        // line 29
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/cleancode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Clean code{% endblock %}

{% block content %}

{% apply markdown_to_html %}
Clean code
======

Vad är snygg kod? Är bra kod snygg, och är snygg kod bra? Vad är snygg kod?

För mig så är snygg kod lättläslig och lättförståelig. Koncepten \"bra\" och \"snygg\" är dock inte samma, då det finns snygg kod som inte fungerar, och bra kod som inte är snygg. Däremot så tror jag att kod som är bra oftast är snygg.

Till exempel:
Att dra ner på komplexiteten genom att dela upp stora funktioner till mindre funktioner enligt Single-responsibility principen hjälper även till att få funktioner att bli enklare att testa och enklare att förstå, felsöka, och återanvända. Kod som är mindre komplex är bättre kod än kod som är komplex, och mindre funktioner är snyggare, så här går bra och snygg kod hand i hand. Däremot så kan det ibland vara svårt att lyckas dela upp större funktioner till mindre, och då kan man behöva lägga ner lite tid på att omstrukturera sin kod.

Att använda linters och mess detectors hjälper också till att få en snygg och fin kod. Koden blir renare och struktureras efter en kodstruktur som gör det enklare för andra som är vana med samma struktur att hitta och förstå delar av ens kod. Personen som ska underhålla koden eller behöver förstå den kan mycket väl vara en själv om några veckor. Beroende på varningen så kan den tillfixade koden även blir bättre, då den kanske körs snabbare eller inte körs alls om det inte behövs.

Baserat på dessa två exempel så vill jag säga att kod som är snygg för det mesta är bra, och vice versa. Men det finns så klart exempel som pekar åt andra hållet. Om en klass blir för komplex så vill man kanske dela upp den till två, men om alla funktionerna i klassen hör tillsammans så måste man välja mellan att ha en komplex klass, eller två klasser som är nära kopplade. Alltså ett högre mätvärde för koppling, och en låg kohesion. Det gör det svårare att få en bra överblick över vilka funktioner som finns och vad de gör, för nu så har man två klasser som innehåller väldigt lika saker. Man får välja mellan att ha svårt att se helheten, eller svårt att se saker på detaljnivå. En tredje lösning kan vara att skriva om sin kod på djupet, så att det är mer rimligt att ha flera mindre klasser än en stor.

Kodduplikation är ett problem till som kan lösas genom att ha mindre funktioner. Om varje funktion endast gör en sak, så kan den återanvändas till flera saker. Så istället för att ha en stor funktion som kör samma kod flera gånger baserat på en if-sats eller liknande, så kan man ha att den kör en funktion som innehåller den koden. På det sättet så sparar man plats/tecken, kan återanvända funktionen, och får lättare en överblick över vilka funktioner man har och vad de gör. Koden blir både snyggare och bättre. Det negativa är att det kan lätt bli extra mycket kod, vilket ökar storleken och komplexiteten, så man måste överväga vad som är bäst för varje individuell situation.

Personligen så tycker jag att det är bra att ha en snygg kod, men det är bättre att ha en fungerande men ful kod än en kod som är snygg och inte fungerar. Nu så tänker jag ändå att koden man diskuterar är förväntad att fungera, och i så fall så är det alltid bra med en fin kod. En fin kod lär vara enklare att underhålla och bygga ut på, vilket jag tycker känns som en väldigt viktig grej. Det är också enklare att få en överblick och en förståelse när en kod är snygg och användarvänlig.

Jag tror att det kan ta längre tid att få till en snygg kod, på samma sätt som att det kan ta längre tid att få spagettikod att inte längre vara spagettikod. Själv så brukar jag lätt hamna i att man skriver en stor del av koden i en funktion, då man inte visste vilka funktioner man ville ha från början. Som exempel kan vi ta koden för den här sidan. Jag skapade funktioner och klasser för allt som jag visste skulle behövas (till exempel kort och kortlek) och när jag hade en sorts ”ram” så fyllde jag i den med själva koden. Delar av den koden blev mer komplex än jag hade tänkt mig, så jag fick flytta ut den till sina egna funktioner. Själva flytten räknar jag till tiden det tar att få en snygg kod, för den fungerade redan innan, men blev bättre efter.
Min slutsats är att så länge koden fungerar så fungerar den, men den är bättre både från en kvalitetssynpunkt och från en lätt-att-förstå vinkel om den är ”snygg”. Snygghet för mig är hur förståelig, underhållsvänlig, och snabb koden är. Ju \"enklare\" funktionerna är, detso lättare är det också att testa dem.
{% endapply %}

{% endblock %}", "proj/cleancode.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\cleancode.html.twig");
    }
}
