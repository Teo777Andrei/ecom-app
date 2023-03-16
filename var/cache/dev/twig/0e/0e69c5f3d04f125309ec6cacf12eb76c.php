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

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_920ddfe176e19d3a0716c06212d7f9d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\">
    ";
        // line 2
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.html.twig", ["templates" => ["request" => "@WebProfiler/Profiler/cancel.html.twig"], "profile" => null, "profiler_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_profiler", ["token" =>         // line 7
($context["token"] ?? null)]), "profiler_markup_version" => 2]);
        // line 9
        echo "
</div>

";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "

<style";
        // line 14
        if (($context["csp_style_nonce"] ?? null)) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, ($context["csp_style_nonce"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 15
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig");
        echo "
</style>
<script";
        // line 17
        if (($context["csp_script_nonce"] ?? null)) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, ($context["csp_script_nonce"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">/*<![CDATA[*/
    (function () {
        Sfjs.loadToolbar('";
        // line 19
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "');
    })();
/*]]>*/</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  71 => 17,  66 => 15,  58 => 14,  53 => 12,  48 => 9,  46 => 7,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/toolbar_js.html.twig", "/home/teo/projects/ec_app/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_js.html.twig");
    }
}
