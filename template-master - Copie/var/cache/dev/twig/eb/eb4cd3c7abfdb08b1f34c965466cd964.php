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

/* permis/new.html.twig */
class __TwigTemplate_d33bf1407540baba4f5395c9a25e4730 extends Template
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
        return "baseEmployeFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/new.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "permis/new.html.twig", 1);
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

        yield "Nouveau Permis de Conduire | CarServ";
        
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
        yield "    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-bg-2.jpg"), "html", null, true);
        yield ");\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Nouveau Permis de Conduire</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_front");
        yield "\">Accueil</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Nouveau Permis</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Form Section Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-lg-8 col-md-12\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header bg-primary text-white\">
                            <h5 class=\"mb-0\"><i class=\"fas fa-id-card me-2\"></i>Nouveau Permis de Conduire</h5>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["id" => "permis-form", "class" => "needs-validation"]]);
        yield "
                                <div class=\"row g-3\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "user_id", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Sélectionner un utilisateur"]);
        yield "
                                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "user_id", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-select user-selector"]]);
        yield "
                                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "user_id", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                            <div id=\"quiz-message-container\" class=\"mt-2\"></div>
                                        </div>
                                    </div>
                                
                                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "has_passed_quiz", [], "any", false, false, false, 43), 'widget');
        yield "
                                
                                    <div id=\"permis-fields-container\" class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "numero_permis", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Numéro de permis"]);
        yield "
                                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "numero_permis", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control permis-field", "placeholder" => "Entrez le numéro du permis"]]);
        // line 54
        yield "
                                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "numero_permis", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                            </div>
                                        </div>
                                    
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "categorie", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Catégorie"]);
        yield "
                                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "categorie", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-select permis-field"]]);
        yield "
                                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "categorie", [], "any", false, false, false, 63), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                            </div>
                                        </div>
                                    
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "etat", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "État"]);
        yield "
                                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "etat", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-select permis-field"]]);
        yield "
                                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "etat", [], "any", false, false, false, 71), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                            </div>
                                        </div>
                                    
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "date_delivrance", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Date de délivrance"]);
        yield "
                                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date_delivrance", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control permis-field datepicker", "placeholder" => "JJ/MM/AAAA"]]);
        // line 83
        yield "
                                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "date_delivrance", [], "any", false, false, false, 84), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class=\"col-12 mt-4\">
                                        <div class=\"d-flex justify-content-between\">
                                            <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_front");
        yield "\" class=\"btn btn-secondary\">
                                                <i class=\"fas fa-arrow-left me-2\"></i>Retour
                                            </a>
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fas fa-save me-2\"></i>Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
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

        // line 111
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .form-label {
            margin-bottom: 0.5rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
        }
        .card-header {
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }
        .btn {
            padding: 0.5rem 1.5rem;
            border-radius: 0.25rem;
        }
        .text-danger {
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        // line 138
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userSelector = document.querySelector('.user-selector');
            const permisFieldContainers = document.querySelectorAll('.permis-field-container');
            const hasPassedQuizField = document.querySelector('input[name=\"permis[has_passed_quiz]\"]');
            const permisForm = document.getElementById('permis-form');
            const submitButton = permisForm ? permisForm.querySelector('button[type=\"submit\"]') : null;
            const quizMessageContainer = document.getElementById('quiz-message-container');

            // Initially hide all permis fields
            document.querySelectorAll('.permis-field').forEach(field => {
                field.closest('.form-group').style.display = 'none';
            });

            if (submitButton) {
                submitButton.disabled = false;
            }

            function togglePermisFields(hasPassedQuiz) {
                const fields = document.querySelectorAll('.permis-field');
                quizMessageContainer.innerHTML = '';

                if (hasPassedQuiz === 'true') {
                    fields.forEach(field => {
                        field.closest('.form-group').style.display = 'block';
                    });
                    if (submitButton) submitButton.disabled = false;
                } else {
                    fields.forEach(field => {
                        field.closest('.form-group').style.display = 'none';
                    });
                    if (submitButton) submitButton.disabled = false;

                    if (userSelector && userSelector.value) {
                        quizMessageContainer.innerHTML = `
                            <div class=\"alert alert-warning mt-2\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Cet utilisateur n'a pas encore passé le test requis. Un permis ne peut être créé qu'après réussite du test.
                            </div>`;
                    }
                }
            }

            // Initial state
            togglePermisFields('false');

            // User selection handler
            if (userSelector) {
                userSelector.addEventListener('change', function() {
                    if (!this.value) {
                        togglePermisFields('false');
                        return;
                    }

                    quizMessageContainer.innerHTML = `
                        <div class=\"text-center my-2\">
                            <div class=\"spinner-border text-primary\" role=\"status\">
                                <span class=\"visually-hidden\">Chargement...</span>
                            </div>
                        </div>`;

                    fetch(`/Quiz/check-user-quiz/\${this.value}`)
                        .then(response => response.json())
                        .then(data => {
                            if (hasPassedQuizField) {
                                hasPassedQuizField.value = data.hasPassed ? 'true' : 'false';
                            }
                            togglePermisFields(data.hasPassed ? 'true' : 'false');
                        })
                        .catch(error => {
                            console.error('Erreur lors de la vérification du quiz:', error);
                            togglePermisFields('false');
                            quizMessageContainer.innerHTML = `
                                <div class=\"alert alert-danger mt-2\">
                                    <i class=\"fas fa-times-circle me-2\"></i>
                                    Erreur lors de la vérification du statut du quiz. Veuillez réessayer.
                                </div>`;
                        });
                });
            }

            // Check initial status (for edit mode)
            if (hasPassedQuizField && hasPassedQuizField.value === 'true') {
                togglePermisFields('true');
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
        return "permis/new.html.twig";
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
        return array (  333 => 138,  320 => 137,  283 => 111,  270 => 110,  250 => 100,  238 => 91,  228 => 84,  225 => 83,  223 => 78,  219 => 77,  210 => 71,  206 => 70,  202 => 69,  193 => 63,  189 => 62,  185 => 61,  176 => 55,  173 => 54,  171 => 49,  167 => 48,  159 => 43,  151 => 38,  147 => 37,  143 => 36,  136 => 32,  114 => 13,  105 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Nouveau Permis de Conduire | CarServ{% endblock %}

{% block body %}
    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url({{ asset('img/carousel-bg-2.jpg') }});\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Nouveau Permis de Conduire</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_employe_front') }}\">Accueil</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Nouveau Permis</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Form Section Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-lg-8 col-md-12\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header bg-primary text-white\">
                            <h5 class=\"mb-0\"><i class=\"fas fa-id-card me-2\"></i>Nouveau Permis de Conduire</h5>
                        </div>
                        <div class=\"card-body\">
                            {{ form_start(form, {'attr': {'id': 'permis-form', 'class': 'needs-validation'}}) }}
                                <div class=\"row g-3\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            {{ form_label(form.user_id, 'Sélectionner un utilisateur', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                                            {{ form_widget(form.user_id, {'attr': {'class': 'form-select user-selector'}}) }}
                                            {{ form_errors(form.user_id, {'attr': {'class': 'text-danger'}}) }}
                                            <div id=\"quiz-message-container\" class=\"mt-2\"></div>
                                        </div>
                                    </div>
                                
                                    {{ form_widget(form.has_passed_quiz) }}
                                
                                    <div id=\"permis-fields-container\" class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                {{ form_label(form.numero_permis, 'Numéro de permis', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                                                {{ form_widget(form.numero_permis, {
                                                    'attr': {
                                                        'class': 'form-control permis-field',
                                                        'placeholder': 'Entrez le numéro du permis'
                                                    }
                                                }) }}
                                                {{ form_errors(form.numero_permis, {'attr': {'class': 'text-danger'}}) }}
                                            </div>
                                        </div>
                                    
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                {{ form_label(form.categorie, 'Catégorie', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                                                {{ form_widget(form.categorie, {'attr': {'class': 'form-select permis-field'}}) }}
                                                {{ form_errors(form.categorie, {'attr': {'class': 'text-danger'}}) }}
                                            </div>
                                        </div>
                                    
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                {{ form_label(form.etat, 'État', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                                                {{ form_widget(form.etat, {'attr': {'class': 'form-select permis-field'}}) }}
                                                {{ form_errors(form.etat, {'attr': {'class': 'text-danger'}}) }}
                                            </div>
                                        </div>
                                    
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                {{ form_label(form.date_delivrance, 'Date de délivrance', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                                                {{ form_widget(form.date_delivrance, {
                                                    'attr': {
                                                        'class': 'form-control permis-field datepicker',
                                                        'placeholder': 'JJ/MM/AAAA'
                                                    }
                                                }) }}
                                                {{ form_errors(form.date_delivrance, {'attr': {'class': 'text-danger'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class=\"col-12 mt-4\">
                                        <div class=\"d-flex justify-content-between\">
                                            <a href=\"{{ path('app_employe_front') }}\" class=\"btn btn-secondary\">
                                                <i class=\"fas fa-arrow-left me-2\"></i>Retour
                                            </a>
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fas fa-save me-2\"></i>Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Section End -->
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .form-label {
            margin-bottom: 0.5rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
        }
        .card-header {
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }
        .btn {
            padding: 0.5rem 1.5rem;
            border-radius: 0.25rem;
        }
        .text-danger {
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userSelector = document.querySelector('.user-selector');
            const permisFieldContainers = document.querySelectorAll('.permis-field-container');
            const hasPassedQuizField = document.querySelector('input[name=\"permis[has_passed_quiz]\"]');
            const permisForm = document.getElementById('permis-form');
            const submitButton = permisForm ? permisForm.querySelector('button[type=\"submit\"]') : null;
            const quizMessageContainer = document.getElementById('quiz-message-container');

            // Initially hide all permis fields
            document.querySelectorAll('.permis-field').forEach(field => {
                field.closest('.form-group').style.display = 'none';
            });

            if (submitButton) {
                submitButton.disabled = false;
            }

            function togglePermisFields(hasPassedQuiz) {
                const fields = document.querySelectorAll('.permis-field');
                quizMessageContainer.innerHTML = '';

                if (hasPassedQuiz === 'true') {
                    fields.forEach(field => {
                        field.closest('.form-group').style.display = 'block';
                    });
                    if (submitButton) submitButton.disabled = false;
                } else {
                    fields.forEach(field => {
                        field.closest('.form-group').style.display = 'none';
                    });
                    if (submitButton) submitButton.disabled = false;

                    if (userSelector && userSelector.value) {
                        quizMessageContainer.innerHTML = `
                            <div class=\"alert alert-warning mt-2\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Cet utilisateur n'a pas encore passé le test requis. Un permis ne peut être créé qu'après réussite du test.
                            </div>`;
                    }
                }
            }

            // Initial state
            togglePermisFields('false');

            // User selection handler
            if (userSelector) {
                userSelector.addEventListener('change', function() {
                    if (!this.value) {
                        togglePermisFields('false');
                        return;
                    }

                    quizMessageContainer.innerHTML = `
                        <div class=\"text-center my-2\">
                            <div class=\"spinner-border text-primary\" role=\"status\">
                                <span class=\"visually-hidden\">Chargement...</span>
                            </div>
                        </div>`;

                    fetch(`/Quiz/check-user-quiz/\${this.value}`)
                        .then(response => response.json())
                        .then(data => {
                            if (hasPassedQuizField) {
                                hasPassedQuizField.value = data.hasPassed ? 'true' : 'false';
                            }
                            togglePermisFields(data.hasPassed ? 'true' : 'false');
                        })
                        .catch(error => {
                            console.error('Erreur lors de la vérification du quiz:', error);
                            togglePermisFields('false');
                            quizMessageContainer.innerHTML = `
                                <div class=\"alert alert-danger mt-2\">
                                    <i class=\"fas fa-times-circle me-2\"></i>
                                    Erreur lors de la vérification du statut du quiz. Veuillez réessayer.
                                </div>`;
                        });
                });
            }

            // Check initial status (for edit mode)
            if (hasPassedQuizField && hasPassedQuizField.value === 'true') {
                togglePermisFields('true');
            }
        });
    </script>
{% endblock %}", "permis/new.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\permis\\new.html.twig");
    }
}
