<?php

/* SMFemmesBundle:Default:index.html.twig */
class __TwigTemplate_320bc3581170bf47f019bba55cdbe8a031dab194fd401462b3997297db22e837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SMFemmesBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'femmes_body' => array($this, 'block_femmes_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFemmesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_femmes_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMFemmesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  11 => 1,);
    }
}
