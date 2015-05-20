<?php

/* TodolistTodoBundle:Todo:index.html.twig */
class __TwigTemplate_a17b5abd750735fbbeda09956fa9e99e31957587553000c9e94679f3e73c815d extends Twig_Template
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
\t<p> <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("todo_new");
        echo "\">Ajouter une tache</a></p>
                
\t<p> A faire: </p>
\t<ul class=\"disc\" > 
\t ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "     <li>  
\t <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</a> </li>
     </li>  
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ul>
    <i>CopyRight...</i>
    ";
    }

    public function getTemplateName()
    {
        return "TodolistTodoBundle:Todo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  48 => 11,  45 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
