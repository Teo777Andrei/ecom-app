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

/* products/categories.html.twig */
class __TwigTemplate_df3ce5470ca48a1e785f437f341d5a6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/categories.html.twig"));

        // line 1
        echo "<div>
    <h4 class=\"text-center\">";
        // line 2
        ((($context["current"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true))) : (print ("Browse through categories")));
        echo "</h4>
</div>
            
            
<div class=\"card-body d-flex mt-5 overflow-auto text-nowrap categories-container\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "        <div class=\"category-box mx-3 cursor-pointer mt-3\" 
            id=";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "
        /> 
            <div class=\"card h-100 hover-zoom\" style=\"width: 18rem;\">
                <img src=";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/media/categories/" . twig_get_attribute($this->env, $this->source, $context["category"], "media", [], "any", false, false, false, 12))), "html", null, true);
            echo "
                class=\"card-img-top\" alt=";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "media", [], "any", false, false, false, 13), "html", null, true);
            echo ">
                <div class=\"card-body\">
                    <p class=\"card-text text-wrap\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  73 => 15,  68 => 13,  64 => 12,  58 => 9,  55 => 8,  51 => 7,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "products/categories.html.twig", "/home/teo/projects/ec_app/templates/products/categories.html.twig");
    }
}
