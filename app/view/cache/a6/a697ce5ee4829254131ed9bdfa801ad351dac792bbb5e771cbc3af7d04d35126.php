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

/* product.twig */
class __TwigTemplate_a3ba0ecc365633952abb4ed62ffc9e0d730a9521bec0fcd367a8f27bfe263f4c extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "product.twig", 1);
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
        echo "Shoes | Produtos
";
    }

    // line 8
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/product.css\">
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<main>

\t\t<div class=\"search\">
\t\t\t\t<input type=\"search\" class=\"input-search\" placeholder=\"Pesquisar\">
\t\t\t\t<i class=\"fas fa-search lupa\"></i>
\t\t</div>

\t\t<section class=\"grid-main\" id=\"l_cards\">
\t\t\t<div class=\"filters\">
            <label for=\"filter\">Filtrar por:</label>
\t\t\t\t<select name=\"filter\" id=\"filter\" >
               <option value=\"0\">Selecione</option>
               <option value=\"1\">Categoria</option>
               <option value=\"2\">Marca</option>
               <option value=\"3\">Gênero</option>
            </select>
            <label for=\"order\">Ordernar em:</label>
\t\t\t\t<select name=\"order\" id=\"order\">
               <option value=\"0\">Selecione</option>
               <option value=\"1\">Crescente</option>
               <option value=\"2\">Descrescente</option>
               <option value=\"3\">Maior preço</option>
               <option value=\"4\">Menor preço</option>

            </select>
            <button>Filtrar</button>
\t\t\t</div>
\t\t\t<div class=\"products\">

\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 42
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t
\t\t\t\t\t\t<div class=\"card_header\">
\t\t\t\t\t\t\t<img src=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dirImageShoe", [], "any", false, false, false, 45), "html", null, true);
            echo "\" width=\"200\" height=\"200\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card_body\">
\t\t\t\t\t\t\t<h2>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 48), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
\t\t\t\t\t\t\t<p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "genderShoe", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"price\">R\$ ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceShoe", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 53
            echo "\t\t\t\t\t\t\t<button  class=\"details\">Detalhes</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "

\t\t\t</div>

\t\t</section>
\t</main>


";
    }

    // line 70
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  153 => 60,  141 => 53,  137 => 51,  133 => 50,  128 => 48,  119 => 45,  114 => 42,  110 => 41,  79 => 12,  75 => 11,  68 => 9,  64 => 8,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\product.twig");
    }
}
