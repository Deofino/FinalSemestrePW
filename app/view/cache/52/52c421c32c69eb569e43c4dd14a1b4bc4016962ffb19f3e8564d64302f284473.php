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

/* contact.twig */
class __TwigTemplate_b0e0c2a2ce0253164ed4f7687c3abe25aea026be8fa7cec3716faef624d3c793 extends Template
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
        $this->parent = $this->loadTemplate("./template/html.twig", "contact.twig", 1);
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
        echo "Shoes | Contato";
    }

    // line 9
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "css/contact.css\">
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "         <div class=\"attraction\">
            <h1 class=\"title\">Entre em contato conosco</h1>
            <img class=\"svgcontact\"src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/vectors/contact.svg\">
            <p class=\"text\">Envie-nos um email que responderemos o mais rápido possível!</p>
            <i class=\"fas fa-angle-double-down\"></i>
         </div>
         <div id=\"grid\">
               <div class=\"left\">        
               <form method=\"post\" action=\"../app/controller/enviar-email.php\">
                        <input type=\"text\" name=\"txNome\" required=\"require\" pattern=\"[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+\$\" placeholder=\"Nome\"/>
                  
                        <input type=\"email\" name=\"txEmail\"  required=\"require\"  placeholder=\"Email\"/>
                  
                        <input type=\"text\" name=\"txAssunto\" required=\"require\" placeholder=\"Assunto\"/>
                     
                        <textarea type=\"text\" name=\"txMsg\" required=\"require\" pattern=\"[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+\$\" placeholder=\"Mensagem\"></textarea>
                     
                        <input type=\"submit\" value=\"Enviar\"/>
               </form>
            </div>
         <div class=\"right\"id=\"mapa\"></div>
      </div>
";
    }

    // line 38
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "js/contact.js\"></script>
<script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCAckKLHl-T6HPk2pTVfxrjHXf4yLojpfw&amp;sensor=false\"></script>
<script>
    let map;

    function initialize(){
        var coordenadas = {lat: -23.552925305071476, lng: -46.39960872738754};
       
        let mapa = new google.maps.Map(document.getElementById('mapa'),{
            zoom: 10,
            center: coordenadas,
            mapTypeId: 'roadmap'
        });

        let marker = new google.maps.Marker({
            position: coordenadas,
            title: \"Shoes :-D\",
            map: mapa,
            icon: '";
        // line 57
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "img/icon32px.png'
        });
        
    }
    initialize();
</script>
<!-- <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
</head>
<body>
    <button onclick=\"mostrar()\">Mostrar</button>
    <script type=\"text/javascript\">

        function mostrar(){
            swal({
                title: 'Obrigada!',
                text: 'Email enviado com sucesso',
                icon: 'success'
            });
        }
    
    </script> -->
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  114 => 39,  110 => 38,  85 => 16,  81 => 14,  77 => 13,  70 => 10,  66 => 9,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\contact.twig");
    }
}
