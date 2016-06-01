<?php

/* mcp_header.html */
class __TwigTemplate_3e2d6d657045a8af7b06f512b9b2ba56ad7d3fad7871f9845bbb9a8b0717bad4 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("MCP");
        echo "</h2>

";
        // line 5
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            // line 6
            echo "\t<p class=\"linkmcp responsive-center\">
\t\t[";
            // line 7
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            if ($_U_ACP_) {
                echo "&nbsp;<a href=\"";
                if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
                echo $_U_ACP_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "\" data-responsive-text=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "</a>&nbsp;|";
            }
            echo "&nbsp;<a href=\"";
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" data-responsive-text=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a>";
            if (isset($context["U_MCP_FORUM"])) { $_U_MCP_FORUM_ = $context["U_MCP_FORUM"]; } else { $_U_MCP_FORUM_ = null; }
            if ($_U_MCP_FORUM_) {
                echo "&nbsp;|&nbsp;<a href=\"";
                if (isset($context["U_MCP_FORUM"])) { $_U_MCP_FORUM_ = $context["U_MCP_FORUM"]; } else { $_U_MCP_FORUM_ = null; }
                echo $_U_MCP_FORUM_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
                echo "</a>";
            }
            if (isset($context["U_MCP_TOPIC"])) { $_U_MCP_TOPIC_ = $context["U_MCP_TOPIC"]; } else { $_U_MCP_TOPIC_ = null; }
            if ($_U_MCP_TOPIC_) {
                echo "&nbsp;|&nbsp;<a href=\"";
                if (isset($context["U_MCP_TOPIC"])) { $_U_MCP_TOPIC_ = $context["U_MCP_TOPIC"]; } else { $_U_MCP_TOPIC_ = null; }
                echo $_U_MCP_TOPIC_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            if (isset($context["U_MCP_POST"])) { $_U_MCP_POST_ = $context["U_MCP_POST"]; } else { $_U_MCP_POST_ = null; }
            if ($_U_MCP_POST_) {
                echo "&nbsp;|&nbsp;<a href=\"";
                if (isset($context["U_MCP_POST"])) { $_U_MCP_POST_ = $context["U_MCP_POST"]; } else { $_U_MCP_POST_ = null; }
                echo $_U_MCP_POST_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_POST");
                echo "</a>";
            }
            echo "&nbsp;]
\t</p>
";
        }
        // line 10
        echo "
<div id=\"tabs\">
\t<ul>
\t\t";
        // line 13
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 14
            echo "\t\t<li class=\"tab";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            if ($this->getAttribute($_l_block1_, "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            echo $this->getAttribute($_l_block1_, "U_TITLE", array());
            echo "\">";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            echo $this->getAttribute($_l_block1_, "L_TITLE", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\">
\t\t<div id=\"navigation\" role=\"navigation\">
\t\t\t<ul>
\t\t\t";
        // line 27
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 28
            echo "\t\t\t";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            if ($this->getAttribute($_l_block1_, "S_SELECTED", array())) {
                // line 29
                echo "\t\t\t\t";
                if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_l_block1_, "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 30
                    echo "\t\t\t\t";
                    if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                    if ($this->getAttribute($_l_block2_, "S_SELECTED", array())) {
                        // line 31
                        echo "\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "U_TITLE", array());
                        echo "\"><span>";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "L_TITLE", array());
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        if ($this->getAttribute($_l_block2_, "ADD_ITEM", array())) {
                            echo " (";
                            if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                            echo $this->getAttribute($_l_block2_, "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t<li><a href=\"";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "U_TITLE", array());
                        echo "\"><span>";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "L_TITLE", array());
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        if ($this->getAttribute($_l_block2_, "ADD_ITEM", array())) {
                            echo " (";
                            if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                            echo $this->getAttribute($_l_block2_, "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"mcp-main panel-container\">
\t\t";
        // line 43
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        if ($_MESSAGE_) {
            // line 44
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 46
            if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
            echo $_MESSAGE_;
            echo "</p>
\t\t\t<p>";
            // line 47
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "return_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                if (isset($context["return_links"])) { $_return_links_ = $context["return_links"]; } else { $_return_links_ = null; }
                echo $this->getAttribute($_return_links_, "MESSAGE_LINK", array());
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 47,  226 => 46,  222 => 45,  219 => 44,  216 => 43,  209 => 38,  203 => 37,  200 => 36,  194 => 35,  177 => 33,  160 => 31,  156 => 30,  150 => 29,  146 => 28,  141 => 27,  128 => 16,  110 => 14,  105 => 13,  100 => 10,  45 => 7,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2>{L_MCP}</h2>*/
/* */
/* <!-- IF U_MCP -->*/
/* 	<p class="linkmcp responsive-center">*/
/* 		[<!-- IF U_ACP -->&nbsp;<a href="{U_ACP}" title="{L_ACP}" data-responsive-text="{L_ACP_SHORT}">{L_ACP}</a>&nbsp;|<!-- ENDIF -->&nbsp;<a href="{U_MCP}" title="{L_MCP}" data-responsive-text="{L_MCP_SHORT}">{L_MCP}</a><!-- IF U_MCP_FORUM -->&nbsp;|&nbsp;<a href="{U_MCP_FORUM}">{L_MODERATE_FORUM}</a><!-- ENDIF --><!-- IF U_MCP_TOPIC -->&nbsp;|&nbsp;<a href="{U_MCP_TOPIC}">{L_MODERATE_TOPIC}</a><!-- ENDIF --><!-- IF U_MCP_POST -->&nbsp;|&nbsp;<a href="{U_MCP_POST}">{L_MODERATE_POST}</a><!-- ENDIF -->&nbsp;]*/
/* 	</p>*/
/* <!-- ENDIF -->*/
/* */
/* <div id="tabs">*/
/* 	<ul>*/
/* 		<!-- BEGIN l_block1 -->*/
/* 		<li class="tab<!-- IF l_block1.S_SELECTED --> activetab<!-- ENDIF -->"><a href="{l_block1.U_TITLE}">{l_block1.L_TITLE}</a></li>*/
/* 		<!-- END l_block1 -->*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div class="panel bg3">*/
/* 	<div class="inner">*/
/* */
/* 	<div style="width: 100%;">*/
/* */
/* 	<div id="cp-menu">*/
/* 		<div id="navigation" role="navigation">*/
/* 			<ul>*/
/* 			<!-- BEGIN l_block1 -->*/
/* 			<!-- IF l_block1.S_SELECTED -->*/
/* 				<!-- BEGIN l_block2 -->*/
/* 				<!-- IF l_block1.l_block2.S_SELECTED -->*/
/* 				<li id="active-subsection"><a href="{l_block1.l_block2.U_TITLE}"><span>{l_block1.l_block2.L_TITLE}<!-- IF l_block1.l_block2.ADD_ITEM --> ({l_block1.l_block2.ADD_ITEM})<!-- ENDIF --></span></a></li>*/
/* 				<!-- ELSE -->*/
/* 				<li><a href="{l_block1.l_block2.U_TITLE}"><span>{l_block1.l_block2.L_TITLE}<!-- IF l_block1.l_block2.ADD_ITEM --> ({l_block1.l_block2.ADD_ITEM})<!-- ENDIF --></span></a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- END l_block2 -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- END l_block1 -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="cp-main" class="mcp-main panel-container">*/
/* 		<!-- IF MESSAGE -->*/
/* 		<div class="content">*/
/* 			<h2 class="message-title">{L_MESSAGE}</h2>*/
/* 			<p class="error">{MESSAGE}</p>*/
/* 			<p><!-- BEGIN return_links -->{return_links.MESSAGE_LINK}<br /><br /><!-- END return_links --></p>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
