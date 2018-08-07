<?php

/* __string_template__3477e2425756b01a2f7539e0a0d46faaa2bafd660251b714a1ea234923d9153e */
class __TwigTemplate_b082251280cda754d710baa09299c61f99e5aa2e1c78e844663a79cb6d69dd23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/ARPA_3/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/ARPA_3/img/app_icon.png\" />

<title>Produits • Arpa3</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '8a32125aa6bf09ec42a94c9c568d8322';
    var token_admin_orders = 'bdc2eb97bc2ab05c9c4abab0c034adcf';
    var token_admin_customers = '91aa2854269d551f2c909f277f759c7c';
    var token_admin_customer_threads = '2c587fcceffdc5ceecdbb518662cf741';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '0601c72333df53c7428ebb25e1e70a19';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/ARPA_3/admin459c3vtwj/index.php/module/catalog/recommended?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/ARPA_3/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/admin459c3vtwj/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/modules/gamification/views/css/advice-1.7.0.1_321.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/modules/gamification/views/css/advice-1.7.0.1_352.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/modules/gamification/views/css/advice-1.7.0.1_541.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ARPA_3/admin459c3vtwj/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ARPA_3\\/admin459c3vtwj\\/\";
var baseDir = \"\\/ARPA_3\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/admin459c3vtwj/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/admin.js?v=1.7.0.1\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/tools.js?v=1.7.0.1\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/admin459c3vtwj/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ARPA_3/admin459c3vtwj/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"321\",\"352\",\"541\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminGamification&token=dcc71a225af85d1d77d220822ab75dbb';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminDashboard&amp;token=6bbde4112e8402745b48a49384ad39e8\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminOrders&amp;token=bdc2eb97bc2ab05c9c4abab0c034adcf\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f35e89d025d2c0f1bb63685db3015a7f\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php/product/new?token=8b3c10c857bfaea2e164fb1ab061d316\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCategories&amp;addcategory&amp;token=8ad0a51a6bb97eabcffd91b32741f451\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"3\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/product/catalog\"
      data-post-link=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminQuickAccesses&token=9c6488e69a8e822c8decb4079e6d6f0d\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Ajouter cette page à l'Accès Rapide
    </a>
    <a class=\"dropdown-item\" href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminQuickAccesses&token=9c6488e69a8e822c8decb4079e6d6f0d\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/ARPA_3/admin459c3vtwj/index.php?controller=AdminSearch&amp;token=e20f923b69d0b7aa2fb6309e093d62ea\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/feki.sadok1109%40gmail.com.jpg\" /><br>
      Sadok Feki
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminEmployees&amp;token=0601c72333df53c7428ebb25e1e70a19&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminLogin&amp;token=a5585c6b60802138777134f0066a8604&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-md-right\"><div class=\"notification-center dropdown\">
  <div class=\"notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCarts&token=693885548c1041f7a0a04ae9d128077a&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Avez-vous consulté votre taux de conversion dernièrement ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inscrit <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/ARPA_3/\" target= \"_blank\">Arpa3</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminDashboard&amp;token=6bbde4112e8402745b48a49384ad39e8\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminOrders&amp;token=bdc2eb97bc2ab05c9c4abab0c034adcf\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Commandes</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminOrders&amp;token=bdc2eb97bc2ab05c9c4abab0c034adcf\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminInvoices&amp;token=9bef2fa592e571026e9e4f80f1b58023\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminSlip&amp;token=ff3db2f4a13dd4a760553d14050bf759\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminDeliverySlip&amp;token=2f427f21d52f1f9f503e61ca47d120fb\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCarts&amp;token=693885548c1041f7a0a04ae9d128077a\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/ARPA_3/admin459c3vtwj/index.php/product/catalog?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalogue</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/ARPA_3/admin459c3vtwj/index.php/product/catalog?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCategories&amp;token=8ad0a51a6bb97eabcffd91b32741f451\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminTracking&amp;token=0e0619e07debe8eaf68296572da954f3\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminAttributesGroups&amp;token=86d39a7d3d91e30218f3e93d2fa03f04\" class=\"link\"> Attributs &amp; Caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminManufacturers&amp;token=b5adfc5e8b26bb7827ab6f01a112e847\" class=\"link\"> Marques &amp; Fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminAttachments&amp;token=0884ff32f1c8e0bc2508b07f5792b793\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCartRules&amp;token=f35e89d025d2c0f1bb63685db3015a7f\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCustomers&amp;token=91aa2854269d551f2c909f277f759c7c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Clients</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCustomers&amp;token=91aa2854269d551f2c909f277f759c7c\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminAddresses&amp;token=96d8638426b06c140a51107eb7b65a21\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCustomerThreads&amp;token=2c587fcceffdc5ceecdbb518662cf741\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Service client</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCustomerThreads&amp;token=2c587fcceffdc5ceecdbb518662cf741\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminOrderMessage&amp;token=377e630a5d5d458a55211cad9a561dd6\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminReturn&amp;token=6e8986f92f83aa770400daf1e396edf0\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminStats&amp;token=0ffe0ec8c72f8a50d97c4a6bfc8e45ce\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Statistiques</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/ARPA_3/admin459c3vtwj/index.php/module/catalog?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/ARPA_3/admin459c3vtwj/index.php/module/catalog?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminAddonsCatalog&amp;token=334ae5945cdc987c5ee6ad857b5559de\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminThemes&amp;token=87bb9dedca0e99d95bc3b1407c81ec7e\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Apparence</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminThemes&amp;token=87bb9dedca0e99d95bc3b1407c81ec7e\" class=\"link\"> Thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminThemesCatalog&amp;token=fa5ffb087c91da096122cc7c53af4ec6\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCmsContent&amp;token=9aaae69c565ebef0570a1c8a77e0306d\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminModulesPositions&amp;token=88978434035936918b094800778cad05\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminImages&amp;token=ff34a233c443784772c9b8fbafc6e517\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminLinkWidget&amp;token=8ebfb4bb3be4a68a51fe928f4b6fc319\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCarriers&amp;token=0d9105b83910b044e1f74dada4bb7f97\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Transport</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCarriers&amp;token=0d9105b83910b044e1f74dada4bb7f97\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminShipping&amp;token=5cd563ea895f9f4c5b236f7d83ed2dda\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPayment&amp;token=2860dc14079e81784305ee166ebec215\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Paiement</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPayment&amp;token=2860dc14079e81784305ee166ebec215\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPaymentPreferences&amp;token=cfa822f4925933a86628d0f74232855d\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminLocalization&amp;token=b85313a720432f87908ba094b98e3a9d\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminLocalization&amp;token=b85313a720432f87908ba094b98e3a9d\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCountries&amp;token=e707811ac53ea7869d19860963f062ce\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminTaxes&amp;token=b8cc6abe09be13fffceb6aaea867ed59\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminTranslations&amp;token=c21aabc67482b5a5263c339b1329768f\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPreferences&amp;token=d915b9c417810531864c968c1ad6ca7c\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Paramètres de la boutique</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPreferences&amp;token=d915b9c417810531864c968c1ad6ca7c\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminOrderPreferences&amp;token=5c31e9678db885d236ae96492689fc3c\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPPreferences&amp;token=2fee81fdf68d4d46105b1d68da82fbe3\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCustomerPreferences&amp;token=d54cba25d4a928b88d556bf47106c2c4\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminContacts&amp;token=ecdceb4bfaf5de0dfec9547b524b07bd\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminMeta&amp;token=a3b4a5fe4d35f277611a4d0cbaa4f596\" class=\"link\"> Trafic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminSearchConf&amp;token=c33bf9330aec0ef0ad4f0fe317fbf5cd\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminGamification&amp;token=dcc71a225af85d1d77d220822ab75dbb\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminInformation&amp;token=9ca0cff71f09c4748ca97a19e18be870\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Paramètres avancés</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminInformation&amp;token=9ca0cff71f09c4748ca97a19e18be870\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminPerformance&amp;token=eb0849a94f8a4653dd118caf1e437459\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminAdminPreferences&amp;token=89bd146722df908506ed227573d4c50b\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminEmails&amp;token=ce8e19ba993f7e865fba540f6a7aca48\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminImport&amp;token=5d73221fc4b24d656e397097741a59ce\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminEmployees&amp;token=0601c72333df53c7428ebb25e1e70a19\" class=\"link\"> Employés
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminRequestSql&amp;token=a4b3e30adef6c6643c74a7966ef9c197\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminLogs&amp;token=80990d6223a923cb48566397bc5a42f7\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminWebservice&amp;token=d64cddc72543b62da51bdf0c22bfea0e\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/ARPA_3/admin459c3vtwj/index.php?controller=AdminCatalog&amp;token=db388e350e5449207b81669db510ad30\">Catalogue</a>
                  </li>
      
              <li>
                      <a href=\"/ARPA_3/admin459c3vtwj/index.php/product/catalog?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU\">Produits</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Produits    </h2>
  

  
    <div class=\"toolbar-icons\">
                                  
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/ARPA_3/admin459c3vtwj/index.php/module/catalog?_token=NeGkkBdyowsGqQWgOEBYXuQTiYft4iN4N8tmlsrLTAU\"          title=\"Modules et services recommandés\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Modules et services recommandés</span>
        </a>
            
                  <a class=\"toolbar-button\" href=\"http://help.prestashop.com/fr/doc/AdminProducts?version=1.7.0.1&amp;country=fr\" title=\"Aide\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=feki.sadok1109%40gmail.com&amp;firstname=Sadok&amp;lastname=Feki&amp;website=http%3A%2F%2Flocalhost%2FARPA_3%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ARPA_3/admin459c3vtwj/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=feki.sadok1109%40gmail.com&amp;firstname=Sadok&amp;lastname=Feki&amp;website=http%3A%2F%2Flocalhost%2FARPA_3%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1048
        $this->displayBlock('content_header', $context, $blocks);
        // line 1049
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1050
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1051
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1052
        echo "
        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 2.830s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=feki.sadok1109%40gmail.com&amp;firstname=Sadok&amp;lastname=Feki&amp;website=http%3A%2F%2Flocalhost%2FARPA_3%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ARPA_3/admin459c3vtwj/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=feki.sadok1109%40gmail.com&amp;firstname=Sadok&amp;lastname=Feki&amp;website=http%3A%2F%2Flocalhost%2FARPA_3%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
  </div>

";
        // line 1200
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1048
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1049
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1050
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1051
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1200
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__3477e2425756b01a2f7539e0a0d46faaa2bafd660251b714a1ea234923d9153e";
    }

    public function getDebugInfo()
    {
        return array (  1279 => 1200,  1274 => 1051,  1269 => 1050,  1264 => 1049,  1259 => 1048,  1250 => 82,  1242 => 1200,  1092 => 1052,  1089 => 1051,  1086 => 1050,  1083 => 1049,  1081 => 1048,  111 => 82,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
