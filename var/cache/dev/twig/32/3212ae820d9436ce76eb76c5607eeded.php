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

/* quiz/quiz.html.twig */
class __TwigTemplate_f9f2ebc2b69e39d8ee7e6404556cda6c extends Template
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
            'javascripts_head' => [$this, 'block_javascripts_head'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "basePermis.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz.html.twig"));

        $this->parent = $this->loadTemplate("basePermis.html.twig", "quiz/quiz.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Driver's License Quiz";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts_head", $context, $blocks);
        yield "
    <script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tts-service.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(img/carousel-bg-1.jpg);\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Driver's License Quiz</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Quiz</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Quiz Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"text-primary text-uppercase\">// Test Your Knowledge //</h6>
                <h1 class=\"mb-5\">Driver's License Quiz</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-8 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"card shadow\">
                        <div class=\"card-body p-5\">
                            ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            yield "                                <div class=\"alert alert-warning mb-4\">
                                    <strong>Debug Info:</strong> User ID: ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            yield "
                                </div>
                            ";
        }
        // line 51
        yield "                            <form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_submit");
        yield "\">
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 52, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 53
            yield "                                    <div class=\"question mb-4 pb-3 border-bottom\">
                                        <div class=\"question-header mb-3 d-flex justify-content-between align-items-start\">
                                            <div>
                                                <h5 class=\"fw-bold text-primary\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "questionNumber", [], "any", false, false, false, 56), "html", null, true);
            yield ". ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "questionText", [], "any", false, false, false, 56), "html", null, true);
            yield "</h5>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-primary tts-btn\" data-text=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "questionText", [], "any", false, false, false, 58), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-volume-up\"></i> Read
                                            </button>
                                        </div>
                                        <div class=\"options ps-3\">
                                            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 63));
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 64
                yield "                                                ";
                $context["optionLetter"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["option"], 0, 1);
                // line 65
                yield "                                                <div class=\"form-check mb-2 d-flex align-items-center\">
                                                    <input class=\"form-check-input\" type=\"radio\"
                                                           name=\"answers[";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 67), "loop", [], "any", false, false, false, 67), "index0", [], "any", false, false, false, 67), "html", null, true);
                yield "]\"
                                                           id=\"q";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 68), "loop", [], "any", false, false, false, 68), "index0", [], "any", false, false, false, 68), "html", null, true);
                yield "_o";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 68), "html", null, true);
                yield "\"
                                                           value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["optionLetter"]) || array_key_exists("optionLetter", $context) ? $context["optionLetter"] : (function () { throw new RuntimeError('Variable "optionLetter" does not exist.', 69, $this->source); })()), "html", null, true);
                yield "\" required>
                                                    <label class=\"form-check-label ms-2\" for=\"q";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 70), "loop", [], "any", false, false, false, 70), "index0", [], "any", false, false, false, 70), "html", null, true);
                yield "_o";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70), "html", null, true);
                yield "\">
                                                        ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "
                                                    </label>
                                                    <button type=\"button\" class=\"btn btn-sm btn-link tts-btn ms-2 p-0\" data-text=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "\">
                                                        <i class=\"fas fa-volume-up small\"></i>
                                                    </button>
                                                </div>
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
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                                            <input type=\"hidden\" name=\"correct_answers[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 78), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "correctAnswer", [], "any", false, false, false, 78), "html", null, true);
            yield "\">
                                        </div>
                                    </div>
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
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "
                                <div class=\"text-center mt-5\">
                                    <button type=\"submit\" class=\"btn btn-primary py-3 px-5\">
                                        <i class=\"fa fa-paper-plane me-2\"></i>Submit Quiz
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quiz End -->

    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 101
        yield "    ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verify TTS service is available
            if (typeof window.ttsService !== 'undefined') {
                // Initialize TTS service
                window.ttsService.init();
                
                // Add click handlers for all TTS buttons
                document.querySelectorAll('.tts-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const textToRead = this.getAttribute('data-text');
                        window.ttsService.speak(textToRead);
                    });
                });
            } else {
                console.error('TTS Service not available');
                // Optionally hide TTS buttons if service isn't available
                document.querySelectorAll('.tts-btn').forEach(btn => btn.style.display = 'none');
            }
        });
    </script>
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
        return "quiz/quiz.html.twig";
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
        return array (  355 => 101,  342 => 100,  315 => 82,  294 => 78,  275 => 73,  270 => 71,  264 => 70,  260 => 69,  254 => 68,  250 => 67,  246 => 65,  243 => 64,  226 => 63,  218 => 58,  211 => 56,  206 => 53,  189 => 52,  184 => 51,  178 => 48,  175 => 47,  173 => 46,  150 => 26,  133 => 11,  120 => 10,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePermis.html.twig' %}

{% block title %}Driver's License Quiz{% endblock %}

{% block javascripts_head %}
    {{ parent() }}
    <script src=\"{{ asset('js/tts-service.js') }}\"></script>
{% endblock %}

{% block body %}
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(img/carousel-bg-1.jpg);\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Driver's License Quiz</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"{{path('app_home')}}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Quiz</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Quiz Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"text-primary text-uppercase\">// Test Your Knowledge //</h6>
                <h1 class=\"mb-5\">Driver's License Quiz</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-8 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"card shadow\">
                        <div class=\"card-body p-5\">
                            {% if app.user %}
                                <div class=\"alert alert-warning mb-4\">
                                    <strong>Debug Info:</strong> User ID: {{ app.user.id }}
                                </div>
                            {% endif %}
                            <form method=\"post\" action=\"{{ path('app_quiz_submit') }}\">
                                {% for question in questions %}
                                    <div class=\"question mb-4 pb-3 border-bottom\">
                                        <div class=\"question-header mb-3 d-flex justify-content-between align-items-start\">
                                            <div>
                                                <h5 class=\"fw-bold text-primary\">{{ question.questionNumber }}. {{ question.questionText }}</h5>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-primary tts-btn\" data-text=\"{{ question.questionText }}\">
                                                <i class=\"fas fa-volume-up\"></i> Read
                                            </button>
                                        </div>
                                        <div class=\"options ps-3\">
                                            {% for option in question.options %}
                                                {% set optionLetter = option|slice(0, 1) %}
                                                <div class=\"form-check mb-2 d-flex align-items-center\">
                                                    <input class=\"form-check-input\" type=\"radio\"
                                                           name=\"answers[{{ loop.parent.loop.index0 }}]\"
                                                           id=\"q{{ loop.parent.loop.index0 }}_o{{ loop.index0 }}\"
                                                           value=\"{{ optionLetter }}\" required>
                                                    <label class=\"form-check-label ms-2\" for=\"q{{ loop.parent.loop.index0 }}_o{{ loop.index0 }}\">
                                                        {{ option }}
                                                    </label>
                                                    <button type=\"button\" class=\"btn btn-sm btn-link tts-btn ms-2 p-0\" data-text=\"{{ option }}\">
                                                        <i class=\"fas fa-volume-up small\"></i>
                                                    </button>
                                                </div>
                                            {% endfor %}
                                            <input type=\"hidden\" name=\"correct_answers[{{ loop.index0 }}]\" value=\"{{ question.correctAnswer }}\">
                                        </div>
                                    </div>
                                {% endfor %}

                                <div class=\"text-center mt-5\">
                                    <button type=\"submit\" class=\"btn btn-primary py-3 px-5\">
                                        <i class=\"fa fa-paper-plane me-2\"></i>Submit Quiz
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quiz End -->

    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
{% endblock %}

{% block js %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verify TTS service is available
            if (typeof window.ttsService !== 'undefined') {
                // Initialize TTS service
                window.ttsService.init();
                
                // Add click handlers for all TTS buttons
                document.querySelectorAll('.tts-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const textToRead = this.getAttribute('data-text');
                        window.ttsService.speak(textToRead);
                    });
                });
            } else {
                console.error('TTS Service not available');
                // Optionally hide TTS buttons if service isn't available
                document.querySelectorAll('.tts-btn').forEach(btn => btn.style.display = 'none');
            }
        });
    </script>
{% endblock %}", "quiz/quiz.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\quiz\\quiz.html.twig");
    }
}
