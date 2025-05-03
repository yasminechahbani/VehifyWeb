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

/* equipement/stats.html.twig */
class __TwigTemplate_967732d9017c058bd9b728c34d4f067f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipement/stats.html.twig", 1);
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

        yield "Statistiques sur les équipements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
  .chart-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin: 0 auto 30px;  /* Center horizontally */
    max-width: 1000px;    /* Limit maximum width */
    padding: 0 20px;      /* Add some padding */
  }
  
  #main-chart {
    margin: 0 auto;       /* Center the chart */
    width: 100%;         /* Make it responsive */
    max-width: 900px;    /* Maximum width */
    height: 500px;
  }

  h1 {
    text-align: center;  /* Center the title */
    margin-bottom: 30px;
  }

  .chart-options {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin: 15px auto;   /* Center horizontally */
    padding: 15px;
    border-radius: 5px;
    background-color: #f5f5f5;
    justify-content: center; /* Center the options */
  }
  
  .chart-type-selector {
    padding: 8px 15px;
    border-radius: 4px;
    border: 1px solid #ddd;
  }
  
  .admin-controls {
    display: ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield "flex";
        } else {
            yield "none";
        }
        yield ";
    flex-direction: column;
    gap: 15px;
    padding: 15px;
    margin-top: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  
  .btn-export {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .btn-export:hover {
    background-color: #45a049;
  }

  #detailed-stats {
    width: 100%;
    margin-top: 20px;
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "<h1>Statistiques sur les équipements</h1>

<div class=\"chart-options\">
  <select id=\"chart-type\" class=\"chart-type-selector\">
    <option value=\"pie\">Graphique circulaire</option>
    <option value=\"bar\">Graphique à barres</option>
    <option value=\"column\">Graphique à colonnes</option>
    <option value=\"donut\">Graphique en anneau</option>
  </select>
  
  <select id=\"data-view\" class=\"chart-type-selector\">
    <option value=\"etat\">Par état</option>
    <option value=\"categorie\">Par catégorie</option>
    <option value=\"age\">Par âge</option>
  </select>
  
  ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 94
            yield "  <select id=\"data-filter\" class=\"chart-type-selector\">
    <option value=\"all\">Tous les équipements</option>
    <option value=\"maintenance\">En maintenance</option>
    <option value=\"critique\">État critique</option>
    <option value=\"recent\">Ajoutés récemment</option>
  </select>
  ";
        }
        // line 101
        yield "</div>

<div class=\"chart-container\">
  <div id=\"main-chart\" style=\"width: 900px; height: 500px;\"></div>
  
  ";
        // line 106
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 107
            yield "  <div class=\"admin-controls\">
    <h3>Contrôles administrateur</h3>
    <div>
      <button id=\"btn-export-pdf\" class=\"btn-export\">Exporter en PDF</button>
      <button id=\"btn-export-csv\" class=\"btn-export\">Exporter les données (CSV)</button>
      <button id=\"btn-refresh\" class=\"btn-export\">Actualiser les données</button>
    </div>
    <div id=\"detailed-stats\"></div>
  </div>
  ";
        }
        // line 117
        yield "</div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">
  google.charts.load('current', {'packages':['corechart', 'table']});
  google.charts.setOnLoadCallback(initCharts);
  
  let mainChart;
  let statsTable;
  
  // Données de base
  const baseData = [
    ['État', 'Nombre'],
    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etatsCount"]) || array_key_exists("etatsCount", $context) ? $context["etatsCount"] : (function () { throw new RuntimeError('Variable "etatsCount" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["etat"] => $context["nombre"]) {
            // line 131
            yield "      ['";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["etat"], "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nombre"], "html", null, true);
            yield "],
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['etat'], $context['nombre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "  ];
  
  ";
        // line 135
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 136
            yield "  // Données supplémentaires pour les administrateurs
  const categoriesData = [
    ['Catégorie', 'Nombre'],
    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("categoriesCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 139, $this->source); })()), [])) : ([])));
            foreach ($context['_seq'] as $context["categorie"] => $context["nombre"]) {
                // line 140
                yield "      ['";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                yield "', ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nombre"], "html", null, true);
                yield "],
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['categorie'], $context['nombre'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "  ];
  
  const ageData = [
    ['Âge', 'Nombre'],
    ['< 1 an', ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "recent", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "recent", [], "any", false, false, false, 146), 10)) : (10)), "html", null, true);
            yield "],
    ['1-3 ans', ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "medium", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "medium", [], "any", false, false, false, 147), 25)) : (25)), "html", null, true);
            yield "],
    ['3-5 ans', ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "older", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "older", [], "any", false, false, false, 148), 18)) : (18)), "html", null, true);
            yield "],
    ['> 5 ans', ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "oldest", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["equipementAge"] ?? null), "oldest", [], "any", false, false, false, 149), 15)) : (15)), "html", null, true);
            yield "]
  ];
  
  // Données détaillées pour le tableau administrateur
  const detailedData = [
    ['ID', 'Nom', 'État', 'Catégorie', 'Date d\\'achat', 'Dernière maintenance'],
    ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("detailedEquipments", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["detailedEquipments"]) || array_key_exists("detailedEquipments", $context) ? $context["detailedEquipments"] : (function () { throw new RuntimeError('Variable "detailedEquipments" does not exist.', 155, $this->source); })()), [])) : ([])));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["equip"]) {
                // line 156
                yield "      ['";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equip"], "id", [], "any", false, false, false, 156), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equip"], "nom", [], "any", false, false, false, 156), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equip"], "etat", [], "any", false, false, false, 156), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equip"], "categorie", [], "any", false, false, false, 156), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["equip"], "dateAchat", [], "any", false, false, false, 156), "d/m/Y"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["equip"], "dateMaintenance", [], "any", false, false, false, 156), "d/m/Y"), "N/A"), "html", null, true);
                yield "'],
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 158
                yield "      // Données de démonstration si aucune n'est fournie
      ['EQ001', 'Équipement A', 'Fonctionnel', 'Informatique', '15/03/2023', '10/01/2024'],
      ['EQ002', 'Équipement B', 'En maintenance', 'Réseau', '22/06/2022', '05/03/2024'],
      ['EQ003', 'Équipement C', 'Défectueux', 'Serveur', '03/09/2020', '20/12/2023'],
      ['EQ004', 'Équipement D', 'Fonctionnel', 'Périphérique', '17/11/2021', '15/02/2024']
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['equip'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "  ];
  ";
        }
        // line 166
        yield "  
  function initCharts() {
    drawMainChart('pie', baseData);
    
    ";
        // line 170
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 171
            yield "    drawStatsTable(detailedData);
    
    // Configuration des événements pour les contrôles admin
    document.getElementById('btn-export-pdf').addEventListener('click', exportPDF);
    document.getElementById('btn-export-csv').addEventListener('click', exportCSV);
    document.getElementById('btn-refresh').addEventListener('click', refreshData);
    document.getElementById('data-filter').addEventListener('change', updateChartData);
    ";
        }
        // line 179
        yield "    
    // Configuration des événements communs
    document.getElementById('chart-type').addEventListener('change', updateChartType);
    document.getElementById('data-view').addEventListener('change', updateChartData);
  }
  
  function drawMainChart(chartType, dataArray) {
    const data = google.visualization.arrayToDataTable(dataArray);
    
    let options = {
      title: getChartTitle(),
      is3D: chartType === 'pie' ? true : false,
      pieHole: chartType === 'donut' ? 0.4 : 0,
      legend: { position: 'right' },
      colors: ['#4285F4', '#EA4335', '#FBBC05', '#34A853', '#8B44CE', '#00ACC1', '#FF6D00'],
      animation: {
        duration: 1000,
        easing: 'out',
        startup: true
      }
    };
    
    // Déterminer quel type de graphique utiliser
    switch(chartType) {
      case 'bar':
        mainChart = new google.visualization.BarChart(document.getElementById('main-chart'));
        break;
      case 'column':
        mainChart = new google.visualization.ColumnChart(document.getElementById('main-chart'));
        break;
      case 'donut':
        mainChart = new google.visualization.PieChart(document.getElementById('main-chart'));
        break;
      case 'pie':
      default:
        mainChart = new google.visualization.PieChart(document.getElementById('main-chart'));
    }
    
    mainChart.draw(data, options);
  }
  
  ";
        // line 220
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 221
            yield "  function drawStatsTable(dataArray) {
    const data = google.visualization.arrayToDataTable(dataArray);
    
    const options = {
      showRowNumber: true,
      width: '100%',
      height: '100%',
      page: 'enable',
      pageSize: 5
    };
    
    statsTable = new google.visualization.Table(document.getElementById('detailed-stats'));
    statsTable.draw(data, options);
  }
  
  function exportPDF() {
    alert('Le PDF contenant les statistiques est en cours de génération.');
    // Ici, vous ajouteriez la logique d'exportation PDF côté serveur
  }
  
  function exportCSV() {
    alert('Les données vont être téléchargées au format CSV.');
    // Ici, vous ajouteriez la logique d'exportation CSV
  }
  
  function refreshData() {
    alert('Actualisation des données en cours...');
    // Ici, vous feriez une requête AJAX pour rafraîchir les données
    // Puis, vous appelleriez drawMainChart et drawStatsTable avec les nouvelles données
  }
  ";
        }
        // line 252
        yield "  
  function updateChartType() {
    const chartType = document.getElementById('chart-type').value;
    const dataView = document.getElementById('data-view').value;
    
    let dataToUse;
    ";
        // line 258
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 259
            yield "    switch(dataView) {
      case 'categorie':
        dataToUse = categoriesData;
        break;
      case 'age':
        dataToUse = ageData;
        break;
      case 'etat':
      default:
        dataToUse = baseData;
    }
    ";
        } else {
            // line 271
            yield "    dataToUse = baseData;
    ";
        }
        // line 273
        yield "    
    drawMainChart(chartType, dataToUse);
  }
  
  function updateChartData() {
    const chartType = document.getElementById('chart-type').value;
    const dataView = document.getElementById('data-view').value;
    
    let dataToUse;
    ";
        // line 282
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 283
            yield "    switch(dataView) {
      case 'categorie':
        dataToUse = categoriesData;
        break;
      case 'age':
        dataToUse = ageData;
        break;
      case 'etat':
      default:
        dataToUse = baseData;
    }
    
    // Appliquer des filtres supplémentaires si sélectionnés
    const dataFilter = document.getElementById('data-filter').value;
    if (dataFilter !== 'all') {
      // Dans une implémentation réelle, vous feriez une requête AJAX pour obtenir des données filtrées
      // Pour cet exemple, nous simulons simplement le filtrage
      console.log('Filtre appliqué: ' + dataFilter);
    }
    ";
        } else {
            // line 303
            yield "    dataToUse = baseData;
    ";
        }
        // line 305
        yield "    
    drawMainChart(chartType, dataToUse);
  }
  
  function getChartTitle() {
    const dataView = document.getElementById('data-view').value;
    
    switch(dataView) {
      case 'categorie':
        return 'Équipements par catégorie';
      case 'age':
        return 'Équipements par âge';
      case 'etat':
      default:
        return 'État des équipements';
    }
  }
</script>
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
        return "equipement/stats.html.twig";
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
        return array (  536 => 305,  532 => 303,  510 => 283,  508 => 282,  497 => 273,  493 => 271,  479 => 259,  477 => 258,  469 => 252,  436 => 221,  434 => 220,  391 => 179,  381 => 171,  379 => 170,  373 => 166,  369 => 164,  358 => 158,  340 => 156,  335 => 155,  326 => 149,  322 => 148,  318 => 147,  314 => 146,  308 => 142,  297 => 140,  293 => 139,  288 => 136,  286 => 135,  282 => 133,  271 => 131,  267 => 130,  252 => 117,  240 => 107,  238 => 106,  231 => 101,  222 => 94,  220 => 93,  202 => 77,  189 => 76,  145 => 46,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Statistiques sur les équipements{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
  .chart-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin: 0 auto 30px;  /* Center horizontally */
    max-width: 1000px;    /* Limit maximum width */
    padding: 0 20px;      /* Add some padding */
  }
  
  #main-chart {
    margin: 0 auto;       /* Center the chart */
    width: 100%;         /* Make it responsive */
    max-width: 900px;    /* Maximum width */
    height: 500px;
  }

  h1 {
    text-align: center;  /* Center the title */
    margin-bottom: 30px;
  }

  .chart-options {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin: 15px auto;   /* Center horizontally */
    padding: 15px;
    border-radius: 5px;
    background-color: #f5f5f5;
    justify-content: center; /* Center the options */
  }
  
  .chart-type-selector {
    padding: 8px 15px;
    border-radius: 4px;
    border: 1px solid #ddd;
  }
  
  .admin-controls {
    display: {% if is_granted('ROLE_ADMIN') %}flex{% else %}none{% endif %};
    flex-direction: column;
    gap: 15px;
    padding: 15px;
    margin-top: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  
  .btn-export {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .btn-export:hover {
    background-color: #45a049;
  }

  #detailed-stats {
    width: 100%;
    margin-top: 20px;
  }
</style>
{% endblock %}

{% block body %}
<h1>Statistiques sur les équipements</h1>

<div class=\"chart-options\">
  <select id=\"chart-type\" class=\"chart-type-selector\">
    <option value=\"pie\">Graphique circulaire</option>
    <option value=\"bar\">Graphique à barres</option>
    <option value=\"column\">Graphique à colonnes</option>
    <option value=\"donut\">Graphique en anneau</option>
  </select>
  
  <select id=\"data-view\" class=\"chart-type-selector\">
    <option value=\"etat\">Par état</option>
    <option value=\"categorie\">Par catégorie</option>
    <option value=\"age\">Par âge</option>
  </select>
  
  {% if is_granted('ROLE_ADMIN') %}
  <select id=\"data-filter\" class=\"chart-type-selector\">
    <option value=\"all\">Tous les équipements</option>
    <option value=\"maintenance\">En maintenance</option>
    <option value=\"critique\">État critique</option>
    <option value=\"recent\">Ajoutés récemment</option>
  </select>
  {% endif %}
</div>

<div class=\"chart-container\">
  <div id=\"main-chart\" style=\"width: 900px; height: 500px;\"></div>
  
  {% if is_granted('ROLE_ADMIN') %}
  <div class=\"admin-controls\">
    <h3>Contrôles administrateur</h3>
    <div>
      <button id=\"btn-export-pdf\" class=\"btn-export\">Exporter en PDF</button>
      <button id=\"btn-export-csv\" class=\"btn-export\">Exporter les données (CSV)</button>
      <button id=\"btn-refresh\" class=\"btn-export\">Actualiser les données</button>
    </div>
    <div id=\"detailed-stats\"></div>
  </div>
  {% endif %}
</div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">
  google.charts.load('current', {'packages':['corechart', 'table']});
  google.charts.setOnLoadCallback(initCharts);
  
  let mainChart;
  let statsTable;
  
  // Données de base
  const baseData = [
    ['État', 'Nombre'],
    {% for etat, nombre in etatsCount %}
      ['{{ etat }}', {{ nombre }}],
    {% endfor %}
  ];
  
  {% if is_granted('ROLE_ADMIN') %}
  // Données supplémentaires pour les administrateurs
  const categoriesData = [
    ['Catégorie', 'Nombre'],
    {% for categorie, nombre in categoriesCount|default([]) %}
      ['{{ categorie }}', {{ nombre }}],
    {% endfor %}
  ];
  
  const ageData = [
    ['Âge', 'Nombre'],
    ['< 1 an', {{ equipementAge.recent|default(10) }}],
    ['1-3 ans', {{ equipementAge.medium|default(25) }}],
    ['3-5 ans', {{ equipementAge.older|default(18) }}],
    ['> 5 ans', {{ equipementAge.oldest|default(15) }}]
  ];
  
  // Données détaillées pour le tableau administrateur
  const detailedData = [
    ['ID', 'Nom', 'État', 'Catégorie', 'Date d\\'achat', 'Dernière maintenance'],
    {% for equip in detailedEquipments|default([]) %}
      ['{{ equip.id }}', '{{ equip.nom }}', '{{ equip.etat }}', '{{ equip.categorie }}', '{{ equip.dateAchat|date(\"d/m/Y\") }}', '{{ equip.dateMaintenance|date(\"d/m/Y\")|default(\"N/A\") }}'],
    {% else %}
      // Données de démonstration si aucune n'est fournie
      ['EQ001', 'Équipement A', 'Fonctionnel', 'Informatique', '15/03/2023', '10/01/2024'],
      ['EQ002', 'Équipement B', 'En maintenance', 'Réseau', '22/06/2022', '05/03/2024'],
      ['EQ003', 'Équipement C', 'Défectueux', 'Serveur', '03/09/2020', '20/12/2023'],
      ['EQ004', 'Équipement D', 'Fonctionnel', 'Périphérique', '17/11/2021', '15/02/2024']
    {% endfor %}
  ];
  {% endif %}
  
  function initCharts() {
    drawMainChart('pie', baseData);
    
    {% if is_granted('ROLE_ADMIN') %}
    drawStatsTable(detailedData);
    
    // Configuration des événements pour les contrôles admin
    document.getElementById('btn-export-pdf').addEventListener('click', exportPDF);
    document.getElementById('btn-export-csv').addEventListener('click', exportCSV);
    document.getElementById('btn-refresh').addEventListener('click', refreshData);
    document.getElementById('data-filter').addEventListener('change', updateChartData);
    {% endif %}
    
    // Configuration des événements communs
    document.getElementById('chart-type').addEventListener('change', updateChartType);
    document.getElementById('data-view').addEventListener('change', updateChartData);
  }
  
  function drawMainChart(chartType, dataArray) {
    const data = google.visualization.arrayToDataTable(dataArray);
    
    let options = {
      title: getChartTitle(),
      is3D: chartType === 'pie' ? true : false,
      pieHole: chartType === 'donut' ? 0.4 : 0,
      legend: { position: 'right' },
      colors: ['#4285F4', '#EA4335', '#FBBC05', '#34A853', '#8B44CE', '#00ACC1', '#FF6D00'],
      animation: {
        duration: 1000,
        easing: 'out',
        startup: true
      }
    };
    
    // Déterminer quel type de graphique utiliser
    switch(chartType) {
      case 'bar':
        mainChart = new google.visualization.BarChart(document.getElementById('main-chart'));
        break;
      case 'column':
        mainChart = new google.visualization.ColumnChart(document.getElementById('main-chart'));
        break;
      case 'donut':
        mainChart = new google.visualization.PieChart(document.getElementById('main-chart'));
        break;
      case 'pie':
      default:
        mainChart = new google.visualization.PieChart(document.getElementById('main-chart'));
    }
    
    mainChart.draw(data, options);
  }
  
  {% if is_granted('ROLE_ADMIN') %}
  function drawStatsTable(dataArray) {
    const data = google.visualization.arrayToDataTable(dataArray);
    
    const options = {
      showRowNumber: true,
      width: '100%',
      height: '100%',
      page: 'enable',
      pageSize: 5
    };
    
    statsTable = new google.visualization.Table(document.getElementById('detailed-stats'));
    statsTable.draw(data, options);
  }
  
  function exportPDF() {
    alert('Le PDF contenant les statistiques est en cours de génération.');
    // Ici, vous ajouteriez la logique d'exportation PDF côté serveur
  }
  
  function exportCSV() {
    alert('Les données vont être téléchargées au format CSV.');
    // Ici, vous ajouteriez la logique d'exportation CSV
  }
  
  function refreshData() {
    alert('Actualisation des données en cours...');
    // Ici, vous feriez une requête AJAX pour rafraîchir les données
    // Puis, vous appelleriez drawMainChart et drawStatsTable avec les nouvelles données
  }
  {% endif %}
  
  function updateChartType() {
    const chartType = document.getElementById('chart-type').value;
    const dataView = document.getElementById('data-view').value;
    
    let dataToUse;
    {% if is_granted('ROLE_ADMIN') %}
    switch(dataView) {
      case 'categorie':
        dataToUse = categoriesData;
        break;
      case 'age':
        dataToUse = ageData;
        break;
      case 'etat':
      default:
        dataToUse = baseData;
    }
    {% else %}
    dataToUse = baseData;
    {% endif %}
    
    drawMainChart(chartType, dataToUse);
  }
  
  function updateChartData() {
    const chartType = document.getElementById('chart-type').value;
    const dataView = document.getElementById('data-view').value;
    
    let dataToUse;
    {% if is_granted('ROLE_ADMIN') %}
    switch(dataView) {
      case 'categorie':
        dataToUse = categoriesData;
        break;
      case 'age':
        dataToUse = ageData;
        break;
      case 'etat':
      default:
        dataToUse = baseData;
    }
    
    // Appliquer des filtres supplémentaires si sélectionnés
    const dataFilter = document.getElementById('data-filter').value;
    if (dataFilter !== 'all') {
      // Dans une implémentation réelle, vous feriez une requête AJAX pour obtenir des données filtrées
      // Pour cet exemple, nous simulons simplement le filtrage
      console.log('Filtre appliqué: ' + dataFilter);
    }
    {% else %}
    dataToUse = baseData;
    {% endif %}
    
    drawMainChart(chartType, dataToUse);
  }
  
  function getChartTitle() {
    const dataView = document.getElementById('data-view').value;
    
    switch(dataView) {
      case 'categorie':
        return 'Équipements par catégorie';
      case 'age':
        return 'Équipements par âge';
      case 'etat':
      default:
        return 'État des équipements';
    }
  }
</script>
{% endblock %}", "equipement/stats.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\equipement\\stats.html.twig");
    }
}
