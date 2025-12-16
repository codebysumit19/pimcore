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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_74c567cc0e1f5ee1d52061f20e66a2e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

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
        .sf-profiler-httpclient-requests thead th {
            vertical-align: top;
        }
        .sf-profiler-httpclient-requests .http-method {
            border: 1px solid var(--header-status-request-method-color);
            border-radius: 5px;
            color: var(--header-status-request-method-color);
            display: inline-block;
            font-weight: 500;
            line-height: 1;
            margin-right: 6px;
            padding: 2px 4px;
            text-align: center;
            white-space: nowrap;
        }
        .sf-profiler-httpclient-requests .status-response-status-code {
            background: var(--gray-600);
            border-radius: 4px;
            color: var(--white);
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 2px;
            padding: 1px 3px;
        }
        .sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 39, $this->source); })()), "requestCount", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/http-client.svg");
                yield "
            ";
                // line 42
                $context["status_color"] = "";
                // line 43
                yield "            <span class=\"sf-toolbar-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "requestCount", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "
        ";
            // line 46
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 47
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "requestCount", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status ";
                // line 53
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "errorCount", [], "any", false, false, true, 53) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "errorCount", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            yield "
        ";
            // line 57
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => $this->sandbox->ensureToStringAllowed((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 57, $this->source); })()), 57, $this->source), "status" => $this->sandbox->ensureToStringAllowed((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 57, $this->source); })()), 57, $this->source)]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "<span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "requestCount", [], "any", false, false, true, 62) == 0)) ? ("disabled") : (""));
        yield "\">
    <span class=\"icon\">";
        // line 63
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/http-client.svg");
        yield "</span>
    <strong>HTTP Client</strong>
    ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "requestCount", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "        <span class=\"count\">
            ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "requestCount", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            yield "
        </span>
    ";
        }
        // line 70
        yield "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "    <h2>HTTP Client</h2>
    ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "requestCount", [], "any", false, false, true, 75) == 0)) {
            // line 76
            yield "        <div class=\"empty empty-panel\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 80
            yield "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "requestCount", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            yield "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "errorCount", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            yield "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "clients", [], "any", false, false, true, 92));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 93
                yield "                <div class=\"tab ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 93), 93, $this->source)) == 0)) ? ("disabled") : (""));
                yield "\">
                    <h3 class=\"tab-title\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["name"], 94, $this->source), "html", null, true);
                yield " <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 94), 94, $this->source)), "html", null, true);
                yield "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 96
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 96)) == 0)) {
                    // line 97
                    yield "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["name"], 98, $this->source), "html", null, true);
                    yield "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 101
                    yield "                            <h4>Requests</h4>
                            ";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 102));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 103
                        yield "                                ";
                        $context["profiler_token"] = "";
                        // line 104
                        yield "                                ";
                        $context["profiler_link"] = "";
                        // line 105
                        yield "                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, true, true, 105), "response_headers", [], "any", true, true, true, 105)) {
                            // line 106
                            yield "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, true, 106), "response_headers", [], "any", false, false, true, 106));
                            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                                // line 107
                                yield "                                        ";
                                if (CoreExtension::matches("/^x-debug-token: .*\$/i", $context["header"])) {
                                    // line 108
                                    yield "                                            ";
                                    $context["profiler_token"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, true, 108), 108, $this->source), Twig\Extension\CoreExtension::length($this->env->getCharset(), "x-debug-token: "));
                                    // line 109
                                    yield "                                        ";
                                }
                                // line 110
                                yield "                                        ";
                                if (CoreExtension::matches("/^x-debug-token-link: .*\$/i", $context["header"])) {
                                    // line 111
                                    yield "                                            ";
                                    $context["profiler_link"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, true, 111), 111, $this->source), Twig\Extension\CoreExtension::length($this->env->getCharset(), "x-debug-token-link: "));
                                    // line 112
                                    yield "                                        ";
                                }
                                // line 113
                                yield "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 114
                            yield "                                ";
                        }
                        // line 115
                        yield "                                <table class=\"sf-profiler-httpclient-requests\">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"http-method\">";
                        // line 119
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                        yield "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 122
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                        yield "
                                        </th>
                                        ";
                        // line 124
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 124, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 124, $this->source); })()))) {
                            // line 125
                            yield "                                            <th>
                                                Profile
                                            </th>
                                        ";
                        }
                        // line 129
                        yield "                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", true, true, true, 129) && CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, true, 129))) {
                            // line 130
                            yield "                                            <th>
                                                <button class=\"btn btn-sm hidden\" title=\"Copy as cURL\" data-clipboard-text=\"";
                            // line 131
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                            yield "\">Copy as cURL</button>
                                            </th>
                                        ";
                        }
                        // line 134
                        yield "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                        // line 137
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, true, 137))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 138
                            yield "                                        <tr>
                                            <th class=\"font-normal\">Request options</th>
                                            <td>";
                            // line 140
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, true, 140), 140, $this->source), 1);
                            yield "</td>
                                        </tr>
                                    ";
                        }
                        // line 143
                        yield "                                    <tr>
                                        <th class=\"font-normal\">Response</th>
                                        <td";
                        // line 145
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", true, true, true, 145) && CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, true, 145))) {
                            yield " colspan=\"2\"";
                        }
                        yield ">
                                            ";
                        // line 146
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 146) >= 500)) {
                            // line 147
                            yield "                                                ";
                            $context["responseStatus"] = "error";
                            // line 148
                            yield "                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 148) >= 400)) {
                            // line 149
                            yield "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 150
                            yield "                                            ";
                        } else {
                            // line 151
                            yield "                                                ";
                            $context["responseStatus"] = "success";
                            // line 152
                            yield "                                            ";
                        }
                        // line 153
                        yield "                                            <span class=\"font-normal status-response-status-code status-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["responseStatus"]) || array_key_exists("responseStatus", $context) ? $context["responseStatus"] : (function () { throw new RuntimeError('Variable "responseStatus" does not exist.', 153, $this->source); })()), 153, $this->source), "html", null, true);
                        yield "\">
                                                ";
                        // line 154
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                        yield "
                                            </span>

                                            ";
                        // line 157
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, true, 157), 157, $this->source), 1);
                        yield "
                                        </td>
                                        ";
                        // line 159
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 159, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 159, $this->source); })()))) {
                            // line 160
                            yield "                                            <td>
                                                <span><a href=\"";
                            // line 161
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 161, $this->source); })()), 161, $this->source), "html", null, true);
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 161, $this->source); })()), 161, $this->source), "html", null, true);
                            yield "</a></span>
                                            </td>
                                        ";
                        }
                        // line 164
                        yield "                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    yield "                        ";
                }
                // line 169
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "        ";
        }
        // line 173
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/http_client.html.twig";
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
        return array (  502 => 173,  499 => 172,  491 => 169,  488 => 168,  479 => 164,  471 => 161,  468 => 160,  466 => 159,  461 => 157,  455 => 154,  450 => 153,  447 => 152,  444 => 151,  441 => 150,  438 => 149,  435 => 148,  432 => 147,  430 => 146,  424 => 145,  420 => 143,  414 => 140,  410 => 138,  408 => 137,  403 => 134,  397 => 131,  394 => 130,  391 => 129,  385 => 125,  383 => 124,  378 => 122,  372 => 119,  366 => 115,  363 => 114,  357 => 113,  354 => 112,  351 => 111,  348 => 110,  345 => 109,  342 => 108,  339 => 107,  334 => 106,  331 => 105,  328 => 104,  325 => 103,  321 => 102,  318 => 101,  312 => 98,  309 => 97,  307 => 96,  300 => 94,  295 => 93,  291 => 92,  282 => 86,  275 => 82,  271 => 80,  265 => 76,  263 => 75,  260 => 74,  247 => 73,  235 => 70,  229 => 67,  226 => 66,  224 => 65,  219 => 63,  214 => 62,  201 => 61,  187 => 57,  184 => 56,  175 => 53,  168 => 49,  164 => 47,  162 => 46,  159 => 45,  152 => 43,  150 => 42,  145 => 41,  142 => 40,  139 => 39,  126 => 38,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        .sf-profiler-httpclient-requests thead th {
            vertical-align: top;
        }
        .sf-profiler-httpclient-requests .http-method {
            border: 1px solid var(--header-status-request-method-color);
            border-radius: 5px;
            color: var(--header-status-request-method-color);
            display: inline-block;
            font-weight: 500;
            line-height: 1;
            margin-right: 6px;
            padding: 2px 4px;
            text-align: center;
            white-space: nowrap;
        }
        .sf-profiler-httpclient-requests .status-response-status-code {
            background: var(--gray-600);
            border-radius: 4px;
            color: var(--white);
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 2px;
            padding: 1px 3px;
        }
        .sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.requestCount %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/http-client.svg') }}
            {% set status_color = '' %}
            <span class=\"sf-toolbar-value\">{{ collector.requestCount }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>{{ collector.requestCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status {{ collector.errorCount > 0 ? 'sf-toolbar-status-red' }}\">{{ collector.errorCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: profiler_url, status: status_color}) }}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label {{ collector.requestCount == 0 ? 'disabled' }}\">
    <span class=\"icon\">{{ source('@WebProfiler/Icon/http-client.svg') }}</span>
    <strong>HTTP Client</strong>
    {% if collector.requestCount %}
        <span class=\"count\">
            {{ collector.requestCount }}
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>HTTP Client</h2>
    {% if collector.requestCount == 0 %}
        <div class=\"empty empty-panel\">
            <p>No HTTP requests were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestCount }}</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.errorCount }}</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            {% for name, client in collector.clients %}
                <div class=\"tab {{ client.traces|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ client.traces|length }}</span></h3>
                    <div class=\"tab-content\">
                        {% if client.traces|length == 0 %}
                            <div class=\"empty\">
                                <p>No requests were made with the \"{{ name }}\" service.</p>
                            </div>
                        {% else %}
                            <h4>Requests</h4>
                            {% for trace in client.traces %}
                                {% set profiler_token = '' %}
                                {% set profiler_link = '' %}
                                {% if trace.info.response_headers is defined %}
                                    {% for header in trace.info.response_headers %}
                                        {% if header matches '/^x-debug-token: .*\$/i' %}
                                            {% set profiler_token = (header.getValue|slice('x-debug-token: '|length)) %}
                                        {% endif %}
                                        {% if header matches '/^x-debug-token-link: .*\$/i' %}
                                            {% set profiler_link = (header.getValue|slice('x-debug-token-link: '|length)) %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                <table class=\"sf-profiler-httpclient-requests\">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"http-method\">{{ trace.method }}</span>
                                        </th>
                                        <th class=\"full-width\">
                                            {{ trace.url }}
                                        </th>
                                        {% if profiler_token and profiler_link %}
                                            <th>
                                                Profile
                                            </th>
                                        {% endif %}
                                        {% if trace.curlCommand is defined and trace.curlCommand %}
                                            <th>
                                                <button class=\"btn btn-sm hidden\" title=\"Copy as cURL\" data-clipboard-text=\"{{ trace.curlCommand }}\">Copy as cURL</button>
                                            </th>
                                        {% endif %}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% if trace.options is not empty %}
                                        <tr>
                                            <th class=\"font-normal\">Request options</th>
                                            <td>{{ profiler_dump(trace.options, maxDepth: 1) }}</td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <th class=\"font-normal\">Response</th>
                                        <td{% if trace.curlCommand is defined and trace.curlCommand %} colspan=\"2\"{% endif %}>
                                            {% if trace.http_code >= 500 %}
                                                {% set responseStatus = 'error' %}
                                            {% elseif trace.http_code >= 400 %}
                                                {% set responseStatus = 'warning' %}
                                            {% else %}
                                                {% set responseStatus = 'success' %}
                                            {% endif %}
                                            <span class=\"font-normal status-response-status-code status-{{ responseStatus }}\">
                                                {{ trace.http_code }}
                                            </span>

                                            {{ profiler_dump(trace.info, maxDepth: 1) }}
                                        </td>
                                        {% if profiler_token and profiler_link %}
                                            <td>
                                                <span><a href=\"{{ profiler_link }}\" target=\"_blank\">{{ profiler_token }}</a></span>
                                            </td>
                                        {% endif %}
                                    </tr>
                                    </tbody>
                                </table>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}
", "@WebProfiler/Collector/http_client.html.twig", "/var/www/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/http_client.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 39, "set" => 40, "for" => 92];
        static $filters = ["escape" => 43, "length" => 93, "slice" => 108];
        static $functions = ["source" => 41, "include" => 57, "profiler_dump" => 140];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'set', 'for'],
                ['escape', 'length', 'slice'],
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
