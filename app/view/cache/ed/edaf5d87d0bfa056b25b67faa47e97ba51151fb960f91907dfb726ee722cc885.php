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

/* ./private/update.twig */
class __TwigTemplate_14126b2c7fa49d756cf69ce05f3d3921657d4dae52f8c9702660f039a73eedad extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "./private/update.twig", 1);
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
        echo "css/update.css\">
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
\t<main id=\"update\">
\t\t<div id='c_form'></div>
\t\t";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            echo "\t\t\t<h1>Atualizar produto</h1>
\t\t\t<section class=\"l_table\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Produto</th>
\t\t\t\t\t\t\t<th>Imagem</th>
\t\t\t\t\t\t\t<th>Atualizar</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 30
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "_id", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><img src=\"";
                // line 33
                echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dirImageShoe", [], "any", false, false, false, 33), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 33), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                echo "product/read/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "_id", [], "any", false, false, false, 35), "html", null, true);
                echo "\">Modificar</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</tbody>
\t\t</section>
\t";
        } else {
            // line 44
            echo "\t\t<h1>Sem produtos!!</h1>
\t";
        }
        // line 46
        echo "

</main>";
    }

    // line 48
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/update.js\"></script>";
    }

    public function getTemplateName()
    {
        return "./private/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  152 => 48,  146 => 46,  142 => 44,  135 => 39,  123 => 35,  115 => 33,  111 => 32,  107 => 31,  104 => 30,  100 => 29,  86 => 17,  84 => 16,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/update.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\private\\update.twig");
    }
}
