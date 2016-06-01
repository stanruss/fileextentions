<?php

/* simple_footer.html */
class __TwigTemplate_9ccce2fa6e43bd40ac97c266daf9ca26917b230917fbc200c6d0bad8a8fa5d62 extends Twig_Template
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
        echo "\t\t<div style=\"text-align: ";
        if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
        echo $_S_CONTENT_FLOW_END_;
        echo ";\"><a href=\"#\" onclick=\"self.close(); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("CLOSE_WINDOW");
        echo "</a></div>
\t<br /><br />
</div>

<div id=\"page-footer\">

\t";
        // line 7
        if (isset($context["S_COPYRIGHT_HTML"])) { $_S_COPYRIGHT_HTML_ = $context["S_COPYRIGHT_HTML"]; } else { $_S_COPYRIGHT_HTML_ = null; }
        if ($_S_COPYRIGHT_HTML_) {
            // line 8
            echo "\t\t<br />";
            if (isset($context["CREDIT_LINE"])) { $_CREDIT_LINE_ = $context["CREDIT_LINE"]; } else { $_CREDIT_LINE_ = null; }
            echo $_CREDIT_LINE_;
            echo "
\t\t";
            // line 9
            if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
            if ($_TRANSLATION_INFO_) {
                echo "<br />";
                if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
                echo $_TRANSLATION_INFO_;
            }
            // line 10
            echo "\t";
        }
        // line 11
        echo "
\t";
        // line 12
        if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
        if ($_DEBUG_OUTPUT_) {
            // line 13
            echo "\t\t";
            if (isset($context["S_COPYRIGHT_HTML"])) { $_S_COPYRIGHT_HTML_ = $context["S_COPYRIGHT_HTML"]; } else { $_S_COPYRIGHT_HTML_ = null; }
            if ($_S_COPYRIGHT_HTML_) {
                echo "<br /><br />";
            }
            // line 14
            echo "\t\t";
            if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
            echo $_DEBUG_OUTPUT_;
            echo "
\t";
        }
        // line 16
        echo "
</div>

<script type=\"text/javascript\" src=\"";
        // line 19
        if (isset($context["T_JQUERY_LINK"])) { $_T_JQUERY_LINK_ = $context["T_JQUERY_LINK"]; } else { $_T_JQUERY_LINK_ = null; }
        echo $_T_JQUERY_LINK_;
        echo "\"></script>
";
        // line 20
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
            echo $_T_ASSETS_PATH_;
            echo "/javascript/jquery.min.js?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\">\\x3C/script>');</script>";
        }
        // line 21
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        echo $_T_ASSETS_PATH_;
        echo "/javascript/core.js?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\"></script>

";
        // line 23
        if (isset($context["acp_simple_footer_after"])) { $_acp_simple_footer_after_ = $context["acp_simple_footer_after"]; } else { $_acp_simple_footer_after_ = null; }
        // line 24
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "SCRIPTS", array());
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  101 => 23,  91 => 21,  80 => 20,  75 => 19,  70 => 16,  63 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  41 => 9,  35 => 8,  32 => 7,  19 => 1,);
    }
}
/* 		<div style="text-align: {S_CONTENT_FLOW_END};"><a href="#" onclick="self.close(); return false;">{L_CLOSE_WINDOW}</a></div>*/
/* 	<br /><br />*/
/* </div>*/
/* */
/* <div id="page-footer">*/
/* */
/* 	<!-- IF S_COPYRIGHT_HTML -->*/
/* 		<br />{CREDIT_LINE}*/
/* 		<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF DEBUG_OUTPUT -->*/
/* 		<!-- IF S_COPYRIGHT_HTML --><br /><br /><!-- ENDIF -->*/
/* 		{DEBUG_OUTPUT}*/
/* 	<!-- ENDIF -->*/
/* */
/* </div>*/
/* */
/* <script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <!-- EVENT acp_simple_footer_after -->*/
/* {$SCRIPTS}*/
/* */
/* </body>*/
/* </html>*/
/* */
