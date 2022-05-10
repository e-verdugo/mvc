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
class __TwigTemplate_6b367f25881e225a72e67f8e0b65c85c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "library/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome to the library!";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div style=\"padding: 5em;\">
    <form method=\"post\">
        <label for=\"name\">Title:</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"><br><br>
        <label for=\"isbn\">ISBN:</label>
        <input type=\"text\" id=\"isbn\" name=\"isbn\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["isbn"] ?? null), "html", null, true);
        echo "\"><br><br>
        <label for=\"author\">Author:</label>
        <input type=\"text\" id=\"author\" name=\"author\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
        echo "\"><br><br>
        <label for=\"img_url\">Image url:</label>
        <input type=\"text\" id=\"img_url\" name=\"img_url\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["img_url"] ?? null), "html", null, true);
        echo "\"><br><br>
        <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">
    </form>
</div>
";
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
        return array (  82 => 16,  78 => 15,  73 => 13,  68 => 11,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/form.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\library\\form.html.twig");
    }
}
