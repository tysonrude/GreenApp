<?php

/* /Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/pages/claims.htm */
class __TwigTemplate_88bb8d1961d3c205f7d5a49c46d49a382d104fb0ba1e44e1303387d628170855 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"d-flex align-items-center my-3\">
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-3\">
             
            </div>
            <div class=\"claims col-9\">
                <ul>
                    <li>";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                    <li>";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                    <li>";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                    <li>";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                </ul>
                 
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/pages/claims.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  45 => 11,  39 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"d-flex align-items-center my-3\">
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-3\">
             
            </div>
            <div class=\"claims col-9\">
                <ul>
                    <li>{% partial 'components/claims-card' %}</li>
                    <li>{% partial 'components/claims-card' %}</li>
                    <li>{% partial 'components/claims-card' %}</li>
                    <li>{% partial 'components/claims-card' %}</li>
                </ul>
                 
            </div>
        </div>
    </div>
</div>", "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/pages/claims.htm", "");
    }
}
