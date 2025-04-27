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

/* baseEmployeFront.html.twig */
class __TwigTemplate_f5d3f95b98d0c3890c5fc7180e32bb9b extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEmployeFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEmployeFront.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #3498db;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .sidebar {
            background: linear-gradient(180deg, var(--primary) 0%, var(--secondary) 100%);
            min-height: calc(100vh - 56px);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            margin: 8px 12px;
            padding: 12px 15px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
            padding: 15px 20px;
        }
        
        .btn {
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: var(--accent);
            border-color: var(--accent);
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }
        
        .btn-action {
            width: 36px;
            height: 36px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .badge {
            padding: 6px 10px;
            border-radius: 6px;
            font-weight: 500;
        }
        
        .footer {
            background-color: var(--primary);
            color: white;
            padding: 20px 0;
        }
        
        /* Animation for alerts */
        .alert {
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    
    ";
        // line 147
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 148
        yield "</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_front");
        yield "\">
                <i class=\"fas fa-tools me-2\"></i>Portail Technique
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"\"><i class=\"fas fa-home me-1\"></i>Accueil</a>
                    </li>
                </ul>
                <div class=\"d-flex align-items-center\">
                    <span class=\"text-light me-3 d-none d-md-inline\">
                        <i class=\"fas fa-calendar-day me-1\"></i> ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "
                    </span>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-outline-light dropdown-toggle\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-user-circle me-1\"></i> ";
        // line 171
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "nom", [], "any", false, false, false, 171) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "prenom", [], "any", false, false, false, 171)), "html", null, true)) : ("Technicien"));
        yield "
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li><a class=\"dropdown-item\" href=\"\"><i class=\"fas fa-id-card me-2\"></i>Mon Profil</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logout");
        yield "\"><i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Sidebar -->
            <div class=\"col-md-3 col-lg-2 d-md-block sidebar collapse\">
                <div class=\"position-sticky pt-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle p-3 mb-3\">
                            <i class=\"fas fa-user-cog fa-2x text-primary\"></i>
                        </div>
                        <h6 class=\"text-white mb-0\">Espace Technique</h6>
                        <small class=\"text-light\">Contrôles & Vérifications</small>
                    </div>
                    
                    <ul class=\"nav flex-column\">
                       
                    
                    <hr class=\"text-light my-4 opacity-25\">
                    
                    <div class=\"px-3 mb-3\">
                        <div class=\"card bg-light border-0\">
                            <div class=\"card-body p-3\">
                                <h6 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Rappel</h6>
                                <p class=\"card-text small mb-0\">N'oubliez pas de compléter tous les champs obligatoires lors des inspections techniques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "flashes", [], "any", false, false, false, 215));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 216
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 217
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "                
                ";
        // line 224
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 225
        yield "            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"footer mt-auto py-3\">
        <div class=\"container text-center\">
            <span>© 2023 Portail Technique - Tous droits réservés</span>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    ";
        // line 239
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 240
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Portail Technique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 224
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 239
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "baseEmployeFront.html.twig";
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
        return array (  418 => 239,  396 => 224,  374 => 147,  351 => 6,  339 => 240,  337 => 239,  321 => 225,  319 => 224,  316 => 223,  310 => 222,  300 => 218,  295 => 217,  290 => 216,  286 => 215,  244 => 176,  236 => 171,  229 => 167,  212 => 153,  205 => 148,  203 => 147,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Portail Technique{% endblock %}</title>
    
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #3498db;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .sidebar {
            background: linear-gradient(180deg, var(--primary) 0%, var(--secondary) 100%);
            min-height: calc(100vh - 56px);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            margin: 8px 12px;
            padding: 12px 15px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
            padding: 15px 20px;
        }
        
        .btn {
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: var(--accent);
            border-color: var(--accent);
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }
        
        .btn-action {
            width: 36px;
            height: 36px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .badge {
            padding: 6px 10px;
            border-radius: 6px;
            font-weight: 500;
        }
        
        .footer {
            background-color: var(--primary);
            color: white;
            padding: 20px 0;
        }
        
        /* Animation for alerts */
        .alert {
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{path('app_employe_front')}}\">
                <i class=\"fas fa-tools me-2\"></i>Portail Technique
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"\"><i class=\"fas fa-home me-1\"></i>Accueil</a>
                    </li>
                </ul>
                <div class=\"d-flex align-items-center\">
                    <span class=\"text-light me-3 d-none d-md-inline\">
                        <i class=\"fas fa-calendar-day me-1\"></i> {{ \"now\"|date(\"d/m/Y\") }}
                    </span>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-outline-light dropdown-toggle\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-user-circle me-1\"></i> {{ app.user ? app.user.nom ~ ' ' ~ app.user.prenom : 'Technicien' }}
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li><a class=\"dropdown-item\" href=\"\"><i class=\"fas fa-id-card me-2\"></i>Mon Profil</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"{{path('app_user_logout')}}\"><i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Sidebar -->
            <div class=\"col-md-3 col-lg-2 d-md-block sidebar collapse\">
                <div class=\"position-sticky pt-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle p-3 mb-3\">
                            <i class=\"fas fa-user-cog fa-2x text-primary\"></i>
                        </div>
                        <h6 class=\"text-white mb-0\">Espace Technique</h6>
                        <small class=\"text-light\">Contrôles & Vérifications</small>
                    </div>
                    
                    <ul class=\"nav flex-column\">
                       
                    
                    <hr class=\"text-light my-4 opacity-25\">
                    
                    <div class=\"px-3 mb-3\">
                        <div class=\"card bg-light border-0\">
                            <div class=\"card-body p-3\">
                                <h6 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Rappel</h6>
                                <p class=\"card-text small mb-0\">N'oubliez pas de compléter tous les champs obligatoires lors des inspections techniques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
                
                {% block body %}{% endblock %}
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"footer mt-auto py-3\">
        <div class=\"container text-center\">
            <span>© 2023 Portail Technique - Tous droits réservés</span>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    {% block javascripts %}{% endblock %}
</body>
</html>", "baseEmployeFront.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\baseEmployeFront.html.twig");
    }
}
