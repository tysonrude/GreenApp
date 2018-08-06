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
                <ul class=\"nav flex-column\">
                    <h4>Filter results</h4>
                    <p class=\"font-weight-bold mt-3\">Service date range</p>
                    
                </ul>
            </div>
            <div class=\"claims col-9\">
                <ul>
                    <li>";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card-processing"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                    <li>";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card-denied"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                    <li>";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card-info"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</li>
                    <li>";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/claims-card-approved"        , $context['__cms_partial_params']        , true        );
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
        return array (  55 => 16,  49 => 15,  43 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"d-flex align-items-center my-3\">
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-3\">
                <ul class=\"nav flex-column\">
                    <h4>Filter results</h4>
                    <p class=\"font-weight-bold mt-3\">Service date range</p>
                    
                </ul>
            </div>
            <div class=\"claims col-9\">
                <ul>
                    <li>{% partial 'components/claims-card-processing' %}</li>
                    <li>{% partial 'components/claims-card-denied' %}</li>
                    <li>{% partial 'components/claims-card-info' %}</li>
                    <li>{% partial 'components/claims-card-approved' %}</li>
                </ul>
                 
            </div>
        </div>
    </div>
</div>", "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/pages/claims.htm", "");
    }
}
