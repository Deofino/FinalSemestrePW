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

/* ./login.twig */
class __TwigTemplate_fc5822d8174c8cc2d06305a26422fa0de02b50ad9e94cf5aee99a9c1f3f50c0b extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "./login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Entrar ";
    }

    // line 3
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <meta name=\"description\" content=\"Venha e entre como administrador na melhor loja de Tenis, a SHOES\">
";
    }

    // line 6
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/form.css\">
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <main id=\"main_container_login\">
        <div class=\"div_form\">
            <h2>Entrar como administrador</h2>
            <form action=\"/admin/login\" method=\"post\" class=\"form\">
                <div class=\"form-item col\">
                    <label for=\"name\" class=\"item-label\">Nome:</label>
                    <input type=\"text\" class=\"item-input\" name=\"name\" id=\"name\" maxlength=\"100\" required>
                    <div class=\"div_message\">
                        <p class=\"message\"></p>
                    </div>
                </div>
                <div class=\"form-item col\">
                    <label for=\"email\" class=\"item-label\">E-mail:</label>
                    <input type=\"email\" class=\"item-input\" name=\"email\" id=\"email\"  maxlength=\"100\" required>
                    <div class=\"div_message\" >
                        <p class=\"message\"></p>
                    </div>
                </div>
                <div class=\"form-item col\">
                    <label for=\"password\" class=\"item-label\">Senha:</label>
                    <input type=\"password\" class=\"item-input\" name=\"password\" id=\"password\" minlength=\"8\" maxlength=\"50\"  required>
                    <div class=\"div_message\">
                        <p class=\"message\"></p>
                    </div>
                </div>
                <div class=\"form-item col\">
                    <div class=\"row\">
                        <label for=\"check\" class=\"item-label\">Aceita os <strong>Termos de uso e privacidade</strong>?</label>
                        <label for=\"terms\" id=\"check\" class=\"inative\"></label>
                        <input type=\"checkbox\" class=\"item-input\" hidden name=\"terms\" id=\"terms\">
                    </div>
                    <div class=\"div_message\">
                        <p class=\"message\"></p>
                    </div>
                </div>
                <div class=\"form-item\">
                    <button type=\"submit\" class=\"button button_primary\" name=\"button_submit\" id=\"button_submit\">Entrar</button>
                </div>
            </form>
        </div>
    </main>

   
    
";
    }

    // line 57
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/login.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "./login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 58,  129 => 57,  81 => 11,  77 => 10,  70 => 7,  66 => 6,  61 => 4,  57 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./login.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\login.twig");
    }
}
