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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_ee7e919dfa85affcd12f32088262eb11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 6)) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_source($this->env, "@Security/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 9), "n/a")) : ("n/a")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 13)) {
                // line 14
                echo "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonatorUser", [], "any", false, false, false, 17), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
            }
            // line 21
            echo "
            <div class=\"sf-toolbar-info-group\">
                ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 23)) {
                // line 24
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 27), "html", null, true);
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 32
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 32)) ? ("green") : ("yellow"));
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                    // line 38
                    $context["remainingRoles"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 38), 1);
                    // line 39
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 39)), "html", null, true);
                    echo "
                                ";
                    // line 40
                    if ( !twig_test_empty(($context["remainingRoles"] ?? null))) {
                        // line 41
                        echo "                                    +
                                    <abbr title=\"";
                        // line 42
                        echo twig_escape_filter($this->env, twig_join_filter(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                        echo "\">
                                        ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["remainingRoles"] ?? null)), "html", null, true);
                        echo " more
                                    </abbr>
                                ";
                    }
                    // line 46
                    echo "                            </span>
                        </div>

                        ";
                    // line 49
                    if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                        // line 53
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 53))) {
                            // line 54
                            echo "                                        none
                                    ";
                        } else {
                            // line 56
                            echo "                                        ";
                            $context["remainingRoles"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 56), 1);
                            // line 57
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 57)), "html", null, true);
                            echo "
                                        ";
                            // line 58
                            if ( !twig_test_empty(($context["remainingRoles"] ?? null))) {
                                // line 59
                                echo "                                            +
                                            <abbr title=\"";
                                // line 60
                                echo twig_escape_filter($this->env, twig_join_filter(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                                echo "\">
                                                ";
                                // line 61
                                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["remainingRoles"] ?? null)), "html", null, true);
                                echo " more
                                            </abbr>
                                        ";
                            }
                            // line 64
                            echo "                                    ";
                        }
                        // line 65
                        echo "                                </span>
                            </div>
                        ";
                    }
                    // line 68
                    echo "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                    // line 71
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", [], "any", false, false, false, 71));
                    echo "</span>
                        </div>
                    ";
                } else {
                    // line 74
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                }
                // line 79
                echo "
                    ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                // line 86
                echo "
                    ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 87) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 91), "html", null, true);
                    echo "\">Logout</a>
                                ";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 92) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 92))) {
                        // line 93
                        echo "                                    | <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 93), "html", null, true);
                        echo "\">Exit impersonation</a>
                                ";
                    }
                    // line 95
                    echo "                            </span>
                        </div>
                    ";
                }
                // line 98
                echo "                ";
            } else {
                // line 99
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
            }
            // line 103
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            echo "
        ";
            // line 106
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 111
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 111) ||  !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 111))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 112
        echo twig_source($this->env, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 118
        echo "    <h2>Security</h2>
    ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 119)) {
            // line 120
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 121
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 121))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 125)) {
                // line 126
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 128), "html", null, true);
                echo "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 133
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 133)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 149
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 149))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 149), 1)));
                echo "

                                        ";
                // line 151
                if (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 151) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 151)))) {
                    // line 152
                    echo "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 154
                echo "                                    </td>
                                </tr>

                                ";
                // line 157
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 160
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 160))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 160), 1)));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 163
                echo "
                                ";
                // line 164
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 167
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 167));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 170
                echo "                            </tbody>
                        </table>
                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 172
($context["collector"] ?? null), "enabled", [], "any", false, false, false, 172)) {
                // line 173
                echo "                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    ";
            }
            // line 177
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 180
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 180), "security_enabled", [], "any", false, false, false, 180))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 183)) {
                // line 184
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
                echo "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 190
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 190), "security_enabled", [], "any", false, false, false, 190)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 194
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 194), "stateless", [], "any", false, false, false, 194)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 199
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 199), "security_enabled", [], "any", false, false, false, 199)) {
                    // line 200
                    echo "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 211
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 211), "provider", [], "any", false, false, false, 211)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 211), "provider", [], "any", false, false, false, 211), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 215
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 215), "context", [], "any", false, false, false, 215)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 215), "context", [], "any", false, false, false, 215), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 219
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 219), "entry_point", [], "any", false, false, false, 219)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 219), "entry_point", [], "any", false, false, false, 219), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 223
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 223), "user_checker", [], "any", false, false, false, 223)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 223), "user_checker", [], "any", false, false, false, 223), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 227
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 227), "access_denied_handler", [], "any", false, false, false, 227)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 227), "access_denied_handler", [], "any", false, false, false, 227), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 231
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 231), "access_denied_url", [], "any", false, false, false, 231)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 231), "access_denied_url", [], "any", false, false, false, 231), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 235
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 235), "authenticators", [], "any", false, false, false, 235))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 235), "authenticators", [], "any", false, false, false, 235), 1)));
                    echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 240
                echo "                    ";
            }
            // line 241
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 244
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 244), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 247
            if (twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 247)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 247), [])) : ([])))) {
                // line 248
                echo "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 252
                echo "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 261
                $context["previous_event"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 261));
                // line 262
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 262));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                    // line 263
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 263) || ($context["listener"] != ($context["previous_event"] ?? null)))) {
                        // line 264
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 264)) {
                            // line 265
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 267
                        echo "                                    <tbody>
                                    ";
                        // line 268
                        $context["previous_event"] = $context["listener"];
                        // line 269
                        echo "                                ";
                    }
                    // line 270
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 272
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 272));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 273
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 273) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 274
                    echo ((twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 274)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 274))) : ("(none)"));
                    echo "</td>
                                </tr>

                                ";
                    // line 277
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 277)) {
                        // line 278
                        echo "                                    </tbody>
                                ";
                    }
                    // line 280
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 281
                echo "                        </table>
                    ";
            }
            // line 283
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 286
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 286)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 286), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 289
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 289)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 289), [])) : ([])))) {
                // line 290
                echo "                        <table>
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Duration</th>
                                <th>Passport</th>
                            </tr>
                            </thead>

                            ";
                // line 300
                $context["previous_event"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 300));
                // line 301
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 301));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 302
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 302) || ($context["authenticator"] != ($context["previous_event"] ?? null)))) {
                        // line 303
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 303)) {
                            // line 304
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 306
                        echo "
                                    <tbody>
                                    ";
                        // line 308
                        $context["previous_event"] = $context["authenticator"];
                        // line 309
                        echo "                                ";
                    }
                    // line 310
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 312
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, false, 312));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 313
                    echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, false, 313)) ? ("yes") : ("no"))) . ".svg"));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 314
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, false, 314) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 315
                    echo ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 315)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 315))) : ("(none)"));
                    echo "</td>
                                </tr>

                                ";
                    // line 318
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 318)) {
                        // line 319
                        echo "                                    </tbody>
                                ";
                    }
                    // line 321
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                echo "                        </table>
                    ";
            } else {
                // line 324
                echo "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 328
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 331
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 331), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 334
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 334), [])) : ([])))) {
                // line 335
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 337
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 337)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 337), "unknown")) : ("unknown")), "html", null, true);
                echo "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 351
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 351));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 352
                    echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 353
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 353), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">";
                    // line 354
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
                    echo "</td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 357
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 360
            echo "                    ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 360)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 360), [])) : ([])))) {
                // line 361
                echo "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 379
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 379));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 380
                    echo "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 381
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 381), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 383
                    echo ((twig_get_attribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 383)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 386
                    echo "
                                        </td>
                                        <td>
                                            ";
                    // line 389
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 389)) == 1)) {
                        // line 390
                        echo "                                                ";
                        $context["attribute"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 390));
                        // line 391
                        echo "                                                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 391)) {
                            // line 392
                            echo "                                                    Expression: <pre><code>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", false, false, false, 392), "html", null, true);
                            echo "</code></pre>
                                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 393
($context["attribute"] ?? null), "type", [], "any", false, false, false, 393) == "string")) {
                            // line 394
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, ($context["attribute"] ?? null), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 396
                            echo "                                                     ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, ($context["attribute"] ?? null));
                            echo "
                                                ";
                        }
                        // line 398
                        echo "                                            ";
                    } else {
                        // line 399
                        echo "                                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 399));
                        echo "
                                            ";
                    }
                    // line 401
                    echo "                                        </td>
                                        <td>";
                    // line 402
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "seek", [0 => "object"], "method", false, false, false, 402));
                    echo "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 407
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 407))) {
                        // line 408
                        echo "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 408));
                        // line 409
                        echo "                                            <div id=\"";
                        echo twig_escape_filter($this->env, ($context["voter_details_id"] ?? null), "html", null, true);
                        echo "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 412
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 412));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 413
                            echo "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 414
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($__internal_compile_0 = $context["voter_detail"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["class"] ?? null) : null));
                            echo "</td>
                                                            ";
                            // line 415
                            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 415) == "unanimous")) {
                                // line 416
                                echo "                                                            <td class=\"font-normal text-small\">attribute ";
                                echo twig_escape_filter($this->env, (($__internal_compile_1 = (($__internal_compile_2 = $context["voter_detail"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["attributes"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "html", null, true);
                                echo "</td>
                                                            ";
                            }
                            // line 418
                            echo "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 419
                            if (((($__internal_compile_3 = $context["voter_detail"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 420
                                echo "                                                                    ACCESS GRANTED
                                                                ";
                            } elseif (((($__internal_compile_4 =                             // line 421
$context["voter_detail"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 422
                                echo "                                                                    ACCESS ABSTAIN
                                                                ";
                            } elseif (((($__internal_compile_5 =                             // line 423
$context["voter_detail"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 424
                                echo "                                                                    ACCESS DENIED
                                                                ";
                            } else {
                                // line 426
                                echo "                                                                    unknown (";
                                echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["voter_detail"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["vote"] ?? null) : null), "html", null, true);
                                echo ")
                                                                ";
                            }
                            // line 428
                            echo "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 431
                        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 434
                        echo twig_escape_filter($this->env, ($context["voter_details_id"] ?? null), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 436
                    echo "                                        </td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 443
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1044 => 443,  1038 => 439,  1022 => 436,  1017 => 434,  1012 => 431,  1004 => 428,  998 => 426,  994 => 424,  992 => 423,  989 => 422,  987 => 421,  984 => 420,  982 => 419,  979 => 418,  973 => 416,  971 => 415,  967 => 414,  964 => 413,  960 => 412,  953 => 409,  950 => 408,  948 => 407,  940 => 402,  937 => 401,  931 => 399,  928 => 398,  922 => 396,  916 => 394,  914 => 393,  909 => 392,  906 => 391,  903 => 390,  901 => 389,  896 => 386,  894 => 383,  889 => 381,  886 => 380,  869 => 379,  849 => 361,  846 => 360,  841 => 357,  824 => 354,  820 => 353,  817 => 352,  800 => 351,  783 => 337,  779 => 335,  777 => 334,  771 => 331,  766 => 328,  760 => 324,  756 => 322,  742 => 321,  738 => 319,  736 => 318,  730 => 315,  726 => 314,  722 => 313,  718 => 312,  714 => 310,  711 => 309,  709 => 308,  705 => 306,  701 => 304,  698 => 303,  695 => 302,  677 => 301,  675 => 300,  663 => 290,  661 => 289,  655 => 286,  650 => 283,  646 => 281,  632 => 280,  628 => 278,  626 => 277,  620 => 274,  616 => 273,  612 => 272,  608 => 270,  605 => 269,  603 => 268,  600 => 267,  596 => 265,  593 => 264,  590 => 263,  572 => 262,  570 => 261,  559 => 252,  553 => 248,  551 => 247,  545 => 244,  540 => 241,  537 => 240,  529 => 235,  522 => 231,  515 => 227,  508 => 223,  501 => 219,  494 => 215,  487 => 211,  474 => 200,  472 => 199,  464 => 194,  457 => 190,  450 => 186,  446 => 184,  444 => 183,  438 => 180,  433 => 177,  427 => 173,  425 => 172,  421 => 170,  415 => 167,  411 => 165,  409 => 164,  406 => 163,  400 => 160,  396 => 158,  394 => 157,  389 => 154,  385 => 152,  383 => 151,  378 => 149,  359 => 133,  351 => 128,  347 => 126,  345 => 125,  338 => 121,  335 => 120,  333 => 119,  330 => 118,  323 => 117,  312 => 112,  307 => 111,  300 => 110,  290 => 106,  287 => 105,  283 => 103,  277 => 99,  274 => 98,  269 => 95,  263 => 93,  261 => 92,  257 => 91,  252 => 88,  250 => 87,  247 => 86,  241 => 83,  237 => 81,  235 => 80,  232 => 79,  225 => 74,  219 => 71,  214 => 68,  209 => 65,  206 => 64,  200 => 61,  196 => 60,  193 => 59,  191 => 58,  186 => 57,  183 => 56,  179 => 54,  177 => 53,  172 => 50,  170 => 49,  165 => 46,  159 => 43,  155 => 42,  152 => 41,  150 => 40,  145 => 39,  143 => 38,  132 => 32,  124 => 27,  120 => 25,  117 => 24,  115 => 23,  111 => 21,  104 => 17,  99 => 14,  96 => 13,  94 => 12,  91 => 11,  86 => 9,  81 => 8,  78 => 7,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Security/Collector/security.html.twig", "/home/teo/projects/ec_app/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
}
