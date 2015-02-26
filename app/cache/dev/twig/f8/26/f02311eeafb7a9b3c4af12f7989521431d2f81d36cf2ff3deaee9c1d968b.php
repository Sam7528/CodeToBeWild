<?php

/* CodeToBeWildMapBundle:Default:index.html.twig */
class __TwigTemplate_f826f02311eeafb7a9b3c4af12f7989521431d2f81d36cf2ff3deaee9c1d968b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CodeToBeWildMap/css/homepage.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <p>Accueil</p>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("candidats_show");
        echo "\">blabla</a>

    <a class=\"twitter-timeline\" href=\"https://twitter.com/WildCodeSchool\" data-widget-id=\"570620543062515712\">Tweets de @WildCodeSchool</a>
    <a href=\"https://twitter.com/intent/tweet?button_hashtag=CodeToBeWild\" class=\"twitter-hashtag-button\" data-size=\"large\" data-related=\"WildCodeSchool\">Tweet #project</a>

    <a href=\"https://twitter.com/WildCodeSchool\" class=\"twitter-follow-button\" data-show-count=\"true\">Suivre sur twitter</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class=\"fb-like\" data-href=\"https://www.facebook.com/wildcodeschool\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>

    <div class=\"fb-comments\" data-href=\"https://www.facebook.com/wildcodeschool?fref=photo\" data-numposts=\"10\" data-colorscheme=\"dark\"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '916695215037793',
                xfbml      : true,
                version    : 'v2.2'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
";
    }

    public function getTemplateName()
    {
        return "CodeToBeWildMapBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
