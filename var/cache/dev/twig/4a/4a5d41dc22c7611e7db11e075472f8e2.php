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

/* products/cart.html.twig */
class __TwigTemplate_fd4b7a76d53dae1f69a4247216a50b8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Cart ";
        
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
        $this->loadTemplate("partials/navbar.html.twig", "products/cart.html.twig", 9)->display($context);
        // line 10
        echo "
<div class=\"container mt-4\">
    <h5 class=\"text-center mb-4\"> Cart items </h5>
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cartProducts", [], "any", false, false, false, 13)) == 0)) {
            // line 14
            echo "        <div class=\"alert text-center mt-5\" role=\"alert\">
                Cart is empty 
            </div>
    ";
        }
        // line 18
        echo "
     ";
        // line 19
        if ((($context["message"] ?? null) == "OK-CHECKOUT")) {
            // line 20
            echo "            <div class=\"alert alert-danger text-center\" role=\"alert\">
                Action performed successfully !
            </div>    
        ";
        } elseif ((        // line 23
($context["message"] ?? null) != 0)) {
            // line 24
            echo "            <div class=\"alert text-center\" role=\"alert\">
                ";
            // line 25
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 28
        echo "    
    <div class=\"row\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cartProducts", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["cartProduct"]) {
            // line 31
            echo "            <div class=\"d-flex justify-content-between align-items-center mt-2\">
                <img class=\"img-fluid cart-product-image \" src=";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/media/products/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartProduct"], "product", [], "any", false, false, false, 32), "media", [], "any", false, false, false, 32))), "html", null, true);
            echo ">
                <p class=\"font-weight-bold\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartProduct"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                <p class=\"font-weight-bold\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartProduct"], "qty", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
    ";
        // line 38
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cartProducts", [], "any", false, false, false, 38))) {
            // line 39
            echo "        <h5 class=\"text-center my-4 \"> Total: ";
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo " RON </h5>

        <div class=\"input-group my-4\">
            <input type=\"text\" 
            class=\"form-control\" id=\"checkout.address\" placeholder=\"Delivery Adress\" aria-label=\"Checkout adress\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"text-center mb-5\">
            <button id=\"checkout\"type=\"button\" class=\"btn btn-success\">Checkout</button>
            <button id=\"clear\"type=\"button\" class=\"btn btn-danger\">Clear</button>
        </div>
    ";
        }
        // line 50
        echo "</div>
<script>
    document.getElementById('clear').onclick = function(e) {
        fetch(\"http://localhost:8000/cart-clear\", {
            method: \"PATCH\",
            headers: {
                \"Content-Type\": \"application/json\",
            }
        })

        location.reload();
    }

    document.getElementById('checkout').onclick = function(e) {
        fetch(\"http://localhost:8000/checkout\", {
            method: \"POST\",
            headers: {
                \"Content-Type\": \"application/json\",
            },
            body: JSON.stringify({
               address: document.getElementById('checkout.address').value,
            }),
        })

        location.reload();

    }
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 50,  158 => 39,  156 => 38,  153 => 37,  144 => 34,  140 => 33,  136 => 32,  133 => 31,  129 => 30,  125 => 28,  119 => 25,  116 => 24,  114 => 23,  109 => 20,  107 => 19,  104 => 18,  98 => 14,  96 => 13,  91 => 10,  89 => 9,  82 => 8,  74 => 6,  67 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "products/cart.html.twig", "/home/teo/projects/ec_app/templates/products/cart.html.twig");
    }
}
