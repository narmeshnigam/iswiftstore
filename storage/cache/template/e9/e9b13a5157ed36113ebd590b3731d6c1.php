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

/* admin/view/template/localisation/tax_rate_list.twig */
class __TwigTemplate_95d8de3b13d00d7ffeeadad6e7572b85 extends Template
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
        // line 1
        yield "<form id=\"form-tax-rate\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#tax-rate\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "tr.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 8
        yield ($context["sort_rate"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "tr.rate")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_rate"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 9
        yield ($context["sort_type"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "tr.type")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_type"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 10
        yield ($context["sort_geo_zone"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "gz.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_geo_zone"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["tax_rates"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 17
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 19);
                yield "</td>
              <td class=\"text-end\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 20);
                yield "</td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 21);
                yield "</td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "geo_zone", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "edit", [], "any", false, false, false, 23);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tax_rate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        ";
        } else {
            // line 27
            yield "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 28
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 31
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 35
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 36
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/localisation/tax_rate_list.twig";
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
        return array (  170 => 36,  166 => 35,  160 => 31,  154 => 28,  151 => 27,  148 => 26,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  114 => 17,  109 => 16,  107 => 15,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-tax-rate\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#tax-rate\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'tr.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_rate }}\"{% if sort == 'tr.rate' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_rate }}</a></th>
          <th><a href=\"{{ sort_type }}\"{% if sort == 'tr.type' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_type }}</a></th>
          <th><a href=\"{{ sort_geo_zone }}\"{% if sort == 'gz.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_geo_zone }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if tax_rates %}
          {% for tax_rate in tax_rates %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ tax_rate.tax_rate_id }}\" class=\"form-check-input\"/></td>
              <td>{{ tax_rate.name }}</td>
              <td class=\"text-end\">{{ tax_rate.rate }}</td>
              <td>{{ tax_rate.type }}</td>
              <td>{{ tax_rate.geo_zone }}</td>
              <td class=\"text-end\"><a href=\"{{ tax_rate.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/localisation/tax_rate_list.twig", "/home/u348991914/domains/store.iswift.in/public_html/admin/view/template/localisation/tax_rate_list.twig");
    }
}
