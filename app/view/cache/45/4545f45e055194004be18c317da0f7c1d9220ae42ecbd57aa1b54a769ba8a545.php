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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Inicio ";
    }

    // line 4
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <meta name=\"description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\">
";
    }

    // line 7
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/index.css\">
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
     <section>
        <h1>Tênis incríveis</h1>
    </section>
    <section>
        <h1 class=\"tilt1\">SHOES</h1>
        <p>Este é nosso projeto realizado para menção do primeiro semestre da matéria de Projeto WEB III, desenvolvido com as features solicitadas pelo lecionador de conteúdo Allan. Desejamos satisfazer e conseguirmos conquistar um belo de um MB pra nossa conta... A aplicação será em volta de uma apresentação de Sapatos e Tênis, semelhante a um E-Commerce, podendo mostrar assim produtos de uma loja de sapatos física que até o momento não tem certeza se quer investir nisso para poder criar um E-commerce completo, sendo assim, um site mais voltado para o marketing da loja.</p>
    </section>

    <!-- CARDS AQUI  -->
    <div class=\"grid\">
        <div class=\"grid-item\">
          <div class=\"card\">
            <img class=\"card-img\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/c.jpg\" alt=\"Rome\" />
            <div class=\"card-content\">
              <h1 class=\"card-header\">Adidas seilaoque</h1>
            
              <p class=\"card-text\">
               <strong> Casual </strong>
               </p>
                <p class=\"card-text\">Cor: Branco</p>
                <p class=\"card-text\">R\$:200,00</p>
              <button class=\"card-btn\">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class=\"grid-item\">
          <div class=\"card\">
            <img
              class=\"card-img\"
              src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/c.jpg\"
              alt=\"Grand Canyon\"
            />
            <div class=\"card-content\">
              <h1 class=\"card-header\">Grand Canyon</h1>
              <p class=\"card-text\">
                One of the world's natural wonders, the iconic Grand Canyon draws
                oohs and aahs from visitors perched at the edge of its
                <strong>towering cliffs</strong>.
              </p>
              <button class=\"card-btn\">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class=\"grid-item\">
          <div class=\"card\">
            <img class=\"card-img\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/c.jpg\" alt=\"Maldives\" />
            <div class=\"card-content\">
              <h1 class=\"card-header\">Maldives</h1>
              <p class=\"card-text\">
                The Maldives are known for their
                <strong>natural environment</strong> including the blue ocean,
                white beaches, and clean air, attracting tourists.
              </p>
              <button class=\"card-btn\">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
      </div>
    <!-- FIM CARDS -->
    
    <section></section>
    <section>
        <h1 class=\"tilt2\">Estilo versátil pronto para as ruas</h1>
        <p>Temos tênis de inumeras marcas visadas atualmente e uma garantia de que nossos produtos são originais e de ótima qualidade, se gostou de algum venha conhecer nossa loja.</p>
       <a href=\"products\"><i class=\"fas fa-long-arrow-alt-right\"></i></a>
    </section>

    
    
";
    }

    // line 82
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    
";
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
        return array (  168 => 83,  164 => 82,  135 => 57,  116 => 41,  96 => 24,  81 => 11,  77 => 10,  70 => 8,  66 => 7,  61 => 5,  57 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\index.twig");
    }
}
