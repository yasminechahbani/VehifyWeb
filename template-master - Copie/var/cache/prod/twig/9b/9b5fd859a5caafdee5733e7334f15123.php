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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_939ed8cfe24b933881972154f29ec764 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 4), "unavailable_migrations_count", [], "any", true, true, false, 4)) {
            // line 5
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 5), "unavailable_migrations_count", [], "any", false, false, false, 5);
            // line 6
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 6), "new_migrations", [], "any", false, false, false, 6));
            // line 7
            yield "        ";
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 8
                yield "            ";
                $context["executed_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 8), "executed_migrations", [], "any", false, false, false, 8));
                // line 9
                yield "            ";
                $context["available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "available_migrations_count", [], "any", false, false, false, 9);
                // line 10
                yield "            ";
                $context["status_color"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("yellow") : (""));
                // line 11
                yield "            ";
                $context["status_color"] = (((($context["new_migrations"] ?? null) > 0)) ? ("red") : (($context["status_color"] ?? null)));
                // line 12
                yield "
            ";
                // line 13
                $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 14
                    yield "                ";
                    if ((($context["profiler_markup_version"] ?? null) < 3)) {
                        // line 15
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                        yield "
                ";
                    } else {
                        // line 17
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                        yield "
                ";
                    }
                    // line 19
                    yield "
                <span class=\"sf-toolbar-value\">";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                    yield "</span>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 22
                yield "
            ";
                // line 23
                $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 24
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Current Migration</b>
                        <span>";
                    // line 27
                    yield (((($context["executed_migrations"] ?? null) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 27), "executed_migrations", [], "any", false, false, false, 27)), "version", [], "any", false, false, false, 27), "\\")), "html", null, true)) : ("n/a"));
                    yield "</span>
                    </div>
                </div>

                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <span class=\"sf-toolbar-header\">
                            <b>Database Migrations</b>
                        </span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Executed</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["executed_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Unavailable</b>
                        <span class=\"sf-toolbar-status ";
                    // line 43
                    yield (((($context["unavailable_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unavailable_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Available</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["available_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>New</b>
                        <span class=\"sf-toolbar-status ";
                    // line 51
                    yield (((($context["new_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-red") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["new_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 55
                yield "
            ";
                // line 56
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
                yield "
        ";
            }
            // line 58
            yield "    ";
        }
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 62), "unavailable_migrations_count", [], "any", true, true, false, 62)) {
            // line 63
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 63), "unavailable_migrations_count", [], "any", false, false, false, 63);
            // line 64
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 64), "new_migrations", [], "any", false, false, false, 64));
            // line 65
            yield "        ";
            $context["label"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("label-status-warning") : (""));
            // line 66
            yield "        ";
            $context["label"] = (((($context["new_migrations"] ?? null) > 0)) ? ("label-status-error") : (($context["label"] ?? null)));
            // line 67
            yield "        <span class=\"label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "\">
            <span class=\"icon\">
                ";
            // line 69
            if ((($context["profiler_markup_version"] ?? null) < 3)) {
                // line 70
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                yield "
                ";
            } else {
                // line 72
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                yield "
                ";
            }
            // line 74
            yield "            </span>

            <strong>Migrations</strong>
            ";
            // line 77
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 78
                yield "                <span class=\"count\">
                    <span>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                yield "</span>
                </span>
            ";
            }
            // line 82
            yield "        </span>
    ";
        }
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "    ";
        $context["num_executed_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 87), "executed_migrations", [], "any", false, false, false, 87));
        // line 88
        yield "    ";
        $context["num_unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 88), "unavailable_migrations_count", [], "any", false, false, false, 88);
        // line 89
        yield "    ";
        $context["num_available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 89), "available_migrations_count", [], "any", false, false, false, 89);
        // line 90
        yield "    ";
        $context["num_new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 90), "new_migrations", [], "any", false, false, false, 90));
        // line 91
        yield "
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_executed_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">Executed</span>
        </div>

        ";
        // line 99
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 100
            yield "            <div class=\"metric-group\">
        ";
        }
        // line 102
        yield "
        <div class=\"metric\">
            <span class=\"value\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_unavailable_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_available_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_new_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">New</span>
        </div>

        ";
        // line 116
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 117
            yield "            </div> ";
            // line 118
            yield "        ";
        }
        // line 119
        yield "    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Migrations
                <span class=\"badge ";
        // line 125
        yield (((($context["num_new_migrations"] ?? null) > 0)) ? ("status-error") : ((((($context["num_unavailable_migrations"] ?? null) > 0)) ? ("status-warning") : (""))));
        yield "\">
                    ";
        // line 126
        yield (((($context["num_new_migrations"] ?? null) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_new_migrations"] ?? null), "html", null, true)) : ((((($context["num_unavailable_migrations"] ?? null) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_unavailable_migrations"] ?? null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_executed_migrations"] ?? null), "html", null, true)))));
        yield "
                </span>
            </h3>

            <div class=\"tab-content\">
                ";
        // line 131
        yield $this->getTemplateForMacro("macro_render_migration_details", $context, 131, $this->getSourceContext())->macro_render_migration_details(...[($context["collector"] ?? null), ($context["profiler_markup_version"] ?? null)]);
        yield "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Configuration</h3>

            <div class=\"tab-content\">
                ";
        // line 139
        yield $this->getTemplateForMacro("macro_render_configuration_details", $context, 139, $this->getSourceContext())->macro_render_configuration_details(...[($context["collector"] ?? null), ($context["profiler_markup_version"] ?? null)]);
        yield "
            </div>
        </div>
    </div>
";
        yield from [];
    }

    // line 145
    public function macro_render_migration_details($collector = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 146
            yield "    <table>
        <thead>
        <tr>
            <th class=\"colored font-normal\">Version</th>
            <th class=\"colored font-normal\">Description</th>
            <th class=\"colored font-normal\">Status</th>
            <th class=\"colored font-normal\">Executed at</th>
            <th class=\"colored font-normal text-right\">Execution time</th>
        </tr>
        </thead>
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 156), "new_migrations", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 157
                yield "            ";
                yield $this->getTemplateForMacro("macro_render_migration", $context, 157, $this->getSourceContext())->macro_render_migration(...[$context["migration"]]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['migration'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 160), "executed_migrations", [], "any", false, false, false, 160)));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 161
                yield "            ";
                yield $this->getTemplateForMacro("macro_render_migration", $context, 161, $this->getSourceContext())->macro_render_migration(...[$context["migration"]]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['migration'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "    </table>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function macro_render_configuration_details($collector = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 167
            yield "    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 175), "storage", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
        </tr>
        ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 177), "table", [], "any", true, true, false, 177)) {
                // line 178
                yield "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 180), "table", [], "any", false, false, false, 180), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            // line 183
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 183), "column", [], "any", true, true, false, 183)) {
                // line 184
                yield "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 186), "column", [], "any", false, false, false, 186), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            // line 189
            yield "    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Database</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 199), "driver", [], "any", false, false, false, 199), "html", null, true);
            yield "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
            yield "</td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
        </tr>
        </thead>
        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 213), "namespaces", [], "any", false, false, false, 213));
            foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
                // line 214
                yield "            <tr>
                <td class=\"font-normal\">";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["namespace"], "html", null, true);
                yield "</td>
                <td class=\"font-normal\">";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["directory"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['namespace'], $context['directory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "    </table>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 222
    public function macro_render_migration($migration = null, $profiler_markup_version = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "migration" => $migration,
            "profiler_markup_version" => $profiler_markup_version,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 223
            yield "    <tr>
        <td class=\"font-normal\">
            ";
            // line 225
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 225)) {
                // line 226
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 226), 1), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 226), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 226), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 228
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 228), "html", null, true);
                yield "
            ";
            }
            // line 230
            yield "        </td>
        <td class=\"font-normal\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "description", [], "any", false, false, false, 231), "html", null, true);
            yield "</td>
        <td class=\"font-normal align-right\">
            ";
            // line 233
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "is_new", [], "any", false, false, false, 233)) {
                // line 234
                yield "                <span class=\"";
                yield (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-error") : ("label status-error"));
                yield "\">NOT EXECUTED</span>
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 235
($context["migration"] ?? null), "is_unavailable", [], "any", false, false, false, 235)) {
                // line 236
                yield "                <span class=\"";
                yield (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-warning") : ("label status-warning"));
                yield "\">UNAVAILABLE</span>
            ";
            } else {
                // line 238
                yield "                <span class=\"";
                yield (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-success") : ("label status-success"));
                yield "\">EXECUTED</span>
            ";
            }
            // line 240
            yield "        </td>
        <td class=\"font-normal\">";
            // line 241
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 241)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 241), "M j, Y H:i"), "html", null, true)) : ("n/a"));
            yield "</td>
        <td class=\"font-normal text-right\">
            ";
            // line 243
            if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 243))) {
                // line 244
                yield "                n/a
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 245
($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 245) < 1)) {
                // line 246
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 246) * 1000), 0), "html", null, true);
                yield " ms
            ";
            } else {
                // line 248
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 248), 2), "html", null, true);
                yield " seconds
            ";
            }
            // line 250
            yield "        </td>
    </tr>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
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
        return array (  623 => 250,  617 => 248,  611 => 246,  609 => 245,  606 => 244,  604 => 243,  599 => 241,  596 => 240,  590 => 238,  584 => 236,  582 => 235,  577 => 234,  575 => 233,  570 => 231,  567 => 230,  561 => 228,  551 => 226,  549 => 225,  545 => 223,  532 => 222,  525 => 219,  516 => 216,  512 => 215,  509 => 214,  505 => 213,  492 => 203,  485 => 199,  473 => 189,  467 => 186,  463 => 184,  460 => 183,  454 => 180,  450 => 178,  448 => 177,  443 => 175,  433 => 167,  421 => 166,  414 => 163,  405 => 161,  401 => 160,  398 => 159,  389 => 157,  385 => 156,  373 => 146,  361 => 145,  351 => 139,  340 => 131,  332 => 126,  328 => 125,  320 => 119,  317 => 118,  315 => 117,  313 => 116,  306 => 112,  299 => 108,  292 => 104,  288 => 102,  284 => 100,  282 => 99,  275 => 95,  269 => 91,  266 => 90,  263 => 89,  260 => 88,  257 => 87,  250 => 86,  243 => 82,  237 => 79,  234 => 78,  232 => 77,  227 => 74,  221 => 72,  215 => 70,  213 => 69,  207 => 67,  204 => 66,  201 => 65,  198 => 64,  195 => 63,  192 => 62,  185 => 61,  179 => 58,  174 => 56,  171 => 55,  161 => 51,  154 => 47,  145 => 43,  138 => 39,  123 => 27,  118 => 24,  116 => 23,  113 => 22,  107 => 20,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\vendor\\doctrine\\doctrine-migrations-bundle\\templates\\Collector\\migrations.html.twig");
    }
}
