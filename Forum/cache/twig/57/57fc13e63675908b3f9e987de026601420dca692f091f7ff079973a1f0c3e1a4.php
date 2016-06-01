<?php

/* confirm_delete_body.html */
class __TwigTemplate_75c5dbceec1d2fb869c8381d2ccba19daf9d6d7254fb3192b4d1d561de520ac4 extends Twig_Template
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
            echo "\t<form action=\"";
            if (isset($context["S_CONFIRM_ACTION"])) { $_S_CONFIRM_ACTION_ = $context["S_CONFIRM_ACTION"]; } else { $_S_CONFIRM_ACTION_ = null; }
            echo $_S_CONFIRM_ACTION_;
            echo "\" method=\"post\">
\t\t<p>";
            // line 3
            if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
            echo $_MESSAGE_TEXT_;
            echo "</p>

\t\t";
            // line 5
            if (isset($context["S_SHADOW_TOPICS"])) { $_S_SHADOW_TOPICS_ = $context["S_SHADOW_TOPICS"]; } else { $_S_SHADOW_TOPICS_ = null; }
            if ( !$_S_SHADOW_TOPICS_) {
                // line 6
                echo "\t\t";
                if (isset($context["S_SOFTDELETED"])) { $_S_SOFTDELETED_ = $context["S_SOFTDELETED"]; } else { $_S_SOFTDELETED_ = null; }
                if (isset($context["S_ALLOWED_DELETE"])) { $_S_ALLOWED_DELETE_ = $context["S_ALLOWED_DELETE"]; } else { $_S_ALLOWED_DELETE_ = null; }
                if (isset($context["S_ALLOWED_SOFTDELETE"])) { $_S_ALLOWED_SOFTDELETE_ = $context["S_ALLOWED_SOFTDELETE"]; } else { $_S_ALLOWED_SOFTDELETE_ = null; }
                if ((( !$_S_SOFTDELETED_ && $_S_ALLOWED_DELETE_) && $_S_ALLOWED_SOFTDELETE_)) {
                    // line 7
                    echo "\t\t\t<label>
\t\t\t\t<strong>";
                    // line 8
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 9
                    if (isset($context["S_CHECKED_PERMANENT"])) { $_S_CHECKED_PERMANENT_ = $context["S_CHECKED_PERMANENT"]; } else { $_S_CHECKED_PERMANENT_ = null; }
                    echo $_S_CHECKED_PERMANENT_;
                    echo " />
\t\t\t\t";
                    // line 10
                    if (isset($context["S_TOPIC_MODE"])) { $_S_TOPIC_MODE_ = $context["S_TOPIC_MODE"]; } else { $_S_TOPIC_MODE_ = null; }
                    if ($_S_TOPIC_MODE_) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 11
                    echo "\t\t\t</label>
\t\t";
                }
                // line 13
                echo "
\t\t<label for=\"delete_reason\">
\t\t\t<strong>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</span><br />
\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t</label>
\t\t";
            }
            // line 19
            echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

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
            $this->loadTemplate("overall_header.html", "confirm_delete_body.html", 28)->display($context);
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
\t<div class=\"inner\">

\t<h2 class=\"message-title\">";
            // line 34
            if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
            echo $_MESSAGE_TITLE_;
            echo "</h2>

\t<p>";
            // line 36
            if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
            echo $_MESSAGE_TEXT_;
            echo "</p>

\t";
            // line 38
            if (isset($context["S_SHADOW_TOPICS"])) { $_S_SHADOW_TOPICS_ = $context["S_SHADOW_TOPICS"]; } else { $_S_SHADOW_TOPICS_ = null; }
            if ( !$_S_SHADOW_TOPICS_) {
                // line 39
                echo "\t<fieldset class=\"fields1\">
\t\t";
                // line 40
                if (isset($context["S_SOFTDELETED"])) { $_S_SOFTDELETED_ = $context["S_SOFTDELETED"]; } else { $_S_SOFTDELETED_ = null; }
                if (isset($context["S_ALLOWED_DELETE"])) { $_S_ALLOWED_DELETE_ = $context["S_ALLOWED_DELETE"]; } else { $_S_ALLOWED_DELETE_ = null; }
                if (isset($context["S_ALLOWED_SOFTDELETE"])) { $_S_ALLOWED_SOFTDELETE_ = $context["S_ALLOWED_SOFTDELETE"]; } else { $_S_ALLOWED_SOFTDELETE_ = null; }
                if ((( !$_S_SOFTDELETED_ && $_S_ALLOWED_DELETE_) && $_S_ALLOWED_SOFTDELETE_)) {
                    // line 41
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 42
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 45
                    if (isset($context["S_CHECKED_PERMANENT"])) { $_S_CHECKED_PERMANENT_ = $context["S_CHECKED_PERMANENT"]; } else { $_S_CHECKED_PERMANENT_ = null; }
                    echo $_S_CHECKED_PERMANENT_;
                    echo " />
\t\t\t\t\t\t";
                    // line 46
                    if (isset($context["S_TOPIC_MODE"])) { $_S_TOPIC_MODE_ = $context["S_TOPIC_MODE"]; } else { $_S_TOPIC_MODE_ = null; }
                    if ($_S_TOPIC_MODE_) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 47
                    echo "\t\t\t\t\t</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
                }
                // line 51
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"delete_reason\">";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
            }
            // line 58
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 60
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button1\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

\t</div>
</div>
</form>

";
            // line 69
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_delete_body.html", 69)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 69,  202 => 62,  198 => 61,  193 => 60,  189 => 58,  178 => 53,  174 => 51,  168 => 47,  161 => 46,  156 => 45,  149 => 42,  146 => 41,  141 => 40,  138 => 39,  135 => 38,  129 => 36,  123 => 34,  115 => 30,  112 => 29,  100 => 28,  97 => 27,  89 => 22,  85 => 21,  81 => 19,  71 => 15,  67 => 13,  63 => 11,  56 => 10,  51 => 9,  46 => 8,  43 => 7,  37 => 6,  34 => 5,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* 	<form action="{S_CONFIRM_ACTION}" method="post">*/
/* 		<p>{MESSAGE_TEXT}</p>*/
/* */
/* 		<!-- IF not S_SHADOW_TOPICS -->*/
/* 		<!-- IF not S_SOFTDELETED and S_ALLOWED_DELETE and S_ALLOWED_SOFTDELETE -->*/
/* 			<label>*/
/* 				<strong>{L_DELETE_PERMANENTLY}{L_COLON}</strong>*/
/* 				<input id="delete_permanent" name="delete_permanent" type="checkbox" value="1" {S_CHECKED_PERMANENT} />*/
/* 				<!-- IF S_TOPIC_MODE -->{L_DELETE_TOPIC_PERMANENTLY}<!-- ELSE -->{L_DELETE_POST_PERMANENTLY}<!-- ENDIF -->*/
/* 			</label>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<label for="delete_reason">*/
/* 			<strong>{L_DELETE_REASON}{L_COLON}</strong><br /><span>{L_DELETE_REASON_EXPLAIN}</span><br />*/
/* 			<input type="text" name="delete_reason" value="" class="inputbox autowidth" maxlength="120" size="45" />*/
/* 		</label>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<fieldset class="submit-buttons">*/
/* 			<input type="button" name="confirm" value="{L_YES}" class="button1" />&nbsp;*/
/* 			<input type="button" name="cancel" value="{L_NO}" class="button2" />*/
/* 		</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <form id="confirm" action="{S_CONFIRM_ACTION}" method="post">*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h2 class="message-title">{MESSAGE_TITLE}</h2>*/
/* */
/* 	<p>{MESSAGE_TEXT}</p>*/
/* */
/* 	<!-- IF not S_SHADOW_TOPICS -->*/
/* 	<fieldset class="fields1">*/
/* 		<!-- IF not S_SOFTDELETED and S_ALLOWED_DELETE and S_ALLOWED_SOFTDELETE -->*/
/* 			<dl>*/
/* 				<dt><label for="delete_permanent">{L_DELETE_PERMANENTLY}{L_COLON}</label></dt>*/
/* 				<dd>*/
/* 					<label for="delete_permanent">*/
/* 						<input id="delete_permanent" name="delete_permanent" type="checkbox" value="1" {S_CHECKED_PERMANENT} />*/
/* 						<!-- IF S_TOPIC_MODE -->{L_DELETE_TOPIC_PERMANENTLY}<!-- ELSE -->{L_DELETE_POST_PERMANENTLY}<!-- ENDIF -->*/
/* 					</label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<dl>*/
/* 			<dt><label for="delete_reason">{L_DELETE_REASON}{L_COLON}</label><br /><span>{L_DELETE_REASON_EXPLAIN}</span></dt>*/
/* 			<dd><input type="text" name="delete_reason" id="delete_reason" value="" class="inputbox autowidth" maxlength="120" size="45" /></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		<input type="submit" name="confirm" value="{L_YES}" class="button1" />&nbsp; */
/* 		<input type="submit" name="cancel" value="{L_NO}" class="button2" />*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
