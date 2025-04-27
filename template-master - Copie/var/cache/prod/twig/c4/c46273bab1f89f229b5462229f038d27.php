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

/* dashboard/index.html.twig */
class __TwigTemplate_d939d47c97a4d1af2241834ddbf6b210 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"container\">
    <div class=\"page-inner\">
        <!-- Header Section -->
        <div class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\">
            <div>
                <h3 class=\"fw-bold mb-3\">Dashboard</h3>
            </div>
            <div class=\"ms-md-auto py-2 py-md-0\">
            </div>
        </div>

        <!-- Stats Cards Row 1 -->
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-3\">
                <div class=\"card card-stats card-round\">
                    <div class=\"card-body\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-icon\">
                                <div class=\"icon-big text-center icon-primary bubble-shadow-small\">
                                    <i class=\"fas fa-car\"></i>
                                </div>
                            </div>
                            <div class=\"col col-stats ms-3 ms-sm-0\">
                                <div class=\"numbers\">
                                    <p class=\"card-category\">Vehicules</p>
                                    <h4 class=\"card-title\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["nombreVehicules"] ?? null), 0, ",", " "), "html", null, true);
        yield "</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-3\">
                <div class=\"card card-stats card-round\">
                    <div class=\"card-body\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-icon\">
                                <div class=\"icon-big text-center icon-info bubble-shadow-small\">
                                    <i class=\"fas fa-file-signature\"></i>
                                </div>
                            </div>
                            <div class=\"col col-stats ms-3 ms-sm-0\">
                                <div class=\"numbers\">
                                    <p class=\"card-category\">Cartes Grises</p>
                                    <h4 class=\"card-title\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["nombreCartesGrises"] ?? null), 0, ",", " "), "html", null, true);
        yield "</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-3\">
                <div class=\"card card-stats card-round\">
                    <div class=\"card-body\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-icon\">
                                <div class=\"icon-big text-center icon-success bubble-shadow-small\">
                                    <i class=\"fas fa-car\"></i>
                                </div>
                            </div>
                            <div class=\"col col-stats ms-3 ms-sm-0\">
                                <div class=\"numbers\">
                                    <p class=\"card-category\">Véhicules approvés</p>
                                    <h4 class=\"card-title\">
                                        ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["nombreVehiculesApprouves"] ?? null), 0, ",", " "), "html", null, true);
        yield "
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-3\">
                <div class=\"card card-stats card-round\">
                    <div class=\"card-body\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-icon\">
                                <div class=\"icon-big text-center icon-secondary bubble-shadow-small\">
                                    <i class=\"far fa-times-circle\"></i>
                                </div>
                            </div>
                            <div class=\"col col-stats ms-3 ms-sm-0\">
                                <div class=\"numbers\">
                                    <p class=\"card-category\">Véhicules refusés</p>
                                    <h4 class=\"card-title\">
                                        ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["nombreVehiculesNonApprouves"] ?? null), 0, ",", " "), "html", null, true);
        yield "
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards Row 2 -->
        <div class=\"row g-4 mt-2\">
            <!-- Key Metrics Cards -->
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card card-stats card-round shadow-sm border-0\">
                    <div class=\"card-body p-3\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"icon icon-shape bg-primary text-white rounded-circle me-3\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                            <div>
                                <h6 class=\"text-muted mb-1\">Total Employees</h6>
                                <h3 class=\"fw-bold mb-0\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalEmployees"] ?? null), "html", null, true);
        yield "</h3>
                                <small class=\"text-success\">
                                    <i class=\"fas fa-arrow-up me-1\"></i> 5.2% from last month
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card card-stats card-round shadow-sm border-0\">
                    <div class=\"card-body p-3\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"icon icon-shape bg-success text-white rounded-circle me-3\">
                                <i class=\"fas fa-laptop\"></i>
                            </div>
                            <div>
                                <h6 class=\"text-muted mb-1\">Total Equipment</h6>
                                <h3 class=\"fw-bold mb-0\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalEquipements"] ?? null), "html", null, true);
        yield "</h3>
                                <small class=\"text-success\">
                                    <i class=\"fas fa-arrow-up me-1\"></i> 3.1% from last month
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Chart Section -->
        <div class=\"row mt-4\">
            <div class=\"col-md-12\">
                <div class=\"card card-round shadow-sm\">
                    <div class=\"card-header py-3\">
                        <div class=\"card-head-row align-items-center\">
                            <div class=\"card-title\">
                                <h4 class=\"fw-bold mb-0\">Employee Age Distribution</h4>
                                <small class=\"text-muted\">Breakdown by age groups</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div class=\"chart-container\" style=\"height: 350px\">
                            <canvas id=\"ageDistributionChart\"></canvas>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-top-0 pt-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <small class=\"text-muted\">Updated 2 hours ago</small>
                            <a href=\"#\" class=\"btn btn-sm btn-link\">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Content Sections -->
        <div class=\"row mt-4\">
            <div class=\"col-md-4\">
                <div class=\"card card-primary card-round\">
                    <div class=\"card-header\">
                        <div class=\"card-head-row\">
                            <div class=\"card-title\">Daily Sales</div>
                            <div class=\"card-tools\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-sm btn-label-light dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Export
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-category\">March 25 - April 02</div>
                    </div>
                    <div class=\"card-body pb-0\">
                        <div class=\"mb-4 mt-2\">
                            <h1>\$4,578.58</h1>
                        </div>
                        <div class=\"pull-in\">
                            <canvas id=\"dailySalesChart\"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class=\"card card-round mt-4\">
                    <div class=\"card-body pb-0\">
                        <div class=\"h1 fw-bold float-end text-primary\">+5%</div>
                        <h2 class=\"mb-2\">17</h2>
                        <p class=\"text-muted\">Users online</p>
                        <div class=\"pull-in sparkline-fix\">
                            <div id=\"lineChart\"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"card card-round\">
                    <div class=\"card-header\">
                        <div class=\"card-head-row card-tools-still-right\">
                            <h4 class=\"card-title\">Transaction History</h4>
                            <div class=\"card-tools\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-icon btn-clean me-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-h\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-items-center mb-0\">
                                <thead class=\"thead-light\">
                                    <tr>
                                        <th scope=\"col\">Payment Number</th>
                                        <th scope=\"col\" class=\"text-end\">Date & Time</th>
                                        <th scope=\"col\" class=\"text-end\">Amount</th>
                                        <th scope=\"col\" class=\"text-end\">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 247
            yield "                                    <tr>
                                        <th scope=\"row\">
                                            <button class=\"btn btn-icon btn-round btn-success btn-sm me-2\">
                                                <i class=\"fa fa-check\"></i>
                                            </button>
                                            Payment from #1023";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                                        </th>
                                        <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                                        <td class=\"text-end\">\$250.00</td>
                                        <td class=\"text-end\">
                                            <span class=\"badge badge-success\">Completed</span>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ageCtx = document.getElementById('ageDistributionChart').getContext('2d');
    new Chart(ageCtx, {
        type: 'bar',
        data: {
            labels: ['18-25', '26-35', '36-45', '46-55', '56+'],
            datasets: [{
                label: 'Number of Employees',
                data: [
                    ";
        // line 281
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ageDistribution"] ?? null), "18-25", [], "array", true, true, false, 281) &&  !(null === (($_v0 = ($context["ageDistribution"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["18-25"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["ageDistribution"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["18-25"] ?? null) : null), "html", null, true)) : (0));
        yield ",
                    ";
        // line 282
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ageDistribution"] ?? null), "26-35", [], "array", true, true, false, 282) &&  !(null === (($_v2 = ($context["ageDistribution"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["26-35"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["ageDistribution"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["26-35"] ?? null) : null), "html", null, true)) : (0));
        yield ",
                    ";
        // line 283
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ageDistribution"] ?? null), "36-45", [], "array", true, true, false, 283) &&  !(null === (($_v4 = ($context["ageDistribution"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["36-45"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["ageDistribution"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["36-45"] ?? null) : null), "html", null, true)) : (0));
        yield ",
                    ";
        // line 284
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ageDistribution"] ?? null), "46-55", [], "array", true, true, false, 284) &&  !(null === (($_v6 = ($context["ageDistribution"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["46-55"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["ageDistribution"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["46-55"] ?? null) : null), "html", null, true)) : (0));
        yield ",
                    ";
        // line 285
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ageDistribution"] ?? null), "56+", [], "array", true, true, false, 285) &&  !(null === (($_v8 = ($context["ageDistribution"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["56+"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["ageDistribution"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["56+"] ?? null) : null), "html", null, true)) : (0));
        yield "
                ],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(255, 159, 64, 0.7)',
                    'rgba(153, 102, 255, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 12,
                        padding: 20,
                        usePointStyle: true,
                        pointStyle: 'circle'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    padding: 12,
                    titleFont: { size: 14, weight: 'bold' },
                    bodyFont: { size: 12 },
                    cornerRadius: 4,
                    displayColors: true,
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false,
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        stepSize: 1,
                        padding: 10
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        padding: 10
                    }
                }
            },
            layout: {
                padding: {
                    top: 10,
                    bottom: 10,
                    left: 10,
                    right: 10
                }
            }
        }
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  384 => 285,  380 => 284,  376 => 283,  372 => 282,  368 => 281,  346 => 261,  331 => 252,  324 => 247,  320 => 246,  204 => 133,  182 => 114,  157 => 92,  132 => 70,  108 => 49,  85 => 29,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\dashboard\\index.html.twig");
    }
}
