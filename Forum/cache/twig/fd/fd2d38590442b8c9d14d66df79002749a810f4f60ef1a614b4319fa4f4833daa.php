<?php

/* simple_header.html */
class __TwigTemplate_86516ac3ac1552ec675335585a4f35e5ef56a3860065ce72f165ea4ac0d51954 extends Twig_Template
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
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        if ($_META_) {
            if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
            echo $_META_;
        }
        // line 8
        echo "<title>";
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 10
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 15
        if (isset($context["CURRENT_PAGE"])) { $_CURRENT_PAGE_ = $context["CURRENT_PAGE"]; } else { $_CURRENT_PAGE_ = null; }
        echo $_CURRENT_PAGE_;
        echo "';
var per_page = '";
        // line 16
        if (isset($context["PER_PAGE"])) { $_PER_PAGE_ = $context["PER_PAGE"]; } else { $_PER_PAGE_ = null; }
        echo $_PER_PAGE_;
        echo "';
var base_url = '";
        // line 17
        if (isset($context["BASE_URL"])) { $_BASE_URL_ = $context["BASE_URL"]; } else { $_BASE_URL_ = null; }
        echo twig_escape_filter($this->env, $_BASE_URL_, "js");
        echo "';

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id);
\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

// ]]>
</script>
";
        // line 87
        if (isset($context["acp_simple_header_head_append"])) { $_acp_simple_header_head_append_ = $context["acp_simple_header_head_append"]; } else { $_acp_simple_header_head_append_ = null; }
        // line 88
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS", array());
        echo "
";
        // line 89
        if (isset($context["acp_simple_header_stylesheets_after"])) { $_acp_simple_header_stylesheets_after_ = $context["acp_simple_header_stylesheets_after"]; } else { $_acp_simple_header_stylesheets_after_ = null; }
        // line 90
        echo "</head>

<body class=\"";
        // line 92
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo "\">

";
        // line 94
        if (isset($context["acp_simple_header_body_before"])) { $_acp_simple_header_body_before_ = $context["acp_simple_header_body_before"]; } else { $_acp_simple_header_body_before_ = null; }
        // line 95
        echo "
<div id=\"page-body\" class=\"simple-page-body\">
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
        return array (  168 => 95,  166 => 94,  157 => 92,  153 => 90,  151 => 89,  146 => 88,  144 => 87,  70 => 17,  65 => 16,  60 => 15,  55 => 14,  47 => 10,  40 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* <!-- IF META -->{META}<!-- ENDIF -->*/
/* <title>{PAGE_TITLE}</title>*/
/* */
/* <link href="style/admin.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" />*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* var jump_page = '{LA_JUMP_PAGE}{L_COLON}';*/
/* var on_page = '{CURRENT_PAGE}';*/
/* var per_page = '{PER_PAGE}';*/
/* var base_url = '{BASE_URL|e('js')}';*/
/* */
/* /***/
/* * Window popup*/
/* *//* */
/* function popup(url, width, height, name)*/
/* {*/
/* 	if (!name)*/
/* 	{*/
/* 		name = '_popup';*/
/* 	}*/
/* */
/* 	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);*/
/* 	return false;*/
/* }*/
/* */
/* /***/
/* * Jump to page*/
/* *//* */
/* function jumpto()*/
/* {*/
/* 	var page = prompt(jump_page, on_page);*/
/* */
/* 	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)*/
/* 	{*/
/* 		if (base_url.indexOf('?') == -1)*/
/* 		{*/
/* 			document.location.href = base_url + '?start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Mark/unmark checkboxes*/
/* * id = ID of parent container, name = name prefix, state = state [true/false]*/
/* *//* */
/* function marklist(id, name, state)*/
/* {*/
/* 	var parent = document.getElementById(id);*/
/* 	if (!parent)*/
/* 	{*/
/* 		return;*/
/* 	}*/
/* */
/* 	var rb = parent.getElementsByTagName('input');*/
/* 	*/
/* 	for (var r = 0; r < rb.length; r++)*/
/* 	{*/
/* 		if (rb[r].name.substr(0, name.length) == name)*/
/* 		{*/
/* 			rb[r].checked = state;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Find a member*/
/* *//* */
/* function find_username(url)*/
/* {*/
/* 	popup(url, 760, 570, '_usersearch');*/
/* 	return false;*/
/* }*/
/* */
/* // ]]>*/
/* </script>*/
/* <!-- EVENT acp_simple_header_head_append -->*/
/* {$STYLESHEETS}*/
/* <!-- EVENT acp_simple_header_stylesheets_after -->*/
/* </head>*/
/* */
/* <body class="{S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* */
/* <!-- EVENT acp_simple_header_body_before -->*/
/* */
/* <div id="page-body" class="simple-page-body">*/
/* */
