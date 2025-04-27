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

/* BackOffice/carte_grise/edit.html.twig */
class __TwigTemplate_046d2501fd5d789814967764d47f635f extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/carte_grise/edit.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier la Carte Grise";
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Modifier la Carte Grise</h4>
                        <p class=\"text-muted small mb-0\">Modifier les informations de la carte grise</p>
                    </div>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Z0-9]+\$", "minlength" => "5", "maxlength" => "20"]]);
        // line 37
        yield "
                                <div class=\"invalid-feedback\">Numéro de carte grise invalide (5-20 caractères, lettres majuscules et chiffres)</div>
                                <div class=\"text-danger\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 39), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-zÀ-ÿs-]+\$", "minlength" => "3", "maxlength" => "50"]]);
        // line 54
        yield "
                                <div class=\"invalid-feedback\">Nom du propriétaire invalide (3-50 caractères)</div>
                                <div class=\"text-danger\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "required" => true, "minlength" => "5", "maxlength" => "100"]]);
        // line 70
        yield "
                                <div class=\"invalid-feedback\">Adresse invalide (5-100 caractères)</div>
                                <div class=\"text-danger\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 72), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        // line 84
        yield "
                                <div class=\"invalid-feedback\">Date d'émission invalide</div>
                                <div class=\"text-danger\">";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 86), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        // line 98
        yield "
                                <div class=\"invalid-feedback\">Date d'expiration invalide</div>
                                <div class=\"text-danger\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 100), 'errors');
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
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 118
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
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

        // Validate date range
        document.querySelector('form').addEventListener('submit', function(event) {
            var dateEmission = new Date(document.querySelector('[name\$=\"[dateEmission]\"]').value);
            var dateExpiration = new Date(document.querySelector('[name\$=\"[dateExpiration]\"]').value);
            
            if (dateExpiration <= dateEmission) {
                event.preventDefault();
                alert('La date d\\'expiration doit être postérieure à la date d\\'émission');
            }
        });
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
        return "BackOffice/carte_grise/edit.html.twig";
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
        return array (  220 => 119,  209 => 118,  199 => 111,  185 => 100,  181 => 98,  179 => 93,  175 => 92,  166 => 86,  162 => 84,  160 => 79,  156 => 78,  147 => 72,  143 => 70,  141 => 63,  137 => 62,  128 => 56,  124 => 54,  122 => 46,  118 => 45,  109 => 39,  105 => 37,  103 => 29,  99 => 28,  91 => 23,  82 => 17,  71 => 8,  64 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/carte_grise/edit.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\carte_grise\\edit.html.twig");
    }
}
