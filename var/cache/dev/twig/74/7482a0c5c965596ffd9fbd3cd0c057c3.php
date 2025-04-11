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

/* user/modifierProfile.html.twig */
class __TwigTemplate_db22e09a3255d92c18a321c1dff01625 extends Template
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
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseFhomePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/modifierProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/modifierProfile.html.twig"));

        // line 2
        $context["active_page"] = "Edit";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "user/modifierProfile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Edit Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "<div class=\"\">
    <div class=\"\">
        <div class=\"\">
            <div class=\"card shadow-lg border-0 rounded-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <h3 class=\"h4 mb-0\"><i class=\"fas fa-user-edit me-2\"></i>Edit Profile</h3>
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-sm btn-outline-light\">
                            <i class=\"fas fa-home me-1\"></i> Back to Home
                        </a>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["id" => "user-edit-form", "class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

        

                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"user_nom\" class=\"form-label\">Last Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-user\"></i></span>
                                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "placeholder" => "Enter your last name"]]);
        // line 37
        yield "
                                </div>
                                <div class=\"invalid-feedback\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"user_prenom\" class=\"form-label\">First Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-user\"></i></span>
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "prenom", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "placeholder" => "Enter your first name"]]);
        // line 54
        yield "
                                </div>
                                <div class=\"invalid-feedback\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_email\" class=\"form-label\">Email Address</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-envelope\"></i></span>
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "placeholder" => "Enter your email address"]]);
        // line 71
        yield "
                        </div>
                        <div class=\"invalid-feedback\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), 'errors');
        yield "</div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_mot_de_passe\" class=\"form-label\">Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-lock\"></i></span>
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter new password (leave blank to keep current)"]]);
        // line 85
        yield "
                        </div>
                        <div class=\"invalid-feedback\">";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 87), 'errors');
        yield "</div>
                        <small class=\"text-muted mt-1\"><i class=\"fas fa-info-circle me-1\"></i>Leave blank to keep your current password</small>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_tel\" class=\"form-label\">Phone Number</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-phone\"></i></span>
                            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "tel", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "placeholder" => "Enter your phone number"]]);
        // line 101
        yield "
                        </div>
                        <div class=\"invalid-feedback\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "tel", [], "any", false, false, false, 103), 'errors');
        yield "</div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_localisation\" class=\"form-label\">Location</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-map-marker-alt\"></i></span>
                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "localisation", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "placeholder" => "Enter your location"]]);
        // line 116
        yield "
                        </div>
                        <div class=\"invalid-feedback\">";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "localisation", [], "any", false, false, false, 118), 'errors');
        yield "</div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label class=\"form-label\"><i class=\"fas fa-camera me-2\"></i>Profile Picture</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-image\"></i></span>
                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "image", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        // line 130
        yield "
                        </div>
                        <div class=\"invalid-feedback\">";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "image", [], "any", false, false, false, 132), 'errors');
        yield "</div>
                        <small class=\"text-muted mt-1\"><i class=\"fas fa-info-circle me-1\"></i>Accepted formats: JPG, PNG, GIF (max. 5MB)</small>
                    </div>

                    <div class=\"d-grid gap-3 mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-save me-2\"></i>Save Changes
                        </button>
                    </div>

                    ";
        // line 142
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        yield "
                </div>
                

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
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

        // line 149
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .input-group-text {
            border-right: none;
            transition: all 0.3s;
        }
        .form-control {
            border-left: none;
            padding-left: 5px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ced4da;
        }
        .form-control:focus + .input-group-text {
            border-color: #86b7fe;
            color: #86b7fe;
        }
        .card {
            border: none;
            overflow: hidden;
        }
        .card-header {
            padding: 1.5rem;
        }
        .card-footer {
            border-top: 1px solid rgba(0,0,0,.05);
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 188
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#user-edit-form').validate({
                rules: {
                    'user[nom]': {
                        required: true,
                        minlength: 2
                    },
                    'user[prenom]': {
                        required: true,
                        minlength: 2
                    },
                    'user[email]': {
                        required: true,
                        email: true
                    },
                    'user[tel]': {
                        required: true,
                        pattern: /^[0-9+()\\s\\-]{8,20}\$/
                    },
                    'user[localisation]': {
                        required: true
                    },
                    'user[mot_de_passe]': {
                        minlength: 8
                    }
                },
                messages: {
                    'user[nom]': {
                        required: 'Please enter your last name',
                        minlength: 'Last name must be at least 2 characters'
                    },
                    'user[prenom]': {
                        required: 'Please enter your first name',
                        minlength: 'First name must be at least 2 characters'
                    },
                    'user[email]': {
                        required: 'Please enter your email address',
                        email: 'Please enter a valid email address'
                    },
                    'user[tel]': {
                        required: 'Please enter your phone number',
                        pattern: 'Please enter a valid phone number'
                    },
                    'user[localisation]': {
                        required: 'Please enter your location'
                    },
                    'user[mot_de_passe]': {
                        minlength: 'Password must be at least 8 characters'
                    }
                },
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                highlight: function(element) {
                    \$(element).addClass('is-invalid').removeClass('is-valid');
                    \$(element).closest('.form-group').find('.input-group-text').css({
                        'border-color': '#dc3545',
                        'color': '#dc3545'
                    });
                },
                unhighlight: function(element) {
                    \$(element).addClass('is-valid').removeClass('is-invalid');
                    \$(element).closest('.form-group').find('.input-group-text').css({
                        'border-color': '#ced4da',
                        'color': '#6c757d'
                    });
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element.closest('.form-group').find('.input-group'));
                }
            });
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
        return "user/modifierProfile.html.twig";
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
        return array (  348 => 188,  335 => 187,  286 => 149,  273 => 148,  257 => 142,  244 => 132,  240 => 130,  238 => 125,  228 => 118,  224 => 116,  222 => 110,  212 => 103,  208 => 101,  206 => 95,  195 => 87,  191 => 85,  189 => 80,  179 => 73,  175 => 71,  173 => 65,  161 => 56,  157 => 54,  155 => 48,  143 => 39,  139 => 37,  137 => 31,  124 => 21,  114 => 14,  105 => 7,  92 => 6,  69 => 4,  58 => 1,  56 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'Edit' %}

{% block title %}Edit Profile{% endblock %}

{% block content %}
<div class=\"\">
    <div class=\"\">
        <div class=\"\">
            <div class=\"card shadow-lg border-0 rounded-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <h3 class=\"h4 mb-0\"><i class=\"fas fa-user-edit me-2\"></i>Edit Profile</h3>
                        <a href=\"{{ path('app_home') }}\" class=\"btn btn-sm btn-outline-light\">
                            <i class=\"fas fa-home me-1\"></i> Back to Home
                        </a>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    {{ form_start(form, {'attr': {'id': 'user-edit-form', 'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

        

                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"user_nom\" class=\"form-label\">Last Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-user\"></i></span>
                                    {{ form_widget(form.nom, {
                                        'attr': {
                                            'class': 'form-control',
                                            'required': 'required',
                                            'placeholder': 'Enter your last name'
                                        }
                                    }) }}
                                </div>
                                <div class=\"invalid-feedback\">{{ form_errors(form.nom) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"user_prenom\" class=\"form-label\">First Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-user\"></i></span>
                                    {{ form_widget(form.prenom, {
                                        'attr': {
                                            'class': 'form-control',
                                            'required': 'required',
                                            'placeholder': 'Enter your first name'
                                        }
                                    }) }}
                                </div>
                                <div class=\"invalid-feedback\">{{ form_errors(form.prenom) }}</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_email\" class=\"form-label\">Email Address</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-envelope\"></i></span>
                            {{ form_widget(form.email, {
                                'attr': {
                                    'class': 'form-control',
                                    'required': 'required',
                                    'placeholder': 'Enter your email address'
                                }
                            }) }}
                        </div>
                        <div class=\"invalid-feedback\">{{ form_errors(form.email) }}</div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_mot_de_passe\" class=\"form-label\">Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-lock\"></i></span>
                            {{ form_widget(form.mot_de_passe, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Enter new password (leave blank to keep current)'
                                }
                            }) }}
                        </div>
                        <div class=\"invalid-feedback\">{{ form_errors(form.mot_de_passe) }}</div>
                        <small class=\"text-muted mt-1\"><i class=\"fas fa-info-circle me-1\"></i>Leave blank to keep your current password</small>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_tel\" class=\"form-label\">Phone Number</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-phone\"></i></span>
                            {{ form_widget(form.tel, {
                                'attr': {
                                    'class': 'form-control',
                                    'required': 'required',
                                    'placeholder': 'Enter your phone number'
                                }
                            }) }}
                        </div>
                        <div class=\"invalid-feedback\">{{ form_errors(form.tel) }}</div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label for=\"user_localisation\" class=\"form-label\">Location</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-map-marker-alt\"></i></span>
                            {{ form_widget(form.localisation, {
                                'attr': {
                                    'class': 'form-control',
                                    'required': 'required',
                                    'placeholder': 'Enter your location'
                                }
                            }) }}
                        </div>
                        <div class=\"invalid-feedback\">{{ form_errors(form.localisation) }}</div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label class=\"form-label\"><i class=\"fas fa-camera me-2\"></i>Profile Picture</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-image\"></i></span>
                            {{ form_widget(form.image, {
                                'attr': {
                                    'class': 'form-control',
                                    'accept': 'image/*'
                                }
                            }) }}
                        </div>
                        <div class=\"invalid-feedback\">{{ form_errors(form.image) }}</div>
                        <small class=\"text-muted mt-1\"><i class=\"fas fa-info-circle me-1\"></i>Accepted formats: JPG, PNG, GIF (max. 5MB)</small>
                    </div>

                    <div class=\"d-grid gap-3 mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-save me-2\"></i>Save Changes
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
                

{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .input-group-text {
            border-right: none;
            transition: all 0.3s;
        }
        .form-control {
            border-left: none;
            padding-left: 5px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ced4da;
        }
        .form-control:focus + .input-group-text {
            border-color: #86b7fe;
            color: #86b7fe;
        }
        .card {
            border: none;
            overflow: hidden;
        }
        .card-header {
            padding: 1.5rem;
        }
        .card-footer {
            border-top: 1px solid rgba(0,0,0,.05);
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
    </style>
{% endblock %}

{% block scripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#user-edit-form').validate({
                rules: {
                    'user[nom]': {
                        required: true,
                        minlength: 2
                    },
                    'user[prenom]': {
                        required: true,
                        minlength: 2
                    },
                    'user[email]': {
                        required: true,
                        email: true
                    },
                    'user[tel]': {
                        required: true,
                        pattern: /^[0-9+()\\s\\-]{8,20}\$/
                    },
                    'user[localisation]': {
                        required: true
                    },
                    'user[mot_de_passe]': {
                        minlength: 8
                    }
                },
                messages: {
                    'user[nom]': {
                        required: 'Please enter your last name',
                        minlength: 'Last name must be at least 2 characters'
                    },
                    'user[prenom]': {
                        required: 'Please enter your first name',
                        minlength: 'First name must be at least 2 characters'
                    },
                    'user[email]': {
                        required: 'Please enter your email address',
                        email: 'Please enter a valid email address'
                    },
                    'user[tel]': {
                        required: 'Please enter your phone number',
                        pattern: 'Please enter a valid phone number'
                    },
                    'user[localisation]': {
                        required: 'Please enter your location'
                    },
                    'user[mot_de_passe]': {
                        minlength: 'Password must be at least 8 characters'
                    }
                },
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                highlight: function(element) {
                    \$(element).addClass('is-invalid').removeClass('is-valid');
                    \$(element).closest('.form-group').find('.input-group-text').css({
                        'border-color': '#dc3545',
                        'color': '#dc3545'
                    });
                },
                unhighlight: function(element) {
                    \$(element).addClass('is-valid').removeClass('is-invalid');
                    \$(element).closest('.form-group').find('.input-group-text').css({
                        'border-color': '#ced4da',
                        'color': '#6c757d'
                    });
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element.closest('.form-group').find('.input-group'));
                }
            });
        });
    </script>
{% endblock %}", "user/modifierProfile.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\modifierProfile.html.twig");
    }
}
