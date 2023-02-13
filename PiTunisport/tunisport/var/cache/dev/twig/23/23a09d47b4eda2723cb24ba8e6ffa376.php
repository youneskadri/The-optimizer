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

/* banner.html */
class __TwigTemplate_23f495aef62a509272853948499e5e7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body1' => [$this, 'block_body1'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banner.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banner.html"));

        // line 1
        $this->displayBlock('body1', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        // line 2
        echo "

<div class=banner id=layerSlider style=\"width: 100%;\">
        <div class= data-ls=\"transition3d: 33,15; slidedelay: 8000 ; durationin:0;\"><img
                src= assetsFront/images/banner/background01.jpg class=ls-bg alt=\"Slide background\">

            <div class=\"ls-l layercontent01\" style=\"top: 50%; left: 50%; z-index:4;padding-top: -200px;\"
                 data-ls=\"offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;\"><img
                    src=assetsFront/images/banner/player.png alt=innerimage class=img-responsive
                    style=\"max-width: 100% !important ;\"></div>
            <img src=assetsFront/images/banner/ball.png alt=innerimage class=\"ls-l layercontent02\" style=z-index:5;
                 data-ls=\"offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;\">
            <img src=assetsFront/images/banner/front_particles.png alt=particles class=ls-l style=\"z-index:3; left:0;\"
                 data-ls=\"offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;\">
            <img src=assetsFront/images/banner/back_particles.png alt=particles class=ls-l style=\"z-index:3; left:50%;\"
                 data-ls=\"offsetxin: left; offsetxout:left; scalein:90; easingin: easeoutquart; durationin: 3000; delayin: 250;\">

            <h2 class=\"ls-l bannertext layercontent03\" data-ls=\"offsetxin:left; rotatexin:90 ; durationin: 3500;\">
                action</h2>

            <h2 class=\"ls-l bannertext01 italic01 layercontent04\"
                data-ls=\"offsetxin:left; scalexin:9; durationin: 4000;\">starts</h2><h4
                    class=\"ls-l bannertext02 layercontent05\" data-ls=\"offsetxin:left; rotatexin:90 ; durationin: 4500;\">
                from</h4>

            <h2 class=\"ls-l bannertext01 layercontent06\" style=\"left: 87%; top:760px;\"
                data-ls=\"offsetxin:left; flipxin:90 ; durationin: 5000;\">21<sup>st</sup></h2><h6
                    class=\"ls-l bannertext03 layercontent07\" data-ls=\"offsetxin:left; flipxin:90 ; durationin: 6000;\">
                july , 2015</h6></div>
    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>action start from 21<sup>st</sup> july , 2015.</div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "banner.html";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body1 %}


<div class=banner id=layerSlider style=\"width: 100%;\">
        <div class= data-ls=\"transition3d: 33,15; slidedelay: 8000 ; durationin:0;\"><img
                src= assetsFront/images/banner/background01.jpg class=ls-bg alt=\"Slide background\">

            <div class=\"ls-l layercontent01\" style=\"top: 50%; left: 50%; z-index:4;padding-top: -200px;\"
                 data-ls=\"offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;\"><img
                    src=assetsFront/images/banner/player.png alt=innerimage class=img-responsive
                    style=\"max-width: 100% !important ;\"></div>
            <img src=assetsFront/images/banner/ball.png alt=innerimage class=\"ls-l layercontent02\" style=z-index:5;
                 data-ls=\"offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;\">
            <img src=assetsFront/images/banner/front_particles.png alt=particles class=ls-l style=\"z-index:3; left:0;\"
                 data-ls=\"offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;\">
            <img src=assetsFront/images/banner/back_particles.png alt=particles class=ls-l style=\"z-index:3; left:50%;\"
                 data-ls=\"offsetxin: left; offsetxout:left; scalein:90; easingin: easeoutquart; durationin: 3000; delayin: 250;\">

            <h2 class=\"ls-l bannertext layercontent03\" data-ls=\"offsetxin:left; rotatexin:90 ; durationin: 3500;\">
                action</h2>

            <h2 class=\"ls-l bannertext01 italic01 layercontent04\"
                data-ls=\"offsetxin:left; scalexin:9; durationin: 4000;\">starts</h2><h4
                    class=\"ls-l bannertext02 layercontent05\" data-ls=\"offsetxin:left; rotatexin:90 ; durationin: 4500;\">
                from</h4>

            <h2 class=\"ls-l bannertext01 layercontent06\" style=\"left: 87%; top:760px;\"
                data-ls=\"offsetxin:left; flipxin:90 ; durationin: 5000;\">21<sup>st</sup></h2><h6
                    class=\"ls-l bannertext03 layercontent07\" data-ls=\"offsetxin:left; flipxin:90 ; durationin: 6000;\">
                july , 2015</h6></div>
    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>action start from 21<sup>st</sup> july , 2015.</div>
        </div>
    </div>
{% endblock %}", "banner.html", "C:\\Users\\medah\\OneDrive\\Desktop\\PiTunisport\\tunisport\\templates\\banner.html");
    }
}
