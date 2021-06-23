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

/* notFound.twig */
class __TwigTemplate_8b794cc37783db0464bed611662ce767063600e6559b00baf163aa886224c99c extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "notFound.twig", 1);
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
        echo "Pagina nao encontrada";
    }

    // line 9
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/notfound.css\">
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "   
    <div id=\"content\">
      <div class=\"svg\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/vectors/notfound.svg\" alt=\"Not Found\">
      </div>
      <div class=\"title\">
        <h1>Oops! Página não encontrada!</h1>
      </div>
      <div class=\"text\">
        <p class=\"um\">Esta página que esta tentando acessar foi removida ou alterada.</p>
        <p>Volte para o nosso menu principal.</p>
      </div>
      <div>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "../public\" class=\"button\">Início</a>
      </div>
    </div>

";
    }

    // line 33
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    
";
    }

    public function getTemplateName()
    {
        return "notFound.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  108 => 33,  99 => 27,  86 => 17,  81 => 14,  77 => 13,  70 => 10,  66 => 9,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "notFound.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\notFound.twig");
    }
}
