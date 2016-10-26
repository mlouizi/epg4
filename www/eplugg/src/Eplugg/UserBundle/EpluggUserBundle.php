<?php

namespace Eplugg\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EpluggUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
