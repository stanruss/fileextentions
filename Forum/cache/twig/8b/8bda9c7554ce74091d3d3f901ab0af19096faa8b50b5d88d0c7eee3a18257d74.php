<?php

/* mcp_post.html */
class __TwigTemplate_82d1d98a98402653da9e3cbf06aad43de79315e9a97c5ded4779af208b54903c extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if ($_S_MCP_REPORT_) {
            // line 4
            echo "\t";
            if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
            if ($_S_PM_) {
                // line 5
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("REPORT_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["REPORT_REASON_TITLE"])) { $_REPORT_REASON_TITLE_ = $context["REPORT_REASON_TITLE"]; } else { $_REPORT_REASON_TITLE_ = null; }
            echo $_REPORT_REASON_TITLE_;
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("REPORTED");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["REPORTER_FULL"])) { $_REPORTER_FULL_ = $context["REPORTER_FULL"]; } else { $_REPORTER_FULL_ = null; }
            echo $_REPORTER_FULL_;
            echo " &laquo; ";
            if (isset($context["REPORT_DATE"])) { $_REPORT_DATE_ = $context["REPORT_DATE"]; } else { $_REPORT_DATE_ = null; }
            echo $_REPORT_DATE_;
            echo "</p>
\t\t";
            // line 16
            if (isset($context["S_REPORT_CLOSED"])) { $_S_REPORT_CLOSED_ = $context["S_REPORT_CLOSED"]; } else { $_S_REPORT_CLOSED_ = null; }
            if ($_S_REPORT_CLOSED_) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\">";
                echo $this->env->getExtension('phpbb')->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if (isset($context["REPORT_TEXT"])) { $_REPORT_TEXT_ = $context["REPORT_TEXT"]; } else { $_REPORT_TEXT_ = null; }
            if ($_REPORT_TEXT_) {
                // line 21
                echo "\t\t\t\t";
                if (isset($context["REPORT_TEXT"])) { $_REPORT_TEXT_ = $context["REPORT_TEXT"]; } else { $_REPORT_TEXT_ = null; }
                echo $_REPORT_TEXT_;
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                if (isset($context["REPORT_REASON_DESCRIPTION"])) { $_REPORT_REASON_DESCRIPTION_ = $context["REPORT_REASON_DESCRIPTION"]; } else { $_REPORT_REASON_DESCRIPTION_ = null; }
                echo $_REPORT_REASON_DESCRIPTION_;
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            if (isset($context["S_CLOSE_ACTION"])) { $_S_CLOSE_ACTION_ = $context["S_CLOSE_ACTION"]; } else { $_S_CLOSE_ACTION_ = null; }
            echo $_S_CLOSE_ACTION_;
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            if (isset($context["S_REPORT_CLOSED"])) { $_S_REPORT_CLOSED_ = $context["S_REPORT_CLOSED"]; } else { $_S_REPORT_CLOSED_ = null; }
            if ( !$_S_REPORT_CLOSED_) {
                // line 35
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 37
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            // line 38
            if (isset($context["REPORT_ID"])) { $_REPORT_ID_ = $context["REPORT_ID"]; } else { $_REPORT_ID_ = null; }
            echo $_REPORT_ID_;
            echo "\" />
\t\t";
            // line 39
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 44
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 46
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 51
        if (isset($context["U_VIEW_POST"])) { $_U_VIEW_POST_ = $context["U_VIEW_POST"]; } else { $_U_VIEW_POST_ = null; }
        echo $_U_VIEW_POST_;
        echo "\">";
        if (isset($context["POST_SUBJECT"])) { $_POST_SUBJECT_ = $context["POST_SUBJECT"]; } else { $_POST_SUBJECT_ = null; }
        echo $_POST_SUBJECT_;
        echo "</a></h3>

\t\t<ul class=\"post-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 55
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data.trim() == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "';} return false;\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 59
        if (isset($context["U_EDIT"])) { $_U_EDIT_ = $context["U_EDIT"]; } else { $_U_EDIT_ = null; }
        if ($_U_EDIT_) {
            // line 60
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 61
            if (isset($context["U_EDIT"])) { $_U_EDIT_ = $context["U_EDIT"]; } else { $_U_EDIT_ = null; }
            echo $_U_EDIT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
            echo "\" class=\"button icon-button edit-icon\">
\t\t\t\t\t\t<span>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 66
        echo "\t\t</ul>

\t\t";
        // line 68
        if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
        if ($_S_PM_) {
            // line 69
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if (isset($context["POST_DATE"])) { $_POST_DATE_ = $context["POST_DATE"]; } else { $_POST_DATE_ = null; }
            echo $_POST_DATE_;
            echo "
\t\t\t<br /><strong>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("PM_FROM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if (isset($context["POST_AUTHOR_FULL"])) { $_POST_AUTHOR_FULL_ = $context["POST_AUTHOR_FULL"]; } else { $_POST_AUTHOR_FULL_ = null; }
            echo $_POST_AUTHOR_FULL_;
            echo "
\t\t\t";
            // line 72
            if (isset($context["S_TO_RECIPIENT"])) { $_S_TO_RECIPIENT_ = $context["S_TO_RECIPIENT"]; } else { $_S_TO_RECIPIENT_ = null; }
            if ($_S_TO_RECIPIENT_) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("TO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "to_recipient", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                    if ($this->getAttribute($_to_recipient_, "NAME_FULL", array())) {
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        echo $this->getAttribute($_to_recipient_, "NAME_FULL", array());
                    } else {
                        echo "<a href=\"";
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        echo $this->getAttribute($_to_recipient_, "U_VIEW", array());
                        echo "\" style=\"color:";
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        if ($this->getAttribute($_to_recipient_, "COLOUR", array())) {
                            if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                            echo $this->getAttribute($_to_recipient_, "COLOUR", array());
                        } elseif ($this->getAttribute($_to_recipient_, "IS_GROUP", array())) {
                            echo "#0000FF";
                        }
                        echo ";\">";
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        echo $this->getAttribute($_to_recipient_, "NAME", array());
                        echo "</a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 73
            echo "\t\t\t";
            if (isset($context["S_BCC_RECIPIENT"])) { $_S_BCC_RECIPIENT_ = $context["S_BCC_RECIPIENT"]; } else { $_S_BCC_RECIPIENT_ = null; }
            if ($_S_BCC_RECIPIENT_) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("BCC");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "bcc_recipient", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                    if ($this->getAttribute($_bcc_recipient_, "NAME_FULL", array())) {
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        echo $this->getAttribute($_bcc_recipient_, "NAME_FULL", array());
                    } else {
                        echo "<a href=\"";
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        echo $this->getAttribute($_bcc_recipient_, "U_VIEW", array());
                        echo "\" style=\"color:";
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        if ($this->getAttribute($_bcc_recipient_, "COLOUR", array())) {
                            if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                            echo $this->getAttribute($_bcc_recipient_, "COLOUR", array());
                        } elseif ($this->getAttribute($_bcc_recipient_, "IS_GROUP", array())) {
                            echo "#0000FF";
                        }
                        echo ";\">";
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        echo $this->getAttribute($_bcc_recipient_, "NAME", array());
                        echo "</a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 74
            echo "\t\t</p>
\t\t";
        } else {
            // line 76
            echo "\t\t<p class=\"author\">";
            if (isset($context["MINI_POST_IMG"])) { $_MINI_POST_IMG_ = $context["MINI_POST_IMG"]; } else { $_MINI_POST_IMG_ = null; }
            echo $_MINI_POST_IMG_;
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["POST_AUTHOR_FULL"])) { $_POST_AUTHOR_FULL_ = $context["POST_AUTHOR_FULL"]; } else { $_POST_AUTHOR_FULL_ = null; }
            echo $_POST_AUTHOR_FULL_;
            echo " &raquo; ";
            if (isset($context["POST_DATE"])) { $_POST_DATE_ = $context["POST_DATE"]; } else { $_POST_DATE_ = null; }
            echo $_POST_DATE_;
            echo "</p>
\t\t";
        }
        // line 78
        echo "
\t\t";
        // line 79
        if (isset($context["S_POST_UNAPPROVED"])) { $_S_POST_UNAPPROVED_ = $context["S_POST_UNAPPROVED"]; } else { $_S_POST_UNAPPROVED_ = null; }
        if (isset($context["S_POST_DELETED"])) { $_S_POST_DELETED_ = $context["S_POST_DELETED"]; } else { $_S_POST_DELETED_ = null; }
        if ($_S_POST_UNAPPROVED_) {
            // line 80
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            if (isset($context["U_APPROVE_ACTION"])) { $_U_APPROVE_ACTION_ = $context["U_APPROVE_ACTION"]; } else { $_U_APPROVE_ACTION_ = null; }
            echo $_U_APPROVE_ACTION_;
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 85
            if (isset($context["S_FIRST_POST"])) { $_S_FIRST_POST_ = $context["S_FIRST_POST"]; } else { $_S_FIRST_POST_ = null; }
            if ( !$_S_FIRST_POST_) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 86
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            if (isset($context["POST_ID"])) { $_POST_ID_ = $context["POST_ID"]; } else { $_POST_ID_ = null; }
            echo $_POST_ID_;
            echo "\" />
\t\t\t\t";
            // line 87
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif ($_S_POST_DELETED_) {
            // line 91
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            if (isset($context["U_APPROVE_ACTION"])) { $_U_APPROVE_ACTION_ = $context["U_APPROVE_ACTION"]; } else { $_U_APPROVE_ACTION_ = null; }
            echo $_U_APPROVE_ACTION_;
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t";
            // line 94
            if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
            if ($_S_CAN_DELETE_POST_) {
                echo "<input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" name=\"action[delete]\" /> &nbsp;";
            }
            // line 95
            echo "\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 96
            if (isset($context["S_FIRST_POST"])) { $_S_FIRST_POST_ = $context["S_FIRST_POST"]; } else { $_S_FIRST_POST_ = null; }
            if ( !$_S_FIRST_POST_) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"deleted_posts\" />";
            }
            // line 97
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            if (isset($context["POST_ID"])) { $_POST_ID_ = $context["POST_ID"]; } else { $_POST_ID_ = null; }
            echo $_POST_ID_;
            echo "\" />
\t\t\t\t";
            // line 98
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 102
        echo "
\t\t";
        // line 103
        if (isset($context["S_MESSAGE_REPORTED"])) { $_S_MESSAGE_REPORTED_ = $context["S_MESSAGE_REPORTED"]; } else { $_S_MESSAGE_REPORTED_ = null; }
        if ($_S_MESSAGE_REPORTED_) {
            // line 104
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t";
            // line 105
            if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
            echo $_REPORTED_IMG_;
            echo " <a href=\"";
            if (isset($context["U_MCP_REPORT"])) { $_U_MCP_REPORT_ = $context["U_MCP_REPORT"]; } else { $_U_MCP_REPORT_ = null; }
            echo $_U_MCP_REPORT_;
            echo "\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 108
        echo "
\t\t<div class=\"content\" id=\"post_details\">
\t\t\t";
        // line 110
        if (isset($context["POST_PREVIEW"])) { $_POST_PREVIEW_ = $context["POST_PREVIEW"]; } else { $_POST_PREVIEW_ = null; }
        echo $_POST_PREVIEW_;
        echo "
\t\t</div>

\t\t";
        // line 113
        if (isset($context["S_HAS_ATTACHMENTS"])) { $_S_HAS_ATTACHMENTS_ = $context["S_HAS_ATTACHMENTS"]; } else { $_S_HAS_ATTACHMENTS_ = null; }
        if ($_S_HAS_ATTACHMENTS_) {
            // line 114
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 116
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 117
                echo "\t\t\t\t\t<dd>";
                if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t</dl>
\t\t";
        }
        // line 121
        echo "
\t\t";
        // line 122
        if (isset($context["DELETED_MESSAGE"])) { $_DELETED_MESSAGE_ = $context["DELETED_MESSAGE"]; } else { $_DELETED_MESSAGE_ = null; }
        if (isset($context["DELETE_REASON"])) { $_DELETE_REASON_ = $context["DELETE_REASON"]; } else { $_DELETE_REASON_ = null; }
        if (($_DELETED_MESSAGE_ || $_DELETE_REASON_)) {
            // line 123
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 124
            if (isset($context["DELETED_MESSAGE"])) { $_DELETED_MESSAGE_ = $context["DELETED_MESSAGE"]; } else { $_DELETED_MESSAGE_ = null; }
            echo $_DELETED_MESSAGE_;
            echo "
\t\t\t\t";
            // line 125
            if (isset($context["DELETE_REASON"])) { $_DELETE_REASON_ = $context["DELETE_REASON"]; } else { $_DELETE_REASON_ = null; }
            if ($_DELETE_REASON_) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <em>";
                if (isset($context["DELETE_REASON"])) { $_DELETE_REASON_ = $context["DELETE_REASON"]; } else { $_DELETE_REASON_ = null; }
                echo $_DELETE_REASON_;
                echo "</em>";
            }
            // line 126
            echo "\t\t\t</div>
\t\t";
        }
        // line 128
        echo "
\t\t";
        // line 129
        if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
        if ($_SIGNATURE_) {
            // line 130
            echo "\t\t\t<div id=\"sig";
            if (isset($context["POST_ID"])) { $_POST_ID_ = $context["POST_ID"]; } else { $_POST_ID_ = null; }
            echo $_POST_ID_;
            echo "\" class=\"signature\">";
            if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
            echo $_SIGNATURE_;
            echo "</div>
\t\t";
        }
        // line 132
        echo "
\t\t";
        // line 133
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if (isset($context["S_CAN_VIEWIP"])) { $_S_CAN_VIEWIP_ = $context["S_CAN_VIEWIP"]; } else { $_S_CAN_VIEWIP_ = null; }
        if (($_S_MCP_REPORT_ && $_S_CAN_VIEWIP_)) {
            // line 134
            echo "\t\t\t<hr />
\t\t\t<div>";
            // line 135
            if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
            if ($_S_PM_) {
                echo $this->env->getExtension('phpbb')->lang("THIS_PM_IP");
            } else {
                echo $this->env->getExtension('phpbb')->lang("THIS_POST_IP");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
            if ($_U_WHOIS_) {
                // line 136
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
                echo $_U_WHOIS_;
                echo "\">";
                if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                if ($_POST_IPADDR_) {
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    echo $_POST_IPADDR_;
                } else {
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                }
                echo "</a> (";
                if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                if ($_POST_IPADDR_) {
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                } else {
                    echo "<a href=\"";
                    if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                    echo $_U_LOOKUP_IP_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 138
                echo "\t\t\t\t";
                if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                if ($_POST_IPADDR_) {
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    echo $_POST_IPADDR_;
                    echo " (";
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                    echo ")";
                } else {
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                    if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                    if ($_U_LOOKUP_IP_) {
                        echo " (<a href=\"";
                        if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                        echo $_U_LOOKUP_IP_;
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 139
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 141
        echo "
\t</div>

\t</div>
</div>

";
        // line 147
        if (isset($context["S_CAN_LOCK_POST"])) { $_S_CAN_LOCK_POST_ = $context["S_CAN_LOCK_POST"]; } else { $_S_CAN_LOCK_POST_ = null; }
        if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
        if (isset($context["S_CAN_CHGPOSTER"])) { $_S_CAN_CHGPOSTER_ = $context["S_CAN_CHGPOSTER"]; } else { $_S_CAN_CHGPOSTER_ = null; }
        if (isset($context["S_MCP_POST_ADDITIONAL_OPTS"])) { $_S_MCP_POST_ADDITIONAL_OPTS_ = $context["S_MCP_POST_ADDITIONAL_OPTS"]; } else { $_S_MCP_POST_ADDITIONAL_OPTS_ = null; }
        if (((($_S_CAN_LOCK_POST_ || $_S_CAN_DELETE_POST_) || $_S_CAN_CHGPOSTER_) || $_S_MCP_POST_ADDITIONAL_OPTS_)) {
            // line 148
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 152
            if (isset($context["S_CAN_CHGPOSTER"])) { $_S_CAN_CHGPOSTER_ = $context["S_CAN_CHGPOSTER"]; } else { $_S_CAN_CHGPOSTER_ = null; }
            if ($_S_CAN_CHGPOSTER_) {
                // line 153
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                if (isset($context["U_POST_ACTION"])) { $_U_POST_ACTION_ = $context["U_POST_ACTION"]; } else { $_U_POST_ACTION_ = null; }
                echo $_U_POST_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("CHANGE_POSTER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 158
                if (isset($context["S_USER_SELECT"])) { $_S_USER_SELECT_ = $context["S_USER_SELECT"]; } else { $_S_USER_SELECT_ = null; }
                if ($_S_USER_SELECT_) {
                    echo "<dd><select name=\"u\">";
                    if (isset($context["S_USER_SELECT"])) { $_S_USER_SELECT_ = $context["S_USER_SELECT"]; } else { $_S_USER_SELECT_ = null; }
                    echo $_S_USER_SELECT_;
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 159
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 161
                echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 163
                if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
                echo $_U_FIND_USERNAME_;
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 166
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 170
            echo "
\t\t";
            // line 171
            if (isset($context["mcp_post_additional_options"])) { $_mcp_post_additional_options_ = $context["mcp_post_additional_options"]; } else { $_mcp_post_additional_options_ = null; }
            // line 172
            echo "
\t\t";
            // line 173
            if (isset($context["S_CAN_LOCK_POST"])) { $_S_CAN_LOCK_POST_ = $context["S_CAN_LOCK_POST"]; } else { $_S_CAN_LOCK_POST_ = null; }
            if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
            if (($_S_CAN_LOCK_POST_ || $_S_CAN_DELETE_POST_)) {
                // line 174
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                if (isset($context["U_MCP_ACTION"])) { $_U_MCP_ACTION_ = $context["U_MCP_ACTION"]; } else { $_U_MCP_ACTION_ = null; }
                echo $_U_MCP_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 178
                echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 180
                if (isset($context["S_CAN_LOCK_POST"])) { $_S_CAN_LOCK_POST_ = $context["S_CAN_LOCK_POST"]; } else { $_S_CAN_LOCK_POST_ = null; }
                if ($_S_CAN_LOCK_POST_) {
                    if (isset($context["S_POST_LOCKED"])) { $_S_POST_LOCKED_ = $context["S_POST_LOCKED"]; } else { $_S_POST_LOCKED_ = null; }
                    if ($_S_POST_LOCKED_) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 181
                echo "\t\t\t\t\t";
                if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
                if ($_S_CAN_DELETE_POST_) {
                    echo "<option value=\"delete_post\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 182
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 185
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 189
            echo "
\t\t</div>
\t</div>
";
        }
        // line 193
        echo "

";
        // line 195
        if (isset($context["S_MCP_QUEUE"])) { $_S_MCP_QUEUE_ = $context["S_MCP_QUEUE"]; } else { $_S_MCP_QUEUE_ = null; }
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if (isset($context["RETURN_TOPIC"])) { $_RETURN_TOPIC_ = $context["RETURN_TOPIC"]; } else { $_RETURN_TOPIC_ = null; }
        if ((($_S_MCP_QUEUE_ || $_S_MCP_REPORT_) || $_RETURN_TOPIC_)) {
            // line 196
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 199
            if (isset($context["S_MCP_QUEUE"])) { $_S_MCP_QUEUE_ = $context["S_MCP_QUEUE"]; } else { $_S_MCP_QUEUE_ = null; }
            if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
            if ($_S_MCP_QUEUE_) {
                if (isset($context["RETURN_QUEUE"])) { $_RETURN_QUEUE_ = $context["RETURN_QUEUE"]; } else { $_RETURN_QUEUE_ = null; }
                echo $_RETURN_QUEUE_;
                echo " | ";
                if (isset($context["RETURN_TOPIC_SIMPLE"])) { $_RETURN_TOPIC_SIMPLE_ = $context["RETURN_TOPIC_SIMPLE"]; } else { $_RETURN_TOPIC_SIMPLE_ = null; }
                echo $_RETURN_TOPIC_SIMPLE_;
                echo " | ";
                if (isset($context["RETURN_POST"])) { $_RETURN_POST_ = $context["RETURN_POST"]; } else { $_RETURN_POST_ = null; }
                echo $_RETURN_POST_;
            } elseif ($_S_MCP_REPORT_) {
                if (isset($context["RETURN_REPORTS"])) { $_RETURN_REPORTS_ = $context["RETURN_REPORTS"]; } else { $_RETURN_REPORTS_ = null; }
                echo $_RETURN_REPORTS_;
                if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
                if ( !$_S_PM_) {
                    echo " | <a href=\"";
                    if (isset($context["U_VIEW_POST"])) { $_U_VIEW_POST_ = $context["U_VIEW_POST"]; } else { $_U_VIEW_POST_ = null; }
                    echo $_U_VIEW_POST_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    if (isset($context["U_VIEW_TOPIC"])) { $_U_VIEW_TOPIC_ = $context["U_VIEW_TOPIC"]; } else { $_U_VIEW_TOPIC_ = null; }
                    echo $_U_VIEW_TOPIC_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
                    echo $_U_VIEW_FORUM_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                if (isset($context["RETURN_TOPIC"])) { $_RETURN_TOPIC_ = $context["RETURN_TOPIC"]; } else { $_RETURN_TOPIC_ = null; }
                echo $_RETURN_TOPIC_;
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 204
        echo "
";
        // line 205
        if (isset($context["S_MCP_QUEUE"])) { $_S_MCP_QUEUE_ = $context["S_MCP_QUEUE"]; } else { $_S_MCP_QUEUE_ = null; }
        if ($_S_MCP_QUEUE_) {
        } else {
            // line 207
            echo "
\t";
            // line 208
            if (isset($context["S_SHOW_USER_NOTES"])) { $_S_SHOW_USER_NOTES_ = $context["S_SHOW_USER_NOTES"]; } else { $_S_SHOW_USER_NOTES_ = null; }
            if ($_S_SHOW_USER_NOTES_) {
                // line 209
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 212
                if (isset($context["U_POST_ACTION"])) { $_U_POST_ACTION_ = $context["U_POST_ACTION"]; } else { $_U_POST_ACTION_ = null; }
                echo $_U_POST_ACTION_;
                echo "\">

\t\t\t";
                // line 214
                if (isset($context["S_USER_NOTES"])) { $_S_USER_NOTES_ = $context["S_USER_NOTES"]; } else { $_S_USER_NOTES_ = null; }
                if ($_S_USER_NOTES_) {
                    // line 215
                    echo "\t\t\t\t<h3>";
                    echo $this->env->getExtension('phpbb')->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 217
                    if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "usernotes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 218
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->env->getExtension('phpbb')->lang("REPORTED_BY");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                        echo $this->getAttribute($_usernotes_, "REPORT_BY", array());
                        echo " &laquo; ";
                        if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                        echo $this->getAttribute($_usernotes_, "REPORT_AT", array());
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 219
                        if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
                        if ($_S_CLEAR_ALLOWED_) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                            echo $this->getAttribute($_usernotes_, "ID", array());
                            echo "\" /></div>";
                        }
                        // line 220
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                        echo $this->getAttribute($_usernotes_, "ACTION", array());
                        echo "</div>

\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "
\t\t\t\t";
                    // line 225
                    if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
                    if ($_S_CLEAR_ALLOWED_) {
                        // line 226
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 227
                        echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 228
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 231
                    echo "\t\t\t";
                }
                // line 232
                echo "
\t\t\t<h3>";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 234
                echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 241
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 242
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 243
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 250
            echo "
\t";
            // line 251
            if (isset($context["S_SHOW_REPORTS"])) { $_S_SHOW_REPORTS_ = $context["S_SHOW_REPORTS"]; } else { $_S_SHOW_REPORTS_ = null; }
            if ($_S_SHOW_REPORTS_) {
                // line 252
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 255
                echo $this->env->getExtension('phpbb')->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 257
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "reports", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 258
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_BY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    if ($this->getAttribute($_reports_, "U_REPORTER", array())) {
                        echo "<a href=\"";
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "U_REPORTER", array());
                        echo "\">";
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "REPORTER", array());
                        echo "</a>";
                    } else {
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "REPORTER", array());
                    }
                    echo " &laquo; ";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    echo $this->getAttribute($_reports_, "REPORT_TIME", array());
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 259
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    echo $this->getAttribute($_reports_, "REASON_TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    echo $this->getAttribute($_reports_, "REASON_DESC", array());
                    echo "</em>";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    if ($this->getAttribute($_reports_, "REPORT_TEXT", array())) {
                        echo "<br />";
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "REPORT_TEXT", array());
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 265
            echo "
\t";
            // line 266
            if (isset($context["S_CAN_VIEWIP"])) { $_S_CAN_VIEWIP_ = $context["S_CAN_VIEWIP"]; } else { $_S_CAN_VIEWIP_ = null; }
            if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
            if (($_S_CAN_VIEWIP_ &&  !$_S_MCP_REPORT_)) {
                // line 267
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 270
                echo $this->env->getExtension('phpbb')->lang("THIS_POST_IP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
                if ($_U_WHOIS_) {
                    // line 271
                    echo "\t\t\t\t<a href=\"";
                    if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
                    echo $_U_WHOIS_;
                    echo "\">";
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    if ($_POST_IPADDR_) {
                        if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                        echo $_POST_IPADDR_;
                    } else {
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                    }
                    echo "</a> (";
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    if ($_POST_IPADDR_) {
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                    } else {
                        echo "<a href=\"";
                        if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                        echo $_U_LOOKUP_IP_;
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 273
                    echo "\t\t\t\t";
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    if ($_POST_IPADDR_) {
                        if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                        echo $_POST_IPADDR_;
                        echo " (";
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                        echo ")";
                    } else {
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                        if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                        if ($_U_LOOKUP_IP_) {
                            echo " (<a href=\"";
                            if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                            echo $_U_LOOKUP_IP_;
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 274
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 279
                echo $this->env->getExtension('phpbb')->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 280
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 284
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "userrow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 285
                    echo "\t\t\t<tr class=\"";
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    if (($this->getAttribute($_userrow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 286
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    if ($this->getAttribute($_userrow_, "U_PROFILE", array())) {
                        echo "<a href=\"";
                        if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                        echo $this->getAttribute($_userrow_, "U_PROFILE", array());
                        echo "\">";
                        if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                        echo $this->getAttribute($_userrow_, "USERNAME", array());
                        echo "</a>";
                    } else {
                        if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                        echo $this->getAttribute($_userrow_, "USERNAME", array());
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 287
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    echo $this->getAttribute($_userrow_, "U_SEARCHPOSTS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_POSTS_BY");
                    echo " ";
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    echo $this->getAttribute($_userrow_, "USERNAME", array());
                    echo "\">";
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    echo $this->getAttribute($_userrow_, "NUM_POSTS", array());
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 290
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 291
                    echo $this->env->getExtension('phpbb')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 300
                echo $this->env->getExtension('phpbb')->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 301
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 305
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "iprow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 306
                    echo "\t\t\t<tr class=\"";
                    if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                    if (($this->getAttribute($_iprow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 307
                    if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                    if ($this->getAttribute($_iprow_, "HOSTNAME", array())) {
                        echo "<a href=\"";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "U_WHOIS", array());
                        echo "\">";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "HOSTNAME", array());
                        echo "</a> (";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "IP", array());
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "U_WHOIS", array());
                        echo "\">";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "IP", array());
                        echo "</a> (<a href=\"";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "U_LOOKUP_IP", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 308
                    if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                    echo $this->getAttribute($_iprow_, "NUM_POSTS", array());
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 311
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 312
                    echo $this->env->getExtension('phpbb')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<p><a href=\"";
                // line 318
                if (isset($context["U_LOOKUP_ALL"])) { $_U_LOOKUP_ALL_ = $context["U_LOOKUP_ALL"]; } else { $_U_LOOKUP_ALL_ = null; }
                echo $_U_LOOKUP_ALL_;
                echo "#ip\">";
                echo $this->env->getExtension('phpbb')->lang("LOOKUP_ALL");
                echo "</a></p>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 323
            echo "
";
        }
        // line 325
        echo "
";
        // line 326
        if (isset($context["S_TOPIC_REVIEW"])) { $_S_TOPIC_REVIEW_ = $context["S_TOPIC_REVIEW"]; } else { $_S_TOPIC_REVIEW_ = null; }
        if ($_S_TOPIC_REVIEW_) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 326)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 327
        echo "
";
        // line 328
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 328)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1286 => 328,  1283 => 327,  1268 => 326,  1265 => 325,  1261 => 323,  1250 => 318,  1245 => 315,  1236 => 312,  1233 => 311,  1224 => 308,  1195 => 307,  1185 => 306,  1179 => 305,  1172 => 301,  1168 => 300,  1160 => 294,  1151 => 291,  1148 => 290,  1131 => 287,  1115 => 286,  1105 => 285,  1099 => 284,  1092 => 280,  1088 => 279,  1079 => 274,  1056 => 273,  1027 => 271,  1021 => 270,  1016 => 267,  1012 => 266,  1009 => 265,  1003 => 261,  983 => 259,  960 => 258,  955 => 257,  950 => 255,  945 => 252,  942 => 251,  939 => 250,  928 => 243,  924 => 242,  920 => 241,  910 => 234,  906 => 233,  903 => 232,  900 => 231,  894 => 228,  890 => 227,  887 => 226,  884 => 225,  881 => 224,  869 => 220,  861 => 219,  849 => 218,  844 => 217,  838 => 215,  835 => 214,  829 => 212,  824 => 209,  821 => 208,  818 => 207,  814 => 205,  811 => 204,  767 => 199,  762 => 196,  757 => 195,  753 => 193,  747 => 189,  739 => 185,  732 => 182,  724 => 181,  706 => 180,  700 => 178,  691 => 174,  687 => 173,  684 => 172,  682 => 171,  679 => 170,  671 => 166,  662 => 163,  657 => 161,  653 => 159,  643 => 158,  638 => 157,  629 => 153,  626 => 152,  622 => 151,  617 => 148,  611 => 147,  603 => 141,  597 => 139,  574 => 138,  545 => 136,  534 => 135,  531 => 134,  527 => 133,  524 => 132,  514 => 130,  511 => 129,  508 => 128,  504 => 126,  493 => 125,  488 => 124,  485 => 123,  481 => 122,  478 => 121,  474 => 119,  464 => 117,  459 => 116,  455 => 115,  452 => 114,  449 => 113,  442 => 110,  438 => 108,  426 => 105,  423 => 104,  420 => 103,  417 => 102,  409 => 98,  403 => 97,  398 => 96,  393 => 95,  386 => 94,  378 => 91,  370 => 87,  364 => 86,  359 => 85,  355 => 84,  351 => 83,  343 => 80,  339 => 79,  336 => 78,  319 => 76,  315 => 74,  276 => 73,  238 => 72,  230 => 71,  222 => 70,  219 => 69,  216 => 68,  212 => 66,  205 => 62,  198 => 61,  195 => 60,  192 => 59,  186 => 56,  176 => 55,  165 => 51,  158 => 46,  152 => 44,  143 => 39,  138 => 38,  133 => 37,  127 => 35,  124 => 34,  117 => 31,  109 => 25,  102 => 23,  95 => 21,  92 => 20,  89 => 19,  83 => 17,  80 => 16,  68 => 15,  60 => 14,  53 => 9,  47 => 7,  41 => 5,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <!-- IF S_MCP_REPORT -->*/
/* 	<!-- IF S_PM -->*/
/* 	<h2>{L_PM_REPORT_DETAILS}</h2>*/
/* 	<!-- ELSE -->*/
/* 	<h2>{L_REPORT_DETAILS}</h2>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div id="report" class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<div class="postbody">*/
/* 			<h3>{L_REPORT_REASON}{L_COLON} {REPORT_REASON_TITLE}</h3>*/
/* 			<p class="author">{L_REPORTED} {L_POST_BY_AUTHOR} {REPORTER_FULL} &laquo; {REPORT_DATE}</p>*/
/* 		<!-- IF S_REPORT_CLOSED -->*/
/* 			<p class="post-notice reported">{L_REPORT_CLOSED}</p>*/
/* 		<!-- ENDIF -->*/
/* 			<div class="content">*/
/* 			<!-- IF REPORT_TEXT -->*/
/* 				{REPORT_TEXT}*/
/* 			<!-- ELSE -->*/
/* 				{REPORT_REASON_DESCRIPTION}*/
/* 			<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<form method="post" id="mcp_report" action="{S_CLOSE_ACTION}">*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<!-- IF not S_REPORT_CLOSED -->*/
/* 			<input class="button1" type="submit" value="{L_CLOSE_REPORT}" name="action[close]" /> &nbsp;*/
/* 		<!-- ENDIF -->*/
/* 		<input class="button2" type="submit" value="{L_DELETE_REPORT}" name="action[delete]" />*/
/* 		<input type="hidden" name="report_id_list[]" value="{REPORT_ID}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* 	<h2>{L_POST_DETAILS}</h2>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="postbody">*/
/* 		<h3><a href="{U_VIEW_POST}">{POST_SUBJECT}</a></h3>*/
/* */
/* 		<ul class="post-buttons">*/
/* 			<li id="expand">*/
/* 				<a href="#post_details" onclick="viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '{LA_EXPAND_VIEW}'){rev_text.data = '{LA_COLLAPSE_VIEW}'; } else if (rev_text.data.trim() == '{LA_COLLAPSE_VIEW}'){rev_text.data = '{LA_EXPAND_VIEW}';} return false;">*/
/* 					{L_EXPAND_VIEW}*/
/* 				</a>*/
/* 			</li>*/
/* 			<!-- IF U_EDIT -->*/
/* 				<li>*/
/* 					<a href="{U_EDIT}" title="{L_EDIT_POST}" class="button icon-button edit-icon">*/
/* 						<span>{L_EDIT_POST}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 		</ul>*/
/* */
/* 		<!-- IF S_PM -->*/
/* 		<p class="author">*/
/* 			<strong>{L_SENT_AT}{L_COLON}</strong> {POST_DATE}*/
/* 			<br /><strong>{L_PM_FROM}{L_COLON}</strong> {POST_AUTHOR_FULL}*/
/* 			<!-- IF S_TO_RECIPIENT --><br /><strong>{L_TO}{L_COLON}</strong> <!-- BEGIN to_recipient --><!-- IF to_recipient.NAME_FULL -->{to_recipient.NAME_FULL}<!-- ELSE --><a href="{to_recipient.U_VIEW}" style="color:<!-- IF to_recipient.COLOUR -->{to_recipient.COLOUR}<!-- ELSEIF to_recipient.IS_GROUP -->#0000FF<!-- ENDIF -->;">{to_recipient.NAME}</a><!-- ENDIF -->&nbsp;<!-- END to_recipient --><!-- ENDIF -->*/
/* 			<!-- IF S_BCC_RECIPIENT --><br /><strong>{L_BCC}{L_COLON}</strong> <!-- BEGIN bcc_recipient --><!-- IF bcc_recipient.NAME_FULL -->{bcc_recipient.NAME_FULL}<!-- ELSE --><a href="{bcc_recipient.U_VIEW}" style="color:<!-- IF bcc_recipient.COLOUR -->{bcc_recipient.COLOUR}<!-- ELSEIF bcc_recipient.IS_GROUP -->#0000FF<!-- ENDIF -->;">{bcc_recipient.NAME}</a><!-- ENDIF -->&nbsp;<!-- END bcc_recipient --><!-- ENDIF -->*/
/* 		</p>*/
/* 		<!-- ELSE -->*/
/* 		<p class="author">{MINI_POST_IMG} {L_POSTED} {L_POST_BY_AUTHOR} {POST_AUTHOR_FULL} &raquo; {POST_DATE}</p>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_POST_UNAPPROVED -->*/
/* 			<form method="post" id="mcp_approve" action="{U_APPROVE_ACTION}">*/
/* */
/* 			<p class="post-notice unapproved">*/
/* 				<input class="button2" type="submit" value="{L_DISAPPROVE}" name="action[disapprove]" /> &nbsp;*/
/* 				<input class="button1" type="submit" value="{L_APPROVE}" name="action[approve]" />*/
/* 				<!-- IF not S_FIRST_POST --><input type="hidden" name="mode" value="unapproved_posts" /><!-- ENDIF -->*/
/* 				<input type="hidden" name="post_id_list[]" value="{POST_ID}" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</p>*/
/* 			</form>*/
/* 		<!-- ELSEIF S_POST_DELETED -->*/
/* 			<form method="post" id="mcp_approve" action="{U_APPROVE_ACTION}">*/
/* */
/* 			<p class="post-notice deleted">*/
/* 				<!-- IF S_CAN_DELETE_POST --><input class="button2" type="submit" value="{L_DELETE}" name="action[delete]" /> &nbsp;<!-- ENDIF -->*/
/* 				<input class="button1" type="submit" value="{L_RESTORE}" name="action[restore]" />*/
/* 				<!-- IF not S_FIRST_POST --><input type="hidden" name="mode" value="deleted_posts" /><!-- ENDIF -->*/
/* 				<input type="hidden" name="post_id_list[]" value="{POST_ID}" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</p>*/
/* 			</form>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MESSAGE_REPORTED -->*/
/* 			<p class="post-notice reported">*/
/* 				{REPORTED_IMG} <a href="{U_MCP_REPORT}"><strong>{L_MESSAGE_REPORTED}</strong></a>*/
/* 			</p>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<div class="content" id="post_details">*/
/* 			{POST_PREVIEW}*/
/* 		</div>*/
/* */
/* 		<!-- IF S_HAS_ATTACHMENTS -->*/
/* 			<dl class="attachbox">*/
/* 				<dt>{L_ATTACHMENTS}</dt>*/
/* 				<!-- BEGIN attachment -->*/
/* 					<dd>{attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 				<!-- END attachment -->*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF DELETED_MESSAGE or DELETE_REASON -->*/
/* 			<div class="notice">*/
/* 				{DELETED_MESSAGE}*/
/* 				<!-- IF DELETE_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{DELETE_REASON}</em><!-- ENDIF -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF SIGNATURE -->*/
/* 			<div id="sig{POST_ID}" class="signature">{SIGNATURE}</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MCP_REPORT and S_CAN_VIEWIP -->*/
/* 			<hr />*/
/* 			<div><!-- IF S_PM -->{L_THIS_PM_IP}<!-- ELSE -->{L_THIS_POST_IP}<!-- ENDIF -->{L_COLON} <!-- IF U_WHOIS -->*/
/* 				<a href="{U_WHOIS}"><!-- IF POST_IPADDR -->{POST_IPADDR}<!-- ELSE -->{POST_IP}<!-- ENDIF --></a> (<!-- IF POST_IPADDR -->{POST_IP}<!-- ELSE --><a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a><!-- ENDIF -->)*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF POST_IPADDR -->{POST_IPADDR} ({POST_IP})<!-- ELSE -->{POST_IP}<!-- IF U_LOOKUP_IP --> (<a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a>)<!-- ENDIF --><!-- ENDIF -->*/
/* 			<!-- ENDIF --></div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_CAN_LOCK_POST or S_CAN_DELETE_POST or S_CAN_CHGPOSTER or S_MCP_POST_ADDITIONAL_OPTS -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<h3>{L_MOD_OPTIONS}</h3>*/
/* 		<!-- IF S_CAN_CHGPOSTER -->*/
/* 			<form method="post" id="mcp_chgposter" action="{U_POST_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 			<dl>*/
/* 				<dt><label>{L_CHANGE_POSTER}{L_COLON}</label></dt>*/
/* 				<!-- IF S_USER_SELECT --><dd><select name="u">{S_USER_SELECT}</select> <input type="submit" class="button2" name="action[chgposter_ip]" value="{L_CONFIRM}" /></dd><!-- ENDIF -->*/
/* 				<dd style="margin-top:3px;">*/
/* 					<input class="inputbox autowidth" type="text" name="username" value="" />*/
/* 					<input type="submit" class="button2" name="action[chgposter]" value="{L_CONFIRM}" />*/
/* 					<br />*/
/* 					<span>[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]</span>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* 			</form>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT mcp_post_additional_options -->*/
/* */
/* 		<!-- IF S_CAN_LOCK_POST or S_CAN_DELETE_POST -->*/
/* 			<form method="post" id="mcp" action="{U_MCP_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 			<dl>*/
/* 				<dt><label>{L_MOD_OPTIONS}{L_COLON}</label></dt>*/
/* 				<dd><select name="action">*/
/* 					<!-- IF S_CAN_LOCK_POST --><!-- IF S_POST_LOCKED --><option value="unlock_post">{L_UNLOCK_POST} [{L_UNLOCK_POST_EXPLAIN}]</option><!-- ELSE --><option value="lock_post">{L_LOCK_POST} [{L_LOCK_POST_EXPLAIN}]</option><!-- ENDIF --><!-- ENDIF -->*/
/* 					<!-- IF S_CAN_DELETE_POST --><option value="delete_post">{L_DELETE_POST}</option><!-- ENDIF -->*/
/* 					</select> <input class="button2" type="submit" value="{L_SUBMIT}" />*/
/* 				</dd>*/
/* 			</dl>*/
/* 			{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* 			</form>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* */
/* <!-- IF S_MCP_QUEUE or S_MCP_REPORT or RETURN_TOPIC -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<p><!-- IF S_MCP_QUEUE -->{RETURN_QUEUE} | {RETURN_TOPIC_SIMPLE} | {RETURN_POST}<!-- ELSEIF S_MCP_REPORT -->{RETURN_REPORTS}<!-- IF not S_PM --> | <a href="{U_VIEW_POST}">{L_VIEW_POST}</a> | <a href="{U_VIEW_TOPIC}">{L_VIEW_TOPIC}</a> | <a href="{U_VIEW_FORUM}">{L_VIEW_FORUM}</a><!-- ENDIF --><!-- ELSE -->{RETURN_TOPIC}<!-- ENDIF --></p>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_MCP_QUEUE -->*/
/* <!-- ELSE -->*/
/* */
/* 	<!-- IF S_SHOW_USER_NOTES -->*/
/* 		<div class="panel" id="usernotes">*/
/* 			<div class="inner">*/
/* */
/* 			<form method="post" id="mcp_notes" action="{U_POST_ACTION}">*/
/* */
/* 			<!-- IF S_USER_NOTES -->*/
/* 				<h3>{L_FEEDBACK}</h3>*/
/* */
/* 				<!-- BEGIN usernotes -->*/
/* 					<span class="small"><strong>{L_REPORTED_BY}{L_COLON} {usernotes.REPORT_BY} &laquo; {usernotes.REPORT_AT}</strong></span>*/
/* 					<!-- IF S_CLEAR_ALLOWED --><div class="right-box"><input type="checkbox" name="marknote[]" value="{usernotes.ID}" /></div><!-- ENDIF -->*/
/* 					<div class="postbody">{usernotes.ACTION}</div>*/
/* */
/* 					<hr class="dashed" />*/
/* 				<!-- END usernotes -->*/
/* */
/* 				<!-- IF S_CLEAR_ALLOWED -->*/
/* 					<fieldset class="submit-buttons">*/
/* 						<input class="button2" type="submit" name="action[del_all]" value="{L_DELETE_ALL}" />&nbsp;*/
/* 						<input class="button2" type="submit" name="action[del_marked]" value="{L_DELETE_MARKED}" />*/
/* 					</fieldset>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<h3>{L_ADD_FEEDBACK}</h3>*/
/* 			<p>{L_ADD_FEEDBACK_EXPLAIN}</p>*/
/* */
/* 			<fieldset>*/
/* 				<textarea name="usernote" rows="4" cols="76" class="inputbox"></textarea>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="submit-buttons">*/
/* 				<input class="button1" type="submit" name="action[add_feedback]" value="{L_SUBMIT}" />&nbsp;*/
/* 				<input class="button2" type="reset" value="{L_RESET}" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_REPORTS -->*/
/* 		<div class="panel" id="reports">*/
/* 			<div class="inner">*/
/* */
/* 			<h3>{L_MCP_POST_REPORTS}</h3>*/
/* */
/* 			<!-- BEGIN reports -->*/
/* 				<span class="small"><strong>{L_REPORTED_BY}{L_COLON} <!-- IF reports.U_REPORTER --><a href="{reports.U_REPORTER}">{reports.REPORTER}</a><!-- ELSE -->{reports.REPORTER}<!-- ENDIF --> &laquo; {reports.REPORT_TIME}</strong></span>*/
/* 				<p><em>{reports.REASON_TITLE}{L_COLON} {reports.REASON_DESC}</em><!-- IF reports.REPORT_TEXT --><br />{reports.REPORT_TEXT}<!-- ENDIF --></p>*/
/* 			<!-- END reports -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_CAN_VIEWIP and not S_MCP_REPORT -->*/
/* 		<div class="panel" id="ip">*/
/* 			<div class="inner">*/
/* */
/* 			<p>{L_THIS_POST_IP}{L_COLON} <!-- IF U_WHOIS -->*/
/* 				<a href="{U_WHOIS}"><!-- IF POST_IPADDR -->{POST_IPADDR}<!-- ELSE -->{POST_IP}<!-- ENDIF --></a> (<!-- IF POST_IPADDR -->{POST_IP}<!-- ELSE --><a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a><!-- ENDIF -->)*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF POST_IPADDR -->{POST_IPADDR} ({POST_IP})<!-- ELSE -->{POST_IP}<!-- IF U_LOOKUP_IP --> (<a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a>)<!-- ENDIF --><!-- ENDIF -->*/
/* 			<!-- ENDIF --></p>*/
/* */
/* 			<table class="table1">*/
/* 			<thead>*/
/* 			<tr>*/
/* 				<th class="name">{L_OTHER_USERS}</th>*/
/* 				<th class="posts">{L_POSTS}</th>*/
/* 			</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			<!-- BEGIN userrow -->*/
/* 			<tr class="<!-- IF userrow.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 				<td><!-- IF userrow.U_PROFILE --><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a><!-- ELSE -->{userrow.USERNAME}<!-- ENDIF --></td>*/
/* 				<td class="posts"><a href="{userrow.U_SEARCHPOSTS}" title="{L_SEARCH_POSTS_BY} {userrow.USERNAME}">{userrow.NUM_POSTS}</a></td>*/
/* 			</tr>*/
/* 			<!-- BEGINELSE -->*/
/* 				<tr>*/
/* 					<td colspan="2">{L_NO_MATCHES_FOUND}</td>*/
/* 				</tr>*/
/* 			<!-- END userrow -->*/
/* 			</tbody>*/
/* 			</table>*/
/* */
/* 			<table class="table1">*/
/* 			<thead>*/
/* 			<tr>*/
/* 				<th class="name">{L_IPS_POSTED_FROM}</th>*/
/* 				<th class="posts">{L_POSTS}</th>*/
/* 			</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			<!-- BEGIN iprow -->*/
/* 			<tr class="<!-- IF iprow.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 				<td><!-- IF iprow.HOSTNAME --><a href="{iprow.U_WHOIS}">{iprow.HOSTNAME}</a> ({iprow.IP})<!-- ELSE --><a href="{iprow.U_WHOIS}">{iprow.IP}</a> (<a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a>)<!-- ENDIF --></td>*/
/* 				<td class="posts">{iprow.NUM_POSTS}</td>*/
/* 			</tr>*/
/* 			<!-- BEGINELSE -->*/
/* 				<tr>*/
/* 					<td colspan="2">{L_NO_MATCHES_FOUND}</td>*/
/* 				</tr>*/
/* 			<!-- END iprow -->*/
/* 			</tbody>*/
/* 			</table>*/
/* */
/* 			<p><a href="{U_LOOKUP_ALL}#ip">{L_LOOKUP_ALL}</a></p>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_TOPIC_REVIEW --><!-- INCLUDE posting_topic_review.html --><!-- ENDIF -->*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
