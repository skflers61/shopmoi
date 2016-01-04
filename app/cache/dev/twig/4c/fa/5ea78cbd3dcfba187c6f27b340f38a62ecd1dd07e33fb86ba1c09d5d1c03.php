<?php

/* SMHommesBundle::layoutHommes.html.twig */
class __TwigTemplate_4cfa5ea78cbd3dcfba187c6f27b340f38a62ecd1dd07e33fb86ba1c09d5d1c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::layoutGenerale.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'hommes_body' => array($this, 'block_hommes_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutGenerale.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "<link rel=\"stylesheet\"  type=\"text/css\" media=\"all\"   href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smhommes/css/styleHomme.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <!-- Navigation sous-menu  -->
        <div id=\"sous_menu\">
                <ul>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sm_site_homepage");
        echo "\" >Accueil</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sm_femmes_homepage");
        echo "\">Femmes111111111</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sm_hommes_homepage");
        echo "\">Hommes</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sm_enfants_homepage");
        echo "\">Enfant</a></li>
                    <li><a href=\"#\">Nouveautés</a></li>
                    <li><a href=\"#\">Soldes</a></li>
                </ul>
        </div>
    <!-- End Navigation -->
  ";
        // line 27
        echo "\t
\t<!-- Main -->
\t<div id=\"main\">
\t\t<div class=\"cl\">&nbsp;</div>
\t\tdiv
\t\t<!-- Content -->
\t\t<div id=\"content\">
\t\t\t
\t\t\t<!-- Content Slider -->
\t\t\t<div id=\"slider\" class=\"box\">
\t\t\t\t<div id=\"slider-holder\">
\t\t\t\t\t<ul>
\t\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"slider-nav\">
\t\t\t\t\t<a href=\"#\" class=\"active\">1</a>
\t\t\t\t\t<a href=\"#\">2</a>
\t\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t\t<a href=\"#\">4</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Content Slider -->
\t\t\t
\t\t\t<!-- Products -->
\t\t\t<div class=\"products\">
\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t<ul>
\t\t\t\t    <li>
\t\t\t\t    \t<a href=\"#\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/big1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t    \t<div class=\"product-info\">
\t\t\t\t    \t\t<h3>LOREM IPSUM</h3>
\t\t\t\t    \t\t<div class=\"product-desc\">
\t\t\t\t\t\t\t\t<h4>WOMEN’S</h4>
\t\t\t\t    \t\t\t<p>Lorem ipsum dolor sit<br />amet</p>
\t\t\t\t    \t\t\t<strong class=\"price\">\$58.99</strong>
\t\t\t\t    \t\t</div>
\t\t\t\t    \t</div>
\t\t\t    \t</li>
\t\t\t    \t<li>
\t\t\t\t    \t<a href=\"#\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/big1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t    \t<div class=\"product-info\">
\t\t\t\t    \t\t<h3>LOREM IPSUM</h3>
\t\t\t\t    \t\t<div class=\"product-desc\">
\t\t\t\t\t\t\t\t<h4>WOMEN’S</h4>
\t\t\t\t    \t\t\t<p>Lorem ipsum dolor sit<br />amet</p>
\t\t\t\t    \t\t\t<strong class=\"price\">\$58.99</strong>
\t\t\t\t    \t\t</div>
\t\t\t\t    \t</div>
\t\t\t    \t</li>
\t\t\t    \t<li class=\"last\">
\t\t\t\t    \t<a href=\"#\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/big1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t    \t<div class=\"product-info\">
\t\t\t\t    \t\t<h3>LOREM IPSUM</h3>
\t\t\t\t    \t\t<div class=\"product-desc\">
\t\t\t\t\t\t\t\t<h4>WOMEN’S</h4>
\t\t\t\t    \t\t\t<p>Lorem ipsum dolor sit<br />amet</p>
\t\t\t\t    \t\t\t<strong class=\"price\">\$58.99</strong>
\t\t\t\t    \t\t</div>
\t\t\t\t    \t</div>
\t\t\t    \t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t</div>
\t\t\t<!-- End Products -->
\t\t\t
\t\t</div>
\t\t<!-- End Content -->
\t\t
\t\t<!-- Sidebar -->
\t\t<div id=\"sidebar\">
\t\t\t
\t\t\t<!-- Search -->
\t\t\t<div class=\"box search\">
\t\t\t\t<h2>Recherche <span></span></h2>
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t
\t\t\t\t\t\t<label>Mots-cléfs</label>
\t\t\t\t\t\t<input type=\"text\" class=\"field\" />
\t\t\t\t\t\t
\t\t\t\t\t\t<label>Catégories</label>
\t\t\t\t\t\t<select class=\"field\">
\t\t\t\t\t\t\t<option value=\"\">-- Selectionner Categorie --</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"inline-field\">
\t\t\t\t\t\t\t<label>Prix</label>
\t\t\t\t\t\t\t<select class=\"field small-field\">
\t\t\t\t\t\t\t\t<option value=\"\">\$10</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label>à:</label>
\t\t\t\t\t\t\t<select class=\"field small-field\">
\t\t\t\t\t\t\t\t<option value=\"\">\$50</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"submit\" class=\"search-submit\" value=\"Search\" />
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"bul\">rcherche avancée</a><br />
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Search -->
\t\t\t
\t\t\t<!-- Categories -->
\t\t\t<div class=\"box categories\">
\t\t\t\t<h2>Categories <span></span></h2>
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t<ul>
\t\t\t\t\t    <li><a href=\"#\">Category 1</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 2</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 3</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 4</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 5</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 6</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 7</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 8</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 9</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 10</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 11</a></li>
\t\t\t\t\t    <li><a href=\"#\">Category 12</a></li>
\t\t\t\t\t    <li class=\"last\"><a href=\"#\">Category 13</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Categories -->
\t\t\t
\t\t</div>
\t\t<!-- End Sidebar -->
\t\t
\t\t<div class=\"cl\">&nbsp;</div>
\t</div>
\t<!-- End Main -->
\t
\t<!-- Side Full -->
\t<div class=\"side-full\">
\t\t
\t\t<!-- More Products -->
\t\t<div class=\"more-products\">
\t\t\t<div class=\"more-products-holder\">
\t\t\t\t<ul>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small7.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small7.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t    <li class=\"last\"><a href=\"#\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/images/small7.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"more-nav\">
\t\t\t\t<a href=\"#\" class=\"prev\">previous</a>
\t\t\t\t<a href=\"#\" class=\"next\">next</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- End More Products -->
\t\t
\t\t<!-- Text Cols -->
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
\t\t
\t</div>
\t<!-- End Side Full -->
\t

\t
\t


  ";
        // line 242
        echo "  ";
        $this->displayBlock('hommes_body', $context, $blocks);
        // line 244
        echo "
";
    }

    // line 242
    public function block_hommes_body($context, array $blocks = array())
    {
        // line 243
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SMHommesBundle::layoutHommes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 243,  396 => 242,  391 => 244,  388 => 242,  340 => 196,  336 => 195,  332 => 194,  328 => 193,  324 => 192,  320 => 191,  316 => 190,  312 => 189,  308 => 188,  304 => 187,  300 => 186,  296 => 185,  292 => 184,  288 => 183,  284 => 182,  280 => 181,  276 => 180,  272 => 179,  268 => 178,  264 => 177,  260 => 176,  162 => 81,  148 => 70,  134 => 59,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  88 => 27,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  62 => 14,  59 => 13,  52 => 10,  49 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
