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

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_a8e8e9b2b10262151d9a9f667f0604c7 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'messages' => [$this, 'block_messages'],
            'defined_messages' => [$this, 'block_defined_messages'],
            'fallback_messages' => [$this, 'block_fallback_messages'],
            'missing_messages' => [$this, 'block_missing_messages'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "messages", [], "any", false, false, true, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/translation.svg");
                yield "
            ";
                // line 7
                $context["status_color"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "countMissings", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "countFallbacks", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yellow") : (""))));
                // line 8
                yield "            ";
                $context["error_count"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "countMissings", [], "any", false, false, true, 8) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "countFallbacks", [], "any", false, false, true, 8));
                // line 9
                yield "            <span class=\"sf-toolbar-value\">";
                yield (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new RuntimeError('Variable "error_count" does not exist.', 9, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["error_count"], 9, $this->source), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "countDefines", [], "any", false, false, true, 9), 9, $this->source), "html", null, true)));
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, true, 16)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "locale", [], "any", false, false, true, 16), 16, $this->source), "-")) : ("-")), "html", null, true);
                yield "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 21
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "countMissings", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
                yield "\">
                    ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "countMissings", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                yield "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 28
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "countFallbacks", [], "any", false, false, true, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yellow") : (""));
                yield "\">
                    ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "countFallbacks", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                yield "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "countDefines", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            yield "
        ";
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => $this->sandbox->ensureToStringAllowed((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 39, $this->source); })()), 39, $this->source), "status" => $this->sandbox->ensureToStringAllowed((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 39, $this->source); })()), 39, $this->source)]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield "    <span class=\"label label-status-";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "countMissings", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "countFallbacks", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : (""))));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "messages", [], "any", false, false, true, 44))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 45
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/translation.svg");
        yield "</span>
        <strong>Translation</strong>
        ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "countMissings", [], "any", false, false, true, 47) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "countFallbacks", [], "any", false, false, true, 47))) {
            // line 48
            yield "            ";
            $context["error_count"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "countMissings", [], "any", false, false, true, 48) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "countFallbacks", [], "any", false, false, true, 48));
            // line 49
            yield "            <span class=\"count\">
                <span>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new RuntimeError('Variable "error_count" does not exist.', 50, $this->source); })()), 50, $this->source), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 53
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
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

        // line 57
        yield "    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, true, 61)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "locale", [], "any", false, false, true, 61), 61, $this->source), "-")) : ("-")), "html", null, true);
        yield "</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "fallbackLocales", [], "any", false, false, true, 65), 65, $this->source), ", "), "-"), "html", null, true);
        yield "</span>
            <span class=\"label\">Fallback locale";
        // line 66
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "fallbackLocales", [], "any", false, false, true, 66), 66, $this->source)) != 1)) ? ("s") : (""));
        yield "</span>
        </div>
    </div>

    <h2>Messages</h2>

    ";
        // line 72
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "messages", [], "any", false, false, true, 72))) {
            // line 73
            yield "        <div class=\"empty empty-panel\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 77
            yield "        ";
            yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
            // line 157
            yield "    ";
        }
        // line 158
        yield "
    ";
        // line 159
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "globalParameters", [], "any", true, true, true, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "globalParameters", [], "any", false, false, true, 159), [])) : ([]))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "        <h2>Global parameters</h2>

        <table>
            <thead>
            <tr>
                <th>Message ID</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 170, $this->source); })()), "globalParameters", [], "any", false, false, true, 170));
            foreach ($context['_seq'] as $context["id"] => $context["value"]) {
                // line 171
                yield "                <tr>
                    <td class=\"font-normal text-small nowrap\">";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["id"], 172, $this->source), "html", null, true);
                yield "</td>
                    <td class=\"font-normal text-small nowrap\">";
                // line 173
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 173, $this->source));
                yield "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "            </tbody>
        </table>
    ";
        }
        // line 179
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 78
        yield "
        ";
        // line 80
        yield "        ";
        [$context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]] =         [[], [], []];
        // line 81
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 81, $this->source); })()), "messages", [], "any", false, false, true, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, true, 82) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 83
                yield "                ";
                $context["messages_defined"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new RuntimeError('Variable "messages_defined" does not exist.', 83, $this->source); })()), 83, $this->source), [$this->sandbox->ensureToStringAllowed($context["message"], 83, $this->source)]);
                // line 84
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, true, 84) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 85
                yield "                ";
                $context["messages_missing"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new RuntimeError('Variable "messages_missing" does not exist.', 85, $this->source); })()), 85, $this->source), [$this->sandbox->ensureToStringAllowed($context["message"], 85, $this->source)]);
                // line 86
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, true, 86) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 87
                yield "                ";
                $context["messages_fallback"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new RuntimeError('Variable "messages_fallback" does not exist.', 87, $this->source); })()), 87, $this->source), [$this->sandbox->ensureToStringAllowed($context["message"], 87, $this->source)]);
                // line 88
                yield "            ";
            }
            // line 89
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "
        <div class=\"sf-tabs\">
            <div class=\"tab ";
        // line 92
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "countMissings", [], "any", false, false, true, 92) == 0)) ? ("active") : (""));
        yield "\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 93, $this->source); })()), "countDefines", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    ";
        // line 100
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new RuntimeError('Variable "messages_defined" does not exist.', 100, $this->source); })()))) {
            // line 101
            yield "                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    ";
        } else {
            // line 105
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('defined_messages', $context, $blocks);
            // line 108
            yield "                    ";
        }
        // line 109
        yield "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 113
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "countFallbacks", [], "any", false, false, true, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-warning") : (""));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "countFallbacks", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    ";
        // line 121
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new RuntimeError('Variable "messages_fallback" does not exist.', 121, $this->source); })()))) {
            // line 122
            yield "                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    ";
        } else {
            // line 126
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('fallback_messages', $context, $blocks);
            // line 129
            yield "                    ";
        }
        // line 130
        yield "                </div>
            </div>

            <div class=\"tab ";
        // line 133
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 133, $this->source); })()), "countMissings", [], "any", false, false, true, 133) > 0)) ? ("active") : (""));
        yield "\">
                <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 134
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "countMissings", [], "any", false, false, true, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-error") : (""));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "countMissings", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    ";
        // line 143
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new RuntimeError('Variable "messages_missing" does not exist.', 143, $this->source); })()))) {
            // line 144
            yield "                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    ";
        } else {
            // line 148
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('missing_messages', $context, $blocks);
            // line 151
            yield "                    ";
        }
        // line 152
        yield "                </div>
            </div>
        </div>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_defined_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 106
        yield "                            ";
        yield $this->getTemplateForMacro("macro_render_table", $context, 106, $this->getSourceContext())->macro_render_table(...[(isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new RuntimeError('Variable "messages_defined" does not exist.', 106, $this->source); })())]);
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fallback_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 127
        yield "                            ";
        yield $this->getTemplateForMacro("macro_render_table", $context, 127, $this->getSourceContext())->macro_render_table(...[(isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new RuntimeError('Variable "messages_fallback" does not exist.', 127, $this->source); })()), true]);
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_missing_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 149
        yield "                            ";
        yield $this->getTemplateForMacro("macro_render_table", $context, 149, $this->getSourceContext())->macro_render_table(...[(isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new RuntimeError('Variable "messages_missing" does not exist.', 149, $this->source); })())]);
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 182
    public function macro_render_table($messages = null, $is_fallback = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "messages" => $messages,
            "is_fallback" => $is_fallback,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 183
            yield "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                ";
            // line 187
            if ((($tmp = (isset($context["is_fallback"]) || array_key_exists("is_fallback", $context) ? $context["is_fallback"] : (function () { throw new RuntimeError('Variable "is_fallback" does not exist.', 187, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 188
                yield "                    <th>Fallback locale</th>
                ";
            }
            // line 190
            yield "                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 197, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 198
                yield "            <tr>
                <td class=\"font-normal text-small nowrap\">";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                yield "</td>
                ";
                // line 200
                if ((($tmp = (isset($context["is_fallback"]) || array_key_exists("is_fallback", $context) ? $context["is_fallback"] : (function () { throw new RuntimeError('Variable "is_fallback" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 201
                    yield "                    <td class=\"font-normal text-small nowrap\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", true, true, true, 201)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", false, false, true, 201), 201, $this->source), "-")) : ("-")), "html", null, true);
                    yield "</td>
                ";
                }
                // line 203
                yield "                <td class=\"font-normal text-small text-bold nowrap\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                yield "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "count", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                yield "</td>
                <td>
                    <span class=\"";
                // line 206
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, true, 206), 206, $this->source)) < 64)) ? ("nowrap") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                yield "</span>

                    ";
                // line 208
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["message"], "transChoiceNumber", [], "any", false, false, true, 208))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 209
                    yield "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 211
                yield "
                    ";
                // line 212
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, true, 212)) > 0)) {
                    // line 213
                    yield "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 215
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
                    yield "\" class=\"hidden\">
                            ";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, true, 216));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 217
                        yield "                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["parameters"], 217, $this->source), 1);
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['parameters'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    yield "                        </div>
                    ";
                }
                // line 221
                yield "                </td>
                <td class=\"prewrap\">";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "translation", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            yield "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/translation.html.twig";
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
        return array (  729 => 225,  712 => 222,  709 => 221,  705 => 219,  696 => 217,  692 => 216,  688 => 215,  682 => 213,  680 => 212,  677 => 211,  673 => 209,  671 => 208,  664 => 206,  659 => 204,  654 => 203,  648 => 201,  646 => 200,  642 => 199,  639 => 198,  622 => 197,  613 => 190,  609 => 188,  607 => 187,  601 => 183,  582 => 182,  568 => 149,  555 => 148,  541 => 127,  528 => 126,  514 => 106,  501 => 105,  486 => 152,  483 => 151,  480 => 148,  474 => 144,  472 => 143,  458 => 134,  454 => 133,  449 => 130,  446 => 129,  443 => 126,  437 => 122,  435 => 121,  422 => 113,  416 => 109,  413 => 108,  410 => 105,  404 => 101,  402 => 100,  392 => 93,  388 => 92,  384 => 90,  378 => 89,  375 => 88,  372 => 87,  369 => 86,  366 => 85,  363 => 84,  360 => 83,  357 => 82,  352 => 81,  349 => 80,  346 => 78,  333 => 77,  321 => 179,  316 => 176,  307 => 173,  303 => 172,  300 => 171,  296 => 170,  284 => 160,  282 => 159,  279 => 158,  276 => 157,  273 => 77,  267 => 73,  265 => 72,  256 => 66,  252 => 65,  245 => 61,  239 => 57,  226 => 56,  214 => 53,  208 => 50,  205 => 49,  202 => 48,  200 => 47,  195 => 45,  188 => 44,  175 => 43,  161 => 39,  158 => 38,  151 => 35,  142 => 29,  138 => 28,  129 => 22,  125 => 21,  117 => 16,  112 => 13,  110 => 12,  107 => 11,  100 => 9,  97 => 8,  95 => 7,  90 => 6,  87 => 5,  84 => 4,  71 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countDefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    {{ collector.locale|default('-') }}
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countDefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: profiler_url, status: status_color}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.locale|default('-') }}</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.fallbackLocales|join(', ')|default('-') }}</span>
            <span class=\"label\">Fallback locale{{ collector.fallbackLocales|length != 1 ? 's' }}</span>
        </div>
    </div>

    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty empty-panel\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {% block messages %}

        {# sort translation messages in groups #}
        {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
        {% for message in collector.messages %}
            {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
                {% set messages_defined = messages_defined|merge([message]) %}
            {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
                {% set messages_missing = messages_missing|merge([message]) %}
            {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
                {% set messages_fallback = messages_fallback|merge([message]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab {{ collector.countMissings == 0 ? 'active' }}\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ collector.countDefines }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    {% if messages_defined is empty %}
                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    {% else %}
                        {% block defined_messages %}
                            {{ _self.render_table(messages_defined) }}
                        {% endblock %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge {{ collector.countFallbacks ? 'status-warning' }}\">{{ collector.countFallbacks }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    {% if messages_fallback is empty %}
                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    {% else %}
                        {% block fallback_messages %}
                            {{ _self.render_table(messages_fallback, true) }}
                        {% endblock %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.countMissings > 0 ? 'active' }}\">
                <h3 class=\"tab-title\">Missing <span class=\"badge {{ collector.countMissings ? 'status-error' }}\">{{ collector.countMissings }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    {% if messages_missing is empty %}
                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    {% else %}
                        {% block missing_messages %}
                            {{ _self.render_table(messages_missing) }}
                        {% endblock %}
                    {% endif %}
                </div>
            </div>
        </div>

        {% endblock messages %}
    {% endif %}

    {% if collector.globalParameters|default([]) %}
        <h2>Global parameters</h2>

        <table>
            <thead>
            <tr>
                <th>Message ID</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            {% for id, value in collector.globalParameters %}
                <tr>
                    <td class=\"font-normal text-small nowrap\">{{ id }}</td>
                    <td class=\"font-normal text-small nowrap\">{{ profiler_dump(value) }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

{% endblock %}

{% macro render_table(messages, is_fallback) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                {% if is_fallback %}
                    <th>Fallback locale</th>
                {% endif %}
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small nowrap\">{{ message.locale }}</td>
                {% if is_fallback %}
                    <td class=\"font-normal text-small nowrap\">{{ message.fallbackLocale|default('-') }}</td>
                {% endif %}
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small nowrap\">{{ message.count }}</td>
                <td>
                    <span class=\"{{ message.id|length < 64 ? 'nowrap' }}\">{{ message.id }}</span>

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth: 1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"prewrap\">{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/var/www/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/translation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "macro" => 182, "if" => 4, "set" => 5, "block" => 77, "for" => 170];
        static $filters = ["length" => 4, "escape" => 9, "default" => 16, "join" => 65, "merge" => 83];
        static $functions = ["source" => 6, "include" => 39, "profiler_dump" => 173, "constant" => 82];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'macro', 'if', 'set', 'block', 'for'],
                ['length', 'escape', 'default', 'join', 'merge'],
                ['source', 'include', 'profiler_dump', 'constant'],
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
