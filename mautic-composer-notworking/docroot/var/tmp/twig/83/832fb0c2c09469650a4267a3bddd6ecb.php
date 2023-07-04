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

/* @MauticCore/Default/script.html.twig */
class __TwigTemplate_a1e427bb8c97984158e16b81ef9cce25 extends Template
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
        $context["mautic_content"] = ((array_key_exists("mauticContent", $context)) ? ((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 1, $this->source); })())) : (""));
        // line 2
        echo "
<script>
    var mauticBasePath                  = '";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "getBasePath", [], "method", false, false, false, 4), "html", null, true);
        echo "';
    var mauticBaseUrl                   = \"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_base_index");
        echo "\";
    var mauticAjaxUrl                   = \"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax");
        echo "\";
    var mauticAjaxCsrf                  = '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->getCsrfToken("mautic_ajax_post"), "html", null, true);
        echo "';
    var mauticImagesPath                = '";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getImagesPath(), "html", null, true);
        echo "';
    var mauticAssetPrefix               = '";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetPrefix(true), "html", null, true);
        echo "';
    var mauticContent                   = '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["mautic_content"]) || array_key_exists("mautic_content", $context) ? $context["mautic_content"] : (function () { throw new RuntimeError('Variable "mautic_content" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "';
    var mauticEnv                       = '";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "environment", [], "any", false, false, false, 11), "html", null, true);
        echo "';
    var mauticLang                      = ";
        // line 12
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->getJsLang();
        echo ";
    var mauticLocale                    = '";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "getLocale", [], "method", false, false, false, 13), "html", null, true);
        echo "';
    var mauticEditorFonts               = ";
        // line 14
        echo json_encode($this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("editor_fonts"));
        echo ";
    var mauticContactExportInBackground = ";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("contact_export_in_background")), "html", null, true);
        echo ";
    var mauticFroalaEnabled = ";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("load_froala_assets")), "html", null, true);
        echo ";
</script>
";
        // line 18
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputSystemScripts(true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@MauticCore/Default/script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/script.html.twig", "/Users/ebauger/dev/mautic5.0alpha/mautic/docroot/app/bundles/CoreBundle/Resources/views/Default/script.html.twig");
    }
}
