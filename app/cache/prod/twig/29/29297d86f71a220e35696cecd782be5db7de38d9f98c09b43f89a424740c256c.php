<?php

/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 26);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["categories"]) ? $context["categories"] : null), array(0 => $this));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 36
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        // line 37
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"category-tree\">";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</ul>
    </div>";
    }

    // line 46
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        // line 47
        echo "<li>
        ";
        // line 48
        $context["checked"] = ((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute((isset($context["submitted_values"]) ? $context["submitted_values"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 49
        echo "
         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "name", array()), "html", null, true);
        echo "
                 <input
                   type=\"radio\"
                   name=\"form[";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
                   value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
        echo "
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        ";
        // line 61
        if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children", array(), "any", true, true)) {
            // line 62
            echo "            <ul>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                    ";
                $context["child"] = $context["item"];
                // line 65
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</ul>
        ";
        }
        // line 69
        echo "    </li>";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "
  <div class=\"products-catalog\">

    ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
              ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["import_link"]) ? $context["import_link"] : null), "html", null, true);
        echo "\">
              ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
          massediturl=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
          redirecturl=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : null))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : null), "offset" => ((isset($context["offset"]) ? $context["offset"] : null) + (isset($context["limit"]) ? $context["limit"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : null))), "html", null, true);
        echo "\"
        >
          ";
        // line 119
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 131
        echo "
          ";
        // line 133
        echo "          ";
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : null)) {
            // line 134
            echo "            ";
            $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : null), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
            // line 144
            echo "          ";
        }
        // line 145
        echo "
          ";
        // line 146
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : null), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 156
        echo "
          ";
        // line 157
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 157)->display(array_merge($context, array("div_style" => "btn-group dropup", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "tertiary-outline", "menu_icon" => "icon-caret-up", "items" =>         // line 164
(isset($context["buttons_action"]) ? $context["buttons_action"] : null))));
        // line 166
        echo "        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <hr>
            ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["categories"]) ? $context["categories"] : null), 'widget');
        echo "
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : null))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : null), "orderBy" => "name", "sortOrder" => "desc")), "html", null, true);
        echo "\"
        newproducturl=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter((isset($context["filter_category"]) ? $context["filter_category"] : null), "")) : ("")), "html", null, true);
        echo "\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 232
(isset($context["limit"]) ? $context["limit"] : null), "offset" =>         // line 233
(isset($context["offset"]) ? $context["offset"] : null), "orderBy" =>         // line 234
(isset($context["orderBy"]) ? $context["orderBy"] : null), "sortOrder" =>         // line 235
(isset($context["sortOrder"]) ? $context["sortOrder"] : null))), "html", null, true);
        // line 236
        echo "\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    ";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 242
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 242)->display(array_merge($context, array("column" => "id_product")));
        // line 245
        echo "                  </th>
                  <th>
                    ";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th>
                    ";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 251
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 251)->display(array_merge($context, array("column" => "name")));
        // line 254
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 257
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 257)->display(array_merge($context, array("column" => "reference")));
        // line 260
        echo "                  </th>
                  <th>
                    ";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 263
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 263)->display(array_merge($context, array("column" => "name_category")));
        // line 266
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 269
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 269)->display(array_merge($context, array("column" => "price")));
        // line 272
        echo "                  </th>

                  ";
        // line 274
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 275
            echo "                  <th style=\"width: 9%\">
                    ";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                    ";
            // line 277
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 277)->display(array_merge($context, array("column" => "sav_quantity")));
            // line 280
            echo "                  </th>
                  ";
        } else {
            // line 282
            echo "                    <th></th>
                  ";
        }
        // line 284
        echo "
                  <th>
                    ";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 287
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 287)->display(array_merge($context, array("column" => "active")));
        // line 290
        echo "                  </th>
                  ";
        // line 291
        if (((isset($context["has_category_filter"]) ? $context["has_category_filter"] : null) == true)) {
            // line 292
            echo "                    <th>
                      ";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "html", null, true);
            echo "
                      ";
            // line 294
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 294)->display(array_merge($context, array("column" => "position")));
            // line 297
            echo "                    </th>
                  ";
        }
        // line 299
        echo "                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    ";
        // line 303
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 303)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 309
(isset($context["filter_column_id_product"]) ? $context["filter_column_id_product"] : null))));
        // line 311
        echo "                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name\"
                      value=\"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["filter_column_name"]) ? $context["filter_column_name"] : null), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_reference\"
                      value=\"";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["filter_column_reference"]) ? $context["filter_column_reference"] : null), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name_category\"
                      value=\"";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["filter_column_name_category"]) ? $context["filter_column_name_category"] : null), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 341
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 341)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 347
(isset($context["filter_column_price"]) ? $context["filter_column_price"] : null))));
        // line 349
        echo "                  </th>

                  ";
        // line 351
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 352
            echo "                  <th>
                    ";
            // line 353
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 353)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 359
(isset($context["filter_column_sav_quantity"]) ? $context["filter_column_sav_quantity"] : null))));
            // line 361
            echo "                  </th>
                  ";
        } else {
            // line 363
            echo "                    <th></th>
                  ";
        }
        // line 365
        echo "
                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" ";
        // line 369
        if ((array_key_exists("filter_column_active", $context) && ((isset($context["filter_column_active"]) ? $context["filter_column_active"] : null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                      <option value=\"0\" ";
        // line 370
        if ((array_key_exists("filter_column_active", $context) && ((isset($context["filter_column_active"]) ? $context["filter_column_active"] : null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                    </select>
                  </th>
                  ";
        // line 373
        if (((isset($context["has_category_filter"]) ? $context["has_category_filter"] : null) == true)) {
            // line 374
            echo "                    <th>
                      ";
            // line 375
            if ( !(isset($context["activate_drag_and_drop"]) ? $context["activate_drag_and_drop"] : null)) {
                // line 376
                echo "                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                        ";
            } else {
                // line 378
                echo "                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
                    ";
            }
            // line 380
            echo "
                    </th>
                  ";
        }
        // line 383
        echo "                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">search</i>
                      ";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">clear</i>
                      ";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                  </th>
                </tr>
              </thead>
              ";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 407
(isset($context["limit"]) ? $context["limit"] : null), "offset" =>         // line 408
(isset($context["offset"]) ? $context["offset"] : null), "orderBy" =>         // line 409
(isset($context["orderBy"]) ? $context["orderBy"] : null), "sortOrder" =>         // line 410
(isset($context["sortOrder"]) ? $context["sortOrder"] : null), "products" =>         // line 411
(isset($context["products"]) ? $context["products"] : null), "last_sql" =>         // line 412
(isset($context["last_sql"]) ? $context["last_sql"] : null))));
        // line 413
        echo "
            </table>
          </div>
        </div>

        ";
        // line 418
        if (((isset($context["product_count_filtered"]) ? $context["product_count_filtered"] : null) > 20)) {
            // line 419
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 421
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 422
(isset($context["limit"]) ? $context["limit"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null), "total" => (isset($context["product_count_filtered"]) ? $context["product_count_filtered"] : null), "caller_parameters" => (isset($context["pagination_parameters"]) ? $context["pagination_parameters"] : null), "limit_choices" => (isset($context["pagination_limit_choices"]) ? $context["pagination_limit_choices"] : null))));
            // line 423
            echo "
            </div>
          </div>
        ";
        }
        // line 427
        echo "
      </form>

    </div>
  </div>

  ";
        // line 434
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 434, "1466282377")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 453
        echo "

  ";
        // line 456
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 456, "2027784324")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 475
        echo "

  ";
        // line 478
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 478, "276242677")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 497
        echo "

  ";
        // line 500
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 500, "1982816654")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 519
        echo "

  ";
        // line 522
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 522, "1583495920")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 539
        echo "
  ";
        // line 540
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 540, "250297350")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 560
        echo "
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b_1466282377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 434
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 434);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 444
    public function block_content($context, array $blocks = array())
    {
        // line 445
        echo "      <div class=\"modal-body\">
        ";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 448,  808 => 446,  805 => 445,  802 => 444,  785 => 434,  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b_2027784324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 456
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 456);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 466
    public function block_content($context, array $blocks = array())
    {
        // line 467
        echo "      <div class=\"modal-body\">
        ";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 470,  873 => 468,  870 => 467,  867 => 466,  850 => 456,  813 => 448,  808 => 446,  805 => 445,  802 => 444,  785 => 434,  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b_276242677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 478
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 478);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 488
    public function block_content($context, array $blocks = array())
    {
        // line 489
        echo "      <div class=\"modal-body\">
        ";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 492,  938 => 490,  935 => 489,  932 => 488,  915 => 478,  878 => 470,  873 => 468,  870 => 467,  867 => 466,  850 => 456,  813 => 448,  808 => 446,  805 => 445,  802 => 444,  785 => 434,  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b_1982816654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 500
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 500);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 510
    public function block_content($context, array $blocks = array())
    {
        // line 511
        echo "      <div class=\"modal-body\">
        ";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1008 => 514,  1003 => 512,  1000 => 511,  997 => 510,  980 => 500,  943 => 492,  938 => 490,  935 => 489,  932 => 488,  915 => 478,  878 => 470,  873 => 468,  870 => 467,  867 => 466,  850 => 456,  813 => 448,  808 => 446,  805 => 445,  802 => 444,  785 => 434,  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b_1583495920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 522
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 522);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 533
    public function block_content($context, array $blocks = array())
    {
        // line 534
        echo "      <div class=\"modal-body\">
        ";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 535,  1065 => 534,  1062 => 533,  1045 => 522,  1008 => 514,  1003 => 512,  1000 => 511,  997 => 510,  980 => 500,  943 => 492,  938 => 490,  935 => 489,  932 => 488,  915 => 478,  878 => 470,  873 => 468,  870 => 467,  867 => 466,  850 => 456,  813 => 448,  808 => 446,  805 => 445,  802 => 444,  785 => 434,  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_40ec0c345228bd377fedbcb663a011df9437fdb607639003d9a3f0c07e417f1b_250297350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 540
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 540);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 551
    public function block_content($context, array $blocks = array())
    {
        // line 552
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["sql_manager_add_link"]) ? $context["sql_manager_add_link"] : null), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1124 => 552,  1121 => 551,  1104 => 540,  1068 => 535,  1065 => 534,  1062 => 533,  1045 => 522,  1008 => 514,  1003 => 512,  1000 => 511,  997 => 510,  980 => 500,  943 => 492,  938 => 490,  935 => 489,  932 => 488,  915 => 478,  878 => 470,  873 => 468,  870 => 467,  867 => 466,  850 => 456,  813 => 448,  808 => 446,  805 => 445,  802 => 444,  785 => 434,  751 => 560,  749 => 540,  746 => 539,  743 => 522,  739 => 519,  736 => 500,  732 => 497,  729 => 478,  725 => 475,  722 => 456,  718 => 453,  715 => 434,  707 => 427,  701 => 423,  699 => 422,  698 => 421,  694 => 419,  692 => 418,  685 => 413,  683 => 412,  682 => 411,  681 => 410,  680 => 409,  679 => 408,  678 => 407,  677 => 406,  669 => 401,  663 => 398,  653 => 391,  647 => 388,  640 => 383,  635 => 380,  629 => 378,  623 => 376,  621 => 375,  618 => 374,  616 => 373,  608 => 370,  602 => 369,  596 => 365,  592 => 363,  588 => 361,  586 => 359,  585 => 353,  582 => 352,  580 => 351,  576 => 349,  574 => 347,  573 => 341,  566 => 337,  561 => 335,  551 => 328,  546 => 326,  536 => 319,  531 => 317,  523 => 311,  521 => 309,  520 => 303,  514 => 299,  510 => 297,  508 => 294,  504 => 293,  501 => 292,  499 => 291,  496 => 290,  494 => 287,  490 => 286,  486 => 284,  482 => 282,  478 => 280,  476 => 277,  472 => 276,  469 => 275,  467 => 274,  463 => 272,  461 => 269,  457 => 268,  453 => 266,  451 => 263,  447 => 262,  443 => 260,  441 => 257,  437 => 256,  433 => 254,  431 => 251,  427 => 250,  421 => 247,  417 => 245,  415 => 242,  411 => 241,  404 => 236,  402 => 235,  401 => 234,  400 => 233,  399 => 232,  398 => 231,  387 => 223,  380 => 219,  376 => 218,  372 => 217,  360 => 208,  354 => 205,  341 => 195,  328 => 185,  313 => 173,  304 => 166,  302 => 164,  301 => 157,  298 => 156,  296 => 146,  293 => 145,  290 => 144,  287 => 134,  284 => 133,  281 => 131,  279 => 119,  274 => 117,  270 => 116,  266 => 115,  262 => 114,  252 => 107,  234 => 92,  228 => 89,  222 => 86,  218 => 85,  213 => 83,  209 => 82,  200 => 76,  195 => 73,  192 => 72,  188 => 69,  184 => 67,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  131 => 55,  127 => 54,  119 => 51,  115 => 49,  113 => 48,  110 => 47,  107 => 46,  102 => 42,  85 => 40,  68 => 39,  63 => 37,  60 => 36,  54 => 33,  50 => 32,  46 => 31,  42 => 30,  37 => 29,  34 => 28,  30 => 26,  28 => 25,  11 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}
