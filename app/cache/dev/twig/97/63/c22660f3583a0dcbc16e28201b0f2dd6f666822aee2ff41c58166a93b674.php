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
        echo "    <div id=\"blockImages\">
        ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images"))) > 5)) {
            // line 18
            echo "            <!--<a href=\"#\"><div id=\"fleche\"/></div></a>-->
            <div class=\"colonne-nav\">
                    <a href=\"#\" class=\"prev\"></a>

            </div>
        ";
        }
        // line 24
        echo "        <div id=\"colonneImages\" >
            <div class=\"colonne-products\">
            <div class=\"colonne-products-holder\">
            <ul>    
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            echo "
                    ";
            // line 30
            if (($this->getAttribute($context["image"], "resolution", array()) == "75x75")) {
                // line 31
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("" . $this->getAttribute($context["image"], "adresse", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), 0, array()), "alt", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "nomImage", array()), "html", null, true);
                echo "\" values=\"null\" class=\"imagescol\"/></li>

                    ";
            }
            // line 34
            echo "                ";
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
        // line 41
        if ((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images"))) > 5)) {
            // line 42
            echo "            <!--<a href=\"#\"><div id=\"fleche\"/></div></a>-->
            <div class=\"colonne-nav\">

                    <a href=\"#\" class=\"next\"></a>
            </div>
        ";
        }
        // line 48
        echo "    </div>
    
    ";
        // line 50
        $context["image1"] = 0;
        // line 51
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 52
            echo "        ";
            if ((twig_in_filter($this->getAttribute($context["image"], "resolution", array()), array(0 => "1200x1200", 1 => "1400x1400", 2 => "1500x1500")) && (is_string($__internal_5e12e7f51a619993fffed423a2d31717d27be930ff7d566b96eca95417f292bc = $this->getAttribute($context["image"], "nomImage", array())) && is_string($__internal_8b0be9700e77b79f3df76c0295de2725837bf2120dee8e160793f2342d52ede0 = "av_") && ('' === $__internal_8b0be9700e77b79f3df76c0295de2725837bf2120dee8e160793f2342d52ede0 || 0 === strpos($__internal_5e12e7f51a619993fffed423a2d31717d27be930ff7d566b96eca95417f292bc, $__internal_8b0be9700e77b79f3df76c0295de2725837bf2120dee8e160793f2342d52ede0))))) {
                // line 53
                echo "            ";
                $context["image1"] = $this->getAttribute($context["image"], "adresse", array());
                // line 54
                echo "        ";
            }
            // line 55
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    
    <img id=\"imagePrincipale\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("" . (isset($context["image1"]) ? $context["image1"] : $this->getContext($context, "image1")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), 0, array()), "alt", array()), "html", null, true);
        echo "\" />
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
        return array (  162 => 57,  159 => 56,  153 => 55,  150 => 54,  147 => 53,  144 => 52,  139 => 51,  137 => 50,  133 => 48,  125 => 42,  123 => 41,  109 => 34,  98 => 31,  96 => 30,  93 => 29,  89 => 28,  83 => 24,  75 => 18,  73 => 17,  70 => 16,  67 => 15,  62 => 12,  59 => 11,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
