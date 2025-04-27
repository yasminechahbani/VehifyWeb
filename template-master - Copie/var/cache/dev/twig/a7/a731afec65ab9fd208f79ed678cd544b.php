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

/* quiz/result.html.twig */
class __TwigTemplate_106d439518364943691270928cc7d7e4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/result.html.twig"));

        $this->parent = $this->loadTemplate("basePermis.html.twig", "quiz/result.html.twig", 1);
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

        yield "Quiz Results";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container py-5 result-container\">
        <div class=\"card shadow\">
            <div class=\"card-body text-center\">
                <h1 class=\"mb-4\">Quiz Results</h1>

                <div class=\"result-box p-4 mb-4\">
                    <h2 class=\"mb-3\">Your Score</h2>
                    <h3 class=\"display-4\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h3>

                    ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 15, $this->source); })()), "statut", [], "any", false, false, false, 15) == "Passed")) {
            // line 16
            yield "                        <div class=\"alert alert-success mt-3\">
                            <strong>Congratulations!</strong> You passed the quiz.
                        </div>

                        ";
            // line 20
            if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 20, $this->source); })()) >= 7)) {
                // line 21
                yield "                            <div class=\"permis-generation mt-4\">
                                <h4 class=\"mb-3\">Driver's License Eligibility</h4>
                                <p>You've qualified for a driver's license!</p>
                            </div>
                        ";
            }
            // line 26
            yield "
                    ";
        } else {
            // line 28
            yield "                        <div class=\"alert alert-danger mt-3\">
                            <strong>Sorry!</strong> You failed the quiz. Please try again.
                        </div>
                    ";
        }
        // line 32
        yield "                </div>

                ";
        // line 35
        yield "                <div class=\"rating-section mt-4\">
                    <h4>Rate This Quiz</h4>
                    <p>Your feedback helps us improve!</p>
                    
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["success"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "                        <div class=\"alert alert-success mb-3\">
                            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                    
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["error"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            yield "                        <div class=\"alert alert-danger mb-3\">
                            ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "
";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ratingForm"]) || array_key_exists("ratingForm", $context) ? $context["ratingForm"] : (function () { throw new RuntimeError('Variable "ratingForm" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["id" => "ratingForm", "class" => "rating-form"]]);
        yield "
                        <div class=\"rating-stars mb-4\">
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ratingForm"]) || array_key_exists("ratingForm", $context) ? $context["ratingForm"] : (function () { throw new RuntimeError('Variable "ratingForm" does not exist.', 53, $this->source); })()), "rating", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 54
            yield "                                <div class=\"star-option\">
                                    ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "star-radio"]]);
            yield "
                                    <label for=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\" class=\"star-label\">
                                        <i class=\"fas fa-star\"></i>
                                    </label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                        </div>
                        <button type=\"submit\" class=\"btn btn-primary submit-rating\" id=\"submitRating\" disabled>
                            Submit Rating
                        </button>
                    ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ratingForm"]) || array_key_exists("ratingForm", $context) ? $context["ratingForm"] : (function () { throw new RuntimeError('Variable "ratingForm" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
                </div>

                <div class=\"mt-5 action-buttons\">
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_generate");
        yield "\" class=\"btn btn-outline-primary me-2\">
                        <i class=\"fas fa-redo me-2\"></i> Take Another Quiz
                    </a>
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-home me-2\"></i> Return Home
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 82
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .result-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .result-box {
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .star-radio {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        .star-label {
            cursor: pointer;
            font-size: 2.5rem;
            color: #e0e0e0;
            transition: all 0.2s ease;
        }
        .star-label:hover,
        .star-radio:checked + .star-label,
        .star-label:hover ~ .star-label {
            color: #ffc107;
        }
        .submit-rating {
            padding: 10px 30px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .submit-rating:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        .submit-rating:not(:disabled):hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        @media (max-width: 576px) {
            .rating-stars {
                gap: 10px;
            }
            .star-label {
                font-size: 2rem;
            }
            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('ratingForm');
            const stars = document.querySelectorAll('.star-label');
            const submitBtn = document.getElementById('submitRating');
            const radioInputs = document.querySelectorAll('.star-radio');

            // Initialize form state
            updateSubmitButton();

            // Star rating interaction
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    // The corresponding radio input is the previous sibling of the label's parent
                    const radioId = this.getAttribute('for');
                    const radioInput = document.getElementById(radioId);
                    
                    // Update UI
                    updateStarColors(radioInput.value);
                    updateSubmitButton();
                });

                star.addEventListener('mouseover', function() {
                    const starValue = this.closest('.star-option').querySelector('.star-radio').value;
                    highlightStars(starValue);
                });

                star.addEventListener('mouseout', function() {
                    const checkedInput = document.querySelector('.star-radio:checked');
                    updateStarColors(checkedInput ? checkedInput.value : 0);
                });
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                if (!document.querySelector('.star-radio:checked')) {
                    e.preventDefault();
                    alert('Please select a rating before submitting');
                }
            });

            // Helper functions
            function updateStarColors(rating) {
                stars.forEach(star => {
                    const starValue = star.closest('.star-option').querySelector('.star-radio').value;
                    if (starValue <= rating) {
                        star.style.color = '#ffc107';
                    } else {
                        star.style.color = '#e0e0e0';
                    }
                });
            }

            function highlightStars(rating) {
                stars.forEach(star => {
                    const starValue = star.closest('.star-option').querySelector('.star-radio').value;
                    star.style.color = starValue <= rating ? '#ffc107' : '#e0e0e0';
                });
            }

            function updateSubmitButton() {
                const isChecked = document.querySelector('.star-radio:checked') !== null;
                submitBtn.disabled = !isChecked;
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
        return "quiz/result.html.twig";
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
        return array (  362 => 150,  349 => 149,  271 => 82,  258 => 81,  239 => 72,  233 => 69,  226 => 65,  220 => 61,  209 => 56,  205 => 55,  202 => 54,  198 => 53,  193 => 51,  190 => 50,  181 => 47,  178 => 46,  174 => 45,  171 => 44,  162 => 41,  159 => 40,  155 => 39,  149 => 35,  145 => 32,  139 => 28,  135 => 26,  128 => 21,  126 => 20,  120 => 16,  118 => 15,  111 => 13,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePermis.html.twig' %}

{% block title %}Quiz Results{% endblock %}

{% block body %}
    <div class=\"container py-5 result-container\">
        <div class=\"card shadow\">
            <div class=\"card-body text-center\">
                <h1 class=\"mb-4\">Quiz Results</h1>

                <div class=\"result-box p-4 mb-4\">
                    <h2 class=\"mb-3\">Your Score</h2>
                    <h3 class=\"display-4\">{{ score }}/{{ total }}</h3>

                    {% if quiz.statut == 'Passed' %}
                        <div class=\"alert alert-success mt-3\">
                            <strong>Congratulations!</strong> You passed the quiz.
                        </div>

                        {% if score >= 7 %}
                            <div class=\"permis-generation mt-4\">
                                <h4 class=\"mb-3\">Driver's License Eligibility</h4>
                                <p>You've qualified for a driver's license!</p>
                            </div>
                        {% endif %}

                    {% else %}
                        <div class=\"alert alert-danger mt-3\">
                            <strong>Sorry!</strong> You failed the quiz. Please try again.
                        </div>
                    {% endif %}
                </div>

                {# Rating section #}
                <div class=\"rating-section mt-4\">
                    <h4>Rate This Quiz</h4>
                    <p>Your feedback helps us improve!</p>
                    
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success mb-3\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger mb-3\">
                            {{ message }}
                        </div>
                    {% endfor %}

{{ form_start(ratingForm, {'attr': {'id': 'ratingForm', 'class': 'rating-form'}}) }}
                        <div class=\"rating-stars mb-4\">
                            {% for child in ratingForm.rating %}
                                <div class=\"star-option\">
                                    {{ form_widget(child, {'attr': {'class': 'star-radio'}}) }}
                                    <label for=\"{{ child.vars.id }}\" class=\"star-label\">
                                        <i class=\"fas fa-star\"></i>
                                    </label>
                                </div>
                            {% endfor %}
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary submit-rating\" id=\"submitRating\" disabled>
                            Submit Rating
                        </button>
                    {{ form_end(ratingForm) }}
                </div>

                <div class=\"mt-5 action-buttons\">
                    <a href=\"{{ path('app_quiz_generate') }}\" class=\"btn btn-outline-primary me-2\">
                        <i class=\"fas fa-redo me-2\"></i> Take Another Quiz
                    </a>
                    <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-home me-2\"></i> Return Home
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .result-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .result-box {
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .star-radio {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        .star-label {
            cursor: pointer;
            font-size: 2.5rem;
            color: #e0e0e0;
            transition: all 0.2s ease;
        }
        .star-label:hover,
        .star-radio:checked + .star-label,
        .star-label:hover ~ .star-label {
            color: #ffc107;
        }
        .submit-rating {
            padding: 10px 30px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .submit-rating:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        .submit-rating:not(:disabled):hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        @media (max-width: 576px) {
            .rating-stars {
                gap: 10px;
            }
            .star-label {
                font-size: 2rem;
            }
            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('ratingForm');
            const stars = document.querySelectorAll('.star-label');
            const submitBtn = document.getElementById('submitRating');
            const radioInputs = document.querySelectorAll('.star-radio');

            // Initialize form state
            updateSubmitButton();

            // Star rating interaction
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    // The corresponding radio input is the previous sibling of the label's parent
                    const radioId = this.getAttribute('for');
                    const radioInput = document.getElementById(radioId);
                    
                    // Update UI
                    updateStarColors(radioInput.value);
                    updateSubmitButton();
                });

                star.addEventListener('mouseover', function() {
                    const starValue = this.closest('.star-option').querySelector('.star-radio').value;
                    highlightStars(starValue);
                });

                star.addEventListener('mouseout', function() {
                    const checkedInput = document.querySelector('.star-radio:checked');
                    updateStarColors(checkedInput ? checkedInput.value : 0);
                });
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                if (!document.querySelector('.star-radio:checked')) {
                    e.preventDefault();
                    alert('Please select a rating before submitting');
                }
            });

            // Helper functions
            function updateStarColors(rating) {
                stars.forEach(star => {
                    const starValue = star.closest('.star-option').querySelector('.star-radio').value;
                    if (starValue <= rating) {
                        star.style.color = '#ffc107';
                    } else {
                        star.style.color = '#e0e0e0';
                    }
                });
            }

            function highlightStars(rating) {
                stars.forEach(star => {
                    const starValue = star.closest('.star-option').querySelector('.star-radio').value;
                    star.style.color = starValue <= rating ? '#ffc107' : '#e0e0e0';
                });
            }

            function updateSubmitButton() {
                const isChecked = document.querySelector('.star-radio:checked') !== null;
                submitBtn.disabled = !isChecked;
            }
        });
    </script>
{% endblock %}", "quiz/result.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\quiz\\result.html.twig");
    }
}
