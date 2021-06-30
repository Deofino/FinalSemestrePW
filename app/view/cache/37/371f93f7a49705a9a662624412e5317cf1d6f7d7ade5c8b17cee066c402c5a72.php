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

/* footer.twig */
class __TwigTemplate_5ffbe6b29571a7bfa71d952efcb5b60dc7dcc3f5ab3ea3a71f5095882ab22a3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer id=\"footer\">
    <div id=\"under-nav\" class=\"footer-item\">
        <div class=\"div-image\">
            <a href='#' onclick=\"scrollTo(0,0)\" ><img class=\"image\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/vectors/logo.png\" alt=\"Logotipo\"></a>
        </div>
        <ul id=\"list-items\">
            <a href='#' onclick=\"scrollTo(0,0)\"><h2>Shoes</h2></a>
            <li class=\"items\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "\">Inicio</a></li>
            <li class=\"items\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "contact\">Contato</a></li>
            <li class=\"items\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "admin\">Entrar</a></li>
            <li class=\"items\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "product\">Produtos</a></li>
        </ul>
    </div>
    <div class=\"footer-item\" id=\"categories\">
        <ul id=\"list-items\">
            <p>Mais buscados</p>
            <li class=\"items\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "products/casual\">Casual</a></li>
            <li class=\"items\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "products/corrida\">Corrida</a></li>
            <li class=\"items\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "products/social\">Social</a></li>
            <li class=\"items\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "products/basquete\">Basquete</a></li>
        </ul>
    </div>
    <div class=\"footer-item\" id=\"social\">
        <ul id=\"social-items\">
            <p>Redes Sociais</p>
            <li class=\"items\"><a href=\"https://www.facebook.com/profile.php?id=100009290472669\" target=\"_blank\"><i class=\"fab fa-facebook\"><span>Facebook</span></i></a></li>
            <li class=\"items\"><a href=\"https://www.instagram.com/vigoncalves_p/\" target=\"_blank\"><i class=\"fab fa-instagram\"><span>Instagram</span></i></a></li>
            <li class=\"items\"><a href=\"https://github.com/Deofino/FinalSemestrePW\" target=\"_blank\"><i class=\"fab fa-github\"><span>Github</span></i></a></li>
            <li class=\"items\"><a href=\"https://www.linkedin.com/in/guilherme-narciso-162382189/\" target=\"_blank\"><i class=\"fab fa-linkedin\"><span>LinkedIn</span></i></a></li>
        </ul>
        
    </div>
    <div id=\"div-logo\" class=\"footer-item\">
        <a href='#' onclick=\"scrollTo(0,0)\" ><img class=\"image\" src='";
        // line 34
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/vectors/logo.png'alt=\"Logotipo\"></a>
    </div>
    <div id=\"div-copy\" >
        <p class=\"direito\">Todos os direitos reservados por Shoes &copy; 2021.</p>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 270\"><path fill=\"#542886\" fill-opacity=\"1\" d=\"M0,192L60,170.7C120,149,240,107,360,106.7C480,107,600,149,720,154.7C840,160,960,128,1080,122.7C1200,117,1320,139,1380,149.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z\"></path></svg>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\template\\footer.twig");
    }
}
