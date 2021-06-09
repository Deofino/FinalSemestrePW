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

/* ./footer.twig */
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
        echo "<div style=\"width: 100%;height: 200px;background-color: #ccc;padding: 5px;\">
    <ul>
        <li><a href=\"#\">FOOTER</a></li>
        <li><a href=\"#\">FOOTER</a></li>
        <li><a href=\"#\">FOOTER</a></li>
        <li><a href=\"#\">FOOTER</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "./footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./footer.twig", "C:\\xampp\\htdocs\\Escola\\2b\\FinalSemestrePW\\app\\view\\template\\footer.twig");
    }
}
