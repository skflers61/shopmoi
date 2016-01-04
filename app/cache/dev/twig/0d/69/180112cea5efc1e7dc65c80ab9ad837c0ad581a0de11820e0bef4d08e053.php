<?php

/* ::layoutGenerale.html.twig */
class __TwigTemplate_0d69180112cea5efc1e7dc65c80ab9ad837c0ad581a0de11820e0bef4d08e053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'Ariane' => array($this, 'block_Ariane'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"stylesheet\"  type=\"text/css\" media=\"all\"   href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/css/styleGenerale.css"), "html", null, true);
        echo "\"/>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <meta name=\"keywwords\" content=\"Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms\" />
        <meta name=\"description\" content=\"Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms\" />

        <!-- JS -->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/js/jquery-1.4.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/js/jquery.jcarousel.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/js/jquery-func.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t
        <!-- End JS -->
        
        
    </head>

    <body>
        <!-- Shell -->\t
        <div class=\"shell\">
                <div id=\"etat_connexion\">
                    ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 34
            echo "                        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a> 
                    ";
        } else {
            // line 36
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 38
        echo "                </div>
                <!-- Header -->\t
                <div id=\"header\">
                    <div id=\"header_background\">
                        <!--<h1 id=\"logo\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("sm_site_homepage");
        echo "\">SM</a></h1>\t-->

                        <!-- Cart -->
                        <div id=\"cart\">
                                <a href=\"#\" class=\"cart-link\">Panier</a>
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"user-link\">Mon compte</a>
                                <div class=\"cl\">&nbsp;</div>
                                
                                <!-- Search -->
                                <div id=\"top_search\">
                                    <form autocomplete=\"off\" id=\"form_recherche\" method=\"get\" action=\"/sitesearch_recherche.php\">

                                                    <input type=\"text\" value=\"Rechercher sur shopmoi.fr...\" onfocus=\"if(this.value=='Rechercher sur shopmoi.fr...') {this.value='';this.style.color='#000';} \" onblur=\"if(this.value=='') { this.value='Rechercher sur shopmoi.fr...';this.style.color='#999';repli_search();}\" id=\"search_home\" name=\"keyword\" class=\"\" style=\" margin: 3px 0px 0px 0px; padding: 2px 0px 2px 0px; width: 100%; color: rgb(153, 153, 153);\">

                                    </form>
                                </div>
                                <!-- End Search -->
                        </div>
                        <!-- End Cart -->

                        <!-- Navigation -->
                        <div id=\"navigation\">
                                <ul>
                                    ";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sm_site_homepage")) {
            // line 66
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sm_site_homepage");
            echo "\" class=\"active\">Accueil</a></li>
                                    ";
        } else {
            // line 67
            echo "   
                                        <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("sm_site_homepage");
            echo "\">Accueil</a></li>
                                    ";
        }
        // line 70
        echo "                                    
                                    ";
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sm_femmes_homepage")) {
            // line 72
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sm_femmes_homepage");
            echo "\" class=\"active\">Femmes</a></li>
                                    ";
        } else {
            // line 73
            echo "   
                                        <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("sm_femmes_homepage");
            echo "\">Femmes</a></li>
                                    ";
        }
        // line 76
        echo "                                    
                                    ";
        // line 77
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sm_hommes_homepage")) {
            // line 78
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sm_hommes_homepage");
            echo "\" class=\"active\">Hommes</a></li>
                                    ";
        } else {
            // line 79
            echo "   
                                        <li><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("sm_hommes_homepage");
            echo "\">Hommes</a></li>
                                    ";
        }
        // line 82
        echo "                                    
                                    ";
        // line 83
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sm_enfants_homepage")) {
            // line 84
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sm_enfants_homepage");
            echo "\" class=\"active\">Enfant</a></li>
                                    ";
        } else {
            // line 85
            echo "   
                                        <li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("sm_enfants_homepage");
            echo "\">Enfants</a></li>
                                    ";
        }
        // line 88
        echo "                                    
                                    ";
        // line 89
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sm_nouveautes_homepage")) {
            // line 90
            echo "                                        <li><a href=\"#\" class=\"active\">Nouveautés</a></li>
                                    ";
        } else {
            // line 91
            echo "   
                                        <li><a href=\"#\">Nouveautés</a></li>
                                    ";
        }
        // line 94
        echo "                                    
                                    ";
        // line 95
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sm_soldes_homepage")) {
            // line 96
            echo "                                        <li><a href=\"#\" class=\"active\">Soldes</a></li>
                                    ";
        } else {
            // line 97
            echo "   
                                        <li><a href=\"#\">Soldes</a></li>
                                    ";
        }
        // line 100
        echo "                                    
                                </ul>
                        </div>
                        <!-- End Navigation -->
                    </div>  
                    <!-- End HeaderBackground -->
                      
                    <div id=\"filAriane\">
                        <br>
                        <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("sm_site_homepage");
        echo "\">Accueil</a> > ";
        $this->displayBlock('Ariane', $context, $blocks);
        // line 110
        echo "                    </div>
                     
                </div>
                <!-- End Header -->

                ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "


        \t<!-- Footer -->
                <!-- bottomCouche -->
                <div id=\"bottomCouche2\">

                    <div id=\"bandeau_rassurance_bas_site\">
                                    <div id=\"rassurance_livraison\" onclick=\"callColorBox('/popup_rassurance_livraison.php');\" style=\"width:25%;\" class=\"encart_rassurance\">
                                    <div id=\"image_livraison\"></div>
                                    <div class=\"text_rassurance_titre\">LIVRAISON GRATUITE
                                        <div class=\"text_rassurance_sstitre\">dès 15€ d'achats</div>
                                    </div>
                            </div>

                            <div id=\"rassurance_satisfait\" onclick=\"callColorBox('/popup_rassurance_satisfait.php');\" style=\"width:25%;\" class=\"encart_rassurance\">

                                    <div id=\"image_satisfait\"></div>
                                    <div class=\"text_rassurance_titre\">RETOUR &amp; ECHANGE
                                        <div class=\"text_rassurance_sstitre\">GRATUITS</div>
                                    </div>
                            </div>

                            <div id=\"rassurance_3x\" onclick=\"callColorBox('/popup/paiement_3x.php');\" style=\"width:22%;\" class=\"encart_rassurance\">

                                    <div id=\"image_3x\"></div>
                                    <div class=\"text_rassurance_titre\">Paiement en 3 fois
                                        <div class=\"text_rassurance_sstitre\">dès 100€ d'achats</div>
                                    </div>


                            </div>
                            <div id=\"rassurance_expedition\" onclick=\"callColorBox('/popup_rassurance_expedition.php');\" style=\"width:22%;\" class=\"encart_rassurance\">
                                <div id=\"image_expedition\"></div>
                                <div class=\"text_rassurance_titre\">EXPÉDITION SOUS 24h
                                    <div class=\"text_rassurance_sstitre\">100% des articles en stock</div>
                                </div>
                            </div>

                    </div>

                </div>
                <!-- End bottomCouche -->
                
                
                <!-- Text Cols -->
\t\t<div class=\"cols\">
\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t<div class=\"col\">
\t\t\t\t<h3 class=\"ico ico1\">Donec imperdiet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
\t\t\t\t<p class=\"more\"><a href=\"#\" class=\"bul\">Lorem ipsum</a></p>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<h3 class=\"ico ico2\">Donec imperdiet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
\t\t\t\t<p class=\"more\"><a href=\"#\" class=\"bul\">Lorem ipsum</a></p>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<h3 class=\"ico ico3\">Donec imperdiet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
\t\t\t\t<p class=\"more\"><a href=\"#\" class=\"bul\">Lorem ipsum</a></p>
\t\t\t</div>
\t\t\t<div class=\"col col-last\">
\t\t\t\t<h3 class=\"ico ico4\">Donec imperdiet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
\t\t\t\t<p class=\"more\"><a href=\"#\" class=\"bul\">Lorem ipsum</a></p>
\t\t\t</div>
\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t</div>
\t\t<!-- End Text Cols -->
                
                <div id=\"footer\">
                        <p class=\"left\">
                                <a href=\"#\">Home</a>
                                <span>|</span>
                                <a href=\"#\">Support</a>
                                <span>|</span>
                                <a href=\"#\">My Account</a>
                                <span>|</span>
                                <a href=\"#\">The Store</a>
                                <span>|</span>
                                <a href=\"#\">Contact</a>
                        </p>
                        
                </div>
                <!-- End Footer -->

        </div>\t
        <!-- End Shell -->

    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Shop Moi";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "          ";
        // line 14
        echo "
        ";
    }

    // line 109
    public function block_Ariane($context, array $blocks = array())
    {
        echo " ";
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        // line 116
        echo "                    
                ";
    }

    public function getTemplateName()
    {
        return "::layoutGenerale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 116,  366 => 115,  360 => 109,  355 => 14,  353 => 13,  350 => 12,  344 => 9,  248 => 118,  246 => 115,  239 => 110,  235 => 109,  224 => 100,  219 => 97,  215 => 96,  213 => 95,  210 => 94,  205 => 91,  201 => 90,  199 => 89,  196 => 88,  191 => 86,  188 => 85,  182 => 84,  180 => 83,  177 => 82,  172 => 80,  169 => 79,  163 => 78,  161 => 77,  158 => 76,  153 => 74,  150 => 73,  144 => 72,  142 => 71,  139 => 70,  134 => 68,  131 => 67,  125 => 66,  123 => 65,  102 => 47,  94 => 42,  88 => 38,  82 => 36,  74 => 34,  72 => 33,  59 => 23,  55 => 22,  51 => 21,  44 => 16,  42 => 12,  38 => 11,  33 => 9,  26 => 4,  23 => 2,);
    }
}
