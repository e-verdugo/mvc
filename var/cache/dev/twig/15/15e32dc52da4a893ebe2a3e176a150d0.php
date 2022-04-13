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

/* report/kmom01.markdown.twig */
class __TwigTemplate_83ed7bab1b75afa19b875eb9ba3ca28c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/kmom01.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/kmom01.markdown.twig"));

        // line 1
        echo "Kmom 01
--------

**Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.**
De enda tidigare erfarenheterna jag har av objektorienterad programmering är de som jag har fått inom dessa kurser. Så Python och JavaScript. Jag hade även en kurs i C# på gymnasiet men jag minns inte om vi körde objektorienterat där. När vi hade PHP tidigare så kände jag aldrig att jag riktigt \"fattade\", så det känns bra att ge en chans till att få bättre grepp om det hela. Nu är jag också mer van vid programmering överlag, så det lär hjälpa också.

**Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?**
En klass är en sort grund eller instruktion för ett objekt, som en ritning. I klassen så kan man definiera egenskaper/variabler, \"properties\", och metoder (funktioner). Både egenskaperna och metoderna kan antingen vara publika, skyddade, eller privata. De publika kan nås utanför klassen, medans de skyddade och privata endast kan nås inifrån. För att nå egenskaper inom klassen/objektet använder man \$this.

**Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?**
Det påminner väldigt mycket om designkursen, fast det känns som att själva språket är väldigt annorlunda. Men jag tror att det känns så för att jag har glömt lite, för det som känns annorlunda nu är twig/symfony och twig hade vi tidigare. Jag gick in i designprojektet och kollade runt lite för att se om jag kunde hitta hur man loopade igenom rapporter, så jag fick en liten uppfriskning i hur det var strukturerat. Tyvärr hittade jag inte det jag letade efter men efter lite googling så kom jag fram till hur man både loopade och slog ihop text.

**Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.**
Oj, svår fråga, det finns så otroligt mycket i den. Det var kul att läsa om templating eftersom vi har använt det lite hittills. Annars var kapitlet om säkerhet intressant. Jag är ganska intresserad av den mer \"sociala\" aspekten av säkerhet online så det är alltid kul att lära sig mer om den tekniska delen. Säkerhet är också väldigt viktigt i allmänhet, så det vore nog ganska värdefullt att läsa mer om det.

**Vilken är din TIL för detta kmom?**
Hur man loopar och lägger ihop text i twig/symfony. Jag la inte ner jättemycket tid på det, men det var nog den biten där jag inte bara följde instruktionerna utan försökte få till ett eget sätt att få ut rapporterna. Jag blev nöjd med det då det känns som ett väldigt effektivt sätt att gå igenom flera filer. Möjligen så skulle man kunna få den att räkna ut hur många filer det finns själv, och på så vis skippa hårdkodningen av antal.";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "report/kmom01.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Kmom 01
--------

**Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.**
De enda tidigare erfarenheterna jag har av objektorienterad programmering är de som jag har fått inom dessa kurser. Så Python och JavaScript. Jag hade även en kurs i C# på gymnasiet men jag minns inte om vi körde objektorienterat där. När vi hade PHP tidigare så kände jag aldrig att jag riktigt \"fattade\", så det känns bra att ge en chans till att få bättre grepp om det hela. Nu är jag också mer van vid programmering överlag, så det lär hjälpa också.

**Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?**
En klass är en sort grund eller instruktion för ett objekt, som en ritning. I klassen så kan man definiera egenskaper/variabler, \"properties\", och metoder (funktioner). Både egenskaperna och metoderna kan antingen vara publika, skyddade, eller privata. De publika kan nås utanför klassen, medans de skyddade och privata endast kan nås inifrån. För att nå egenskaper inom klassen/objektet använder man \$this.

**Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?**
Det påminner väldigt mycket om designkursen, fast det känns som att själva språket är väldigt annorlunda. Men jag tror att det känns så för att jag har glömt lite, för det som känns annorlunda nu är twig/symfony och twig hade vi tidigare. Jag gick in i designprojektet och kollade runt lite för att se om jag kunde hitta hur man loopade igenom rapporter, så jag fick en liten uppfriskning i hur det var strukturerat. Tyvärr hittade jag inte det jag letade efter men efter lite googling så kom jag fram till hur man både loopade och slog ihop text.

**Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.**
Oj, svår fråga, det finns så otroligt mycket i den. Det var kul att läsa om templating eftersom vi har använt det lite hittills. Annars var kapitlet om säkerhet intressant. Jag är ganska intresserad av den mer \"sociala\" aspekten av säkerhet online så det är alltid kul att lära sig mer om den tekniska delen. Säkerhet är också väldigt viktigt i allmänhet, så det vore nog ganska värdefullt att läsa mer om det.

**Vilken är din TIL för detta kmom?**
Hur man loopar och lägger ihop text i twig/symfony. Jag la inte ner jättemycket tid på det, men det var nog den biten där jag inte bara följde instruktionerna utan försökte få till ett eget sätt att få ut rapporterna. Jag blev nöjd med det då det känns som ett väldigt effektivt sätt att gå igenom flera filer. Möjligen så skulle man kunna få den att räkna ut hur många filer det finns själv, och på så vis skippa hårdkodningen av antal.", "report/kmom01.markdown.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\report\\kmom01.markdown.twig");
    }
}
