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

/* BackOffice/vehicule/edit.html.twig */
class __TwigTemplate_ce62bc26cae97e1f114651c63b4bf3ea extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/vehicule/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le Véhicule";
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
                        <h4 class=\"mb-1\">Modifier le Véhicule</h4>
                        <p class=\"text-muted small mb-0\">Modifier les informations du véhicule</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-z0-9s-]+\$", "minlength" => "2", "maxlength" => "50"]]);
        // line 35
        yield "
                                <div class=\"invalid-feedback\">La marque doit contenir entre 2 et 50 caractères</div>
                                <div class=\"text-danger\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-z0-9s-]+\$", "minlength" => "2", "maxlength" => "50"]]);
        // line 52
        yield "
                                <div class=\"invalid-feedback\">Le modèle doit contenir entre 2 et 50 caractères</div>
                                <div class=\"text-danger\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 54), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        // line 66
        yield "
                                <div class=\"invalid-feedback\">Veuillez entrer un numéro d'immatriculation</div>
                                <div class=\"text-danger\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "required" => true, "min" => "0", "max" => "999999", "type" => "number"]]);
        // line 83
        yield "
                                <div class=\"invalid-feedback\">Le kilométrage doit être entre 0 et 999999</div>
                                <div class=\"text-danger\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 85), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        yield "
                                <div class=\"invalid-feedback\">Veuillez sélectionner un type</div>
                                <div class=\"text-danger\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 94), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-zs]+\$"]]);
        // line 107
        yield "
                                <div class=\"invalid-feedback\">Veuillez entrer une couleur valide</div>
                                <div class=\"text-danger\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 109), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 115), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        yield "
                                <div class=\"invalid-feedback\">Veuillez sélectionner un statut</div>
                                <div class=\"text-danger\">";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 118), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        yield "
                                <div class=\"invalid-feedback\">Veuillez sélectionner une carte grise</div>
                                <div class=\"text-danger\">";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 127), 'errors');
        yield "</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <button type=\"submit\" class=\"btn btn-warning px-4\">
                            Enregistrer les modifications
                        </button>
                    </div>

                    ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 145
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        yield "<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "BackOffice/vehicule/edit.html.twig";
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
        return array (  274 => 146,  263 => 145,  253 => 138,  239 => 127,  234 => 125,  230 => 124,  221 => 118,  216 => 116,  212 => 115,  203 => 109,  199 => 107,  197 => 101,  193 => 100,  184 => 94,  179 => 92,  175 => 91,  166 => 85,  162 => 83,  160 => 75,  156 => 74,  147 => 68,  143 => 66,  141 => 61,  137 => 60,  128 => 54,  124 => 52,  122 => 44,  118 => 43,  109 => 37,  105 => 35,  103 => 27,  99 => 26,  91 => 21,  82 => 15,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/vehicule/edit.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\vehicule\\edit.html.twig");
    }
}
