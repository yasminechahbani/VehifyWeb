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
class __TwigTemplate_7f43476191836fd5c2ff17ea3b4a195b extends Template
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
            // line 21
            yield "                        ";
            if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 21, $this->source); })()) >= 7)) {
                // line 22
                yield "                            <div class=\"permis-generation mt-4\">
                                <h4 class=\"mb-3\">Driver's License Eligibility</h4>
                                <p>You've qualified for a driver's license!</p>

                               ///////////////////////////////////////:
                            </div>
                        ";
            }
            // line 29
            yield "
                    ";
        } else {
            // line 31
            yield "                        <div class=\"alert alert-danger mt-3\">
                            <strong>Sorry!</strong> You failed the quiz. Please try again.
                        </div>
                    ";
        }
        // line 35
        yield "                </div>

                ";
        // line 38
        yield "                <div class=\"rating-section mt-4\">
                    <h4>Rate This Quiz</h4>
                    <p>Your feedback helps us improve!</p>

                    <form id=\"ratingForm\" method=\"post\" action=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\">
                        <div class=\"rating-stars mb-3\">
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            yield "                                <i class=\"fa fa-star\" data-rating=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"></i>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                        </div>
                        <input type=\"hidden\" name=\"rating\" id=\"rating\" value=\"\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitRating\" disabled>Submit Rating</button>
                    </form>
                </div>

                <div class=\"mt-5\">
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_generate");
        yield "\" class=\"btn btn-outline-primary me-2\">
                        <i class=\"fa fa-refresh me-2\"></i> Take Another Quiz
                    </a>
                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fa fa-home me-2\"></i> Return Home
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

    // line 66
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

        // line 67
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Existing star rating script
            const stars = document.querySelectorAll('.rating-stars .fa-star');
            const ratingInput = document.getElementById('rating');
            const submitButton = document.getElementById('submitRating');

            if (ratingInput.value) {
                highlightStars(ratingInput.value);
            }

            stars.forEach(star => {
                star.addEventListener('mouseover', function() {
                    const rating = this.getAttribute('data-rating');
                    highlightStars(rating);
                });

                star.addEventListener('click', function() {
                    const rating = this.getAttribute('data-rating');
                    ratingInput.value = rating;
                    submitButton.disabled = false;
                    highlightStars(rating);
                });
            });

            document.querySelector('.rating-stars').addEventListener('mouseleave', function() {
                highlightStars(ratingInput.value || 0);
            });

            function highlightStars(rating) {
                stars.forEach(star => {
                    const starRating = star.getAttribute('data-rating');
                    star.classList.toggle('text-warning', starRating <= rating);
                });
            }

            // Add confirmation for permis generation
            const permisForm = document.querySelector('.permis-generation form');
            if (permisForm) {
                 permisForm.addEventListener('submit', function(e) {
                    const category = document.getElementById('category').value;
                    if (!category) {
                        e.preventDefault();
                        alert('Please select a license category');
                    } else if (!confirm('Are you sure you want to generate your driver\\'s license?')) {
                        e.preventDefault();
                    }
                });
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
        return array (  222 => 67,  209 => 66,  190 => 57,  184 => 54,  175 => 47,  166 => 45,  162 => 44,  157 => 42,  151 => 38,  147 => 35,  141 => 31,  137 => 29,  128 => 22,  125 => 21,  119 => 16,  117 => 15,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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

                        {# Add permis generation section for successful quizzes #}
                        {% if score >= 7 %}
                            <div class=\"permis-generation mt-4\">
                                <h4 class=\"mb-3\">Driver's License Eligibility</h4>
                                <p>You've qualified for a driver's license!</p>

                               ///////////////////////////////////////:
                            </div>
                        {% endif %}

                    {% else %}
                        <div class=\"alert alert-danger mt-3\">
                            <strong>Sorry!</strong> You failed the quiz. Please try again.
                        </div>
                    {% endif %}
                </div>

                {# Keep the existing rating section #}
                <div class=\"rating-section mt-4\">
                    <h4>Rate This Quiz</h4>
                    <p>Your feedback helps us improve!</p>

                    <form id=\"ratingForm\" method=\"post\" action=\"{{ path('app_quiz_rate', {'id': quiz.id}) }}\">
                        <div class=\"rating-stars mb-3\">
                            {% for i in 1..5 %}
                                <i class=\"fa fa-star\" data-rating=\"{{ i }}\"></i>
                            {% endfor %}
                        </div>
                        <input type=\"hidden\" name=\"rating\" id=\"rating\" value=\"\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"submitRating\" disabled>Submit Rating</button>
                    </form>
                </div>

                <div class=\"mt-5\">
                    <a href=\"{{ path('app_quiz_generate') }}\" class=\"btn btn-outline-primary me-2\">
                        <i class=\"fa fa-refresh me-2\"></i> Take Another Quiz
                    </a>
                    <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fa fa-home me-2\"></i> Return Home
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Existing star rating script
            const stars = document.querySelectorAll('.rating-stars .fa-star');
            const ratingInput = document.getElementById('rating');
            const submitButton = document.getElementById('submitRating');

            if (ratingInput.value) {
                highlightStars(ratingInput.value);
            }

            stars.forEach(star => {
                star.addEventListener('mouseover', function() {
                    const rating = this.getAttribute('data-rating');
                    highlightStars(rating);
                });

                star.addEventListener('click', function() {
                    const rating = this.getAttribute('data-rating');
                    ratingInput.value = rating;
                    submitButton.disabled = false;
                    highlightStars(rating);
                });
            });

            document.querySelector('.rating-stars').addEventListener('mouseleave', function() {
                highlightStars(ratingInput.value || 0);
            });

            function highlightStars(rating) {
                stars.forEach(star => {
                    const starRating = star.getAttribute('data-rating');
                    star.classList.toggle('text-warning', starRating <= rating);
                });
            }

            // Add confirmation for permis generation
            const permisForm = document.querySelector('.permis-generation form');
            if (permisForm) {
                 permisForm.addEventListener('submit', function(e) {
                    const category = document.getElementById('category').value;
                    if (!category) {
                        e.preventDefault();
                        alert('Please select a license category');
                    } else if (!confirm('Are you sure you want to generate your driver\\'s license?')) {
                        e.preventDefault();
                    }
                });
            }
        });
    </script>
{% endblock %}", "quiz/result.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\quiz\\result.html.twig");
    }
}
