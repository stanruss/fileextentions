<?php

/* mcp_approve.html */
class __TwigTemplate_9fce23f3d5678343561dfc950f56a86db73c5fc933884c8cf3401fb15d385dc7 extends Twig_Template
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
        if (isset($context["S_AJAX_REQUEST"])) { $_S_AJAX_REQUEST_ = $context["S_AJAX_REQUEST"]; } else { $_S_AJAX_REQUEST_ = null; }
        if ($_S_AJAX_REQUEST_) {
            // line 2
            echo "
\t<h3>";
            // line 3
            if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
            echo $_MESSAGE_TITLE_;
            echo "</h3>
\t<p>";
            // line 4
            if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
            echo $_MESSAGE_TEXT_;
            echo "</p>

\t";
            // line 6
            if (isset($context["S_NOTIFY_POSTER"])) { $_S_NOTIFY_POSTER_ = $context["S_NOTIFY_POSTER"]; } else { $_S_NOTIFY_POSTER_ = null; }
            if ($_S_NOTIFY_POSTER_) {
                // line 7
                echo "\t\t<label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                if (isset($context["S_APPROVE"])) { $_S_APPROVE_ = $context["S_APPROVE"]; } else { $_S_APPROVE_ = null; }
                if ($_S_APPROVE_) {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if (isset($context["S_APPROVE"])) { $_S_APPROVE_ = $context["S_APPROVE"]; } else { $_S_APPROVE_ = null; }
            if (isset($context["S_RESTORE"])) { $_S_RESTORE_ = $context["S_RESTORE"]; } else { $_S_RESTORE_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if ((( !$_S_APPROVE_ &&  !$_S_RESTORE_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "reason", array())))) {
                // line 11
                echo "\t\t<label><strong>";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t<select name=\"reason_id\">
\t\t\t";
                // line 13
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "reason", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
                    echo $this->getAttribute($_reason_, "ID", array());
                    echo "\"";
                    if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
                    if ($this->getAttribute($_reason_, "S_SELECTED", array())) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
                    echo $this->getAttribute($_reason_, "DESCRIPTION", array());
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</select></label>

\t\t<label><strong>";
                // line 16
                echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CAN_LEAVE_BLANK");
                echo "</span>
\t\t\t<textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 17
                if (isset($context["REASON"])) { $_REASON_ = $context["REASON"]; } else { $_REASON_ = null; }
                echo $_REASON_;
                echo "</textarea>
\t\t</label>
\t";
            }
            // line 20
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 22
            if (isset($context["YES_VALUE"])) { $_YES_VALUE_ = $context["YES_VALUE"]; } else { $_YES_VALUE_ = null; }
            echo $_YES_VALUE_;
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

";
        } else {
            // line 27
            echo "
";
            // line 28
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "mcp_approve.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "
<form id=\"confirm\" action=\"";
            // line 30
            if (isset($context["S_CONFIRM_ACTION"])) { $_S_CONFIRM_ACTION_ = $context["S_CONFIRM_ACTION"]; } else { $_S_CONFIRM_ACTION_ = null; }
            echo $_S_CONFIRM_ACTION_;
            echo "\" method=\"post\">
<div class=\"panel\">
\t";
            // line 32
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t<div class=\"inner\">

\t<div class=\"content\">

\t\t<h2 class=\"message-title\">";
            // line 37
            if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
            echo $_MESSAGE_TITLE_;
            echo "</h2>
\t\t";
            // line 38
            if (isset($context["ADDITIONAL_MSG"])) { $_ADDITIONAL_MSG_ = $context["ADDITIONAL_MSG"]; } else { $_ADDITIONAL_MSG_ = null; }
            if ($_ADDITIONAL_MSG_) {
                echo "<p class=\"error\">";
                if (isset($context["ADDITIONAL_MSG"])) { $_ADDITIONAL_MSG_ = $context["ADDITIONAL_MSG"]; } else { $_ADDITIONAL_MSG_ = null; }
                echo $_ADDITIONAL_MSG_;
                echo "</p>";
            }
            // line 39
            echo "
\t\t<fieldset>
\t\t";
            // line 41
            if (isset($context["S_NOTIFY_POSTER"])) { $_S_NOTIFY_POSTER_ = $context["S_NOTIFY_POSTER"]; } else { $_S_NOTIFY_POSTER_ = null; }
            if ($_S_NOTIFY_POSTER_) {
                // line 42
                echo "\t\t\t<dl class=\"panel\">
\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                // line 44
                if (isset($context["S_APPROVE"])) { $_S_APPROVE_ = $context["S_APPROVE"]; } else { $_S_APPROVE_ = null; }
                if ($_S_APPROVE_) {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 47
            echo "
\t\t";
            // line 48
            if (isset($context["S_APPROVE"])) { $_S_APPROVE_ = $context["S_APPROVE"]; } else { $_S_APPROVE_ = null; }
            if (isset($context["S_RESTORE"])) { $_S_RESTORE_ = $context["S_RESTORE"]; } else { $_S_RESTORE_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if ((( !$_S_APPROVE_ &&  !$_S_RESTORE_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "reason", array())))) {
                // line 49
                echo "\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label>";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"reason_id\">
\t\t\t\t\t";
                // line 52
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "reason", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
                    echo $this->getAttribute($_reason_, "ID", array());
                    echo "\"";
                    if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
                    if ($this->getAttribute($_reason_, "S_SELECTED", array())) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
                    echo $this->getAttribute($_reason_, "DESCRIPTION", array());
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label for=\"reason\">";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CAN_LEAVE_BLANK");
                echo "</span></dt>
\t\t\t\t<dd><textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 58
                if (isset($context["REASON"])) { $_REASON_ = $context["REASON"]; } else { $_REASON_ = null; }
                echo $_REASON_;
                echo "</textarea></dd>
\t\t\t</dl>
\t\t";
            }
            // line 61
            echo "
\t\t<dl class=\"fields2 nobg\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><strong>";
            // line 64
            if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
            echo $_MESSAGE_TEXT_;
            echo "</strong></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 69
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "<input type=\"submit\" name=\"confirm\" value=\"";
            if (isset($context["YES_VALUE"])) { $_YES_VALUE_ = $context["YES_VALUE"]; } else { $_YES_VALUE_ = null; }
            echo $_YES_VALUE_;
            echo "\" class=\"button1\" />&nbsp; 
\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t</div>

\t</div>
</div>

</form>

";
            // line 80
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "mcp_approve.html", 80)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "mcp_approve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 80,  268 => 70,  260 => 69,  251 => 64,  246 => 61,  239 => 58,  232 => 57,  226 => 53,  205 => 52,  199 => 50,  196 => 49,  191 => 48,  188 => 47,  177 => 44,  173 => 42,  170 => 41,  166 => 39,  158 => 38,  153 => 37,  144 => 32,  138 => 30,  135 => 29,  123 => 28,  120 => 27,  113 => 23,  108 => 22,  104 => 20,  97 => 17,  90 => 16,  86 => 14,  65 => 13,  58 => 11,  53 => 10,  50 => 9,  39 => 7,  36 => 6,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* */
/* 	<h3>{MESSAGE_TITLE}</h3>*/
/* 	<p>{MESSAGE_TEXT}</p>*/
/* */
/* 	<!-- IF S_NOTIFY_POSTER -->*/
/* 		<label><input type="checkbox" name="notify_poster" checked="checked" /> <!-- IF S_APPROVE -->{L_NOTIFY_POSTER_APPROVAL}<!-- ELSE -->{L_NOTIFY_POSTER_DISAPPROVAL}<!-- ENDIF --></label>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_APPROVE and not S_RESTORE and .reason -->*/
/* 		<label><strong>{L_DISAPPROVE_REASON}{L_COLON}</strong>*/
/* 		<select name="reason_id">*/
/* 			<!-- BEGIN reason --><option value="{reason.ID}"<!-- IF reason.S_SELECTED --> selected="selected"<!-- ENDIF -->>{reason.DESCRIPTION}</option><!-- END reason -->*/
/* 		</select></label>*/
/* */
/* 		<label><strong>{L_MORE_INFO}{L_COLON}</strong><br /><span>{L_CAN_LEAVE_BLANK}</span>*/
/* 			<textarea class="inputbox" name="reason" id="reason" rows="4" cols="40">{REASON}</textarea>*/
/* 		</label>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<input type="button" name="confirm" value="{YES_VALUE}" class="button1" />&nbsp;*/
/* 		<input type="button" name="cancel" value="{L_NO}" class="button2" />*/
/* 	</fieldset>*/
/* */
/* <!-- ELSE -->*/
/* */
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <form id="confirm" action="{S_CONFIRM_ACTION}" method="post">*/
/* <div class="panel">*/
/* 	{S_FORM_TOKEN}*/
/* 	<div class="inner">*/
/* */
/* 	<div class="content">*/
/* */
/* 		<h2 class="message-title">{MESSAGE_TITLE}</h2>*/
/* 		<!-- IF ADDITIONAL_MSG --><p class="error">{ADDITIONAL_MSG}</p><!-- ENDIF -->*/
/* */
/* 		<fieldset>*/
/* 		<!-- IF S_NOTIFY_POSTER -->*/
/* 			<dl class="panel">*/
/* 				<dt>&nbsp;</dt>*/
/* 				<dd><label><input type="checkbox" name="notify_poster" checked="checked" /> <!-- IF S_APPROVE -->{L_NOTIFY_POSTER_APPROVAL}<!-- ELSE -->{L_NOTIFY_POSTER_DISAPPROVAL}<!-- ENDIF --></label></dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF not S_APPROVE and not S_RESTORE and .reason -->*/
/* 			<dl class="fields2 nobg">*/
/* 				<dt><label>{L_DISAPPROVE_REASON}{L_COLON}</label></dt>*/
/* 				<dd><select name="reason_id">*/
/* 					<!-- BEGIN reason --><option value="{reason.ID}"<!-- IF reason.S_SELECTED --> selected="selected"<!-- ENDIF -->>{reason.DESCRIPTION}</option><!-- END reason -->*/
/* 					</select>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<dl class="fields2 nobg">*/
/* 				<dt><label for="reason">{L_MORE_INFO}{L_COLON}</label><br /><span>{L_CAN_LEAVE_BLANK}</span></dt>*/
/* 				<dd><textarea class="inputbox" name="reason" id="reason" rows="4" cols="40">{REASON}</textarea></dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<dl class="fields2 nobg">*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd><strong>{MESSAGE_TEXT}</strong></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* */
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_FIELDS}<input type="submit" name="confirm" value="{YES_VALUE}" class="button1" />&nbsp; */
/* 			<input type="submit" name="cancel" value="{L_NO}" class="button2" />*/
/* 		</fieldset>*/
/* */
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
