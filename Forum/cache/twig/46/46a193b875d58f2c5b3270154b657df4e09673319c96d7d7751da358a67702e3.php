<?php

/* simple_header.html */
class __TwigTemplate_a74c1c0ea6947103e1a5a1ca9469e9032b8dd5276cfe32290b7223a4580a2fd8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo "\" lang=\"";
        if (isset($context["S_USER_LANG"])) { $_S_USER_LANG_ = $context["S_USER_LANG"]; } else { $_S_USER_LANG_ = null; }
        echo $_S_USER_LANG_;
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        echo $_META_;
        echo "
<title>";
        // line 8
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo " &bull; ";
        if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
        if (isset($context["S_IN_UCP"])) { $_S_IN_UCP_ = $context["S_IN_UCP"]; } else { $_S_IN_UCP_ = null; }
        if ($_S_IN_MCP_) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " &bull; ";
        } elseif ($_S_IN_UCP_) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " &bull; ";
        }
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</title>

";
        // line 10
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            // line 11
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 26
        echo "<link href=\"";
        if (isset($context["T_STYLESHEET_LINK"])) { $_T_STYLESHEET_LINK_ = $context["T_STYLESHEET_LINK"]; } else { $_T_STYLESHEET_LINK_ = null; }
        echo $_T_STYLESHEET_LINK_;
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        if (isset($context["T_STYLESHEET_LANG_LINK"])) { $_T_STYLESHEET_LANG_LINK_ = $context["T_STYLESHEET_LANG_LINK"]; } else { $_T_STYLESHEET_LANG_LINK_ = null; }
        echo $_T_STYLESHEET_LANG_LINK_;
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 28
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/responsive.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">

";
        // line 30
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        if (($_S_CONTENT_DIRECTION_ == "rtl")) {
            // line 31
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/bidi.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 33
        echo "
<!--[if lte IE 8]>
\t<link href=\"";
        // line 35
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/tweaks.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 38
        if (isset($context["POPUP"])) { $_POPUP_ = $context["POPUP"]; } else { $_POPUP_ = null; }
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 39
        echo "
";
        // line 40
        if (isset($context["simple_header_head_append"])) { $_simple_header_head_append_ = $context["simple_header_head_append"]; } else { $_simple_header_head_append_ = null; }
        // line 41
        echo "
";
        // line 42
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS", array());
        echo "

";
        // line 44
        if (isset($context["simple_header_stylesheets_after"])) { $_simple_header_stylesheets_after_ = $context["simple_header_stylesheets_after"]; } else { $_simple_header_stylesheets_after_ = null; }
        // line 45
        echo "
</head>

<body id=\"phpbb\" class=\"nojs ";
        // line 48
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo "\">

";
        // line 50
        if (isset($context["simple_header_body_before"])) { $_simple_header_body_before_ = $context["simple_header_body_before"]; } else { $_simple_header_body_before_ = null; }
        // line 51
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-body\" role=\"main\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 51,  158 => 50,  149 => 48,  144 => 45,  142 => 44,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  124 => 38,  114 => 35,  110 => 33,  100 => 31,  97 => 30,  88 => 28,  83 => 27,  77 => 26,  60 => 11,  57 => 10,  39 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* {META}*/
/* <title>{SITENAME} &bull; <!-- IF S_IN_MCP -->{L_MCP} &bull; <!-- ELSEIF S_IN_UCP -->{L_UCP} &bull; <!-- ENDIF -->{PAGE_TITLE}</title>*/
/* */
/* <!-- IF S_ALLOW_CDN -->*/
/* <script>*/
/* 	WebFontConfig = {*/
/* 		google: {*/
/* 			families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 		}*/
/* 	};*/
/* */
/* 	(function(d) {*/
/* 		var wf = d.createElement('script'), s = d.scripts[0];*/
/* 		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 		wf.async = true;*/
/* 		s.parentNode.insertBefore(wf, s);*/
/* 	})(document);*/
/* </script>*/
/* <!-- ENDIF -->*/
/* <link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* <link href="{T_STYLESHEET_LANG_LINK}" rel="stylesheet">*/
/* <link href="{T_THEME_PATH}/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* */
/* <!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 	<link href="{T_THEME_PATH}/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!--[if lte IE 8]>*/
/* 	<link href="{T_THEME_PATH}/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <![endif]-->*/
/* */
/* <!-- DEFINE $POPUP = 1 -->*/
/* */
/* <!-- EVENT simple_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT simple_header_stylesheets_after -->*/
/* */
/* </head>*/
/* */
/* <body id="phpbb" class="nojs {S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* */
/* <!-- EVENT simple_header_body_before -->*/
/* */
/* <div id="wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* 	<div id="page-body" role="main">*/
/* */
