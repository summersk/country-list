<?php

/**
 * This file is part of the Country List project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umpirsky\Country\Dumper;

use Umpirsky\Country\Dumper\DumperInterface;

/**
 * Abstract dumper.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
abstract class Dumper implements DumperInterface {

    /**
     * Gets dumper format.
     *
     * @return string
     */
    public function getFormat() {

        $className = get_class($this);
        return strtolower(substr($className, strrpos($className, '\\') + 1));
    }

}
