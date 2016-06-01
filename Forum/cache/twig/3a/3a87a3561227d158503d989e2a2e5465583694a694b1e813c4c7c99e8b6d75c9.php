<?php

/* mcp_front.html */
class __TwigTemplate_0339c56792dd0864e83c97f448f5beb4add2a9640b6d58a44e52e9dd529c178e extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</h2>

";
        // line 5
        if (isset($context["mcp_front_latest_unapproved_before"])) { $_mcp_front_latest_unapproved_before_ = $context["mcp_front_latest_unapproved_before"]; } else { $_mcp_front_latest_unapproved_before_ = null; }
        // line 6
        echo "
";
        // line 7
        if (isset($context["S_SHOW_UNAPPROVED"])) { $_S_SHOW_UNAPPROVED_ = $context["S_SHOW_UNAPPROVED"]; } else { $_S_SHOW_UNAPPROVED_ = null; }
        if ($_S_SHOW_UNAPPROVED_) {
            // line 8
            echo "
\t<form id=\"mcp_queue\" method=\"post\" action=\"";
            // line 9
            if (isset($context["S_MCP_QUEUE_ACTION"])) { $_S_MCP_QUEUE_ACTION_ = $context["S_MCP_QUEUE_ACTION"]; } else { $_S_MCP_QUEUE_ACTION_ = null; }
            echo $_S_MCP_QUEUE_ACTION_;
            echo "\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("LATEST_UNAPPROVED");
            echo "</h3>
\t\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("UNAPPROVED_TOTAL");
            echo "</p>

\t\t";
            // line 17
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "unapproved", array()))) {
                // line 18
                echo "\t\t\t<ul class=\"topiclist missing-column\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t\t";
                // line 28
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "unapproved", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 29
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    if (($this->getAttribute($_unapproved_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 33
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "U_POST_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "SUBJECT", array());
                    echo "</a> ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 34
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "AUTHOR_FULL", array());
                    echo " &raquo; ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "POST_TIME", array());
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\"><span>
\t\t\t\t\t\t";
                    // line 38
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "U_TOPIC", array());
                    echo "\">";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "TOPIC_TITLE", array());
                    echo "</a> [<a href=\"";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "U_MCP_TOPIC", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("MODERATE");
                    echo "</a>]<br />
\t\t\t\t\t\t";
                    // line 39
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    if ($this->getAttribute($_unapproved_, "U_FORUM", array())) {
                        echo "<a href=\"";
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "U_FORUM", array());
                        echo "\">";
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "FORUM_NAME", array());
                    }
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    if ($this->getAttribute($_unapproved_, "U_MCP_FORUM", array())) {
                        echo " [<a href=\"";
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "U_MCP_FORUM", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("MODERATE");
                        echo "</a>]";
                    }
                    echo "</span>
\t\t\t\t\t</dd>

\t\t\t \t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                    // line 42
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "POST_ID", array());
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t</ul>
\t\t";
            }
            // line 48
            echo "
\t\t</div>
\t";
            // line 50
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</div>

\t";
            // line 53
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "unapproved", array()))) {
                // line 54
                echo "\t<fieldset class=\"display-actions\">
\t\t";
                // line 55
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" />
\t\t<div><a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', true); return false;\">";
                // line 58
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t</fieldset>
\t";
            }
            // line 61
            echo "\t\t</form>
";
        }
        // line 63
        echo "
";
        // line 64
        if (isset($context["mcp_front_latest_reported_before"])) { $_mcp_front_latest_reported_before_ = $context["mcp_front_latest_reported_before"]; } else { $_mcp_front_latest_reported_before_ = null; }
        // line 65
        echo "
";
        // line 66
        if (isset($context["S_SHOW_REPORTS"])) { $_S_SHOW_REPORTS_ = $context["S_SHOW_REPORTS"]; } else { $_S_SHOW_REPORTS_ = null; }
        if ($_S_SHOW_REPORTS_) {
            // line 67
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED");
            echo "</h3>
\t\t<p>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 73
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "report", array()))) {
                // line 74
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 77
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 78
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 84
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "report", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 85
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    if (($this->getAttribute($_report_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 89
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "U_POST_DETAILS", array());
                    echo "#reports\" class=\"topictitle\">";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "SUBJECT", array());
                    echo "</a> ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 90
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "AUTHOR_FULL", array());
                    echo " &raquo; ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 94
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "REPORT_TIME", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 95
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "U_FORUM", array());
                    echo "\">";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "FORUM_NAME", array());
                    echo "</a></span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "\t\t\t</ul>
\t\t";
            }
            // line 102
            echo "
\t\t</div>
\t</div>
";
        }
        // line 106
        echo "
";
        // line 107
        if (isset($context["mcp_front_latest_reported_pms_before"])) { $_mcp_front_latest_reported_pms_before_ = $context["mcp_front_latest_reported_pms_before"]; } else { $_mcp_front_latest_reported_pms_before_ = null; }
        // line 108
        echo "
";
        // line 109
        if (isset($context["S_SHOW_PM_REPORTS"])) { $_S_SHOW_PM_REPORTS_ = $context["S_SHOW_PM_REPORTS"]; } else { $_S_SHOW_PM_REPORTS_ = null; }
        if ($_S_SHOW_PM_REPORTS_) {
            // line 110
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED_PMS");
            echo "</h3>
\t\t<p>";
            // line 114
            echo $this->env->getExtension('phpbb')->lang("PM_REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 116
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pm_report", array()))) {
                // line 117
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 120
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 121
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 127
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "pm_report", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 128
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    if (($this->getAttribute($_pm_report_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 132
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "U_PM_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "PM_SUBJECT", array());
                    echo "</a> ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 133
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "PM_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "PM_TIME", array());
                    echo "</span><br />
\t\t\t\t\t\t\t<span>";
                    // line 134
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "RECIPIENTS", array());
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 138
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "REPORT_TIME", array());
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "\t\t\t</ul>
\t\t";
            }
            // line 145
            echo "
\t\t</div>
\t</div>
";
        }
        // line 149
        echo "
";
        // line 150
        if (isset($context["mcp_front_latest_logs_before"])) { $_mcp_front_latest_logs_before_ = $context["mcp_front_latest_logs_before"]; } else { $_mcp_front_latest_logs_before_ = null; }
        // line 151
        echo "
";
        // line 152
        if (isset($context["S_SHOW_LOGS"])) { $_S_SHOW_LOGS_ = $context["S_SHOW_LOGS"]; } else { $_S_SHOW_LOGS_ = null; }
        if ($_S_SHOW_LOGS_) {
            // line 153
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 156
            echo $this->env->getExtension('phpbb')->lang("LATEST_LOGS");
            echo "</h3>

\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
            // line 161
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("IP");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 166
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
            // line 170
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "log", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 171
                echo "\t\t<tr class=\"";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td>";
                // line 172
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ACTION", array());
                echo "</td>
\t\t\t<td><span>";
                // line 173
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "USERNAME", array());
                echo "</span></td>
\t\t\t<td><span>";
                // line 174
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "IP", array());
                echo "</span></td>
\t\t\t<td><span>";
                // line 175
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_log_, "U_VIEW_TOPIC", array())) {
                    echo "<a href=\"";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "U_VIEW_TOPIC", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 176
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_log_, "U_VIEWLOGS", array())) {
                    echo "<a href=\"";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "U_VIEWLOGS", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 177
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "TIME", array());
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 180
                echo "\t\t<tr>
\t\t\t<td colspan=\"6\">";
                // line 181
                echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t\t</tbody>
\t\t</table>

\t\t</div>
\t</div>
";
        }
        // line 190
        echo "
";
        // line 191
        if (isset($context["mcp_front_latest_logs_after"])) { $_mcp_front_latest_logs_after_ = $context["mcp_front_latest_logs_after"]; } else { $_mcp_front_latest_logs_after_ = null; }
        // line 192
        echo "
";
        // line 193
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_front.html", 193)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 193,  641 => 192,  639 => 191,  636 => 190,  628 => 184,  619 => 181,  616 => 180,  607 => 177,  595 => 176,  581 => 175,  576 => 174,  571 => 173,  566 => 172,  556 => 171,  550 => 170,  543 => 166,  539 => 165,  535 => 164,  531 => 163,  527 => 162,  523 => 161,  515 => 156,  510 => 153,  507 => 152,  504 => 151,  502 => 150,  499 => 149,  493 => 145,  489 => 143,  468 => 138,  458 => 134,  448 => 133,  437 => 132,  424 => 128,  419 => 127,  410 => 121,  406 => 120,  401 => 117,  398 => 116,  393 => 114,  389 => 113,  384 => 110,  381 => 109,  378 => 108,  376 => 107,  373 => 106,  367 => 102,  363 => 100,  345 => 95,  331 => 94,  316 => 90,  305 => 89,  292 => 85,  287 => 84,  276 => 78,  272 => 77,  267 => 74,  264 => 73,  259 => 71,  255 => 70,  250 => 67,  247 => 66,  244 => 65,  242 => 64,  239 => 63,  235 => 61,  227 => 58,  223 => 57,  219 => 56,  214 => 55,  211 => 54,  208 => 53,  201 => 50,  197 => 48,  193 => 46,  182 => 42,  152 => 39,  136 => 38,  121 => 34,  110 => 33,  97 => 29,  92 => 28,  81 => 22,  77 => 21,  72 => 18,  69 => 17,  64 => 15,  60 => 14,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  40 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <h2>{PAGE_TITLE}</h2>*/
/* */
/* <!-- EVENT mcp_front_latest_unapproved_before -->*/
/* */
/* <!-- IF S_SHOW_UNAPPROVED -->*/
/* */
/* 	<form id="mcp_queue" method="post" action="{S_MCP_QUEUE_ACTION}">*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<h3>{L_LATEST_UNAPPROVED}</h3>*/
/* 		<p>{L_UNAPPROVED_TOTAL}</p>*/
/* */
/* 		<!-- IF .unapproved -->*/
/* 			<ul class="topiclist missing-column">*/
/* 				<li class="header">*/
/* 					<dl>*/
/* 						<dt><div class="list-inner">{L_VIEW_DETAILS}</div></dt>*/
/* 						<dd class="moderation"><span>{L_TOPIC} &amp; {L_FORUM}</span></dd>*/
/* 					</dl>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul class="topiclist cplist missing-column responsive-show-all">*/
/* */
/* 			<!-- BEGIN unapproved -->*/
/* 			<li class="row<!-- IF unapproved.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<div class="list-inner">*/
/* 							<a href="{unapproved.U_POST_DETAILS}" class="topictitle">{unapproved.SUBJECT}</a> {unapproved.ATTACH_ICON_IMG}<br />*/
/* 							{L_POSTED} {L_POST_BY_AUTHOR} {unapproved.AUTHOR_FULL} &raquo; {unapproved.POST_TIME}*/
/* 						</div>*/
/* 					</dt>*/
/* 					<dd class="moderation"><span>*/
/* 						{L_TOPIC}{L_COLON} <a href="{unapproved.U_TOPIC}">{unapproved.TOPIC_TITLE}</a> [<a href="{unapproved.U_MCP_TOPIC}">{L_MODERATE}</a>]<br />*/
/* 						{L_FORUM}{L_COLON} <!-- IF unapproved.U_FORUM --><a href="{unapproved.U_FORUM}">{unapproved.FORUM_NAME}</a><!-- ELSE -->{unapproved.FORUM_NAME}<!-- ENDIF --><!-- IF unapproved.U_MCP_FORUM --> [<a href="{unapproved.U_MCP_FORUM}">{L_MODERATE}</a>]<!-- ENDIF --></span>*/
/* 					</dd>*/
/* */
/* 			 		<dd class="mark"><input type="checkbox" name="post_id_list[]" value="{unapproved.POST_ID}" /></dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 			<!-- END unapproved -->*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	{S_FORM_TOKEN}*/
/* 	</div>*/
/* */
/* 	<!-- IF .unapproved -->*/
/* 	<fieldset class="display-actions">*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		<input class="button2" type="submit" name="action[disapprove]" value="{L_DISAPPROVE}" />&nbsp;*/
/* 		<input class="button1" type="submit" name="action[approve]" value="{L_APPROVE}" />*/
/* 		<div><a href="#" onclick="marklist('mcp_queue', 'post_id_list', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('mcp_queue', 'post_id_list', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* 		</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_reported_before -->*/
/* */
/* <!-- IF S_SHOW_REPORTS -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<h3>{L_LATEST_REPORTED}</h3>*/
/* 		<p>{L_REPORTS_TOTAL}</p>*/
/* */
/* 		<!-- IF .report -->*/
/* 			<ul class="topiclist two-long-columns">*/
/* 				<li class="header">*/
/* 					<dl>*/
/* 						<dt><div class="list-inner">{L_VIEW_DETAILS}</div></dt>*/
/* 						<dd class="moderation"><span>{L_REPORTER} &amp; {L_FORUM}</span></dd>*/
/* 					</dl>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul class="topiclist cplist two-long-columns responsive-show-all">*/
/* */
/* 			<!-- BEGIN report -->*/
/* 			<li class="row<!-- IF report.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<div class="list-inner">*/
/* 							<a href="{report.U_POST_DETAILS}#reports" class="topictitle">{report.SUBJECT}</a> {report.ATTACH_ICON_IMG}<br />*/
/* 							<span>{L_POSTED} {L_POST_BY_AUTHOR} {report.AUTHOR_FULL} &raquo; {report.POST_TIME}</span>*/
/* 						</div>*/
/* 					</dt>*/
/* 					<dd class="moderation">*/
/* 						<span>{L_REPORTED} {L_POST_BY_AUTHOR} {report.REPORTER_FULL} {L_REPORTED_ON_DATE} {report.REPORT_TIME}<br />*/
/* 						{L_FORUM}{L_COLON} <a href="{report.U_FORUM}">{report.FORUM_NAME}</a></span>*/
/* 					</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 			<!-- END report -->*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_reported_pms_before -->*/
/* */
/* <!-- IF S_SHOW_PM_REPORTS -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<h3>{L_LATEST_REPORTED_PMS}</h3>*/
/* 		<p>{L_PM_REPORTS_TOTAL}</p>*/
/* */
/* 		<!-- IF .pm_report -->*/
/* 			<ul class="topiclist two-long-columns">*/
/* 				<li class="header">*/
/* 					<dl>*/
/* 						<dt><div class="list-inner">{L_VIEW_DETAILS}</div></dt>*/
/* 						<dd class="moderation"><span>{L_REPORTER}</span></dd>*/
/* 					</dl>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul class="topiclist cplist two-long-columns responsive-show-all">*/
/* */
/* 			<!-- BEGIN pm_report -->*/
/* 			<li class="row<!-- IF pm_report.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<div class="list-inner">*/
/* 							<a href="{pm_report.U_PM_DETAILS}" class="topictitle">{pm_report.PM_SUBJECT}</a> {pm_report.ATTACH_ICON_IMG}<br />*/
/* 							<span>{L_MESSAGE_BY_AUTHOR} {pm_report.PM_AUTHOR_FULL} &raquo; {pm_report.PM_TIME}</span><br />*/
/* 							<span>{L_MESSAGE_TO} {pm_report.RECIPIENTS}</span>*/
/* 						</div>*/
/* 					</dt>*/
/* 					<dd class="moderation">*/
/* 						<span>{L_REPORTED} {L_POST_BY_AUTHOR} {pm_report.REPORTER_FULL} {L_REPORTED_ON_DATE} {pm_report.REPORT_TIME}</span>*/
/* 					</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 			<!-- END pm_report -->*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_logs_before -->*/
/* */
/* <!-- IF S_SHOW_LOGS -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<h3>{L_LATEST_LOGS}</h3>*/
/* */
/* 		<table class="table1">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th class="name">{L_ACTION}</th>*/
/* 			<th class="name">{L_USERNAME}</th>*/
/* 			<th class="name">{L_IP}</th>*/
/* 			<th class="name">{L_VIEW_TOPIC}</th>*/
/* 			<th class="name">{L_VIEW_TOPIC_LOGS}</th>*/
/* 			<th class="name">{L_TIME}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 	<!-- BEGIN log -->*/
/* 		<tr class="<!-- IF log.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 			<td>{log.ACTION}</td>*/
/* 			<td><span>{log.USERNAME}</span></td>*/
/* 			<td><span>{log.IP}</span></td>*/
/* 			<td><span><!-- IF log.U_VIEW_TOPIC --><a href="{log.U_VIEW_TOPIC}" title="{L_VIEW_TOPIC}">{L_VIEW_TOPIC}</a><!-- ENDIF -->&nbsp;</span></td>*/
/* 			<td><span><!-- IF log.U_VIEWLOGS --><a href="{log.U_VIEWLOGS}">{L_VIEW_TOPIC_LOGS}</a><!-- ENDIF -->&nbsp;</span></td>*/
/* 			<td><span>{log.TIME}</span></td>*/
/* 		</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr>*/
/* 			<td colspan="6">{L_NO_ENTRIES}</td>*/
/* 		</tr>*/
/* 	<!-- END log -->*/
/* 		</tbody>*/
/* 		</table>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_logs_after -->*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
