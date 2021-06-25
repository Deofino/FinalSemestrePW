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
        // line 4
        echo "
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Produtos";
    }

    // line 9
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
   produtosdsadasds
";
    }

    // line 18
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    
";
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
        return array (  89 => 19,  85 => 18,  79 => 14,  75 => 13,  70 => 10,  66 => 9,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\product.twig");
    }
}
