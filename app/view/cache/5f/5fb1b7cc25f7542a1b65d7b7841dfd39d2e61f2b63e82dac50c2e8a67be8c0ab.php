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

/* ./private/delete.twig */
class __TwigTemplate_b6f631d32247e27dd57c0b032a4e2747388d0817f4149e7df36515038679096b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metas_data' => [$this, 'block_metas_data'],
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./template/html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./template/html.twig", "./private/delete.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Excluir
";
    }

    // line 8
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/delete.css\">
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
\t<main id=\"delete\">
        ";
        // line 15
        if (($context["products"] ?? null)) {
            // line 16
            echo "                <h1>Deletar produto</h1>
                <section class=\"l_table\">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Imagem</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "                                <tr>
                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "_id", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                    <td><img src=\"";
                // line 32
                echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dirImageShoe", [], "any", false, false, false, 32), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 32), "html", null, true);
                echo "\"></td>
                                    <td>
                                        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                echo "product/delete/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "_id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">Excluir</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        </tbody>
                    </table>
            </tbody>
        </section>
        ";
        } else {
            // line 43
            echo "            <h1>Sem produtos!!</h1>
        ";
        }
        // line 45
        echo "</main>";
    }

    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/delete.js\"></script>";
    }

    public function getTemplateName()
    {
        return "./private/delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  145 => 45,  141 => 43,  134 => 38,  122 => 34,  114 => 32,  110 => 31,  106 => 30,  103 => 29,  99 => 28,  85 => 16,  83 => 15,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/delete.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\private\\delete.twig");
    }
}
