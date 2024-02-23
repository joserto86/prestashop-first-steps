<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig */
class __TwigTemplate_853d71e9052a3a3e6668de161ceccffb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"tab-content p-lg-0 bg-transparent px-0\" id=\"profileTabContents\">
  ";
        // line 27
        $context["employeeProfileTabPermissions"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "profilePermissionsForTabs", [], "any", false, false, false, 27)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["employeeProfileId"] ?? null)] ?? null) : null);
        // line 28
        echo "
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "profiles", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 30
            echo "    ";
            $context["profileTabPermissions"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "profilePermissionsForTabs", [], "any", false, false, false, 30)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 30)] ?? null) : null);
            // line 31
            echo "    <div class=\"tab-pane fade js-permissions-content";
            if ((twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 31) == ($context["employeeProfileId"] ?? null))) {
                echo " active show";
            }
            echo "\"
      id=\"profileTabContent_";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
      data-profile-id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
      data-profile-permissions=\"";
            // line 34
            echo twig_escape_filter($this->env, json_encode(($context["profileTabPermissions"] ?? null)), "html", null, true);
            echo "\"
      data-modules-permissions=\"";
            // line 35
            echo twig_escape_filter($this->env, json_encode((($__internal_compile_2 = ($context["profilePermissionsForModules"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 35)] ?? null) : null)), "html", null, true);
            echo "\"
      data-employee-permissions=\"";
            // line 36
            echo twig_escape_filter($this->env, json_encode((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "profilePermissionsForTabs", [], "any", false, false, false, 36)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["employeeProfileId"] ?? null)] ?? null) : null)), "html", null, true);
            echo "\"
      data-employee-modules-permissions=\"";
            // line 37
            echo twig_escape_filter($this->env, json_encode((($__internal_compile_4 = ($context["profilePermissionsForModules"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["employeeProfileId"] ?? null)] ?? null) : null)), "html", null, true);
            echo "\"
      role=\"tabpanel\"
      aria-labelledby=\"profileListItem_";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\"
    >
      <div class=\"row\">
        ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["profile"], "is_administrator", [], "any", false, false, false, 42)) {
                // line 43
                echo "          <div class=\"col\">
            <div class=\"card\">
              <div class=\"card-body\">
                ";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Administrator permissions cannot be modified.", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            } else {
                // line 51
                echo "          ";
                // line 52
                $context["profileTypes"] = ["view" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 54
($context["configurablePermissions"] ?? null), "isBulkViewConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 54)], "method", false, false, false, 54), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions")], "add" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 58
($context["configurablePermissions"] ?? null), "isBulkAddConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 58)], "method", false, false, false, 58), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions")], "edit" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 62
($context["configurablePermissions"] ?? null), "isBulkEditConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 62)], "method", false, false, false, 62), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions")], "delete" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 66
($context["configurablePermissions"] ?? null), "isBulkDeleteConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 66)], "method", false, false, false, 66), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions")], "all" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 70
($context["configurablePermissions"] ?? null), "isBulkAllConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 70)], "method", false, false, false, 70), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All", [], "Admin.Actions")]];
                // line 75
                echo "          <div class=\"col-xl-6\">
            <div
              id=\"profile-content-";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\"
              data-update-url=\"";
                // line 78
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissions_update_tab_permissions");
                echo "\"
              data-can-edit=\"";
                // line 79
                echo ((twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "hasEmployeeEditPermission", [], "any", false, false, false, 79)) ? ("true") : ("false"));
                echo "\"
              data-types=\"";
                // line 80
                echo twig_escape_filter($this->env, json_encode(($context["profileTypes"] ?? null)), "html", null, true);
                echo "\"
              data-permissions=\"";
                // line 81
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "tabs", [], "any", false, false, false, 81)), "html", null, true);
                echo "\"
              data-title=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Advparameters.Feature"));
                echo "\"
              data-empty=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No menu", [], "Admin.Advparameters.Feature"));
                echo "\"
            >
            </div>
          </div>

          ";
                // line 89
                $context["moduleTypes"] = ["view" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 91
($context["configurablePermissions"] ?? null), "isBulkViewConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 91)], "method", false, false, false, 91), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions")], "configure" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 95
($context["configurablePermissions"] ?? null), "isBulkAddConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 95)], "method", false, false, false, 95), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions")], "uninstall" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 99
($context["configurablePermissions"] ?? null), "isBulkEditConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 99)], "method", false, false, false, 99), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall", [], "Admin.Actions")]];
                // line 104
                echo "          <div class=\"col-xl-6\">
            <div
              id=\"module-content-";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "\"
              data-update-url=\"";
                // line 107
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissions_update_module_permissions");
                echo "\"
              data-can-edit=\"";
                // line 108
                echo ((twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "hasEmployeeEditPermission", [], "any", false, false, false, 108)) ? ("true") : ("false"));
                echo "\"
              data-types=\"";
                // line 109
                echo twig_escape_filter($this->env, json_encode(($context["moduleTypes"] ?? null)), "html", null, true);
                echo "\"
              data-permissions=\"";
                // line 110
                echo twig_escape_filter($this->env, json_encode((($__internal_compile_5 = ($context["profilePermissionsForModules"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 110)] ?? null) : null)), "html", null, true);
                echo "\"
              data-title=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"));
                echo "\"
              data-empty=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No module", [], "Admin.Advparameters.Feature"));
                echo "\"
            >
            </div>
          </div>
        ";
            }
            // line 117
            echo "      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</div>

";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "  <script>
    var permissionsMessages = {
      success: \"";
        // line 125
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update successful", [], "Admin.Notifications.Success"), "js"), "html", null, true);
        echo "\",
      error: \"";
        // line 126
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "js"), "html", null, true);
        echo "\",
    };
  </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 126,  216 => 125,  212 => 123,  205 => 122,  201 => 120,  193 => 117,  185 => 112,  181 => 111,  177 => 110,  173 => 109,  169 => 108,  165 => 107,  161 => 106,  157 => 104,  155 => 99,  154 => 95,  153 => 91,  152 => 89,  144 => 83,  140 => 82,  136 => 81,  132 => 80,  128 => 79,  124 => 78,  120 => 77,  116 => 75,  114 => 70,  113 => 66,  112 => 62,  111 => 58,  110 => 54,  109 => 52,  107 => 51,  99 => 46,  94 => 43,  92 => 42,  86 => 39,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  65 => 33,  61 => 32,  54 => 31,  51 => 30,  47 => 29,  44 => 28,  42 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig");
    }
}
