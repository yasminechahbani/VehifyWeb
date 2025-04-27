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

/* quiz/pdf_result.html.twig */
class __TwigTemplate_04313e5227c4686716ab749bb66bd898 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Quiz Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #343a40;
        }
        .result-box {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }
        .result-box h2 {
            margin-bottom: 20px;
        }
        .result-box h3 {
            font-size: 2rem;
            color: #007bff;
        }
        .result-box .alert {
            padding: 10px;
            margin-top: 20px;
        }
        .alert-success {
            background-color: #28a745;
            color: white;
        }
        .alert-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Quiz Results</h1>

    <div class=\"result-box\">
        <h2>Your Score</h2>
        <h3>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["score"] ?? null), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "</h3>

        ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["quiz"] ?? null), "statut", [], "any", false, false, false, 48) == "Passed")) {
            // line 49
            yield "            <div class=\"alert alert-success\">
                <strong>Congratulations!</strong> You passed the quiz.
            </div>

            ";
            // line 53
            if ((($context["score"] ?? null) >= 7)) {
                // line 54
                yield "                <div class=\"permis-generation\">
                    <h4>Driver's License Eligibility</h4>
                    <p>You've qualified for a driver's license!</p>
                </div>
            ";
            }
            // line 59
            yield "        ";
        } else {
            // line 60
            yield "            <div class=\"alert alert-danger\">
                <strong>Sorry!</strong> You failed the quiz. Please try again.
            </div>
        ";
        }
        // line 64
        yield "    </div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quiz/pdf_result.html.twig";
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
        return array (  122 => 64,  116 => 60,  113 => 59,  106 => 54,  104 => 53,  98 => 49,  96 => 48,  89 => 46,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quiz/pdf_result.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\quiz\\pdf_result.html.twig");
    }
}
