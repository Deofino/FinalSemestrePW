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

/* ./template/html.twig */
class __TwigTemplate_076f7cd267e849a5149d219d88b01f1fdb21088c8f23c71ff70bfce0bc6d5efa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'metas_data' => [$this, 'block_metas_data'],
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"UTF-8\">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TN3KXCZ');</script><script type=\"text/javascript\" src=\"https://www.extra-imagens.com.br/Js/vv-datalayer/vv-datalayer.js\"></script>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Guilherme Delfino & Vitória Gonçalves\">
    <meta name=\"generator\" content=\"Delfino e Vitoria\">
    <meta name=\"Abstract\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <meta name=\"theme-color\" content=\"#22222f\">
    <meta id=\"meta-application-name\" name=\"application-name\" content=\"Shoes\" />
    <meta id=\"meta-description\" name=\"description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <meta id=\"meta-keywords\" name=\"keywords\" content=\"shoe, sapatos, tenis, nike, adidas, puma, elegante, bonito, all star, tenis casual, air max\" />
    <meta id=\"meta-item-name\" itemprop=\"name\" content=\"Shoes\" />
    <meta id=\"meta-item-description\" itemprop=\"description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <!-- <meta id=\"meta-item-image\" itemprop=\"image\" content=\"\" definir ICONE/> -->
    <meta id=\"twt-card\" name=\"twitter:card\" content=\"summary\" />
    <meta id=\"twt-site\" name=\"twitter:site\" content=\"@shoes\" />
    <meta id=\"twt-title\" name=\"twitter:title\" content=\"Shoes\" />
    <meta id=\"twt-description\" name=\"twitter:description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <meta id=\"twt-creator\" name=\"twitter:creator\" content=\"@shoes\" />
    <!-- <meta id=\"twt-image\" name=\"twitter:image\" content=\"\" definir ICONE/> -->
    <meta id=\"og-title\" property=\"og:title\" content=\"Shoes\" />
    <meta id=\"og-type\" property=\"og:type\" content=\"website\" />
    <meta id=\"og-url\" property=\"og:url\" content=\"https://dvshoes.com.br\" />
    <!-- <meta id=\"og-image\" property=\"og:image\" content=\"\" definir ICONE/> -->
    <meta id=\"og-description\" property=\"og:description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Loja Kings Sneakers\">
    <meta property=\"og:url\" content=\"https://www.lojakings.com.br/\">
    <meta property=\"og:site_name\" content=\"Loja Kings Sneakers\">

    <!-- <link rel=\"shortcut icon\" href=\"\" type=\"image/png\" />   definir ICONE  -->
    ";
        // line 35
        $this->displayBlock('metas_data', $context, $blocks);
        // line 38
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"./css/reset.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.3/css/all.css\" integrity=\"sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk\" crossorigin=\"anonymous\">
    ";
        // line 41
        $this->displayBlock('styles', $context, $blocks);
        // line 44
        echo "</head>
<body>
    
    ";
        // line 47
        $this->loadTemplate("./navbar.twig", "./template/html.twig", 47)->display($context);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->loadTemplate("./footer.twig", "./template/html.twig", 51)->display($context);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('scripts', $context, $blocks);
        // line 54
        echo "</body>
</html>
";
    }

    // line 35
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        <meta name=\"description\" content=\"Essa é minha descricao do site que aparece no negocio de busca\">
    ";
    }

    // line 38
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Title page";
    }

    // line 41
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
    ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "./template/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  142 => 49,  137 => 42,  133 => 41,  126 => 38,  121 => 36,  117 => 35,  111 => 54,  109 => 53,  106 => 52,  104 => 51,  101 => 50,  99 => 49,  96 => 48,  94 => 47,  89 => 44,  87 => 41,  80 => 38,  78 => 35,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./template/html.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\template\\html.twig");
    }
}
