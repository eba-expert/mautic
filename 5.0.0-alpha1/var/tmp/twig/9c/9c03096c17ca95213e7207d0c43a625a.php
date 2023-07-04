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

/* @MauticInstall/Install/base.html.twig */
class __TwigTemplate_b6ad5f6b5b977076e47f5487ed988be5 extends Template
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
        $context["headerTitle"] = "Install";
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 5
        $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScript("app/bundles/InstallBundle/Assets/install/install.js");
        // line 6
        echo twig_include($this->env, $context, "@MauticCore/Default/head.html.twig");
        // line 7
        echo "<body>
        <!-- start: app-wrapper -->
        <section id=\"app-wrapper\">
            <div class=\"container\">
                <div class=\"row mt-20\">
                    <div class=\"text-center\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/images/mautic_logo_lb200.png"), "html", null, true);
        echo "\" height=\"50px\" alt=\"Mautic\" />
                        <h5 class=\"semibold text-muted mt-5\">";
        // line 14
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("header", "");
        echo "</h5>
                    </div>

                    <div class=\"mt-20 col-lg-6 col-lg-offset-3\">
                        <div id=\"app-content\" class=\"panel panel-default\">";
        // line 19
        echo twig_include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        // line 20
        $this->displayBlock("content", $context, $blocks);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ end: app-content -->
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@MauticInstall/Install/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  67 => 19,  60 => 14,  56 => 13,  48 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/base.html.twig", "/Users/ebauger/dev/mautic5.0alpha/5.0.0-alpha1/app/bundles/InstallBundle/Resources/views/Install/base.html.twig");
    }
}
