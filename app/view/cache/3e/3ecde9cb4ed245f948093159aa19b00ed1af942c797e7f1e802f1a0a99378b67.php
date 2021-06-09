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

/* ./navbar.twig */
class __TwigTemplate_3932a455baa3b8f718d563e7370bfc004a0309eff5f949257477ed1d74d732ec extends Template
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
        echo "<div style=\"width: 100%;height: 200px;background-color: #ccc;padding: 5px;\">
    <ul>
        <li><a href=\"#\">NAVBAR</a></li>
        <li><a href=\"#\">NAVBAR</a></li>
        <li><a href=\"#\">NAVBAR</a></li>
        <li><a href=\"#\">NAVBAR</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "./navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./navbar.twig", "C:\\xampp\\htdocs\\3MtecA\\08-06\\FinalSemestrePW\\app\\view\\template\\navbar.twig");
    }
}
