<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/index.html.twig */
class __TwigTemplate_ce52b514abfdec6846dfba9a80ed48604eb743087630bb59492ba91afd410d0b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello BlogController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
        <article>
            <h2 >Titre de l'article </h2>
            <div class= \"metadata\">Ecrit le tanani tanana</div>
            <div content>
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, doloribus eaque illo magnam voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit non quos tempora ullam ut!</p>
            </div>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </article>
        <br>
        <article>
            <h2 >Titre de l'article </h2>
            <div class= \"metadata\">Ecrit le tanani tanana</div>
            <div content>
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, doloribus eaque illo magnam voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit non quos tempora ullam ut!</p>
            </div>
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </article>
        <br>
        <article>
            <h2 >Titre de l'article </h2>
            <div class= \"metadata\">Ecrit le tanani tanana</div>
            <div content>
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, doloribus eaque illo magnam voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit non quos tempora ullam ut!</p>
            </div>
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  113 => 27,  99 => 16,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Hello BlogController!{% endblock %}

{% block body %}

        <article>
            <h2 >Titre de l'article </h2>
            <div class= \"metadata\">Ecrit le tanani tanana</div>
            <div content>
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, doloribus eaque illo magnam voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit non quos tempora ullam ut!</p>
            </div>
            <a href=\"{{ path ('blog_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
        </article>
        <br>
        <article>
            <h2 >Titre de l'article </h2>
            <div class= \"metadata\">Ecrit le tanani tanana</div>
            <div content>
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, doloribus eaque illo magnam voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit non quos tempora ullam ut!</p>
            </div>
            <a href=\"{{ path ('blog_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
        </article>
        <br>
        <article>
            <h2 >Titre de l'article </h2>
            <div class= \"metadata\">Ecrit le tanani tanana</div>
            <div content>
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, doloribus eaque illo magnam voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit non quos tempora ullam ut!</p>
            </div>
            <a href=\"{{ path ('blog_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
        </article>
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\Administrateur\\Desktop\\Stage\\Axoblog\\templates\\blog\\index.html.twig");
    }
}
