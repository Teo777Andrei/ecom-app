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

/* products\index.html.twig */
class __TwigTemplate_2f8c016879996838dcea11697760ddaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products\\index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products\\index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Products ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->loadTemplate("partials/navbar.html.twig", "products\\index.html.twig", 9)->display($context);
        // line 10
        echo "
<div class=\"container mt-4\">
    <div class=\"row d-flex align-items-center\">
        <div class=\"py-5 rounded-lg\">
            ";
        // line 14
        if (twig_length_filter($this->env, ($context["categories"] ?? null))) {
            // line 15
            echo "                ";
            $this->loadTemplate("products/categories.html.twig", "products\\index.html.twig", 15)->display($context);
            // line 16
            echo "            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if (twig_length_filter($this->env, ($context["products"] ?? null))) {
            // line 19
            echo "                ";
            $this->loadTemplate("products/products.html.twig", "products\\index.html.twig", 19)->display($context);
            // line 20
            echo "            ";
        }
        // line 21
        echo "        </div>
    </div>
</div>
<script>
    document.querySelectorAll('div.category-box').forEach(element => {
        console.log(element.id);
        element.addEventListener('click', () =>  handleClickCategory(element.id))
    });
    function handleClickCategory(id) {
    
        location.href = \"/products-categories?id=\" + id;
    }
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 21,  113 => 20,  110 => 19,  108 => 18,  105 => 17,  102 => 16,  99 => 15,  97 => 14,  91 => 10,  89 => 9,  82 => 8,  74 => 6,  67 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "products\\index.html.twig", "/home/teo/projects/ec_app/templates/products/index.html.twig");
    }
}
