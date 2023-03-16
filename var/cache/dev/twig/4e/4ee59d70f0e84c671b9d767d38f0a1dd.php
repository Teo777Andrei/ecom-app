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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_24b28b083f621d3dfbeec97df0fc3c53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 6)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/serializer.svg");
        echo "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Serializer</h2>
    ";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"empty\">
            <p>Nothing was handled by the serializer for this request.</p>
        </div>
    ";
        } else {
            // line 19
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                <span class=\"label\">Handled</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 26
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 26) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
        </div>

        <div class=\"sf-tabs\">
            ";
            // line 32
            echo twig_call_macro($macros["helper"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 32), true], 32, $context, $this->getSourceContext());
            echo "
            ";
            // line 33
            echo twig_call_macro($macros["helper"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 33), false], 33, $context, $this->getSourceContext());
            echo "

            ";
            // line 35
            echo twig_call_macro($macros["helper"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 35), true], 35, $context, $this->getSourceContext());
            echo "
            ";
            // line 36
            echo twig_call_macro($macros["helper"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 36), false], 36, $context, $this->getSourceContext());
            echo "

            ";
            // line 38
            echo twig_call_macro($macros["helper"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 38), true], 38, $context, $this->getSourceContext());
            echo "
            ";
            // line 39
            echo twig_call_macro($macros["helper"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 39), false], 39, $context, $this->getSourceContext());
            echo "
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 45
            echo "    ";
            $context["data"] = ((($context["serialize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "serialize", [], "any", false, false, false, 45)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "deserialize", [], "any", false, false, false, 45)));
            // line 46
            echo "    ";
            $context["cellPrefix"] = ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            // line 47
            echo "
    <div class=\"tab ";
            // line 48
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 49
            echo ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 51
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 52
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 53
                echo ((($context["serialize"] ?? null)) ? ("serialized") : ("deserialized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 56
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    echo "                            <tr>
                                <td>";
                    // line 69
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), ($context["cellPrefix"] ?? null)], 69, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 70
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 70), ($context["cellPrefix"] ?? null)], 70, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 71
                    echo twig_call_macro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71), ($context["cellPrefix"] ?? null)], 71, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 72
                    echo twig_call_macro($macros["helper"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72), ($context["cellPrefix"] ?? null)], 72, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 73
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 73, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    </tbody>
                </table>
            ";
            }
            // line 79
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 83
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 84
            echo "    ";
            $context["data"] = ((($context["normalize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "normalize", [], "any", false, false, false, 84)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "denormalize", [], "any", false, false, false, 84)));
            // line 85
            echo "    ";
            $context["cellPrefix"] = ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            // line 86
            echo "
    <div class=\"tab ";
            // line 87
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 88
            echo ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 90
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 91
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 92
                echo ((($context["normalize"] ?? null)) ? ("normalized") : ("denormalized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 95
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 106
                    echo "                            <tr>
                                <td>";
                    // line 107
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), ($context["cellPrefix"] ?? null)], 107, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 108
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108), ($context["cellPrefix"] ?? null)], 108, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 109
                    echo twig_call_macro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109), ($context["cellPrefix"] ?? null)], 109, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 110
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 110, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                    </tbody>
                </table>
            ";
            }
            // line 116
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 120
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 121
            echo "    ";
            $context["data"] = ((($context["encode"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "encode", [], "any", false, false, false, 121)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "decode", [], "any", false, false, false, 121)));
            // line 122
            echo "    ";
            $context["cellPrefix"] = ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            // line 123
            echo "
    <div class=\"tab ";
            // line 124
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 125
            echo ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 127
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 128
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 129
                echo ((($context["encode"] ?? null)) ? ("encoded") : ("decoded"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 132
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 143
                    echo "                            <tr>
                                <td>";
                    // line 144
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 144), ($context["cellPrefix"] ?? null)], 144, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 145
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 145), ($context["cellPrefix"] ?? null)], 145, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 146
                    echo twig_call_macro($macros["helper"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146), ($context["cellPrefix"] ?? null)], 146, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 147
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 147, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                    </tbody>
                </table>
            ";
            }
            // line 153
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 157
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 158
            echo "    ";
            $context["data_id"] = ((("data-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 159
            echo "
    <span class=\"nowrap\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dataType", [], "any", false, false, false, 160), "html", null, true);
            echo "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 163
            echo twig_escape_filter($this->env, ($context["data_id"] ?? null), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 164
            echo twig_escape_filter($this->env, ($context["data_id"] ?? null), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 165
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "data", [], "any", false, false, false, 165));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 170
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 171
            echo "    ";
            $context["context_id"] = ((("context-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 172
            echo "
    ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 173)) {
                // line 174
                echo "        <span class=\"nowrap\">Type: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 174), "html", null, true);
                echo "</span>
        <div class=\"nowrap\">Format: ";
                // line 175
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 175)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 175), "html", null, true))) : (print ("none")));
                echo "</div>
    ";
            } else {
                // line 177
                echo "        <span class=\"nowrap\">Format: ";
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 177)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 177), "html", null, true))) : (print ("none")));
                echo "</span>
    ";
            }
            // line 179
            echo "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 181
            echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 182
            echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 183
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "context", [], "any", false, false, false, 183));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 188
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 189
            echo "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 190
            echo "
    ";
            // line 191
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 191)) {
                // line 192
                echo "    <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "file", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "line", [], "any", false, false, false, 192)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "file", [], "any", false, false, false, 192), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "class", [], "any", false, false, false, 192), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "time", [], "any", false, false, false, 192) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 194
            echo "
    ";
            // line 195
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 195)) > 1)) {
                // line 196
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 197
                echo twig_escape_filter($this->env, ($context["nested_normalizers_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 198
                echo twig_escape_filter($this->env, ($context["nested_normalizers_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 200));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 201
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 201), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 201), twig_get_attribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 201)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 201), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 201), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 201) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 209
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 210
            echo "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 211
            echo "
    ";
            // line 212
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 212)) {
                // line 213
                echo "    <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "file", [], "any", false, false, false, 213), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "line", [], "any", false, false, false, 213)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "file", [], "any", false, false, false, 213), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "class", [], "any", false, false, false, 213), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "time", [], "any", false, false, false, 213) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 215
            echo "
    ";
            // line 216
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 216)) > 1)) {
                // line 217
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 218
                echo twig_escape_filter($this->env, ($context["nested_encoders_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 219
                echo twig_escape_filter($this->env, ($context["nested_encoders_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 221));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 222
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 222), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 222), twig_get_attribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 222)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 222), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 222), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 222) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 230
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 231
            echo "    <span class=\"nowrap\">";
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "time", [], "any", false, false, false, 231) * 1000)), "html", null, true);
            echo " ms</span>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/serializer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  864 => 231,  848 => 230,  832 => 224,  815 => 222,  811 => 221,  806 => 219,  802 => 218,  799 => 217,  797 => 216,  794 => 215,  782 => 213,  780 => 212,  777 => 211,  774 => 210,  756 => 209,  740 => 203,  723 => 201,  719 => 200,  714 => 198,  710 => 197,  707 => 196,  705 => 195,  702 => 194,  690 => 192,  688 => 191,  685 => 190,  682 => 189,  664 => 188,  648 => 183,  644 => 182,  640 => 181,  636 => 179,  630 => 177,  625 => 175,  620 => 174,  618 => 173,  615 => 172,  612 => 171,  594 => 170,  578 => 165,  574 => 164,  570 => 163,  564 => 160,  561 => 159,  558 => 158,  540 => 157,  526 => 153,  521 => 150,  504 => 147,  500 => 146,  496 => 145,  492 => 144,  489 => 143,  472 => 142,  460 => 132,  454 => 129,  451 => 128,  449 => 127,  442 => 125,  438 => 124,  435 => 123,  432 => 122,  429 => 121,  412 => 120,  398 => 116,  393 => 113,  376 => 110,  372 => 109,  368 => 108,  364 => 107,  361 => 106,  344 => 105,  332 => 95,  326 => 92,  323 => 91,  321 => 90,  314 => 88,  310 => 87,  307 => 86,  304 => 85,  301 => 84,  284 => 83,  270 => 79,  265 => 76,  248 => 73,  244 => 72,  240 => 71,  236 => 70,  232 => 69,  229 => 68,  212 => 67,  199 => 56,  193 => 53,  190 => 52,  188 => 51,  181 => 49,  177 => 48,  174 => 47,  171 => 46,  168 => 45,  151 => 44,  140 => 39,  136 => 38,  131 => 36,  127 => 35,  122 => 33,  118 => 32,  109 => 26,  101 => 21,  97 => 19,  91 => 15,  89 => 14,  86 => 13,  79 => 12,  68 => 7,  63 => 6,  56 => 5,  48 => 1,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/serializer.html.twig", "/home/teo/projects/ec_app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
