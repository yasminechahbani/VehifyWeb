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

/* BackOffice/base.html.twig */
class __TwigTemplate_e4404d7244633363179dd927960db7fb extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\"
      name=\"viewport\"
    />
    <link
      rel=\"icon\"
      href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kaiadmin/favicon.ico"), "html", null, true);
        yield "\"
      type=\"image/x-icon\"
    />

    <!-- Fonts and icons -->
    <script src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/webfont/webfont.min.js"), "html", null, true);
        yield "\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts.min.css"), "html", null, true);
        yield "\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.min.css"), "html", null, true);
        yield "\" />
     <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/kaiadmin.min.css"), "html", null, true);
        yield "\" />



  </head>
  <body>
    <div class=\"wrapper\">
      <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"index.html\" class=\"logo\">
              <img
                src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
                alt=\"navbar brand\"
                class=\"navbar-brand\"
                height=\"20\"
              />
            </a>
            <div class=\"nav-toggle\">
              <button class=\"btn btn-toggle toggle-sidebar\">
                <i class=\"gg-menu-right\"></i>
              </button>
              <button class=\"btn btn-toggle sidenav-toggler\">
                <i class=\"gg-menu-left\"></i>
              </button>
            </div>
            <button class=\"topbar-toggler more\">
              <i class=\"gg-more-vertical-alt\"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
          <div class=\"sidebar-content\">
            <ul class=\"nav nav-secondary\">
              <li class=\"nav-item\">
                <a

                  href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
                  class=\"collapsed\"
                  aria-expanded=\"false\"
                >
                  <i class=\"fas fa-home\"></i>
                  <p>Dashboard</p>

                </a>

              </li>



              <li class=\"nav-item\">
                <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\">
                  <i class=\"fas fa-desktop\"></i>
                  <p>Liste des Vehicules</p>
                  <span class=\"badge badge-success\"></span>
                </a>
              </li>

          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class=\"main-panel\">
        <div class=\"main-header\">
          <div class=\"main-header-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
              <a href=\"index.html\" class=\"logo\">
                <img
                  src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
                  alt=\"navbar brand\"
                  class=\"navbar-brand\"
                  height=\"20\"
                />
              </a>
              <div class=\"nav-toggle\">
                <button class=\"btn btn-toggle toggle-sidebar\">
                  <i class=\"gg-menu-right\"></i>
                </button>
                <button class=\"btn btn-toggle sidenav-toggler\">
                  <i class=\"gg-menu-left\"></i>
                </button>
              </div>
              <button class=\"topbar-toggler more\">
                <i class=\"gg-more-vertical-alt\"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\"
          >
            <div class=\"container-fluid\">
              <nav
                class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\"
              >
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <button type=\"submit\" class=\"btn btn-search pe-1\">
                      <i class=\"fa fa-search search-icon\"></i>
                    </button>
                  </div>
                  <input
                    type=\"text\"
                    placeholder=\"Search ...\"
                    class=\"form-control\"
                  />
                </div>
              </nav>

              <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
                <li
                  class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\"
                >
                  <a
                    class=\"nav-link dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    role=\"button\"
                    aria-expanded=\"false\"
                    aria-haspopup=\"true\"
                  >
                    <i class=\"fa fa-search\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                    <form class=\"navbar-left navbar-form nav-search\">
                      <div class=\"input-group\">
                        <input
                          type=\"text\"
                          placeholder=\"Search ...\"
                          class=\"form-control\"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"messageDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-envelope\"></i>
                  </a>
                  <ul
                    class=\"dropdown-menu messages-notif-box animated fadeIn\"
                    aria-labelledby=\"messageDropdown\"
                  >
                    <li>
                      <div
                        class=\"dropdown-title d-flex justify-content-between align-items-center\"
                      >
                        Messages
                        <a href=\"#\" class=\"small\">Mark all as read</a>
                      </div>
                    </li>
                    <li>
                      <div class=\"message-notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/jm_denis.jpg"), "html", null, true);
        yield "\"
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jimmy Denis</span>
                              <span class=\"block\"> How are you ? </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chadengle.jpg"), "html", null, true);
        yield "\"
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Chad</span>
                              <span class=\"block\"> Ok, Thanks ! </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mlane.jpg"), "html", null, true);
        yield "\"
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jhon Doe</span>
                              <span class=\"block\">
                                Ready for the meeting today...
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                 src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/talha.jpg"), "html", null, true);
        yield "\"

                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Talha</span>
                              <span class=\"block\"> Hi, Apa Kabar ? </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all messages<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"notifDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-bell\"></i>
                    <span class=\"notification\">4</span>
                  </a>
                  <ul
                    class=\"dropdown-menu notif-box animated fadeIn\"
                    aria-labelledby=\"notifDropdown\"
                  >
                    <li>
                      <div class=\"dropdown-title\">
                        You have 4 new notification
                      </div>
                    </li>
                    <li>
                      <div class=\"notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-icon notif-primary\">
                              <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> New user registered </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-success\">
                              <i class=\"fa fa-comment\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Rahmad commented on Admin
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profile2.jpg"), "html", null, true);
        yield "\"

                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Reza send messages to you
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-danger\">
                              <i class=\"fa fa-heart\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> Farrah liked Admin </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all notifications<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fas fa-layer-group\"></i>
                  </a>
                  <div class=\"dropdown-menu quick-actions animated fadeIn\">
                    <div class=\"quick-actions-header\">
                      <span class=\"title mb-1\">Quick Actions</span>
                      <span class=\"subtitle op-7\">Shortcuts</span>
                    </div>
                    <div class=\"quick-actions-scroll scrollbar-outer\">
                      <div class=\"quick-actions-items\">
                        <div class=\"row m-0\">
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-danger rounded-circle\">
                                <i class=\"far fa-calendar-alt\"></i>
                              </div>
                              <span class=\"text\">Calendar</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-warning rounded-circle\"
                              >
                                <i class=\"fas fa-map\"></i>
                              </div>
                              <span class=\"text\">Maps</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-info rounded-circle\">
                                <i class=\"fas fa-file-excel\"></i>
                              </div>
                              <span class=\"text\">Reports</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-success rounded-circle\"
                              >
                                <i class=\"fas fa-envelope\"></i>
                              </div>
                              <span class=\"text\">Emails</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-primary rounded-circle\"
                              >
                                <i class=\"fas fa-file-invoice-dollar\"></i>
                              </div>
                              <span class=\"text\">Invoice</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-secondary rounded-circle\"
                              >
                                <i class=\"fas fa-credit-card\"></i>
                              </div>
                              <span class=\"text\">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class=\"nav-item topbar-user dropdown hidden-caret\">
                  <a
                    class=\"dropdown-toggle profile-pic\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <div class=\"avatar-sm\">
                      <img

                        src=\"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profile.jpg"), "html", null, true);
        yield "\"
                        alt=\"...\"
                        class=\"avatar-img rounded-circle\"
                      />
                    </div>
                    <span class=\"profile-username\">
                      <span class=\"op-7\">Hi,</span>
                      <span class=\"fw-bold\">Hizrian</span>
                    </span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                    <div class=\"dropdown-user-scroll scrollbar-outer\">
                      <li>
                        <div class=\"user-box\">
                          <div class=\"avatar-lg\">
                            <img

                              src=\"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profile.jpg"), "html", null, true);
        yield "\"
                              alt=\"image profile\"
                              class=\"avatar-img rounded\"
                            />
                          </div>
                          <div class=\"u-text\">
                            <h4>Hizrian</h4>
                            <p class=\"text-muted\">hello@example.com</p>
                            <a
                              href=\"profile.html\"
                              class=\"btn btn-xs btn-secondary btn-sm\"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">My Profile</a>
                        <a class=\"dropdown-item\" href=\"#\">My Balance</a>
                        <a class=\"dropdown-item\" href=\"#\">Inbox</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Account Setting</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

 ";
        // line 497
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 498
        yield "
        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"http://www.themekita.com\">
                    ThemeKita
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Help </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class=\"copyright\">
              2024, made with <i class=\"fa fa-heart heart text-danger\"></i> by
              <a href=\"http://www.themekita.com\">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <div class=\"switcher\">
            <div class=\"switch-block\">
              <h4>Logo Header</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"selected changeLogoHeaderColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Navbar Header</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeTopBarColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Sidebar</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"white\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeSideBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"dark2\"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"custom-toggle\">
          <i class=\"icon-settings\"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src=\"";
        // line 724
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

        <!-- jQuery Scrollbar -->
        <script src=\"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Chart JS -->
        <script src=\"";
        // line 732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>

        <!-- jQuery Sparkline -->
        <script src=\"";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/jquery.sparkline/jquery.sparkline.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Chart Circle -->
        <script src=\"";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/chart-circle/circles.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Datatables -->
        <script src=\"";
        // line 741
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Bootstrap Notify -->
        <script src=\"";
        // line 744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        yield "\"></script>

        <!-- jQuery Vector Maps -->
        <script src=\"";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/jsvectormap/jsvectormap.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/jsvectormap/world.js"), "html", null, true);
        yield "\"></script>

        <!-- Sweet Alert -->
        <script src=\"";
        // line 751
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Kaiadmin JS -->
        <script src=\"";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/kaiadmin.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src=\"";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/setting-demo.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
      \$(\"#lineChart\").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#177dff\",
        fillColor: \"rgba(23, 125, 255, 0.14)\",
      });

      \$(\"#lineChart2\").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#f3545d\",
        fillColor: \"rgba(243, 84, 93, .14)\",
      });

      \$(\"#lineChart3\").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#ffa534\",
        fillColor: \"rgba(255, 165, 52, .14)\",
      });
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 497
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "BackOffice/base.html.twig";
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
        return array (  949 => 497,  904 => 758,  900 => 757,  894 => 754,  888 => 751,  882 => 748,  878 => 747,  872 => 744,  866 => 741,  860 => 738,  854 => 735,  848 => 732,  842 => 729,  836 => 726,  832 => 725,  828 => 724,  600 => 498,  598 => 497,  560 => 462,  540 => 445,  417 => 325,  344 => 255,  325 => 239,  308 => 225,  291 => 211,  189 => 112,  167 => 93,  150 => 79,  121 => 53,  104 => 39,  100 => 38,  96 => 37,  84 => 28,  70 => 17,  62 => 12,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\"
      name=\"viewport\"
    />
    <link
      rel=\"icon\"
      href=\"{{ asset('img/kaiadmin/favicon.ico') }}\"
      type=\"image/x-icon\"
    />

    <!-- Fonts and icons -->
    <script src=\"{{ asset('js/plugin/webfont/webfont.min.js') }}\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"{{ asset('css/fonts.min.css') }}\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.min.css') }}\" />
     <link rel=\"stylesheet\" href=\"{{ asset('css/kaiadmin.min.css') }}\" />



  </head>
  <body>
    <div class=\"wrapper\">
      <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"index.html\" class=\"logo\">
              <img
                src=\"{{ asset('img/kaiadmin/logo_light.svg') }}\"
                alt=\"navbar brand\"
                class=\"navbar-brand\"
                height=\"20\"
              />
            </a>
            <div class=\"nav-toggle\">
              <button class=\"btn btn-toggle toggle-sidebar\">
                <i class=\"gg-menu-right\"></i>
              </button>
              <button class=\"btn btn-toggle sidenav-toggler\">
                <i class=\"gg-menu-left\"></i>
              </button>
            </div>
            <button class=\"topbar-toggler more\">
              <i class=\"gg-more-vertical-alt\"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
          <div class=\"sidebar-content\">
            <ul class=\"nav nav-secondary\">
              <li class=\"nav-item\">
                <a

                  href=\"{{path('app_dashboard')}}\"
                  class=\"collapsed\"
                  aria-expanded=\"false\"
                >
                  <i class=\"fas fa-home\"></i>
                  <p>Dashboard</p>

                </a>

              </li>



              <li class=\"nav-item\">
                <a href=\"{{ path('app_liste') }}\">
                  <i class=\"fas fa-desktop\"></i>
                  <p>Liste des Vehicules</p>
                  <span class=\"badge badge-success\"></span>
                </a>
              </li>

          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class=\"main-panel\">
        <div class=\"main-header\">
          <div class=\"main-header-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
              <a href=\"index.html\" class=\"logo\">
                <img
                  src=\"{{ asset('img/kaiadmin/logo_light.svg') }}\"
                  alt=\"navbar brand\"
                  class=\"navbar-brand\"
                  height=\"20\"
                />
              </a>
              <div class=\"nav-toggle\">
                <button class=\"btn btn-toggle toggle-sidebar\">
                  <i class=\"gg-menu-right\"></i>
                </button>
                <button class=\"btn btn-toggle sidenav-toggler\">
                  <i class=\"gg-menu-left\"></i>
                </button>
              </div>
              <button class=\"topbar-toggler more\">
                <i class=\"gg-more-vertical-alt\"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\"
          >
            <div class=\"container-fluid\">
              <nav
                class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\"
              >
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <button type=\"submit\" class=\"btn btn-search pe-1\">
                      <i class=\"fa fa-search search-icon\"></i>
                    </button>
                  </div>
                  <input
                    type=\"text\"
                    placeholder=\"Search ...\"
                    class=\"form-control\"
                  />
                </div>
              </nav>

              <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
                <li
                  class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\"
                >
                  <a
                    class=\"nav-link dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    role=\"button\"
                    aria-expanded=\"false\"
                    aria-haspopup=\"true\"
                  >
                    <i class=\"fa fa-search\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                    <form class=\"navbar-left navbar-form nav-search\">
                      <div class=\"input-group\">
                        <input
                          type=\"text\"
                          placeholder=\"Search ...\"
                          class=\"form-control\"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"messageDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-envelope\"></i>
                  </a>
                  <ul
                    class=\"dropdown-menu messages-notif-box animated fadeIn\"
                    aria-labelledby=\"messageDropdown\"
                  >
                    <li>
                      <div
                        class=\"dropdown-title d-flex justify-content-between align-items-center\"
                      >
                        Messages
                        <a href=\"#\" class=\"small\">Mark all as read</a>
                      </div>
                    </li>
                    <li>
                      <div class=\"message-notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"{{ asset('img/jm_denis.jpg') }}\"
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jimmy Denis</span>
                              <span class=\"block\"> How are you ? </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"{{ asset('img/chadengle.jpg') }}\"
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Chad</span>
                              <span class=\"block\"> Ok, Thanks ! </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"{{ asset('img/mlane.jpg') }}\"
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jhon Doe</span>
                              <span class=\"block\">
                                Ready for the meeting today...
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                 src=\"{{ asset('img/talha.jpg') }}\"

                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Talha</span>
                              <span class=\"block\"> Hi, Apa Kabar ? </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all messages<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"notifDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-bell\"></i>
                    <span class=\"notification\">4</span>
                  </a>
                  <ul
                    class=\"dropdown-menu notif-box animated fadeIn\"
                    aria-labelledby=\"notifDropdown\"
                  >
                    <li>
                      <div class=\"dropdown-title\">
                        You have 4 new notification
                      </div>
                    </li>
                    <li>
                      <div class=\"notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-icon notif-primary\">
                              <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> New user registered </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-success\">
                              <i class=\"fa fa-comment\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Rahmad commented on Admin
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img

                                src=\"{{ asset('img/profile2.jpg') }}\"

                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Reza send messages to you
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-danger\">
                              <i class=\"fa fa-heart\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> Farrah liked Admin </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all notifications<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fas fa-layer-group\"></i>
                  </a>
                  <div class=\"dropdown-menu quick-actions animated fadeIn\">
                    <div class=\"quick-actions-header\">
                      <span class=\"title mb-1\">Quick Actions</span>
                      <span class=\"subtitle op-7\">Shortcuts</span>
                    </div>
                    <div class=\"quick-actions-scroll scrollbar-outer\">
                      <div class=\"quick-actions-items\">
                        <div class=\"row m-0\">
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-danger rounded-circle\">
                                <i class=\"far fa-calendar-alt\"></i>
                              </div>
                              <span class=\"text\">Calendar</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-warning rounded-circle\"
                              >
                                <i class=\"fas fa-map\"></i>
                              </div>
                              <span class=\"text\">Maps</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-info rounded-circle\">
                                <i class=\"fas fa-file-excel\"></i>
                              </div>
                              <span class=\"text\">Reports</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-success rounded-circle\"
                              >
                                <i class=\"fas fa-envelope\"></i>
                              </div>
                              <span class=\"text\">Emails</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-primary rounded-circle\"
                              >
                                <i class=\"fas fa-file-invoice-dollar\"></i>
                              </div>
                              <span class=\"text\">Invoice</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-secondary rounded-circle\"
                              >
                                <i class=\"fas fa-credit-card\"></i>
                              </div>
                              <span class=\"text\">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class=\"nav-item topbar-user dropdown hidden-caret\">
                  <a
                    class=\"dropdown-toggle profile-pic\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <div class=\"avatar-sm\">
                      <img

                        src=\"{{ asset('img/profile.jpg') }}\"
                        alt=\"...\"
                        class=\"avatar-img rounded-circle\"
                      />
                    </div>
                    <span class=\"profile-username\">
                      <span class=\"op-7\">Hi,</span>
                      <span class=\"fw-bold\">Hizrian</span>
                    </span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                    <div class=\"dropdown-user-scroll scrollbar-outer\">
                      <li>
                        <div class=\"user-box\">
                          <div class=\"avatar-lg\">
                            <img

                              src=\"{{ asset('img/profile.jpg') }}\"
                              alt=\"image profile\"
                              class=\"avatar-img rounded\"
                            />
                          </div>
                          <div class=\"u-text\">
                            <h4>Hizrian</h4>
                            <p class=\"text-muted\">hello@example.com</p>
                            <a
                              href=\"profile.html\"
                              class=\"btn btn-xs btn-secondary btn-sm\"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">My Profile</a>
                        <a class=\"dropdown-item\" href=\"#\">My Balance</a>
                        <a class=\"dropdown-item\" href=\"#\">Inbox</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Account Setting</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

 {% block content %}{% endblock %}

        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"http://www.themekita.com\">
                    ThemeKita
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Help </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class=\"copyright\">
              2024, made with <i class=\"fa fa-heart heart text-danger\"></i> by
              <a href=\"http://www.themekita.com\">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <div class=\"switcher\">
            <div class=\"switch-block\">
              <h4>Logo Header</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"selected changeLogoHeaderColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Navbar Header</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeTopBarColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Sidebar</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"white\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeSideBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"dark2\"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"custom-toggle\">
          <i class=\"icon-settings\"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src=\"{{ asset('js/core/jquery-3.7.1.min.js') }}\"></script>
        <script src=\"{{ asset('js/core/popper.min.js') }}\"></script>
        <script src=\"{{ asset('js/core/bootstrap.min.js') }}\"></script>

        <!-- jQuery Scrollbar -->
        <script src=\"{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}\"></script>

        <!-- Chart JS -->
        <script src=\"{{ asset('js/plugin/chart.js/chart.min.js') }}\"></script>

        <!-- jQuery Sparkline -->
        <script src=\"{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}\"></script>

        <!-- Chart Circle -->
        <script src=\"{{ asset('js/plugin/chart-circle/circles.min.js') }}\"></script>

        <!-- Datatables -->
        <script src=\"{{ asset('js/plugin/datatables/datatables.min.js') }}\"></script>

        <!-- Bootstrap Notify -->
        <script src=\"{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}\"></script>

        <!-- jQuery Vector Maps -->
        <script src=\"{{ asset('js/plugin/jsvectormap/jsvectormap.min.js') }}\"></script>
        <script src=\"{{ asset('js/plugin/jsvectormap/world.js') }}\"></script>

        <!-- Sweet Alert -->
        <script src=\"{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}\"></script>

        <!-- Kaiadmin JS -->
        <script src=\"{{ asset('js/kaiadmin.min.js') }}\"></script>

        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src=\"{{ asset('js/setting-demo.js') }}\"></script>
        <script src=\"{{ asset('js/demo.js') }}\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
      \$(\"#lineChart\").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#177dff\",
        fillColor: \"rgba(23, 125, 255, 0.14)\",
      });

      \$(\"#lineChart2\").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#f3545d\",
        fillColor: \"rgba(243, 84, 93, .14)\",
      });

      \$(\"#lineChart3\").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#ffa534\",
        fillColor: \"rgba(255, 165, 52, .14)\",
      });
    </script>
  </body>
</html>
", "BackOffice/base.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\BackOffice\\base.html.twig");
    }
}
