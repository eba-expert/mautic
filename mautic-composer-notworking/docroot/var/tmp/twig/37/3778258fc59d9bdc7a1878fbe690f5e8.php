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

/* @MauticInstall/Install/content.html.twig */
class __TwigTemplate_e826e8eba7751742e7f614f78d21a52a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "@MauticInstall/Install/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "getRequest", [], "method", false, false, false, 8), "isXmlHttpRequest", [], "method", false, false, false, 8) && (false == $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("contentOnly", false)))) {
        }
        // line 9
        $this->parent = $this->loadTemplate("@MauticInstall/Install/base.html.twig", "@MauticInstall/Install/content.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        $this->displayParentBlock("content", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@MauticInstall/Install/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  54 => 13,  50 => 12,  45 => 9,  42 => 8,  35 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/content.html.twig", "/Users/ebauger/dev/mautic5.0alpha/mautic/docroot/app/bundles/InstallBundle/Resources/views/Install/content.html.twig");
    }
}
