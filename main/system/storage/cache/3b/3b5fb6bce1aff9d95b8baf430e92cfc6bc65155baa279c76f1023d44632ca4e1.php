<?php

/* mail/forgotten.twig */
class __TwigTemplate_439103d54490fa2037265e6f0f3f1dbbf683b584b20c9175fec3d23c8e41dc78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["text_greeting"]) ? $context["text_greeting"] : null);
        echo "

";
        // line 3
        echo (isset($context["text_change"]) ? $context["text_change"] : null);
        echo "

";
        // line 5
        echo (isset($context["reset"]) ? $context["reset"] : null);
        echo "

";
        // line 7
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo " 

";
        // line 9
        echo (isset($context["ip"]) ? $context["ip"] : null);
    }

    public function getTemplateName()
    {
        return "mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ text_greeting }}*/
/* */
/* {{ text_change }}*/
/* */
/* {{ reset }}*/
/* */
/* {{ text_ip }} */
/* */
/* {{ ip }}*/
