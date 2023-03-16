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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_6ed41f7c1a824ddd8f4f0ca643cdd686 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
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
        if (("unknown" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 7))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 10))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 13))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start(function () { return ''; });
        // line 22
        echo "        <span class=\"sf-toolbar-label\">
            ";
        // line 23
        echo twig_source($this->env, "@WebProfiler/Icon/symfony.svg");
        echo "
        </span>
        <span class=\"sf-toolbar-value\">";
        // line 25
        ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 25)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 25), "html", null, true))) : (print ("n/a")));
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        ob_start(function () { return ''; });
        // line 29
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 33
        if (($context["profiler_url"] ?? null)) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 36
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 36), "html", null, true);
            echo "
                    ";
        }
        // line 38
        echo "                </span>
            </div>

            ";
        // line 41
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 41))) {
            // line 42
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 47
        echo "
            ";
        // line 48
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 48))) {
            // line 49
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 51
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 51)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 51)) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 54
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 59)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 59) . twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 59)), "html", null, true);
            echo "\"";
        }
        echo ">
                    ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 60), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 67)) {
            // line 68
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_xdebug");
            echo "\" title=\"View xdebug_info()\">
                ";
        }
        // line 70
        echo "                <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 70)) ? ("green") : ("gray"));
        echo "\">Xdebug ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 70)) ? ("✓") : ("✗"));
        echo "</span>
                ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 71)) {
            // line 72
            echo "                    </a>
                ";
        }
        // line 74
        echo "                <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 74)) ? ("green") : ("gray"));
        echo "\">APCu ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 74)) ? ("✓") : ("✗"));
        echo "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 75
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 75)) ? ("green") : ("red"));
        echo "\">OPcache ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 75)) ? ("✓") : ("✗"));
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, false, 80), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 85)) {
            // line 86
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 89), "html", null, true);
            echo "/index.html\" rel=\"help\">
                            Read Symfony ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 90), "html", null, true);
            echo " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 103
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "
    ";
        // line 106
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? null)) . "\"")]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 110
        echo "    <span class=\"label label-status-";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 110) == "eol")) ? ("red") : (((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 110), [0 => "eom", 1 => "dev"])) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 111
        echo twig_source($this->env, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 117
        echo "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 121), "html", null, true);
        echo "</span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 125
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 125))) {
            // line 126
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 127), "html", null, true);
            echo "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 131
        echo "
        ";
        // line 132
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 132))) {
            // line 133
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 134
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 134)) ? ("enabled") : ("disabled"));
            echo "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 138
        echo "    </div>

    ";
        // line 140
        $context["symfony_status"] = ["dev" => "Unstable Version", "stable" => "Stable Version", "eom" => "Maintenance Ended", "eol" => "Version Expired"];
        // line 141
        echo "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 142
        echo "    <table>
        <thead class=\"small\">
            <tr>
                <th>Symfony Status</th>
                <th>Bugs ";
        // line 146
        echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 146), [0 => "eom", 1 => "eol"])) ? ("were") : ("are"));
        echo " fixed until</th>
                <th>Security issues ";
        // line 147
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 147) == "eol")) ? ("were") : ("are"));
        echo " fixed until</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=\"font-normal\">
                    <span class=\"label status-";
        // line 154
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["symfony_status_class"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 154)] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_compile_1 = ($context["symfony_status"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 154)] ?? null) : null)), "html", null, true);
        echo "</span>
                    ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 155)) {
            // line 156
            echo "                        &nbsp; <span class=\"label status-success\">Long-Term Support</span>
                    ";
        }
        // line 158
        echo "                </td>
                <td class=\"font-normal\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeom", [], "any", false, false, false, 159), "html", null, true);
        echo "</td>
                <td class=\"font-normal\">";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeol", [], "any", false, false, false, 160), "html", null, true);
        echo "</td>
                <td class=\"font-normal\">
                    <a href=\"https://symfony.com/releases/";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyminorversion", [], "any", false, false, false, 162), "html", null, true);
        echo "#release-checker\">View roadmap</a>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 172), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 172)) {
            echo " <span class=\"unit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 172), "html", null, true);
            echo "</span>";
        }
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phparchitecture", [], "any", false, false, false, 177), "html", null, true);
        echo " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpintllocale", [], "any", false, false, false, 182), "html", null, true);
        echo "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phptimezone", [], "any", false, false, false, 187), "html", null, true);
        echo "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 194
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 194)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 199
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 199)) ? ("yes") : ("no-gray"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 204
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 204)) ? ("yes") : ("no-gray"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 213)) {
            // line 214
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 214)), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 223))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 224
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 225
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 226
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 226)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null));
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 229,  537 => 226,  533 => 225,  530 => 224,  526 => 223,  513 => 214,  511 => 213,  505 => 210,  496 => 204,  488 => 199,  480 => 194,  470 => 187,  462 => 182,  454 => 177,  441 => 172,  428 => 162,  423 => 160,  419 => 159,  416 => 158,  412 => 156,  410 => 155,  404 => 154,  394 => 147,  390 => 146,  384 => 142,  381 => 141,  379 => 140,  375 => 138,  368 => 134,  365 => 133,  363 => 132,  360 => 131,  353 => 127,  350 => 126,  348 => 125,  341 => 121,  335 => 117,  328 => 116,  317 => 111,  312 => 110,  305 => 109,  296 => 106,  293 => 105,  289 => 103,  273 => 90,  269 => 89,  264 => 86,  262 => 85,  254 => 80,  244 => 75,  237 => 74,  233 => 72,  231 => 71,  224 => 70,  218 => 68,  216 => 67,  207 => 61,  203 => 60,  195 => 59,  188 => 54,  180 => 51,  176 => 49,  174 => 48,  171 => 47,  165 => 44,  161 => 42,  159 => 41,  154 => 38,  148 => 36,  140 => 34,  138 => 33,  132 => 29,  130 => 28,  127 => 27,  122 => 25,  117 => 23,  114 => 22,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "/home/teo/projects/ec_app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/config.html.twig");
    }
}
