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

/* ./private/dashboard.twig */
class __TwigTemplate_ce8095bd9673f58e1e20503949319df2bd0662f6f21ebbe82f3019058c828ac2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metas_data' => [$this, 'block_metas_data'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("./template/html.twig", "./private/dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_metas_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shoes | Painel Administrativo ";
    }

    // line 9
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/dashboard.css\">
    \t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    
    <div id=\"dashboard\">
        <div class=\"box_cima\">
            <div class=\"content_1\">
                <h2>MARCA + ACESSADA</h2>
                    <img class=\"nike\"src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/logo_NIKE.svg\">
                    <p>NIKE</p>            \t
            </div>
            <div class=\"content_2\">
                <h2>MÉDIA DE PREÇOS</h2>
                <img class=\"money\"src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/S.svg\">
                <p class=\"media\">R\$:200,00</p> 
            </div>
            <div class=\"content_3\">
                <h2>CATEGORIA + ACESSADA</h2>
                <img class=\"catego\"src=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/list.svg\">
                <p>CASUAL</p>
            </div>
            <div class=\"content_4\">
                <h2>GÊNERO + ACESSADO</h2>
                <img class=\"unissex\"src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/Unissex.svg\">
                    <p>UNISSEX</p>           
            </div>
        </div>
        <div class=\"box_baixo\">
            <div class=\"content_5\">
                <section>
                    <h2 class=\"graf\">GRÁFICO</h2>
                    <div class=\"div-graf\">
                        <!--Div that will hold the pie chart-->
                        <div id=\"chart_div\"></div>
                    </div>
                    <div class=\"div-graf\">
                        <div id=\"columnchart_values\"></div>
                    </div>
                  </section>
            </div>
            <div class=\"content_6\">
                <h2 class=\"title_filter\">FILTROS</h2>

                <div class=\"form-filters\">
                    <select name=\"selectFilter\" required id=\"selectFilter\">
                      <option selected disabled>Selecione</option>
                        <option value=\"categoria\">Categoria</option>
                        <option value=\"cor\">Cor</option>
                        <option value=\"marca\">Marca</option>
                        <option value=\"genero\">Gênero</option>
                      
                    </select>
             </div>
        </div>
        
    </div>
  
    
    ";
        // line 70
        echo twig_escape_filter($this->env, ($context["dir"] ?? null), "html", null, true);
        echo "
";
    }

    // line 73
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
      ['Casual', 2],
      ['Corrida', 2],
      ['Basquete', 2],
      ['Futebol(chuteira)', 3],
    ]);

    // Set chart options
    var options = {'title':' ',
                   'is3D':true,
                   'width':800,
                   'height':400,
                    colors: ['#0071B7', '#542886', '#00ACEE', '#933D97']
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

";
    }

    public function getTemplateName()
    {
        return "./private/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  157 => 73,  151 => 70,  113 => 35,  105 => 30,  97 => 25,  89 => 20,  82 => 15,  78 => 14,  70 => 10,  66 => 9,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/dashboard.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\private\\dashboard.twig");
    }
}
