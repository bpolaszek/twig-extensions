<?php
namespace BenTools\TwigExtensions\TypeOfExtension;

class TypeOfExtension extends \Twig_Extension {

    /**
     * @inheritdoc
     */
    public function getFilters() {
        return [
            new \Twig_SimpleFilter('typeOf', 'getType'),
            new \Twig_SimpleFilter('getType', 'getType'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions() {
        return [
            new \Twig_SimpleFunction('get_type', 'getType'),
            new \Twig_SimpleFunction('is_bool', 'is_bool'),
            new \Twig_SimpleFunction('is_string', 'is_string'),
            new \Twig_SimpleFunction('is_numeric', 'is_numeric'),
            new \Twig_SimpleFunction('is_int', 'is_int'),
            new \Twig_SimpleFunction('is_float', 'is_float'),
            new \Twig_SimpleFunction('is_null', 'is_null'),
            new \Twig_SimpleFunction('is_array', 'is_array'),
            new \Twig_SimpleFunction('is_object', 'is_object'),
            new \Twig_SimpleFunction('is_scalar', 'is_scalar'),
            new \Twig_SimpleFunction('is_callable', 'is_callable'),
        ];
    }

    /**
     * @inheritDoc
     */
    public function getName() {
        return 'bentools_typeof';
    }

}