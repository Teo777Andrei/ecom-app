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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_3dd6e379e9b7e07ca5dfbe71a6c4022e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/http_client.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/http-client.svg");
            echo "
            ";
            // line 7
            $context["status_color"] = "";
            // line 8
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 8), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 10
            echo "
        ";
            // line 11
            ob_start(function () { return ''; });
            // line 12
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status ";
            // line 18
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, false, 18) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
        ";
            // line 22
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "<span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 27) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 28
        echo twig_source($this->env, "@WebProfiler/Icon/http-client.svg");
        echo "</span>
    <strong>HTTP Client</strong>
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <span class=\"count\">
            ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 32), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 35
        echo "</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    <h2>HTTP Client</h2>
    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 40) == 0)) {
            // line 41
            echo "        <div class=\"empty\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 45
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clients", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 58
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 58)) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 59
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 59)), "html", null, true);
                echo "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 61
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 61)) == 0)) {
                    // line 62
                    echo "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 63
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 66
                    echo "                            <h4>Requests</h4>
                            ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 67));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 68
                        echo "                                ";
                        $context["profiler_token"] = "";
                        // line 69
                        echo "                                ";
                        $context["profiler_link"] = "";
                        // line 70
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, true, false, 70), "response_headers", [], "any", true, true, false, 70)) {
                            // line 71
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 71), "response_headers", [], "any", false, false, false, 71));
                            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                                // line 72
                                echo "                                        ";
                                if (preg_match("/^x-debug-token: .*\$/i", $context["header"])) {
                                    // line 73
                                    echo "                                            ";
                                    $context["profiler_token"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, false, 73), twig_length_filter($this->env, "x-debug-token: "));
                                    // line 74
                                    echo "                                        ";
                                }
                                // line 75
                                echo "                                        ";
                                if (preg_match("/^x-debug-token-link: .*\$/i", $context["header"])) {
                                    // line 76
                                    echo "                                            ";
                                    $context["profiler_link"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, false, 76), twig_length_filter($this->env, "x-debug-token-link: "));
                                    // line 77
                                    echo "                                        ";
                                }
                                // line 78
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            echo "                                ";
                        }
                        // line 80
                        echo "                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"label\">";
                        // line 84
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, false, 84), "html", null, true);
                        echo "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 87
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, false, 87), "html", null, true);
                        echo "
                                            ";
                        // line 88
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 88))) {
                            // line 89
                            echo "                                                ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 89), 1);
                            echo "
                                            ";
                        }
                        // line 91
                        echo "                                        </th>
                                        ";
                        // line 92
                        if ((($context["profiler_token"] ?? null) && ($context["profiler_link"] ?? null))) {
                            // line 93
                            echo "                                            <th>
                                                Profile
                                            </th>
                                        ";
                        }
                        // line 97
                        echo "                                        ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 97))) {
                            // line 98
                            echo "                                            <th>
                                                <button class=\"btn btn-sm hidden label\" title=\"Copy as curl\" data-clipboard-text=\"";
                            // line 99
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 99), "html", null, true);
                            echo "\">curl</button>
                                            </th>
                                        ";
                        }
                        // line 102
                        echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            ";
                        // line 107
                        if ((twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 107) >= 500)) {
                            // line 108
                            echo "                                                ";
                            $context["responseStatus"] = "error";
                            // line 109
                            echo "                                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 109) >= 400)) {
                            // line 110
                            echo "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 111
                            echo "                                            ";
                        } else {
                            // line 112
                            echo "                                                ";
                            $context["responseStatus"] = "success";
                            // line 113
                            echo "                                            ";
                        }
                        // line 114
                        echo "                                            <span class=\"label status-";
                        echo twig_escape_filter($this->env, ($context["responseStatus"] ?? null), "html", null, true);
                        echo "\">
                                                ";
                        // line 115
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 115), "html", null, true);
                        echo "
                                            </span>
                                        </th>
                                        <td";
                        // line 118
                        if (twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 118)) {
                            echo " colspan=\"2\"";
                        }
                        echo ">
                                            ";
                        // line 119
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 119), 1);
                        echo "
                                        </td>
                                        ";
                        // line 121
                        if ((($context["profiler_token"] ?? null) && ($context["profiler_link"] ?? null))) {
                            // line 122
                            echo "                                            <td>
                                                <span><a href=\"";
                            // line 123
                            echo twig_escape_filter($this->env, ($context["profiler_link"] ?? null), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, ($context["profiler_token"] ?? null), "html", null, true);
                            echo "</a></span>
                                            </td>
                                        ";
                        }
                        // line 126
                        echo "                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "                        ";
                }
                // line 131
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        ";
        }
        // line 135
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/http_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 135,  395 => 134,  387 => 131,  384 => 130,  375 => 126,  367 => 123,  364 => 122,  362 => 121,  357 => 119,  351 => 118,  345 => 115,  340 => 114,  337 => 113,  334 => 112,  331 => 111,  328 => 110,  325 => 109,  322 => 108,  320 => 107,  313 => 102,  307 => 99,  304 => 98,  301 => 97,  295 => 93,  293 => 92,  290 => 91,  284 => 89,  282 => 88,  278 => 87,  272 => 84,  266 => 80,  263 => 79,  257 => 78,  254 => 77,  251 => 76,  248 => 75,  245 => 74,  242 => 73,  239 => 72,  234 => 71,  231 => 70,  228 => 69,  225 => 68,  221 => 67,  218 => 66,  212 => 63,  209 => 62,  207 => 61,  200 => 59,  195 => 58,  191 => 57,  182 => 51,  175 => 47,  171 => 45,  165 => 41,  163 => 40,  160 => 39,  153 => 38,  145 => 35,  139 => 32,  136 => 31,  134 => 30,  129 => 28,  124 => 27,  117 => 26,  107 => 22,  104 => 21,  96 => 18,  89 => 14,  85 => 12,  83 => 11,  80 => 10,  74 => 8,  72 => 7,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/http_client.html.twig", "/home/teo/projects/ec_app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/http_client.html.twig");
    }
}
