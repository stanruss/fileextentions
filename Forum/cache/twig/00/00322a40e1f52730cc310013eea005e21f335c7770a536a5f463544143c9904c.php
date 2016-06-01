<?php

/* viewtopic_print.html */
class __TwigTemplate_041e76a3f12682ae29559e74f21a546a00ffc4b4d05475db69965007bae72c84 extends Twig_Template
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
<meta name=\"robots\" content=\"noindex\" />
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
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</title>

<link href=\"";
        // line 10
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/print.css\" rel=\"stylesheet\">
";
        // line 11
        if (isset($context["viewtopic_print_head_append"])) { $_viewtopic_print_head_append_ = $context["viewtopic_print_head_append"]; } else { $_viewtopic_print_head_append_ = null; }
        // line 12
        echo "</head>
<body id=\"phpbb\">
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>

\t<div id=\"page-header\">
\t\t<h1>";
        // line 18
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "</h1>
\t\t<p>";
        // line 19
        if (isset($context["SITE_DESCRIPTION"])) { $_SITE_DESCRIPTION_ = $context["SITE_DESCRIPTION"]; } else { $_SITE_DESCRIPTION_ = null; }
        echo $_SITE_DESCRIPTION_;
        echo "<br /><a href=\"";
        if (isset($context["U_FORUM"])) { $_U_FORUM_ = $context["U_FORUM"]; } else { $_U_FORUM_ = null; }
        echo $_U_FORUM_;
        echo "\">";
        if (isset($context["U_FORUM"])) { $_U_FORUM_ = $context["U_FORUM"]; } else { $_U_FORUM_ = null; }
        echo $_U_FORUM_;
        echo "</a></p>

\t\t<h2>";
        // line 21
        if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
        echo $_TOPIC_TITLE_;
        echo "</h2>
\t\t<p><a href=\"";
        // line 22
        if (isset($context["U_TOPIC"])) { $_U_TOPIC_ = $context["U_TOPIC"]; } else { $_U_TOPIC_ = null; }
        echo $_U_TOPIC_;
        echo "\">";
        if (isset($context["U_TOPIC"])) { $_U_TOPIC_ = $context["U_TOPIC"]; } else { $_U_TOPIC_ = null; }
        echo $_U_TOPIC_;
        echo "</a></p>
\t</div>

\t<div id=\"page-body\">
\t\t<div class=\"page-number\">";
        // line 26
        if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
        echo $_PAGE_NUMBER_;
        echo "</div>
\t\t";
        // line 27
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 28
            echo "\t\t\t<div class=\"post\">
\t\t\t\t<h3>";
            // line 29
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_SUBJECT", array());
            echo "</h3>
\t\t\t\t<div class=\"date\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_DATE", array());
            echo "</strong></div>
\t\t\t\t<div class=\"author\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_AUTHOR", array());
            echo "</strong></div>
\t\t\t\t<div class=\"content\">";
            // line 32
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "MESSAGE", array());
            echo "</div>
\t\t\t</div>
\t\t\t<hr />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>

\t<div id=\"page-footer\">
\t\t<div class=\"page-number\">";
        // line 39
        if (isset($context["S_TIMEZONE"])) { $_S_TIMEZONE_ = $context["S_TIMEZONE"]; } else { $_S_TIMEZONE_ = null; }
        echo $_S_TIMEZONE_;
        echo "<br />";
        if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
        echo $_PAGE_NUMBER_;
        echo "</div>
\t\t<div class=\"copyright\">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
\t</div>
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "viewtopic_print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  140 => 36,  129 => 32,  122 => 31,  114 => 30,  109 => 29,  106 => 28,  101 => 27,  96 => 26,  85 => 22,  80 => 21,  68 => 19,  63 => 18,  55 => 12,  53 => 11,  48 => 10,  39 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="robots" content="noindex" />*/
/* {META}*/
/* <title>{SITENAME} &bull; {PAGE_TITLE}</title>*/
/* */
/* <link href="{T_THEME_PATH}/print.css" rel="stylesheet">*/
/* <!-- EVENT viewtopic_print_head_append -->*/
/* </head>*/
/* <body id="phpbb">*/
/* <div id="wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* */
/* 	<div id="page-header">*/
/* 		<h1>{SITENAME}</h1>*/
/* 		<p>{SITE_DESCRIPTION}<br /><a href="{U_FORUM}">{U_FORUM}</a></p>*/
/* */
/* 		<h2>{TOPIC_TITLE}</h2>*/
/* 		<p><a href="{U_TOPIC}">{U_TOPIC}</a></p>*/
/* 	</div>*/
/* */
/* 	<div id="page-body">*/
/* 		<div class="page-number">{PAGE_NUMBER}</div>*/
/* 		<!-- BEGIN postrow -->*/
/* 			<div class="post">*/
/* 				<h3>{postrow.POST_SUBJECT}</h3>*/
/* 				<div class="date">{L_POSTED}{L_COLON} <strong>{postrow.POST_DATE}</strong></div>*/
/* 				<div class="author">{L_POST_BY_AUTHOR} <strong>{postrow.POST_AUTHOR}</strong></div>*/
/* 				<div class="content">{postrow.MESSAGE}</div>*/
/* 			</div>*/
/* 			<hr />*/
/* 		<!-- END postrow -->*/
/* 	</div>*/
/* */
/* 	<div id="page-footer">*/
/* 		<div class="page-number">{S_TIMEZONE}<br />{PAGE_NUMBER}</div>*/
/* 		<div class="copyright">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
