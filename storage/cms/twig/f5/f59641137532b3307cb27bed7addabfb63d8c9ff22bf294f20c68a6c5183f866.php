<?php

/* /Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/partials/components/claims-card-info.htm */
class __TwigTemplate_2af84e7d459b50f1c21f1dfbc457f04560988fd00ffe1a727d346dafd548b69b extends Twig_Template
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
        echo "<div class=\"d-flex flex-row claim\">
    <div class=\"bg-light claim-left\">
        <div class=\"py-1 info\">
            <div class=\"d-flex flex-row\">
                <i class=\"pe-is-i-warning-triangle text-warning p-0\"></i>
                <p class=\"ml-2\">Awaiting info</p>
            </div>
        </div>

        <div class=\"py-2 info\">
            <div class=\"d-flex flex-row\">
                <p class=\"py-2 mb-0\">Mar 28, 2017</p>
            </div>
        </div>

        <div class=\"py-3 info-last\">      
                <h6>You may owe</h6>
                <p>\$45.00</p>
        </div>

    </div>
    <div class=\"claim-right bg-light p-0\">
        <div class=\"claim-content\">
            <h4 class=\"card-title\">Sam</h4>
            <p class=\"card-text\">This claim contains protected health information. Please contact customer service for more information.</p>
            <h6 class=\"card-subtitle mb-2\">Spectrum Health</h6>
        </div>
        <div class=\"claim-go\">
            <i class=\"pe-is-e-lock-2-f p-0 claim-lock\"></i>
        </div>
      
        <div class=\"claim-right-bottom\">
                <div class=\"d-flex flex-row\">
                        <i class=\"pe-is-i-download-square text-secondary p-0 invisible\"></i>
                        <p class=\"ml-2 text-secondary invisible\">Download EOB</p>
                    </div>
        </div>
    </div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/partials/components/claims-card-info.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"d-flex flex-row claim\">
    <div class=\"bg-light claim-left\">
        <div class=\"py-1 info\">
            <div class=\"d-flex flex-row\">
                <i class=\"pe-is-i-warning-triangle text-warning p-0\"></i>
                <p class=\"ml-2\">Awaiting info</p>
            </div>
        </div>

        <div class=\"py-2 info\">
            <div class=\"d-flex flex-row\">
                <p class=\"py-2 mb-0\">Mar 28, 2017</p>
            </div>
        </div>

        <div class=\"py-3 info-last\">      
                <h6>You may owe</h6>
                <p>\$45.00</p>
        </div>

    </div>
    <div class=\"claim-right bg-light p-0\">
        <div class=\"claim-content\">
            <h4 class=\"card-title\">Sam</h4>
            <p class=\"card-text\">This claim contains protected health information. Please contact customer service for more information.</p>
            <h6 class=\"card-subtitle mb-2\">Spectrum Health</h6>
        </div>
        <div class=\"claim-go\">
            <i class=\"pe-is-e-lock-2-f p-0 claim-lock\"></i>
        </div>
      
        <div class=\"claim-right-bottom\">
                <div class=\"d-flex flex-row\">
                        <i class=\"pe-is-i-download-square text-secondary p-0 invisible\"></i>
                        <p class=\"ml-2 text-secondary invisible\">Download EOB</p>
                    </div>
        </div>
    </div>
    
</div>", "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/partials/components/claims-card-info.htm", "");
    }
}
