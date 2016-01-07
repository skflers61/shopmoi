<?php

/* SMSiteBundle:Produit:produit.html.twig */
class __TwigTemplate_9763c22660f3583a0dcbc16e28201b0f2dd6f666822aee2ff41c58166a93b674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layoutGenerale.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'Ariane' => array($this, 'block_Ariane'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\"  type=\"text/css\" media=\"all\"   href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smsite/css/produit.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_Ariane($context, array $blocks = array())
    {
        // line 12
        echo "  Produit
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div id=\"contenu\">
        <div id=\"blockImages\">
            ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images"))) > 5)) {
            // line 19
            echo "                <!--<a href=\"#\"><div id=\"fleche\"/></div></a>-->
                <div class=\"colonne-nav\">
                        <a href=\"#\" class=\"prev\"></a>

                </div>
            ";
        }
        // line 25
        echo "            <div id=\"colonneImages\" >
                <div class=\"colonne-products\">
                <div class=\"colonne-products-holder\">
                <ul>    
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "
                        ";
            // line 31
            if (($this->getAttribute($context["image"], "resolution", array()) == "75x75")) {
                // line 32
                echo "                            <li><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("" . $this->getAttribute($context["image"], "adresse", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), 0, array()), "alt", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "nomImage", array()), "html", null, true);
                echo "\" values=\"null\" class=\"imagescol\"/></li>

                        ";
            }
            // line 35
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "      
                </ul>
                </div>


                </div>
            </div>
            ";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images"))) > 5)) {
            // line 43
            echo "                <!--<a href=\"#\"><div id=\"fleche\"/></div></a>-->
                <div class=\"colonne-nav\">

                        <a href=\"#\" class=\"next\"></a>
                </div>
            ";
        }
        // line 49
        echo "        </div>

        ";
        // line 51
        $context["image1"] = 0;
        // line 52
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 53
            echo "            ";
            if ((twig_in_filter($this->getAttribute($context["image"], "resolution", array()), array(0 => "1200x1200", 1 => "1400x1400", 2 => "1500x1500")) && (is_string($__internal_925c339328adc75a406dc00e2b77e9e2f3fafb57739eb55f7aed5275bb26c26c = $this->getAttribute($context["image"], "nomImage", array())) && is_string($__internal_9734333cf8119d3cc6618f04dc354d67d6e2c635c22d340267bcdfbf920586cb = "av_") && ('' === $__internal_9734333cf8119d3cc6618f04dc354d67d6e2c635c22d340267bcdfbf920586cb || 0 === strpos($__internal_925c339328adc75a406dc00e2b77e9e2f3fafb57739eb55f7aed5275bb26c26c, $__internal_9734333cf8119d3cc6618f04dc354d67d6e2c635c22d340267bcdfbf920586cb))))) {
                // line 54
                echo "                ";
                $context["image1"] = $this->getAttribute($context["image"], "adresse", array());
                // line 55
                echo "            ";
            }
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        <img id=\"imagePrincipale\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("" . (isset($context["image1"]) ? $context["image1"] : $this->getContext($context, "image1")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), 0, array()), "alt", array()), "html", null, true);
        echo "\" />

        <div id=\"description\">
            <div id=\"marque\">
                ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "marque", array()), "nom", array()), "html", null, true);
        echo "
            </div>
            <div id=\"prix\">
                ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "
            </div>
            <div id=\"logoMarque\">
                <img id=\"LogoMarque\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "marque", array()), "logoAdresse", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), 0, array()), "alt", array()), "html", null, true);
        echo "\" />
            </div>
            <div id=\"taille\">

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SMSiteBundle:Produit:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  178 => 65,  172 => 62,  163 => 58,  160 => 57,  154 => 56,  151 => 55,  148 => 54,  145 => 53,  140 => 52,  138 => 51,  134 => 49,  126 => 43,  124 => 42,  110 => 35,  99 => 32,  97 => 31,  94 => 30,  90 => 29,  84 => 25,  76 => 19,  74 => 18,  70 => 16,  67 => 15,  62 => 12,  59 => 11,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
