<?php

/* simple_footer.html */
class __TwigTemplate_dd993e57e4e9e1c99456ff134faffd95e0e1787aa6b92c2c246d67114ff15002 extends Twig_Template
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
        echo "\t</div>

\t<div class=\"copyright\" role=\"contentinfo\">";
        // line 3
        if (isset($context["CREDIT_LINE"])) { $_CREDIT_LINE_ = $context["CREDIT_LINE"]; } else { $_CREDIT_LINE_ = null; }
        echo $_CREDIT_LINE_;
        echo "
\t\t";
        // line 4
        if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
        if ($_TRANSLATION_INFO_) {
            echo "<br />";
            if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
            echo $_TRANSLATION_INFO_;
        }
        // line 5
        echo "\t\t";
        if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
        if ($_DEBUG_OUTPUT_) {
            echo "<br />";
            if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
            echo $_DEBUG_OUTPUT_;
        }
        // line 6
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["T_JQUERY_LINK"])) { $_T_JQUERY_LINK_ = $context["T_JQUERY_LINK"]; } else { $_T_JQUERY_LINK_ = null; }
        echo $_T_JQUERY_LINK_;
        echo "\"></script>
";
        // line 24
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
        // line 25
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        echo $_T_ASSETS_PATH_;
        echo "/javascript/core.js?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\"></script>
";
        // line 26
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 27
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 28
        echo "
";
        // line 29
        if (isset($context["simple_footer_after"])) { $_simple_footer_after_ = $context["simple_footer_after"]; } else { $_simple_footer_after_ = null; }
        // line 30
        echo "
";
        // line 31
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
        return array (  141 => 31,  138 => 30,  136 => 29,  133 => 28,  118 => 27,  103 => 26,  94 => 25,  83 => 24,  78 => 23,  63 => 13,  47 => 8,  43 => 6,  35 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
/* 	</div>*/
/* */
/* 	<div class="copyright" role="contentinfo">{CREDIT_LINE}*/
/* 		<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 		<!-- IF DEBUG_OUTPUT --><br />{DEBUG_OUTPUT}<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 		<div id="darken">&nbsp;</div>*/
/* 	</div>*/
/* 	<div id="loading_indicator"></div>*/
/* */
/* 	<div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<h3 class="alert_title"></h3><p class="alert_text"></p>*/
/* 	</div>*/
/* 	<div id="phpbb_confirm" class="phpbb_alert">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<div class="alert_text"></div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* <!-- INCLUDEJS forum_fn.js -->*/
/* <!-- INCLUDEJS ajax.js -->*/
/* */
/* <!-- EVENT simple_footer_after -->*/
/* */
/* {$SCRIPTS}*/
/* */
/* </body>*/
/* </html>*/
/* */
