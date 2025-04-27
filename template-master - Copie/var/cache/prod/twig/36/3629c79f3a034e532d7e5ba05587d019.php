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

/* user/_form.html.twig */
class __TwigTemplate_aed46c0749e291ceb4e07461a78e3de0 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseFlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseFlogin.html.twig", "user/_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Login/Register
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        yield "\">
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    <div class=\"container\" id=\"container\">

        <div class=\"form-container sign-up-container\">
            
            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"social-container\">
                <h1>Sign Up</h1>
            </div>
            ";
        // line 20
        yield "            <div class=\"form-group\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        // line 26
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 28), 'errors');
        yield "
                </div>
            </div>
            ";
        // line 32
        yield "            <div class=\"form-group\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["form"] ?? null), "prenom", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "valid", [], "any", false, false, false, 35)) ? ("") : ("is-invalid"))), "placeholder" => "Surname"]]);
        // line 38
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 45
        yield "            <div class=\"form-group\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["form"] ?? null), "email", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "valid", [], "any", false, false, false, 48)) ? ("") : ("is-invalid"))), "placeholder" => "Email"]]);
        // line 51
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 53), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 58
        yield "            <div class=\"form-group\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mot_de_passe", [], "any", false, false, false, 59), 'widget', ["attr" => ["type" => "password", "class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["form"] ?? null), "mot_de_passe", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "valid", [], "any", false, false, false, 62)) ? ("") : ("is-invalid"))), "placeholder" => "Password"]]);
        // line 65
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mot_de_passe", [], "any", false, false, false, 67), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 72
        yield "            <div class=\"form-group\">
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["form"] ?? null), "tel", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "valid", [], "any", false, false, false, 75)) ? ("") : ("is-invalid"))), "placeholder" => "Phone"]]);
        // line 78
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 80), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 85
        yield "            <div class=\"form-group\">
                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "localisation", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 88
($context["form"] ?? null), "localisation", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "valid", [], "any", false, false, false, 88)) ? ("") : ("is-invalid"))), "placeholder" => "Location"]]);
        // line 91
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "localisation", [], "any", false, false, false, 93), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 98
        yield "            <div class=\"form-group\">
                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 101
($context["form"] ?? null), "image", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "valid", [], "any", false, false, false, 101)) ? ("") : ("is-invalid")))]]);
        // line 103
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 105), 'errors');
        yield "
                </div>
            </div>

            <button class=\"signUp\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        yield "</button>
            ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
        </div>
        #SignInPage
        <div class=\"form-container sign-in-container\">
            ";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["loginForm"] ?? null), 'form_start', ["attr" => ["class" => "login-form", "novalidate" => "novalidate"]]);
        yield "
            <h1>Sign in</h1>

            <div class=\"social-container\">
                <a href=\"#\" class=\"social\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\" class=\"social\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"#\" class=\"social\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
            
            ";
        // line 123
        if ((array_key_exists("message", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["message"] ?? null)))) {
            // line 124
            yield "            <p class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 125
        yield "            ";
        // line 126
        yield "            <div class=\"form-group\">
                ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["loginForm"] ?? null), "email", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email", "required" => "required"]]);
        // line 133
        yield "
                <div class=\"invalid-feedback email-error\">
                    ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["loginForm"] ?? null), "email", [], "any", false, false, false, 135), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["loginForm"] ?? null), "mot_de_passe", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "required" => "required"]]);
        // line 146
        yield "
                <div class=\"invalid-feedback password-error\">
                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["loginForm"] ?? null), "mot_de_passe", [], "any", false, false, false, 148), 'errors');
        yield "
                </div>
            </div>
            <div>
                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["loginForm"] ?? null), "recaptcha", [], "any", false, false, false, 152), 'widget');
        yield "
            </div>


            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_verifier");
        yield "\">Forgot your password?</a>
            <button type=\"submit\" class=\"btn\">Sign In</button>
            ";
        // line 158
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["loginForm"] ?? null), 'form_end');
        yield "
        </div>

        <div class=\"overlay-container\">
            <div class=\"overlay\">
                <div class=\"overlay-panel overlay-left\">
                    <h1 class=\"welcome-title animate__fadeInDown\">Hello, Friend!</h1>
                    <p class=\"connection-text\">To keep connected with us please login with your personal info</p>
                    <button class=\"ghost\" id=\"signIn\">Sign In</button>
                </div>
                <div class=\"overlay-panel overlay-right\">
                    <h1 class=\"welcome-title animate__fadeInDown\">Hello, Friend!</h1>
                    <p class=\"connection-text\">To keep connected with us please login with your personal info</p>
                    <button class=\"ghost\" id=\"signUp\">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

";
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
     <script src=\"https://www.google.com/recaptcha/api.js?onload=onRecaptchaLoad&render=explicit\" async defer></script>
    
    <script>
        // Gestion du reCAPTCHA
        var recaptchaLoaded = false;
        
        function onRecaptchaLoad() {
            recaptchaLoaded = true;
            console.log('reCAPTCHA loaded');
            
            // Render pour le formulaire d'inscription
            if (document.getElementById('recaptcha-container')) {
                grecaptcha.render('recaptcha-container', {
                    sitekey: '";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptcha_site_key"] ?? null), "html", null, true);
        yield "',
                    theme: 'light',
                    size: 'normal',
                    callback: function(token) {
                        console.log('Register reCAPTCHA token:', token);
                        document.getElementById('recaptcha-error').style.display = 'none';
                    },
                    'expired-callback': function() {
                        console.log('Register reCAPTCHA expired');
                        document.getElementById('recaptcha-error').textContent = 'reCAPTCHA expired. Please verify again.';
                        document.getElementById('recaptcha-error').style.display = 'block';
                    },
                    'error-callback': function() {
                        console.log('Register reCAPTCHA error');
                        showRecaptchaError('recaptcha-error', 'Error loading reCAPTCHA. Please try again.');
                    }
                });
            }
            
            // Render pour le formulaire de connexion
            if (document.getElementById('login-recaptcha-container')) {
                grecaptcha.render('login-recaptcha-container', {
                    sitekey: '";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptcha_site_key"] ?? null), "html", null, true);
        yield "',
                    theme: 'light',
                    size: 'normal',
                    callback: function(token) {
                        console.log('Login reCAPTCHA token:', token);
                        document.getElementById('login-recaptcha-error').style.display = 'none';
                    },
                    'expired-callback': function() {
                        console.log('Login reCAPTCHA expired');
                        document.getElementById('login-recaptcha-error').textContent = 'reCAPTCHA expired. Please verify again.';
                        document.getElementById('login-recaptcha-error').style.display = 'block';
                    },
                    'error-callback': function() {
                        console.log('Login reCAPTCHA error');
                        showRecaptchaError('login-recaptcha-error', 'Error loading reCAPTCHA. Please try again.');
                    }
                });
            }
        }
        
        function showRecaptchaError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.style.display = 'block';
                errorElement.classList.add('recaptcha-shake');
                setTimeout(() => errorElement.classList.remove('recaptcha-shake'), 500);
            }
        }
        
        // Fallback si reCAPTCHA ne se charge pas
        setTimeout(function() {
            if (!recaptchaLoaded) {
                console.error('reCAPTCHA failed to load');
                showRecaptchaError('recaptcha-error', 'reCAPTCHA failed to load. Please refresh the page.');
                showRecaptchaError('login-recaptcha-error', 'reCAPTCHA failed to load. Please refresh the page.');
            }
        }, 5000);
        
        // Gestion des formulaires
        document.addEventListener('DOMContentLoaded', function() {
            // Animation entre les panneaux
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');
            
            if (signUpButton && signInButton && container) {
                signUpButton.addEventListener('click', () => container.classList.add(\"right-panel-active\"));
                signInButton.addEventListener('click', () => container.classList.remove(\"right-panel-active\"));
            }
            
            // Validation des formulaires
            const registerForm = document.getElementById('registerForm');
            const loginForm = document.getElementById('loginForm');
            
            if (registerForm) {
                registerForm.addEventListener('submit', function(e) {
                    if (!validateRecaptcha('recaptcha-container', 'recaptcha-error')) {
                        e.preventDefault();
                    }
                });
            }
            
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    if (!validateRecaptcha('login-recaptcha-container', 'login-recaptcha-error')) {
                        e.preventDefault();
                    }
                });
            }
        });
        
        function validateRecaptcha(containerId, errorId) {
            if (!recaptchaLoaded) {
                showRecaptchaError(errorId, 'reCAPTCHA not loaded. Please refresh the page.');
                return false;
            }
            
            const response = grecaptcha.getResponse();
            if (!response || response.length === 0) {
                showRecaptchaError(errorId, 'Please complete the reCAPTCHA verification.');
                document.getElementById(containerId).classList.add('recaptcha-shake');
                setTimeout(() => document.getElementById(containerId).classList.remove('recaptcha-shake'), 500);
                return false;
            }
            
            return true;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Références aux éléments DOM
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            // Vérification que les éléments existent
            if (!signUpButton || !signInButton || !container) {
                console.error('Un ou plusieurs éléments requis sont manquants dans le DOM');
                return;
            }

            // Gestionnaires d'événements
            function handleSignUpClick(e) {
                e.preventDefault();
                container.classList.add(\"right-panel-active\");
                setTimeout(() => document.querySelector('.sign-up-container input')?.focus(), 600);
            }

            function handleSignInClick(e) {
                e.preventDefault();
                container.classList.remove(\"right-panel-active\");
                setTimeout(() => document.querySelector('.sign-in-container input')?.focus(), 600);
            }

            // Ajout des écouteurs d'événements
            signUpButton.addEventListener('click', handleSignUpClick);
            signInButton.addEventListener('click', handleSignInClick);

            // Validation en temps réel
            function setupRealTimeValidation() {
                // Validation pour le formulaire d'inscription
                const signUpForm = document.querySelector('.sign-up-container form');
                if (signUpForm) {
                    setupFormValidation(signUpForm, {
                        'user_registration_form_nom': { required: true, minLength: 2 },
                        'user_registration_form_prenom': { required: true, minLength: 2 },
                        'user_registration_form_email': { required: true, email: true },
                        'user_registration_form_mot_de_passe': { required: true, minLength: 6 },
                        'user_registration_form_tel': { phone: true },
                        'user_registration_form_localisation': { required: false }
                    });
                }

                // Validation pour le formulaire de connexion
                const signInForm = document.querySelector('.sign-in-container form');
                if (signInForm) {
                    setupFormValidation(signInForm, {
                        'login_form_email': { required: true, email: true },
                        'login_form_mot_de_passe': { required: true }
                    });
                }
            }

            // Configuration de la validation pour un formulaire
            function setupFormValidation(form, fieldsConfig) {
                Object.keys(fieldsConfig).forEach(fieldName => {
                    const input = form.querySelector(`[name=\"\${fieldName}\"]`);
                    if (!input) return;

                    const config = fieldsConfig[fieldName];

                    // Validation lors de la perte de focus
                    input.addEventListener('blur', () => validateField(input, config));

                    // Validation en temps réel (pour certains champs)
                    if (fieldName.includes('email') || fieldName.includes('tel')) {
                        input.addEventListener('input', debounce(() => validateField(input, config), 500));
                    }
                });

                // Validation globale à la soumission
                form.addEventListener('submit', function(e) {
                    let isValid = true;
                    Object.keys(fieldsConfig).forEach(fieldName => {
                        const input = form.querySelector(`[name=\"\${fieldName}\"]`);
                        if (input && !validateField(input, fieldsConfig[fieldName])) {
                            isValid = false;
                        }
                    });

                    if (!isValid) {
                        e.preventDefault();
                        // Scroll vers le premier champ invalide
                        const firstInvalid = form.querySelector('.is-invalid');
                        if (firstInvalid) {
                            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                    }
                });
            }

            // Valide un champ selon sa configuration
            function validateField(input, config) {
                const value = input.value.trim();
                let isValid = true;
                let errorMessage = '';

                // Vérification des règles
                if (config.required && !value) {
                    isValid = false;
                    errorMessage = 'Ce champ est obligatoire';
                } else if (config.minLength && value.length < config.minLength) {
                    isValid = false;
                    errorMessage = `Doit contenir au moins \${config.minLength} caractères`;
                } else if (config.email && !isValidEmail(value)) {
                    isValid = false;
                    errorMessage = 'Veuillez entrer une adresse email valide';
                } else if (config.phone && value && !isValidPhone(value)) {
                    isValid = false;
                    errorMessage = 'Veuillez entrer un numéro de téléphone valide';
                }

                // Mise à jour de l'UI
                updateFieldValidationState(input, isValid, errorMessage);
                return isValid;
            }

            // Met à jour l'état visuel du champ
            function updateFieldValidationState(input, isValid, errorMessage) {
                const formGroup = input.closest('.form-group');
                if (!formGroup) return;

                // Supprime les anciens messages d'erreur
                const existingError = formGroup.querySelector('.real-time-error');
                if (existingError) existingError.remove();

                // Met à jour les classes
                input.classList.toggle('is-invalid', !isValid);
                input.classList.toggle('is-valid', isValid && input.value.trim() !== '');

                // Ajoute le message d'erreur si nécessaire
                if (!isValid) {
                    const errorElement = document.createElement('div');
                    errorElement.className = 'real-time-error invalid-feedback';
                    errorElement.textContent = errorMessage;
                    formGroup.appendChild(errorElement);
                }
            }

            // Fonctions de validation
            function isValidEmail(email) {
                return /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(email);
            }

            function isValidPhone(phone) {
                return /^[+]?[(]?[0-9]{3}[)]?[-\\s.]?[0-9]{3}[-\\s.]?[0-9]{4,6}\$/.test(phone);
            }

            // Anti-rebond pour les événements de saisie
            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this, args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), wait);
                };
            }

            // Initialisation
            setupRealTimeValidation();
            checkForErrors();
            highlightInvalidFields();

            // Vérifie les erreurs existantes
            function checkForErrors() {
                const signUpErrors = document.querySelectorAll('.sign-up-container .is-invalid');
                const signInErrors = document.querySelectorAll('.sign-in-container .is-invalid');

                if (signUpErrors.length > 0) {
                    container.classList.add(\"right-panel-active\");
                } else if (signInErrors.length > 0) {
                    container.classList.remove(\"right-panel-active\");
                }
            }

            // Animation pour les champs invalides
            function highlightInvalidFields() {
                document.querySelectorAll('.is-invalid').forEach(field => {
                    field.addEventListener('focus', () => field.classList.add('invalid-highlight'));
                    field.addEventListener('blur', () => field.classList.remove('invalid-highlight'));
                });
            }
            // Validation pour le formulaire de connexion
            const signInForm = document.querySelector('.sign-in-container form');
            if (signInForm) {
                signInForm.addEventListener('submit', function (e) {
                    let isValid = true;

                    // Vérification de l'email
                    const emailInput = signInForm.querySelector('[name=\"email\"]');
                    const emailError = signInForm.querySelector('.email-error');
                    if (!emailInput.value.trim()) {
                        emailInput.classList.add('is-invalid');
                        emailError.style.display = 'block';
                        isValid = false;
                    } else {
                        emailInput.classList.remove('is-invalid');
                        emailError.style.display = 'none';
                    }

                    // Vérification du mot de passe
                    const passwordInput = signInForm.querySelector('[name=\"mot_de_passe\"]');
                    const passwordError = signInForm.querySelector('.password-error');
                    if (!passwordInput.value.trim()) {
                        passwordInput.classList.add('is-invalid');
                        passwordError.style.display = 'block';
                        isValid = false;
                    } else {
                        passwordInput.classList.remove('is-invalid');
                        passwordError.style.display = 'none';
                    }

                    if (!isValid) {
                        e.preventDefault();
                        // Scroll vers le premier champ invalide
                        const firstInvalid = signInForm.querySelector('.is-invalid');
                        if (firstInvalid) {
                            firstInvalid.scrollIntoView({behavior: 'smooth', block: 'center'});
                        }
                    }
                });

                // Optionnel: Validation en temps réel
                const emailInput = signInForm.querySelector('[name=\"email\"]');
                const passwordInput = signInForm.querySelector('[name=\"mot_de_passe\"]');

                if (emailInput) {
                    emailInput.addEventListener('input', function () {
                        if (this.value.trim()) {
                            this.classList.remove('is-invalid');
                            signInForm.querySelector('.email-error').style.display = 'none';
                        }
                    });
                }

                if (passwordInput) {
                    passwordInput.addEventListener('input', function () {
                        if (this.value.trim()) {
                            this.classList.remove('is-invalid');
                            signInForm.querySelector('.password-error').style.display = 'none';
                        }
                    });
                }
            }});



    </script>

    <style>
        .is-valid {
            border-color: #28a745 !important;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .invalid-highlight {
            animation: pulse 0.5s ease-in-out;
            box-shadow: 0 0 0 2px rgba(220, 53, 69, 0.5);
        }

        .real-time-error {
            display: block;
            margin-top: 0.25rem;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5); }
            70% { box-shadow: 0 0 0 10px rgba(220, 53, 69, 0); }
            100% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0); }
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
        return "user/_form.html.twig";
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
        return array (  373 => 216,  348 => 194,  330 => 180,  323 => 179,  298 => 158,  293 => 156,  286 => 152,  279 => 148,  275 => 146,  273 => 140,  265 => 135,  261 => 133,  259 => 127,  256 => 126,  254 => 125,  248 => 124,  246 => 123,  234 => 114,  227 => 110,  223 => 109,  216 => 105,  212 => 103,  210 => 101,  209 => 99,  206 => 98,  199 => 93,  195 => 91,  193 => 88,  192 => 86,  189 => 85,  182 => 80,  178 => 78,  176 => 75,  175 => 73,  172 => 72,  165 => 67,  161 => 65,  159 => 62,  158 => 59,  155 => 58,  148 => 53,  144 => 51,  142 => 48,  141 => 46,  138 => 45,  131 => 40,  127 => 38,  125 => 35,  124 => 33,  121 => 32,  115 => 28,  111 => 26,  109 => 21,  106 => 20,  99 => 15,  93 => 11,  86 => 10,  79 => 8,  73 => 6,  66 => 5,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\user\\_form.html.twig");
    }
}
