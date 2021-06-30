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

/* index.twig */
class __TwigTemplate_d775e8e9ee2e29a33f6570991c3bf8650aac9e08938d19639db0b3de84d1d81c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metas_data' => [$this, 'block_metas_data'],
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
        $this->parent = $this->loadTemplate("./template/html.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Inicio
";
    }

    // line 5
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<meta name=\"description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\"/>
";
    }

    // line 8
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/index.css\"/>
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
\t<section>
\t\t<h1>Tênis incríveis</h1>
\t</section>
\t<section>
\t\t<h1 class=\"tilt1\">SHOES</h1>
\t\t<p>
\t\t\tEste é nosso projeto realizado para menção do primeiro semestre da matéria
\t\t\t    de Projeto WEB III, desenvolvido com as features solicitadas pelo lecionador
\t\t\t    de conteúdo Allan. Desejamos satisfazer e conseguirmos conquistar um belo de
\t\t\t    um MB pra nossa conta... A aplicação será em volta de uma apresentação de
\t\t\t    Sapatos e Tênis, semelhante a um E-Commerce, podendo mostrar assim produtos
\t\t\t    de uma loja de sapatos física que até o momento não tem certeza se quer
\t\t\t    investir nisso para poder criar um E-commerce completo, sendo assim, um site
\t\t\t    mais voltado para o marketing da loja.
\t\t</p>
\t</section>

\t<!-- CARDS AQUI  -->
\t<main id=\"l_cards\">


\t\t<div class=\"card\">
\t\t\t<div class=\"card_header\">
\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/home/c.jpg\" width=\"200\" height=\"200\" alt=\"Fofo\">
\t\t\t</div>
\t\t\t<div class=\"card_body\">
\t\t\t\t<h2>Adidas Pastel</h2>
\t\t\t\t<!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
\t\t\t\t<p>Casual</p>
\t\t\t\t<!-- <p>Cor : Branco</p> -->
\t\t\t\t<p>R\$ 290,00</p>
\t\t\t\t<button class=\"details\">Detalhes</button>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card\">
\t\t\t<div class=\"card_header\">
\t\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/home/paralax3.jpg\" width=\"200\" height=\"200\" alt=\"Fofo\">
\t\t\t</div>
\t\t\t<div class=\"card_body\">
\t\t\t\t<h2>Adidas bonito</h2>
\t\t\t\t<!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
\t\t\t\t<p>Casual</p>
\t\t\t\t<!-- <p>Cor : Branco</p> -->
\t\t\t\t<p>R\$ 240,00</p>
\t\t\t\t<button class=\"details\">Detalhes</button>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card\">
\t\t\t<div class=\"card_header\">
\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/home/paralax1.jpg\" width=\"200\" height=\"200\" alt=\"Fofo\">
\t\t\t</div>
\t\t\t<div class=\"card_body\">
\t\t\t\t<h2>Nike Air Max</h2>
\t\t\t\t<!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
\t\t\t\t<p>Casual</p>
\t\t\t\t<!-- <p>Cor : Branco</p> -->
\t\t\t\t<p>R\$ 300,00</p>
\t\t\t\t<button class=\"details\">Detalhes</button>
\t\t\t</div>
\t\t</div>


\t</main>
\t<!-- FIM CARDS -->

\t<section></section>
\t<section>
\t\t<h1 class=\"tilt2\">Estilo versátil pronto para as ruas</h1>
\t\t<p>
\t\t\tTemos tênis de inumeras marcas visadas atualmente e uma garantia de que
\t\t\t    nossos produtos são originais e de ótima qualidade, se gostou de algum venha
\t\t\t    conhecer nossa loja.
\t\t</p>
\t\t<a href=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "product\">
\t\t\t<i class=\"fas fa-long-arrow-alt-right\"></i>
\t\t</a>
\t</section>

";
    }

    // line 94
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 94,  169 => 88,  142 => 64,  125 => 50,  108 => 36,  82 => 12,  78 => 11,  71 => 9,  67 => 8,  62 => 6,  58 => 5,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\index.twig");
    }
}
