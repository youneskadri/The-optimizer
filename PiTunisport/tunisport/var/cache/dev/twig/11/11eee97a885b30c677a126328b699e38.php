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

/* front.html.twig */
class __TwigTemplate_02b4c70833e374d8acea5a877e57c174 extends Template
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
            'header' => [$this, 'block_header'],
            'banner' => [$this, 'block_banner'],
            'bodyKrichen' => [$this, 'block_bodyKrichen'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=no-js lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>
<head>
    <meta charset=utf-8>
    <meta name=description content=\"\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <title>soccer club</title>
    <link rel=\"shortcut icon\" href=favicon.ico>
 <link rel=stylesheet href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsFront/vendor.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsFront/style.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsFront/css/layerslider.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsFront/js/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>
</head>
<body><!--[if lt IE 10]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class=wrapper>
";
        // line 22
        $this->displayBlock('body1', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 93
        $this->displayBlock('banner', $context, $blocks);
        // line 129
        $this->displayBlock('bodyKrichen', $context, $blocks);
        // line 130
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 1047
        echo "    
    ";
        // line 1048
        $this->displayBlock('footer', $context, $blocks);
        // line 1161
        echo "    
<script src=\"";
        // line 1162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/vendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_body1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 25
        echo "    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        <li><a href=\"#\">Signup/login</a></li>
                        <li><a href=shopcart.html><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span
                                class=cartitems>0</span>)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=header-lower clearfix>
            <div class=container>
                <div class=row><h1 class=logo><a href=index-2.html><img src=assetsFront/images/tunisport.png alt=image></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu>
                                    <ul class=nav navbar-nav menu-bar>
                                        <li><a href=index-2.html class=active>Home <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                        <li><a href=about.html>about <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        <li><a>Event <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=gallerypage01.html>masonry</a></li>
                                                <li><a href=gallery02.html>gallery column two</a></li>
                                                <li><a href=gallery03.html>gallery column 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=blog.html>blog <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        <li><a href=bookTicket.html>book Tickets <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                        <li><a href=shop.html>shop <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        <li><a href=contact.html>contact <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        ";
        // line 79
        echo "                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class=social><a href=https://www.facebook.com/templatespoint.net class=facebook><i
                            class=\"fa fa-facebook\"></i></a> <a href=https://twitter.com/itobuztech class=twitter><i
                            class=\"fa fa-twitter\"></i></a> <a href=https://www.behance.net/ class=behance><i
                            class=\"fa fa-behance\"></i></a></div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 94
        echo "<div class=banner id=layerSlider style=\"width: 100%;\">
        <div class= data-ls=\"transition3d: 33,15; slidedelay: 8000 ; durationin:0;\"><img
                src=assetsFront/images/banner/background01.jpg class=ls-bg alt=\"Slide background\">

            ";
        // line 121
        echo "    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>action start from 21<sup>st</sup> july , 2015.</div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_bodyKrichen($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyKrichen"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyKrichen"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 131
        echo "    <section class=\"booking bg-smallwhite\">
        <div class=container>
            <div class=booking-fig><h2>SCC football club</h2></div>
            <div class=booking-content><a href=# class=\"btn btn-white\">read more</a> <a href=bookTicket.html
                                                                                        class=\"btn btn-red\">book my
                ticket</a></div>
        </div>
    </section>
    <section class=about>
        <div class=container>
            <div class=row><h2 class=heading>About <span>scc</span></h2>

                <div class=about-wrap>
                    <div class=\"tab-content nav-content\"><p role=tabpanel class=\"tab-pane fade\" id=matches>Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Enim amet cumque quo at eius nulla, voluptates
                        assumenda saepe, consequatur fuga sapiente. Quas optio adipisci dolor possimus quos, maiores
                        aliquid placeat! nemo ab praesentium voluptatum, exercitationem ad quo tempore quam temporibus
                        voluptates odio, qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <p role=tabpanel class=\"tab-pane active fade in\" id=static>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Enim amet cumque quo at eius nulla, voluptates asaliquid
                            placeat!Lorem ipsum dolor sit amet, consectetur adipisicing elit. nemo ab praesentium
                            voluptatum, exercitationem ad quo tempore quam temporibus voluptates odio, qui laborum
                            pariatur perferendis! Sapiente, itaque facilis deleniti unde?Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.</p>

                        <p role=tabpanel class=\"tab-pane fade\" id=traning>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. s quos, maiores aliquid placeat! Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Esse nemo ab praesentium voluptatum, exercitationem ad quo tempore quam
                            temporibus voluptates odio, qui laborum pariatur perferendis! Sapiente, itaque facilis
                            deleniti unde?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita
                            recusandae ullam autem ducimus consectetur sed iure sequi ratione architecto optio
                            consequuntur atque dolor dolores asperiores illum, quam hic ab?</p></div>
                    <div class=nav-header id=aboutTab>
                        <ul class=\"nav nav-tabs clearfix\" role=tablist>
                            <li><a href=#matches aria-controls=matches role=tab data-toggle=tab>Matches</a></li>
                            <li class=active><a href=#static aria-controls=static role=tab data-toggle=tab>statics</a>
                            </li>
                            <li><a href=#traning aria-controls=traning role=tab data-toggle=tab>traning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=latestResult>
        <div class=container>
            <div class=row><h2 class=heading>latest <span>result</span></h2>

                <div class=latestResult-wrap><h4>uefa champions league</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nemo tenetur magnam eveniet sed
                        aut, iste facere quisquam, cumque, vitae quis deleniti animi. A ipsum iusto, temporibus, beatae
                        porro nemo.</p></div>
                <div class=\"result clearfix\">
                    <div class=result-details>
                        <div class=content><h4>fc Dragons</h4>

                            <p>lose</p>

                            <p>Shannon Skelly(23)</p></div>
                        <div class=figure>
                            <div class=team-logo>
                                <div style=background:url(assetsFront/images/team-logo/logo01.png) class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=result-count>
                        <div class=count-number><span class=lose-team>1</span> <span>-</span> <span
                                class=win-team>3</span></div>
                        <div class=dateTime>
                            <div class=dateTime-container><span class=date>may 16,2015</span> <span
                                    class=time>15:30pm</span></div>
                            <div class=country-wrap><span class=field>wbeysley stadium</span> <span class=country>(london)</span>
                            </div>
                        </div>
                    </div>
                    <div class=result-details>
                        <div class=\"content contentresult\"><h4>fc Zulu Ninjas</h4>

                            <p>win</p>

                            <p>Leland Lagos(29)</p>

                            <p>Lelnd Lagos(39)</p></div>
                        <div class=\"figure figresult\">
                            <div class=team-logo>
                                <div style=background:url(assetsFront/images/team-logo/logo02.png) class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=center><a href=# class=\"btn btn-red score-btn\">Score board</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class=matchSchedule>
        <div class=container>
            <div class=row><h2 class=heading>match <span>schedule</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class=\"matchSchedule_details row\">
                    <div class=\"match_next right-triangle\">
                        <div class=\"wrap_match_next right-triangle\">
                            <div class=right-padding><h4 class=headline03>next match</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class=\"bg-blackimg match_versus02\">
                            <div class=nextmatchDetails><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>

                                <div class=\"wrap-logo clearfix\">
                                    <div class=logo-match><img src=assetsFront/images/matchResult/logo01.png alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src=assetsFront/images/matchResult/logo02.png alt=image></div>
                                </div>
                                <p class=match_dtls>October 31, 2015 | 18:25PM</p>

                                <p class=match_dtls>Wemsddley stadium (london)</p></div>
                        </div>
                    </div>
                    <div class=match_timing>
                        <ul class=counter-wrap>
                            <li><span>12</span>days</li>
                            <li><span>18</span>hours</li>
                            <li><span>27</span>minutes</li>
                            <li><span>55</span>seconds</li>
                        </ul>
                    </div>
                </div>
                <div class=\"matchSchedule_details row\">
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class=\"home_tInfo scrollable\">
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>1</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Militant Flyers</span><span
                                                    class=vs>vs</span> <span>fc Black & White Blasters</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>2</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Crimson Buccaneers</span><span
                                                    class=vs>vs</span> <span>fc Poison Reapers</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>3</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Muffin Kickers</span><span
                                                    class=vs>vs</span> <span>fc Ghost Assassins</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>4</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Demolition Rockets</span><span
                                                    class=vs>vs</span> <span>fc Wind Flyers</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>5</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Alpha Monsters</span><span
                                                    class=vs>vs</span> <span>fc Delta Miners</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>6</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Zulu Ninjas</span><span class=vs>vs</span>
                                                <span>fc Sneaky Mutants</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=match_next>
                        <div class=\"wrap_match_next left_triangle\">
                            <div class=left_padding><h4 class=headline03>upcoming feature</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                </div>
                <div class=\"matchSchedule_details row\">
                    <div class=match_next>
                        <div class=\"wrap_match_next right-triangle\">
                            <div class=right-padding><h4 class=headline03>pointed table</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class=\"point_table scrollable\">
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">1</div>
                                        <div class=\"headline01 largepoint\">FC Silver Bullets</div>
                                        <div class=\"headline01 smallpoint row row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">2</div>
                                        <div class=\"headline01 largepoint\">FC Spinning Slammers</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">3</div>
                                        <div class=\"headline01 largepoint\">FC Crimson Executioners</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">4</div>
                                        <div class=\"headline01 largepoint\">FC Shaolin Robots</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">5</div>
                                        <div class=\"headline01 largepoint\">FC Silent Xpress</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">6</div>
                                        <div class=\"headline01 largepoint\">FC Dark Scorpions</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">7</div>
                                        <div class=\"headline01 largepoint\">FC Cyborg Snakes</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">8</div>
                                        <div class=\"headline01 largepoint\">FC Skull Killers</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">1</div>
                                        <div class=\"headline01 largepoint\">FC Reptile Kickers</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>11</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"booking bookticket\">
        <div class=container>
            <div class=booking-fig><h2>SCC football club</h2></div>
            <div class=booking-content><a href=# class=\"btn btn-white\">book now</a></div>
        </div>
    </section>
    <section class=latestvideo>
        <div class=container>
            <div class=row><h2 class=heading>latest <span>video</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class=\"video-wrap clearfix\">
                    <div class=\"video-content clearfix\"><a class=btn-up></a>
                        <ul class=\"videoLive clearfix\" id=videoSlide role=tablist>
                            <li><a class=changeVideo data-yt-video=W7qWa52k-nE>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=YtXNB-0cFBo>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=W7qWa52k-nE>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=yw3Cw5eG1wM>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=W7qWa52k-nE>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                        </ul>
                        <a class=btn-down></a></div>
                    <div class=video-show>
                        <div class=video-container id=video01 data-current-video=W7qWa52k-nE>
                            <iframe src=http://www.youtube.com/embed/W7qWa52k-nE class=liveVideo
                                    allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"latest_news bg-white\">
        <div class=container>
            <div class=row><h2 class=heading>latest <span>news</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class=\"LatestNews_wrap clearfix\">
                    <ul class=\"nav accordion-news\" role=tablist>
                        <li><a href=#world_news aria-controls=world_news role=tab data-toggle=tab id=world_news_button>world
                            news</a></li>
                        <li class=active><a href=\"#\" club_news aria-controls=club_news role=tab data-toggle=tab
                                            id=\"club_news_button\">club news</a></li>
                    </ul>
                    <div class=\"tab-content news_display_container clearfix\">
                        <ul id=\"world_news class=tab-pane\">
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news_01.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news_01.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news-02.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news-03.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w-news-04.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class=\"prv club_prev\"></a> <a class=\"nxt club_next\"></a>
                        <ul id=club_news class=\"tab-pane active clearfix\">
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_01.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_02.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_03.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_04.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_05.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=club_history>
        <div class=container>
            <div class=row><h2 class=heading>club <span>history</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

                <div class=\"nav clubHistory-wrap clearfix\">
                    <ul class=historyMeter>
                        <li><a href=#><span>1987</span></a></li>
                        <li class=win><a href=#win01><span>1988</span></a></li>
                        <li><a href=#><span>1989</span></a></li>
                        <li><a href=#><span>1990</span></a></li>
                        <li class=\"win active\"><a href=#win02><span>1991</span></a></li>
                        <li><a href=#><span>1991</span></a></li>
                        <li><a href=#><span>1995</span></a></li>
                        <li><a href=#><span>1997</span></a></li>
                        <li class=win><a href=#win03><span>2000</span></a></li>
                        <li><span>2005</span></li>
                        <li><span>2007</span></li>
                        <li><span>2009</span></li>
                        <li class=win><a href=#win04><span>2012</span></a></li>
                        <li><a href=#><span>2013</span></a></li>
                        <li><a href=#><span>2014</span></a></li>
                        <li class=win><a href=#win05><span>2015</span></a></li>
                    </ul>
                    <div class=\"tab-content historyVideoWrap clearfix\">
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win01>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 1988,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit.</p>
                                <a href=clubHistoryDetails.html class=\"btn-small btn-red\">Read more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane active clearfix\" id=win02>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 1991 ,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos,
                                    error impedit voluptatum quo quaerat placeat .</p><a href=clubHistoryDetails.html
                                                                                         class=\"btn-small btn-red\">Read
                                    more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win03>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/F6U5-B3NUKA allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 2000 ,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit .</p>
                                <a href=clubHistoryDetails.html class=\"btn-small btn-red\">Read more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win04>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 2012,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit,</p>
                                <a href=clubHistoryDetails.html class=\"btn-small btn-red\">Read more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win05>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 2015 ,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos,
                                    error impedit voluptatum quo quaerat placeat accusantium molestiae quod dolore, quae
                                    quos, blanditiis recusandae id iste.</p><a href=clubHistoryDetails.html
                                                                               class=\"btn-small btn-red\">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"players homeplayer\">
        <div class=container>
            <div class=row><h2 class=heading>our <span>heroes</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

                <div class=\"wrapplayer clearfix\"><a class=\"prv prev-player\"></a> <a class=\"nxt next-player\"></a>
                    <ul class=\"slideHeroes clearfix\">
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player01.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Daren Difiore</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                              alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>goalkeeper</span> <span><i
                                            class=\"fa fa-heart\"></i>20</span></li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player02.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Terry Tijerina</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                               alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>DEFENDER</span> <span><i
                                            class=\"fa fa-heart\"></i>34</span></li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player03.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Alex Alameda</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                             alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>STRIKER</span> <span><i class=\"fa fa-heart\"></i>45</span>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player04.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Lane Lavalley</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                              alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>STRIKER</span> <span><i class=\"fa fa-heart\"></i>45</span>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player05.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Dominick Dumbleton</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                                   alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>STRIKER</span> <span><i class=\"fa fa-heart\"></i>78</span>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=gallery>
        <div class=container>
            <div class=row><h2 class=heading>our <span>gallery</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p></div>
        </div>
        
                <div class=grid_item>
                    <div class=gallery_dtl><img src=assetsFront/images/gallery/masonry/medium_01.jpg alt=image>

                        <div class=gallery_info>
                            <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>

                                <p class=red_p>Magna aliqua</p></div>
                        </div>
                    </div>
                </div>
                <div class=grid_item>
                    <div class=gallery_dtl><img src=assetsFront/images/gallery/gallery041.jpg alt=image>

                        <div class=gallery_info>
                            <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>

                                <p class=red_p>Magna aliqua</p></div>
                        </div>
                    </div>
                </div>
                <div class=grid_item>
                    <div class=gallery_dtl><img src=assetsFront/images/gallery/masonry/medium_03.jpg alt=image>

                        <div class=gallery_info>
                            <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>

                                <p class=red_p>Magna aliqua</p></div>
                        </div>
                    </div>
                </div>
                <div class=gutter></div>
            </div>
        </div>
        <a class=\"btn btn-red\">read more</a></section>
    <section class=social-media>
        <div class=container>
            <div class=row>
                <ul class=socialinfo>
                    <li><a href=\"#\">
                        <div class=sociallink><i class=\"fa fa-twitter\"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                            assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                            assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                        <div class=sociallink><i class=\"fa fa-facebook\"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                            assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                            assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                        <div class=sociallink><i class=\"fa fa-behance\"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                            assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                            assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class=awards>
        <div class=container>
            <div class=row><h2 class=heading>awa<span>rds</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

                <div class=\"wrapper-container clearfix\"><a class=\"prv awards_prev\"></a> <a class=\"nxt awards_next\"></a>
                    <ul class=\"awards-wrap clearfix\">
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards01.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards02.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards03.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=#><img src=assetsFront/images/awards/awards04.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards02.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"product bg-white\">
        <div class=container>
            <div class=row><h2 class=heading>TOP PRODUCTS & <span>merchandise</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>
                <ul class=product_details>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product01.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product02.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product03.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product04.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                </ul>
                <div class=center><a href=# class=\"btn btn-red\">view more</a></div>
            </div>
        </div>
    </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1048
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1049
        echo "    <footer class=footer-type01>
        <div class=container>
            <div class=row>
                <ul class=footer-widget>
                    <li class=widget-about><h4 class=footerheading>about <span>soccer club</span></h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis
                            dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo
                            laudantium accusamus est, nulla minima!</p>

                        <p><span class=uppercaseheading>address:</span><span class=red>239</span> main street
                            London,England.</p>

                        <p><span class=uppercaseheading>call:</span> <span class=red>1800-2222-3333</span></p></li>
                    <li class=widget-news><h4 class=footerheading>recent <span>news</span></h4>
                        <ul class=\"widget-newsdetails clearfix\">
                            <li class=clearfix><a href=\"#\" class=clearfix>
                                <div class=widget-pic
                                     style=\"background:url(assetsFront/images/widget/widget01.jpg) center no-repeat\"></div>
                                <div class=widget-newsinfo><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Numquam soluta excepturi.</p>

                                    <p class=uppercaseheading>18 september ,<span class=red>2015</span></p></div>
                            </a></li>
                            <li class=clearfix><a href=\"#\" class=clearfix>
                                <div class=widget-pic
                                     style=\"background:url(assetsFront/images/widget/widget02.jpg) center no-repeat\"></div>
                                <div class=widget-newsinfo><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Numquam soluta excepturi.</p>

                                    <p class=uppercaseheading>18 september ,<span class=red>2015</span></p></div>
                            </a></li>
                            <li class=clearfix><a href=\"#\" class=clearfix>
                                <div class=widget-pic
                                     style=\"background:url(assetsFront/images/widget/widget03.jpg) center no-repeat\"></div>
                                <div class=widget-newsinfo><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Numquam soluta excepturi.</p>

                                    <p class=uppercaseheading>18 september ,<span class=red>2015</span></p></div>
                            </a></li>
                        </ul>
                    </li>
                    <li class=widget-product><h4 class=footerheading>real <span>soccer products</span></h4>
                        <ul class=widget_productdetails>
                            <li><a href=#>shoes(4)</a></li>
                            <li><a href=#>men(4)</a></li>
                            <li><a href=#>t-shirt(4)</a></li>
                            <li><a href=#>sports(4)</a></li>
                            <li><a href=\"#\">glass</a></li>
                        </ul>
                    </li>
                    <li class=widget-comment><h4 class=footerheading>recent <span>comments</span></h4>
                        <ul class=widget_commentDetails>
                            <li><a href=# class=clearfix>
                                <div class=comment-pic>
                                    <div class=columnpic><img src=assetsFront/images/widget/comment01.jpg alt=image></div>
                                </div>
                                <div class=commentinfo><p class=uppercaseheading>jhon doe</p>

                                    <p>18 April ,<span class=red>2015</span></p>

                                    <p>nice and cool</p></div>
                            </a></li>
                            <li><a href=# class=clearfix>
                                <div class=comment-pic>
                                    <div class=columnpic><img src=assetsFront/images/widget/comment02.jpg alt=image></div>
                                </div>
                                <div class=commentinfo><p class=uppercaseheading>jhon doe</p>

                                    <p>18 April ,<span class=red>2015</span></p>

                                    <p>nice and cool</p></div>
                            </a></li>
                            <li><a href=# class=clearfix>
                                <div class=comment-pic>
                                    <div class=columnpic><img src=assetsFront/images/widget/comment03.jpg alt=image></div>
                                </div>
                                <div class=commentinfo><p class=uppercaseheading>jhon doe</p>

                                    <p>18 April ,<span class=red>2015</span></p>

                                    <p>nice and cool</p></div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src=assetsFront/images/tunisport.png alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=https://www.facebook.com/templatespoint.net class=bigsocial-link><i
                                    class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=https://twitter.com/ class=bigsocial-link target=_blank><i
                                    class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=https://www.behance.net/ class=bigsocial-link target=_blank><i
                                    class=\"fa fa-behance\"></i></a></li>
                        </ul>
                        <p><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></p></div>
                    <div class=footer-appstore>
                        <figure><a href=#><img src=assetsFront/images/appstore/apple.png alt=image></a></figure>
                        <figure><a href=#><img src=assetsFront/images/appstore/google.png alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1217 => 1049,  1207 => 1048,  282 => 131,  272 => 130,  254 => 129,  237 => 121,  231 => 94,  221 => 93,  198 => 79,  152 => 25,  142 => 24,  124 => 22,  110 => 1163,  106 => 1162,  103 => 1161,  101 => 1048,  98 => 1047,  95 => 130,  93 => 129,  91 => 93,  89 => 24,  86 => 23,  84 => 22,  74 => 15,  69 => 13,  65 => 12,  61 => 11,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=no-js lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>
<head>
    <meta charset=utf-8>
    <meta name=description content=\"\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <title>soccer club</title>
    <link rel=\"shortcut icon\" href=favicon.ico>
 <link rel=stylesheet href=\"{{asset('assetsFront/vendor.css')}}\">
    <link rel=stylesheet href=\"{{asset('assetsFront/style.css')}}\">
    <link rel=stylesheet  href=\"{{asset('assetsFront/css/layerslider.css')}}\">

    <script src=\"{{asset('assetsFront/js/vendor/modernizr.js')}}\"></script>
</head>
<body><!--[if lt IE 10]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class=wrapper>
{% block body1 %}{% endblock %}

{% block header %}
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        <li><a href=\"#\">Signup/login</a></li>
                        <li><a href=shopcart.html><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span
                                class=cartitems>0</span>)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=header-lower clearfix>
            <div class=container>
                <div class=row><h1 class=logo><a href=index-2.html><img src=assetsFront/images/tunisport.png alt=image></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu>
                                    <ul class=nav navbar-nav menu-bar>
                                        <li><a href=index-2.html class=active>Home <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                        <li><a href=about.html>about <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        <li><a>Event <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=gallerypage01.html>masonry</a></li>
                                                <li><a href=gallery02.html>gallery column two</a></li>
                                                <li><a href=gallery03.html>gallery column 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=blog.html>blog <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        <li><a href=bookTicket.html>book Tickets <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                        <li><a href=shop.html>shop <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        <li><a href=contact.html>contact <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                        {# <li><a>error <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=400.html>400 page</a></li>
                                                <li><a href=401.html>401 page</a></li>
                                                <li><a href=403.html>403 page</a></li>
                                                <li><a href=404.html>404 page</a></li>
                                                <li><a href=500.html>500 page</a></li>
                                                <li><a href=503.html>503 page</a></li>
                                            </ul>
                                        </li> #}
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class=social><a href=https://www.facebook.com/templatespoint.net class=facebook><i
                            class=\"fa fa-facebook\"></i></a> <a href=https://twitter.com/itobuztech class=twitter><i
                            class=\"fa fa-twitter\"></i></a> <a href=https://www.behance.net/ class=behance><i
                            class=\"fa fa-behance\"></i></a></div>
                </div>
            </div>
        </div>
    </header>
{% endblock %}
{% block banner %}
<div class=banner id=layerSlider style=\"width: 100%;\">
        <div class= data-ls=\"transition3d: 33,15; slidedelay: 8000 ; durationin:0;\"><img
                src=assetsFront/images/banner/background01.jpg class=ls-bg alt=\"Slide background\">

            {# <div class=\"ls-l layercontent01\" style=\"top: 50%; left: 50%; z-index:4;\"
                 data-ls=\"offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;\"><img
                    src=images/banner/player.png alt=innerimage class=img-responsive
                    style=\"max-width: 100% !important ;\"></div>
            <img src=images/banner/ball.png alt=innerimage class=\"ls-l layercontent02\" style=z-index:5;
                 data-ls=\"offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;\">
            <img src=images/banner/front_particles.png alt=particles class=ls-l style=\"z-index:3; left:0;\"
                 data-ls=\"offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;\">
            <img src=images/banner/back_particles.png alt=particles class=ls-l style=\"z-index:3; left:50%;\"
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
                july , 2015</h6></div> #}
    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>action start from 21<sup>st</sup> july , 2015.</div>
        </div>
    </div>

{% endblock %}
{% block bodyKrichen %}{% endblock %}
    {% block body %}
    <section class=\"booking bg-smallwhite\">
        <div class=container>
            <div class=booking-fig><h2>SCC football club</h2></div>
            <div class=booking-content><a href=# class=\"btn btn-white\">read more</a> <a href=bookTicket.html
                                                                                        class=\"btn btn-red\">book my
                ticket</a></div>
        </div>
    </section>
    <section class=about>
        <div class=container>
            <div class=row><h2 class=heading>About <span>scc</span></h2>

                <div class=about-wrap>
                    <div class=\"tab-content nav-content\"><p role=tabpanel class=\"tab-pane fade\" id=matches>Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Enim amet cumque quo at eius nulla, voluptates
                        assumenda saepe, consequatur fuga sapiente. Quas optio adipisci dolor possimus quos, maiores
                        aliquid placeat! nemo ab praesentium voluptatum, exercitationem ad quo tempore quam temporibus
                        voluptates odio, qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <p role=tabpanel class=\"tab-pane active fade in\" id=static>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Enim amet cumque quo at eius nulla, voluptates asaliquid
                            placeat!Lorem ipsum dolor sit amet, consectetur adipisicing elit. nemo ab praesentium
                            voluptatum, exercitationem ad quo tempore quam temporibus voluptates odio, qui laborum
                            pariatur perferendis! Sapiente, itaque facilis deleniti unde?Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.</p>

                        <p role=tabpanel class=\"tab-pane fade\" id=traning>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. s quos, maiores aliquid placeat! Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Esse nemo ab praesentium voluptatum, exercitationem ad quo tempore quam
                            temporibus voluptates odio, qui laborum pariatur perferendis! Sapiente, itaque facilis
                            deleniti unde?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita
                            recusandae ullam autem ducimus consectetur sed iure sequi ratione architecto optio
                            consequuntur atque dolor dolores asperiores illum, quam hic ab?</p></div>
                    <div class=nav-header id=aboutTab>
                        <ul class=\"nav nav-tabs clearfix\" role=tablist>
                            <li><a href=#matches aria-controls=matches role=tab data-toggle=tab>Matches</a></li>
                            <li class=active><a href=#static aria-controls=static role=tab data-toggle=tab>statics</a>
                            </li>
                            <li><a href=#traning aria-controls=traning role=tab data-toggle=tab>traning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=latestResult>
        <div class=container>
            <div class=row><h2 class=heading>latest <span>result</span></h2>

                <div class=latestResult-wrap><h4>uefa champions league</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nemo tenetur magnam eveniet sed
                        aut, iste facere quisquam, cumque, vitae quis deleniti animi. A ipsum iusto, temporibus, beatae
                        porro nemo.</p></div>
                <div class=\"result clearfix\">
                    <div class=result-details>
                        <div class=content><h4>fc Dragons</h4>

                            <p>lose</p>

                            <p>Shannon Skelly(23)</p></div>
                        <div class=figure>
                            <div class=team-logo>
                                <div style=background:url(assetsFront/images/team-logo/logo01.png) class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=result-count>
                        <div class=count-number><span class=lose-team>1</span> <span>-</span> <span
                                class=win-team>3</span></div>
                        <div class=dateTime>
                            <div class=dateTime-container><span class=date>may 16,2015</span> <span
                                    class=time>15:30pm</span></div>
                            <div class=country-wrap><span class=field>wbeysley stadium</span> <span class=country>(london)</span>
                            </div>
                        </div>
                    </div>
                    <div class=result-details>
                        <div class=\"content contentresult\"><h4>fc Zulu Ninjas</h4>

                            <p>win</p>

                            <p>Leland Lagos(29)</p>

                            <p>Lelnd Lagos(39)</p></div>
                        <div class=\"figure figresult\">
                            <div class=team-logo>
                                <div style=background:url(assetsFront/images/team-logo/logo02.png) class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=center><a href=# class=\"btn btn-red score-btn\">Score board</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class=matchSchedule>
        <div class=container>
            <div class=row><h2 class=heading>match <span>schedule</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class=\"matchSchedule_details row\">
                    <div class=\"match_next right-triangle\">
                        <div class=\"wrap_match_next right-triangle\">
                            <div class=right-padding><h4 class=headline03>next match</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class=\"bg-blackimg match_versus02\">
                            <div class=nextmatchDetails><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>

                                <div class=\"wrap-logo clearfix\">
                                    <div class=logo-match><img src=assetsFront/images/matchResult/logo01.png alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src=assetsFront/images/matchResult/logo02.png alt=image></div>
                                </div>
                                <p class=match_dtls>October 31, 2015 | 18:25PM</p>

                                <p class=match_dtls>Wemsddley stadium (london)</p></div>
                        </div>
                    </div>
                    <div class=match_timing>
                        <ul class=counter-wrap>
                            <li><span>12</span>days</li>
                            <li><span>18</span>hours</li>
                            <li><span>27</span>minutes</li>
                            <li><span>55</span>seconds</li>
                        </ul>
                    </div>
                </div>
                <div class=\"matchSchedule_details row\">
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class=\"home_tInfo scrollable\">
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>1</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Militant Flyers</span><span
                                                    class=vs>vs</span> <span>fc Black & White Blasters</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>2</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Crimson Buccaneers</span><span
                                                    class=vs>vs</span> <span>fc Poison Reapers</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>3</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Muffin Kickers</span><span
                                                    class=vs>vs</span> <span>fc Ghost Assassins</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>4</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Demolition Rockets</span><span
                                                    class=vs>vs</span> <span>fc Wind Flyers</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>5</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Alpha Monsters</span><span
                                                    class=vs>vs</span> <span>fc Delta Miners</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href=\"#\">
                                    <ul class=\"t_info match_info01 headline01 clearfix\">
                                        <li>6</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>FC Zulu Ninjas</span><span class=vs>vs</span>
                                                <span>fc Sneaky Mutants</span></div>
                                            <div class=\"paragraph02 clearfix\"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=match_next>
                        <div class=\"wrap_match_next left_triangle\">
                            <div class=left_padding><h4 class=headline03>upcoming feature</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                </div>
                <div class=\"matchSchedule_details row\">
                    <div class=match_next>
                        <div class=\"wrap_match_next right-triangle\">
                            <div class=right-padding><h4 class=headline03>pointed table</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class=\"point_table scrollable\">
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">1</div>
                                        <div class=\"headline01 largepoint\">FC Silver Bullets</div>
                                        <div class=\"headline01 smallpoint row row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">2</div>
                                        <div class=\"headline01 largepoint\">FC Spinning Slammers</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">3</div>
                                        <div class=\"headline01 largepoint\">FC Crimson Executioners</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">4</div>
                                        <div class=\"headline01 largepoint\">FC Shaolin Robots</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">5</div>
                                        <div class=\"headline01 largepoint\">FC Silent Xpress</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">6</div>
                                        <div class=\"headline01 largepoint\">FC Dark Scorpions</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">7</div>
                                        <div class=\"headline01 largepoint\">FC Cyborg Snakes</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">8</div>
                                        <div class=\"headline01 largepoint\">FC Skull Killers</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class=\"headline01 smallpoint\">1</div>
                                        <div class=\"headline01 largepoint\">FC Reptile Kickers</div>
                                        <div class=\"headline01 smallpoint row\"><span>p</span><span>11</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"booking bookticket\">
        <div class=container>
            <div class=booking-fig><h2>SCC football club</h2></div>
            <div class=booking-content><a href=# class=\"btn btn-white\">book now</a></div>
        </div>
    </section>
    <section class=latestvideo>
        <div class=container>
            <div class=row><h2 class=heading>latest <span>video</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class=\"video-wrap clearfix\">
                    <div class=\"video-content clearfix\"><a class=btn-up></a>
                        <ul class=\"videoLive clearfix\" id=videoSlide role=tablist>
                            <li><a class=changeVideo data-yt-video=W7qWa52k-nE>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=YtXNB-0cFBo>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=W7qWa52k-nE>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=yw3Cw5eG1wM>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <li><a class=changeVideo data-yt-video=W7qWa52k-nE>
                                <div><span>september 10, 2015</span> consectetur adipisicing elit : <span>Live audio and video</span>
                                </div>
                            </a></li>
                        </ul>
                        <a class=btn-down></a></div>
                    <div class=video-show>
                        <div class=video-container id=video01 data-current-video=W7qWa52k-nE>
                            <iframe src=http://www.youtube.com/embed/W7qWa52k-nE class=liveVideo
                                    allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"latest_news bg-white\">
        <div class=container>
            <div class=row><h2 class=heading>latest <span>news</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class=\"LatestNews_wrap clearfix\">
                    <ul class=\"nav accordion-news\" role=tablist>
                        <li><a href=#world_news aria-controls=world_news role=tab data-toggle=tab id=world_news_button>world
                            news</a></li>
                        <li class=active><a href=\"#\" club_news aria-controls=club_news role=tab data-toggle=tab
                                            id=\"club_news_button\">club news</a></li>
                    </ul>
                    <div class=\"tab-content news_display_container clearfix\">
                        <ul id=\"world_news class=tab-pane\">
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news_01.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news_01.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news-02.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w_news-03.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/w-news-04.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class=\"prv club_prev\"></a> <a class=\"nxt club_next\"></a>
                        <ul id=club_news class=\"tab-pane active clearfix\">
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_01.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_02.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_03.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_04.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src=assetsFront/images/news/c_news_05.jpg alt=image></div>
                                        <div class=content-01><h6><a href=#>consectetur adipisicing elit</a></h6>

                                            <p class=red_p>Stories of the legends</p>

                                            <p class=describtion>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p></div>
                                        <div class=\"news_date clearfix\"><span>october 14,2015</span> <span class=like><a
                                                href=#>45</a></span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=club_history>
        <div class=container>
            <div class=row><h2 class=heading>club <span>history</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

                <div class=\"nav clubHistory-wrap clearfix\">
                    <ul class=historyMeter>
                        <li><a href=#><span>1987</span></a></li>
                        <li class=win><a href=#win01><span>1988</span></a></li>
                        <li><a href=#><span>1989</span></a></li>
                        <li><a href=#><span>1990</span></a></li>
                        <li class=\"win active\"><a href=#win02><span>1991</span></a></li>
                        <li><a href=#><span>1991</span></a></li>
                        <li><a href=#><span>1995</span></a></li>
                        <li><a href=#><span>1997</span></a></li>
                        <li class=win><a href=#win03><span>2000</span></a></li>
                        <li><span>2005</span></li>
                        <li><span>2007</span></li>
                        <li><span>2009</span></li>
                        <li class=win><a href=#win04><span>2012</span></a></li>
                        <li><a href=#><span>2013</span></a></li>
                        <li><a href=#><span>2014</span></a></li>
                        <li class=win><a href=#win05><span>2015</span></a></li>
                    </ul>
                    <div class=\"tab-content historyVideoWrap clearfix\">
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win01>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 1988,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit.</p>
                                <a href=clubHistoryDetails.html class=\"btn-small btn-red\">Read more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane active clearfix\" id=win02>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 1991 ,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos,
                                    error impedit voluptatum quo quaerat placeat .</p><a href=clubHistoryDetails.html
                                                                                         class=\"btn-small btn-red\">Read
                                    more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win03>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/F6U5-B3NUKA allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 2000 ,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit .</p>
                                <a href=clubHistoryDetails.html class=\"btn-small btn-red\">Read more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win04>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 2012,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit,</p>
                                <a href=clubHistoryDetails.html class=\"btn-small btn-red\">Read more</a></div>
                        </div>
                        <div role=tabpanel class=\"tab-pane clearfix\" id=win05>
                            <div class=historyVideo>
                                <div class=historyvideoContainer>
                                    <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=\"\"></iframe>
                                </div>
                            </div>
                            <div class=historyContent><h4><span>fifa 2015 ,</span> uefa champions league</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                    error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                    corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque
                                    reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium
                                    molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos,
                                    error impedit voluptatum quo quaerat placeat accusantium molestiae quod dolore, quae
                                    quos, blanditiis recusandae id iste.</p><a href=clubHistoryDetails.html
                                                                               class=\"btn-small btn-red\">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"players homeplayer\">
        <div class=container>
            <div class=row><h2 class=heading>our <span>heroes</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

                <div class=\"wrapplayer clearfix\"><a class=\"prv prev-player\"></a> <a class=\"nxt next-player\"></a>
                    <ul class=\"slideHeroes clearfix\">
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player01.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Daren Difiore</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                              alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>goalkeeper</span> <span><i
                                            class=\"fa fa-heart\"></i>20</span></li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player02.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Terry Tijerina</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                               alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>DEFENDER</span> <span><i
                                            class=\"fa fa-heart\"></i>34</span></li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player03.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Alex Alameda</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                             alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>STRIKER</span> <span><i class=\"fa fa-heart\"></i>45</span>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player04.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Lane Lavalley</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                              alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>STRIKER</span> <span><i class=\"fa fa-heart\"></i>45</span>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                        <li><a href=\"#\">
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div style=background:url(assetsFront/images/player/player05.jpg) class=bgimg></div>
                                </div>
                                <ul class=\"playerDetails clearfix\">
                                    <li><span>Dominick Dumbleton</span> <span><img src=assetsFront/images/icons/tShirt.png
                                                                                   alt=image></span></li>
                                    <li class=playinfodetails>age 28 (born 22 april ,1987)</li>
                                    <li class=playerInfo><span>STRIKER</span> <span><i class=\"fa fa-heart\"></i>78</span>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=gallery>
        <div class=container>
            <div class=row><h2 class=heading>our <span>gallery</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p></div>
        </div>
        
                <div class=grid_item>
                    <div class=gallery_dtl><img src=assetsFront/images/gallery/masonry/medium_01.jpg alt=image>

                        <div class=gallery_info>
                            <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>

                                <p class=red_p>Magna aliqua</p></div>
                        </div>
                    </div>
                </div>
                <div class=grid_item>
                    <div class=gallery_dtl><img src=assetsFront/images/gallery/gallery041.jpg alt=image>

                        <div class=gallery_info>
                            <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>

                                <p class=red_p>Magna aliqua</p></div>
                        </div>
                    </div>
                </div>
                <div class=grid_item>
                    <div class=gallery_dtl><img src=assetsFront/images/gallery/masonry/medium_03.jpg alt=image>

                        <div class=gallery_info>
                            <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>

                                <p class=red_p>Magna aliqua</p></div>
                        </div>
                    </div>
                </div>
                <div class=gutter></div>
            </div>
        </div>
        <a class=\"btn btn-red\">read more</a></section>
    <section class=social-media>
        <div class=container>
            <div class=row>
                <ul class=socialinfo>
                    <li><a href=\"#\">
                        <div class=sociallink><i class=\"fa fa-twitter\"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                            assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                            assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                        <div class=sociallink><i class=\"fa fa-facebook\"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                            assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                            assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                        <div class=sociallink><i class=\"fa fa-behance\"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                            assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                            assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class=awards>
        <div class=container>
            <div class=row><h2 class=heading>awa<span>rds</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

                <div class=\"wrapper-container clearfix\"><a class=\"prv awards_prev\"></a> <a class=\"nxt awards_next\"></a>
                    <ul class=\"awards-wrap clearfix\">
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards01.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards02.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards03.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=#><img src=assetsFront/images/awards/awards04.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                        <li><a href=achivement_details.html><img src=assetsFront/images/awards/awards02.png alt=image>
                            <ul class=awards-info>
                                <li>uefa 2014</li>
                                <li>champion</li>
                            </ul>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=\"product bg-white\">
        <div class=container>
            <div class=row><h2 class=heading>TOP PRODUCTS & <span>merchandise</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                    Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>
                <ul class=product_details>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product01.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product02.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product03.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                    <li><a href=#>
                        <div>
                            <div class=product-img
                                 style=\"background:url(assetsFront/images/product/product04.jpg) center no-repeat\"></div>
                        </div>
                        <ul class=\"oswald16 product_info\">
                            <li class=detailsContainer><span>soccer jersey</span> <span><i
                                    class=\"fa fa-user\"></i>360</span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class=\"fa fa-shopping-cart\"></i></span> <span class=price>\$199</span></li>
                        </ul>
                    </a></li>
                </ul>
                <div class=center><a href=# class=\"btn btn-red\">view more</a></div>
            </div>
        </div>
    </section>
    {% endblock %}
    
    {% block footer %}
    <footer class=footer-type01>
        <div class=container>
            <div class=row>
                <ul class=footer-widget>
                    <li class=widget-about><h4 class=footerheading>about <span>soccer club</span></h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis
                            dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo
                            laudantium accusamus est, nulla minima!</p>

                        <p><span class=uppercaseheading>address:</span><span class=red>239</span> main street
                            London,England.</p>

                        <p><span class=uppercaseheading>call:</span> <span class=red>1800-2222-3333</span></p></li>
                    <li class=widget-news><h4 class=footerheading>recent <span>news</span></h4>
                        <ul class=\"widget-newsdetails clearfix\">
                            <li class=clearfix><a href=\"#\" class=clearfix>
                                <div class=widget-pic
                                     style=\"background:url(assetsFront/images/widget/widget01.jpg) center no-repeat\"></div>
                                <div class=widget-newsinfo><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Numquam soluta excepturi.</p>

                                    <p class=uppercaseheading>18 september ,<span class=red>2015</span></p></div>
                            </a></li>
                            <li class=clearfix><a href=\"#\" class=clearfix>
                                <div class=widget-pic
                                     style=\"background:url(assetsFront/images/widget/widget02.jpg) center no-repeat\"></div>
                                <div class=widget-newsinfo><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Numquam soluta excepturi.</p>

                                    <p class=uppercaseheading>18 september ,<span class=red>2015</span></p></div>
                            </a></li>
                            <li class=clearfix><a href=\"#\" class=clearfix>
                                <div class=widget-pic
                                     style=\"background:url(assetsFront/images/widget/widget03.jpg) center no-repeat\"></div>
                                <div class=widget-newsinfo><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Numquam soluta excepturi.</p>

                                    <p class=uppercaseheading>18 september ,<span class=red>2015</span></p></div>
                            </a></li>
                        </ul>
                    </li>
                    <li class=widget-product><h4 class=footerheading>real <span>soccer products</span></h4>
                        <ul class=widget_productdetails>
                            <li><a href=#>shoes(4)</a></li>
                            <li><a href=#>men(4)</a></li>
                            <li><a href=#>t-shirt(4)</a></li>
                            <li><a href=#>sports(4)</a></li>
                            <li><a href=\"#\">glass</a></li>
                        </ul>
                    </li>
                    <li class=widget-comment><h4 class=footerheading>recent <span>comments</span></h4>
                        <ul class=widget_commentDetails>
                            <li><a href=# class=clearfix>
                                <div class=comment-pic>
                                    <div class=columnpic><img src=assetsFront/images/widget/comment01.jpg alt=image></div>
                                </div>
                                <div class=commentinfo><p class=uppercaseheading>jhon doe</p>

                                    <p>18 April ,<span class=red>2015</span></p>

                                    <p>nice and cool</p></div>
                            </a></li>
                            <li><a href=# class=clearfix>
                                <div class=comment-pic>
                                    <div class=columnpic><img src=assetsFront/images/widget/comment02.jpg alt=image></div>
                                </div>
                                <div class=commentinfo><p class=uppercaseheading>jhon doe</p>

                                    <p>18 April ,<span class=red>2015</span></p>

                                    <p>nice and cool</p></div>
                            </a></li>
                            <li><a href=# class=clearfix>
                                <div class=comment-pic>
                                    <div class=columnpic><img src=assetsFront/images/widget/comment03.jpg alt=image></div>
                                </div>
                                <div class=commentinfo><p class=uppercaseheading>jhon doe</p>

                                    <p>18 April ,<span class=red>2015</span></p>

                                    <p>nice and cool</p></div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src=assetsFront/images/tunisport.png alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=https://www.facebook.com/templatespoint.net class=bigsocial-link><i
                                    class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=https://twitter.com/ class=bigsocial-link target=_blank><i
                                    class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=https://www.behance.net/ class=bigsocial-link target=_blank><i
                                    class=\"fa fa-behance\"></i></a></li>
                        </ul>
                        <p><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></p></div>
                    <div class=footer-appstore>
                        <figure><a href=#><img src=assetsFront/images/appstore/apple.png alt=image></a></figure>
                        <figure><a href=#><img src=assetsFront/images/appstore/google.png alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    {% endblock %}
    
<script src=\"{{asset('js/vendor/vendor.js')}}\"></script>
<script src=\"{{asset('js/main.js')}}\"></script>
</body>

</html>", "front.html.twig", "C:\\Users\\medah\\OneDrive\\Desktop\\PiTunisport\\tunisport\\templates\\front.html.twig");
    }
}