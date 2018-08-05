<?php

/* /Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/partials/site/footer.htm */
class __TwigTemplate_0c5cec5d5d03761abd90e5fbbd51c49d7349b5e425d8103fc7bd6d89eceae1d9 extends Twig_Template
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
        echo "<div class=\"footer-above\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\"></div>
        </div>
    </div>
</div>

<div class=\"footer-below\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"copyright text-center\">
                    <small class=\"text-muted\">&copy; ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</small>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-above\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\"></div>
        </div>
    </div>
</div>

<div class=\"footer-below\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"copyright text-center\">
                    <small class=\"text-muted\">&copy; {{ this.theme.website_name }} {{ \"now\"|date(\"Y\") }}</small>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/partials/site/footer.htm", "");
    }
}
