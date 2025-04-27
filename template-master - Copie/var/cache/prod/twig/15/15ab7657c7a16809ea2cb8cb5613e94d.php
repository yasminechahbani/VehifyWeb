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
class __TwigTemplate_50f3d4fecd5169e780f0706f4e5e4070 extends Template
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
        // line 2
        $context["active_page"] = "Edit";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "user/modifierProfile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le profil
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t<div class=\"container py-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"card border-0 shadow-lg rounded-3\">
\t\t\t\t\t<div class=\"card-header bg-primary p-4 border-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<div class=\"text-white\">
\t\t\t\t\t\t\t\t<h3 class=\"h4 mb-1\">Modifier le profil</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small\">Mettez à jour vos informations personnelles</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-light btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-left me-2\"></i>Retour
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        // line 35
        yield "
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user me-2\"></i>Nom</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        // line 48
        yield "
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user me-2\"></i>Prénom</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t\t\t";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        // line 61
        yield "
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope me-2\"></i>Email</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mot_de_passe", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        // line 74
        yield "
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock me-2\"></i>Mot de passe</label>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted mt-1 d-block\">Laissez vide pour garder le mot de passe actuel</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t\t\t";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        // line 88
        yield "
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone me-2\"></i>Téléphone</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t\t\t";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "localisation", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Localisation"]]);
        // line 101
        yield "
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt me-2\"></i>Localisation</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-image me-2\"></i>Photo de profil</label>
\t\t\t\t\t\t\t\t\t";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        // line 116
        yield "
\t\t\t\t\t\t\t\t\t<small class=\"text-muted mt-1 d-block\">Formats acceptés : JPG, PNG, GIF (max. 5MB)</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-grid justify-content-center gap-2 mt-4\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 130
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<style>
\t\t.form-floating {
\t\t\tposition: relative;
\t\t}

\t\t.form-floating > label {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\tpadding: 1rem;
\t\t\topacity: 0.65;
\t\t}

\t\t.form-floating > .form-control {
\t\t\tpadding: 1rem;
\t\t\theight: calc(3.5rem + 2px);
\t\t}

\t\t.form-floating > .form-control:focus ~ label,
\t\t.form-floating > .form-control:not(:placeholder-shown) ~ label {
\t\t\ttransform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
\t\t\tbackground-color: white;
\t\t\tpadding: 0 0.5rem;
\t\t\theight: auto;
\t\t}

\t\t.btn-primary {
\t\t\tpadding: 12px 24px;
\t\t\tfont-size: 16px;
\t\t\tbackground-color: #0d6efd;
\t\t\tborder-color: #0d6efd;
\t\t}

\t\t.btn-primary:hover {
\t\t\tbackground-color: #0b5ed7;
\t\t\tborder-color: #0a58ca;
\t\t}

\t\t.card {
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t.form-control:focus {
\t\t\tborder-color: #0d6efd;
\t\t\tbox-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
\t\t}
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const requiredFields = form.querySelectorAll('input[type=\"text\"], input[type=\"email\"], input[type=\"tel\"]');
            
            requiredFields.forEach(field => {
                field.setAttribute('required', 'required');
                
                field.addEventListener('input', function() {
                    validateField(this);
                });
                
                field.addEventListener('blur', function() {
                    validateField(this);
                });
            });
            
            function validateField(field) {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    
                    let feedback = field.nextElementSibling;
                    if (!feedback || !feedback.classList.contains('invalid-feedback')) {
                        feedback = document.createElement('div');
                        feedback.className = 'invalid-feedback';
                        field.parentNode.appendChild(feedback);
                    }
                    feedback.textContent = 'Ce champ est obligatoire';
                } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                }
            }
            
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        validateField(field);
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur de validation',
                        text: 'Veuillez remplir tous les champs obligatoires',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            });
        });
    </script>

    <style>
        .is-invalid {
            border-color: #dc3545 !important;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e\") !important;
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .is-valid {
            border-color: #198754 !important;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e\") !important;
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .invalid-feedback {
            display: none;
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }

        .is-invalid ~ .invalid-feedback {
            display: block;
        }
    </style>
";
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
        return array (  197 => 130,  181 => 116,  179 => 111,  167 => 101,  165 => 96,  155 => 88,  153 => 83,  142 => 74,  140 => 69,  130 => 61,  128 => 56,  118 => 48,  116 => 43,  106 => 35,  104 => 30,  96 => 25,  86 => 18,  74 => 8,  67 => 7,  55 => 4,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/modifierProfile.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\user\\modifierProfile.html.twig");
    }
}
