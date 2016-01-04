<?php

/* SMEnfantsBundle:Default:index.html.twig */
class __TwigTemplate_07a606953d37feabd389e4611efa4559e5cbfde84440ddfd241a8cba31f01639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SMEnfantsBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'enfants_body' => array($this, 'block_enfants_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMEnfantsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_enfants_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMEnfantsBundle:Default:index.html.twig";
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
