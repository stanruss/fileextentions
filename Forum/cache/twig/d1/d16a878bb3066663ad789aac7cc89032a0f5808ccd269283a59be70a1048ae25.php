<?php

/* ucp_footer.html */
class __TwigTemplate_3e53250c08f7975bd384eb1d64a506c46b0b3befd71e5dc4490ac5db35058965 extends Twig_Template
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
        echo "
\t\t</div>

\t</div>
\t</div>
</div>
";
        // line 7
        if (isset($context["S_COMPOSE_PM"])) { $_S_COMPOSE_PM_ = $context["S_COMPOSE_PM"]; } else { $_S_COMPOSE_PM_ = null; }
        if ($_S_COMPOSE_PM_) {
            // line 8
            echo "<div>";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "</div>
</form>
";
        }
        // line 11
        echo "
";
        // line 12
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "ucp_footer.html", 12)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 13
        echo "
";
        // line 14
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_footer.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  53 => 13,  41 => 12,  38 => 11,  30 => 8,  27 => 7,  19 => 1,);
    }
}
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- IF S_COMPOSE_PM -->*/
/* <div>{S_FORM_TOKEN}</div>*/
/* </form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
