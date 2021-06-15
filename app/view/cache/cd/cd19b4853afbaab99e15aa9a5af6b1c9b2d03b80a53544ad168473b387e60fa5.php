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
class __TwigTemplate_7d7776fe10a95614d2f33801af55d2eb1d5380039a1eff4341b8f8608a7cc3b6 extends Template
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
    <meta id=\"meta-item-image\" itemprop=\"image\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/logo.png\"/> 
    <meta id=\"twt-card\" name=\"twitter:card\" content=\"summary\" />
    <meta id=\"twt-site\" name=\"twitter:site\" content=\"@shoes\" />
    <meta id=\"twt-title\" name=\"twitter:title\" content=\"Shoes\" />
    <meta id=\"twt-description\" name=\"twitter:description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <meta id=\"twt-creator\" name=\"twitter:creator\" content=\"@shoes\" />
    <meta id=\"twt-image\" name=\"twitter:image\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/logo.png\"/> 
    <meta id=\"og-title\" property=\"og:title\" content=\"Shoes\" />
    <meta id=\"og-type\" property=\"og:type\" content=\"website\" />
    <meta id=\"og-url\" property=\"og:url\" content=\"https://dvshoes.com.br\" />
    <meta id=\"og-image\" property=\"og:image\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/logo.png\"/> 
    <meta id=\"og-description\" property=\"og:description\" content=\"A melhor loja de todas para se encontrar tenis e sapatos lindissimos para programadores ainda mais lindissimos, com muito orgulho apresento a vocês... SHOES!\" />
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Shoes\">
    <meta property=\"og:url\" content=\"https://dvshoes.com.br\">
    <meta property=\"og:site_name\" content=\"Shoes\">

    <link rel=\"shortcut icon\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/logo.png\" type=\"image/png\" />   
    ";
        // line 35
        $this->displayBlock('metas_data', $context, $blocks);
        // line 38
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.3/css/all.css\" integrity=\"sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk\" crossorigin=\"anonymous\">
   
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/reset.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/footer.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/menu.css\">
    
    ";
        // line 45
        $this->displayBlock('styles', $context, $blocks);
        // line 48
        echo "</head>
<body>
    
    ";
        // line 51
        $this->loadTemplate("navbar.twig", "./template/html.twig", 51)->display($context);
        // line 52
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->loadTemplate("footer.twig", "./template/html.twig", 56)->display($context);
        // line 57
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/menu.js\"></script>
    ";
        // line 59
        $this->displayBlock('scripts', $context, $blocks);
        // line 60
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

    // line 45
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    
    ";
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "
    ";
    }

    // line 59
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
        return array (  178 => 59,  173 => 53,  169 => 52,  164 => 46,  160 => 45,  153 => 38,  148 => 36,  144 => 35,  138 => 60,  136 => 59,  132 => 58,  129 => 57,  127 => 56,  124 => 55,  121 => 52,  119 => 51,  114 => 48,  112 => 45,  107 => 43,  103 => 42,  99 => 41,  92 => 38,  90 => 35,  86 => 34,  76 => 27,  69 => 23,  60 => 17,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./template/html.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\template\\html.twig");
    }
}
