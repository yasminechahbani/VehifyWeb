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

/* reservation/show.html.twig */
class __TwigTemplate_4b9668b4a32dd4372337ed6fe677a3e2 extends Template
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
        $context["active_page"] = "reservation";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "reservation/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"container py-5\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-calendar-check fa-2x text-primary me-3\"></i>
                <div>
                    <h2 class=\"mb-1\">Reservation Details #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-0\">View and manage reservation information</p>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-user me-2\"></i>Client Information</h5>
                        <p><strong>Name:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "userId", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "userId", [], "any", false, false, false, 21), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-clock me-2\"></i>Appointment Details</h5>
                        <p><strong>Date:</strong> ";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "dateReservation", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "dateReservation", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true)) : (""));
        yield "</p>
                        <p><strong>Time:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "heureReservation", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-car me-2\"></i>Vehicle Information</h5>
                        <p><strong>Vehicle:</strong> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "vehiculeId", [], "any", false, false, false, 34), "marque", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                        <p><strong>Registration:</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "vehiculeId", [], "any", false, false, false, 35), "immatriculation", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-tools me-2\"></i>Service Details</h5>
                        <p><strong>Service:</strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "serviceId", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                        <p><strong>Price:</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "serviceId", [], "any", false, false, false, 41), "prix", [], "any", false, false, false, 41), "html", null, true);
        yield " TND</p>
                    </div>
                </div>
            </div>

            <div class=\"border-top pt-4 mt-4\">
                <div class=\"d-flex gap-2\">
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to List
                    </a>
                    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-bottom: 1px solid rgba(0,0,0,.1);
}

.info-group {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.btn {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.text-primary {
    color: #4a90e2 !important;
}

strong {
    color: #495057;
}

.fas {
    width: 20px;
    text-align: center;
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
        return "reservation/show.html.twig";
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
        return array (  138 => 51,  132 => 48,  122 => 41,  118 => 40,  110 => 35,  106 => 34,  96 => 27,  92 => 26,  82 => 21,  69 => 11,  61 => 5,  54 => 4,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\reservation\\show.html.twig");
    }
}
