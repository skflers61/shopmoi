<?php

/* SMFemmesBundle::layout.html.twig */
class __TwigTemplate_7d0bab65b47111f382592266153947445e3abd14e13a4b4579b1807bf36eae36 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'femmes_body' => array($this, 'block_femmes_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "
  ";
        // line 14
        echo "  ";
        $this->displayBlock('femmes_body', $context, $blocks);
        // line 16
        echo "
";
    }

    // line 14
    public function block_femmes_body($context, array $blocks = array())
    {
        // line 15
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SMFemmesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  65 => 14,  60 => 16,  57 => 14,  54 => 12,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}
