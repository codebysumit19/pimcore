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

/* @PimcoreAdmin/admin/misc/admin_css.html.twig */
class __TwigTemplate_55e3bb7ea3666852f5f481ad4229adc4 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/misc/admin_css.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/misc/admin_css.html.twig"));

        // line 1
        yield "/**
* This source file is available under the terms of the
* Pimcore Open Core License (POCL)
* Full copyright and license information is available in
* LICENSE.md which is distributed with this source code.
*
*  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.com)
*  @license    Pimcore Open Core License (POCL)
*/

/* THIS FILE IS GENERATED DYNAMICALLY BECAUSE OF DYNAMIC CSS CLASSES IN THE ADMIN */

";
        // line 14
        if ((array_key_exists("customviews", $context) && is_iterable((isset($context["customviews"]) || array_key_exists("customviews", $context) ? $context["customviews"] : (function () { throw new RuntimeError('Variable "customviews" does not exist.', 14, $this->source); })())))) {
            // line 15
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["customviews"]) || array_key_exists("customviews", $context) ? $context["customviews"] : (function () { throw new RuntimeError('Variable "customviews" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cv"]) {
                // line 16
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["cv"], "icon", [], "array", true, true, true, 16)) {
                    // line 17
                    yield "            ";
                    $context["treetype"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cv"], "treetype", [], "array", false, false, true, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["cv"], "treetype", [], "array", false, false, true, 17)) : ("object"));
                    // line 18
                    yield ".pimcore_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["treetype"]) || array_key_exists("treetype", $context) ? $context["treetype"] : (function () { throw new RuntimeError('Variable "treetype" does not exist.', 18, $this->source); })()), 18, $this->source), "html", null, true);
                    yield "_customview_icon_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cv"], "id", [], "array", false, false, true, 18), 18, $this->source), "html", null, true);
                    yield " {
    background: center / contain url(";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cv"], "icon", [], "array", false, false, true, 19), 19, $this->source), "html", null, true);
                    yield ") no-repeat !important;
}
        ";
                }
                // line 22
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cv'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 24
        yield "
";
        // line 26
        if ((array_key_exists("languages", $context) && is_iterable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 26, $this->source); })())))) {
            // line 27
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 28
                yield "        ";
                $context["iconFile"] = Pimcore\Bundle\AdminBundle\Tool::getLanguageFlagFile($this->sandbox->ensureToStringAllowed($context["language"], 28, $this->source), false);
                // line 29
                yield "/* tab icon for localized fields [ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 29, $this->source), "html", null, true);
                yield " ] */
.pimcore_icon_language_";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["language"], 30, $this->source)), "html", null, true);
                yield " {
    background: url(";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["iconFile"]) || array_key_exists("iconFile", $context) ? $context["iconFile"] : (function () { throw new RuntimeError('Variable "iconFile" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                yield ") center center/contain no-repeat;
}

/* grid column header icon in translations [ ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 34, $this->source), "html", null, true);
                yield " ] */
.x-column-header_";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["language"], 35, $this->source)), "html", null, true);
                yield " {
    background: url(";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["iconFile"]) || array_key_exists("iconFile", $context) ? $context["iconFile"] : (function () { throw new RuntimeError('Variable "iconFile" does not exist.', 36, $this->source); })()), 36, $this->source), "html", null, true);
                yield ") no-repeat left center/contain !important;
    padding-left:22px !important;
}
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 41
        yield "
";
        // line 43
        if ((array_key_exists("adminSettings", $context) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["adminSettings"] ?? null), "branding", [], "array", false, true, true, 43), "color_admin_interface", [], "array", true, true, true, 43))) {
            // line 44
            yield "    ";
            $context["interfaceColor"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["adminSettings"]) || array_key_exists("adminSettings", $context) ? $context["adminSettings"] : (function () { throw new RuntimeError('Variable "adminSettings" does not exist.', 44, $this->source); })()), "branding", [], "array", false, false, true, 44), "color_admin_interface", [], "array", false, false, true, 44);
            // line 45
            yield "#pimcore_signet {
    background-color: ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["interfaceColor"]) || array_key_exists("interfaceColor", $context) ? $context["interfaceColor"] : (function () { throw new RuntimeError('Variable "interfaceColor" does not exist.', 46, $this->source); })()), 46, $this->source), "html", null, true);
            yield " !important;
}

#pimcore_avatar {
    background-color: ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["interfaceColor"]) || array_key_exists("interfaceColor", $context) ? $context["interfaceColor"] : (function () { throw new RuntimeError('Variable "interfaceColor" does not exist.', 50, $this->source); })()), 50, $this->source), "html", null, true);
            yield " !important;
}

#pimcore_navigation li:hover:after {
    background-color: ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["interfaceColor"]) || array_key_exists("interfaceColor", $context) ? $context["interfaceColor"] : (function () { throw new RuntimeError('Variable "interfaceColor" does not exist.', 54, $this->source); })()), 54, $this->source), "html", null, true);
            yield " !important;
}
";
        }
        // line 57
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PimcoreAdmin/admin/misc/admin_css.html.twig";
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
        return array (  175 => 57,  169 => 54,  162 => 50,  155 => 46,  152 => 45,  149 => 44,  147 => 43,  144 => 41,  133 => 36,  129 => 35,  125 => 34,  119 => 31,  115 => 30,  110 => 29,  107 => 28,  102 => 27,  100 => 26,  97 => 24,  90 => 22,  84 => 19,  77 => 18,  74 => 17,  71 => 16,  66 => 15,  64 => 14,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("/**
* This source file is available under the terms of the
* Pimcore Open Core License (POCL)
* Full copyright and license information is available in
* LICENSE.md which is distributed with this source code.
*
*  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.com)
*  @license    Pimcore Open Core License (POCL)
*/

/* THIS FILE IS GENERATED DYNAMICALLY BECAUSE OF DYNAMIC CSS CLASSES IN THE ADMIN */

{# custom views #}
{% if customviews is defined and customviews is iterable %}
    {% for cv in customviews %}
        {%  if cv['icon'] is defined %}
            {% set treetype = cv[\"treetype\"] ? cv[\"treetype\"] : \"object\" %}
.pimcore_{{ treetype }}_customview_icon_{{ cv[\"id\"] }} {
    background: center / contain url({{ cv[\"icon\"] }}) no-repeat !important;
}
        {% endif %}
    {% endfor %}
{% endif %}

{# language icons #}
{% if languages is defined and languages is iterable %}
    {% for language in languages %}
        {% set iconFile = pimcore_language_flag(language, false) %}
/* tab icon for localized fields [ {{ language }} ] */
.pimcore_icon_language_{{ language|lower }} {
    background: url({{ iconFile }}) center center/contain no-repeat;
}

/* grid column header icon in translations [ {{ language }} ] */
.x-column-header_{{ language|lower }} {
    background: url({{ iconFile }}) no-repeat left center/contain !important;
    padding-left:22px !important;
}
    {% endfor %}
{% endif %}

{# CUSTOM BRANDING #}
{% if adminSettings is defined and adminSettings['branding']['color_admin_interface'] is defined %}
    {% set interfaceColor = adminSettings['branding']['color_admin_interface'] %}
#pimcore_signet {
    background-color: {{ interfaceColor }} !important;
}

#pimcore_avatar {
    background-color: {{ interfaceColor }} !important;
}

#pimcore_navigation li:hover:after {
    background-color: {{ interfaceColor }} !important;
}
{% endif %}

", "@PimcoreAdmin/admin/misc/admin_css.html.twig", "/var/www/my-project/vendor/pimcore/admin-ui-classic-bundle/templates/admin/misc/admin_css.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14, "for" => 15, "set" => 17];
        static $filters = ["escape" => 18, "lower" => 30];
        static $functions = ["pimcore_language_flag" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'lower'],
                ['pimcore_language_flag'],
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
