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
class __TwigTemplate_82f16233403e1f0a25dfb3a8607e77a0d2523b0dbfca433972f9ec32463014ef extends Template
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

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Inicio ";
    }

    // line 2
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<meta
  name=\"description\"
  content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\"
/>
";
    }

    // line 7
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/index.css\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<section>
  <h1>Tênis incríveis</h1>
</section>
<section>
  <h1 class=\"tilt1\">SHOES</h1>
  <p>
    Este é nosso projeto realizado para menção do primeiro semestre da matéria
    de Projeto WEB III, desenvolvido com as features solicitadas pelo lecionador
    de conteúdo Allan. Desejamos satisfazer e conseguirmos conquistar um belo de
    um MB pra nossa conta... A aplicação será em volta de uma apresentação de
    Sapatos e Tênis, semelhante a um E-Commerce, podendo mostrar assim produtos
    de uma loja de sapatos física que até o momento não tem certeza se quer
    investir nisso para poder criar um E-commerce completo, sendo assim, um site
    mais voltado para o marketing da loja.
  </p>
</section>

<!-- CARDS AQUI  -->
<main id=\"l_cards\">


  <div class=\"card\">
    <div class=\"card_header\">
      <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/c.jpg\" width=\"200\" height=\"200\" alt=\"Fofo\">
    </div>
    <div class=\"card_body\">
      <h2>Adidas Pastel</h2>
      <!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
      <p>Casual</p>
      <!-- <p>Cor : Branco</p> -->
      <p>R\$ 290,00</p>
      <button class=\"details\">Detalhes</button>
    </div>
  </div>

   <div class=\"card\">
    <div class=\"card_header\">
      <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/home/paralax3.jpg\" width=\"200\" height=\"200\" alt=\"Fofo\">
    </div>
    <div class=\"card_body\">
      <h2>Adidas bonito</h2>
      <!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
      <p>Casual</p>
      <!-- <p>Cor : Branco</p> -->
      <p>R\$ 240,00</p>
      <button class=\"details\">Detalhes</button>
    </div>
  </div>

   <div class=\"card\">
    <div class=\"card_header\">
      <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/home/paralax1.jpg\" width=\"200\" height=\"200\" alt=\"Fofo\">
    </div>
    <div class=\"card_body\">
      <h2>Nike Air Max</h2>
      <!-- <p>Descricao bonita bem cheia Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis odio exercitationem velit perferendis. Placeat possimus illo eius sequi laboriosam nobis vel in quis! Fugit, corrupti temporibus aliquid dolorum quam doloremque.</p> -->
      <p>Casual</p>
      <!-- <p>Cor : Branco</p> -->
      <p>R\$ 300,00</p>
      <button class=\"details\">Detalhes</button>
    </div>
  </div>


</main>
<!-- FIM CARDS -->

<section></section>
<section>
  <h1 class=\"tilt2\">Estilo versátil pronto para as ruas</h1>
  <p>
    Temos tênis de inumeras marcas visadas atualmente e uma garantia de que
    nossos produtos são originais e de ótima qualidade, se gostou de algum venha
    conhecer nossa loja.
  </p>
  <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "product\"><i class=\"fas fa-long-arrow-alt-right\"></i></a>
</section>

";
    }

    // line 89
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
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
        return array (  178 => 89,  170 => 86,  143 => 62,  126 => 48,  109 => 34,  83 => 10,  79 => 9,  72 => 8,  68 => 7,  60 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\index.twig");
    }
}
