<?php

/* acp_inactive.html */
class __TwigTemplate_170cb033a81b28ac141e8d77b5ad82e7811c6b053aa770c66646e9e19e5b3b25 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_inactive.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS_EXPLAIN");
        echo "</p>

<form id=\"inactive\" method=\"post\" action=\"";
        // line 9
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

";
        // line 11
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
            // line 12
            echo "<div class=\"pagination\">
\t";
            // line 13
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "acp_inactive.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "</div>
";
        }
        // line 16
        echo "
<table class=\"table1 zebra-table\">
<thead>
<tr>
\t<th>";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</th>
\t<th>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("EMAIL");
        echo "</th>
\t<th>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo "</th>
\t<th>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_DATE");
        echo "</th>
\t<th>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("LAST_VISIT");
        echo "</th>
\t<th>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_REASON");
        echo "</th>
\t<th>";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("MARK");
        echo "</th>
</tr>
</thead>
<tbody>
";
        // line 30
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "inactive", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inactive"]) {
            // line 31
            echo "\t<tr>
\t\t<td style=\"vertical-align: top;\">
\t\t\t";
            // line 33
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "USERNAME_FULL", array());
            echo "
\t\t\t";
            // line 34
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            if ($this->getAttribute($_inactive_, "POSTS", array())) {
                echo "<br />";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                echo $this->getAttribute($_inactive_, "POSTS", array());
                echo "</strong> [<a href=\"";
                if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                echo $this->getAttribute($_inactive_, "U_SEARCH_USER", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "</a>]";
            }
            // line 35
            echo "\t\t</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 36
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "USER_EMAIL", array());
            echo "</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 37
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "JOINED", array());
            echo "</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 38
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "INACTIVE_DATE", array());
            echo "</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 39
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "LAST_VISIT", array());
            echo "</td>
\t\t<td style=\"vertical-align: top;\">
\t\t\t";
            // line 41
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "REASON", array());
            echo "
\t\t\t";
            // line 42
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            if ($this->getAttribute($_inactive_, "REMINDED", array())) {
                echo "<br />";
                if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                echo $this->getAttribute($_inactive_, "REMINDED_EXPLAIN", array());
            }
            // line 43
            echo "\t\t</td>
\t\t<td>&nbsp;<input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
            // line 44
            if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
            echo $this->getAttribute($_inactive_, "USER_ID", array());
            echo "\" />&nbsp;</td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t<tr>
\t\t<td colspan=\"6\" style=\"text-align: center;\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("NO_INACTIVE_USERS");
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inactive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</tbody>
</table>

<fieldset class=\"display-options\">
\t";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_LOG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " &nbsp;";
        if (isset($context["S_LIMIT_DAYS"])) { $_S_LIMIT_DAYS_ = $context["S_LIMIT_DAYS"]; } else { $_S_LIMIT_DAYS_ = null; }
        echo $_S_LIMIT_DAYS_;
        echo "&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if (isset($context["S_SORT_KEY"])) { $_S_SORT_KEY_ = $context["S_SORT_KEY"]; } else { $_S_SORT_KEY_ = null; }
        echo $_S_SORT_KEY_;
        echo " ";
        if (isset($context["S_SORT_DIR"])) { $_S_SORT_DIR_ = $context["S_SORT_DIR"]; } else { $_S_SORT_DIR_ = null; }
        echo $_S_SORT_DIR_;
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("USERS_PER_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <input class=\"inputbox autowidth\" type=\"number\" name=\"users_per_page\" id=\"users_per_page\" min=\"0\" max=\"999\" value=\"";
            if (isset($context["USERS_PER_PAGE"])) { $_USERS_PER_PAGE_ = $context["USERS_PER_PAGE"]; } else { $_USERS_PER_PAGE_ = null; }
            echo $_USERS_PER_PAGE_;
            echo "\" />";
        }
        // line 56
        echo "\t<input class=\"button2\" type=\"submit\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" name=\"sort\" />
</fieldset>

<hr />

";
        // line 61
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
            // line 62
            echo "\t<div class=\"pagination\">
\t\t";
            // line 63
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "acp_inactive.html", 63)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 64
            echo "\t</div>
";
        }
        // line 66
        echo "
<fieldset class=\"quick\">
\t<select name=\"action\">";
        // line 68
        if (isset($context["S_INACTIVE_OPTIONS"])) { $_S_INACTIVE_OPTIONS_ = $context["S_INACTIVE_OPTIONS"]; } else { $_S_INACTIVE_OPTIONS_ = null; }
        echo $_S_INACTIVE_OPTIONS_;
        echo "</select>
\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('inactive', 'mark', true); return false;\">";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
        echo "</a> &bull; <a href=\"#\" onclick=\"marklist('inactive', 'mark', false); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
        echo "</a></p>
\t";
        // line 71
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>

</form>

";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_inactive.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_inactive.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 76,  283 => 71,  277 => 70,  273 => 69,  268 => 68,  264 => 66,  260 => 64,  248 => 63,  245 => 62,  242 => 61,  233 => 56,  208 => 55,  202 => 51,  193 => 48,  190 => 47,  181 => 44,  178 => 43,  171 => 42,  166 => 41,  160 => 39,  155 => 38,  150 => 37,  145 => 36,  142 => 35,  126 => 34,  121 => 33,  117 => 31,  111 => 30,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  74 => 16,  70 => 14,  58 => 13,  55 => 12,  52 => 11,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_INACTIVE_USERS}</h1>*/
/* */
/* <p>{L_INACTIVE_USERS_EXPLAIN}</p>*/
/* */
/* <form id="inactive" method="post" action="{U_ACTION}">*/
/* */
/* <!-- IF .pagination -->*/
/* <div class="pagination">*/
/* 	<!-- INCLUDE pagination.html -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <table class="table1 zebra-table">*/
/* <thead>*/
/* <tr>*/
/* 	<th>{L_USERNAME}</th>*/
/* 	<th>{L_EMAIL}</th>*/
/* 	<th>{L_JOINED}</th>*/
/* 	<th>{L_INACTIVE_DATE}</th>*/
/* 	<th>{L_LAST_VISIT}</th>*/
/* 	<th>{L_INACTIVE_REASON}</th>*/
/* 	<th>{L_MARK}</th>*/
/* </tr>*/
/* </thead>*/
/* <tbody>*/
/* <!-- BEGIN inactive -->*/
/* 	<tr>*/
/* 		<td style="vertical-align: top;">*/
/* 			{inactive.USERNAME_FULL}*/
/* 			<!-- IF inactive.POSTS --><br />{L_POSTS}{L_COLON} <strong>{inactive.POSTS}</strong> [<a href="{inactive.U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a>]<!-- ENDIF -->*/
/* 		</td>*/
/* 		<td style="vertical-align: top;">{inactive.USER_EMAIL}</td>*/
/* 		<td style="vertical-align: top;">{inactive.JOINED}</td>*/
/* 		<td style="vertical-align: top;">{inactive.INACTIVE_DATE}</td>*/
/* 		<td style="vertical-align: top;">{inactive.LAST_VISIT}</td>*/
/* 		<td style="vertical-align: top;">*/
/* 			{inactive.REASON}*/
/* 			<!-- IF inactive.REMINDED --><br />{inactive.REMINDED_EXPLAIN}<!-- ENDIF -->*/
/* 		</td>*/
/* 		<td>&nbsp;<input type="checkbox" class="radio" name="mark[]" value="{inactive.USER_ID}" />&nbsp;</td>*/
/* 	</tr>*/
/* <!-- BEGINELSE -->*/
/* 	<tr>*/
/* 		<td colspan="6" style="text-align: center;">{L_NO_INACTIVE_USERS}</td>*/
/* 	</tr>*/
/* <!-- END inactive -->*/
/* </tbody>*/
/* </table>*/
/* */
/* <fieldset class="display-options">*/
/* 	{L_DISPLAY_LOG}{L_COLON} &nbsp;{S_LIMIT_DAYS}&nbsp;{L_SORT_BY}{L_COLON} {S_SORT_KEY} {S_SORT_DIR}<!-- IF .pagination -->&nbsp;{L_USERS_PER_PAGE}{L_COLON} <input class="inputbox autowidth" type="number" name="users_per_page" id="users_per_page" min="0" max="999" value="{USERS_PER_PAGE}" /><!-- ENDIF -->*/
/* 	<input class="button2" type="submit" value="{L_GO}" name="sort" />*/
/* </fieldset>*/
/* */
/* <hr />*/
/* */
/* <!-- IF .pagination -->*/
/* 	<div class="pagination">*/
/* 		<!-- INCLUDE pagination.html -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <fieldset class="quick">*/
/* 	<select name="action">{S_INACTIVE_OPTIONS}</select>*/
/* 	<input class="button2" type="submit" name="submit" value="{L_SUBMIT}" />*/
/* 	<p class="small"><a href="#" onclick="marklist('inactive', 'mark', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('inactive', 'mark', false); return false;">{L_UNMARK_ALL}</a></p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
