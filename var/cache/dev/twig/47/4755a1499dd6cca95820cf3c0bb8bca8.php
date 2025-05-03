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

/* carte_grise/_form.html.twig */
class __TwigTemplate_43e2cdab533b3052ec178d9be7e77ab4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
    <div class=\"row g-3\">
        <!-- Add OCR upload section -->
        <div class=\"col-12 mb-4\">
            <div class=\"form-group bg-light p-3 rounded\">
                <label for=\"imageUpload\" class=\"form-label\">Scanner la carte grise</label>
                <input type=\"file\" class=\"form-control\" id=\"imageUpload\" accept=\"image/*\">
                <button type=\"button\" class=\"btn btn-info mt-2\" id=\"extractButton\">
                    <i class=\"fas fa-magic me-1\"></i> Extraire les informations
                </button>
            </div>
        </div>

        <!-- Existing form fields remain unchanged -->
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 17), 'label');
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "valid", [], "any", false, false, false, 20)) ? ("") : (" is-invalid"))), "placeholder" => "Entrez le numéro"]]);
        // line 23
        yield "
                ";
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) {
            // line 25
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                    </div>
                ";
        }
        // line 31
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "proprietaire", [], "any", false, false, false, 36), 'label');
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "proprietaire", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "proprietaire", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "valid", [], "any", false, false, false, 39)) ? ("") : (" is-invalid"))), "placeholder" => "Nom du propriétaire"]]);
        // line 42
        yield "
                ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "proprietaire", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "proprietaire", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 46
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 46), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                    </div>
                ";
        }
        // line 50
        yield "            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 55), 'label');
        yield "
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "valid", [], "any", false, false, false, 58)) ? ("") : (" is-invalid"))), "placeholder" => "Adresse complète"]]);
        // line 61
        yield "
                ";
        // line 62
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) > 0)) {
            // line 63
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 65), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "                    </div>
                ";
        }
        // line 69
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "dateEmission", [], "any", false, false, false, 74), 'label');
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dateEmission", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => ("form-control datepicker" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "dateEmission", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "valid", [], "any", false, false, false, 77)) ? ("") : (" is-invalid"))), "placeholder" => "JJ/MM/AAAA"]]);
        // line 80
        yield "
                ";
        // line 81
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "dateEmission", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81)) > 0)) {
            // line 82
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "dateEmission", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 84
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 84), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                    </div>
                ";
        }
        // line 88
        yield "            </div>
        </div>

        <!-- Remove dateExpiration field block -->

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
document.getElementById('extractButton').addEventListener('click', function() {
    const imageFile = document.getElementById('imageUpload').files[0];
    if (!imageFile) {
        alert('Veuillez sélectionner une image');
        return;
    }

    const formData = new FormData();
    formData.append('file', imageFile);
    formData.append('language', 'eng'); // Changed to English since the text is in English
    formData.append('isOverlayRequired', 'false');
    formData.append('OCREngine', '2');
    formData.append('scale', 'true');
    formData.append('detectOrientation', 'true');

    this.disabled = true;
    this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-1\"></i> Extraction en cours...';

    fetch('https://api.ocr.space/parse/image', {
        method: 'POST',
        headers: {
            'apikey': 'K82542374388957'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Full API Response:', data);

        if (data.ParsedResults && data.ParsedResults[0]) {
            const text = data.ParsedResults[0].ParsedText;
            console.log('Extracted Text:', text);

            const lines = text.split('\\n')
                .map(line => line.trim())
                .filter(line => line.length > 0);
           
            lines.forEach(line => {
                // Match N° Serie du type (works for both 17-char and 6-digit formats)
                if (/[A-Z0-9]{17}|^\\d{6}\$/.test(line)) {
                    document.querySelector('[name\$=\"[numeroCarteGrise]\"]').value = line.trim();
                }
               
                // Match date (supports multiple date formats)
                const dateMatch = line.match(/(\\d{4})[/-](\\d{2})[/-](\\d{2})|(\\d{2})[/-](\\d{2})[/-](\\d{4})/);
                if (dateMatch) {
                    let year, month, day;
                    if (dateMatch[1]) { // YYYY-MM-DD format
                        [_, year, month, day] = dateMatch;
                    } else { // DD-MM-YYYY format
                        [_, , , , day, month, year] = dateMatch;
                    }
                    document.querySelector('[name\$=\"[dateEmission]\"]').value = `\${year}-\${month}-\${day}`;
                }
            });

            console.log('Extraction réussie');
        } else {
            console.error('OCR Error:', data.ErrorMessage || 'Unknown error');
            alert('Échec de l\\'extraction. Veuillez vérifier l\\'image.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Erreur lors de l\\'extraction: ' + error.message);
    })
    .finally(() => {
        this.disabled = false;
        this.innerHTML = '<i class=\"fas fa-magic me-1\"></i> Extraire les informations';
    });
});
</script>
";
        // line 175
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "carte_grise/_form.html.twig";
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
        return array (  305 => 175,  216 => 88,  212 => 86,  203 => 84,  199 => 83,  196 => 82,  194 => 81,  191 => 80,  189 => 77,  188 => 75,  184 => 74,  177 => 69,  173 => 67,  164 => 65,  160 => 64,  157 => 63,  155 => 62,  152 => 61,  150 => 58,  149 => 56,  145 => 55,  138 => 50,  134 => 48,  125 => 46,  121 => 45,  118 => 44,  116 => 43,  113 => 42,  111 => 39,  110 => 37,  106 => 36,  99 => 31,  95 => 29,  86 => 27,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  72 => 20,  71 => 18,  67 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
    <div class=\"row g-3\">
        <!-- Add OCR upload section -->
        <div class=\"col-12 mb-4\">
            <div class=\"form-group bg-light p-3 rounded\">
                <label for=\"imageUpload\" class=\"form-label\">Scanner la carte grise</label>
                <input type=\"file\" class=\"form-control\" id=\"imageUpload\" accept=\"image/*\">
                <button type=\"button\" class=\"btn btn-info mt-2\" id=\"extractButton\">
                    <i class=\"fas fa-magic me-1\"></i> Extraire les informations
                </button>
            </div>
        </div>

        <!-- Existing form fields remain unchanged -->
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.numeroCarteGrise) }}
                {{ form_widget(form.numeroCarteGrise, {
                    'attr': {
                        'class': 'form-control' ~ (form.numeroCarteGrise.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Entrez le numéro'
                    }
                }) }}
                {% if form.numeroCarteGrise.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.numeroCarteGrise.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.proprietaire) }}
                {{ form_widget(form.proprietaire, {
                    'attr': {
                        'class': 'form-control' ~ (form.proprietaire.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Nom du propriétaire'
                    }
                }) }}
                {% if form.proprietaire.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.proprietaire.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                {{ form_label(form.adresseProprietaire) }}
                {{ form_widget(form.adresseProprietaire, {
                    'attr': {
                        'class': 'form-control' ~ (form.adresseProprietaire.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Adresse complète'
                    }
                }) }}
                {% if form.adresseProprietaire.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.adresseProprietaire.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.dateEmission) }}
                {{ form_widget(form.dateEmission, {
                    'attr': {
                        'class': 'form-control datepicker' ~ (form.dateEmission.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'JJ/MM/AAAA'
                    }
                }) }}
                {% if form.dateEmission.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.dateEmission.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <!-- Remove dateExpiration field block -->

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
document.getElementById('extractButton').addEventListener('click', function() {
    const imageFile = document.getElementById('imageUpload').files[0];
    if (!imageFile) {
        alert('Veuillez sélectionner une image');
        return;
    }

    const formData = new FormData();
    formData.append('file', imageFile);
    formData.append('language', 'eng'); // Changed to English since the text is in English
    formData.append('isOverlayRequired', 'false');
    formData.append('OCREngine', '2');
    formData.append('scale', 'true');
    formData.append('detectOrientation', 'true');

    this.disabled = true;
    this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-1\"></i> Extraction en cours...';

    fetch('https://api.ocr.space/parse/image', {
        method: 'POST',
        headers: {
            'apikey': 'K82542374388957'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Full API Response:', data);

        if (data.ParsedResults && data.ParsedResults[0]) {
            const text = data.ParsedResults[0].ParsedText;
            console.log('Extracted Text:', text);

            const lines = text.split('\\n')
                .map(line => line.trim())
                .filter(line => line.length > 0);
           
            lines.forEach(line => {
                // Match N° Serie du type (works for both 17-char and 6-digit formats)
                if (/[A-Z0-9]{17}|^\\d{6}\$/.test(line)) {
                    document.querySelector('[name\$=\"[numeroCarteGrise]\"]').value = line.trim();
                }
               
                // Match date (supports multiple date formats)
                const dateMatch = line.match(/(\\d{4})[/-](\\d{2})[/-](\\d{2})|(\\d{2})[/-](\\d{2})[/-](\\d{4})/);
                if (dateMatch) {
                    let year, month, day;
                    if (dateMatch[1]) { // YYYY-MM-DD format
                        [_, year, month, day] = dateMatch;
                    } else { // DD-MM-YYYY format
                        [_, , , , day, month, year] = dateMatch;
                    }
                    document.querySelector('[name\$=\"[dateEmission]\"]').value = `\${year}-\${month}-\${day}`;
                }
            });

            console.log('Extraction réussie');
        } else {
            console.error('OCR Error:', data.ErrorMessage || 'Unknown error');
            alert('Échec de l\\'extraction. Veuillez vérifier l\\'image.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Erreur lors de l\\'extraction: ' + error.message);
    })
    .finally(() => {
        this.disabled = false;
        this.innerHTML = '<i class=\"fas fa-magic me-1\"></i> Extraire les informations';
    });
});
</script>
{{ form_end(form) }}", "carte_grise/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\carte_grise\\_form.html.twig");
    }
}
