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

/* BackOffice/home/home.html.twig */
class __TwigTemplate_02cc4640086fefdb38557c271061d795 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/home/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "        <div class=\"container\">
          <div class=\"page-inner\">
            <div
              class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\"
            >
              <div>
                <h3 class=\"fw-bold mb-3\">Dashboard</h3>
                
              </div>
              <div class=\"ms-md-auto py-2 py-md-0\">
                <a href=\"#\" class=\"btn btn-label-info btn-round me-2\">Manage</a>
                <a href=\"#\" class=\"btn btn-primary btn-round\">Add Customer</a>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-3\">
                <div class=\"card card-stats card-round\">
                  <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                      <div class=\"col-icon\">
                        <div
                          class=\"icon-big text-center icon-primary bubble-shadow-small\"
                        >
                          <i class=\"fas fa-car\"></i>
                        </div>
                      </div>
                      <div class=\"col col-stats ms-3 ms-sm-0\">
                        <div class=\"numbers\">
                          <p class=\"card-category\">Vehicules</p>
                          <h4 class=\"card-title\">";
        // line 32
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
                        <div
                          class=\"icon-big text-center icon-info bubble-shadow-small\"
                        >
                          <i class=\"fas fa-file-signature\"></i>
                        </div>
                      </div>
                      <div class=\"col col-stats ms-3 ms-sm-0\">
                          <div class=\"numbers\">
                              <p class=\"card-category\">Cartes Grises</p>
                              <h4 class=\"card-title\">";
        // line 54
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
                        <div
                          class=\"icon-big text-center icon-success bubble-shadow-small\"
                        >
                         <i class=\"fas fa-car\"></i>

                        </div>
                      </div>
                      <div class=\"col col-stats ms-3 ms-sm-0\">
                          <div class=\"numbers\">
                              <p class=\"card-category\">Véhicules approvés</p>
                              <h4 class=\"card-title\">
                                  ";
        // line 78
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
                        <div
                          class=\"icon-big text-center icon-secondary bubble-shadow-small\"
                        >
                          <i class=\"far fa-times-circle\"></i>
                        </div>
                      </div>
                      <div class=\"col col-stats ms-3 ms-sm-0\">
                          <div class=\"numbers\">
                              <p class=\"card-category\">Véhicules refusés</p>
                              <h4 class=\"card-title\">

                                  ";
        // line 104
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
            </div>
            <div class=\"row\">
              <div class=\"col-md-8\">
                <div class=\"card card-round\">
                  <div class=\"card-header\">
                    <div class=\"card-head-row\">
                      <div class=\"card-title\">User Statistics</div>
                      <div class=\"card-tools\">
                        <a
                          href=\"#\"
                          class=\"btn btn-label-success btn-round btn-sm me-2\"
                        >
                          <span class=\"btn-label\">
                            <i class=\"fa fa-pencil\"></i>
                          </span>
                          Export
                        </a>
                        <a href=\"#\" class=\"btn btn-label-info btn-round btn-sm\">
                          <span class=\"btn-label\">
                            <i class=\"fa fa-print\"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"chart-container\" style=\"min-height: 375px\">
                      <canvas id=\"statisticsChart\"></canvas>
                    </div>
                    <div id=\"myChartLegend\"></div>
                  </div>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"card card-primary card-round\">
                  <div class=\"card-header\">
                    <div class=\"card-head-row\">
                      <div class=\"card-title\">Daily Sales</div>
                      <div class=\"card-tools\">
                        <div class=\"dropdown\">
                          <button
                            class=\"btn btn-sm btn-label-light dropdown-toggle\"
                            type=\"button\"
                            id=\"dropdownMenuButton\"
                            data-bs-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\"
                          >
                            Export
                          </button>
                          <div
                            class=\"dropdown-menu\"
                            aria-labelledby=\"dropdownMenuButton\"
                          >
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\"
                              >Something else here</a
                            >
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
                <div class=\"card card-round\">
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
            </div>
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"card card-round\">
                  <div class=\"card-header\">
                    <div class=\"card-head-row card-tools-still-right\">
                      <h4 class=\"card-title\">Users Geolocation</h4>
                      <div class=\"card-tools\">
                        <button
                          class=\"btn btn-icon btn-link btn-primary btn-xs\"
                        >
                          <span class=\"fa fa-angle-down\"></span>
                        </button>
                        <button
                          class=\"btn btn-icon btn-link btn-primary btn-xs btn-refresh-card\"
                        >
                          <span class=\"fa fa-sync-alt\"></span>
                        </button>
                        <button
                          class=\"btn btn-icon btn-link btn-primary btn-xs\"
                        >
                          <span class=\"fa fa-times\"></span>
                        </button>
                      </div>
                    </div>
                    <p class=\"card-category\">
                      Map of the distribution of users around the world
                    </p>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"table-responsive table-hover table-sales\">
                          <table class=\"table\">
                            <tbody>
                              <tr>
                                <td>
                                  <div class=\"flag\">
                                    <img

                                      src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flags/id.png"), "html", null, true);
        yield "\"
                                      alt=\"indonesia\"
                                    />
                                  </div>
                                </td>
                                <td>Indonesia</td>
                                <td class=\"text-end\">2.320</td>
                                <td class=\"text-end\">42.18%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class=\"flag\">
                                    <img

                                      src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flags/us.png"), "html", null, true);
        yield "\"
                                      alt=\"united states\"
                                    />
                                  </div>
                                </td>
                                <td>USA</td>
                                <td class=\"text-end\">240</td>
                                <td class=\"text-end\">4.36%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class=\"flag\">
                                    <img

                                      src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flags/au.png"), "html", null, true);
        yield "\"
                                      alt=\"australia\"
                                    />
                                  </div>
                                </td>
                                <td>Australia</td>
                                <td class=\"text-end\">119</td>
                                <td class=\"text-end\">2.16%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class=\"flag\">
                                    <img

                                      src=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flags/ru.png"), "html", null, true);
        yield "\"
                                      alt=\"russia\"
                                    />
                                  </div>
                                </td>
                                <td>Russia</td>
                                <td class=\"text-end\">1.081</td>
                                <td class=\"text-end\">19.65%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class=\"flag\">
                                    <img

                                      src=\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flags/cn.png"), "html", null, true);
        yield "\"
                                      alt=\"china\"
                                    />
                                  </div>
                                </td>
                                <td>China</td>
                                <td class=\"text-end\">1.100</td>
                                <td class=\"text-end\">20%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class=\"flag\">
                                    <img

                                      src=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flags/br.png"), "html", null, true);
        yield "\"
                                      alt=\"brazil\"
                                    />
                                  </div>
                                </td>
                                <td>Brasil</td>
                                <td class=\"text-end\">640</td>
                                <td class=\"text-end\">11.63%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"mapcontainer\">
                          <div
                            id=\"world-map\"
                            class=\"w-100\"
                            style=\"height: 300px\"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"card card-round\">
                  <div class=\"card-body\">
                    <div class=\"card-head-row card-tools-still-right\">
                      <div class=\"card-title\">New Customers</div>
                      <div class=\"card-tools\">
                        <div class=\"dropdown\">
                          <button
                            class=\"btn btn-icon btn-clean me-0\"
                            type=\"button\"
                            id=\"dropdownMenuButton\"
                            data-bs-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\"
                          >
                            <i class=\"fas fa-ellipsis-h\"></i>
                          </button>
                          <div
                            class=\"dropdown-menu\"
                            aria-labelledby=\"dropdownMenuButton\"
                          >
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"card-list py-4\">
                      <div class=\"item-list\">
                        <div class=\"avatar\">
                          <img

                            src=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/jm_denis.jpg"), "html", null, true);
        yield "\"
                            alt=\"...\"
                            class=\"avatar-img rounded-circle\"
                          />
                        </div>
                        <div class=\"info-user ms-3\">
                          <div class=\"username\">Jimmy Denis</div>
                          <div class=\"status\">Graphic Designer</div>
                        </div>
                        <button class=\"btn btn-icon btn-link op-8 me-1\">
                          <i class=\"far fa-envelope\"></i>
                        </button>
                        <button class=\"btn btn-icon btn-link btn-danger op-8\">
                          <i class=\"fas fa-ban\"></i>
                        </button>
                      </div>
                      <div class=\"item-list\">
                        <div class=\"avatar\">
                          <span
                            class=\"avatar-title rounded-circle border border-white\"
                            >CF</span
                          >
                        </div>
                        <div class=\"info-user ms-3\">
                          <div class=\"username\">Chandra Felix</div>
                          <div class=\"status\">Sales Promotion</div>
                        </div>
                        <button class=\"btn btn-icon btn-link op-8 me-1\">
                          <i class=\"far fa-envelope\"></i>
                        </button>
                        <button class=\"btn btn-icon btn-link btn-danger op-8\">
                          <i class=\"fas fa-ban\"></i>
                        </button>
                      </div>
                      <div class=\"item-list\">
                        <div class=\"avatar\">
                          <img

                            src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/talha.jpg"), "html", null, true);
        yield "\"
                            alt=\"...\"
                            class=\"avatar-img rounded-circle\"
                          />
                        </div>
                        <div class=\"info-user ms-3\">
                          <div class=\"username\">Talha</div>
                          <div class=\"status\">Front End Designer</div>
                        </div>
                        <button class=\"btn btn-icon btn-link op-8 me-1\">
                          <i class=\"far fa-envelope\"></i>
                        </button>
                        <button class=\"btn btn-icon btn-link btn-danger op-8\">
                          <i class=\"fas fa-ban\"></i>
                        </button>
                      </div>
                      <div class=\"item-list\">
                        <div class=\"avatar\">
                          <img

                            src=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chadengle.jpg"), "html", null, true);
        yield "\"
                            alt=\"...\"
                            class=\"avatar-img rounded-circle\"
                          />
                        </div>
                        <div class=\"info-user ms-3\">
                          <div class=\"username\">Chad</div>
                          <div class=\"status\">CEO Zeleaf</div>
                        </div>
                        <button class=\"btn btn-icon btn-link op-8 me-1\">
                          <i class=\"far fa-envelope\"></i>
                        </button>
                        <button class=\"btn btn-icon btn-link btn-danger op-8\">
                          <i class=\"fas fa-ban\"></i>
                        </button>
                      </div>
                      <div class=\"item-list\">
                        <div class=\"avatar\">
                          <span
                            class=\"avatar-title rounded-circle border border-white bg-primary\"
                            >H</span
                          >
                        </div>
                        <div class=\"info-user ms-3\">
                          <div class=\"username\">Hizrian</div>
                          <div class=\"status\">Web Designer</div>
                        </div>
                        <button class=\"btn btn-icon btn-link op-8 me-1\">
                          <i class=\"far fa-envelope\"></i>
                        </button>
                        <button class=\"btn btn-icon btn-link btn-danger op-8\">
                          <i class=\"fas fa-ban\"></i>
                        </button>
                      </div>
                      <div class=\"item-list\">
                        <div class=\"avatar\">
                          <span
                            class=\"avatar-title rounded-circle border border-white bg-secondary\"
                            >F</span
                          >
                        </div>
                        <div class=\"info-user ms-3\">
                          <div class=\"username\">Farrah</div>
                          <div class=\"status\">Marketing</div>
                        </div>
                        <button class=\"btn btn-icon btn-link op-8 me-1\">
                          <i class=\"far fa-envelope\"></i>
                        </button>
                        <button class=\"btn btn-icon btn-link btn-danger op-8\">
                          <i class=\"fas fa-ban\"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-md-8\">
                <div class=\"card card-round\">
                  <div class=\"card-header\">
                    <div class=\"card-head-row card-tools-still-right\">
                      <div class=\"card-title\">Transaction History</div>
                      <div class=\"card-tools\">
                        <div class=\"dropdown\">
                          <button
                            class=\"btn btn-icon btn-clean me-0\"
                            type=\"button\"
                            id=\"dropdownMenuButton\"
                            data-bs-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\"
                          >
                            <i class=\"fas fa-ellipsis-h\"></i>
                          </button>
                          <div
                            class=\"dropdown-menu\"
                            aria-labelledby=\"dropdownMenuButton\"
                          >
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                      <!-- Projects table -->
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
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope=\"row\">
                              <button
                                class=\"btn btn-icon btn-round btn-success btn-sm me-2\"
                              >
                                <i class=\"fa fa-check\"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class=\"text-end\">Mar 19, 2020, 2.45pm</td>
                            <td class=\"text-end\">\$250.00</td>
                            <td class=\"text-end\">
                              <span class=\"badge badge-success\">Completed</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
        return "BackOffice/home/home.html.twig";
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
        return array (  524 => 431,  501 => 411,  460 => 373,  394 => 310,  377 => 296,  360 => 282,  343 => 268,  326 => 254,  309 => 240,  170 => 104,  141 => 78,  114 => 54,  89 => 32,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/home/home.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\home\\home.html.twig");
    }
}
