<?php

/* posting_preview.html */
class __TwigTemplate_824250e84924696272e1464a75e48730a6dc21ccdbe9ed25daed5efe80ff6704 extends Twig_Template
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
        echo "<div class=\"post ";
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if ($_S_PRIVMSGS_) {
            echo "pm";
        } else {
            echo "bg2";
        }
        echo "\" id=\"preview\">
\t<div class=\"inner\">

";
        // line 4
        if (isset($context["S_HAS_POLL_OPTIONS"])) { $_S_HAS_POLL_OPTIONS_ = $context["S_HAS_POLL_OPTIONS"]; } else { $_S_HAS_POLL_OPTIONS_ = null; }
        if ($_S_HAS_POLL_OPTIONS_) {
            // line 5
            echo "\t<div class=\"content\">
\t\t<h2>";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("PREVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["POLL_QUESTION"])) { $_POLL_QUESTION_ = $context["POLL_QUESTION"]; } else { $_POLL_QUESTION_ = null; }
            echo $_POLL_QUESTION_;
            echo "</h2>
\t\t<p class=\"author\">";
            // line 7
            if (isset($context["L_POLL_LENGTH"])) { $_L_POLL_LENGTH_ = $context["L_POLL_LENGTH"]; } else { $_L_POLL_LENGTH_ = null; }
            if ($_L_POLL_LENGTH_) {
                echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
                echo "<br />";
            }
            echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
            echo "</p>

\t\t<fieldset class=\"polls\">
\t\t";
            // line 10
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 11
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"vote_";
                // line 12
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                echo "\">";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_CAPTION", array());
                echo "</label></dt>
\t\t\t\t<dd style=\"width: auto;\">";
                // line 13
                if (isset($context["S_IS_MULTI_CHOICE"])) { $_S_IS_MULTI_CHOICE_ = $context["S_IS_MULTI_CHOICE"]; } else { $_S_IS_MULTI_CHOICE_ = null; }
                if ($_S_IS_MULTI_CHOICE_) {
                    echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                    echo "\" value=\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                    echo "\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " />";
                } else {
                    echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                    echo "\" value=\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                    echo "\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " />";
                }
                echo "</dd>
\t\t\t</dl>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"post bg2\">
\t<div class=\"inner\">

";
        }
        // line 26
        echo "
";
        // line 27
        if (isset($context["posting_preview_poll_after"])) { $_posting_preview_poll_after_ = $context["posting_preview_poll_after"]; } else { $_posting_preview_poll_after_ = null; }
        // line 28
        echo "
\t<div class=\"postbody\">
\t\t<h3>";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if (isset($context["PREVIEW_SUBJECT"])) { $_PREVIEW_SUBJECT_ = $context["PREVIEW_SUBJECT"]; } else { $_PREVIEW_SUBJECT_ = null; }
        echo $_PREVIEW_SUBJECT_;
        echo "</h3>

\t\t<div class=\"content\">";
        // line 32
        if (isset($context["PREVIEW_MESSAGE"])) { $_PREVIEW_MESSAGE_ = $context["PREVIEW_MESSAGE"]; } else { $_PREVIEW_MESSAGE_ = null; }
        echo $_PREVIEW_MESSAGE_;
        echo "</div>

\t\t";
        // line 34
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "attachment", array()))) {
            // line 35
            echo "\t\t<dl class=\"attachbox\">
\t\t\t<dt>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t";
            // line 37
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 38
                echo "\t\t\t<dd>";
                if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t</dl>
\t\t";
        }
        // line 42
        echo "
\t\t";
        // line 43
        if (isset($context["PREVIEW_SIGNATURE"])) { $_PREVIEW_SIGNATURE_ = $context["PREVIEW_SIGNATURE"]; } else { $_PREVIEW_SIGNATURE_ = null; }
        if ($_PREVIEW_SIGNATURE_) {
            echo "<div class=\"signature\">";
            if (isset($context["PREVIEW_SIGNATURE"])) { $_PREVIEW_SIGNATURE_ = $context["PREVIEW_SIGNATURE"]; } else { $_PREVIEW_SIGNATURE_ = null; }
            echo $_PREVIEW_SIGNATURE_;
            echo "</div>";
        }
        // line 44
        echo "\t</div>

\t</div>
</div>

<hr />
";
    }

    public function getTemplateName()
    {
        return "posting_preview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 44,  176 => 43,  173 => 42,  169 => 40,  159 => 38,  154 => 37,  150 => 36,  147 => 35,  144 => 34,  138 => 32,  129 => 30,  125 => 28,  123 => 27,  120 => 26,  108 => 16,  72 => 13,  64 => 12,  61 => 11,  56 => 10,  45 => 7,  37 => 6,  34 => 5,  31 => 4,  19 => 1,);
    }
}
/* <div class="post <!-- IF S_PRIVMSGS -->pm<!-- ELSE -->bg2<!-- ENDIF -->" id="preview">*/
/* 	<div class="inner">*/
/* */
/* <!-- IF S_HAS_POLL_OPTIONS -->*/
/* 	<div class="content">*/
/* 		<h2>{L_PREVIEW}{L_COLON} {POLL_QUESTION}</h2>*/
/* 		<p class="author"><!-- IF L_POLL_LENGTH -->{L_POLL_LENGTH}<br /><!-- ENDIF -->{L_MAX_VOTES}</p>*/
/* */
/* 		<fieldset class="polls">*/
/* 		<!-- BEGIN poll_option -->*/
/* 			<dl>*/
/* 				<dt><label for="vote_{poll_option.POLL_OPTION_ID}">{poll_option.POLL_OPTION_CAPTION}</label></dt>*/
/* 				<dd style="width: auto;"><!-- IF S_IS_MULTI_CHOICE --><input type="checkbox" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ELSE --><input type="radio" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ENDIF --></dd>*/
/* 			</dl>*/
/* 		<!-- END poll_option -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="post bg2">*/
/* 	<div class="inner">*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT posting_preview_poll_after -->*/
/* */
/* 	<div class="postbody">*/
/* 		<h3>{L_PREVIEW}{L_COLON} {PREVIEW_SUBJECT}</h3>*/
/* */
/* 		<div class="content">{PREVIEW_MESSAGE}</div>*/
/* */
/* 		<!-- IF .attachment -->*/
/* 		<dl class="attachbox">*/
/* 			<dt>{L_ATTACHMENTS}</dt>*/
/* 			<!-- BEGIN attachment -->*/
/* 			<dd>{attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 			<!-- END attachment -->*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF PREVIEW_SIGNATURE --><div class="signature">{PREVIEW_SIGNATURE}</div><!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <hr />*/
/* */
