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

/* admin/view/template/localisation/tax_rate_form.twig */
class __TwigTemplate_986638671d0f7957231e8d54b737b3d8 extends Template
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
        <button type=\"submit\" form=\"form-tax-rate\" formaction=\"";
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
        <form id=\"form-tax-rate\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-rate\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_rate"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"rate\" value=\"";
        // line 31
        yield ($context["rate"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_rate"] ?? null);
        yield "\" id=\"input-rate\" class=\"form-control\"/>
              <div id=\"error-rate\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_type"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" id=\"input-type\" class=\"form-select\">
                ";
        // line 39
        if ((($context["type"] ?? null) == "P")) {
            // line 40
            yield "                  <option value=\"P\" selected>";
            yield ($context["text_percent"] ?? null);
            yield "</option>
                ";
        } else {
            // line 42
            yield "                  <option value=\"P\">";
            yield ($context["text_percent"] ?? null);
            yield "</option>
                ";
        }
        // line 44
        yield "                ";
        if ((($context["type"] ?? null) == "F")) {
            // line 45
            yield "                  <option value=\"F\" selected>";
            yield ($context["text_amount"] ?? null);
            yield "</option>
                ";
        } else {
            // line 47
            yield "                  <option value=\"F\">";
            yield ($context["text_amount"] ?? null);
            yield "</option>
                ";
        }
        // line 49
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 53
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 57
            yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"tax_rate_customer_group[]\" value=\"";
            // line 58
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 58);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 58);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 58), ($context["tax_rate_customer_group"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 58);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 58);
            yield "</label>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_geo_zone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 69
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 69);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 69) == ($context["geo_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 69);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['geo_zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "              </select>
            </div>
          </div>
          <input type=\"hidden\" name=\"tax_rate_id\" value=\"";
        // line 74
        yield ($context["tax_rate_id"] ?? null);
        yield "\" id=\"input-tax-rate-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 80
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/localisation/tax_rate_form.twig";
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
        return array (  248 => 80,  239 => 74,  234 => 71,  219 => 69,  215 => 68,  209 => 65,  203 => 61,  184 => 58,  181 => 57,  177 => 56,  171 => 53,  165 => 49,  159 => 47,  153 => 45,  150 => 44,  144 => 42,  138 => 40,  136 => 39,  130 => 36,  120 => 31,  115 => 29,  105 => 24,  100 => 22,  95 => 20,  90 => 18,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-tax-rate\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-tax-rate\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-rate\" class=\"col-sm-2 col-form-label\">{{ entry_rate }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"rate\" value=\"{{ rate }}\" placeholder=\"{{ entry_rate }}\" id=\"input-rate\" class=\"form-control\"/>
              <div id=\"error-rate\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-type\" class=\"col-sm-2 col-form-label\">{{ entry_type }}</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" id=\"input-type\" class=\"form-select\">
                {% if type == 'P' %}
                  <option value=\"P\" selected>{{ text_percent }}</option>
                {% else %}
                  <option value=\"P\">{{ text_percent }}</option>
                {% endif %}
                {% if type == 'F' %}
                  <option value=\"F\" selected>{{ text_amount }}</option>
                {% else %}
                  <option value=\"F\">{{ text_amount }}</option>
                {% endif %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
            <div class=\"col-sm-10\">
              <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                {% for customer_group in customer_groups %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"tax_rate_customer_group[]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in tax_rate_customer_group %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                  </div>
                {% endfor %}
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">{{ entry_geo_zone }}</label>
            <div class=\"col-sm-10\">
              <select name=\"geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                {% for geo_zone in geo_zones %}
                  <option value=\"{{ geo_zone.geo_zone_id }}\"{% if geo_zone.geo_zone_id == geo_zone_id %} selected{% endif %}>{{ geo_zone.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <input type=\"hidden\" name=\"tax_rate_id\" value=\"{{ tax_rate_id }}\" id=\"input-tax-rate-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "admin/view/template/localisation/tax_rate_form.twig", "/home/u348991914/domains/store.iswift.in/public_html/admin/view/template/localisation/tax_rate_form.twig");
    }
}
