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
class __TwigTemplate_6433225bd0bdf69d1805dfda53170cba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "library/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
            </td>
            <td>
                ";
        // line 19
        echo twig_escape_filter($this->env, ($context["isbn"] ?? null), "html", null, true);
        echo "
            </td>
            <td>
                ";
        // line 22
        echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
        echo "
            </td>
            <td>
                <img src=\"../../img/";
        // line 25
        echo twig_escape_filter($this->env, ($context["img_url"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "'s cover image\" width=\"150px\">
            </td>
        </tr>
    </table>
</div>
<form method=\"get\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["isbn" => ($context["isbn"] ?? null)]), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Update details about the book\">
</form>
<form method=\"post\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_process", ["isbn" => ($context["isbn"] ?? null)]), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Delete the book\">
</form>
";
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
        return array (  104 => 33,  98 => 30,  88 => 25,  82 => 22,  76 => 19,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/show.html.twig", "C:\\Users\\Emelie\\dbwebb\\dbwebb-kurser\\mvc\\me\\report\\templates\\library\\show.html.twig");
    }
}
