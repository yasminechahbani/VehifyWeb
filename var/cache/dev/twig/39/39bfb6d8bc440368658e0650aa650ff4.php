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

/* vehicule/_form.html.twig */
class __TwigTemplate_a5034fd4cb547bd73af0ab2f55b04dbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
<div class=\"row g-3\">
    ";
        // line 3
        if ((array_key_exists("show_image_upload", $context) && (isset($context["show_image_upload"]) || array_key_exists("show_image_upload", $context) ? $context["show_image_upload"] : (function () { throw new RuntimeError('Variable "show_image_upload" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "    <div class=\"col-12 mb-4\">
        <div class=\"form-group bg-light p-3 rounded\">
            <label for=\"vehiclePhoto\" class=\"form-label\">Photo du véhicule</label>
            <input type=\"file\" class=\"form-control\" id=\"vehiclePhoto\" accept=\"image/*\">
            <button type=\"button\" class=\"btn btn-info mt-2\" id=\"analyzeButton\">
                <i class=\"fas fa-search me-1\"></i> Analyser l'état du véhicule
            </button>
            <div id=\"analysisResult\" class=\"mt-3 d-none\">
                <div class=\"alert alert-info\">
                    <h5>Résultat de l'analyse :</h5>
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                    </div>
                    <p class=\"mt-2 mb-0\" id=\"analysisText\"></p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 23
        yield "
    <!-- Champs classiques -->
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "marque", [], "any", false, false, false, 27), 'label');
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "marque", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Peugeot"]]);
        yield "
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "marque", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 30
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "modele", [], "any", false, false, false, 37), 'label');
        yield "
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "modele", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 208"]]);
        yield "
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "modele", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 40
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 40), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "immatriculation", [], "any", false, false, false, 47), 'label');
        yield "
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "immatriculation", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: AB-123-CD"]]);
        yield "
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "immatriculation", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 50
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 50), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57), 'label');
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: SUV, Berline..."]]);
        yield "
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 60
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "couleur", [], "any", false, false, false, 67), 'label');
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "couleur", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Rouge"]]);
        yield "
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "couleur", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 70
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 70), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "kilometrage", [], "any", false, false, false, 77), 'label');
        yield "
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "kilometrage", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 45000"]]);
        yield "
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "kilometrage", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 80
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 80), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "statut", [], "any", false, false, false, 87), 'label');
        yield "
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "statut", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Visite faite, Visite non faite"]]);
        // line 93
        yield "
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "statut", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 95
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 95), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "carteGrise", [], "any", false, false, false, 102), 'label');
        yield "
            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "carteGrise", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "carteGrise", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 105
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 105), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "        </div>
    </div>

    <div class=\"col-12 mt-4\">
        <button type=\"submit\" class=\"btn btn-primary me-2\">
            <i class=\"fas fa-save me-1\"></i> Enregistrer
        </button>
        <button type=\"reset\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-undo me-1\"></i> Réinitialiser
        </button>
    </div>
</div>

<script>
document.getElementById('analyzeButton').addEventListener('click', async function () {
    const imageFile = document.getElementById('vehiclePhoto').files[0];
    if (!imageFile) {
        alert('Veuillez sélectionner une photo du véhicule');
        return;
    }

    if (imageFile.size > 4 * 1024 * 1024) {
        alert('La taille de l\\'image ne doit pas dépasser 4MB');
        return;
    }

    if (!imageFile.type.startsWith('image/')) {
        alert('Veuillez sélectionner un fichier image valide');
        return;
    }

    this.disabled = true;
    this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-1\"></i> Analyse en cours...';

    try {
        const base64Image = await new Promise((resolve) => {
            const reader = new FileReader();
            reader.onloadend = () => resolve(reader.result.split(',')[1]);
            reader.readAsDataURL(imageFile);
        });

        const response = await fetch('/api/analyze-vehicle', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
            body: JSON.stringify({ image: base64Image, mime_type: imageFile.type })
        });

        const responseText = await response.text();
        const data = JSON.parse(responseText);

        const resultDiv = document.getElementById('analysisResult');
        const analysisText = document.getElementById('analysisText');
        resultDiv.classList.remove('d-none');

        let recommendationText = data.recommendation || 'Aucune recommandation disponible';

        // Si l'état est mauvais → remplir statut + rendre non modifiable
        if (recommendationText.includes('Des réparations importantes sont recommandées') || recommendationText.includes('mauvais état') || recommendationText.includes('non conforme')) {
            recommendationText += ' Veuillez réparer votre véhicule avant la visite pour qu\\'elle soit acceptée.';

            const statutField = document.querySelector('[name=\"vehicule[statut]\"]');
            if (statutField) {
                statutField.value = 'Visite non faite';
                statutField.setAttribute('readonly', true); // ou 'disabled', selon ton besoin
            }
        }

        analysisText.textContent = `Analyse du véhicule : \${recommendationText}`;

    } catch (error) {
        console.error('Erreur analyse API:', error);
        const resultDiv = document.getElementById('analysisResult');
        const analysisText = document.getElementById('analysisText');
        resultDiv.classList.remove('d-none');
        analysisText.textContent = `Erreur lors de l'analyse: \${error.message}. Veuillez réessayer.`;
    } finally {
        this.disabled = false;
        this.innerHTML = '<i class=\"fas fa-search me-1\"></i> Analyser l\\'état du véhicule';
    }
});
</script>

";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vehicule/_form.html.twig";
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
        return array (  384 => 189,  300 => 107,  291 => 105,  287 => 104,  283 => 103,  279 => 102,  272 => 97,  263 => 95,  259 => 94,  256 => 93,  254 => 88,  250 => 87,  243 => 82,  234 => 80,  230 => 79,  226 => 78,  222 => 77,  215 => 72,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  187 => 62,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  159 => 52,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  131 => 42,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  103 => 32,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  76 => 23,  55 => 4,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
<div class=\"row g-3\">
    {% if show_image_upload is defined and show_image_upload %}
    <div class=\"col-12 mb-4\">
        <div class=\"form-group bg-light p-3 rounded\">
            <label for=\"vehiclePhoto\" class=\"form-label\">Photo du véhicule</label>
            <input type=\"file\" class=\"form-control\" id=\"vehiclePhoto\" accept=\"image/*\">
            <button type=\"button\" class=\"btn btn-info mt-2\" id=\"analyzeButton\">
                <i class=\"fas fa-search me-1\"></i> Analyser l'état du véhicule
            </button>
            <div id=\"analysisResult\" class=\"mt-3 d-none\">
                <div class=\"alert alert-info\">
                    <h5>Résultat de l'analyse :</h5>
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                    </div>
                    <p class=\"mt-2 mb-0\" id=\"analysisText\"></p>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    <!-- Champs classiques -->
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.marque) }}
            {{ form_widget(form.marque, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Peugeot'}}) }}
            {% for error in form.marque.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.modele) }}
            {{ form_widget(form.modele, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 208'}}) }}
            {% for error in form.modele.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.immatriculation) }}
            {{ form_widget(form.immatriculation, {'attr': {'class': 'form-control', 'placeholder': 'Ex: AB-123-CD'}}) }}
            {% for error in form.immatriculation.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.type) }}
            {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder': 'Ex: SUV, Berline...'}}) }}
            {% for error in form.type.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.couleur) }}
            {{ form_widget(form.couleur, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Rouge'}}) }}
            {% for error in form.couleur.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.kilometrage) }}
            {{ form_widget(form.kilometrage, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 45000'}}) }}
            {% for error in form.kilometrage.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.statut) }}
            {{ form_widget(form.statut, {
                'attr': {
                    'class': 'form-control',
                    'placeholder': 'Visite faite, Visite non faite'
                }
            }) }}
            {% for error in form.statut.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.carteGrise) }}
            {{ form_widget(form.carteGrise, {'attr': {'class': 'form-select'}}) }}
            {% for error in form.carteGrise.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-12 mt-4\">
        <button type=\"submit\" class=\"btn btn-primary me-2\">
            <i class=\"fas fa-save me-1\"></i> Enregistrer
        </button>
        <button type=\"reset\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-undo me-1\"></i> Réinitialiser
        </button>
    </div>
</div>

<script>
document.getElementById('analyzeButton').addEventListener('click', async function () {
    const imageFile = document.getElementById('vehiclePhoto').files[0];
    if (!imageFile) {
        alert('Veuillez sélectionner une photo du véhicule');
        return;
    }

    if (imageFile.size > 4 * 1024 * 1024) {
        alert('La taille de l\\'image ne doit pas dépasser 4MB');
        return;
    }

    if (!imageFile.type.startsWith('image/')) {
        alert('Veuillez sélectionner un fichier image valide');
        return;
    }

    this.disabled = true;
    this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-1\"></i> Analyse en cours...';

    try {
        const base64Image = await new Promise((resolve) => {
            const reader = new FileReader();
            reader.onloadend = () => resolve(reader.result.split(',')[1]);
            reader.readAsDataURL(imageFile);
        });

        const response = await fetch('/api/analyze-vehicle', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
            body: JSON.stringify({ image: base64Image, mime_type: imageFile.type })
        });

        const responseText = await response.text();
        const data = JSON.parse(responseText);

        const resultDiv = document.getElementById('analysisResult');
        const analysisText = document.getElementById('analysisText');
        resultDiv.classList.remove('d-none');

        let recommendationText = data.recommendation || 'Aucune recommandation disponible';

        // Si l'état est mauvais → remplir statut + rendre non modifiable
        if (recommendationText.includes('Des réparations importantes sont recommandées') || recommendationText.includes('mauvais état') || recommendationText.includes('non conforme')) {
            recommendationText += ' Veuillez réparer votre véhicule avant la visite pour qu\\'elle soit acceptée.';

            const statutField = document.querySelector('[name=\"vehicule[statut]\"]');
            if (statutField) {
                statutField.value = 'Visite non faite';
                statutField.setAttribute('readonly', true); // ou 'disabled', selon ton besoin
            }
        }

        analysisText.textContent = `Analyse du véhicule : \${recommendationText}`;

    } catch (error) {
        console.error('Erreur analyse API:', error);
        const resultDiv = document.getElementById('analysisResult');
        const analysisText = document.getElementById('analysisText');
        resultDiv.classList.remove('d-none');
        analysisText.textContent = `Erreur lors de l'analyse: \${error.message}. Veuillez réessayer.`;
    } finally {
        this.disabled = false;
        this.innerHTML = '<i class=\"fas fa-search me-1\"></i> Analyser l\\'état du véhicule';
    }
});
</script>

{{ form_end(form) }}", "vehicule/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\vehicule\\_form.html.twig");
    }
}
