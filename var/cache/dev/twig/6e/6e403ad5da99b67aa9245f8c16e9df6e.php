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

/* library/form.html.twig */
class __TwigTemplate_135fe3a8a620bd2217a71172f050ac1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "library/form.html.twig", 1);
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
    <form method=\"post\">
        <label for=\"name\">Title:</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"><br><br>
        <label for=\"isbn\">ISBN:</label>
        <input type=\"text\" id=\"isbn\" name=\"isbn\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"><br><br>
        <label for=\"author\">Author:</label>
        <input type=\"text\" id=\"author\" name=\"author\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\"><br><br>
        <label for=\"img_url\">Image url:</label>
        <input type=\"text\" id=\"img_url\" name=\"img_url\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["img_url"]) || array_key_exists("img_url", $context) ? $context["img_url"] : (function () { throw new RuntimeError('Variable "img_url" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\"><br><br>
    </form>
</div>
<form method=\"get\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["isbn" => (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Update details about the book\">
</form>
<form method=\"post\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_process", ["isbn" => (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 21, $this->source); })())]), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Delete the book\">
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "library/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 21,  114 => 18,  108 => 15,  103 => 13,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to the library!{% endblock %}

{% block content %}
<div style=\"padding: 5em;\">
    <form method=\"post\">
        <label for=\"name\">Title:</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"{{name}}\"><br><br>
        <label for=\"isbn\">ISBN:</label>
        <input type=\"text\" id=\"isbn\" name=\"isbn\" value=\"{{isbn}}\"><br><br>
        <label for=\"author\">Author:</label>
        <input type=\"text\" id=\"author\" name=\"author\" value=\"{{author}}\"><br><br>
        <label for=\"img_url\">Image url:</label>
        <input type=\"text\" id=\"img_url\" name=\"img_url\" value=\"{{img_url}}\"><br><br>
    </form>
</div>
<form method=\"get\" action=\"{{ path(\"update\", {'isbn': isbn}) }}\">
    <input type=\"submit\" value=\"Update details about the book\">
</form>
<form method=\"post\" action=\"{{ path(\"delete_process\", {'isbn': isbn}) }}\">
    <input type=\"submit\" value=\"Delete the book\">
</form>
{% endblock %}
", "library/form.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\library\\form.html.twig");
    }
}
