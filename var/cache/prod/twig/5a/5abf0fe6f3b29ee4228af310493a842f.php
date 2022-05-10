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

/* report/kmom05.markdown.twig */
class __TwigTemplate_d75d0d993f725261a4927b0092a7902c extends Template
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
        echo "Kmom 05
--------

**Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?**
Det gick bra. Då och då så fastnade jag, men med lite googlande så löste det sig. Jag funderade lite på om man skulle lägga koden i en egen fil/klass precis som tidigare, men valde sen att göra så som jag tolkade att det stod i instruktionerna. Jag hade lite problem när jag laddade upp allt till servern då den inte lyckades nå databasen, men efter en fråga i chatten så visade det sig att jag behövde en .env.student. Jag hade inte läst igenom den biten av övningen speciellt noga då jag trodde att den endast gällde om man använde mariaDB.

**Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet? Gick det bra att jobba med ORM i CRUD eller vad anser du om det?**
Jag började med att göra övningen, och sen valde jag att bara anpassa den koden för själva uppgiften. Användarvänligheten kom allra sist, då jag ville få till grundfunktionaliteten först. Create var enkel och gick snabbt, men jag fastnade lite på show. Det blev problem med GET/POST och routingen. Ett tag hade jag tre routes, där en fick agera som en redirect. När jag var klar med allt så upptäckte jag däremot att det fungerade utan den, så jag tog bort den. Koden ska ligga kvar i en tidigare commit. Jag tror att jag komplicerade till det mer än nödvändigt och att det var därför jag fastnade lite då och då.

**Berätta om du gjorde (delar av) extrauppgiften med användare och login.**
Jag hann tyvärr inte med att göra extrauppgiften, så där blev det inget.

**Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?**
Det känns väldigt smidigt att kunna skriva kod som \"autoöversätter\" till den databas man har, oavsett vilket språk den normalt vill ha. Om man av någon anledning skulle behöva byta databas i ett senare skede så skulle samma kod ändå fungera, och om den kod man skriver ska fungera för flera olika system så löser ORM det också.

**Vilken är din TIL för detta kmom?**
Jag tror att jag hade hunnit glömma lite hur POST och GET fungerade eftersom jag inte har tänkt på de på över en vecka, så det var bra att få lite repetition. Så jag skulle vilja säga att min TIL är att det är bra att repetera lite ibland. Jag känner mig även säkrare på path nu då jag hade lite trubbel med det tidigare.";
    }

    public function getTemplateName()
    {
        return "report/kmom05.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report/kmom05.markdown.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\report\\kmom05.markdown.twig");
    }
}
