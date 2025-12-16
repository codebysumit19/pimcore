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

/* @PimcoreAdmin/admin/data_object/data_object/diff_versions.html.twig */
class __TwigTemplate_7bd91b52bb56ec45e5dc16885c158346 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/data_object/data_object/diff_versions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/data_object/data_object/diff_versions.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/object_versions.css\"/>
</head>

<body>

";
        // line 10
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 10, $this->source); })()), "getClass", [], "method", false, false, true, 10), "getFieldDefinitions", [], "method", false, false, true, 10);
        // line 11
        yield "
<table class=\"preview\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
        <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "admin"), "html", null, true);
        yield "</th>
        <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Key", [], "admin"), "html", null, true);
        yield "</th>
        ";
        // line 16
        if (array_key_exists("isImportPreview", $context)) {
            // line 17
            yield "            ";
            if (array_key_exists("isNew", $context)) {
                // line 18
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Object or unable to resolve", [], "admin"), "html", null, true);
                yield "</th>
            ";
            } else {
                // line 20
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before", [], "admin"), "html", null, true);
                yield "</th>
                <th>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After", [], "admin"), "html", null, true);
                yield "</th>
            ";
            }
            // line 23
            yield "        ";
        } else {
            // line 24
            yield "            <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version", [], "admin"), "html", null, true);
            yield " 1</th>
            <th>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version", [], "admin"), "html", null, true);
            yield " 2</th>
        ";
        }
        // line 27
        yield "    </tr>
    <tr class=\"system\">
        <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "admin"), "html", null, true);
        yield "</td>
        <td>modificationDate</td>
        ";
        // line 31
        if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
            // line 32
            yield "            <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 32, $this->source); })()), "getModificationDate", [], "method", false, false, true, 32), 32, $this->source), "Y-m-d H:i:s"), "html", null, true);
            yield "</td>
        ";
        }
        // line 34
        yield "        <td>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 34, $this->source); })()), "getModificationDate", [], "method", false, false, true, 34), 34, $this->source), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
    </tr>
    <tr class=\"system\">
        <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Path", [], "admin"), "html", null, true);
        yield "</td>
        <td>path</td>
        ";
        // line 39
        if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
            // line 40
            yield "            <td> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 40, $this->source); })()), "getRealFullPath", [], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            yield " </td>
        ";
        }
        // line 42
        yield "        ";
        $context["modifiedPathClass"] = (((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 42, $this->source); })()), "getRealFullPath", [], "method", false, false, true, 42) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 42, $this->source); })()), "getRealFullPath", [], "method", false, false, true, 42))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("modified") : (""));
        // line 43
        yield "        <td class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["modifiedPathClass"]) || array_key_exists("modifiedPathClass", $context) ? $context["modifiedPathClass"] : (function () { throw new RuntimeError('Variable "modifiedPathClass" does not exist.', 43, $this->source); })()), 43, $this->source), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 43, $this->source); })()), "getRealFullPath", [], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        yield "</td>
    </tr>
    <tr class=\"system\">
        <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published", [], "admin"), "html", null, true);
        yield "</td>
        <td>published</td>
        ";
        // line 48
        if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
            // line 49
            yield "            <td> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 49, $this->source); })()), "getPublished", [], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            yield " </td>
        ";
        }
        // line 51
        yield "        ";
        $context["modifiedPublishedClass"] = (((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 51, $this->source); })()), "getPublished", [], "method", false, false, true, 51) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 51, $this->source); })()), "getPublished", [], "method", false, false, true, 51))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("modified") : (""));
        // line 52
        yield "        <td class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["modifiedPublishedClass"]) || array_key_exists("modifiedPublishedClass", $context) ? $context["modifiedPublishedClass"] : (function () { throw new RuntimeError('Variable "modifiedPublishedClass" does not exist.', 52, $this->source); })()), 52, $this->source), "html", null, true);
        yield "\">";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 52, $this->source); })()), "getPublished", [], "method", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "</td>
    </tr>
    ";
        // line 54
        if (((isset($context["versionNote1"]) || array_key_exists("versionNote1", $context) ? $context["versionNote1"] : (function () { throw new RuntimeError('Variable "versionNote1" does not exist.', 54, $this->source); })()) || (isset($context["versionNote2"]) || array_key_exists("versionNote2", $context) ? $context["versionNote2"] : (function () { throw new RuntimeError('Variable "versionNote2" does not exist.', 54, $this->source); })()))) {
            // line 55
            yield "        <tr class=\"system\">
            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version Note", [], "admin"), "html", null, true);
            yield "</td>
            <td>&nbsp;</td>
            <td>";
            // line 58
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["versionNote1"]) || array_key_exists("versionNote1", $context) ? $context["versionNote1"] : (function () { throw new RuntimeError('Variable "versionNote1" does not exist.', 58, $this->source); })()), 58, $this->source), "html", null, true));
            yield "</td>
            <td>";
            // line 59
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["versionNote2"]) || array_key_exists("versionNote2", $context) ? $context["versionNote2"] : (function () { throw new RuntimeError('Variable "versionNote2" does not exist.', 59, $this->source); })()), 59, $this->source), "html", null, true));
            yield "</td>
        </tr>
    ";
        }
        // line 62
        yield "    <tr class=\"system\">
        <td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id", [], "admin"), "html", null, true);
        yield "</td>
        <td>id</td>
        ";
        // line 65
        if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
            // line 66
            yield "            <td> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 66, $this->source); })()), "getId", [], "method", false, false, true, 66), 66, $this->source), "html", null, true);
            yield " </td>
        ";
        }
        // line 68
        yield "        <td>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 68, $this->source); })()), "getId", [], "method", false, false, true, 68), 68, $this->source), "html", null, true);
        yield "</td>
    </tr>


    <tr class=\"\">
        <td colspan=\"3\">&nbsp;</td>
    </tr>

    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 76, $this->source); })()));
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
        foreach ($context['_seq'] as $context["fieldName"] => $context["definition"]) {
            // line 77
            yield "        ";
            if ($this->env->getTest('instanceof')->getCallable()($context["definition"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields")) {
                // line 78
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["validLanguages"]) || array_key_exists("validLanguages", $context) ? $context["validLanguages"] : (function () { throw new RuntimeError('Variable "validLanguages" does not exist.', 78, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 79
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getFieldDefinitions", [], "method", false, false, true, 79));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["lfd"]) {
                        // line 80
                        yield "                    ";
                        $context["vlContainer"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 80, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 80);
                        // line 81
                        yield "                    ";
                        $context["keyData1"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["vlContainer"]) || array_key_exists("vlContainer", $context) ? $context["vlContainer"] : (function () { throw new RuntimeError('Variable "vlContainer" does not exist.', 81, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vlContainer"]) || array_key_exists("vlContainer", $context) ? $context["vlContainer"] : (function () { throw new RuntimeError('Variable "vlContainer" does not exist.', 81, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 81), $context["language"]], "method", false, false, true, 81)) : (null));
                        // line 82
                        yield "                    ";
                        $context["v1"] = CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getVersionPreview", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 82, $this->source); })())], "method", false, false, true, 82);
                        // line 83
                        yield "
                    ";
                        // line 84
                        $context["v2Container"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 84, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 84);
                        // line 85
                        yield "                    ";
                        $context["keyData2"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["v2Container"]) || array_key_exists("v2Container", $context) ? $context["v2Container"] : (function () { throw new RuntimeError('Variable "v2Container" does not exist.', 85, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["v2Container"]) || array_key_exists("v2Container", $context) ? $context["v2Container"] : (function () { throw new RuntimeError('Variable "v2Container" does not exist.', 85, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 85), $context["language"]], "method", false, false, true, 85)) : (null));
                        // line 86
                        yield "                    ";
                        $context["v2"] = (((($tmp = (isset($context["v2Container"]) || array_key_exists("v2Container", $context) ? $context["v2Container"] : (function () { throw new RuntimeError('Variable "v2Container" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getVersionPreview", [(isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 86, $this->source); })())], "method", false, false, true, 86)) : (""));
                        // line 87
                        yield "
                    <tr ";
                        // line 88
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 88) % 2 != 0)) {
                            yield "class=\"odd\"";
                        }
                        yield ">
                    <td>";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getTitle", [], "method", false, false, true, 89), 89, $this->source), [], "admin"), "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 89, $this->source), "html", null, true);
                        yield ")</td>
                    <td>";
                        // line 90
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 90), 90, $this->source), "html", null, true);
                        yield "</td>
                        ";
                        // line 91
                        if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                            // line 92
                            yield "                        <td>";
                            yield $this->sandbox->ensureToStringAllowed((isset($context["v1"]) || array_key_exists("v1", $context) ? $context["v1"] : (function () { throw new RuntimeError('Variable "v1" does not exist.', 92, $this->source); })()), 92, $this->source);
                            yield "</td>
                    ";
                        }
                        // line 94
                        yield "                        ";
                        $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["lfd"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "isEqual", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 94, $this->source); })()), (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 94, $this->source); })())], "method", false, false, true, 94))) ? ("modified") : (""));
                        // line 95
                        yield "                        <td class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 95, $this->source); })()), 95, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->sandbox->ensureToStringAllowed((isset($context["v2"]) || array_key_exists("v2", $context) ? $context["v2"] : (function () { throw new RuntimeError('Variable "v2" does not exist.', 95, $this->source); })()), 95, $this->source);
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
                    unset($context['_seq'], $context['_key'], $context['lfd'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "        ";
            } elseif ($this->env->getTest('instanceof')->getCallable()($context["definition"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Classificationstore")) {
                // line 100
                yield "            ";
                $context["storedata1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 100, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 100);
                // line 101
                yield "            ";
                $context["storedata2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 101, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 101);
                // line 102
                yield "
            ";
                // line 103
                $context["existingGroups"] = [];
                // line 104
                yield "
            ";
                // line 105
                $context["activeGroups1"] = [];
                // line 106
                yield "            ";
                if ((($tmp = (isset($context["storedata1"]) || array_key_exists("storedata1", $context) ? $context["storedata1"] : (function () { throw new RuntimeError('Variable "storedata1" does not exist.', 106, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "                ";
                    $context["activeGroups1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["storedata1"]) || array_key_exists("storedata1", $context) ? $context["storedata1"] : (function () { throw new RuntimeError('Variable "storedata1" does not exist.', 107, $this->source); })()), "getActiveGroups", [], "method", false, false, true, 107);
                    // line 108
                    yield "            ";
                }
                // line 109
                yield "
            ";
                // line 110
                $context["activeGroups2"] = [];
                // line 111
                yield "            ";
                if ((($tmp = (isset($context["storedata2"]) || array_key_exists("storedata2", $context) ? $context["storedata2"] : (function () { throw new RuntimeError('Variable "storedata2" does not exist.', 111, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 112
                    yield "                ";
                    $context["activeGroups2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["storedata2"]) || array_key_exists("storedata2", $context) ? $context["storedata2"] : (function () { throw new RuntimeError('Variable "storedata2" does not exist.', 112, $this->source); })()), "getActiveGroups", [], "method", false, false, true, 112);
                    // line 113
                    yield "            ";
                }
                // line 114
                yield "
            ";
                // line 115
                $context["activeGroups"] = ((isset($context["activeGroups1"]) || array_key_exists("activeGroups1", $context) ? $context["activeGroups1"] : (function () { throw new RuntimeError('Variable "activeGroups1" does not exist.', 115, $this->source); })()) + (isset($context["activeGroups2"]) || array_key_exists("activeGroups2", $context) ? $context["activeGroups2"] : (function () { throw new RuntimeError('Variable "activeGroups2" does not exist.', 115, $this->source); })()));
                // line 116
                yield "
            ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeGroups"]) || array_key_exists("activeGroups", $context) ? $context["activeGroups"] : (function () { throw new RuntimeError('Variable "activeGroups" does not exist.', 117, $this->source); })()));
                foreach ($context['_seq'] as $context["activeGroupId"] => $context["enabled"]) {
                    // line 118
                    yield "                ";
                    $context["existingGroups"] = ((isset($context["existingGroups"]) || array_key_exists("existingGroups", $context) ? $context["existingGroups"] : (function () { throw new RuntimeError('Variable "existingGroups" does not exist.', 118, $this->source); })()) + [ (string)$context["activeGroupId"] => $context["enabled"]]);
                    // line 119
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['activeGroupId'], $context['enabled'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "
            ";
                // line 121
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["existingGroups"]) || array_key_exists("existingGroups", $context) ? $context["existingGroups"] : (function () { throw new RuntimeError('Variable "existingGroups" does not exist.', 121, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "                ";
                    $context["languages"] = ["default"];
                    // line 123
                    yield "                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "isLocalized", [], "method", false, false, true, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 124
                        yield "                    ";
                        $context["languages"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed((isset($context["validLanguages"]) || array_key_exists("validLanguages", $context) ? $context["validLanguages"] : (function () { throw new RuntimeError('Variable "validLanguages" does not exist.', 124, $this->source); })()), 124, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 124, $this->source); })()), 124, $this->source));
                        // line 125
                        yield "                ";
                    }
                    // line 126
                    yield "
                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["existingGroups"]) || array_key_exists("existingGroups", $context) ? $context["existingGroups"] : (function () { throw new RuntimeError('Variable "existingGroups" does not exist.', 127, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["activeGroupId"] => $context["enabled"]) {
                        // line 128
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["activeGroups1"] ?? null), $context["activeGroupId"], [], "array", true, true, true, 128) || CoreExtension::getAttribute($this->env, $this->source, ($context["activeGroups2"] ?? null), $context["activeGroupId"], [], "array", true, true, true, 128))) {
                            // line 129
                            yield "                        ";
                            $context["groupDefinition"] = Pimcore\Model\DataObject\Classificationstore\GroupConfig::getById($this->sandbox->ensureToStringAllowed($context["activeGroupId"], 129, $this->source));
                            // line 130
                            yield "                        ";
                            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["groupDefinition"]) || array_key_exists("groupDefinition", $context) ? $context["groupDefinition"] : (function () { throw new RuntimeError('Variable "groupDefinition" does not exist.', 130, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 131
                                yield "                            ";
                                $context["keyGroupRelations"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupDefinition"]) || array_key_exists("groupDefinition", $context) ? $context["groupDefinition"] : (function () { throw new RuntimeError('Variable "groupDefinition" does not exist.', 131, $this->source); })()), "getRelations", [], "method", false, false, true, 131);
                                // line 132
                                yield "
                            ";
                                // line 133
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["keyGroupRelations"]) || array_key_exists("keyGroupRelations", $context) ? $context["keyGroupRelations"] : (function () { throw new RuntimeError('Variable "keyGroupRelations" does not exist.', 133, $this->source); })()));
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
                                foreach ($context['_seq'] as $context["_key"] => $context["keyGroupRelation"]) {
                                    // line 134
                                    yield "                                ";
                                    $context["keyDef"] = $this->extensions['Pimcore\Twig\Extension\PimcoreObjectExtension']->getFieldDefinitionFromJson($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["keyGroupRelation"], "getDefinition", [], "method", false, false, true, 134), 134, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["keyGroupRelation"], "getType", [], "method", false, false, true, 134), 134, $this->source));
                                    // line 135
                                    yield "
                                ";
                                    // line 136
                                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["keyDef"]) || array_key_exists("keyDef", $context) ? $context["keyDef"] : (function () { throw new RuntimeError('Variable "keyDef" does not exist.', 136, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 137
                                        yield "                                    ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 137, $this->source); })()));
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
                                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                                            // line 138
                                            yield "                                        ";
                                            $context["keyData1"] = (((($tmp = (isset($context["storedata1"]) || array_key_exists("storedata1", $context) ? $context["storedata1"] : (function () { throw new RuntimeError('Variable "storedata1" does not exist.', 138, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["storedata1"]) || array_key_exists("storedata1", $context) ? $context["storedata1"] : (function () { throw new RuntimeError('Variable "storedata1" does not exist.', 138, $this->source); })()), "getLocalizedKeyValue", [$context["activeGroupId"], CoreExtension::getAttribute($this->env, $this->source, $context["keyGroupRelation"], "getKeyId", [], "method", false, false, true, 138), $context["language"], true, true], "method", false, false, true, 138)) : (null));
                                            // line 139
                                            yield "                                        ";
                                            $context["preview1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyDef"]) || array_key_exists("keyDef", $context) ? $context["keyDef"] : (function () { throw new RuntimeError('Variable "keyDef" does not exist.', 139, $this->source); })()), "getVersionPreview", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 139, $this->source); })())], "method", false, false, true, 139);
                                            // line 140
                                            yield "                                        ";
                                            $context["keyData2"] = (((($tmp = (isset($context["storedata2"]) || array_key_exists("storedata2", $context) ? $context["storedata2"] : (function () { throw new RuntimeError('Variable "storedata2" does not exist.', 140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["storedata2"]) || array_key_exists("storedata2", $context) ? $context["storedata2"] : (function () { throw new RuntimeError('Variable "storedata2" does not exist.', 140, $this->source); })()), "getLocalizedKeyValue", [$context["activeGroupId"], CoreExtension::getAttribute($this->env, $this->source, $context["keyGroupRelation"], "getKeyId", [], "method", false, false, true, 140), $context["language"], true, true], "method", false, false, true, 140)) : (null));
                                            // line 141
                                            yield "                                        ";
                                            $context["preview2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyDef"]) || array_key_exists("keyDef", $context) ? $context["keyDef"] : (function () { throw new RuntimeError('Variable "keyDef" does not exist.', 141, $this->source); })()), "getVersionPreview", [(isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 141, $this->source); })())], "method", false, false, true, 141);
                                            // line 142
                                            yield "
                                        <tr ";
                                            // line 143
                                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 143) % 2 != 0)) {
                                                yield "class=\"odd\"";
                                            }
                                            yield ">
                                            <td>";
                                            // line 144
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getTitle", [], "method", false, false, true, 144), 144, $this->source), [], "admin"), "html", null, true);
                                            yield "</td>
                                            <td>";
                                            // line 145
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupDefinition"]) || array_key_exists("groupDefinition", $context) ? $context["groupDefinition"] : (function () { throw new RuntimeError('Variable "groupDefinition" does not exist.', 145, $this->source); })()), "getName", [], "method", false, false, true, 145), 145, $this->source), "html", null, true);
                                            yield " - ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["keyGroupRelation"], "getName", [], "method", false, false, true, 145), 145, $this->source), "html", null, true);
                                            yield " ";
                                            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "isLocalized", [], "method", false, false, true, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/ " . $this->sandbox->ensureToStringAllowed($context["language"], 145, $this->source)), "html", null, true)) : (""));
                                            yield "</td>
                                            ";
                                            // line 146
                                            if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                                                // line 147
                                                yield "                                                <td>";
                                                yield $this->sandbox->ensureToStringAllowed((isset($context["preview1"]) || array_key_exists("preview1", $context) ? $context["preview1"] : (function () { throw new RuntimeError('Variable "preview1" does not exist.', 147, $this->source); })()), 147, $this->source);
                                                yield "</td>
                                            ";
                                            }
                                            // line 149
                                            yield "                                            ";
                                            $context["isActiveInOneVersionOnly"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["activeGroups1"] ?? null), $context["activeGroupId"], [], "array", true, true, true, 149) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["activeGroups2"] ?? null), $context["activeGroupId"], [], "array", true, true, true, 149));
                                            // line 150
                                            yield "                                            ";
                                            $context["fieldIsEqual"] = (((($this->env->getTest('instanceof')->getCallable()((isset($context["keyDef"]) || array_key_exists("keyDef", $context) ? $context["keyDef"] : (function () { throw new RuntimeError('Variable "keyDef" does not exist.', 150, $this->source); })()), "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyDef"]) || array_key_exists("keyDef", $context) ? $context["keyDef"] : (function () { throw new RuntimeError('Variable "keyDef" does not exist.', 150, $this->source); })()), "isEqual", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 150, $this->source); })()), (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 150, $this->source); })())], "method", false, false, true, 150)) || (isset($context["isActiveInOneVersionOnly"]) || array_key_exists("isActiveInOneVersionOnly", $context) ? $context["isActiveInOneVersionOnly"] : (function () { throw new RuntimeError('Variable "isActiveInOneVersionOnly" does not exist.', 150, $this->source); })()))) ? ("modified") : (""));
                                            // line 151
                                            yield "                                            <td class=\"";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 151, $this->source); })()), 151, $this->source), "html", null, true);
                                            yield "\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["preview2"]) || array_key_exists("preview2", $context) ? $context["preview2"] : (function () { throw new RuntimeError('Variable "preview2" does not exist.', 151, $this->source); })()), 151, $this->source), "html", null, true);
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
                                        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 154
                                        yield "                                ";
                                    }
                                    // line 155
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
                                unset($context['_seq'], $context['_key'], $context['keyGroupRelation'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 156
                                yield "                        ";
                            }
                            // line 157
                            yield "                    ";
                        }
                        // line 158
                        yield "                ";
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
                    unset($context['_seq'], $context['activeGroupId'], $context['enabled'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 159
                    yield "            ";
                }
                // line 160
                yield "        ";
            } elseif ($this->env->getTest('instanceof')->getCallable()($context["definition"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objectbricks")) {
                // line 161
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getAllowedTypes", [], "method", false, false, true, 161));
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
                foreach ($context['_seq'] as $context["_key"] => $context["asAllowedType"]) {
                    // line 162
                    yield "                ";
                    $context["collectionDef"] = Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($this->sandbox->ensureToStringAllowed($context["asAllowedType"], 162, $this->source));
                    // line 163
                    yield "
                ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectionDef"]) || array_key_exists("collectionDef", $context) ? $context["collectionDef"] : (function () { throw new RuntimeError('Variable "collectionDef" does not exist.', 164, $this->source); })()), "getFieldDefinitions", [], "method", false, false, true, 164));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["lfd"]) {
                        // line 165
                        yield "                    ";
                        $context["value"] = null;
                        // line 166
                        yield "
                    ";
                        // line 167
                        $context["bricks1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 167, $this->source); })()), "get", [$context["fieldName"]], "method", false, false, true, 167);
                        // line 168
                        yield "                    ";
                        $context["bricks2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 168, $this->source); })()), "get", [$context["fieldName"]], "method", false, false, true, 168);
                        // line 169
                        yield "
                    ";
                        // line 170
                        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["bricks1"]) || array_key_exists("bricks1", $context) ? $context["bricks1"] : (function () { throw new RuntimeError('Variable "bricks1" does not exist.', 170, $this->source); })())) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["bricks2"]) || array_key_exists("bricks2", $context) ? $context["bricks2"] : (function () { throw new RuntimeError('Variable "bricks2" does not exist.', 170, $this->source); })())))) {
                            // line 171
                            yield "                        ";
                            if ($this->env->getTest('instanceof')->getCallable()($context["lfd"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields")) {
                                // line 172
                                yield "                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["validLanguages"]) || array_key_exists("validLanguages", $context) ? $context["validLanguages"] : (function () { throw new RuntimeError('Variable "validLanguages" does not exist.', 172, $this->source); })()));
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
                                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                                    // line 173
                                    yield "                                ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getFieldDefinitions", [], "method", false, false, true, 173));
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
                                    foreach ($context['_seq'] as $context["_key"] => $context["localizedFieldDefinition"]) {
                                        // line 174
                                        yield "                                    <tr ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 174) % 2 != 0)) {
                                            yield "class=\"odd\"";
                                        }
                                        yield ">
                                        <td>";
                                        // line 175
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "getTitle", [], "method", false, false, true, 175), 175, $this->source), [], "admin"), "html", null, true);
                                        yield " (";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 175, $this->source), "html", null, true);
                                        yield ")</td>
                                        <td>";
                                        // line 176
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "getName", [], "method", false, false, true, 176), 176, $this->source), "html", null, true);
                                        yield "</td>

                                        ";
                                        // line 178
                                        [$context["v1"], $context["localizedBrickValue1"]] =                                         [null, null];
                                        // line 179
                                        yield "                                        ";
                                        [$context["v2"], $context["localizedBrickValue2"]] =                                         [null, null];
                                        // line 180
                                        yield "
                                        ";
                                        // line 181
                                        if ((($tmp = (isset($context["bricks1"]) || array_key_exists("bricks1", $context) ? $context["bricks1"] : (function () { throw new RuntimeError('Variable "bricks1" does not exist.', 181, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 182
                                            yield "                                            ";
                                            $context["brickGetter"] = ("get" . $this->sandbox->ensureToStringAllowed($context["asAllowedType"], 182, $this->source));
                                            // line 183
                                            yield "                                            ";
                                            $context["brick1Value"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["bricks1"]) || array_key_exists("bricks1", $context) ? $context["bricks1"] : (function () { throw new RuntimeError('Variable "bricks1" does not exist.', 183, $this->source); })()), (isset($context["brickGetter"]) || array_key_exists("brickGetter", $context) ? $context["brickGetter"] : (function () { throw new RuntimeError('Variable "brickGetter" does not exist.', 183, $this->source); })()), [], "any", false, false, true, 183);
                                            // line 184
                                            yield "
                                            ";
                                            // line 185
                                            if ((($tmp = (isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 185, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                // line 186
                                                yield "                                                ";
                                                $context["localizedBrickValues"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 186, $this->source); })()), "getLocalizedFields", [], "method", false, false, true, 186);
                                                // line 187
                                                yield "                                                ";
                                                $context["localizedBrickValue1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["localizedBrickValues"]) || array_key_exists("localizedBrickValues", $context) ? $context["localizedBrickValues"] : (function () { throw new RuntimeError('Variable "localizedBrickValues" does not exist.', 187, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "getName", [], "method", false, false, true, 187), $context["language"]], "method", false, false, true, 187);
                                                // line 188
                                                yield "                                                ";
                                                if (((isset($context["localizedBrickValue1"]) || array_key_exists("localizedBrickValue1", $context) ? $context["localizedBrickValue1"] : (function () { throw new RuntimeError('Variable "localizedBrickValue1" does not exist.', 188, $this->source); })()) != false)) {
                                                    // line 189
                                                    yield "                                                    ";
                                                    $context["v1"] = CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "getVersionPreview", [(isset($context["localizedBrickValue1"]) || array_key_exists("localizedBrickValue1", $context) ? $context["localizedBrickValue1"] : (function () { throw new RuntimeError('Variable "localizedBrickValue1" does not exist.', 189, $this->source); })())], "method", false, false, true, 189);
                                                    // line 190
                                                    yield "                                                ";
                                                } else {
                                                    // line 191
                                                    yield "                                                    ";
                                                    $context["localizedBrickValue1"] = null;
                                                    // line 192
                                                    yield "                                                ";
                                                }
                                                // line 193
                                                yield "                                            ";
                                            }
                                            // line 194
                                            yield "                                        ";
                                        }
                                        // line 195
                                        yield "
                                        ";
                                        // line 196
                                        if ((($tmp = (isset($context["bricks2"]) || array_key_exists("bricks2", $context) ? $context["bricks2"] : (function () { throw new RuntimeError('Variable "bricks2" does not exist.', 196, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 197
                                            yield "                                            ";
                                            $context["brickGetter"] = ("get" . $this->sandbox->ensureToStringAllowed($context["asAllowedType"], 197, $this->source));
                                            // line 198
                                            yield "                                            ";
                                            $context["brick2Value"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["bricks2"]) || array_key_exists("bricks2", $context) ? $context["bricks2"] : (function () { throw new RuntimeError('Variable "bricks2" does not exist.', 198, $this->source); })()), (isset($context["brickGetter"]) || array_key_exists("brickGetter", $context) ? $context["brickGetter"] : (function () { throw new RuntimeError('Variable "brickGetter" does not exist.', 198, $this->source); })()), [], "any", false, false, true, 198);
                                            // line 199
                                            yield "
                                            ";
                                            // line 200
                                            if ((($tmp = (isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                // line 201
                                                yield "                                                ";
                                                $context["localizedBrickValues"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 201, $this->source); })()), "getLocalizedFields", [], "method", false, false, true, 201);
                                                // line 202
                                                yield "                                                ";
                                                $context["localizedBrickValue2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["localizedBrickValues"]) || array_key_exists("localizedBrickValues", $context) ? $context["localizedBrickValues"] : (function () { throw new RuntimeError('Variable "localizedBrickValues" does not exist.', 202, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "getName", [], "method", false, false, true, 202), $context["language"]], "method", false, false, true, 202);
                                                // line 203
                                                yield "                                                ";
                                                if (((isset($context["localizedBrickValue2"]) || array_key_exists("localizedBrickValue2", $context) ? $context["localizedBrickValue2"] : (function () { throw new RuntimeError('Variable "localizedBrickValue2" does not exist.', 203, $this->source); })()) != false)) {
                                                    // line 204
                                                    yield "                                                    ";
                                                    $context["v2"] = CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "getVersionPreview", [(isset($context["localizedBrickValue2"]) || array_key_exists("localizedBrickValue2", $context) ? $context["localizedBrickValue2"] : (function () { throw new RuntimeError('Variable "localizedBrickValue2" does not exist.', 204, $this->source); })())], "method", false, false, true, 204);
                                                    // line 205
                                                    yield "                                                ";
                                                } else {
                                                    // line 206
                                                    yield "                                                    ";
                                                    $context["localizedBrickValue2"] = null;
                                                    // line 207
                                                    yield "                                                ";
                                                }
                                                // line 208
                                                yield "                                            ";
                                            }
                                            // line 209
                                            yield "                                        ";
                                        }
                                        // line 210
                                        yield "
                                        ";
                                        // line 211
                                        if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                                            // line 212
                                            yield "                                            <td>";
                                            yield $this->sandbox->ensureToStringAllowed((isset($context["v1"]) || array_key_exists("v1", $context) ? $context["v1"] : (function () { throw new RuntimeError('Variable "v1" does not exist.', 212, $this->source); })()), 212, $this->source);
                                            yield "</td>
                                        ";
                                        }
                                        // line 214
                                        yield "                                        ";
                                        $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["localizedFieldDefinition"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["localizedFieldDefinition"], "isEqual", [(isset($context["localizedBrickValue1"]) || array_key_exists("localizedBrickValue1", $context) ? $context["localizedBrickValue1"] : (function () { throw new RuntimeError('Variable "localizedBrickValue1" does not exist.', 214, $this->source); })()), (isset($context["localizedBrickValue2"]) || array_key_exists("localizedBrickValue2", $context) ? $context["localizedBrickValue2"] : (function () { throw new RuntimeError('Variable "localizedBrickValue2" does not exist.', 214, $this->source); })())], "method", false, false, true, 214))) ? ("modified") : (""));
                                        // line 215
                                        yield "                                        <td class=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 215, $this->source); })()), 215, $this->source), "html", null, true);
                                        yield "\">";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["v2"]) || array_key_exists("v2", $context) ? $context["v2"] : (function () { throw new RuntimeError('Variable "v2" does not exist.', 215, $this->source); })()), 215, $this->source), "html", null, true);
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
                                    unset($context['_seq'], $context['_key'], $context['localizedFieldDefinition'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 218
                                    yield "                                ";
                                    $context["break"] = true;
                                    // line 219
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
                                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 220
                                yield "                        ";
                            } else {
                                // line 221
                                yield "                            ";
                                $context["v1"] = null;
                                // line 222
                                yield "
                            ";
                                // line 223
                                if ((($tmp = (isset($context["bricks1"]) || array_key_exists("bricks1", $context) ? $context["bricks1"] : (function () { throw new RuntimeError('Variable "bricks1" does not exist.', 223, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 224
                                    yield "                                ";
                                    $context["brickGetter"] = ("get" . $this->sandbox->ensureToStringAllowed($context["asAllowedType"], 224, $this->source));
                                    // line 225
                                    yield "                                ";
                                    $context["brick1Value"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["bricks1"]) || array_key_exists("bricks1", $context) ? $context["bricks1"] : (function () { throw new RuntimeError('Variable "bricks1" does not exist.', 225, $this->source); })()), (isset($context["brickGetter"]) || array_key_exists("brickGetter", $context) ? $context["brickGetter"] : (function () { throw new RuntimeError('Variable "brickGetter" does not exist.', 225, $this->source); })()), [], "any", false, false, true, 225);
                                    // line 226
                                    yield "
                                ";
                                    // line 227
                                    if ((($tmp = (isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 227, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 228
                                        yield "                                    ";
                                        $context["brick1Value"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 228, $this->source); })()), "getValueForFieldName", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 228)], "method", false, false, true, 228);
                                        // line 229
                                        yield "                                    ";
                                        if (((isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 229, $this->source); })()) != false)) {
                                            // line 230
                                            yield "                                        ";
                                            $context["v1"] = CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getVersionPreview", [(isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 230, $this->source); })())], "method", false, false, true, 230);
                                            // line 231
                                            yield "                                    ";
                                        } else {
                                            // line 232
                                            yield "                                        ";
                                            $context["brick1Value"] = null;
                                            // line 233
                                            yield "                                    ";
                                        }
                                        // line 234
                                        yield "
                                ";
                                    }
                                    // line 236
                                    yield "                            ";
                                }
                                // line 237
                                yield "
                            ";
                                // line 238
                                $context["v2"] = null;
                                // line 239
                                yield "
                            ";
                                // line 240
                                if ((($tmp = (isset($context["bricks2"]) || array_key_exists("bricks2", $context) ? $context["bricks2"] : (function () { throw new RuntimeError('Variable "bricks2" does not exist.', 240, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 241
                                    yield "                                ";
                                    $context["brickGetter"] = ("get" . $this->sandbox->ensureToStringAllowed($context["asAllowedType"], 241, $this->source));
                                    // line 242
                                    yield "                                ";
                                    $context["brick2Value"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["bricks2"]) || array_key_exists("bricks2", $context) ? $context["bricks2"] : (function () { throw new RuntimeError('Variable "bricks2" does not exist.', 242, $this->source); })()), (isset($context["brickGetter"]) || array_key_exists("brickGetter", $context) ? $context["brickGetter"] : (function () { throw new RuntimeError('Variable "brickGetter" does not exist.', 242, $this->source); })()), [], "any", false, false, true, 242);
                                    // line 243
                                    yield "
                                ";
                                    // line 244
                                    if ((($tmp = (isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 244, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 245
                                        yield "                                    ";
                                        $context["brick2Value"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["brick2Value"] ?? null), "getValueForFieldName", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 245)], "method", true, true, true, 245) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 245, $this->source); })()), "getValueForFieldName", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 245)], "method", false, false, true, 245)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 245, $this->source); })()), "getValueForFieldName", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 245)], "method", false, false, true, 245)) : (null));
                                        // line 246
                                        yield "                                    ";
                                        if (((isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 246, $this->source); })()) != false)) {
                                            // line 247
                                            yield "                                        ";
                                            $context["v2"] = CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getVersionPreview", [(isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 247, $this->source); })())], "method", false, false, true, 247);
                                            // line 248
                                            yield "                                    ";
                                        } else {
                                            // line 249
                                            yield "                                        ";
                                            $context["brick2Value"] = null;
                                            // line 250
                                            yield "                                    ";
                                        }
                                        // line 251
                                        yield "                                ";
                                    }
                                    // line 252
                                    yield "                            ";
                                }
                                // line 253
                                yield "
                            <tr ";
                                // line 254
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 254) % 2 != 0)) {
                                    yield "class=\"odd\"";
                                }
                                yield ">
                                <td>";
                                // line 255
                                yield ((((Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["asAllowedType"], 255, $this->source)) . " - ") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getTitle", [], "method", false, false, true, 255), 255, $this->source))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getTitle", [], "method", false, false, true, 255), 255, $this->source), [], "admin"), "html", null, true)) : (""));
                                yield "</td>
                                <td>";
                                // line 256
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 256), 256, $this->source), "html", null, true);
                                yield "</td>
                                ";
                                // line 257
                                if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                                    // line 258
                                    yield "                                    <td>";
                                    yield $this->sandbox->ensureToStringAllowed((isset($context["v1"]) || array_key_exists("v1", $context) ? $context["v1"] : (function () { throw new RuntimeError('Variable "v1" does not exist.', 258, $this->source); })()), 258, $this->source);
                                    yield "</td>
                                ";
                                }
                                // line 260
                                yield "                                ";
                                $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["lfd"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "isEqual", [(isset($context["brick1Value"]) || array_key_exists("brick1Value", $context) ? $context["brick1Value"] : (function () { throw new RuntimeError('Variable "brick1Value" does not exist.', 260, $this->source); })()), (isset($context["brick2Value"]) || array_key_exists("brick2Value", $context) ? $context["brick2Value"] : (function () { throw new RuntimeError('Variable "brick2Value" does not exist.', 260, $this->source); })())], "method", false, false, true, 260))) ? ("modified") : (""));
                                // line 261
                                yield "                                <td class=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 261, $this->source); })()), 261, $this->source), "html", null, true);
                                yield "\">";
                                yield $this->sandbox->ensureToStringAllowed((isset($context["v2"]) || array_key_exists("v2", $context) ? $context["v2"] : (function () { throw new RuntimeError('Variable "v2" does not exist.', 261, $this->source); })()), 261, $this->source);
                                yield "</td>
                            </tr>
                        ";
                            }
                            // line 264
                            yield "                    ";
                        }
                        // line 265
                        yield "
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
                    unset($context['_seq'], $context['_key'], $context['lfd'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 267
                    yield "            ";
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
                unset($context['_seq'], $context['_key'], $context['asAllowedType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 268
                yield "        ";
            } elseif ($this->env->getTest('instanceof')->getCallable()($context["definition"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Fieldcollections")) {
                // line 269
                yield "            ";
                [$context["fields1"], $context["fields2"]] =                 [CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 269, $this->source); })()), "get", [$context["fieldName"]], "method", false, false, true, 269), CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 269, $this->source); })()), "get", [$context["fieldName"]], "method", false, false, true, 269)];
                // line 270
                yield "            ";
                [$context["fieldDefinitions1"], $context["fieldItems1"]] =                 [null, null];
                // line 271
                yield "            ";
                [$context["fieldDefinitions2"], $context["fieldItems2"]] =                 [null, null];
                // line 272
                yield "            ";
                $context["skipFieldItems2"] = [];
                // line 273
                yield "
            ";
                // line 274
                if ((($tmp = (isset($context["fields1"]) || array_key_exists("fields1", $context) ? $context["fields1"] : (function () { throw new RuntimeError('Variable "fields1" does not exist.', 274, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 275
                    yield "                ";
                    $context["fieldDefinitions1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields1"]) || array_key_exists("fields1", $context) ? $context["fields1"] : (function () { throw new RuntimeError('Variable "fields1" does not exist.', 275, $this->source); })()), "getItemDefinitions", [], "method", false, false, true, 275);
                    // line 276
                    yield "                ";
                    $context["fieldItems1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields1"]) || array_key_exists("fields1", $context) ? $context["fields1"] : (function () { throw new RuntimeError('Variable "fields1" does not exist.', 276, $this->source); })()), "getItems", [], "method", false, false, true, 276);
                    // line 277
                    yield "            ";
                }
                // line 278
                yield "
            ";
                // line 279
                if ((($tmp = (isset($context["fields2"]) || array_key_exists("fields2", $context) ? $context["fields2"] : (function () { throw new RuntimeError('Variable "fields2" does not exist.', 279, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 280
                    yield "                ";
                    $context["fieldDefinitions2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields2"]) || array_key_exists("fields2", $context) ? $context["fields2"] : (function () { throw new RuntimeError('Variable "fields2" does not exist.', 280, $this->source); })()), "getItemDefinitions", [], "method", false, false, true, 280);
                    // line 281
                    yield "                ";
                    $context["fieldItems2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields2"]) || array_key_exists("fields2", $context) ? $context["fields2"] : (function () { throw new RuntimeError('Variable "fields2" does not exist.', 281, $this->source); })()), "getItems", [], "method", false, false, true, 281);
                    // line 282
                    yield "            ";
                }
                // line 283
                yield "
            ";
                // line 284
                if ((is_iterable((isset($context["fieldItems1"]) || array_key_exists("fieldItems1", $context) ? $context["fieldItems1"] : (function () { throw new RuntimeError('Variable "fieldItems1" does not exist.', 284, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fieldItems1"]) || array_key_exists("fieldItems1", $context) ? $context["fieldItems1"] : (function () { throw new RuntimeError('Variable "fieldItems1" does not exist.', 284, $this->source); })())) > 0))) {
                    // line 285
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fieldItems1"]) || array_key_exists("fieldItems1", $context) ? $context["fieldItems1"] : (function () { throw new RuntimeError('Variable "fieldItems1" does not exist.', 285, $this->source); })()));
                    foreach ($context['_seq'] as $context["fkey1"] => $context["fieldItem1"]) {
                        // line 286
                        yield "                    ";
                        $context["fieldKeys1"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldDefinitions1"]) || array_key_exists("fieldDefinitions1", $context) ? $context["fieldDefinitions1"] : (function () { throw new RuntimeError('Variable "fieldDefinitions1" does not exist.', 286, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "getType", [], "method", false, false, true, 286), [], "array", false, false, true, 286), "getFieldDefinitions", [], "method", false, false, true, 286);
                        // line 287
                        yield "
                    ";
                        // line 288
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fieldItems2"] ?? null), $context["fkey1"], [], "array", true, true, true, 288) && (CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "getType", [], "method", false, false, true, 288) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldItems2"]) || array_key_exists("fieldItems2", $context) ? $context["fieldItems2"] : (function () { throw new RuntimeError('Variable "fieldItems2" does not exist.', 288, $this->source); })()), $context["fkey1"], [], "array", false, false, true, 288), "getType", [], "method", false, false, true, 288)))) {
                            // line 289
                            yield "                        ";
                            $context["ffkey2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldItems2"]) || array_key_exists("fieldItems2", $context) ? $context["fieldItems2"] : (function () { throw new RuntimeError('Variable "fieldItems2" does not exist.', 289, $this->source); })()), $context["fkey1"], [], "array", false, false, true, 289);
                            // line 290
                            yield "                        ";
                            $context["fieldKeys2"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldDefinitions2"]) || array_key_exists("fieldDefinitions2", $context) ? $context["fieldDefinitions2"] : (function () { throw new RuntimeError('Variable "fieldDefinitions2" does not exist.', 290, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ffkey2"]) || array_key_exists("ffkey2", $context) ? $context["ffkey2"] : (function () { throw new RuntimeError('Variable "ffkey2" does not exist.', 290, $this->source); })()), "getType", [], "method", false, false, true, 290), [], "array", false, false, true, 290), "getFieldDefinitions", [], "method", false, false, true, 290);
                            // line 291
                            yield "                        ";
                            $context["skipFieldItems2"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed((isset($context["skipFieldItems2"]) || array_key_exists("skipFieldItems2", $context) ? $context["skipFieldItems2"] : (function () { throw new RuntimeError('Variable "skipFieldItems2" does not exist.', 291, $this->source); })()), 291, $this->source), [$this->sandbox->ensureToStringAllowed($context["fkey1"], 291, $this->source), $this->sandbox->ensureToStringAllowed($context["fkey1"], 291, $this->source)]);
                            // line 292
                            yield "                    ";
                        }
                        // line 293
                        yield "
                    ";
                        // line 294
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fieldKeys1"]) || array_key_exists("fieldKeys1", $context) ? $context["fieldKeys1"] : (function () { throw new RuntimeError('Variable "fieldKeys1" does not exist.', 294, $this->source); })()));
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
                        foreach ($context['_seq'] as $context["fkey"] => $context["fieldKey1"]) {
                            // line 295
                            yield "                        ";
                            [$context["v2"], $context["keyData2"]] =                             [null, null];
                            // line 296
                            yield "                        ";
                            $context["keyData1"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "get", [CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "name", [], "any", false, false, true, 296)], "method", false, false, true, 296);
                            // line 297
                            yield "                        ";
                            $context["v1"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "getVersionPreview", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 297, $this->source); })())], "method", false, false, true, 297);
                            // line 298
                            yield "
                        ";
                            // line 299
                            if ((array_key_exists("ffkey2", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["fieldKeys2"] ?? null), $context["fkey"], [], "array", true, true, true, 299))) {
                                // line 300
                                yield "                            ";
                                $context["keyData2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ffkey2"]) || array_key_exists("ffkey2", $context) ? $context["ffkey2"] : (function () { throw new RuntimeError('Variable "ffkey2" does not exist.', 300, $this->source); })()), "get", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldKeys2"]) || array_key_exists("fieldKeys2", $context) ? $context["fieldKeys2"] : (function () { throw new RuntimeError('Variable "fieldKeys2" does not exist.', 300, $this->source); })()), $context["fkey"], [], "array", false, false, true, 300), "name", [], "any", false, false, true, 300)], "method", false, false, true, 300);
                                // line 301
                                yield "                            ";
                                $context["v2"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "getVersionPreview", [(isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 301, $this->source); })())], "method", false, false, true, 301);
                                // line 302
                                yield "                        ";
                            }
                            // line 303
                            yield "
                        ";
                            // line 304
                            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 304, $this->source); })())) && $this->env->getTest('instanceof')->getCallable()($context["fieldKey1"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields"))) {
                                // line 305
                                yield "                            ";
                                // line 306
                                yield "                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["validLanguages"]) || array_key_exists("validLanguages", $context) ? $context["validLanguages"] : (function () { throw new RuntimeError('Variable "validLanguages" does not exist.', 306, $this->source); })()));
                                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                                    // line 307
                                    yield "                                ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "getFieldDefinitions", [], "method", false, false, true, 307));
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
                                    foreach ($context['_seq'] as $context["_key"] => $context["lfd"]) {
                                        // line 308
                                        yield "                                    ";
                                        $context["localizedValue1"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "Localizedfields", [], "any", false, true, true, 308), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 308), $context["language"]], "method", true, true, true, 308) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "Localizedfields", [], "any", false, false, true, 308), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 308), $context["language"]], "method", false, false, true, 308)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "Localizedfields", [], "any", false, false, true, 308), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 308), $context["language"]], "method", false, false, true, 308)) : (""));
                                        // line 309
                                        yield "                                    ";
                                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 309, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 309), $context["language"]], "method", false, false, true, 309))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 310
                                            yield "                                        ";
                                            $context["localizedValue2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 310, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 310), $context["language"]], "method", false, false, true, 310);
                                            // line 311
                                            yield "                                    ";
                                        } else {
                                            // line 312
                                            yield "                                        ";
                                            $context["localizedValue2"] = "";
                                            // line 313
                                            yield "                                    ";
                                        }
                                        // line 314
                                        yield "                                    ";
                                        $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["lfd"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "isEqual", [(isset($context["localizedValue1"]) || array_key_exists("localizedValue1", $context) ? $context["localizedValue1"] : (function () { throw new RuntimeError('Variable "localizedValue1" does not exist.', 314, $this->source); })()), (isset($context["localizedValue2"]) || array_key_exists("localizedValue2", $context) ? $context["localizedValue2"] : (function () { throw new RuntimeError('Variable "localizedValue2" does not exist.', 314, $this->source); })())], "method", false, false, true, 314))) ? ("modified") : (""));
                                        // line 315
                                        yield "                                    <tr ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 315) % 2 != 0)) {
                                            yield "class=\"odd\"";
                                        }
                                        yield ">
                                        <td>";
                                        // line 316
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "type", [], "any", false, false, true, 316), 316, $this->source), "html", null, true);
                                        yield " - ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getTitle", [], "method", false, false, true, 316), 316, $this->source), [], "admin"), "html", null, true);
                                        yield " (";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 316, $this->source), "html", null, true);
                                        yield ")</td>
                                        <td>";
                                        // line 317
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "fieldName", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                                        yield " - ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 317), 317, $this->source), "html", null, true);
                                        yield "/";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 317, $this->source), "html", null, true);
                                        yield "</td>
                                        <td>";
                                        // line 318
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["localizedValue1"]) || array_key_exists("localizedValue1", $context) ? $context["localizedValue1"] : (function () { throw new RuntimeError('Variable "localizedValue1" does not exist.', 318, $this->source); })()), 318, $this->source), "html", null, true);
                                        yield "</td>
                                        <td class=\"";
                                        // line 319
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 319, $this->source); })()), 319, $this->source), "html", null, true);
                                        yield "\">";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["localizedValue2"]) || array_key_exists("localizedValue2", $context) ? $context["localizedValue2"] : (function () { throw new RuntimeError('Variable "localizedValue2" does not exist.', 319, $this->source); })()), 319, $this->source), "html", null, true);
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
                                    unset($context['_seq'], $context['_key'], $context['lfd'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 322
                                    yield "                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 323
                                yield "                        ";
                            } else {
                                // line 324
                                yield "                            <tr ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 324) % 2 != 0)) {
                                    yield "class=\"odd\"";
                                }
                                yield ">
                                <td>";
                                // line 325
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem1"], "getType", [], "method", false, false, true, 325), 325, $this->source) . " - ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "getTitle", [], "method", false, false, true, 325), 325, $this->source), [], "admin")), "html", null, true);
                                yield "</td>
                                <td>";
                                // line 326
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "name", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                                yield "</td>
                                ";
                                // line 327
                                if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                                    // line 328
                                    yield "                                    <td>";
                                    yield $this->sandbox->ensureToStringAllowed((isset($context["v1"]) || array_key_exists("v1", $context) ? $context["v1"] : (function () { throw new RuntimeError('Variable "v1" does not exist.', 328, $this->source); })()), 328, $this->source);
                                    yield "</td>
                                ";
                                }
                                // line 330
                                yield "                                ";
                                $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["fieldKey1"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey1"], "isEqual", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 330, $this->source); })()), (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 330, $this->source); })())], "method", false, false, true, 330))) ? ("modified") : (""));
                                // line 331
                                yield "                                <td class=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 331, $this->source); })()), 331, $this->source), "html", null, true);
                                yield "\">";
                                yield $this->sandbox->ensureToStringAllowed((isset($context["v2"]) || array_key_exists("v2", $context) ? $context["v2"] : (function () { throw new RuntimeError('Variable "v2" does not exist.', 331, $this->source); })()), 331, $this->source);
                                yield "</td>
                            </tr>
                        ";
                            }
                            // line 334
                            yield "                    ";
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
                        unset($context['_seq'], $context['fkey'], $context['fieldKey1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 335
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['fkey1'], $context['fieldItem1'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 336
                    yield "            ";
                }
                // line 337
                yield "
            ";
                // line 338
                if ((is_iterable((isset($context["fieldItems2"]) || array_key_exists("fieldItems2", $context) ? $context["fieldItems2"] : (function () { throw new RuntimeError('Variable "fieldItems2" does not exist.', 338, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fieldItems2"]) || array_key_exists("fieldItems2", $context) ? $context["fieldItems2"] : (function () { throw new RuntimeError('Variable "fieldItems2" does not exist.', 338, $this->source); })())) > 0))) {
                    // line 339
                    yield "
                ";
                    // line 340
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fieldItems2"]) || array_key_exists("fieldItems2", $context) ? $context["fieldItems2"] : (function () { throw new RuntimeError('Variable "fieldItems2" does not exist.', 340, $this->source); })()));
                    foreach ($context['_seq'] as $context["fkey2"] => $context["fieldItem2"]) {
                        // line 341
                        yield "                    ";
                        if (!CoreExtension::inFilter($context["fkey2"], Twig\Extension\CoreExtension::keys((isset($context["skipFieldItems2"]) || array_key_exists("skipFieldItems2", $context) ? $context["skipFieldItems2"] : (function () { throw new RuntimeError('Variable "skipFieldItems2" does not exist.', 341, $this->source); })())))) {
                            // line 342
                            yield "                        ";
                            $context["fieldKeys2"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldDefinitions2"]) || array_key_exists("fieldDefinitions2", $context) ? $context["fieldDefinitions2"] : (function () { throw new RuntimeError('Variable "fieldDefinitions2" does not exist.', 342, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "getType", [], "method", false, false, true, 342), [], "array", false, false, true, 342), "getFieldDefinitions", [], "method", false, false, true, 342);
                            // line 343
                            yield "
                        ";
                            // line 344
                            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fieldItems1"] ?? null), $context["fkey2"], [], "array", true, true, true, 344) && (CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "getType", [], "method", false, false, true, 344) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldItems1"]) || array_key_exists("fieldItems1", $context) ? $context["fieldItems1"] : (function () { throw new RuntimeError('Variable "fieldItems1" does not exist.', 344, $this->source); })()), $context["fkey2"], [], "array", false, false, true, 344), "getType", [], "method", false, false, true, 344)))) {
                                // line 345
                                yield "                            ";
                                $context["ffkey1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldItems1"]) || array_key_exists("fieldItems1", $context) ? $context["fieldItems1"] : (function () { throw new RuntimeError('Variable "fieldItems1" does not exist.', 345, $this->source); })()), $context["fkey2"], [], "array", false, false, true, 345);
                                // line 346
                                yield "                            ";
                                $context["fieldKeys1"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldDefinitions1"]) || array_key_exists("fieldDefinitions1", $context) ? $context["fieldDefinitions1"] : (function () { throw new RuntimeError('Variable "fieldDefinitions1" does not exist.', 346, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ffkey1"]) || array_key_exists("ffkey1", $context) ? $context["ffkey1"] : (function () { throw new RuntimeError('Variable "ffkey1" does not exist.', 346, $this->source); })()), "getType", [], "method", false, false, true, 346), [], "array", false, false, true, 346), "getFieldDefinitions", [], "method", false, false, true, 346);
                                // line 347
                                yield "                        ";
                            }
                            // line 348
                            yield "
                        ";
                            // line 349
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fieldKeys2"]) || array_key_exists("fieldKeys2", $context) ? $context["fieldKeys2"] : (function () { throw new RuntimeError('Variable "fieldKeys2" does not exist.', 349, $this->source); })()));
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
                            foreach ($context['_seq'] as $context["fkey"] => $context["fieldKey2"]) {
                                // line 350
                                yield "                            ";
                                [$context["v1"], $context["keyData1"]] =                                 [null, null];
                                // line 351
                                yield "                            ";
                                $context["keyData2"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "get", [CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "name", [], "any", false, false, true, 351)], "method", false, false, true, 351);
                                // line 352
                                yield "                            ";
                                $context["v2"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "getVersionPreview", [(isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 352, $this->source); })())], "method", false, false, true, 352);
                                // line 353
                                yield "
                            ";
                                // line 354
                                if ((array_key_exists("ffkey1", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["fieldKeys1"] ?? null), $context["fkey"], [], "array", true, true, true, 354))) {
                                    // line 355
                                    yield "                                ";
                                    $context["keyData1"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ffkey1"]) || array_key_exists("ffkey1", $context) ? $context["ffkey1"] : (function () { throw new RuntimeError('Variable "ffkey1" does not exist.', 355, $this->source); })()), "get", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldKeys1"]) || array_key_exists("fieldKeys1", $context) ? $context["fieldKeys1"] : (function () { throw new RuntimeError('Variable "fieldKeys1" does not exist.', 355, $this->source); })()), $context["fkey"], [], "array", false, false, true, 355), "name", [], "any", false, false, true, 355)], "method", false, false, true, 355);
                                    // line 356
                                    yield "                                ";
                                    $context["v1"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "getVersionPreview", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 356, $this->source); })())], "method", false, false, true, 356);
                                    // line 357
                                    yield "                            ";
                                }
                                // line 358
                                yield "
                            ";
                                // line 359
                                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 359, $this->source); })())) && $this->env->getTest('instanceof')->getCallable()($context["fieldKey2"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields"))) {
                                    // line 360
                                    yield "                                ";
                                    // line 361
                                    yield "                                ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["validLanguages"]) || array_key_exists("validLanguages", $context) ? $context["validLanguages"] : (function () { throw new RuntimeError('Variable "validLanguages" does not exist.', 361, $this->source); })()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                                        // line 362
                                        yield "                                    ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "getFieldDefinitions", [], "method", false, false, true, 362));
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
                                        foreach ($context['_seq'] as $context["_key"] => $context["lfd"]) {
                                            // line 363
                                            yield "                                        ";
                                            $context["localizedValue1"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "Localizedfields", [], "any", false, true, true, 363), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 363), $context["language"]], "method", true, true, true, 363) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "Localizedfields", [], "any", false, false, true, 363), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 363), $context["language"]], "method", false, false, true, 363)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "Localizedfields", [], "any", false, false, true, 363), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 363), $context["language"]], "method", false, false, true, 363)) : (""));
                                            // line 364
                                            yield "                                        ";
                                            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 364, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 364), $context["language"]], "method", false, false, true, 364))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                // line 365
                                                yield "                                            ";
                                                $context["localizedValue2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 365, $this->source); })()), "getLocalizedValue", [CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 365), $context["language"]], "method", false, false, true, 365);
                                                // line 366
                                                yield "                                        ";
                                            } else {
                                                // line 367
                                                yield "                                            ";
                                                $context["localizedValue2"] = "";
                                                // line 368
                                                yield "                                        ";
                                            }
                                            // line 369
                                            yield "                                        ";
                                            $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["lfd"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "isEqual", [(isset($context["localizedValue1"]) || array_key_exists("localizedValue1", $context) ? $context["localizedValue1"] : (function () { throw new RuntimeError('Variable "localizedValue1" does not exist.', 369, $this->source); })()), (isset($context["localizedValue2"]) || array_key_exists("localizedValue2", $context) ? $context["localizedValue2"] : (function () { throw new RuntimeError('Variable "localizedValue2" does not exist.', 369, $this->source); })())], "method", false, false, true, 369))) ? ("modified") : (""));
                                            // line 370
                                            yield "                                        <tr ";
                                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 370) % 2 != 0)) {
                                                yield "class=\"odd\"";
                                            }
                                            yield ">
                                            <td>";
                                            // line 371
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "type", [], "any", false, false, true, 371), 371, $this->source), "html", null, true);
                                            yield " - ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getTitle", [], "method", false, false, true, 371), 371, $this->source), [], "admin"), "html", null, true);
                                            yield " (";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 371, $this->source), "html", null, true);
                                            yield ")</td>
                                            <td>";
                                            // line 372
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "fieldName", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
                                            yield " - ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["lfd"], "getName", [], "method", false, false, true, 372), 372, $this->source), "html", null, true);
                                            yield "/";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["language"], 372, $this->source), "html", null, true);
                                            yield "</td>
                                            <td>";
                                            // line 373
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["localizedValue1"]) || array_key_exists("localizedValue1", $context) ? $context["localizedValue1"] : (function () { throw new RuntimeError('Variable "localizedValue1" does not exist.', 373, $this->source); })()), 373, $this->source), "html", null, true);
                                            yield "</td>
                                            <td class=\"";
                                            // line 374
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 374, $this->source); })()), 374, $this->source), "html", null, true);
                                            yield "\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["localizedValue2"]) || array_key_exists("localizedValue2", $context) ? $context["localizedValue2"] : (function () { throw new RuntimeError('Variable "localizedValue2" does not exist.', 374, $this->source); })()), 374, $this->source), "html", null, true);
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
                                        unset($context['_seq'], $context['_key'], $context['lfd'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 377
                                        yield "                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 378
                                    yield "                            ";
                                } else {
                                    // line 379
                                    yield "                                <tr ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 379) % 2 != 0)) {
                                        yield "class=\"odd\"";
                                    }
                                    yield ">
                                    <td>";
                                    // line 380
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldItem2"], "getType", [], "method", false, false, true, 380), 380, $this->source) . " - ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "getTitle", [], "method", false, false, true, 380), 380, $this->source), [], "admin")), "html", null, true);
                                    yield "</td>
                                    <td>";
                                    // line 381
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "name", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
                                    yield "</td>
                                    ";
                                    // line 382
                                    if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                                        // line 383
                                        yield "                                        <td>";
                                        yield $this->sandbox->ensureToStringAllowed((isset($context["v1"]) || array_key_exists("v1", $context) ? $context["v1"] : (function () { throw new RuntimeError('Variable "v1" does not exist.', 383, $this->source); })()), 383, $this->source);
                                        yield "</td>
                                    ";
                                    }
                                    // line 385
                                    yield "                                    ";
                                    $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["fieldKey2"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["fieldKey2"], "isEqual", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 385, $this->source); })()), (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 385, $this->source); })())], "method", false, false, true, 385))) ? ("modified") : (""));
                                    // line 386
                                    yield "                                    <td class=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 386, $this->source); })()), 386, $this->source), "html", null, true);
                                    yield "\">";
                                    yield $this->sandbox->ensureToStringAllowed((isset($context["v2"]) || array_key_exists("v2", $context) ? $context["v2"] : (function () { throw new RuntimeError('Variable "v2" does not exist.', 386, $this->source); })()), 386, $this->source);
                                    yield "</td>
                                </tr>
                            ";
                                }
                                // line 389
                                yield "                        ";
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
                            unset($context['_seq'], $context['fkey'], $context['fieldKey2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 390
                            yield "                    ";
                        }
                        // line 391
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['fkey2'], $context['fieldItem2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 392
                    yield "            ";
                }
                // line 393
                yield "        ";
            } else {
                // line 394
                yield "            ";
                $context["keyData1"] = (((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 394, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 394) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["object1"]) || array_key_exists("object1", $context) ? $context["object1"] : (function () { throw new RuntimeError('Variable "object1" does not exist.', 394, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 394)) : (null));
                // line 395
                yield "            ";
                $context["v1"] = CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getVersionPreview", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 395, $this->source); })())], "method", false, false, true, 395);
                // line 396
                yield "            ";
                $context["keyData2"] = (((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 396, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 396) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["object2"]) || array_key_exists("object2", $context) ? $context["object2"] : (function () { throw new RuntimeError('Variable "object2" does not exist.', 396, $this->source); })()), "getValueForFieldName", [$context["fieldName"]], "method", false, false, true, 396)) : (null));
                // line 397
                yield "            ";
                $context["v2"] = CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getVersionPreview", [(isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 397, $this->source); })())], "method", false, false, true, 397);
                // line 398
                yield "
            <tr ";
                // line 399
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 399) % 2 != 0)) {
                    yield "class=\"odd\"";
                }
                yield ">
                <td>";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getTitle", [], "method", false, false, true, 400), 400, $this->source), [], "admin"), "html", null, true);
                yield "</td>
                <td>";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "getName", [], "method", false, false, true, 401), 401, $this->source), "html", null, true);
                yield "</td>
                ";
                // line 402
                if (( !array_key_exists("isImportPreview", $context) ||  !array_key_exists("isNew", $context))) {
                    // line 403
                    yield "                    <td>";
                    yield $this->sandbox->ensureToStringAllowed((isset($context["v1"]) || array_key_exists("v1", $context) ? $context["v1"] : (function () { throw new RuntimeError('Variable "v1" does not exist.', 403, $this->source); })()), 403, $this->source);
                    yield "</td>
                ";
                }
                // line 405
                yield "                ";
                $context["fieldIsEqual"] = ((($this->env->getTest('instanceof')->getCallable()($context["definition"], "\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EqualComparisonInterface") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["definition"], "isEqual", [(isset($context["keyData1"]) || array_key_exists("keyData1", $context) ? $context["keyData1"] : (function () { throw new RuntimeError('Variable "keyData1" does not exist.', 405, $this->source); })()), (isset($context["keyData2"]) || array_key_exists("keyData2", $context) ? $context["keyData2"] : (function () { throw new RuntimeError('Variable "keyData2" does not exist.', 405, $this->source); })())], "method", false, false, true, 405))) ? ("modified") : (""));
                // line 406
                yield "                <td class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["fieldIsEqual"]) || array_key_exists("fieldIsEqual", $context) ? $context["fieldIsEqual"] : (function () { throw new RuntimeError('Variable "fieldIsEqual" does not exist.', 406, $this->source); })()), 406, $this->source), "html", null, true);
                yield "\">";
                yield $this->sandbox->ensureToStringAllowed((isset($context["v2"]) || array_key_exists("v2", $context) ? $context["v2"] : (function () { throw new RuntimeError('Variable "v2" does not exist.', 406, $this->source); })()), 406, $this->source);
                yield "</td>
            </tr>
        ";
            }
            // line 409
            yield "    ";
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
        unset($context['_seq'], $context['fieldName'], $context['definition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 410
        yield "</table>

</body>
</html>
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
        return "@PimcoreAdmin/admin/data_object/data_object/diff_versions.html.twig";
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
        return array (  1623 => 410,  1609 => 409,  1600 => 406,  1597 => 405,  1591 => 403,  1589 => 402,  1585 => 401,  1581 => 400,  1575 => 399,  1572 => 398,  1569 => 397,  1566 => 396,  1563 => 395,  1560 => 394,  1557 => 393,  1554 => 392,  1548 => 391,  1545 => 390,  1531 => 389,  1522 => 386,  1519 => 385,  1513 => 383,  1511 => 382,  1507 => 381,  1503 => 380,  1496 => 379,  1493 => 378,  1487 => 377,  1468 => 374,  1464 => 373,  1456 => 372,  1448 => 371,  1441 => 370,  1438 => 369,  1435 => 368,  1432 => 367,  1429 => 366,  1426 => 365,  1423 => 364,  1420 => 363,  1402 => 362,  1397 => 361,  1395 => 360,  1393 => 359,  1390 => 358,  1387 => 357,  1384 => 356,  1381 => 355,  1379 => 354,  1376 => 353,  1373 => 352,  1370 => 351,  1367 => 350,  1350 => 349,  1347 => 348,  1344 => 347,  1341 => 346,  1338 => 345,  1336 => 344,  1333 => 343,  1330 => 342,  1327 => 341,  1323 => 340,  1320 => 339,  1318 => 338,  1315 => 337,  1312 => 336,  1306 => 335,  1292 => 334,  1283 => 331,  1280 => 330,  1274 => 328,  1272 => 327,  1268 => 326,  1264 => 325,  1257 => 324,  1254 => 323,  1248 => 322,  1229 => 319,  1225 => 318,  1217 => 317,  1209 => 316,  1202 => 315,  1199 => 314,  1196 => 313,  1193 => 312,  1190 => 311,  1187 => 310,  1184 => 309,  1181 => 308,  1163 => 307,  1158 => 306,  1156 => 305,  1154 => 304,  1151 => 303,  1148 => 302,  1145 => 301,  1142 => 300,  1140 => 299,  1137 => 298,  1134 => 297,  1131 => 296,  1128 => 295,  1111 => 294,  1108 => 293,  1105 => 292,  1102 => 291,  1099 => 290,  1096 => 289,  1094 => 288,  1091 => 287,  1088 => 286,  1083 => 285,  1081 => 284,  1078 => 283,  1075 => 282,  1072 => 281,  1069 => 280,  1067 => 279,  1064 => 278,  1061 => 277,  1058 => 276,  1055 => 275,  1053 => 274,  1050 => 273,  1047 => 272,  1044 => 271,  1041 => 270,  1038 => 269,  1035 => 268,  1021 => 267,  1006 => 265,  1003 => 264,  994 => 261,  991 => 260,  985 => 258,  983 => 257,  979 => 256,  975 => 255,  969 => 254,  966 => 253,  963 => 252,  960 => 251,  957 => 250,  954 => 249,  951 => 248,  948 => 247,  945 => 246,  942 => 245,  940 => 244,  937 => 243,  934 => 242,  931 => 241,  929 => 240,  926 => 239,  924 => 238,  921 => 237,  918 => 236,  914 => 234,  911 => 233,  908 => 232,  905 => 231,  902 => 230,  899 => 229,  896 => 228,  894 => 227,  891 => 226,  888 => 225,  885 => 224,  883 => 223,  880 => 222,  877 => 221,  874 => 220,  860 => 219,  857 => 218,  837 => 215,  834 => 214,  828 => 212,  826 => 211,  823 => 210,  820 => 209,  817 => 208,  814 => 207,  811 => 206,  808 => 205,  805 => 204,  802 => 203,  799 => 202,  796 => 201,  794 => 200,  791 => 199,  788 => 198,  785 => 197,  783 => 196,  780 => 195,  777 => 194,  774 => 193,  771 => 192,  768 => 191,  765 => 190,  762 => 189,  759 => 188,  756 => 187,  753 => 186,  751 => 185,  748 => 184,  745 => 183,  742 => 182,  740 => 181,  737 => 180,  734 => 179,  732 => 178,  727 => 176,  721 => 175,  714 => 174,  696 => 173,  678 => 172,  675 => 171,  673 => 170,  670 => 169,  667 => 168,  665 => 167,  662 => 166,  659 => 165,  642 => 164,  639 => 163,  636 => 162,  618 => 161,  615 => 160,  612 => 159,  598 => 158,  595 => 157,  592 => 156,  578 => 155,  575 => 154,  555 => 151,  552 => 150,  549 => 149,  543 => 147,  541 => 146,  533 => 145,  529 => 144,  523 => 143,  520 => 142,  517 => 141,  514 => 140,  511 => 139,  508 => 138,  490 => 137,  488 => 136,  485 => 135,  482 => 134,  465 => 133,  462 => 132,  459 => 131,  456 => 130,  453 => 129,  450 => 128,  433 => 127,  430 => 126,  427 => 125,  424 => 124,  421 => 123,  418 => 122,  416 => 121,  413 => 120,  407 => 119,  404 => 118,  400 => 117,  397 => 116,  395 => 115,  392 => 114,  389 => 113,  386 => 112,  383 => 111,  381 => 110,  378 => 109,  375 => 108,  372 => 107,  369 => 106,  367 => 105,  364 => 104,  362 => 103,  359 => 102,  356 => 101,  353 => 100,  350 => 99,  344 => 98,  324 => 95,  321 => 94,  315 => 92,  313 => 91,  309 => 90,  303 => 89,  297 => 88,  294 => 87,  291 => 86,  288 => 85,  286 => 84,  283 => 83,  280 => 82,  277 => 81,  274 => 80,  256 => 79,  251 => 78,  248 => 77,  231 => 76,  219 => 68,  213 => 66,  211 => 65,  206 => 63,  203 => 62,  197 => 59,  193 => 58,  188 => 56,  185 => 55,  183 => 54,  175 => 52,  172 => 51,  166 => 49,  164 => 48,  159 => 46,  150 => 43,  147 => 42,  141 => 40,  139 => 39,  134 => 37,  127 => 34,  121 => 32,  119 => 31,  114 => 29,  110 => 27,  105 => 25,  100 => 24,  97 => 23,  92 => 21,  87 => 20,  81 => 18,  78 => 17,  76 => 16,  72 => 15,  68 => 14,  63 => 11,  61 => 10,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/object_versions.css\"/>
</head>

<body>

{% set fields = object1.getClass().getFieldDefinitions()  %}

<table class=\"preview\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
        <th>{{ 'Name'|trans([], 'admin') }}</th>
        <th>{{ 'Key'|trans([], 'admin') }}</th>
        {% if isImportPreview is defined %}
            {% if isNew  is defined %}
                <th>{{ 'New Object or unable to resolve'|trans([], 'admin') }}</th>
            {% else %}
                <th>{{ 'Before'|trans([], 'admin') }}</th>
                <th>{{ 'After'|trans([], 'admin') }}</th>
            {% endif %}
        {% else %}
            <th>{{ 'Version'|trans([], 'admin') }} 1</th>
            <th>{{ 'Version'|trans([], 'admin') }} 2</th>
        {% endif %}
    </tr>
    <tr class=\"system\">
        <td>{{ 'Date'|trans([], 'admin') }}</td>
        <td>modificationDate</td>
        {% if isImportPreview is not defined or isNew is not defined %}
            <td>{{ object1.getModificationDate()|date('Y-m-d H:i:s') }}</td>
        {% endif %}
        <td>{{ object2.getModificationDate()|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr class=\"system\">
        <td>{{ 'Path'|trans([], 'admin') }}</td>
        <td>path</td>
        {% if isImportPreview is not defined or isNew is not defined %}
            <td> {{ object1.getRealFullPath() }} </td>
        {% endif %}
        {% set modifiedPathClass = object1.getRealFullPath() is not same as(object2.getRealFullPath()) ? 'modified' : ''  %}
        <td class=\"{{ modifiedPathClass }}\">{{ object2.getRealFullPath() }}</td>
    </tr>
    <tr class=\"system\">
        <td>{{ 'Published'|trans([], 'admin') }}</td>
        <td>published</td>
        {% if isImportPreview is not defined or isNew is not defined %}
            <td> {{ object1.getPublished() }} </td>
        {% endif %}
        {% set modifiedPublishedClass = object1.getPublished() is not same as(object2.getPublished()) ? 'modified' : ''  %}
        <td class=\"{{ modifiedPublishedClass }}\">{{ object2.getPublished() ? 'true' : 'false' }}</td>
    </tr>
    {% if versionNote1 or versionNote2 %}
        <tr class=\"system\">
            <td>{{ 'Version Note'|trans([], 'admin') }}</td>
            <td>&nbsp;</td>
            <td>{{ versionNote1|nl2br }}</td>
            <td>{{ versionNote2|nl2br }}</td>
        </tr>
    {% endif %}
    <tr class=\"system\">
        <td>{{ 'Id'|trans([], 'admin') }}</td>
        <td>id</td>
        {% if isImportPreview is not defined or isNew is not defined %}
            <td> {{ object1.getId() }} </td>
        {% endif %}
        <td>{{ object2.getId() }}</td>
    </tr>


    <tr class=\"\">
        <td colspan=\"3\">&nbsp;</td>
    </tr>

    {% for fieldName, definition in fields %}
        {% if definition is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Localizedfields') %}
            {% for language in validLanguages %}
                {% for lfd in definition.getFieldDefinitions() %}
                    {% set vlContainer = object1.getValueForFieldName(fieldName) %}
                    {% set keyData1 = vlContainer is not empty ? vlContainer.getLocalizedValue(lfd.getName(), language) : null %}
                    {% set v1 = lfd.getVersionPreview(keyData1) %}

                    {% set v2Container = object2.getValueForFieldName(fieldName) %}
                    {% set keyData2 = v2Container is not empty ? v2Container.getLocalizedValue(lfd.getName(), language) : null %}
                    {% set v2 = v2Container ? lfd.getVersionPreview(keyData2) %}

                    <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                    <td>{{ lfd.getTitle()|trans([],'admin') }} ({{ language }})</td>
                    <td>{{ lfd.getName() }}</td>
                        {% if isImportPreview is not defined or isNew is not defined %}
                        <td>{{ v1 | raw }}</td>
                    {% endif %}
                        {% set fieldIsEqual = lfd is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not lfd.isEqual(keyData1, keyData2) ? 'modified' : '' %}
                        <td class=\"{{ fieldIsEqual }}\">{{ v2 | raw }}</td>
                    </tr>
                {% endfor %}
            {% endfor %}
        {% elseif definition is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Classificationstore') %}
            {% set storedata1 = object1.getValueForFieldName(fieldName) %}
            {% set storedata2 = object2.getValueForFieldName(fieldName) %}

            {% set existingGroups = [] %}

            {% set activeGroups1 = [] %}
            {% if storedata1 %}
                {% set activeGroups1 = storedata1.getActiveGroups() %}
            {% endif %}

            {% set activeGroups2 = [] %}
            {% if storedata2 %}
                {% set activeGroups2 = storedata2.getActiveGroups() %}
            {% endif %}

            {% set activeGroups = activeGroups1 + activeGroups2 %}

            {% for activeGroupId, enabled in activeGroups %}
                {% set existingGroups = existingGroups + {(activeGroupId): enabled} %}
            {% endfor %}

            {% if existingGroups is not empty %}
                {% set languages = ['default'] %}
                {% if definition.isLocalized() %}
                    {% set languages = validLanguages|merge(languages) %}
                {% endif %}

                {% for activeGroupId, enabled in existingGroups %}
                    {% if activeGroups1[activeGroupId] is defined or activeGroups2[activeGroupId] is defined %}
                        {% set groupDefinition = pimcore_object_classificationstore_group(activeGroupId) %}
                        {% if groupDefinition is not empty %}
                            {% set keyGroupRelations = groupDefinition.getRelations() %}

                            {% for keyGroupRelation in keyGroupRelations %}
                                {% set keyDef = pimcore_object_classificationstore_get_field_definition_from_json(keyGroupRelation.getDefinition(), keyGroupRelation.getType())  %}

                                {% if keyDef is not empty %}
                                    {% for language in languages %}
                                        {% set keyData1 = storedata1 ? storedata1.getLocalizedKeyValue(activeGroupId, keyGroupRelation.getKeyId(), language, true, true) : null %}
                                        {% set preview1 = keyDef.getVersionPreview(keyData1) %}
                                        {% set keyData2 = storedata2 ? storedata2.getLocalizedKeyValue(activeGroupId, keyGroupRelation.getKeyId(), language, true, true) : null %}
                                        {% set preview2 = keyDef.getVersionPreview(keyData2) %}

                                        <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                            <td>{{ definition.getTitle()|trans([],'admin') }}</td>
                                            <td>{{ groupDefinition.getName() }} - {{ keyGroupRelation.getName() }} {{ definition.isLocalized() ? \"/ \" ~ language : \"\" }}</td>
                                            {% if isImportPreview is not defined or isNew is not defined %}
                                                <td>{{ preview1 | raw }}</td>
                                            {% endif %}
                                            {% set isActiveInOneVersionOnly = activeGroups1[activeGroupId] is not defined or activeGroups2[activeGroupId] is not defined %}
                                            {% set fieldIsEqual = keyDef is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not keyDef.isEqual(keyData1, keyData2) or isActiveInOneVersionOnly ? 'modified' : '' %}
                                            <td class=\"{{ fieldIsEqual }}\">{{ preview2 }}</td>
                                        </tr>
                                    {% endfor %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% elseif definition is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Objectbricks') %}
            {% for asAllowedType in definition.getAllowedTypes() %}
                {% set collectionDef = pimcore_object_brick_definition_key(asAllowedType) %}

                {% for lfd in collectionDef.getFieldDefinitions() %}
                    {% set value = null %}

                    {% set bricks1 = object1.get(fieldName) %}
                    {% set bricks2 = object2.get(fieldName) %}

                    {% if bricks1 is not empty and bricks2 is not empty %}
                        {% if lfd is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Localizedfields') %}
                            {% for language in validLanguages %}
                                {% for localizedFieldDefinition in lfd.getFieldDefinitions() %}
                                    <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                        <td>{{ localizedFieldDefinition.getTitle()|trans([],'admin') }} ({{ language }})</td>
                                        <td>{{ localizedFieldDefinition.getName() }}</td>

                                        {% set v1,localizedBrickValue1 = null,null %}
                                        {% set v2,localizedBrickValue2 = null,null %}

                                        {% if bricks1 %}
                                            {% set brickGetter = \"get\" ~ asAllowedType %}
                                            {% set brick1Value = attribute(bricks1,brickGetter) %}

                                            {% if brick1Value %}
                                                {% set localizedBrickValues = brick1Value.getLocalizedFields() %}
                                                {% set localizedBrickValue1 = localizedBrickValues.getLocalizedValue(localizedFieldDefinition.getName(), language) %}
                                                {% if localizedBrickValue1 != false %}
                                                    {% set v1 = localizedFieldDefinition.getVersionPreview(localizedBrickValue1) %}
                                                {% else %}
                                                    {% set localizedBrickValue1 = null %}
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}

                                        {% if bricks2 %}
                                            {% set brickGetter = \"get\" ~ asAllowedType %}
                                            {% set brick2Value = attribute(bricks2,brickGetter) %}

                                            {% if brick2Value %}
                                                {% set localizedBrickValues = brick2Value.getLocalizedFields() %}
                                                {% set localizedBrickValue2 = localizedBrickValues.getLocalizedValue(localizedFieldDefinition.getName(), language) %}
                                                {% if localizedBrickValue2 != false %}
                                                    {% set v2 = localizedFieldDefinition.getVersionPreview(localizedBrickValue2) %}
                                                {% else %}
                                                    {% set localizedBrickValue2 = null %}
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}

                                        {% if isImportPreview is not defined or isNew is not defined %}
                                            <td>{{ v1 | raw }}</td>
                                        {% endif %}
                                        {% set fieldIsEqual = localizedFieldDefinition is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not localizedFieldDefinition.isEqual(localizedBrickValue1, localizedBrickValue2) ? 'modified' : '' %}
                                        <td class=\"{{ fieldIsEqual }}\">{{ v2 }}</td>
                                    </tr>
                                {% endfor %}
                                {% set break = true %}
                            {% endfor %}
                        {% else %}
                            {% set v1 = null %}

                            {% if bricks1 %}
                                {% set brickGetter = \"get\" ~ asAllowedType %}
                                {% set brick1Value = attribute(bricks1,brickGetter) %}

                                {% if brick1Value %}
                                    {% set brick1Value = brick1Value.getValueForFieldName(lfd.getName()) %}
                                    {% if brick1Value != false %}
                                        {% set v1 = lfd.getVersionPreview(brick1Value) %}
                                    {% else %}
                                        {% set brick1Value = null %}
                                    {% endif %}

                                {% endif %}
                            {% endif %}

                            {% set v2 = null %}

                            {% if bricks2 %}
                                {% set brickGetter = \"get\" ~ asAllowedType %}
                                {% set brick2Value = attribute(bricks2,brickGetter) %}

                                {% if brick2Value %}
                                    {% set brick2Value = brick2Value.getValueForFieldName(lfd.getName()) ?? null %}
                                    {% if brick2Value != false %}
                                        {% set v2 = lfd.getVersionPreview(brick2Value) %}
                                    {% else %}
                                        {% set brick2Value = null %}
                                    {% endif %}
                                {% endif %}
                            {% endif %}

                            <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                <td>{{ asAllowedType|capitalize ~ \" - \" ~ lfd.getTitle() ? lfd.getTitle()|trans([],'admin') }}</td>
                                <td>{{ lfd.getName() }}</td>
                                {% if isImportPreview is not defined or isNew is not defined %}
                                    <td>{{ v1 | raw }}</td>
                                {% endif %}
                                {% set fieldIsEqual = lfd is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not lfd.isEqual(brick1Value,brick2Value) ? 'modified' : '' %}
                                <td class=\"{{ fieldIsEqual }}\">{{ v2 | raw }}</td>
                            </tr>
                        {% endif %}
                    {% endif %}

                {% endfor %}
            {% endfor %}
        {% elseif definition is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Fieldcollections') %}
            {% set fields1,fields2 = object1.get(fieldName),object2.get(fieldName) %}
            {% set fieldDefinitions1,fieldItems1 = null,null %}
            {% set fieldDefinitions2,fieldItems2 = null,null %}
            {% set skipFieldItems2 = [] %}

            {% if fields1 %}
                {% set fieldDefinitions1 = fields1.getItemDefinitions() %}
                {% set fieldItems1 = fields1.getItems() %}
            {% endif %}

            {% if fields2 %}
                {% set fieldDefinitions2 = fields2.getItemDefinitions() %}
                {% set fieldItems2 = fields2.getItems() %}
            {% endif %}

            {% if fieldItems1 is iterable and fieldItems1|length > 0 %}
                {% for fkey1,fieldItem1  in fieldItems1 %}
                    {% set fieldKeys1 = fieldDefinitions1[fieldItem1.getType()].getFieldDefinitions() %}

                    {% if fieldItems2[fkey1] is defined and fieldItem1.getType() == fieldItems2[fkey1].getType() %}
                        {% set ffkey2 = fieldItems2[fkey1]  %}
                        {% set fieldKeys2 = fieldDefinitions2[ffkey2.getType()].getFieldDefinitions() %}
                        {% set skipFieldItems2 = skipFieldItems2|merge([fkey1, fkey1]) %}
                    {% endif %}

                    {% for fkey,fieldKey1 in fieldKeys1 %}
                        {% set v2,keyData2 = null,null %}
                        {% set keyData1 = fieldItem1.get(fieldKey1.name) %}
                        {% set v1 = fieldKey1.getVersionPreview(keyData1) %}

                        {% if ffkey2 is defined and fieldKeys2[fkey] is defined %}
                            {% set keyData2 = ffkey2.get(fieldKeys2[fkey].name) %}
                            {% set v2 = fieldKey1.getVersionPreview(keyData2) %}
                        {% endif %}

                        {% if keyData2 is not empty and fieldKey1 is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Localizedfields') %}
                            {# localized loop #}
                            {% for language in validLanguages %}
                                {% for lfd in fieldKey1.getFieldDefinitions() %}
                                    {% set localizedValue1 = fieldItem1.Localizedfields.getLocalizedValue(lfd.getName(), language) ?? '' %}
                                    {% if keyData2.getLocalizedValue(lfd.getName(), language) is not empty %}
                                        {% set localizedValue2 = keyData2.getLocalizedValue(lfd.getName(), language) %}
                                    {% else %}
                                        {% set localizedValue2 = '' %}
                                    {% endif %}
                                    {% set fieldIsEqual = lfd is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not lfd.isEqual(localizedValue1, localizedValue2) ? 'modified' : '' %}
                                    <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                        <td>{{ fieldItem1.type }} - {{ lfd.getTitle()|trans([],'admin') }} ({{ language }})</td>
                                        <td>{{ fieldItem1.fieldName }} - {{ lfd.getName() }}/{{ language }}</td>
                                        <td>{{ localizedValue1 }}</td>
                                        <td class=\"{{ fieldIsEqual }}\">{{ localizedValue2 }}</td>
                                    </tr>
                                {% endfor %}
                            {% endfor %}
                        {% else %}
                            <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                <td>{{ fieldItem1.getType() ~ \" - \" ~ fieldKey1.getTitle()|trans([],'admin') }}</td>
                                <td>{{ fieldKey1.name }}</td>
                                {% if isImportPreview is not defined or isNew is not defined %}
                                    <td>{{ v1 | raw }}</td>
                                {% endif %}
                                {% set fieldIsEqual = fieldKey1 is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not fieldKey1.isEqual(keyData1, keyData2) ? 'modified' : '' %}
                                <td class=\"{{ fieldIsEqual }}\">{{ v2 | raw }}</td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            {% endif %}

            {% if fieldItems2 is iterable and fieldItems2|length > 0 %}

                {% for fkey2,fieldItem2  in fieldItems2 %}
                    {% if fkey2 not in skipFieldItems2|keys %}
                        {% set fieldKeys2 = fieldDefinitions2[fieldItem2.getType()].getFieldDefinitions() %}

                        {% if fieldItems1[fkey2] is defined and fieldItem2.getType() == fieldItems1[fkey2].getType() %}
                            {% set ffkey1 = fieldItems1[fkey2]  %}
                            {% set fieldKeys1 = fieldDefinitions1[ffkey1.getType()].getFieldDefinitions() %}
                        {% endif %}

                        {% for fkey,fieldKey2 in fieldKeys2 %}
                            {% set v1,keyData1 = null,null %}
                            {% set keyData2 = fieldItem2.get(fieldKey2.name) %}
                            {% set v2 = fieldKey2.getVersionPreview(keyData2) %}

                            {% if ffkey1 is defined and fieldKeys1[fkey] is defined %}
                                {% set keyData1 = ffkey1.get(fieldKeys1[fkey].name) %}
                                {% set v1 = fieldKey2.getVersionPreview(keyData1) %}
                            {% endif %}

                            {% if keyData2 is not empty and fieldKey2 is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\Localizedfields') %}
                                {# localized loop #}
                                {% for language in validLanguages %}
                                    {% for lfd in fieldKey2.getFieldDefinitions() %}
                                        {% set localizedValue1 = fieldItem2.Localizedfields.getLocalizedValue(lfd.getName(), language) ?? '' %}
                                        {% if keyData2.getLocalizedValue(lfd.getName(), language) is not empty %}
                                            {% set localizedValue2 = keyData2.getLocalizedValue(lfd.getName(), language) %}
                                        {% else %}
                                            {% set localizedValue2 = '' %}
                                        {% endif %}
                                        {% set fieldIsEqual = lfd is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not lfd.isEqual(localizedValue1, localizedValue2) ? 'modified' : '' %}
                                        <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                            <td>{{ fieldItem2.type }} - {{ lfd.getTitle()|trans([],'admin') }} ({{ language }})</td>
                                            <td>{{ fieldItem2.fieldName }} - {{ lfd.getName() }}/{{ language }}</td>
                                            <td>{{ localizedValue1 }}</td>
                                            <td class=\"{{ fieldIsEqual }}\">{{ localizedValue2 }}</td>
                                        </tr>
                                    {% endfor %}
                                {% endfor %}
                            {% else %}
                                <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                                    <td>{{ fieldItem2.getType() ~ \" - \" ~ fieldKey2.getTitle()|trans([],'admin') }}</td>
                                    <td>{{ fieldKey2.name }}</td>
                                    {% if isImportPreview is not defined or isNew is not defined %}
                                        <td>{{ v1 | raw }}</td>
                                    {% endif %}
                                    {% set fieldIsEqual = fieldKey2 is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not fieldKey2.isEqual(keyData1, keyData2) ? 'modified' : '' %}
                                    <td class=\"{{ fieldIsEqual }}\">{{ v2 | raw }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% else %}
            {% set keyData1 = object1.getValueForFieldName(fieldName) is not same as(false) ? object1.getValueForFieldName(fieldName) : null %}
            {% set v1 = definition.getVersionPreview(keyData1) %}
            {% set keyData2 = object2.getValueForFieldName(fieldName) is not same as(false) ? object2.getValueForFieldName(fieldName) : null %}
            {% set v2 = definition.getVersionPreview(keyData2) %}

            <tr {% if loop.index is odd %}class=\"odd\"{% endif %}>
                <td>{{ definition.getTitle()|trans([],'admin') }}</td>
                <td>{{ definition.getName() }}</td>
                {% if isImportPreview is not defined or isNew is not defined %}
                    <td>{{ v1 | raw }}</td>
                {% endif %}
                {% set fieldIsEqual = definition is instanceof('\\\\Pimcore\\\\Model\\\\DataObject\\\\ClassDefinition\\\\Data\\\\EqualComparisonInterface') and not definition.isEqual(keyData1, keyData2) ? 'modified' : '' %}
                <td class=\"{{ fieldIsEqual }}\">{{ v2 | raw }}</td>
            </tr>
        {% endif %}
    {% endfor %}
</table>

</body>
</html>
", "@PimcoreAdmin/admin/data_object/data_object/diff_versions.html.twig", "/var/www/my-project/vendor/pimcore/admin-ui-classic-bundle/templates/admin/data_object/data_object/diff_versions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "if" => 16, "for" => 76];
        static $filters = ["escape" => 14, "trans" => 14, "date" => 32, "nl2br" => 58, "raw" => 92, "merge" => 124, "capitalize" => 255, "length" => 284, "keys" => 341];
        static $functions = ["pimcore_object_classificationstore_group" => 129, "pimcore_object_classificationstore_get_field_definition_from_json" => 134, "pimcore_object_brick_definition_key" => 162];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'date', 'nl2br', 'raw', 'merge', 'capitalize', 'length', 'keys'],
                ['pimcore_object_classificationstore_group', 'pimcore_object_classificationstore_get_field_definition_from_json', 'pimcore_object_brick_definition_key'],
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
