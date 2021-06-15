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

/* navbar.twig */
class __TwigTemplate_c249b2508c0c16b7b8a5227d21dd1c5715589f0a9cec3db36365554b3175e9b6 extends Template
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
        echo "<header id='navbar'>
    <div id=\"logotipo\">
        <a onclick=\"scrollTo(0,0)\" >
          <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/logo.ico\" alt='Logotipo'/>
        </a>
        <a id=\"logo\" href='#' onclick=\"scrollTo(0,0)\">Shoes</a>
      </div>
    
    <nav id=\"nav\">
      <button id=\"btn-mobile\">
        <span id=\"hamburger\"></span>
        </button>
        <ul id=\"menu\">
            <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "product\">Produto</a></li>
            <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "contact\">Contato</a></li>
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "              <li id=\"admin\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin/\">Administrador</a>
                <ul id=\"dropdown\">
                  <li><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin/\">Dashboard</a></li>
                  <li><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin/insert\">Inserir</a></li>
                  <li><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin/update\">Atualizar</a></li>
                  <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin/delete\">Excluir</a></li>
                  <hr>
                  <li>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin/logout\"><i class=\"fas fa-sign-out-alt \"></i>Sair</a>
                  </li>
                </ul>
              </li>
            ";
        } else {
            // line 32
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "admin\">Entrar</a></li>
            ";
        }
        // line 33
        echo "            
        </ul>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 32,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  72 => 19,  69 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\template\\navbar.twig");
    }
}
