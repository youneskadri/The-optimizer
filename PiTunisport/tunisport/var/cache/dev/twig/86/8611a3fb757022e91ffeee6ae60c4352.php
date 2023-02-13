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

/* back.html.twig */
class __TwigTemplate_91d1451f95013abc1962b923327aa792 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styleSheet' => [$this, 'block_styleSheet'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  ";
        // line 13
        $this->displayBlock('styleSheet', $context, $blocks);
        // line 33
        echo "  

 
</head>

<body>

  <!-- ======= Header ======= -->
  ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 270
        echo "  
";
        // line 271
        $this->displayBlock('sidebar', $context, $blocks);
        // line 456
        echo "  

";
        // line 458
        $this->displayBlock('main', $context, $blocks);
        // line 1107
        $this->displayBlock('footer', $context, $blocks);
        // line 1121
        echo "  


  
 ";
        // line 1125
        $this->displayBlock('javascript', $context, $blocks);
        // line 1140
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_styleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styleSheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styleSheet"));

        // line 14
        echo "  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
 <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

      <!-- Template Main CSS File -->
      <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tunisport.png"), "html", null, true);
        echo "\" alt=\"\">
        <span class=\"d-none d-lg-block\">TUNISPORT</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-exclamation-circle text-warning\"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-x-circle text-danger\"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-check-circle text-success\"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-info-circle text-primary\"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 271
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 272
        echo "  <!-- ======= Sidebar ======= -->

<aside id=\"sidebar\" class=\"sidebar\" >

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"index.html\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-person-square\"></i><span>User</span><i class=\"#\"></i>
        </a>
        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          
        </ul>
          
        
      </li><!-- End Components Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-map\"></i><span>Hebergement & transport</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Hebergement</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Transport</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Blog</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Blog</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Blog commentaire</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#Match-nav\" data-bs-toggle=\"collapse\" href=\"#\">
         <i class=\"bi bi-circle\"></i><span>Match</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"Match-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Reservation</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Match</span>
            </a>
          </li>
            <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Billet</span>
            </a>
          </li>
 
        </ul>
        
      </li>
            <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-chat-dots\"></i><span>Reclamation</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Category</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Reponse</span>
            </a>
          </li>
            <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Reclamation</span>
            </a>
          </li>
 
        </ul>
        
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-gem\"></i><span>Evenement</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"icons-bootstrap.html\">
              <i class=\"bi bi-circle\"></i><span>Type</span>
            </a>
          </li>
          <li>
            <a href=\"icons-remix.html\">
              <i class=\"bi bi-circle\"></i><span>Evenement</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Icons Nav -->

      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
          <i class=\"bi bi-question-circle\"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
          <i class=\"bi bi-envelope\"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
          <i class=\"bi bi-card-list\"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-dash-circle\"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
          <i class=\"bi bi-file-earmark\"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 458
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 459
        echo "  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-8\">
          <div class=\"row\">

            <!-- Sales Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-cart\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>145</h6>
                      <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card revenue-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-currency-dollar\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>\$3,264</h6>
                      <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class=\"col-xxl-4 col-xl-12\">

              <div class=\"card info-card customers-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-people\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>1244</h6>
                      <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class=\"col-12\">
              <div class=\"card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id=\"reportsChart\"></div>

                  <script>
                    document.addEventListener(\"DOMContentLoaded\", () => {
                      new ApexCharts(document.querySelector(\"#reportsChart\"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: \"gradient\",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Customer</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                        <td>\$64</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                        <td>\$47</td>
                        <td><span class=\"badge bg-warning\">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                        <td>\$147</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                        <td>\$67</td>
                        <td><span class=\"badge bg-danger\">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                        <td>\$165</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Sold</th>
                        <th scope=\"col\">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                        <td>\$64</td>
                        <td class=\"fw-bold\">124</td>
                        <td>\$5,828</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                        <td>\$46</td>
                        <td class=\"fw-bold\">98</td>
                        <td>\$4,508</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                        <td>\$59</td>
                        <td class=\"fw-bold\">74</td>
                        <td>\$4,366</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                        <td>\$32</td>
                        <td class=\"fw-bold\">63</td>
                        <td>\$2,016</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                        <td>\$79</td>
                        <td class=\"fw-bold\">41</td>
                        <td>\$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class=\"col-lg-4\">

          <!-- Recent Activity -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

              <div class=\"activity\">

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class=\"activity-content\">
                    Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class=\"activity-content\">
                    Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class=\"activity-content\">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class=\"activity-content\">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

              <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

              <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

              <div class=\"news\">
                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-1.jpg\" alt=\"\">
                  <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-2.jpg\" alt=\"\">
                  <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-3.jpg\" alt=\"\">
                  <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-4.jpg\" alt=\"\">
                  <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-5.jpg\" alt=\"\">
                  <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1107
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1108
        echo "<!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>TUNISPORT</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      
      Designed by <a href=\"https://bootstrapmade.com/\">OPTIMIZERS</a>
    </div>
  </footer><!-- End Footer -->
    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1125
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 1126
        echo " <!-- Vendor JS Files -->
  <script src=\"";
        // line 1127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 1137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1371 => 1137,  1365 => 1134,  1361 => 1133,  1357 => 1132,  1353 => 1131,  1349 => 1130,  1345 => 1129,  1341 => 1128,  1337 => 1127,  1334 => 1126,  1324 => 1125,  1302 => 1108,  1292 => 1107,  635 => 459,  625 => 458,  432 => 272,  422 => 271,  188 => 46,  182 => 42,  172 => 41,  160 => 31,  154 => 28,  150 => 27,  146 => 26,  142 => 25,  138 => 24,  134 => 23,  130 => 22,  120 => 14,  110 => 13,  98 => 1140,  96 => 1125,  90 => 1121,  88 => 1107,  86 => 458,  82 => 456,  80 => 271,  77 => 270,  75 => 41,  65 => 33,  63 => 13,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  {% block styleSheet %}
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
 <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\" />

      <!-- Template Main CSS File -->
      <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\" />
  {% endblock %}
  

 
</head>

<body>

  <!-- ======= Header ======= -->
  {% block header %}
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"{{asset('assets/img/tunisport.png')}}\" alt=\"\">
        <span class=\"d-none d-lg-block\">TUNISPORT</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-exclamation-circle text-warning\"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-x-circle text-danger\"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-check-circle text-success\"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-info-circle text-primary\"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  {% endblock %}
  
{% block sidebar %}
  <!-- ======= Sidebar ======= -->

<aside id=\"sidebar\" class=\"sidebar\" >

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"index.html\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-person-square\"></i><span>User</span><i class=\"#\"></i>
        </a>
        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          
        </ul>
          
        
      </li><!-- End Components Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-map\"></i><span>Hebergement & transport</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Hebergement</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Transport</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Blog</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Blog</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Blog commentaire</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#Match-nav\" data-bs-toggle=\"collapse\" href=\"#\">
         <i class=\"bi bi-circle\"></i><span>Match</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"Match-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Reservation</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Match</span>
            </a>
          </li>
            <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Billet</span>
            </a>
          </li>
 
        </ul>
        
      </li>
            <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-chat-dots\"></i><span>Reclamation</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Category</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Reponse</span>
            </a>
          </li>
            <li>
            <a href=\"#\">
              <i class=\"bi bi-circle\"></i><span>Reclamation</span>
            </a>
          </li>
 
        </ul>
        
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-gem\"></i><span>Evenement</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"icons-bootstrap.html\">
              <i class=\"bi bi-circle\"></i><span>Type</span>
            </a>
          </li>
          <li>
            <a href=\"icons-remix.html\">
              <i class=\"bi bi-circle\"></i><span>Evenement</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Icons Nav -->

      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
          <i class=\"bi bi-question-circle\"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
          <i class=\"bi bi-envelope\"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
          <i class=\"bi bi-card-list\"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-dash-circle\"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
          <i class=\"bi bi-file-earmark\"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
{% endblock %}
  

{% block main %}
  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-8\">
          <div class=\"row\">

            <!-- Sales Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-cart\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>145</h6>
                      <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card revenue-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-currency-dollar\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>\$3,264</h6>
                      <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class=\"col-xxl-4 col-xl-12\">

              <div class=\"card info-card customers-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-people\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>1244</h6>
                      <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class=\"col-12\">
              <div class=\"card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id=\"reportsChart\"></div>

                  <script>
                    document.addEventListener(\"DOMContentLoaded\", () => {
                      new ApexCharts(document.querySelector(\"#reportsChart\"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: \"gradient\",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Customer</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                        <td>\$64</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                        <td>\$47</td>
                        <td><span class=\"badge bg-warning\">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                        <td>\$147</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                        <td>\$67</td>
                        <td><span class=\"badge bg-danger\">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                        <td>\$165</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Sold</th>
                        <th scope=\"col\">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                        <td>\$64</td>
                        <td class=\"fw-bold\">124</td>
                        <td>\$5,828</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                        <td>\$46</td>
                        <td class=\"fw-bold\">98</td>
                        <td>\$4,508</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                        <td>\$59</td>
                        <td class=\"fw-bold\">74</td>
                        <td>\$4,366</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                        <td>\$32</td>
                        <td class=\"fw-bold\">63</td>
                        <td>\$2,016</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                        <td>\$79</td>
                        <td class=\"fw-bold\">41</td>
                        <td>\$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class=\"col-lg-4\">

          <!-- Recent Activity -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

              <div class=\"activity\">

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class=\"activity-content\">
                    Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class=\"activity-content\">
                    Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class=\"activity-content\">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class=\"activity-content\">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

              <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

              <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

              <div class=\"news\">
                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-1.jpg\" alt=\"\">
                  <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-2.jpg\" alt=\"\">
                  <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-3.jpg\" alt=\"\">
                  <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-4.jpg\" alt=\"\">
                  <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"assets/img/news-5.jpg\" alt=\"\">
                  <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
{% endblock %}
{% block footer %}
<!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>TUNISPORT</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      
      Designed by <a href=\"https://bootstrapmade.com/\">OPTIMIZERS</a>
    </div>
  </footer><!-- End Footer -->
    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

{% endblock %}
  


  
 {% block javascript %}
 <!-- Vendor JS Files -->
  <script src=\"{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/chart.js/chart.min.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/echarts/echarts.min.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/quill/quill.min.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/tinymce/tinymce.min.js')}}\"></script>
  <script src=\"{{asset('assets/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('assets/js/main.js')}}\"></script>

 {% endblock %}
</body>

</html>", "back.html.twig", "C:\\Users\\medah\\OneDrive\\Desktop\\PiTunisport\\tunisport\\templates\\back.html.twig");
    }
}
