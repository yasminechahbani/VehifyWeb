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

/* quiz/index.html.twig */
class __TwigTemplate_9143a5fd7a0565017931bfa352a22f09 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "quiz/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Quiz List";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Driver's License Quizzes</h1>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "            <div class=\"alert alert-success\">
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
        <div class=\"mb-4\">
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_generate");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i> Generate New Quiz
            </a>
        </div>

        <div class=\"card shadow\">
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Score</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>User ID</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["quizzes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 43
            yield "                            <tr>
                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "statut", [], "any", false, false, false, 47) == "Passed")) {
                // line 48
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "statut", [], "any", false, false, false, 48), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 50
                yield "                                        <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "statut", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 52
            yield "                                </td>
                                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "dateTest", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idUser", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "rating", [], "any", false, false, false, 56)) {
                // line 57
                yield "                                        <span class=\"text-warning\">
                                            ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 59
                    yield "                                                ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "rating", [], "any", false, false, false, 59))) {
                        // line 60
                        yield "                                                    <i class=\"fa fa-star\"></i>
                                                ";
                    } else {
                        // line 62
                        yield "                                                    <i class=\"fa fa-star-o\"></i>
                                                ";
                    }
                    // line 64
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                                        </span>
                                    ";
            } else {
                // line 67
                yield "                                        <em>Not rated</em>
                                    ";
            }
            // line 69
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 71
        if (!$context['_iterated']) {
            // line 72
            yield "                            <tr>
                                <td colspan=\"6\">No quizzes found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quiz/index.html.twig";
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
        return array (  231 => 76,  222 => 72,  220 => 71,  214 => 69,  210 => 67,  206 => 65,  200 => 64,  196 => 62,  192 => 60,  189 => 59,  185 => 58,  182 => 57,  180 => 56,  175 => 54,  171 => 53,  168 => 52,  162 => 50,  156 => 48,  154 => 47,  149 => 45,  145 => 44,  142 => 43,  137 => 42,  115 => 23,  111 => 21,  102 => 18,  99 => 17,  95 => 16,  92 => 15,  83 => 12,  80 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quiz/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\quiz\\index.html.twig");
    }
}
