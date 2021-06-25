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

/* contact.twig */
class __TwigTemplate_5b330015c2ae750e8acdae10a998c0c2a90a9bcbaa3f4162e881c8f85c157577 extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "contact.twig", 1);
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
        echo "Shoes | Contato
";
    }

    // line 8
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/contact.css\">
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t<div class=\"attraction\">
\t\t<h1 class=\"title\">Entre em contato conosco</h1>
\t\t<img class=\"svgcontact\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/vectors/contact.svg\">
\t\t<p class=\"text\">Envie-nos um email que responderemos o mais rápido possível!</p>
\t\t<i class=\"fas fa-angle-double-down\"></i>
\t</div>
\t<div id=\"grid\">
\t\t<div class=\"left\">
\t\t\t<form method=\"post\" action=\"../app/controller/enviar-email.php\">
\t\t\t\t<input type=\"text\" name=\"txNome\" required=\"require\" pattern=\"[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+\$\" placeholder=\"Nome\"/>

\t\t\t\t<input type=\"email\" name=\"txEmail\" required=\"require\" placeholder=\"Email\"/>

\t\t\t\t<input type=\"text\" name=\"txAssunto\" required=\"require\" placeholder=\"Assunto\"/>

\t\t\t\t<textarea type=\"text\" name=\"txMsg\" required=\"require\" pattern=\"[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+\$\" placeholder=\"Mensagem\"></textarea>

\t\t\t\t<input type=\"submit\" value=\"Enviar\"/>
\t\t\t</form>
\t\t</div>
        
\t\t<div class=\"right\" id=\"mapa\"></div>
\t</div>
";
    }

    // line 38
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "\t<script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCAckKLHl-T6HPk2pTVfxrjHXf4yLojpfw&amp;\"></script>
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/contact.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  113 => 39,  109 => 38,  83 => 15,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\contact.twig");
    }
}
