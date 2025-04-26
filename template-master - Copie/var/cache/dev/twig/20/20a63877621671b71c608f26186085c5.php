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
class __TwigTemplate_d4fc8172c6cc38e3bdf289832403d530 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/pdf_result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/pdf_result.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "</h3>

        ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48) == "Passed")) {
            // line 49
            yield "            <div class=\"alert alert-success\">
                <strong>Congratulations!</strong> You passed the quiz.
            </div>

            ";
            // line 53
            if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 53, $this->source); })()) >= 7)) {
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  128 => 64,  122 => 60,  119 => 59,  112 => 54,  110 => 53,  104 => 49,  102 => 48,  95 => 46,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
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
        <h3>{{ score }}/{{ total }}</h3>

        {% if quiz.statut == 'Passed' %}
            <div class=\"alert alert-success\">
                <strong>Congratulations!</strong> You passed the quiz.
            </div>

            {% if score >= 7 %}
                <div class=\"permis-generation\">
                    <h4>Driver's License Eligibility</h4>
                    <p>You've qualified for a driver's license!</p>
                </div>
            {% endif %}
        {% else %}
            <div class=\"alert alert-danger\">
                <strong>Sorry!</strong> You failed the quiz. Please try again.
            </div>
        {% endif %}
    </div>
</body>
</html>
", "quiz/pdf_result.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\quiz\\pdf_result.html.twig");
    }
}
