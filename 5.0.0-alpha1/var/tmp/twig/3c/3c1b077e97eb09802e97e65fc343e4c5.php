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

/* @MauticCore/Notification/flash_messages.html.twig */
class __TwigTemplate_cc9fa202c95c778df01cd75e270e511b extends Template
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
        $context["dismissable"] = ((array_key_exists("dismissable", $context)) ? (_twig_default_filter((isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["alertType"] = ((array_key_exists("alertType", $context)) ? (_twig_default_filter((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 2, $this->source); })()), "growl")) : ("growl"));
        // line 3
        $context["alertClasses"] = ((((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 3, $this->source); })()) == "growl")) ? (["notice" => "alert-growl", "warning" => "alert-growl", "error" => "alert-growl"]) : (["notice" => "alert-success", "warning" => "alert-warning", "error" => "alert-danger"]));
        // line 7
        $context["flashes"] = ((array_key_exists("flashes", $context)) ? (_twig_default_filter((isset($context["flashes"]) || array_key_exists("flashes", $context) ? $context["flashes"] : (function () { throw new RuntimeError('Variable "flashes" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7))) : (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7)));
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) || array_key_exists("flashes", $context) ? $context["flashes"] : (function () { throw new RuntimeError('Variable "flashes" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 10
            $context["message"] = ((twig_test_iterable($context["messages"])) ? (twig_get_attribute($this->env, $this->source, $context["messages"], 0, [], "array", false, false, false, 10)) : ($context["messages"]));
            // line 11
            echo "<div class=\"alert ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["alertClasses"]) || array_key_exists("alertClasses", $context) ? $context["alertClasses"] : (function () { throw new RuntimeError('Variable "alertClasses" does not exist.', 11, $this->source); })()), $context["type"], [], "any", false, false, false, 11) . (isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 11, $this->source); })())), "html", null, true);
            echo " alert-new\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"fa fa-times\"></i></button>
    <span>";
            // line 13
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 13, $this->source); })()));
            echo "</span>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@MauticCore/Notification/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 11,  52 => 10,  48 => 9,  45 => 8,  43 => 7,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Notification/flash_messages.html.twig", "/Users/ebauger/dev/mautic5.0alpha/5.0.0-alpha1/app/bundles/CoreBundle/Resources/views/Notification/flash_messages.html.twig");
    }
}
