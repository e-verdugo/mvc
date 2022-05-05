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

/* library/show.html.twig */
class __TwigTemplate_9bfd070a832503dfaaf56538fc3b1bcb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "library/show.html.twig", 1);
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

        echo "Welcome to the library!";
        
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
        echo "<div style=\"padding: 5em;\">
    <table>
        <tr>
            <th>Name</th>
            <th>ISBN</th>
            <th>Author</th>
            <th>Image</th>
        </tr>
        <tr>
            <td>
                ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
            </td>
            <td>
                ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "
            </td>
            <td>
                ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "
            </td>
            <td>
                <img src=\"../img/";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["img_url"]) || array_key_exists("img_url", $context) ? $context["img_url"] : (function () { throw new RuntimeError('Variable "img_url" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "'s cover image\" width=\"150px\">
            </td>
        </tr>
    </table>
</div>
<form method=\"get\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["isbn" => (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Update details about the book\">
</form>
<form method=\"post\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_process", ["isbn" => (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 33, $this->source); })())]), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Delete the book\">
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "library/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  128 => 30,  118 => 25,  112 => 22,  106 => 19,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to the library!{% endblock %}

{% block content %}
<div style=\"padding: 5em;\">
    <table>
        <tr>
            <th>Name</th>
            <th>ISBN</th>
            <th>Author</th>
            <th>Image</th>
        </tr>
        <tr>
            <td>
                {{ name }}
            </td>
            <td>
                {{ isbn }}
            </td>
            <td>
                {{ author }}
            </td>
            <td>
                <img src=\"../img/{{ img_url }}\" alt=\"{{ name }}'s cover image\" width=\"150px\">
            </td>
        </tr>
    </table>
</div>
<form method=\"get\" action=\"{{ path(\"update\", {'isbn': isbn}) }}\">
    <input type=\"submit\" value=\"Update details about the book\">
</form>
<form method=\"post\" action=\"{{ path(\"delete_process\", {'isbn': isbn}) }}\">
    <input type=\"submit\" value=\"Delete the book\">
</form>
{% endblock %}
", "library/show.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\library\\show.html.twig");
    }
}
