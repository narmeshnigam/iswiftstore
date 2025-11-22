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

/* extension/opencart/admin/view/template/module/featured.twig */
class __TwigTemplate_0ce774aad7be9cb6386f2298ce56ea57 extends Template
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
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
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
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
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
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 31
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"featured-product\" class=\"table m-0\">
                  <tbody>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            yield "                      <tr id=\"featured-product-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
            yield "\">
                        <td>";
            // line 38
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
            yield "<input type=\"hidden\" name=\"product[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            yield "\"/></td>
                        <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                  </tbody>
                </table>
              </div>
              <div class=\"form-text text-muted\">";
        // line 45
        yield ($context["help_product"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-axis\" class=\"col-sm-2 col-form-label\">";
        // line 49
        yield ($context["entry_axis"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"axis\" id=\"input-axis\" class=\"form-select\">
                <option value=\"horizontal\"";
        // line 52
        if ((($context["axis"] ?? null) == "horizontal")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_horizontal"] ?? null);
        yield "</option>
                <option value=\"vertical\"";
        // line 53
        if ((($context["axis"] ?? null) == "vertical")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_vertical"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">";
        // line 58
        yield ($context["entry_width"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 60
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_height"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 67
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 72
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 76
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 80
        yield ($context["module_id"] ?? null);
        yield "\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    source: function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 90
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    select: function(item) {
        \$('#input-product').val('');

        \$('#featured-product-' + item['value']).remove();

        html  = '<tr id=\"featured-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>';
        html += '</tr>';

        \$('#featured-product tbody').append(html);
    }
});

\$('#featured-product').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});
//--></script>
";
        // line 120
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
        return "extension/opencart/admin/view/template/module/featured.twig";
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
        return array (  277 => 120,  244 => 90,  231 => 80,  222 => 76,  215 => 72,  205 => 67,  200 => 65,  190 => 60,  185 => 58,  173 => 53,  165 => 52,  159 => 49,  152 => 45,  147 => 42,  135 => 38,  130 => 37,  126 => 36,  118 => 31,  113 => 29,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_product }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"featured-product\" class=\"table m-0\">
                  <tbody>
                    {% for product in products %}
                      <tr id=\"featured-product-{{ product.product_id }}\">
                        <td>{{ product.name }}<input type=\"hidden\" name=\"product[]\" value=\"{{ product.product_id }}\"/></td>
                        <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
              <div class=\"form-text text-muted\">{{ help_product }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-axis\" class=\"col-sm-2 col-form-label\">{{ entry_axis }}</label>
            <div class=\"col-sm-10\">
              <select name=\"axis\" id=\"input-axis\" class=\"form-select\">
                <option value=\"horizontal\"{% if axis == 'horizontal' %} selected{% endif %}>{{ text_horizontal }}</option>
                <option value=\"vertical\"{% if axis == 'vertical' %} selected{% endif %}>{{ text_vertical }}</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">{{ entry_width }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">{{ entry_height }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"{{ module_id }}\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    source: function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    select: function(item) {
        \$('#input-product').val('');

        \$('#featured-product-' + item['value']).remove();

        html  = '<tr id=\"featured-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>';
        html += '</tr>';

        \$('#featured-product tbody').append(html);
    }
});

\$('#featured-product').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});
//--></script>
{{ footer }}
", "extension/opencart/admin/view/template/module/featured.twig", "/home/u348991914/domains/store.iswift.in/public_html/extension/opencart/admin/view/template/module/featured.twig");
    }
}
