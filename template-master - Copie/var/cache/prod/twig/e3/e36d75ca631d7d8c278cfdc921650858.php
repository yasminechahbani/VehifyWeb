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

/* BackOffice/vehicule/show.html.twig */
class __TwigTemplate_a31aebd4c0a6609bb5528d606537dfdc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/vehicule/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détail Véhicule";
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Détails du Véhicule</h4>
                        <p class=\"text-muted small mb-0\">Informations complètes du véhicule</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Marque</label>
                                <div class=\"h5 mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "marque", [], "any", false, false, false, 25), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Modèle</label>
                                <div class=\"h5 mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "modele", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Immatriculation</label>
                                <div class=\"h5 mb-0\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "immatriculation", [], "any", false, false, false, 39), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Type</label>
                                <div class=\"h5 mb-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "type", [], "any", false, false, false, 46), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Couleur</label>
                                <div class=\"h5 mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "couleur", [], "any", false, false, false, 53), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Kilométrage</label>
                                <div class=\"h5 mb-0\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "kilometrage", [], "any", false, false, false, 60), "html", null, true);
        yield " km</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Statut</label>
                                <div class=\"badge bg-";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "statut", [], "any", false, false, false, 67) == "Visite faite")) ? ("success") : ("warning"));
        yield " rounded-pill\">
                                    ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "statut", [], "any", false, false, false, 68), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Numéro Carte Grise</label>
                                <div class=\"h5 mb-0\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "carteGrise", [], "any", false, false, false, 76), "numeroCarteGrise", [], "any", false, false, false, 76), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-4\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_edit", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "idVehicule", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\" 
                               class=\"btn btn-warning\">
                                Modifier
                            </a>
                            <form action=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_delete", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "idVehicule", [], "any", false, false, false, 87)]), "html", null, true);
        yield "\" 
                                  method=\"POST\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
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
        return "BackOffice/vehicule/show.html.twig";
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
        return array (  186 => 87,  179 => 83,  169 => 76,  158 => 68,  154 => 67,  144 => 60,  134 => 53,  124 => 46,  114 => 39,  104 => 32,  94 => 25,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/vehicule/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\vehicule\\show.html.twig");
    }
}
