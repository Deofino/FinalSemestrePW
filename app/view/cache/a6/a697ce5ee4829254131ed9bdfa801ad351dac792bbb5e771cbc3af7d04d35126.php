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
        echo "css/products.css\">
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
\t<main id=\"produtos\">

\t\t<div class=\"search\">
\t\t\t\t<input type=\"search\" class=\"input-search\" placeholder=\"Pesquisar\">
\t\t\t\t<i class=\"fas fa-search lupa\"></i>
\t\t</div>

\t\t<section class=\"grid-main\" id=\"l_cards\">
\t\t\t<div class=\"filters\">
            <label for=\"\">Filtrar por:</label>
\t\t\t\t<select name=\"\" id=\"\" >
               <option value=\"\">Selecione</option>
               <option value=\"\"></option>
               <option value=\"\"></option>
               <option value=\"\"></option>
            </select>
            <label for=\"\">Ordernar por:</label>
\t\t\t\t<select name=\"\" id=\"\">
               <option value=\"\">Selecione</option>
               <option value=\"\"></option>
               <option value=\"\"></option>

            </select>
            <button>Filtrar</button>
\t\t\t</div>
\t\t\t<div class=\"products\">

\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 41
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card_header\">
\t\t\t\t\t\t\t<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dirImageShoe", [], "any", false, false, false, 43), "html", null, true);
            echo "\" width=\"200\" height=\"200\" alt=\"Fofo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card_body\">
\t\t\t\t\t\t\t<h2>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nameShoe", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
\t\t\t\t\t\t\t<p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "descriptionShoe", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<!-- <p>Cor : Branco</p> -->
\t\t\t\t\t\t\t<p class=\"price\">R\$ ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceShoe", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<button class=\"details\">Detalhes</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

\t\t\t</div>

\t\t</section>
\t</main>


";
    }

    // line 66
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
        return array (  158 => 66,  146 => 56,  134 => 50,  129 => 48,  124 => 46,  117 => 43,  113 => 41,  109 => 40,  79 => 12,  75 => 11,  68 => 9,  64 => 8,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\product.twig");
    }
}
