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

/* welcomePage/verifier.html.twig */
class __TwigTemplate_8bffe368713309b0c54d784338a93e2c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "baseFlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcomePage/verifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcomePage/verifier.html.twig"));

        $this->parent = $this->loadTemplate("baseFlogin.html.twig", "welcomePage/verifier.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .verification-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .verification-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .verification-icon {
            font-size: 48px;
            color: #6e00ff;
            margin-bottom: 20px;
        }

        .verification-title {
            color: #2d3748;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .verification-subtitle {
            color: #718096;
            margin-bottom: 30px;
        }

        .otp-container {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 30px;
        }

        .otp-input {
            width: 50px;
            height: 50px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s;
        }

        .otp-input:focus {
            border-color: #6e00ff;
            box-shadow: 0 0 0 3px rgba(110, 0, 255, 0.1);
            outline: none;
        }

        .verify-button {
            background: #6e00ff;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .verify-button:hover {
            background: #5a00d0;
            transform: translateY(-1px);
        }

        .resend-link {
            color: #6e00ff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .resend-link:hover {
            color: #5a00d0;
            text-decoration: underline;
        }

        .timer {
            color: #718096;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
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

        // line 106
        yield "    <div class=\"verification-container\">
        <div class=\"verification-card\">
            <div class=\"verification-icon\">
                <i class=\"fas fa-shield-alt\"></i>
            </div>
            <h2 class=\"verification-title\">Verify Your Account</h2>
            <p class=\"verification-subtitle\">We sent a verification code to your email. Please enter the code below.</p>

            <form id=\"formVerifier\" action=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_verifier");
        yield "\" method=\"post\">
                <div class=\"otp-container\">
                    <input type=\"text\" name=\"otp1\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                    <input type=\"text\" name=\"otp2\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                    <input type=\"text\" name=\"otp3\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                    <input type=\"text\" name=\"otp4\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                </div>

                <button type=\"submit\" class=\"verify-button\">
                    <i class=\"fas fa-check-circle me-2\"></i>Verify Code
                </button>
            </form>

            <div>
                <p>Didn't receive the code?</p>
                <a href=\"#\" class=\"resend-link\" id=\"resendCode\">
                    <i class=\"fas fa-redo-alt me-1\"></i>Resend Code
                </a>
                <div class=\"timer\" id=\"timer\">Resend available in: <span>60</span>s</div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
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

        // line 139
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.otp-input');
            const form = document.getElementById('formVerifier');
            const timer = document.querySelector('#timer span');
            const resendButton = document.getElementById('resendCode');
            let timeLeft = 60;

            // OTP Input Handling
            inputs.forEach((input, index) => {
                input.addEventListener('keyup', (e) => {
                    if (e.key >= 0 && e.key <= 9) {
                        if (index < inputs.length - 1) {
                            inputs[index + 1].focus();
                        }
                    } else if (e.key === 'Backspace') {
                        if (index > 0) {
                            inputs[index - 1].focus();
                        }
                    }
                });

                input.addEventListener('focus', () => input.select());
            });

            // Timer for resend code
            function updateTimer() {
                if (timeLeft > 0) {
                    timeLeft--;
                    timer.textContent = timeLeft;
                    setTimeout(updateTimer, 1000);
                } else {
                    resendButton.style.opacity = '1';
                    resendButton.style.pointerEvents = 'auto';
                    timer.parentElement.style.display = 'none';
                }
            }

            // Initialize timer
            updateTimer();

            // Resend code handling
            resendButton.addEventListener('click', (e) => {
                e.preventDefault();
                if (timeLeft === 0) {
                    timeLeft = 60;
                    timer.textContent = timeLeft;
                    timer.parentElement.style.display = 'block';
                    resendButton.style.opacity = '0.5';
                    resendButton.style.pointerEvents = 'none';
                    updateTimer();
                    // Add your resend code logic here
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
        return "welcomePage/verifier.html.twig";
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
        return array (  259 => 139,  246 => 138,  212 => 114,  202 => 106,  189 => 105,  78 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'baseFlogin.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .verification-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .verification-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .verification-icon {
            font-size: 48px;
            color: #6e00ff;
            margin-bottom: 20px;
        }

        .verification-title {
            color: #2d3748;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .verification-subtitle {
            color: #718096;
            margin-bottom: 30px;
        }

        .otp-container {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 30px;
        }

        .otp-input {
            width: 50px;
            height: 50px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s;
        }

        .otp-input:focus {
            border-color: #6e00ff;
            box-shadow: 0 0 0 3px rgba(110, 0, 255, 0.1);
            outline: none;
        }

        .verify-button {
            background: #6e00ff;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .verify-button:hover {
            background: #5a00d0;
            transform: translateY(-1px);
        }

        .resend-link {
            color: #6e00ff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .resend-link:hover {
            color: #5a00d0;
            text-decoration: underline;
        }

        .timer {
            color: #718096;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"verification-container\">
        <div class=\"verification-card\">
            <div class=\"verification-icon\">
                <i class=\"fas fa-shield-alt\"></i>
            </div>
            <h2 class=\"verification-title\">Verify Your Account</h2>
            <p class=\"verification-subtitle\">We sent a verification code to your email. Please enter the code below.</p>

            <form id=\"formVerifier\" action=\"{{ path('app_user_verifier') }}\" method=\"post\">
                <div class=\"otp-container\">
                    <input type=\"text\" name=\"otp1\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                    <input type=\"text\" name=\"otp2\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                    <input type=\"text\" name=\"otp3\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                    <input type=\"text\" name=\"otp4\" class=\"otp-input\" maxLength=\"1\" pattern=\"[0-9]\" required />
                </div>

                <button type=\"submit\" class=\"verify-button\">
                    <i class=\"fas fa-check-circle me-2\"></i>Verify Code
                </button>
            </form>

            <div>
                <p>Didn't receive the code?</p>
                <a href=\"#\" class=\"resend-link\" id=\"resendCode\">
                    <i class=\"fas fa-redo-alt me-1\"></i>Resend Code
                </a>
                <div class=\"timer\" id=\"timer\">Resend available in: <span>60</span>s</div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.otp-input');
            const form = document.getElementById('formVerifier');
            const timer = document.querySelector('#timer span');
            const resendButton = document.getElementById('resendCode');
            let timeLeft = 60;

            // OTP Input Handling
            inputs.forEach((input, index) => {
                input.addEventListener('keyup', (e) => {
                    if (e.key >= 0 && e.key <= 9) {
                        if (index < inputs.length - 1) {
                            inputs[index + 1].focus();
                        }
                    } else if (e.key === 'Backspace') {
                        if (index > 0) {
                            inputs[index - 1].focus();
                        }
                    }
                });

                input.addEventListener('focus', () => input.select());
            });

            // Timer for resend code
            function updateTimer() {
                if (timeLeft > 0) {
                    timeLeft--;
                    timer.textContent = timeLeft;
                    setTimeout(updateTimer, 1000);
                } else {
                    resendButton.style.opacity = '1';
                    resendButton.style.pointerEvents = 'auto';
                    timer.parentElement.style.display = 'none';
                }
            }

            // Initialize timer
            updateTimer();

            // Resend code handling
            resendButton.addEventListener('click', (e) => {
                e.preventDefault();
                if (timeLeft === 0) {
                    timeLeft = 60;
                    timer.textContent = timeLeft;
                    timer.parentElement.style.display = 'block';
                    resendButton.style.opacity = '0.5';
                    resendButton.style.pointerEvents = 'none';
                    updateTimer();
                    // Add your resend code logic here
                }
            });
        });
    </script>
{% endblock %}


", "welcomePage/verifier.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\welcomePage\\verifier.html.twig");
    }
}
