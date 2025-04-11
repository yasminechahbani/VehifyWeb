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
class __TwigTemplate_af5d33a69f1c8b7acd6d695ed59fe20a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $this->parent = $this->loadTemplate("baseFlogin.html.twig", "user/_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Login/Register
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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
        yield "
    <div class=\"container\" id=\"container\">

        <div class=\"form-container sign-up-container\">
            
            ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"social-container\">
                <h1>Sign Up</h1>
            </div>
            ";
        // line 21
        yield "            <div class=\"form-group\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        // line 27
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        yield "
                </div>
            </div>
            ";
        // line 33
        yield "            <div class=\"form-group\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "valid", [], "any", false, false, false, 36)) ? ("") : ("is-invalid"))), "placeholder" => "Surname"]]);
        // line 39
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 46
        yield "            <div class=\"form-group\">
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "valid", [], "any", false, false, false, 49)) ? ("") : ("is-invalid"))), "placeholder" => "Email"]]);
        // line 52
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 59
        yield "            <div class=\"form-group\">
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 60), 'widget', ["attr" => ["type" => "password", "class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 63
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? ("") : ("is-invalid"))), "placeholder" => "Password"]]);
        // line 66
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 68), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 73
        yield "            <div class=\"form-group\">
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "tel", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 76
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "tel", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "valid", [], "any", false, false, false, 76)) ? ("") : ("is-invalid"))), "placeholder" => "Phone"]]);
        // line 79
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "tel", [], "any", false, false, false, 81), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 86
        yield "            <div class=\"form-group\">
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "localisation", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 89
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "localisation", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "valid", [], "any", false, false, false, 89)) ? ("") : ("is-invalid"))), "placeholder" => "Location"]]);
        // line 92
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "localisation", [], "any", false, false, false, 94), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 99
        yield "            <div class=\"form-group\">
                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => ("form-control " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "image", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "valid", [], "any", false, false, false, 102)) ? ("") : ("is-invalid")))]]);
        // line 104
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "image", [], "any", false, false, false, 106), 'errors');
        yield "
                </div>
            </div>

            <button class=\"signUp\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 110, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
            ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        yield "
        </div>
        #SignInPage
        <div class=\"form-container sign-in-container\">
            ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 115, $this->source); })()), 'form_start', ["attr" => ["class" => "login-form", "novalidate" => "novalidate"]]);
        yield "
            <h1>Sign in</h1>

            <div class=\"social-container\">
                <a href=\"#\" class=\"social\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\" class=\"social\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"#\" class=\"social\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
            
            ";
        // line 124
        if ((array_key_exists("message", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 124, $this->source); })())))) {
            // line 125
            yield "            <p class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 125, $this->source); })()), "html", null, true);
            yield "</p>
        ";
        }
        // line 126
        yield "            ";
        // line 127
        yield "            <div class=\"form-group\">
                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email", "required" => "required"]]);
        // line 134
        yield "
                <div class=\"invalid-feedback email-error\">
                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 136, $this->source); })()), "email", [], "any", false, false, false, 136), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 141, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "required" => "required"]]);
        // line 147
        yield "
                <div class=\"invalid-feedback password-error\">
                    ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 149, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 149), 'errors');
        yield "
                </div>
            </div>
            <div>
                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 153, $this->source); })()), "recaptcha", [], "any", false, false, false, 153), 'widget');
        yield "
            </div>


            <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_verifier");
        yield "\">Forgot your password?</a>
            <button type=\"submit\" class=\"btn\">Sign In</button>
            ";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 159, $this->source); })()), 'form_end');
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 180
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

        // line 181
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
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 195, $this->source); })()), "html", null, true);
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
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 217, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  428 => 217,  403 => 195,  385 => 181,  372 => 180,  341 => 159,  336 => 157,  329 => 153,  322 => 149,  318 => 147,  316 => 141,  308 => 136,  304 => 134,  302 => 128,  299 => 127,  297 => 126,  291 => 125,  289 => 124,  277 => 115,  270 => 111,  266 => 110,  259 => 106,  255 => 104,  253 => 102,  252 => 100,  249 => 99,  242 => 94,  238 => 92,  236 => 89,  235 => 87,  232 => 86,  225 => 81,  221 => 79,  219 => 76,  218 => 74,  215 => 73,  208 => 68,  204 => 66,  202 => 63,  201 => 60,  198 => 59,  191 => 54,  187 => 52,  185 => 49,  184 => 47,  181 => 46,  174 => 41,  170 => 39,  168 => 36,  167 => 34,  164 => 33,  158 => 29,  154 => 27,  152 => 22,  149 => 21,  142 => 16,  135 => 11,  122 => 10,  109 => 8,  103 => 6,  90 => 5,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFlogin.html.twig' %}
{% block title %}Login/Register
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
{% endblock %} 
{% block body %}

    <div class=\"container\" id=\"container\">

        <div class=\"form-container sign-up-container\">
            
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"social-container\">
                <h1>Sign Up</h1>
            </div>
            {# Champ Nom #}
            <div class=\"form-group\">
                {{ form_widget(form.nom, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Votre nom'
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.nom) }}
                </div>
            </div>
            {# Champ Prénom #}
            <div class=\"form-group\">
                {{ form_widget(form.prenom, {
                    'attr': {
                        'class': 'form-control ' ~ (form.prenom.vars.valid ? '' : 'is-invalid'),
                        'placeholder': 'Surname'
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.prenom) }}
                </div>
            </div>

            {# Champ Email #}
            <div class=\"form-group\">
                {{ form_widget(form.email, {
                    'attr': {
                        'class': 'form-control ' ~ (form.email.vars.valid ? '' : 'is-invalid'),
                        'placeholder': 'Email'
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.email) }}
                </div>
            </div>

            {# Champ Mot de passe #}
            <div class=\"form-group\">
                {{ form_widget(form.mot_de_passe, {
                    'attr': {
                        'type':'password',
                        'class': 'form-control ' ~ (form.mot_de_passe.vars.valid ? '' : 'is-invalid'),
                        'placeholder': 'Password'
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.mot_de_passe) }}
                </div>
            </div>

            {# Champ Téléphone #}
            <div class=\"form-group\">
                {{ form_widget(form.tel, {
                    'attr': {
                        'class': 'form-control ' ~ (form.tel.vars.valid ? '' : 'is-invalid'),
                        'placeholder': 'Phone'
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.tel) }}
                </div>
            </div>

            {# Champ Localisation #}
            <div class=\"form-group\">
                {{ form_widget(form.localisation, {
                    'attr': {
                        'class': 'form-control ' ~ (form.localisation.vars.valid ? '' : 'is-invalid'),
                        'placeholder': 'Location'
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.localisation) }}
                </div>
            </div>

            {# Champ Image #}
            <div class=\"form-group\">
                {{ form_widget(form.image, {
                    'attr': {
                        'class': 'form-control ' ~ (form.image.vars.valid ? '' : 'is-invalid')
                    }
                }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.image) }}
                </div>
            </div>

            <button class=\"signUp\">{{ button_label|default('Save') }}</button>
            {{ form_end(form) }}
        </div>
        #SignInPage
        <div class=\"form-container sign-in-container\">
            {{ form_start(loginForm, {'attr': {'class': 'login-form', 'novalidate': 'novalidate'}}) }}
            <h1>Sign in</h1>

            <div class=\"social-container\">
                <a href=\"#\" class=\"social\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\" class=\"social\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"#\" class=\"social\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
            
            {% if message is defined and message is not empty %}
            <p class=\"alert alert-danger\">{{ message }}</p>
        {% endif %}            {# Champ Email #}
            <div class=\"form-group\">
                {{ form_widget(loginForm.email, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Email',
                        'required': 'required'
                    }
                }) }}
                <div class=\"invalid-feedback email-error\">
                    {{ form_errors(loginForm.email) }}
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_widget(loginForm.mot_de_passe, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Password',
                        'required': 'required'
                    }
                }) }}
                <div class=\"invalid-feedback password-error\">
                    {{ form_errors(loginForm.mot_de_passe) }}
                </div>
            </div>
            <div>
                {{ form_widget(loginForm.recaptcha) }}
            </div>


            <a href=\"{{ path('app_user_verifier') }}\">Forgot your password?</a>
            <button type=\"submit\" class=\"btn\">Sign In</button>
            {{ form_end(loginForm) }}
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

{% endblock %}

{% block javascripts %}
    {{ parent() }}
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
                    sitekey: '{{ recaptcha_site_key }}',
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
                    sitekey: '{{ recaptcha_site_key }}',
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


{% endblock %}

", "user/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\_form.html.twig");
    }
}
