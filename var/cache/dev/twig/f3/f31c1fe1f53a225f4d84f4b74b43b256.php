<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_b10915313d5951e2eefed1bf5c521a4a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "handledCount", [], "any", false, false, true, 32) > 0)) {
            // line 33
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 34
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "handledCount", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                yield "
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "
        ";
            // line 40
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "handledCount", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "totalTime", [], "any", false, false, true, 48) * 1000)), "html", null, true);
                yield " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "data", [], "any", false, false, true, 56), "serialize", [], "any", false, false, true, 56), 56, $this->source)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "data", [], "any", false, false, true, 60), "deserialize", [], "any", false, false, true, 60), 60, $this->source)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "data", [], "any", false, false, true, 66), "encode", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, true, 70), "decode", [], "any", false, false, true, 70), 70, $this->source)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "data", [], "any", false, false, true, 76), "normalize", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, true, 80), "denormalize", [], "any", false, false, true, 80), 80, $this->source)), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "
        ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => $this->sandbox->ensureToStringAllowed((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 86, $this->source); })()), 86, $this->source)]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        yield "    <span class=\"label ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "handledCount", [], "any", false, false, true, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 92
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 98
        yield "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "handledCount", [], "any", false, false, true, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "handledCount", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            yield "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "totalTime", [], "any", false, false, true, 112) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "serializerNames", [], "any", false, false, true, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["serializer"]) {
                // line 119
                yield "                    ";
                yield $this->getTemplateForMacro("macro_render_serializer_tab", $context, 119, $this->getSourceContext())->macro_render_serializer_tab(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), $context["serializer"]]);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['serializer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "            </div>
        ";
        }
        // line 123
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
    public function macro_render_serializer_tab($collector = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serializer_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serializer_tab"));

            // line 127
            yield "    <div class=\"tab\">
        <h3 class=\"tab-title\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 128, $this->source); })()), 128, $this->source), "html", null, true);
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "handledCount", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 128, $this->source); })())], "method", false, false, true, 128), 128, $this->source), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            <div class=\"sf-tabs\">
                ";
            // line 131
            yield $this->getTemplateForMacro("macro_render_serialize_tab", $context, 131, $this->getSourceContext())->macro_render_serialize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 131, $this->source); })())], "method", false, false, true, 131), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 131, $this->source); })())]);
            yield "
                ";
            // line 132
            yield $this->getTemplateForMacro("macro_render_serialize_tab", $context, 132, $this->getSourceContext())->macro_render_serialize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 132, $this->source); })())], "method", false, false, true, 132), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 132, $this->source); })())]);
            yield "

                ";
            // line 134
            yield $this->getTemplateForMacro("macro_render_normalize_tab", $context, 134, $this->getSourceContext())->macro_render_normalize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 134, $this->source); })())], "method", false, false, true, 134), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 134, $this->source); })())]);
            yield "
                ";
            // line 135
            yield $this->getTemplateForMacro("macro_render_normalize_tab", $context, 135, $this->getSourceContext())->macro_render_normalize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 135, $this->source); })())], "method", false, false, true, 135), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 135, $this->source); })())]);
            yield "

                ";
            // line 137
            yield $this->getTemplateForMacro("macro_render_encode_tab", $context, 137, $this->getSourceContext())->macro_render_encode_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 137, $this->source); })())], "method", false, false, true, 137), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 137, $this->source); })())]);
            yield "
                ";
            // line 138
            yield $this->getTemplateForMacro("macro_render_encode_tab", $context, 138, $this->getSourceContext())->macro_render_encode_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 138, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 138, $this->source); })())], "method", false, false, true, 138), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 138, $this->source); })())]);
            yield "
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 144
    public function macro_render_serialize_tab($collectorData = null, $serialize = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "serialize" => $serialize,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 145
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 145, $this->source); })()), "serialize", [], "any", false, false, true, 145)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 145, $this->source); })()), "deserialize", [], "any", false, false, true, 145)));
            // line 146
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
            // line 147
            yield "
    <div class=\"tab ";
            // line 148
            yield (((($tmp =  !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 148, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 149
            yield (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 149, $this->source); })()), 149, $this->source)), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 151
            if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 151, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 153
                yield (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 153, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialized") : ("deserialized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 156
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 168, $this->source); })()));
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
                    // line 169
                    yield "                            <tr>
                                <td>";
                    // line 170
                    yield $this->getTemplateForMacro("macro_render_data_cell", $context, 170, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 170), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 170, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 170, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 171
                    yield $this->getTemplateForMacro("macro_render_context_cell", $context, 171, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 171), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 171, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 171, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 172
                    yield $this->getTemplateForMacro("macro_render_normalizer_cell", $context, 172, $this->getSourceContext())->macro_render_normalizer_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 172), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 172, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 172, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 173
                    yield $this->getTemplateForMacro("macro_render_encoder_cell", $context, 173, $this->getSourceContext())->macro_render_encoder_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 173), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 173, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 173, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 174
                    yield $this->getTemplateForMacro("macro_render_time_cell", $context, 174, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 175
                    yield $this->getTemplateForMacro("macro_render_caller_cell", $context, 175, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 175), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 175, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 175, $this->source); })())]);
                    yield "</td>
                            </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                yield "                    </tbody>
                </table>
            ";
            }
            // line 181
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 185
    public function macro_render_caller_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 186
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, true, 186)) {
                // line 187
                yield "        ";
                $context["trace_id"] = ((((("sf-trace-" . $this->sandbox->ensureToStringAllowed((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 187, $this->source); })()), 187, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 187, $this->source); })()), 187, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 187, $this->source); })()), 187, $this->source));
                // line 188
                yield "
        <span class=\"metadata\">
            ";
                // line 190
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 190, $this->source); })()), "caller", [], "any", false, false, true, 190);
                // line 191
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 191, $this->source); })()), "line", [], "any", false, false, true, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 192
                    yield "                ";
                    $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 192, $this->source); })()), "file", [], "any", false, false, true, 192), 192, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 192, $this->source); })()), "line", [], "any", false, false, true, 192), 192, $this->source));
                    // line 193
                    yield "                ";
                    if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 194
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 194, $this->source); })()), 194, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 194, $this->source); })()), "file", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 194, $this->source); })()), "name", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                        yield "</a>
                ";
                    } else {
                        // line 196
                        yield "                    <abbr title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 196, $this->source); })()), "file", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 196, $this->source); })()), "name", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
                        yield "</abbr>
                ";
                    }
                    // line 198
                    yield "            ";
                } else {
                    // line 199
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 199, $this->source); })()), "name", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                    yield "
            ";
                }
                // line 201
                yield "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 201, $this->source); })()), 201, $this->source), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 201, $this->source); })()), "line", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                yield "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 204, $this->source); })()), 204, $this->source), "html", null, true);
                yield "\">
            <div class=\"trace\">
                ";
                // line 206
                yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->fileExcerpt($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 206, $this->source); })()), "file", [], "any", false, false, true, 206), 206, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 206, $this->source); })()), "line", [], "any", false, false, true, 206), 206, $this->source)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 211
                yield "
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 217
    public function macro_render_normalize_tab($collectorData = null, $normalize = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "normalize" => $normalize,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 218
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 218, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 218, $this->source); })()), "normalize", [], "any", false, false, true, 218)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 218, $this->source); })()), "denormalize", [], "any", false, false, true, 218)));
            // line 219
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
            // line 220
            yield "
    <div class=\"tab ";
            // line 221
            yield (((($tmp =  !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 222
            yield (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 222, $this->source); })()), 222, $this->source)), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 224
            if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 224, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 225
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 226
                yield (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 226, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalized") : ("denormalized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 229
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 240
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 240, $this->source); })()));
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
                    // line 241
                    yield "                            <tr>
                                <td>";
                    // line 242
                    yield $this->getTemplateForMacro("macro_render_data_cell", $context, 242, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 242), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 242, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 242, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 243
                    yield $this->getTemplateForMacro("macro_render_context_cell", $context, 243, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 243), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 243, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 243, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 244
                    yield $this->getTemplateForMacro("macro_render_normalizer_cell", $context, 244, $this->getSourceContext())->macro_render_normalizer_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 244), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 244, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 244, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 245
                    yield $this->getTemplateForMacro("macro_render_time_cell", $context, 245, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 246
                    yield $this->getTemplateForMacro("macro_render_caller_cell", $context, 246, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 246), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 246, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 246, $this->source); })())]);
                    yield "</td>
                            </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                yield "                    </tbody>
                </table>
            ";
            }
            // line 252
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 256
    public function macro_render_encode_tab($collectorData = null, $encode = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "encode" => $encode,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 257
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 257, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 257, $this->source); })()), "encode", [], "any", false, false, true, 257)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 257, $this->source); })()), "decode", [], "any", false, false, true, 257)));
            // line 258
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 258, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
            // line 259
            yield "
    <div class=\"tab ";
            // line 260
            yield (((($tmp =  !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 260, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 261
            yield (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 261, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 261, $this->source); })()), 261, $this->source)), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 263
            if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 263, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 264
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 265
                yield (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 265, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encoded") : ("decoded"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 268
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 279, $this->source); })()));
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
                    // line 280
                    yield "                            <tr>
                                <td>";
                    // line 281
                    yield $this->getTemplateForMacro("macro_render_data_cell", $context, 281, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 281), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 281, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 281, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 282
                    yield $this->getTemplateForMacro("macro_render_context_cell", $context, 282, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 282), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 282, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 282, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 283
                    yield $this->getTemplateForMacro("macro_render_encoder_cell", $context, 283, $this->getSourceContext())->macro_render_encoder_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 283), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 283, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 283, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 284
                    yield $this->getTemplateForMacro("macro_render_time_cell", $context, 284, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 285
                    yield $this->getTemplateForMacro("macro_render_caller_cell", $context, 285, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 285), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 285, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 285, $this->source); })())]);
                    yield "</td>
                            </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                yield "                    </tbody>
                </table>
            ";
            }
            // line 291
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 295
    public function macro_render_data_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 296
            yield "    ";
            $context["data_id"] = ((((("data-" . $this->sandbox->ensureToStringAllowed((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 296, $this->source); })()), 296, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 296, $this->source); })()), 296, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 296, $this->source); })()), 296, $this->source));
            // line 297
            yield "
    <span class=\"nowrap\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "dataType", [], "any", false, false, true, 298), 298, $this->source), "html", null, true);
            yield "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 301, $this->source); })()), 301, $this->source), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 302, $this->source); })()), 302, $this->source), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 303
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 303, $this->source); })()), "data", [], "any", false, false, true, 303), 303, $this->source));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 308
    public function macro_render_context_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 309
            yield "    ";
            $context["context_id"] = ((((("context-" . $this->sandbox->ensureToStringAllowed((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 309, $this->source); })()), 309, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 309, $this->source); })()), 309, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 309, $this->source); })()), 309, $this->source));
            // line 310
            yield "
    ";
            // line 311
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 311, $this->source); })()), "type", [], "any", false, false, true, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "        <span class=\"nowrap\">Type: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 312, $this->source); })()), "type", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
                yield "</span>
        <div class=\"nowrap\">Format: ";
                // line 313
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 313, $this->source); })()), "format", [], "any", false, false, true, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 313, $this->source); })()), "format", [], "any", false, false, true, 313), 313, $this->source), "html", null, true)) : ("none"));
                yield "</div>
    ";
            } else {
                // line 315
                yield "        <span class=\"nowrap\">Format: ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "format", [], "any", false, false, true, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "format", [], "any", false, false, true, 315), 315, $this->source), "html", null, true)) : ("none"));
                yield "</span>
    ";
            }
            // line 317
            yield "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 319, $this->source); })()), 319, $this->source), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 320, $this->source); })()), 320, $this->source), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 321
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 321, $this->source); })()), "context", [], "any", false, false, true, 321), 321, $this->source));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 326
    public function macro_render_normalizer_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 327
            yield "    ";
            $context["nested_normalizers_id"] = ((((("nested-normalizers-" . $this->sandbox->ensureToStringAllowed((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 327, $this->source); })()), 327, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 327, $this->source); })()), 327, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 327, $this->source); })()), 327, $this->source));
            // line 328
            yield "
    ";
            // line 329
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, true, 329)) {
                // line 330
                yield "        <span class=\"nowrap\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, true, 330), "file", [], "any", false, false, true, 330), 330, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, true, 330), "line", [], "any", false, false, true, 330), 330, $this->source)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, true, 330), "file", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, true, 330), "class", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                yield "</a> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, true, 330), "time", [], "any", false, false, true, 330) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 332
            yield "
    ";
            // line 333
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 333, $this->source); })()), "normalization", [], "any", false, false, true, 333)) > 1)) {
                // line 334
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 335, $this->source); })()), 335, $this->source), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 336, $this->source); })()), 336, $this->source), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 338, $this->source); })()), "normalization", [], "any", false, false, true, 338));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 339
                    yield "                        <li><span class=\"nowrap\">x";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, true, 339), 339, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, true, 339), 339, $this->source)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                    yield "</a> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, true, 339) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['normalizer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 347
    public function macro_render_encoder_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 348
            yield "    ";
            $context["nested_encoders_id"] = ((((("nested-encoders-" . $this->sandbox->ensureToStringAllowed((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 348, $this->source); })()), 348, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 348, $this->source); })()), 348, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 348, $this->source); })()), 348, $this->source));
            // line 349
            yield "
    ";
            // line 350
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, true, 350)) {
                // line 351
                yield "        <span class=\"nowrap\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, true, 351), "file", [], "any", false, false, true, 351), 351, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, true, 351), "line", [], "any", false, false, true, 351), 351, $this->source)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, true, 351), "file", [], "any", false, false, true, 351), 351, $this->source), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, true, 351), "class", [], "any", false, false, true, 351), 351, $this->source), "html", null, true);
                yield "</a> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, true, 351), "time", [], "any", false, false, true, 351) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 353
            yield "
    ";
            // line 354
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 354, $this->source); })()), "encoding", [], "any", false, false, true, 354)) > 1)) {
                // line 355
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 356, $this->source); })()), 356, $this->source), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 357, $this->source); })()), 357, $this->source), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 359
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 359, $this->source); })()), "encoding", [], "any", false, false, true, 359));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 360
                    yield "                        <li><span class=\"nowrap\">x";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, true, 360), 360, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, true, 360), 360, $this->source)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                    yield "</a> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, true, 360) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['encoder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 362
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 368
    public function macro_render_time_cell($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 369
            yield "    <span class=\"nowrap\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 369, $this->source); })()), "time", [], "any", false, false, true, 369) * 1000)), "html", null, true);
            yield " ms</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/serializer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1273 => 369,  1255 => 368,  1239 => 362,  1222 => 360,  1218 => 359,  1213 => 357,  1209 => 356,  1206 => 355,  1204 => 354,  1201 => 353,  1189 => 351,  1187 => 350,  1184 => 349,  1181 => 348,  1160 => 347,  1144 => 341,  1127 => 339,  1123 => 338,  1118 => 336,  1114 => 335,  1111 => 334,  1109 => 333,  1106 => 332,  1094 => 330,  1092 => 329,  1089 => 328,  1086 => 327,  1065 => 326,  1049 => 321,  1045 => 320,  1041 => 319,  1037 => 317,  1031 => 315,  1026 => 313,  1021 => 312,  1019 => 311,  1016 => 310,  1013 => 309,  992 => 308,  976 => 303,  972 => 302,  968 => 301,  962 => 298,  959 => 297,  956 => 296,  935 => 295,  921 => 291,  916 => 288,  899 => 285,  895 => 284,  891 => 283,  887 => 282,  883 => 281,  880 => 280,  863 => 279,  850 => 268,  844 => 265,  841 => 264,  839 => 263,  832 => 261,  828 => 260,  825 => 259,  822 => 258,  819 => 257,  799 => 256,  785 => 252,  780 => 249,  763 => 246,  759 => 245,  755 => 244,  751 => 243,  747 => 242,  744 => 241,  727 => 240,  714 => 229,  708 => 226,  705 => 225,  703 => 224,  696 => 222,  692 => 221,  689 => 220,  686 => 219,  683 => 218,  663 => 217,  647 => 211,  645 => 206,  640 => 204,  631 => 201,  625 => 199,  622 => 198,  614 => 196,  604 => 194,  601 => 193,  598 => 192,  595 => 191,  593 => 190,  589 => 188,  586 => 187,  583 => 186,  562 => 185,  548 => 181,  543 => 178,  526 => 175,  522 => 174,  518 => 173,  514 => 172,  510 => 171,  506 => 170,  503 => 169,  486 => 168,  472 => 156,  466 => 153,  463 => 152,  461 => 151,  454 => 149,  450 => 148,  447 => 147,  444 => 146,  441 => 145,  421 => 144,  404 => 138,  400 => 137,  395 => 135,  391 => 134,  386 => 132,  382 => 131,  374 => 128,  371 => 127,  352 => 126,  340 => 123,  336 => 121,  327 => 119,  323 => 118,  314 => 112,  306 => 107,  302 => 105,  296 => 101,  294 => 100,  290 => 98,  277 => 97,  262 => 92,  257 => 91,  244 => 90,  230 => 86,  227 => 85,  218 => 80,  211 => 76,  202 => 70,  195 => 66,  186 => 60,  179 => 56,  168 => 48,  160 => 43,  156 => 41,  154 => 40,  151 => 39,  144 => 36,  138 => 34,  135 => 33,  132 => 32,  119 => 31,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.handledCount > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/serializer.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.handledCount }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.handledCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    {{ '%.2f'|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.serialize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.deserialize|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.encode|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.decode|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.normalize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.denormalize|length }}</span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: profiler_url}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.handledCount ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/serializer.svg') }}</span>
        <strong>Serializer</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        {% if not collector.handledCount %}
            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.handledCount }}</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ '%.2f'|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                {% for serializer in collector.serializerNames %}
                    {{ _self.render_serializer_tab(collector, serializer) }}
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% macro render_serializer_tab(collector, serializer) %}
    <div class=\"tab\">
        <h3 class=\"tab-title\">{{ serializer }} <span class=\"badge\">{{ collector.handledCount(serializer) }}</h3>
        <div class=\"tab-content\">
            <div class=\"sf-tabs\">
                {{ _self.render_serialize_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_serialize_tab(collector.data(serializer), false, serializer) }}

                {{ _self.render_normalize_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_normalize_tab(collector.data(serializer), false, serializer) }}

                {{ _self.render_encode_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_encode_tab(collector.data(serializer), false, serializer) }}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro render_serialize_tab(collectorData, serialize, serializer) %}
    {% set data = serialize ? collectorData.serialize : collectorData.deserialize %}
    {% set cellPrefix = serialize ? 'serialize' : 'deserialize' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ serialize ? 'serialize' : 'deserialize' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ serialize ? 'serialized' : 'deserialized' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_caller_cell(item, index, method, serializer) %}
    {% if item.caller is defined %}
        {% set trace_id = 'sf-trace-' ~ serializer ~ '-' ~ method ~ '-' ~ index %}

        <span class=\"metadata\">
            {% set caller = item.caller %}
            {% if caller.line %}
                {% set link = caller.file|file_link(caller.line) %}
                {% if link %}
                    <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                {% else %}
                    <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                {% endif %}
            {% else %}
                {{ caller.name }}
            {% endif %}
            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\">{{ caller.line }}</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"{{ trace_id }}\">
            <div class=\"trace\">
                {{ caller.file|file_excerpt(caller.line)|replace({
                    '#DD0000': 'var(--highlight-string)',
                    '#007700': 'var(--highlight-keyword)',
                    '#0000BB': 'var(--highlight-default)',
                    '#FF8000': 'var(--highlight-comment)',
                })|raw }}
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_normalize_tab(collectorData, normalize, serializer) %}
    {% set data = normalize ? collectorData.normalize : collectorData.denormalize %}
    {% set cellPrefix = normalize ? 'normalize' : 'denormalize' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ normalize ? 'normalize' : 'denormalize' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ normalize ? 'normalized' : 'denormalized' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_encode_tab(collectorData, encode, serializer) %}
    {% set data = encode ? collectorData.encode : collectorData.decode %}
    {% set cellPrefix = encode ? 'encode' : 'decode' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ encode ? 'encode' : 'decode' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ encode ? 'encoded' : 'decoded' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_data_cell(item, index, method, serializer) %}
    {% set data_id = 'data-' ~ serializer ~ '-' ~ method ~ '-' ~ index %}

    <span class=\"nowrap\">{{ item.dataType }}</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ data_id }}\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"{{ data_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.data) }}
        </div>
    </div>
{% endmacro %}

{% macro render_context_cell(item, index, method, serializer) %}
    {% set context_id = 'context-' ~ serializer ~ '-' ~ method ~ '-' ~ index %}

    {% if item.type %}
        <span class=\"nowrap\">Type: {{ item.type }}</span>
        <div class=\"nowrap\">Format: {{ item.format ? item.format : 'none' }}</div>
    {% else %}
        <span class=\"nowrap\">Format: {{ item.format ? item.format : 'none' }}</span>
    {% endif %}

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.context) }}
        </div>
    </div>
{% endmacro %}

{% macro render_normalizer_cell(item, index, method, serializer) %}
    {% set nested_normalizers_id = 'nested-normalizers-' ~ serializer ~ '-' ~ method ~ '-' ~ index %}

    {% if item.normalizer is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.normalizer.file|file_link(item.normalizer.line) }}\" title=\"{{ item.normalizer.file }}\">{{ item.normalizer.class }}</a> ({{ '%.2f'|format(item.normalizer.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.normalization|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_normalizers_id }}\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"{{ nested_normalizers_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for normalizer in item.normalization %}
                        <li><span class=\"nowrap\">x{{ normalizer.calls }} <a href=\"{{ normalizer.file|file_link(normalizer.line) }}\" title=\"{{ normalizer.file }}\">{{ normalizer.class }}</a> ({{ '%.2f'|format(normalizer.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_encoder_cell(item, index, method, serializer) %}
    {% set nested_encoders_id = 'nested-encoders-' ~ serializer ~ '-' ~ method ~ '-' ~ index %}

    {% if item.encoder is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.encoder.file|file_link(item.encoder.line) }}\" title=\"{{ item.encoder.file }}\">{{ item.encoder.class }}</a> ({{ '%.2f'|format(item.encoder.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.encoding|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_encoders_id }}\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"{{ nested_encoders_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for encoder in item.encoding %}
                        <li><span class=\"nowrap\">x{{ encoder.calls }} <a href=\"{{ encoder.file|file_link(encoder.line) }}\" title=\"{{ encoder.file }}\">{{ encoder.class }}</a> ({{ '%.2f'|format(encoder.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_time_cell(item) %}
    <span class=\"nowrap\">{{ '%.2f'|format(item.time * 1000) }} ms</span>
{% endmacro %}
", "@WebProfiler/Collector/serializer.html.twig", "/var/www/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "macro" => 126, "if" => 32, "set" => 33, "for" => 118];
        static $filters = ["escape" => 36, "format" => 48, "length" => 56, "file_link" => 192, "raw" => 211, "replace" => 206, "file_excerpt" => 206];
        static $functions = ["source" => 34, "include" => 86, "profiler_dump" => 303];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'macro', 'if', 'set', 'for'],
                ['escape', 'format', 'length', 'file_link', 'raw', 'replace', 'file_excerpt'],
                ['source', 'include', 'profiler_dump'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
