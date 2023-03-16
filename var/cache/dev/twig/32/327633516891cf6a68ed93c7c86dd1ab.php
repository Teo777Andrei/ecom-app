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

/* products/products.html.twig */
class __TwigTemplate_e7057da1c21605fd838882b19c77abb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/products.html.twig"));

        // line 1
        echo "<div>
    <h4 class=\"text-center\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "</h4>
</div>

<div class=\"card-body \">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "        <div class=\"product-box mx-3 cursor-pointer my-5\" 
            id=";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "
        /> 
            <div class = \"row\">
                <div class=\"col-6 card h-100  p-0\" style=\"width: 18rem;\">
                    <img src=";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/media/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "media", [], "any", false, false, false, 12))), "html", null, true);
            echo "
                    class=\"card-img-top\" alt=";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "media", [], "any", false, false, false, 13), "html", null, true);
            echo ">
                    <div class=\"card-body\">
                        <p class=\"card-text text-wrap\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class = 'd-flex flex-column justify-content-center h-100'>
                        <div>
                            <div class=\"mb-3\">
                               ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "
                            </div>

                            <div class =\"d-flex justify-content-between\">
                                <div>
                                    <h4 class = \"d-inline text-danger font-weight-bold\">
                                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo " RON
                                    </h4>
                                    <div class=\"d-inline\">
                                        <h5 class = \"ml-2\">
                                            Stock: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 32), "html", null, true);
            echo " 
                                        </h5>
                                    </div>
                                </div>
                                <div>
                                    <p>
                                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "code", [], "any", false, false, false, 38), "html", null, true);
            echo "
                                    </p>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>
<script>
    document.querySelectorAll('div.product-box').forEach(element => {
        console.log(element.id);
        element.addEventListener('click', () =>  handleClickProduct(element.id))
    });

    function handleClickProduct(id) {
        location.href = \"/products/\" + id;
    }
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  108 => 38,  99 => 32,  92 => 28,  83 => 22,  73 => 15,  68 => 13,  64 => 12,  57 => 8,  54 => 7,  50 => 6,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "products/products.html.twig", "/home/teo/projects/ec_app/templates/products/products.html.twig");
    }
}
