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

/* BackOffice/Liste/liste.html.twig */
class __TwigTemplate_70f1886de00976c6753e76ce74d51973 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/Liste/liste.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Vehicle Management";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid py-4\">
    <!-- Vehicles Section -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-car me-2\"></i>Vehicle Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage your fleet vehicles</p>
                    </div>
                    <div class=\"d-flex gap-2\">
                        <button class=\"btn btn-light\">
                            <i class=\"fas fa-filter me-2\"></i>Filters
                        </button>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-trademark me-2\"></i>Brand</th>
                                    <th><i class=\"fas fa-car-side me-2\"></i>Model</th>
                                    <th><i class=\"fas fa-id-card me-2\"></i>Registration</th>
                                    <th><i class=\"fas fa-info-circle me-2\"></i>Status</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vehicules"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 37
            yield "                                    <tr>
                                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge bg-";
            // line 42
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "statut", [], "any", false, false, false, 42) == "Visite faite")) ? ("success") : ("warning"));
            yield " rounded-pill\">
                                                ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "statut", [], "any", false, false, false, 43), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_show", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_edit", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Vehicle
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_delete", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                                                            <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this vehicle?')\">
                                                                <i class=\"fas fa-trash-alt me-2\"></i>Delete Vehicle
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No vehicles found in the system</p>
                                            <a href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_add");
            yield "\" class=\"btn btn-sm btn-primary\">Add First Vehicle</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration Cards Section -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-id-card me-2\"></i>Registration Cards</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage vehicle registration cards</p>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-hashtag me-2\"></i>Card Number</th>
                                    <th><i class=\"fas fa-user me-2\"></i>Owner</th>
                                    <th><i class=\"fas fa-map-marker-alt me-2\"></i>Address</th>
                                    <th><i class=\"fas fa-calendar-plus me-2\"></i>Issue Date</th>
                                    <th><i class=\"fas fa-calendar-times me-2\"></i>Expiry Date</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cartesGrises"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carte_grise"]) {
            // line 116
            yield "                                    <tr>
                                        <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "numeroCarteGrise", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                        <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "proprietaire", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                        <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "adresseProprietaire", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                                        <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "DateEmission", [], "any", false, false, false, 120), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "DateExpiration", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_show", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_edit", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Card
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_delete", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                                                            <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this registration card?')\">
                                                                <i class=\"fas fa-trash-alt me-2\"></i>Delete Card
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 150
        if (!$context['_iterated']) {
            // line 151
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No registration cards found</p>
                                            <a href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_add");
            yield "\" class=\"btn btn-sm btn-primary\">Add First Card</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carte_grise'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "BackOffice/Liste/liste.html.twig";
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
        return array (  308 => 158,  298 => 154,  293 => 151,  291 => 150,  276 => 140,  267 => 134,  259 => 129,  248 => 121,  244 => 120,  240 => 119,  236 => 118,  232 => 117,  229 => 116,  224 => 115,  189 => 82,  179 => 78,  174 => 75,  172 => 74,  157 => 64,  148 => 58,  140 => 53,  127 => 43,  123 => 42,  118 => 40,  114 => 39,  110 => 38,  107 => 37,  102 => 36,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/Liste/liste.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\Liste\\liste.html.twig");
    }
}
