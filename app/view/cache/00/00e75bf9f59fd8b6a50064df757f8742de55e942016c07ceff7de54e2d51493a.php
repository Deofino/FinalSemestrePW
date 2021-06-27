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
class __TwigTemplate_a23138c0ffee8f569faa661a8791ef87cf188d760e5f1ccd9bced755f0e58d14 extends Template
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
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    
    <div id=\"dashboard\">
        <div class=\"box_cima\">
            <div class=\"content_1\">
                <h2>DADOS</h2>
            </div>
            <div class=\"content_2\">
                <h2>DADOS</h2>
            </div>
            <div class=\"content_3\">
                <h2>DADOS</h2>
            </div>
            <div class=\"content_4\">
                <h2>DADOS</h2>
            </div>
        </div>
        <div class=\"box_baixo\">
            <div class=\"content_5\">
                <section>
                    <h2 class=\"graf\">Gráfico</h2>
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
                <h2>FILTROS</h2>
           </div>
        </div>
    </div>
  
    
    ";
        // line 50
        echo twig_escape_filter($this->env, ($context["dir"] ?? null), "html", null, true);
        echo "
";
    }

    // line 53
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
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
        return array (  129 => 54,  125 => 53,  119 => 50,  81 => 14,  77 => 13,  70 => 10,  66 => 9,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./private/dashboard.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\private\\dashboard.twig");
    }
}
