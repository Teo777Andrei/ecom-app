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

/* products\product.html.twig */
class __TwigTemplate_a8b8aac48893593f4caef4f37a5eda27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products\\product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products\\product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Product ";
        
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
        $this->loadTemplate("partials/navbar.html.twig", "products\\product.html.twig", 9)->display($context);
        // line 10
        echo "
<div class=\"container mt-4\">
        ";
        // line 12
        if ((($context["cartError"] ?? null) == "OK-ADD-CART")) {
            // line 13
            echo "            <div class=\"alert alert-danger text-center\" role=\"alert\">
                Item inserted successfully !
            </div>    
        ";
        } elseif ((        // line 16
($context["cartError"] ?? null) != 0)) {
            // line 17
            echo "            <div class=\"alert text-center\" role=\"alert\">
                ";
            // line 18
            echo twig_escape_filter($this->env, ($context["cartError"] ?? null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 21
        echo "    <h5 class=\"text-center my-5\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h5>
    <div class=\"row mt-4\">
        <div class = 'col-4'>
            <img class=\"img-fluid\" src=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/media/products/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "media", [], "any", false, false, false, 24))), "html", null, true);
        echo ">
        </div>
        <div class=\"col-8\">
            <div class=\"row flex-column justify-content-between h-100\">
                <div class = \"col-12\">
                        <span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                </div>
                <div class = \"col-12\">
                        <div class =\"d-flex justify-content-between\">
                                <div>
                                    <h4 class = \"d-inline text-danger font-weight-bold\">
                                        ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 35), "html", null, true);
        echo " RON
                                    </h4>
                                    <div class=\"d-inline\">
                                        <h5 class = \"ml-2\">
                                            Stock: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "qty", [], "any", false, false, false, 39), "html", null, true);
        echo " 
                                        </h5>
                                    </div>
                                </div>
                                <div>
                                    <p>
                                        ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 45), "html", null, true);
        echo "
                                    </p>
                                </div>
                        </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"d-flex\">
                        <button type=\"submit\" product-id=";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
        echo " class=\"btn btn-danger\" id='cart.add'> Add to cart </button>
                        <div class=\"cart-qty ms-\">
                            <div class=\"value-button\" id=\"decrease\" onclick=\"decreaseValue()\" value=\"Decrease Value\">-</div>
                            <input type=\"number\" id=\"number\" value=\"0\" />
                            <div class=\"value-button\" id=\"increase\" onclick=\"increaseValue()\" value=\"Increase Value\">+</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
    
</div>
<script>
 document.getElementById('cart.add').onclick = function(e) {
    var response = fetch(\"http://localhost:8000/add-product-cart\", {
            method: \"POST\",
            headers: {
                \"Content-Type\": \"application/json\",
            },
            body: JSON.stringify({
               product_id: document.getElementById('cart.add').getAttribute('product-id'),
               qty: document.getElementById('number').value,
                        
            }),
        })
        .then((response) => response.json())
        .then((data) => {
            location.reload();
        })
        .catch((error) => {
            location.reload();
        });
        }   

 function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}


</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products\\product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 52,  153 => 45,  144 => 39,  137 => 35,  128 => 29,  120 => 24,  113 => 21,  107 => 18,  104 => 17,  102 => 16,  97 => 13,  95 => 12,  91 => 10,  89 => 9,  82 => 8,  74 => 6,  67 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "products\\product.html.twig", "/home/teo/projects/ec_app/templates/products/product.html.twig");
    }
}
