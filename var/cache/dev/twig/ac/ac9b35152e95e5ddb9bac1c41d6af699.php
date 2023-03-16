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

/* @WebProfiler/Collector/notifier.html.twig */
class __TwigTemplate_d8f1872f793b6d20200e69a5adb79bce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/notifier.html.twig", 1);
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
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/notifier.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 9)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 15)), "html", null, true);
            echo "</span>
            </div>

            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 20
                echo twig_escape_filter($this->env, $context["transport"], "html", null, true);
                echo "</b>
                    <span class=\"sf-toolbar-status\">";
                // line 21
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [0 => $context["transport"]], "method", false, false, false, 21)), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 31
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 68);
        // line 69
        echo "
    <span class=\"label ";
        // line 70
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 70))) ? ("") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 71
        echo twig_source($this->env, "@WebProfiler/Icon/notifier.svg");
        echo "</span>

        <strong>Notifications</strong>
        ";
        // line 74
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 74)) > 0)) {
            // line 75
            echo "            <span class=\"count\">
                <span>";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 76)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 79
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 83
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 83);
        // line 84
        echo "
    <h2>Notifications</h2>

    ";
        // line 87
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 87))) {
            // line 88
            echo "        <div class=\"empty\">
            <p>No notifications were sent.</p>
        </div>
    ";
        }
        // line 92
        echo "
    <div class=\"metrics\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 95
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 96
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [0 => $context["transport"]], "method", false, false, false, 96)), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 97
            echo twig_escape_filter($this->env, $context["transport"], "html", null, true);
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            echo "        <h3>";
            echo twig_escape_filter($this->env, $context["transport"], "html", null, true);
            echo "</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [0 => $context["transport"]], "method", false, false, false, 107));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 108
                echo "                    ";
                $context["message"] = twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 108);
                // line 109
                echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
                echo " <small>(";
                echo ((twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, false, 110)) ? ("queued") : ("sent"));
                echo ")</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">";
                // line 115
                (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 115) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 115)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 115), "html", null, true))) : (print ("(empty)")));
                echo "</h2>
                                </div>
                                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "any", true, true, false, 117)) {
                    // line 118
                    echo "                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">";
                    // line 122
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, false, 122), "getContent", [], "method", true, true, false, 122) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, false, 122), "getContent", [], "method", false, false, false, 122)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, false, 122), "getContent", [], "method", false, false, false, 122), "html", null, true))) : (print ("(empty)")));
                    echo "</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, false, false, 124), "getImportance", [], "method", false, false, false, 124), "html", null, true);
                    echo "</pre>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 129
                echo "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            ";
                // line 131
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "any", true, true, false, 131)) {
                    // line 132
                    echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    ";
                    // line 134
                    $context["notification"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 134), "getNotification", [], "method", false, false, false, 134);
                    // line 135
                    echo "                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 137
                    echo twig_escape_filter($this->env, ("Subject: " . twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getSubject", [], "method", false, false, false, 137)), "html", null, true);
                    echo "<br/>";
                    // line 138
                    echo twig_escape_filter($this->env, ("Content: " . twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, false, 138)), "html", null, true);
                    echo "<br/>";
                    // line 139
                    echo twig_escape_filter($this->env, ("Importance: " . twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getImportance", [], "method", false, false, false, 139)), "html", null, true);
                    echo "<br/>";
                    // line 140
                    echo twig_escape_filter($this->env, ("Emoji: " . ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getEmoji", [], "method", false, false, false, 140))) ? ("(empty)") : (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getEmoji", [], "method", false, false, false, 140)))), "html", null, true);
                    echo "<br/>";
                    // line 141
                    echo twig_escape_filter($this->env, ("Exception: " . (((twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", true, true, false, 141) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, false, 141)))) ? (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, false, 141)) : ("(empty)"))), "html", null, true);
                    echo "<br/>";
                    // line 142
                    echo twig_escape_filter($this->env, ("ExceptionAsString: " . ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getExceptionAsString", [], "method", false, false, false, 142))) ? ("(empty)") : (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getExceptionAsString", [], "method", false, false, false, 142)))), "html", null, true);
                    echo "
                                                        </pre>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 147
                echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                // line 151
                if ((null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getOptions", [], "method", false, false, false, 151))) {
                    // line 152
                    echo "(empty)";
                } else {
                    // line 154
                    echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getOptions", [], "method", false, false, false, 154), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                }
                // line 156
                echo "                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/notifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 165,  399 => 156,  396 => 154,  393 => 152,  391 => 151,  386 => 147,  378 => 142,  375 => 141,  372 => 140,  369 => 139,  366 => 138,  363 => 137,  360 => 135,  358 => 134,  354 => 132,  352 => 131,  348 => 129,  340 => 124,  335 => 122,  329 => 118,  327 => 117,  322 => 115,  312 => 110,  309 => 109,  306 => 108,  289 => 107,  281 => 103,  277 => 102,  273 => 100,  264 => 97,  260 => 96,  257 => 95,  253 => 94,  249 => 92,  243 => 88,  241 => 87,  236 => 84,  233 => 83,  226 => 82,  218 => 79,  212 => 76,  209 => 75,  207 => 74,  201 => 71,  197 => 70,  194 => 69,  191 => 68,  184 => 67,  141 => 31,  134 => 30,  124 => 26,  121 => 25,  118 => 24,  109 => 21,  105 => 20,  102 => 19,  98 => 18,  92 => 15,  88 => 13,  86 => 12,  83 => 11,  78 => 9,  73 => 8,  70 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/notifier.html.twig", "/home/teo/projects/ec_app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/notifier.html.twig");
    }
}
