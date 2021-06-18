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
      <section id=\"brand\">
        <div class=\"div_form\">
          <h2>Marca</h2>
          <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "brand/create\" method=\"POST\" class=\"form\">
            <div class=\"form-item col\">
              <label for=\"brandName\" class=\"lb\">Marca: </label>
              <input type=\"text\" id=\"brandName\" name=\"brandName\" required maxlength=\"50\" min=\"3\" />
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
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
          <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "category/create\" method=\"POST\" class=\"form\">
            <div class=\"form-item col\">
              <label for=\"categoryName\" class=\"item-label\">Categoria: </label>
              <input type=\"text\" id=\"categoryName\" name=\"categoryName\" required maxlength=\"50\" min=\"3\"/>
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
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
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
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
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
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
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"price\" class=\"item-label\">Valor: </label>
              <input
                id=\"price\"
                type=\"text\"
                inputmode=\"numeric\"
                name=\"price\"
                class=\"item-input\"
                minlength=\"3\"
                placeholder=\"R\$ 0,00\"
                required
              />
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"selectCategory\" class=\"item-label\">Categoria: </label>
              <select name=\"selectCategory\" required id=\"selectCategory\">
                <option value=\"0\">Selecione</option>
                 ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 129
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "_id", [], "any", false, false, false, 129), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nameCategory", [], "any", false, false, false, 129), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "              </select>
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"selectBrand\" class=\"item-label\">Marca: </label>
              <select name=\"selectBrand\" id=\"selectBrand\">
                <option value=\"0\">Selecione</option>
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 141
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "_id", [], "any", false, false, false, 141), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "nameBrand", [], "any", false, false, false, 141), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "              </select>
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"colors\" class=\"item-label\">Cores: </label>
              <div class=\"form-item btn\">
                <input
                list=\"colorsList\"
                  type=\"text\"
                  id=\"colors\"
                  name=\"colors\"
                  max=\"10\"
                  min=\"3\"
                />
                <datalist id=\"colorsList\">
                  <option value=\"Vermelho\">
                  <option value=\"Rosa\">
                  <option value=\"Azul\">
                  <option value=\"Verde\">
                  <option value=\"Preto\">
                  <option value=\"Cinza\">
                  <option value=\"Branco\">
                  <option value=\"Colorido\">
                  <option value=\"Laranja\">
                  <option value=\"Marrom\">
                </datalist>
                <button type=\"button\" class=\"button shadow\" id=\"add_color\">
                  <i class=\"fas fa-plus\"></i>
                </button>
              </div>
              <div class=\"form-item row\" id=\"tags\">
                ";
        // line 177
        echo "               <div id=\"chips\">
                 
               </div>
              </div>
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
            </div>
            <div class=\"form-item col\">
              <label for=\"image\" class=\"item-label\">Imagem: </label>
              <label for=\"image\" class=\"lb-sm file_image\">
                <i class=\"fas fa-upload\"></i>
                Nenhum arquivo selecionado 
              </label>
              <input type=\"file\" id=\"image\" hidden class=\"nshadow\" name=\"image\" />
              <div class=\"imagem\">";
        // line 192
        echo "</div>
              <div class=\"div_message\">
                <p class=\"message\"></p>
              </div>
            </div>
            <div class=\"form-item\">
              <button type=\"button\" id=\"button_submit\">Inserir</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
</main>

";
    }

    // line 208
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "<script src=\"https://unpkg.com/imask\"></script>
<script type=\"module\" src=\"";
        // line 210
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
        return array (  328 => 210,  325 => 209,  321 => 208,  302 => 192,  285 => 177,  250 => 143,  239 => 141,  235 => 140,  224 => 131,  213 => 129,  209 => 128,  112 => 34,  91 => 16,  83 => 10,  79 => 9,  72 => 8,  68 => 7,  60 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/insert.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\private\\insert.twig");
    }
}
