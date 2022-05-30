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

/* proj/about.html.twig */
class __TwigTemplate_e82e3804ad7b22ff9f1f53be2d1cc5bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/about.html.twig", 1);
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

        echo "Om";
        
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
        echo "<h1>Om den här sidan</h1>

<p>Välkommen till min about-sida för mitt projekt. Jag har valt att skapa ett spel där man kan spela Plump, ett kortspel.</p>
<h4>Spelregler</h4>
<p>Målet med spelet är att inte \"plumpa\", utan att få poäng varje runda. För att få poäng så måste man ta lika många stick som man satsar på att man ska ta i böjan, och för att ta ett stick så måste du ha det högsta kortet, eller trumf. Man börjar med 10 kort var, och sen kör man 9, 8, etc. tills man kommer till ett. Därefter kör man från ett till tio. Efter varje utdelning av korten så tas det översta av de kvarvarande korten och läggs upp. Denns färg är nu trumf. Nu satsar man kort, alla på en gång. Den spelare som satsat mest börjar. Den får lägga ut vad den vill, och alla andra spelare måste följa färg. Har man inte färgen måste man lägga trumf. Äss i trumf går inte att klå, eftersom den är värd mest.</p>

<a href=\"https://github.com/e-verdugo/mvc-course\">Github repo för projektet</a>
<a href=\"https://scrutinizer-ci.com/g/e-verdugo/mvc-course/\">Scrutinizer för repot</a>
<a href=\"http://www.student.bth.se/~emve21/dbwebb-kurser/mvc/me/report/docs/api/\">Rapporten från phpmetrics</a>
<a href=\"\">Dokumentation av phpdoc</a>

Din about-sida skall innehålla en summering där du berättar om projektets kodkvalitet. Berätta vilka eventuella åtgärder du gjort för att kvalitetssäkra projektet och hur du jobbat med kodkvaliteten och vilka verktyg du använt. Har du fokuserat på några speciella saker, verktyg eller metrics, så kan du berätta om dem.
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Om{% endblock %}

{% block content %}
<h1>Om den här sidan</h1>

<p>Välkommen till min about-sida för mitt projekt. Jag har valt att skapa ett spel där man kan spela Plump, ett kortspel.</p>
<h4>Spelregler</h4>
<p>Målet med spelet är att inte \"plumpa\", utan att få poäng varje runda. För att få poäng så måste man ta lika många stick som man satsar på att man ska ta i böjan, och för att ta ett stick så måste du ha det högsta kortet, eller trumf. Man börjar med 10 kort var, och sen kör man 9, 8, etc. tills man kommer till ett. Därefter kör man från ett till tio. Efter varje utdelning av korten så tas det översta av de kvarvarande korten och läggs upp. Denns färg är nu trumf. Nu satsar man kort, alla på en gång. Den spelare som satsat mest börjar. Den får lägga ut vad den vill, och alla andra spelare måste följa färg. Har man inte färgen måste man lägga trumf. Äss i trumf går inte att klå, eftersom den är värd mest.</p>

<a href=\"https://github.com/e-verdugo/mvc-course\">Github repo för projektet</a>
<a href=\"https://scrutinizer-ci.com/g/e-verdugo/mvc-course/\">Scrutinizer för repot</a>
<a href=\"http://www.student.bth.se/~emve21/dbwebb-kurser/mvc/me/report/docs/api/\">Rapporten från phpmetrics</a>
<a href=\"\">Dokumentation av phpdoc</a>

Din about-sida skall innehålla en summering där du berättar om projektets kodkvalitet. Berätta vilka eventuella åtgärder du gjort för att kvalitetssäkra projektet och hur du jobbat med kodkvaliteten och vilka verktyg du använt. Har du fokuserat på några speciella saker, verktyg eller metrics, så kan du berätta om dem.
{% endblock %}", "proj/about.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\proj\\about.html.twig");
    }
}
