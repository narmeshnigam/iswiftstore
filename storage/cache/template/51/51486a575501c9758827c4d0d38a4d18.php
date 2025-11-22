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

/* admin/view/template/localisation/tax_class_form.twig */
class __TwigTemplate_a60beb38f2263db9c1a54a29fefef63a extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-tax-class\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-tax-class\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        yield ($context["text_tax_class"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-title\" class=\"col-sm-2 col-form-label\">";
        // line 24
        yield ($context["entry_title"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 26
        yield ($context["title"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_title"] ?? null);
        yield "\" id=\"input-title\" class=\"form-control\"/>
                <div id=\"error-title\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-description\" class=\"col-sm-2 col-form-label\">";
        // line 31
        yield ($context["entry_description"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"description\" value=\"";
        // line 33
        yield ($context["description"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-description\" class=\"form-control\"/>
                <div id=\"error-description\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 39
        yield ($context["text_tax_rate"] ?? null);
        yield "</legend>
            <table id=\"tax-rule\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th>";
        // line 43
        yield ($context["entry_rate"] ?? null);
        yield "</th>
                  <th>";
        // line 44
        yield ($context["entry_based"] ?? null);
        yield "</th>
                  <th>";
        // line 45
        yield ($context["entry_priority"] ?? null);
        yield "</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 50
        $context["tax_rule_row"] = 0;
        // line 51
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_rules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rule"]) {
            // line 52
            yield "                  <tr id=\"tax-rule-row-";
            yield ($context["tax_rule_row"] ?? null);
            yield "\">
                    <td><select name=\"tax_rule[";
            // line 53
            yield ($context["tax_rule_row"] ?? null);
            yield "][tax_rate_id]\" class=\"form-select\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 55
                yield "                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 55);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 55) == CoreExtension::getAttribute($this->env, $this->source, $context["tax_rule"], "tax_rate_id", [], "any", false, false, false, 55))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 55);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tax_rate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                      </select></td>
                    <td><select name=\"tax_rule[";
            // line 58
            yield ($context["tax_rule_row"] ?? null);
            yield "][based]\" class=\"form-select\">
                        ";
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 59) == "shipping")) {
                // line 60
                yield "                          <option value=\"shipping\" selected>";
                yield ($context["text_shipping"] ?? null);
                yield "</option>
                        ";
            } else {
                // line 62
                yield "                          <option value=\"shipping\">";
                yield ($context["text_shipping"] ?? null);
                yield "</option>
                        ";
            }
            // line 64
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 64) == "payment")) {
                // line 65
                yield "                          <option value=\"payment\" selected>";
                yield ($context["text_payment"] ?? null);
                yield "</option>
                        ";
            } else {
                // line 67
                yield "                          <option value=\"payment\">";
                yield ($context["text_payment"] ?? null);
                yield "</option>
                        ";
            }
            // line 69
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 69) == "store")) {
                // line 70
                yield "                          <option value=\"store\" selected>";
                yield ($context["text_store"] ?? null);
                yield "</option>
                        ";
            } else {
                // line 72
                yield "                          <option value=\"store\">";
                yield ($context["text_store"] ?? null);
                yield "</option>
                        ";
            }
            // line 74
            yield "                      </select></td>
                    <td><input type=\"text\" name=\"tax_rule[";
            // line 75
            yield ($context["tax_rule_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rule"], "priority", [], "any", false, false, false, 75);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#tax-rule-row-";
            // line 76
            yield ($context["tax_rule_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 78
            $context["tax_rule_row"] = (($context["tax_rule_row"] ?? null) + 1);
            // line 79
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tax_rule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-tax-rule\" data-bs-toggle=\"tooltip\" title=\"";
        // line 84
        yield ($context["button_rule_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"tax_class_id\" value=\"";
        // line 89
        yield ($context["tax_class_id"] ?? null);
        yield "\" id=\"input-tax-class-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var tax_rule_row = ";
        // line 96
        yield ($context["tax_rule_row"] ?? null);
        yield ";

\$('#button-tax-rule').on('click', function() {
    html = '<tr id=\"tax-rule-row-' + tax_rule_row + '\">';
    html += '  <td><select name=\"tax_rule[' + tax_rule_row + '][tax_rate_id]\" class=\"form-select\">';
  ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_rates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
            // line 102
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 102);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 102), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tax_rate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "    html += '  </select></td>';
    html += '  <td><select name=\"tax_rule[' + tax_rule_row + '][based]\" class=\"form-select\">';
    html += '    <option value=\"shipping\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_shipping"] ?? null), "js");
        yield "</option>';
    html += '    <option value=\"payment\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_payment"] ?? null), "js");
        yield "</option>';
    html += '    <option value=\"store\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_store"] ?? null), "js");
        yield "</option>';
    html += '  </select></td>';
    html += '  <td><input type=\"text\" name=\"tax_rule[' + tax_rule_row + '][priority]\" value=\"\" placeholder=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#tax-rule-row-' + tax_rule_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#tax-rule tbody').append(html);

    tax_rule_row++;
});
//--></script>
";
        // line 119
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/localisation/tax_class_form.twig";
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
        return array (  350 => 119,  339 => 111,  335 => 110,  330 => 108,  326 => 107,  322 => 106,  318 => 104,  307 => 102,  303 => 101,  295 => 96,  285 => 89,  277 => 84,  271 => 80,  265 => 79,  263 => 78,  256 => 76,  248 => 75,  245 => 74,  239 => 72,  233 => 70,  230 => 69,  224 => 67,  218 => 65,  215 => 64,  209 => 62,  203 => 60,  201 => 59,  197 => 58,  194 => 57,  179 => 55,  175 => 54,  171 => 53,  166 => 52,  161 => 51,  159 => 50,  151 => 45,  147 => 44,  143 => 43,  136 => 39,  125 => 33,  120 => 31,  110 => 26,  105 => 24,  100 => 22,  95 => 20,  90 => 18,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-tax-class\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-tax-class\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>{{ text_tax_class }}</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-title\" class=\"col-sm-2 col-form-label\">{{ entry_title }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"title\" value=\"{{ title }}\" placeholder=\"{{ entry_title }}\" id=\"input-title\" class=\"form-control\"/>
                <div id=\"error-title\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-description\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"description\" value=\"{{ description }}\" placeholder=\"{{ entry_description }}\" id=\"input-description\" class=\"form-control\"/>
                <div id=\"error-description\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>{{ text_tax_rate }}</legend>
            <table id=\"tax-rule\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th>{{ entry_rate }}</th>
                  <th>{{ entry_based }}</th>
                  <th>{{ entry_priority }}</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {% set tax_rule_row = 0 %}
                {% for tax_rule in tax_rules %}
                  <tr id=\"tax-rule-row-{{ tax_rule_row }}\">
                    <td><select name=\"tax_rule[{{ tax_rule_row }}][tax_rate_id]\" class=\"form-select\">
                        {% for tax_rate in tax_rates %}
                          <option value=\"{{ tax_rate.tax_rate_id }}\"{% if tax_rate.tax_rate_id == tax_rule.tax_rate_id %} selected{% endif %}>{{ tax_rate.name }}</option>
                        {% endfor %}
                      </select></td>
                    <td><select name=\"tax_rule[{{ tax_rule_row }}][based]\" class=\"form-select\">
                        {% if tax_rule.based == 'shipping' %}
                          <option value=\"shipping\" selected>{{ text_shipping }}</option>
                        {% else %}
                          <option value=\"shipping\">{{ text_shipping }}</option>
                        {% endif %}
                        {% if tax_rule.based == 'payment' %}
                          <option value=\"payment\" selected>{{ text_payment }}</option>
                        {% else %}
                          <option value=\"payment\">{{ text_payment }}</option>
                        {% endif %}
                        {% if tax_rule.based == 'store' %}
                          <option value=\"store\" selected>{{ text_store }}</option>
                        {% else %}
                          <option value=\"store\">{{ text_store }}</option>
                        {% endif %}
                      </select></td>
                    <td><input type=\"text\" name=\"tax_rule[{{ tax_rule_row }}][priority]\" value=\"{{ tax_rule.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#tax-rule-row-{{ tax_rule_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set tax_rule_row = tax_rule_row + 1 %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-tax-rule\" data-bs-toggle=\"tooltip\" title=\"{{ button_rule_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"tax_class_id\" value=\"{{ tax_class_id }}\" id=\"input-tax-class-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var tax_rule_row = {{ tax_rule_row }};

\$('#button-tax-rule').on('click', function() {
    html = '<tr id=\"tax-rule-row-' + tax_rule_row + '\">';
    html += '  <td><select name=\"tax_rule[' + tax_rule_row + '][tax_rate_id]\" class=\"form-select\">';
  {% for tax_rate in tax_rates %}
    html += '    <option value=\"{{ tax_rate.tax_rate_id }}\">{{ tax_rate.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><select name=\"tax_rule[' + tax_rule_row + '][based]\" class=\"form-select\">';
    html += '    <option value=\"shipping\">{{ text_shipping|escape('js') }}</option>';
    html += '    <option value=\"payment\">{{ text_payment|escape('js') }}</option>';
    html += '    <option value=\"store\">{{ text_store|escape('js') }}</option>';
    html += '  </select></td>';
    html += '  <td><input type=\"text\" name=\"tax_rule[' + tax_rule_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#tax-rule-row-' + tax_rule_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#tax-rule tbody').append(html);

    tax_rule_row++;
});
//--></script>
{{ footer }}", "admin/view/template/localisation/tax_class_form.twig", "/home/u348991914/domains/store.iswift.in/public_html/admin/view/template/localisation/tax_class_form.twig");
    }
}
