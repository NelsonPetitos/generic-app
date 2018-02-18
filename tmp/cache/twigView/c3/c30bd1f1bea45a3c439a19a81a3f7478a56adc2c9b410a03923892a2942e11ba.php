<?php

/* /Applications/mappstack-7.1.14-0/apache2/htdocs/generic-app/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig */
class __TwigTemplate_8f0e907dcba5deedfe3d1f6daa5b38b12cdd9f9ab96196d363bfdd776317d59a extends Twig_Template
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
        $__internal_d6604fe046b32fac592c993b404290d2547f508e5eaefce8975f35035e31c51f = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_d6604fe046b32fac592c993b404290d2547f508e5eaefce8975f35035e31c51f->enter($__internal_d6604fe046b32fac592c993b404290d2547f508e5eaefce8975f35035e31c51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Applications/mappstack-7.1.14-0/apache2/htdocs/generic-app/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_d6604fe046b32fac592c993b404290d2547f508e5eaefce8975f35035e31c51f->leave($__internal_d6604fe046b32fac592c993b404290d2547f508e5eaefce8975f35035e31c51f_prof);

    }

    public function getTemplateName()
    {
        return "/Applications/mappstack-7.1.14-0/apache2/htdocs/generic-app/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "/Applications/mappstack-7.1.14-0/apache2/htdocs/generic-app/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig", "");
    }
}
