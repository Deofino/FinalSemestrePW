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

/* ./private/insert.twig */
class __TwigTemplate_310584fc6c46a012b562dbd18c0d163a7678358cdee1d70cefa6bcda9bf9ffd4 extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "./private/insert.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Inserir ";
    }

    // line 2
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<meta
  name=\"description\"
  content=\"Venha e entre como administrador na melhor loja de Tenis, a SHOES\"
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
        echo "css/form.css\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<main>
  <div id=\"main_insert\">
    <div class=\"fd-col\">
      <section id=\"branch\">
        <div class=\"div_form\">
          <h2>Marca</h2>
          <form action=\"\" method=\"POST\" class=\"form\">
            <div class=\"form-item col\">
              <label for=\"branch\" class=\"lb\">Marca: </label>
              <input type=\"text\" id=\"branch\" name=\"branch\" />
            </div>
            <div class=\"form-item\">
              <button type=\"submit\" id=\"button_submit\">Inserir</button>
            </div>
          </form>
        </div>
      </section>

      <section id=\"category\">
        <div class=\"div_form\">
          <h2>Categoria</h2>
          <form action=\"\" method=\"POST\" class=\"form\">
            <div class=\"form-item col\">
              <label for=\"category\" class=\"item-label\">Categoria: </label>
              <input type=\"text\" id=\"category\" name=\"category\" />
            </div>
            <div class=\"form-item\">
              <button type=\"submit\" id=\"button_submit\">Inserir</button>
            </div>
          </form>
        </div>
      </section>
    </div>
    <div class=\"fd-col\">
      <section id=\"product\">
        <div class=\"div_form\">
          <h2>Produto</h2>
          <form
            action=\"\"
            method=\"POST\"
            enctype=\"multipart/form-data\"
            class=\"form\"
          >
            <div class=\"form-item col\">
              <label for=\"productName\" class=\"item-label\">Produto: </label>
              <input
                type=\"text\"
                id=\"productName\"
                name=\"productName\"
                class=\"item-input\"
                maxlength=\"50\"
                minlength=\"10\"
                required
              />
            </div>
            <div class=\"form-item col\">
              <label for=\"description\" class=\"item-label\">Descricao: </label>
              <textarea
                name=\"description\"
                id=\"description\"
                rows=\"3\"
                class=\"item-input\"
                maxlength=\"100\"
                minlength=\"10\"
                required
              ></textarea>
            </div>
            <div class=\"form-item col\">
              <label for=\"product\" class=\"item-label\">Genero: </label>
              <div class=\"btn nshadow al-center\">
                <input type=\"radio\" value=\"male\" id=\"radio\" name=\"radio\" />
                <label for=\"radioM\">Masculino</label>
              </div>
              <div class=\"btn nshadow al-center\">
                <input type=\"radio\" value=\"female\" id=\"radio\" name=\"radio\" />
                <label for=\"radioF\">Feminino</label>
              </div>
              <div class=\"btn nshadow al-center\">
                <input type=\"radio\" value=\"female\" id=\"radio\" name=\"radio\" />
                <label for=\"radioU\">Unisex</label>
              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"price\" class=\"item-label\">Valor: </label>
              <input
                type=\"text\"
                id=\"price\"
                name=\"price\"
                value=\"R\$: 00,00\"
                class=\"item-input\"
                minlength=\"3\"
                max=\"10\"
                required
              />
              ";
        // line 105
        echo "            </div>
            <div class=\"form-item col\">
              <label for=\"selectCategory\" class=\"item-label\">Categoria: </label>
              <select name=\"selectCategory\" required id=\"selectCategory\">
                <option value=\"0\">Selecione</option>
                ";
        // line 111
        echo "              </select>
            </div>
            <div class=\"form-item col\">
              <label for=\"selectBranch\" class=\"item-label\">Marca: </label>
              <select name=\"selectBranch\" id=\"selectBranch\">
                <option value=\"0\">Selecione</option>
                ";
        // line 118
        echo "              </select>
            </div>
            <div class=\"form-item col\">
              <label for=\"colors\" class=\"item-label\">Cores: </label>
              <div class=\"form-item btn\">
                <input
                  type=\"text\"
                  id=\"colors\"
                  name=\"colors\"
                  maxlength=\"10\"
                  min=\"3\"
                />
                ";
        // line 131
        echo "                <button type=\"button\" class=\"button\" id=\"add_color\">
                  <i class=\"fas fa-plus\"></i>
                </button>
              </div>
              <div class=\"form-item row\" id=\"tags\">
                ";
        // line 137
        echo "              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"image\" class=\"item-label\">Imagem: </label>
              <input type=\"file\" id=\"image\" class=\"nshadow\" name=\"image\" />
              <div class=\"imagem\">";
        // line 142
        echo "</div>
            </div>
            <div class=\"form-item\">
              <button type=\"submit\" id=\"button_submit\">Inserir</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
</main>

";
    }

    // line 154
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/modules.js\" type=\"module\"></script>
<script type=\"module\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/insert.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "./private/insert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 156,  242 => 155,  238 => 154,  222 => 142,  215 => 137,  208 => 131,  194 => 118,  186 => 111,  179 => 105,  83 => 10,  79 => 9,  72 => 8,  68 => 7,  60 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/insert.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\private\\insert.twig");
    }
}
