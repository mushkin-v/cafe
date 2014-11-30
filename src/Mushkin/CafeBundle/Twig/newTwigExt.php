<?php

namespace Mushkin\CafeBundle\Twig;

class newTwigExt extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('vit', array($this, 'VitFilter')),
        );
    }
    public function VitFilter($name)
    {
        $vit = mb_convert_case($name, MB_CASE_UPPER, "UTF-8").' (Иземенено фильтром)';

        return $vit;
    }

    public function getName()
    {
        return 'newTwigExt';
    }
}