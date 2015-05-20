<?php

/* TodolistTodoBundle:Todo:show.html.twig */
class __TwigTemplate_84054e558004827d4a9b1be05a86642f2b4b702656bfbc960e0abea1051aac14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>TODO.COM</h1>
 ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo " : <br/>
\tA faire avant le <br/>
\t";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "
\t
\t  <ul class=\"record_actions\">
\t    <li>
        \t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("todo");
        echo "\">
\t            Retour
        \t</a>
\t    </li>
\t</ul>
    <i>CopyRight...</i>
";
    }

    public function getTemplateName()
    {
        return "TodolistTodoBundle:Todo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
