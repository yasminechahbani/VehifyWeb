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

/* vehicule/_delete_form.html.twig */
class __TwigTemplate_c4219ba9fdb08cb988b88400b2008312 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_delete", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 1, $this->source); })()), "getIdVehicule", [], "method", false, false, false, 1)]), "html", null, true);
        yield "\" onsubmit=\"return confirmDelete(event)\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 2, $this->source); })()), "getIdVehicule", [], "method", false, false, false, 2))), "html", null, true);
        yield "\">
    <button type=\"submit\" class=\"btn btn-outline-danger\">
        <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
    </button>
</form>

<script>
function confirmDelete(event) {
    event.preventDefault();
    
    Swal.fire({
        title: 'Confirmer la suppression',
        text: \"Êtes-vous sûr de vouloir supprimer ce véhicule ? Cette action est irréversible.\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        }
    });
    
    return false;
}
</script>

<style>
.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
    transition: all 0.3s ease;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    transform: translateY(-2px);
    box-shadow: 0 2px 5px rgba(220, 53, 69, 0.2);
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vehicule/_delete_form.html.twig";
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
        return array (  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_vehicule_delete', {'idVehicule': vehicule.getIdVehicule()}) }}\" onsubmit=\"return confirmDelete(event)\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vehicule.getIdVehicule()) }}\">
    <button type=\"submit\" class=\"btn btn-outline-danger\">
        <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
    </button>
</form>

<script>
function confirmDelete(event) {
    event.preventDefault();
    
    Swal.fire({
        title: 'Confirmer la suppression',
        text: \"Êtes-vous sûr de vouloir supprimer ce véhicule ? Cette action est irréversible.\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        }
    });
    
    return false;
}
</script>

<style>
.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
    transition: all 0.3s ease;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    transform: translateY(-2px);
    box-shadow: 0 2px 5px rgba(220, 53, 69, 0.2);
}
</style>
", "vehicule/_delete_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\vehicule\\_delete_form.html.twig");
    }
}
