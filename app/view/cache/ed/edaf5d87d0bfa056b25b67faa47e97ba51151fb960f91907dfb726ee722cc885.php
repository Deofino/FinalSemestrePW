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

\t\t<div id=\"l_form\" class=\"visible\">
\t\t\t<button id=\"close\">
\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t</button>
\t\t\t<form action=\"\" method=\"post\" class=\"form\">
\t\t\t\t<div class=\"form-item col\">
\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Produto\" id=\"name\" class=\"item-input\" required maxlength=\"100\" minlength=\"5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item col\">
\t\t\t\t\t<textarea name=\"description\" placeholder=\"Descricao\" id=\"description\" rows=\"4\" required maxlength=\"200\" minlength=\"5\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item radio\">
\t\t\t\t\t<label for=\"rmasc\">
\t\t\t\t\t\t<input type=\"radio\" id=\"rmasc\" name=\"radio\" class=\"item-input\">
\t\t\t\t\t\t<span class=\"label\">Masculino</span>
\t\t\t\t\t</label>
\t\t\t\t\t<label for=\"rfemi\">
\t\t\t\t\t\t<input type=\"radio\" id=\"rfemi\" name=\"radio\" class=\"item-input\">
\t\t\t\t\t\t<span class=\"label\">Feminino</span>
\t\t\t\t\t</label>
\t\t\t\t\t<label for=\"funi\">
\t\t\t\t\t\t<input type=\"radio\" id=\"runi\" name=\"radio\" class=\"item-input\">
\t\t\t\t\t\t<span class=\"label\">Unissex</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item col\">
\t\t\t\t\t<input type=\"text\" name=\"price\" id=\"price\" placeholder=\"R\$ 0,00\" class=\"item-input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item col\">
\t\t\t\t\t<select name=\"category\" id=\"category\">
\t\t\t\t\t\t<option value=\"0\">Categoria</option>
\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 48
            echo "\t\t\t\t\t\t\t<option value=\"category._id\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nameCategory", [], "any", false, false, false, 48), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item col\">
\t\t\t\t\t<select name=\"brand\" id=\"brand\">
\t\t\t\t\t\t<option value=\"0\">Marca</option>
\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 56
            echo "\t\t\t\t\t\t\t<option value=\"brand._id\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "nameBrand", [], "any", false, false, false, 56), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item row\">
\t\t\t\t\t<div class=\"container-button\">
\t\t\t\t\t\t<input type=\"text\" id='color' list=\"colorsList\" placeholder=\"Cores\">
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"chips\"></div>
                    <datalist id=\"colorsList\">
                        <option value=\"Vermelho\">
                        <option value=\"Roxo\">
                        <option value=\"Rosa\">
                        <option value=\"Azul\">
                        <option value=\"Verde\">
                        <option value=\"Preto\">
                        <option value=\"Cinza\">
                        <option value=\"Branco\">
                        <option value=\"Colorido\">
                        <option value=\"Laranja\">
                        <option value=\"Marrom\">
                      </datalist>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item col column\">
\t\t\t\t\t<label for=\"image\">
\t\t\t\t\t\t<i class=\"fas fa-upload\"></i>
\t\t\t\t\t\t<span>Nenhum arquivo selecionado</span>
\t\t\t\t\t</label>
                    <div id=\"preview\">
                        
                    </div>
\t\t\t\t\t<input type=\"file\" hidden accept=\"image/*\" id=\"image\" name=\"image\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-item col\">
\t\t\t\t\t<button type=\"submit\">Atualizar</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t";
        // line 97
        if (($context["products"] ?? null)) {
            // line 98
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
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 111
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "_id", [], "any", false, false, false, 112), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 113), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><img src=\"";
                // line 114
                echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dirImageShoe", [], "any", false, false, false, 114), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 114), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Modificar</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</tbody>
\t\t</section>
\t";
        } else {
            // line 125
            echo "\t\t<h1>Sem produtos!!</h1>
\t";
        }
        // line 127
        echo "

</main>";
    }

    // line 129
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
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
        return array (  256 => 130,  252 => 129,  246 => 127,  242 => 125,  235 => 120,  220 => 114,  216 => 113,  212 => 112,  209 => 111,  205 => 110,  191 => 98,  189 => 97,  148 => 58,  139 => 56,  135 => 55,  128 => 50,  119 => 48,  115 => 47,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/update.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\private\\update.twig");
    }
}
