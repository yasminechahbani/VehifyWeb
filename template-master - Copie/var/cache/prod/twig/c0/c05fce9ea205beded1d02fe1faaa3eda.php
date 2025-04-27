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

/* user/index.html.twig */
class __TwigTemplate_dbb6624da8197731564a8eb245183622 extends Template
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
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "User Management";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                        <div>
                            <h4 class=\"mb-1\">User Management</h4>
                            <p class=\"text-muted small mb-0\">Manage your system users</p>
                        </div>
                        <div class=\"d-flex gap-2\">
                            <button class=\"btn btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#filterModal\">
                                <i class=\"fas fa-sliders-h me-2\"></i>Filters
                            </button>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus-circle me-2\"></i>Add New User
                            </a>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row g-3 mb-4\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text border-0 bg-light\">
                                        <i class=\"fas fa-search text-muted\"></i>
                                    </span>
                                    <input type=\"text\" id=\"userSearch\" class=\"form-control border-0 bg-light\" placeholder=\"Search by name, email, or role...\">
                                </div>
                            </div>
                            <div class=\"col-md-6 text-end\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                        <i class=\"fas fa-download me-2\"></i>Export
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-file-excel me-2\"></i>Excel</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-file-pdf me-2\"></i>PDF</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-file-csv me-2\"></i>CSV</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle border-0\">
                                <thead class=\"bg-light\">
                                    <tr>
                                        <th class=\"rounded-start\">User Details</th>
                                        <th>Contact Info</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th class=\"rounded-end text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class=\"border-0\">
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 62
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"avatar-wrapper me-3 position-relative\">
                                                        ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 66)) {
                // line 67
                yield "                                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 67), "html", null, true);
                yield "\" class=\"rounded-circle shadow-sm\" width=\"50\" height=\"50\">
                                                            <span class=\"position-absolute bottom-0 end-0 transform translate-middle p-1 bg-";
                // line 68
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 68) == "active")) ? ("success") : ("warning"));
                yield " border border-white rounded-circle\"></span>
                                                        ";
            } else {
                // line 70
                yield "                                                            <div class=\"rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                                                <i class=\"fas fa-user text-primary\"></i>
                                                            </div>
                                                        ";
            }
            // line 74
            yield "                                                    </div>
                                                    <div>
                                                        <h6 class=\"mb-0\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 76), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 76), "html", null, true);
            yield "</h6>
                                                        <small class=\"text-muted\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 77), "html", null, true);
            yield "</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"vstack gap-1\">
                                                    <div class=\"text-body\"><i class=\"fas fa-phone text-primary me-2\"></i>";
            // line 83
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 83)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 83), "html", null, true)) : ("N/A"));
            yield "</div>
                                                    <div class=\"text-body\"><i class=\"fas fa-location-dot text-danger me-2\"></i>";
            // line 84
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "localisation", [], "any", false, false, false, 84)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "localisation", [], "any", false, false, false, 84), "html", null, true)) : ("N/A"));
            yield "</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"badge bg-";
            // line 88
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 88) == "active")) ? ("success") : ("warning"));
            yield "-subtle text-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 88) == "active")) ? ("success") : ("warning"));
            yield " rounded-pill px-3\">
                                                    ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 89)), "html", null, true);
            yield "
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"badge bg-";
            // line 93
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 93) == "ADMIN")) ? ("danger") : ("primary"));
            yield "-subtle text-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 93) == "ADMIN")) ? ("danger") : ("primary"));
            yield " rounded-pill px-3\">
                                                    ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 94), "html", null, true);
            yield "
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"btn-group float-end\">
                                                    <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"fas fa-ellipsis-v\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu dropdown-menu-end\">
                                                        <li><a class=\"dropdown-item\" href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a></li>
                                                        <li><a class=\"dropdown-item\" href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit User
                                                        </a></li>
                                                        <li><hr class=\"dropdown-divider\"></li>
                                                        <li>
                                                            <form method=\"post\" action=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_deleteUserByhimSelf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112))), "html", null, true);
            yield "\">
                                                                <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this user?')\">
                                                                    <i class=\"fas fa-trash-alt me-2\"></i>Delete User
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
        // line 122
        if (!$context['_iterated']) {
            // line 123
            yield "                                        <tr>
                                            <td colspan=\"5\" class=\"text-center py-5\">
                                                <div class=\"text-muted\">
                                                    <i class=\"fas fa-users fa-3x mb-3 text-light\"></i>
                                                    <p>No users found in the system</p>
                                                    <a href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-sm btn-primary mt-2\">
                                                        <i class=\"fas fa-plus-circle me-2\"></i>Add First User
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 145
        yield "    <div class=\"modal fade\" id=\"filterModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title\">Filter Users</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Status</label>
                        <div class=\"btn-group w-100\">
                            <input type=\"radio\" class=\"btn-check\" name=\"status\" id=\"all\" checked>
                            <label class=\"btn btn-outline-secondary\" for=\"all\">All</label>
                            <input type=\"radio\" class=\"btn-check\" name=\"status\" id=\"active\">
                            <label class=\"btn btn-outline-secondary\" for=\"active\">Active</label>
                            <input type=\"radio\" class=\"btn-check\" name=\"status\" id=\"inactive\">
                            <label class=\"btn btn-outline-secondary\" for=\"inactive\">Inactive</label>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Role</label>
                        <select class=\"form-select\">
                            <option value=\"\">All Roles</option>
                            <option value=\"admin\">Admin</option>
                            <option value=\"user\">User</option>
                        </select>
                    </div>
                </div>
                <div class=\"modal-footer border-0\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-primary\">Apply Filters</button>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    // line 182
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 183
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced search functionality
            const searchInput = document.getElementById('userSearch');
            const tableRows = document.querySelectorAll('tbody tr');

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                tableRows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });

            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
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
        return "user/index.html.twig";
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
        return array (  334 => 183,  327 => 182,  287 => 145,  276 => 135,  263 => 128,  256 => 123,  254 => 122,  239 => 112,  235 => 111,  227 => 106,  221 => 103,  209 => 94,  203 => 93,  196 => 89,  190 => 88,  183 => 84,  179 => 83,  170 => 77,  164 => 76,  160 => 74,  154 => 70,  149 => 68,  144 => 67,  142 => 66,  136 => 62,  131 => 61,  86 => 19,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\user\\index.html.twig");
    }
}
