<?php
declare(strict_types=1);

namespace Skernl\Transition;

use Composer\Autoload\ClassLoader;
use Swoole\Table;

/**
 * @Composer
 * @\Skernl\Transition\Composer
 */
class Composer
{
    static public function init()
    {
        $loaders = ClassLoader::getRegisteredLoaders();
        /**
         * @var ClassLoader $classLoader
         */
        $classLoader = reset($loaders);
//        $classLoader->unregister();
        $table = new Table(count($classLoader->getClassMap()));
    }

    static private function writeTable()
    {
    }
}