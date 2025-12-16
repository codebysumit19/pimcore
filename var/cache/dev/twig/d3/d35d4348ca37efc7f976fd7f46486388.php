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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_b7ae5f5f1e7397c88045e044df1cfc83 extends Template
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
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Security";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticator-name {
            align-items: center;
            display: flex;
            gap: 16px;
        }

        #collector-content .authenticators .toggle-button {
            margin-left: auto;
        }
        #collector-content .authenticators .sf-toggle-on .toggle-button {
            transform: rotate(180deg);
        }
        #collector-content .authenticators .toggle-button svg {
            display: block;
        }

        #collector-content .authenticators th,
        #collector-content .authenticators td {
            vertical-align: baseline;
        }
        #collector-content .authenticators th,
        #collector-content .authenticators td {
            vertical-align: baseline;
        }

        #collector-content .authenticators .label {
            display: block;
            text-align: center;
        }

        #collector-content .authenticator-data {
            box-shadow: none;
            margin: 0;
        }

        #collector-content .authenticator-data tr:first-child th,
        #collector-content .authenticator-data tr:first-child td {
            border-top: 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            margin: 4px 0;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "firewall", [], "any", false, false, true, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 89
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, true, 90)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, true, 90), 90, $this->source), "n/a")) : ("n/a")), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            yield "
        ";
            // line 93
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 94
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "impersonated", [], "any", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 98, $this->source); })()), "impersonatorUser", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                }
                // line 102
                yield "
            <div class=\"sf-toolbar-info-group\">
                ";
                // line 104
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "enabled", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 105
                    yield "                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "token", [], "any", false, false, true, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 106
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                        // line 108
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                        // line 113
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "authenticated", [], "any", false, false, true, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("yellow"));
                        yield "\">";
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "authenticated", [], "any", false, false, true, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                        // line 119
                        $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), "roles", [], "any", false, false, true, 119), 119, $this->source), 1);
                        // line 120
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "roles", [], "any", false, false, true, 120), 120, $this->source)), "html", null, true);
                        yield "
                                ";
                        // line 121
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 121, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 122
                            yield "                                    +
                                    <abbr title=\"";
                            // line 123
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 123, $this->source); })()), 123, $this->source), ", "), "html", null, true);
                            yield "\">
                                        ";
                            // line 124
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 124, $this->source); })()), 124, $this->source)), "html", null, true);
                            yield " more
                                    </abbr>
                                ";
                        }
                        // line 127
                        yield "                            </span>
                        </div>

                        ";
                        // line 130
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 130, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, true, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 131
                            yield "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                            // line 134
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 134))) {
                                // line 135
                                yield "                                        none
                                    ";
                            } else {
                                // line 137
                                yield "                                        ";
                                $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 137), 137, $this->source), 1);
                                // line 138
                                yield "                                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 138, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 138), 138, $this->source)), "html", null, true);
                                yield "
                                        ";
                                // line 139
                                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 139, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 140
                                    yield "                                            +
                                            <abbr title=\"";
                                    // line 141
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 141, $this->source); })()), 141, $this->source), ", "), "html", null, true);
                                    yield "\">
                                                ";
                                    // line 142
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 142, $this->source); })()), 142, $this->source)), "html", null, true);
                                    yield " more
                                            </abbr>
                                        ";
                                }
                                // line 145
                                yield "                                    ";
                            }
                            // line 146
                            yield "                                </span>
                            </div>
                        ";
                        }
                        // line 149
                        yield "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                        // line 152
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "tokenClass", [], "any", false, false, true, 152), 152, $this->source), "html", null, true));
                        yield "</span>
                        </div>
                    ";
                    } else {
                        // line 155
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                    }
                    // line 160
                    yield "
                    ";
                    // line 161
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "firewall", [], "any", false, false, true, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 162
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                        // line 164
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 164, $this->source); })()), "firewall", [], "any", false, false, true, 164), "name", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        yield "</span>
                        </div>
                    ";
                    }
                    // line 167
                    yield "
                    ";
                    // line 168
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 168, $this->source); })()), "token", [], "any", false, false, true, 168) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 168, $this->source); })()), "logoutUrl", [], "any", false, false, true, 168))) {
                        // line 169
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "logoutUrl", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                        yield "\">Logout</a>
                                ";
                        // line 173
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "impersonated", [], "any", false, false, true, 173) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "impersonationExitPath", [], "any", false, false, true, 173))) {
                            // line 174
                            yield "                                    | <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 174, $this->source); })()), "impersonationExitPath", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
                            yield "\">Exit impersonation</a>
                                ";
                        }
                        // line 176
                        yield "                            </span>
                        </div>
                    ";
                    }
                    // line 179
                    yield "                ";
                } else {
                    // line 180
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
                }
                // line 184
                yield "            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 186
            yield "
        ";
            // line 187
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => $this->sandbox->ensureToStringAllowed((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 187, $this->source); })()), 187, $this->source)]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
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

        // line 192
        yield "    <span class=\"label ";
        yield ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "firewall", [], "any", false, false, true, 192) ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "token", [], "any", false, false, true, 192))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 193
        yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
        yield "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
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

        // line 199
        yield "    <h2>Security</h2>
    ";
        // line 200
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 200, $this->source); })()), "enabled", [], "any", false, false, true, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 201
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 202
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 202, $this->source); })()), "token", [], "any", false, false, true, 202))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 206
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 206, $this->source); })()), "token", [], "any", false, false, true, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 207
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "user", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
                yield "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 214
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 214, $this->source); })()), "authenticated", [], "any", false, false, true, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>

                            ";
                // line 218
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 218, $this->source); })()), "authProfileToken", [], "any", false, false, true, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 219
                    yield "                                <div class=\"metric\">
                                    <span class=\"value\">
                                        <a href=\"";
                    // line 221
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 221, $this->source); })()), "authProfileToken", [], "any", false, false, true, 221), 221, $this->source), "panel" => "security"]), "html", null, true);
                    yield "\">";
                    // line 222
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 222, $this->source); })()), "authProfileToken", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                    // line 223
                    yield "</a>
                                    </span>
                                    <span class=\"label\">From</span>
                                </div>
                            ";
                }
                // line 228
                yield "                        </div>

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
                // line 241
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 241, $this->source); })()), "roles", [], "any", false, false, true, 241))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 241, $this->source); })()), "roles", [], "any", false, false, true, 241), 241, $this->source), 1)));
                yield "

                                        ";
                // line 243
                if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 243, $this->source); })()), "authenticated", [], "any", false, false, true, 243) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 243, $this->source); })()), "roles", [], "any", false, false, true, 243)))) {
                    // line 244
                    yield "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 246
                yield "                                    </td>
                                </tr>

                                ";
                // line 249
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 249, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, true, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 250
                    yield "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 252
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 252))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 252), 252, $this->source), 1)));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 255
                yield "
                                ";
                // line 256
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 256, $this->source); })()), "token", [], "any", false, false, true, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 257
                    yield "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 259
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "token", [], "any", false, false, true, 259), 259, $this->source));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 262
                yield "                            </tbody>
                        </table>
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 264
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 264, $this->source); })()), "enabled", [], "any", false, false, true, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "                        <div class=\"empty\">
                            <p>
                                There is no security token.
                                ";
                // line 268
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 268, $this->source); })()), "deauthProfileToken", [], "any", false, false, true, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 269
                    yield "                                    It was removed in
                                    <a href=\"";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 270, $this->source); })()), "deauthProfileToken", [], "any", false, false, true, 270), 270, $this->source), "panel" => "security"]), "html", null, true);
                    yield "\">";
                    // line 271
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 271, $this->source); })()), "deauthProfileToken", [], "any", false, false, true, 271), 271, $this->source), "html", null, true);
                    // line 272
                    yield "</a>.
                                ";
                }
                // line 274
                yield "                            </p>
                        </div>
                    ";
            }
            // line 277
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 280
            yield ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 280, $this->source); })()), "firewall", [], "any", false, false, true, 280) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 280, $this->source); })()), "firewall", [], "any", false, false, true, 280), "security_enabled", [], "any", false, false, true, 280)))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 283
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 283, $this->source); })()), "firewall", [], "any", false, false, true, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 284
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 286, $this->source); })()), "firewall", [], "any", false, false, true, 286), "name", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                yield "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 290
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 290, $this->source); })()), "firewall", [], "any", false, false, true, 290), "security_enabled", [], "any", false, false, true, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 294
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 294, $this->source); })()), "firewall", [], "any", false, false, true, 294), "stateless", [], "any", false, false, true, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 299
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 299, $this->source); })()), "firewall", [], "any", false, false, true, 299), "security_enabled", [], "any", false, false, true, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 300
                    yield "                            <h4>Configuration</h4>
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
                    // line 311
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 311, $this->source); })()), "firewall", [], "any", false, false, true, 311), "provider", [], "any", false, false, true, 311)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 311, $this->source); })()), "firewall", [], "any", false, false, true, 311), "provider", [], "any", false, false, true, 311), 311, $this->source), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 315
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 315, $this->source); })()), "firewall", [], "any", false, false, true, 315), "context", [], "any", false, false, true, 315)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 315, $this->source); })()), "firewall", [], "any", false, false, true, 315), "context", [], "any", false, false, true, 315), 315, $this->source), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 319
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 319, $this->source); })()), "firewall", [], "any", false, false, true, 319), "entry_point", [], "any", false, false, true, 319)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 319, $this->source); })()), "firewall", [], "any", false, false, true, 319), "entry_point", [], "any", false, false, true, 319), 319, $this->source), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 323
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 323, $this->source); })()), "firewall", [], "any", false, false, true, 323), "user_checker", [], "any", false, false, true, 323)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 323, $this->source); })()), "firewall", [], "any", false, false, true, 323), "user_checker", [], "any", false, false, true, 323), 323, $this->source), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 327
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 327, $this->source); })()), "firewall", [], "any", false, false, true, 327), "access_denied_handler", [], "any", false, false, true, 327)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 327, $this->source); })()), "firewall", [], "any", false, false, true, 327), "access_denied_handler", [], "any", false, false, true, 327), 327, $this->source), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 331
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "firewall", [], "any", false, false, true, 331), "access_denied_url", [], "any", false, false, true, 331)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "firewall", [], "any", false, false, true, 331), "access_denied_url", [], "any", false, false, true, 331), 331, $this->source), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 335
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 335, $this->source); })()), "firewall", [], "any", false, false, true, 335), "authenticators", [], "any", false, false, true, 335))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 335, $this->source); })()), "firewall", [], "any", false, false, true, 335), "authenticators", [], "any", false, false, true, 335), 335, $this->source), 1)));
                    yield "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 340
                yield "                    ";
            }
            // line 341
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 344
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, true, 344)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 344, $this->source); })()), "listeners", [], "any", false, false, true, 344), 344, $this->source), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 347
            if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, true, 347)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 347, $this->source); })()), "listeners", [], "any", false, false, true, 347), [])) : ([])))) {
                // line 348
                yield "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 352
                yield "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 361
                $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 361, $this->source); })()), "listeners", [], "any", false, false, true, 361), 361, $this->source));
                // line 362
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 362, $this->source); })()), "listeners", [], "any", false, false, true, 362));
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
                    // line 363
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 363) || ($context["listener"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 363, $this->source); })())))) {
                        // line 364
                        yield "                                    ";
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 365
                            yield "                                        </tbody>
                                    ";
                        }
                        // line 367
                        yield "                                    <tbody>
                                    ";
                        // line 368
                        $context["previous_event"] = $context["listener"];
                        // line 369
                        yield "                                ";
                    }
                    // line 370
                    yield "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 372
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, true, 372), 372, $this->source));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 373
                    yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, true, 373))) ? ("(none)") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f ms", (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, true, 373) * 1000)), "html", null, true)));
                    yield "</td>
                                    <td class=\"font-normal\">";
                    // line 374
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, true, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, true, 374), 374, $this->source))) : ("(none)"));
                    yield "</td>
                                </tr>

                                ";
                    // line 377
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 378
                        yield "                                    </tbody>
                                ";
                    }
                    // line 380
                    yield "                            ";
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
                unset($context['_seq'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                yield "                        </table>
                    ";
            }
            // line 383
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 386
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, true, 386)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 386, $this->source); })()), "authenticators", [], "any", false, false, true, 386), 386, $this->source), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 389
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, true, 389)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 389, $this->source); })()), "authenticators", [], "any", false, false, true, 389), [])) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 390
                yield "                        <table class=\"authenticators\">
                            <colgroup>
                                <col>
                                <col style=\"width: 100%\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Authenticator</th>
                            </tr>
                            </thead>
                            ";
                // line 401
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 401, $this->source); })()), "authenticators", [], "any", false, false, true, 401));
                foreach ($context['_seq'] as $context["i"] => $context["authenticator"]) {
                    // line 402
                    yield "                                <tr class=\"sf-toggle\"
                                    data-toggle-selector=\"#authenticator-";
                    // line 403
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["i"], 403, $this->source), "html", null, true);
                    yield "\"
                                    data-toggle-initial=\"";
                    // line 404
                    yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, true, 404))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("display") : (""));
                    yield "\"
                                >
                                    <td class=\"font-normal text-small\">
                                        ";
                    // line 407
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, true, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 408
                        yield "                                            ";
                        [$context["status_text"], $context["label_status"]] =                         ["success", "success"];
                        // line 409
                        yield "                                        ";
                    } elseif ((null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, true, 409))) {
                        // line 410
                        yield "                                            ";
                        [$context["status_text"], $context["label_status"]] =                         ["skipped", false];
                        // line 411
                        yield "                                        ";
                    } else {
                        // line 412
                        yield "                                            ";
                        [$context["status_text"], $context["label_status"]] =                         ["failure", "error"];
                        // line 413
                        yield "                                        ";
                    }
                    // line 414
                    yield "                                        <span class=\"label ";
                    yield (((($tmp = (isset($context["label_status"]) || array_key_exists("label_status", $context) ? $context["label_status"] : (function () { throw new RuntimeError('Variable "label_status" does not exist.', 414, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("status-" . $this->sandbox->ensureToStringAllowed((isset($context["label_status"]) || array_key_exists("label_status", $context) ? $context["label_status"] : (function () { throw new RuntimeError('Variable "label_status" does not exist.', 414, $this->source); })()), 414, $this->source)), "html", null, true)) : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 414, $this->source); })()), 414, $this->source), "html", null, true);
                    yield "</span>
                                    </td>
                                    <td>
                                        <span class=\"authenticator-name\">
                                            ";
                    // line 418
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, true, 418), 418, $this->source));
                    yield "
                                            <button class=\"btn btn-link toggle-button\" type=\"button\">
                                                ";
                    // line 420
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                    yield "
                                            </button>
                                        </span>
                                        <div id=\"authenticator-";
                    // line 423
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["i"], 423, $this->source), "html", null, true);
                    yield "\" class=\"font-normal\">
                                            ";
                    // line 424
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, true, 424) === false)) {
                        // line 425
                        yield "                                                <div class=\"empty\">
                                                    <p>This authenticator did not support the request.</p>
                                                </div>
                                            ";
                    } elseif ((null === CoreExtension::getAttribute($this->env, $this->source,                     // line 428
$context["authenticator"], "authenticated", [], "any", false, false, true, 428))) {
                        // line 429
                        yield "                                                <div class=\"empty\">
                                                    <p>An authenticator ran before this one.</p>
                                                </div>
                                            ";
                    } else {
                        // line 433
                        yield "                                                <table class=\"authenticator-data\">
                                                    <colgroup>
                                                        <col>
                                                        <col style=\"width: 100%\">
                                                    </colgroup>
                                                    <tr>
                                                        <th scope=\"row\">Lazy</th>
                                                        <td>";
                        // line 440
                        yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, true, 440))) ? ("yes") : ("no"));
                        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Duration</th>
                                                        <td>";
                        // line 444
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f ms", (CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, true, 444) * 1000)), "html", null, true);
                        yield "</td>
                                                    </tr>
                                                    ";
                        // line 446
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, true, 446)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 447
                            yield "                                                        <tr>
                                                            <th scope=\"row\">Passport</th>
                                                            <td>";
                            // line 449
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, true, 449), 449, $this->source));
                            yield "</td>
                                                        </tr>
                                                    ";
                        }
                        // line 452
                        yield "                                                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, true, 452)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 453
                            yield "                                                        <tr>
                                                            <th scope=\"row\">Badges</th>
                                                            <td>
                                                                ";
                            // line 456
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, true, 456));
                            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                                // line 457
                                yield "                                                                    <span class=\"badge badge-";
                                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "resolved", [], "any", false, false, true, 457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("resolved") : ("not_resolved"));
                                yield "\">
                                                                        ";
                                // line 458
                                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "stub", [], "any", false, false, true, 458), 458, $this->source), "html", null, true));
                                yield "
                                                                    </span>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 461
                            yield "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        // line 464
                        yield "                                                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "exception", [], "any", false, false, true, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 465
                            yield "                                                        <tr>
                                                            <th scope=\"row\">Exception</th>
                                                            <td>";
                            // line 467
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "exception", [], "any", false, false, true, 467), 467, $this->source));
                            yield "</td>
                                                        </tr>
                                                    ";
                        }
                        // line 470
                        yield "                                                </table>
                                            ";
                    }
                    // line 472
                    yield "                                        </div>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['authenticator'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 476
                yield "                        </table>
                    ";
            } else {
                // line 478
                yield "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 482
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 485
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, true, 485)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 485, $this->source); })()), "accessDecisionLog", [], "any", false, false, true, 485), 485, $this->source), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 488
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, true, 488)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 488, $this->source); })()), "voters", [], "any", false, false, true, 488), [])) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 489
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 491
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, true, 491)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 491, $this->source); })()), "voterStrategy", [], "any", false, false, true, 491), 491, $this->source), "unknown")) : ("unknown")), "html", null, true);
                yield "</span>
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
                // line 505
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 505, $this->source); })()), "voters", [], "any", false, false, true, 505));
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
                    // line 506
                    yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 507
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 507), 507, $this->source), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">";
                    // line 508
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["voter"], 508, $this->source));
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
                unset($context['_seq'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 511
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 514
            yield "                    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, true, 514)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 514, $this->source); })()), "accessDecisionLog", [], "any", false, false, true, 514), [])) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 515
                yield "                        <h2>Access decision log</h2>

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
                // line 533
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 533, $this->source); })()), "accessDecisionLog", [], "any", false, false, true, 533));
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
                    // line 534
                    yield "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 535
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 535), 535, $this->source), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 537
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, true, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 540
                    yield "
                                        </td>
                                        <td>
                                            ";
                    // line 543
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 543)) == 1)) {
                        // line 544
                        yield "                                                ";
                        $context["attribute"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 544), 544, $this->source));
                        // line 545
                        yield "                                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, true, 545)) {
                            // line 546
                            yield "                                                    Expression: <pre><code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 546, $this->source); })()), "expression", [], "any", false, false, true, 546), 546, $this->source), "html", null, true);
                            yield "</code></pre>
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 547
(isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 547, $this->source); })()), "type", [], "any", false, false, true, 547) == "string")) {
                            // line 548
                            yield "                                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 548, $this->source); })()), 548, $this->source), "html", null, true);
                            yield "
                                                ";
                        } else {
                            // line 550
                            yield "                                                     ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 550, $this->source); })()), 550, $this->source));
                            yield "
                                                ";
                        }
                        // line 552
                        yield "                                            ";
                    } else {
                        // line 553
                        yield "                                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 553), 553, $this->source));
                        yield "
                                            ";
                    }
                    // line 555
                    yield "                                        </td>
                                        <td>";
                    // line 556
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, true, 556), 556, $this->source));
                    yield "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 561
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, true, 561))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 562
                        yield "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 562), 562, $this->source));
                        // line 563
                        yield "                                            <div id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 563, $this->source); })()), 563, $this->source), "html", null, true);
                        yield "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 566
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, true, 566));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 567
                            yield "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 568
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "class", [], "array", false, false, true, 568), 568, $this->source));
                            yield "</td>
                                                            ";
                            // line 569
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 569, $this->source); })()), "voterStrategy", [], "any", false, false, true, 569) == "unanimous")) {
                                // line 570
                                yield "                                                            <td class=\"font-normal text-small\">attribute ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "attributes", [], "array", false, false, true, 570), 0, [], "array", false, false, true, 570), 570, $this->source), "html", null, true);
                                yield "</td>
                                                            ";
                            }
                            // line 572
                            yield "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 573
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, true, 573) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 574
                                yield "                                                                    GRANTED
                                                                ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 575
$context["voter_detail"], "vote", [], "array", false, false, true, 575) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 576
                                yield "                                                                    ABSTAIN
                                                                ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 577
$context["voter_detail"], "vote", [], "array", false, false, true, 577) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 578
                                yield "                                                                    DENIED
                                                                ";
                            } else {
                                // line 580
                                yield "                                                                    unknown (";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, true, 580), 580, $this->source), "html", null, true);
                                yield ")
                                                                ";
                            }
                            // line 582
                            yield "                                                                ";
                            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "reasons", [], "array", false, false, true, 582))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 583
                                yield "                                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "reasons", [], "array", false, false, true, 583));
                                foreach ($context['_seq'] as $context["_key"] => $context["voter_reason"]) {
                                    // line 584
                                    yield "                                                                        <br>";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["voter_reason"], 584, $this->source), "html", null, true);
                                    yield "
                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['voter_reason'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 586
                                yield "                                                                ";
                            }
                            // line 587
                            yield "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['voter_detail'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 590
                        yield "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 593
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 593, $this->source); })()), 593, $this->source), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 595
                    yield "                                        </td>
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
                unset($context['_seq'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 598
                yield "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 602
            yield "            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Security/Collector/security.html.twig";
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
        return array (  1346 => 602,  1340 => 598,  1324 => 595,  1319 => 593,  1314 => 590,  1306 => 587,  1303 => 586,  1294 => 584,  1289 => 583,  1286 => 582,  1280 => 580,  1276 => 578,  1274 => 577,  1271 => 576,  1269 => 575,  1266 => 574,  1264 => 573,  1261 => 572,  1255 => 570,  1253 => 569,  1249 => 568,  1246 => 567,  1242 => 566,  1235 => 563,  1232 => 562,  1230 => 561,  1222 => 556,  1219 => 555,  1213 => 553,  1210 => 552,  1204 => 550,  1198 => 548,  1196 => 547,  1191 => 546,  1188 => 545,  1185 => 544,  1183 => 543,  1178 => 540,  1176 => 537,  1171 => 535,  1168 => 534,  1151 => 533,  1131 => 515,  1128 => 514,  1123 => 511,  1106 => 508,  1102 => 507,  1099 => 506,  1082 => 505,  1065 => 491,  1061 => 489,  1059 => 488,  1053 => 485,  1048 => 482,  1042 => 478,  1038 => 476,  1029 => 472,  1025 => 470,  1019 => 467,  1015 => 465,  1012 => 464,  1007 => 461,  998 => 458,  993 => 457,  989 => 456,  984 => 453,  981 => 452,  975 => 449,  971 => 447,  969 => 446,  964 => 444,  957 => 440,  948 => 433,  942 => 429,  940 => 428,  935 => 425,  933 => 424,  929 => 423,  923 => 420,  918 => 418,  908 => 414,  905 => 413,  902 => 412,  899 => 411,  896 => 410,  893 => 409,  890 => 408,  888 => 407,  882 => 404,  878 => 403,  875 => 402,  871 => 401,  858 => 390,  856 => 389,  850 => 386,  845 => 383,  841 => 381,  827 => 380,  823 => 378,  821 => 377,  815 => 374,  811 => 373,  807 => 372,  803 => 370,  800 => 369,  798 => 368,  795 => 367,  791 => 365,  788 => 364,  785 => 363,  767 => 362,  765 => 361,  754 => 352,  748 => 348,  746 => 347,  740 => 344,  735 => 341,  732 => 340,  724 => 335,  717 => 331,  710 => 327,  703 => 323,  696 => 319,  689 => 315,  682 => 311,  669 => 300,  667 => 299,  659 => 294,  652 => 290,  645 => 286,  641 => 284,  639 => 283,  633 => 280,  628 => 277,  623 => 274,  619 => 272,  617 => 271,  614 => 270,  611 => 269,  609 => 268,  604 => 265,  602 => 264,  598 => 262,  592 => 259,  588 => 257,  586 => 256,  583 => 255,  577 => 252,  573 => 250,  571 => 249,  566 => 246,  562 => 244,  560 => 243,  555 => 241,  540 => 228,  533 => 223,  531 => 222,  528 => 221,  524 => 219,  522 => 218,  515 => 214,  507 => 209,  503 => 207,  501 => 206,  494 => 202,  491 => 201,  489 => 200,  486 => 199,  473 => 198,  458 => 193,  453 => 192,  440 => 191,  426 => 187,  423 => 186,  418 => 184,  412 => 180,  409 => 179,  404 => 176,  398 => 174,  396 => 173,  392 => 172,  387 => 169,  385 => 168,  382 => 167,  376 => 164,  372 => 162,  370 => 161,  367 => 160,  360 => 155,  354 => 152,  349 => 149,  344 => 146,  341 => 145,  335 => 142,  331 => 141,  328 => 140,  326 => 139,  321 => 138,  318 => 137,  314 => 135,  312 => 134,  307 => 131,  305 => 130,  300 => 127,  294 => 124,  290 => 123,  287 => 122,  285 => 121,  280 => 120,  278 => 119,  267 => 113,  259 => 108,  255 => 106,  252 => 105,  250 => 104,  246 => 102,  239 => 98,  234 => 95,  231 => 94,  229 => 93,  226 => 92,  220 => 90,  215 => 89,  212 => 88,  209 => 87,  196 => 86,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticator-name {
            align-items: center;
            display: flex;
            gap: 16px;
        }

        #collector-content .authenticators .toggle-button {
            margin-left: auto;
        }
        #collector-content .authenticators .sf-toggle-on .toggle-button {
            transform: rotate(180deg);
        }
        #collector-content .authenticators .toggle-button svg {
            display: block;
        }

        #collector-content .authenticators th,
        #collector-content .authenticators td {
            vertical-align: baseline;
        }
        #collector-content .authenticators th,
        #collector-content .authenticators td {
            vertical-align: baseline;
        }

        #collector-content .authenticators .label {
            display: block;
            text-align: center;
        }

        #collector-content .authenticator-data {
            box-shadow: none;
            margin: 0;
        }

        #collector-content .authenticator-data tr:first-child th,
        #collector-content .authenticator-data tr:first-child td {
            border-top: 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            margin: 4px 0;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.firewall %}
        {% set icon %}
            {{ source('@Security/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
        {% endset %}

        {% set text %}
            {% if collector.impersonated %}
                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>{{ collector.impersonatorUser }}</span>
                    </div>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-group\">
                {% if collector.enabled %}
                    {% if collector.token %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>{{ collector.user }}</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.authenticated ? 'green' : 'yellow' }}\">{{ collector.authenticated ? 'Yes' : 'No' }}</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                {% set remainingRoles = collector.roles|slice(1) %}
                                {{ collector.roles|first }}
                                {% if remainingRoles is not empty %}
                                    +
                                    <abbr title=\"{{ remainingRoles|join(', ') }}\">
                                        {{ remainingRoles|length }} more
                                    </abbr>
                                {% endif %}
                            </span>
                        </div>

                        {% if collector.supportsRoleHierarchy %}
                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    {% if collector.inheritedRoles is empty %}
                                        none
                                    {% else %}
                                        {% set remainingRoles = collector.inheritedRoles|slice(1) %}
                                        {{ collector.inheritedRoles|first }}
                                        {% if remainingRoles is not empty %}
                                            +
                                            <abbr title=\"{{ remainingRoles|join(', ') }}\">
                                                {{ remainingRoles|length }} more
                                            </abbr>
                                        {% endif %}
                                    {% endif %}
                                </span>
                            </div>
                        {% endif %}

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>{{ collector.tokenClass|abbr_class }}</span>
                        </div>
                    {% else %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    {% endif %}

                    {% if collector.firewall %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>{{ collector.firewall.name }}</span>
                        </div>
                    {% endif %}

                    {% if collector.token and collector.logoutUrl %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                                {% if collector.impersonated and collector.impersonationExitPath %}
                                    | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                                {% endif %}
                            </span>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                {% endif %}
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: profiler_url}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.firewall or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security</h2>
    {% if collector.enabled %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ collector.token is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    {% if collector.token %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.user }}</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Authenticated</span>
                            </div>

                            {% if collector.authProfileToken %}
                                <div class=\"metric\">
                                    <span class=\"value\">
                                        <a href=\"{{ path('_profiler', {token: collector.authProfileToken, panel: 'security'}) }}\">
                                            {{- collector.authProfileToken -}}
                                        </a>
                                    </span>
                                    <span class=\"label\">From</span>
                                </div>
                            {% endif %}
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
                                        {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth: 1) }}

                                        {% if not collector.authenticated and collector.roles is empty %}
                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        {% endif %}
                                    </td>
                                </tr>

                                {% if collector.supportsRoleHierarchy %}
                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth: 1) }}</td>
                                </tr>
                                {% endif %}

                                {% if collector.token %}
                                <tr>
                                    <th>Token</th>
                                    <td>{{ profiler_dump(collector.token) }}</td>
                                </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    {% elseif collector.enabled %}
                        <div class=\"empty\">
                            <p>
                                There is no security token.
                                {% if collector.deauthProfileToken %}
                                    It was removed in
                                    <a href=\"{{ path('_profiler', {token: collector.deauthProfileToken, panel: 'security'}) }}\">
                                        {{- collector.deauthProfileToken -}}
                                    </a>.
                                {% endif %}
                            </p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ (not collector.firewall or collector.firewall.security_enabled is empty) ? 'disabled' }}\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    {% if collector.firewall %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.firewall.name }}</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        {% if collector.firewall.security_enabled %}
                            <h4>Configuration</h4>
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
                                        <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>{{ collector.firewall.context ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>{{ collector.firewall.authenticators is empty ? '(none)' : profiler_dump(collector.firewall.authenticators, maxDepth: 1) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        {% endif %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.listeners|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    {% if collector.listeners|default([]) is empty %}
                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    {% else %}
                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            {% set previous_event = (collector.listeners|first) %}
                            {% for listener in collector.listeners %}
                                {% if loop.first or listener != previous_event %}
                                    {% if not loop.first %}
                                        </tbody>
                                    {% endif %}
                                    <tbody>
                                    {% set previous_event = listener %}
                                {% endif %}

                                <tr>
                                    <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                    <td class=\"no-wrap\">{{ listener.time is null ? '(none)' : '%0.2f ms'|format(listener.time * 1000) }}</td>
                                    <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                                </tr>

                                {% if loop.last %}
                                    </tbody>
                                {% endif %}
                            {% endfor %}
                        </table>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.authenticators|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    {% if collector.authenticators|default([]) is not empty %}
                        <table class=\"authenticators\">
                            <colgroup>
                                <col>
                                <col style=\"width: 100%\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Authenticator</th>
                            </tr>
                            </thead>
                            {% for i, authenticator in collector.authenticators %}
                                <tr class=\"sf-toggle\"
                                    data-toggle-selector=\"#authenticator-{{ i }}\"
                                    data-toggle-initial=\"{{ authenticator.authenticated is not null ? 'display' }}\"
                                >
                                    <td class=\"font-normal text-small\">
                                        {% if authenticator.authenticated %}
                                            {% set status_text, label_status = 'success', 'success' %}
                                        {% elseif authenticator.authenticated is null %}
                                            {% set status_text, label_status = 'skipped', false %}
                                        {% else %}
                                            {% set status_text, label_status = 'failure', 'error' %}
                                        {% endif %}
                                        <span class=\"label {{ label_status ? 'status-' ~ label_status }}\">{{ status_text }}</span>
                                    </td>
                                    <td>
                                        <span class=\"authenticator-name\">
                                            {{ profiler_dump(authenticator.stub) }}
                                            <button class=\"btn btn-link toggle-button\" type=\"button\">
                                                {{ source('@WebProfiler/Icon/chevron-down.svg') }}
                                            </button>
                                        </span>
                                        <div id=\"authenticator-{{ i }}\" class=\"font-normal\">
                                            {% if authenticator.supports is same as(false) %}
                                                <div class=\"empty\">
                                                    <p>This authenticator did not support the request.</p>
                                                </div>
                                            {% elseif authenticator.authenticated is null %}
                                                <div class=\"empty\">
                                                    <p>An authenticator ran before this one.</p>
                                                </div>
                                            {% else %}
                                                <table class=\"authenticator-data\">
                                                    <colgroup>
                                                        <col>
                                                        <col style=\"width: 100%\">
                                                    </colgroup>
                                                    <tr>
                                                        <th scope=\"row\">Lazy</th>
                                                        <td>{{ authenticator.supports is null ? 'yes' : 'no' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Duration</th>
                                                        <td>{{ '%0.2f ms'|format(authenticator.duration * 1000) }}</td>
                                                    </tr>
                                                    {% if authenticator.passport %}
                                                        <tr>
                                                            <th scope=\"row\">Passport</th>
                                                            <td>{{ profiler_dump(authenticator.passport) }}</td>
                                                        </tr>
                                                    {% endif %}
                                                    {% if authenticator.badges %}
                                                        <tr>
                                                            <th scope=\"row\">Badges</th>
                                                            <td>
                                                                {% for badge in authenticator.badges %}
                                                                    <span class=\"badge badge-{{ badge.resolved ? 'resolved' : 'not_resolved' }}\">
                                                                        {{ badge.stub|abbr_class }}
                                                                    </span>
                                                                {% endfor %}
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                    {% if authenticator.exception %}
                                                        <tr>
                                                            <th scope=\"row\">Exception</th>
                                                            <td>{{ profiler_dump(authenticator.exception) }}</td>
                                                        </tr>
                                                    {% endif %}
                                                </table>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </table>
                    {% else %}
                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.accessDecisionLog|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    {% if collector.voters|default([]) is not empty %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
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
                                {% for voter in collector.voters %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                    {% if collector.accessDecisionLog|default([]) is not empty %}
                        <h2>Access decision log</h2>

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
                                {% for decision in collector.accessDecisionLog %}
                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"font-normal\">
                                            {{ decision.result
                                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                                : '<span class=\"label status-error same-width\">DENIED</span>'
                                            }}
                                        </td>
                                        <td>
                                            {% if decision.attributes|length == 1 %}
                                                {% set attribute = decision.attributes|first %}
                                                {% if attribute.expression is defined %}
                                                    Expression: <pre><code>{{ attribute.expression }}</code></pre>
                                                {% elseif attribute.type == 'string' %}
                                                    {{ attribute }}
                                                {% else %}
                                                     {{ profiler_dump(attribute) }}
                                                {% endif %}
                                            {% else %}
                                                {{ profiler_dump(decision.attributes) }}
                                            {% endif %}
                                        </td>
                                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        {% if decision.voter_details is not empty %}
                                            {% set voter_details_id = 'voter-details-' ~ loop.index %}
                                            <div id=\"{{ voter_details_id }}\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    {% for voter_detail in decision.voter_details %}
                                                        <tr>
                                                            <td class=\"font-normal\">{{ profiler_dump(voter_detail['class']) }}</td>
                                                            {% if collector.voterStrategy == 'unanimous' %}
                                                            <td class=\"font-normal text-small\">attribute {{ voter_detail['attributes'][0] }}</td>
                                                            {% endif %}
                                                            <td class=\"font-normal text-small\">
                                                                {% if voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_GRANTED') %}
                                                                    GRANTED
                                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_ABSTAIN') %}
                                                                    ABSTAIN
                                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_DENIED') %}
                                                                    DENIED
                                                                {% else %}
                                                                    unknown ({{ voter_detail['vote'] }})
                                                                {% endif %}
                                                                {% if voter_detail['reasons'] is not empty %}
                                                                    {% for voter_reason in voter_detail['reasons'] %}
                                                                        <br>{{ voter_reason }}
                                                                    {% endfor %}
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ voter_details_id }}\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "/var/www/my-project/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 87, "set" => 88, "for" => 362];
        static $filters = ["escape" => 90, "default" => 90, "slice" => 119, "first" => 120, "join" => 123, "length" => 124, "abbr_class" => 152, "format" => 373];
        static $functions = ["source" => 89, "include" => 187, "path" => 221, "profiler_dump" => 241, "constant" => 573];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'set', 'for'],
                ['escape', 'default', 'slice', 'first', 'join', 'length', 'abbr_class', 'format'],
                ['source', 'include', 'path', 'profiler_dump', 'constant'],
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
