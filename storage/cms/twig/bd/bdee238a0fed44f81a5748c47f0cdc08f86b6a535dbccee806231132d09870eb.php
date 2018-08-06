<?php

/* /Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/layouts/default.htm */
class __TwigTemplate_d5dca07aca91f660833b2b2e151217a571e2c2422d3aaaf3b16e1c8002afadf6 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_description", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "keywords", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "keywords", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_keywords", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"/docs/4.1/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
        <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
        <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
        <link rel=\"manifest\" href=\"/docs/4.1/assets/img/favicons/manifest.json\">
        <link rel=\"mask-icon\" href=\"/docs/4.1/assets/img/favicons/safari-pinned-tab.svg\" color=\"#563d7c\">
        <link rel=\"icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/favicon.ico");
        echo "\">
        <meta name=\"msapplication-config\" content=\"/docs/4.1/assets/img/favicons/browserconfig.xml\">
        <meta name=\"theme-color\" content=\"#563d7c\">
        <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/css/app.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/src/fonts/pe-icon-set-interface/css/pe-icon-set-interface.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/src/fonts/pe-icon-set-interface/css/helper.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/src/fonts/pe-icon-set-edition/css/pe-icon-set-edition.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/src/fonts/pe-icon-set-edition/css/helper.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/src/fonts/time-icon-font/iconfont.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "        <title>";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo "</title>
    </head>
    <body class=\"layout-";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">
        <div id=\"site-header\" class=\"site-header\">
            ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        </div>
        <div id=\"site-content\" class=\"site-content\">
            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/content"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        </div>
        <div id=\"site-footer\" class=\"site-footer\">
            ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        </div>

        <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/js/app.js");
        echo "\"></script>
        ";
        // line 39
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 40
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 41
        echo "    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 41,  150 => 40,  143 => 39,  139 => 38,  135 => 36,  131 => 35,  127 => 33,  123 => 32,  119 => 30,  115 => 29,  108 => 27,  96 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  63 => 15,  54 => 9,  46 => 8,  38 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"{% if this.page.description %}{{ this.page.description }}{% else %}{{ this.theme.meta_description }}{% endif %}\">
        <meta name=\"keywords\" content=\"{% if this.page.keywords %}{{ this.page.keywords }}{% else %}{{ this.theme.meta_keywords }}{% endif %}\">
        <meta name=\"title\" content=\"{% if this.page.title %}{{ this.page.title }}{% else %}{{ this.theme.meta_title }}{% endif %}\">
        <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
        <link rel=\"apple-touch-icon\" href=\"/docs/4.1/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
        <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
        <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
        <link rel=\"manifest\" href=\"/docs/4.1/assets/img/favicons/manifest.json\">
        <link rel=\"mask-icon\" href=\"/docs/4.1/assets/img/favicons/safari-pinned-tab.svg\" color=\"#563d7c\">
        <link rel=\"icon\" href=\"{{ 'assets/dist/images/favicon.ico'|theme }}\">
        <meta name=\"msapplication-config\" content=\"/docs/4.1/assets/img/favicons/browserconfig.xml\">
        <meta name=\"theme-color\" content=\"#563d7c\">
        <link href=\"{{ 'assets/dist/css/app.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/src/fonts/pe-icon-set-interface/css/pe-icon-set-interface.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/src/fonts/pe-icon-set-interface/css/helper.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/src/fonts/pe-icon-set-edition/css/pe-icon-set-edition.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/src/fonts/pe-icon-set-edition/css/helper.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/src/fonts/time-icon-font/iconfont.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
        <title>{% if this.page.title %}{{ this.page.title }}{% else %}{{ this.theme.meta_title }}{% endif %} - {{ this.theme.website_name }}</title>
    </head>
    <body class=\"layout-{{ this.layout.id }} page-{{ this.page.id }}\">
        <div id=\"site-header\" class=\"site-header\">
            {% partial 'site/header' %}
        </div>
        <div id=\"site-content\" class=\"site-content\">
            {% partial 'site/content' %}
        </div>
        <div id=\"site-footer\" class=\"site-footer\">
            {% partial 'site/footer' %}
        </div>

        <script src=\"{{ 'assets/dist/js/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
    </body>

</html>", "/Users/tysonrude/Sites/greenapp/themes/sergeysukhorukov-bootstrapv4starterkit/layouts/default.htm", "");
    }
}
