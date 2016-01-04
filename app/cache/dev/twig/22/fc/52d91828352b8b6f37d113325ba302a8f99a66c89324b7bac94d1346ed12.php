<?php

/* SMHommesBundle:Default:index.html.twig */
class __TwigTemplate_22fc52d91828352b8b6f37d113325ba302a8f99a66c89324b7bac94d1346ed12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SMHommesBundle::layoutHommes.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'hommes_body' => array($this, 'block_hommes_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMHommesBundle::layoutHommes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hommes_body($context, array $blocks = array())
    {
        // line 4
        echo "    

";
    }

    public function getTemplateName()
    {
        return "SMHommesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
