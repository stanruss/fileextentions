<?php

/* mcp_queue.html */
class __TwigTemplate_b2a3fc222a4666fdae196afb0e71d5ee4e88aac30edcaeb560f3a2908181506d extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_queue.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"mcp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_MCP_ACTION"])) { $_S_MCP_ACTION_ = $context["S_MCP_ACTION"]; } else { $_S_MCP_ACTION_ = null; }
        echo $_S_MCP_ACTION_;
        echo "\">

<fieldset class=\"forum-selection\">
\t<label for=\"fo\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <select name=\"f\" id=\"fo\">";
        if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
        echo $_S_FORUM_OPTIONS_;
        echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" />
\t";
        // line 8
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>

<h2>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>

\t";
        // line 18
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "postrow", array()))) {
            // line 19
            echo "\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 21
            if (isset($context["TOTAL"])) { $_TOTAL_ = $context["TOTAL"]; } else { $_TOTAL_ = null; }
            echo $_TOTAL_;
            echo "
\t\t\t\t";
            // line 22
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 23
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_queue.html", 23)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 24
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 25
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</div>
\t\t</div>

\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 33
            if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
            if ($_S_TOPICS_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST");
            }
            echo "</div></dt>
\t\t\t\t\t<dd class=\"moderation\"><span>";
            // line 34
            if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
            if ( !$_S_TOPICS_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
            }
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t";
            // line 41
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "postrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 42
                echo "
\t\t";
                // line 43
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "S_DELETED_TOPIC", array())) {
                    // line 44
                    echo "\t\t\t<li><p class=\"notopics\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                    echo "</p></li>
\t\t";
                } else {
                    // line 46
                    echo "
\t\t<li class=\"row";
                    // line 47
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if (($this->getAttribute($_postrow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                    // line 51
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_VIEW_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_SUBJECT", array());
                    echo "</a> ";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t\t\t\t\t<span>";
                    // line 52
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t<span>
\t\t\t\t\t\t";
                    // line 57
                    if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                    if ($_S_TOPICS_) {
                        echo "<br />";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_TOPIC", array());
                        echo "\">";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "TOPIC_TITLE", array());
                        echo "</a> <br />";
                    }
                    // line 58
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_VIEWFORUM", array());
                    echo "\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "FORUM_NAME", array());
                    echo "</a>
\t\t\t\t\t</span>
\t\t\t\t</dd>


\t\t \t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 64
                    if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                    if ($_S_TOPICS_) {
                        // line 65
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "TOPIC_ID", array());
                        echo "\" />
\t\t\t\t\t";
                    } else {
                        // line 67
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "POST_ID", array());
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>
\t\t";
                }
                // line 73
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t</ul>

\t\t<fieldset class=\"display-options\">
\t\t\t<label>";
            // line 77
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
            echo $_S_SELECT_SORT_DAYS_;
            echo "</label>
\t\t\t<label>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
            echo $_S_SELECT_SORT_KEY_;
            echo "</label><label>";
            if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
            echo $_S_SELECT_SORT_DIR_;
            echo "</label>
\t\t\t";
            // line 79
            if (isset($context["TOPIC_ID"])) { $_TOPIC_ID_ = $context["TOPIC_ID"]; } else { $_TOPIC_ID_ = null; }
            if ($_TOPIC_ID_) {
                echo "<label><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"";
                if (isset($context["TOPIC_ID"])) { $_TOPIC_ID_ = $context["TOPIC_ID"]; } else { $_TOPIC_ID_ = null; }
                echo $_TOPIC_ID_;
                echo "\" checked=\"checked\" />&nbsp; <strong>";
                echo $this->env->getExtension('phpbb')->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 80
            echo "\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t\t<hr />

\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 87
            if (isset($context["TOTAL"])) { $_TOTAL_ = $context["TOTAL"]; } else { $_TOTAL_ = null; }
            echo $_TOTAL_;
            echo "
\t\t\t\t";
            // line 88
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 89
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_queue.html", 89)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 90
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 91
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 93
            echo "\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 97
            echo "\t\t<p class=\"notopics\"><strong>
\t\t\t";
            // line 98
            if (isset($context["S_RESTORE"])) { $_S_RESTORE_ = $context["S_RESTORE"]; } else { $_S_RESTORE_ = null; }
            if ($_S_RESTORE_) {
                // line 99
                echo "\t\t\t\t";
                if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                if ($_S_TOPICS_) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_DELETED");
                }
                // line 100
                echo "\t\t\t";
            } else {
                // line 101
                echo "\t\t\t\t";
                if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                if ($_S_TOPICS_) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_QUEUE");
                }
                // line 102
                echo "\t\t\t";
            }
            // line 103
            echo "\t\t</strong></p>
\t";
        }
        // line 105
        echo "
\t</div>
</div>

";
        // line 109
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "postrow", array()))) {
            // line 110
            echo "\t<fieldset class=\"display-actions\">
\t\t";
            // line 111
            if (isset($context["S_RESTORE"])) { $_S_RESTORE_ = $context["S_RESTORE"]; } else { $_S_RESTORE_ = null; }
            if ($_S_RESTORE_) {
                // line 112
                echo "\t\t<input class=\"button2\" type=\"submit\" name=\"action[delete]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 113
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" />
\t\t";
            } else {
                // line 115
                echo "\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 116
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" />
\t\t";
            }
            // line 118
            echo "\t\t<div>
\t\t\t";
            // line 119
            if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
            if ($_S_TOPICS_) {
                // line 120
                echo "\t\t\t\t<a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t";
            } else {
                // line 122
                echo "\t\t\t\t<a href=\"#\" onclick=\"marklist('mcp', 'post_id_list', true); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'post_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t";
            }
            // line 124
            echo "\t\t</div>
\t</fieldset>
";
        }
        // line 127
        echo "</form>

";
        // line 129
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_queue.html", 129)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 129,  445 => 127,  440 => 124,  432 => 122,  424 => 120,  421 => 119,  418 => 118,  413 => 116,  408 => 115,  403 => 113,  398 => 112,  395 => 111,  392 => 110,  389 => 109,  383 => 105,  379 => 103,  376 => 102,  368 => 101,  365 => 100,  357 => 99,  354 => 98,  351 => 97,  345 => 93,  339 => 91,  334 => 90,  322 => 89,  317 => 88,  312 => 87,  301 => 80,  291 => 79,  281 => 78,  273 => 77,  268 => 74,  262 => 73,  256 => 69,  249 => 67,  242 => 65,  239 => 64,  222 => 58,  207 => 57,  191 => 52,  180 => 51,  168 => 47,  165 => 46,  159 => 44,  156 => 43,  153 => 42,  148 => 41,  139 => 35,  130 => 34,  121 => 33,  113 => 27,  107 => 25,  102 => 24,  90 => 23,  85 => 22,  80 => 21,  76 => 19,  73 => 18,  68 => 16,  60 => 11,  53 => 8,  49 => 7,  41 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <form id="mcp" method="post" action="{S_MCP_ACTION}">*/
/* */
/* <fieldset class="forum-selection">*/
/* 	<label for="fo">{L_FORUM}{L_COLON} <select name="f" id="fo">{S_FORUM_OPTIONS}</select></label>*/
/* 	<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_EXPLAIN}</p>*/
/* */
/* 	<!-- IF .postrow -->*/
/* 		<div class="action-bar top">*/
/* 			<div class="pagination">*/
/* 				{TOTAL}*/
/* 				<!-- IF .pagination --> */
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE --> */
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<ul class="topiclist missing-column">*/
/* 			<li class="header">*/
/* 				<dl>*/
/* 					<dt><div class="list-inner"><!-- IF S_TOPICS -->{L_TOPIC}<!-- ELSE -->{L_POST}<!-- ENDIF --></div></dt>*/
/* 					<dd class="moderation"><span><!-- IF not S_TOPICS -->{L_TOPIC} &amp; <!-- ENDIF -->{L_FORUM}</span></dd>*/
/* 					<dd class="mark">{L_MARK}</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 			</ul>*/
/* 			<ul class="topiclist cplist missing-column responsive-show-all">*/
/* */
/* 		<!-- BEGIN postrow -->*/
/* */
/* 		<!-- IF postrow.S_DELETED_TOPIC -->*/
/* 			<li><p class="notopics">{L_DELETED_TOPIC}</p></li>*/
/* 		<!-- ELSE -->*/
/* */
/* 		<li class="row<!-- IF postrow.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<div class="list-inner">*/
/* 						<a href="{postrow.U_VIEW_DETAILS}" class="topictitle">{postrow.POST_SUBJECT}</a> {postrow.ATTACH_ICON_IMG}<br />*/
/* 						<span>{L_POSTED} {L_POST_BY_AUTHOR} {postrow.POST_AUTHOR_FULL} &raquo; {postrow.POST_TIME}</span>*/
/* 					</div>*/
/* 				</dt>*/
/* 				<dd class="moderation">*/
/* 					<span>*/
/* 						<!-- IF S_TOPICS --><br /><!-- ELSE -->{L_TOPIC}{L_COLON} <a href="{postrow.U_TOPIC}">{postrow.TOPIC_TITLE}</a> <br /><!-- ENDIF -->*/
/* 						{L_FORUM}{L_COLON} <a href="{postrow.U_VIEWFORUM}">{postrow.FORUM_NAME}</a>*/
/* 					</span>*/
/* 				</dd>*/
/* */
/* */
/* 		 		<dd class="mark">*/
/* 					<!-- IF S_TOPICS -->*/
/* 						<input type="checkbox" name="topic_id_list[]" value="{postrow.TOPIC_ID}" />*/
/* 					<!-- ELSE -->*/
/* 						<input type="checkbox" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 					<!-- ENDIF -->*/
/* 				</dd>*/
/* 			</dl>*/
/* 		</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- END postrow -->*/
/* 		</ul>*/
/* */
/* 		<fieldset class="display-options">*/
/* 			<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 			<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label><label>{S_SELECT_SORT_DIR}</label>*/
/* 			<!-- IF TOPIC_ID --><label><input type="checkbox" class="radio" name="t" value="{TOPIC_ID}" checked="checked" />&nbsp; <strong>{L_ONLY_TOPIC}</strong></label><!-- ENDIF -->*/
/* 			<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 		</fieldset>*/
/* */
/* 		<hr />*/
/* */
/* 		<div class="action-bar bottom">*/
/* 			<div class="pagination">*/
/* 				{TOTAL}*/
/* 				<!-- IF .pagination --> */
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE --> */
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	<!-- ELSE -->*/
/* 		<p class="notopics"><strong>*/
/* 			<!-- IF S_RESTORE -->*/
/* 				<!-- IF S_TOPICS -->{L_NO_TOPICS_DELETED}<!-- ELSE -->{L_NO_POSTS_DELETED}<!-- ENDIF -->*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF S_TOPICS -->{L_NO_TOPICS_QUEUE}<!-- ELSE -->{L_NO_POSTS_QUEUE}<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</strong></p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF .postrow -->*/
/* 	<fieldset class="display-actions">*/
/* 		<!-- IF S_RESTORE -->*/
/* 		<input class="button2" type="submit" name="action[delete]" value="{L_DELETE}" />&nbsp;*/
/* 		<input class="button1" type="submit" name="action[restore]" value="{L_RESTORE}" />*/
/* 		<!-- ELSE -->*/
/* 		<input class="button2" type="submit" name="action[disapprove]" value="{L_DISAPPROVE}" />&nbsp;*/
/* 		<input class="button1" type="submit" name="action[approve]" value="{L_APPROVE}" />*/
/* 		<!-- ENDIF -->*/
/* 		<div>*/
/* 			<!-- IF S_TOPICS -->*/
/* 				<a href="#" onclick="marklist('mcp', 'topic_id_list', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('mcp', 'topic_id_list', false); return false;">{L_UNMARK_ALL}</a>*/
/* 			<!-- ELSE -->*/
/* 				<a href="#" onclick="marklist('mcp', 'post_id_list', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('mcp', 'post_id_list', false); return false;">{L_UNMARK_ALL}</a>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
