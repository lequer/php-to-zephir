<?php
/**
 * Sandro Keil (https://sandro-keil.de)
 *
 * @link      http://github.com/sandrokeil/php-to-zephir for the canonical source repository
 * @copyright Copyright (c) 2018 Sandro Keil
 * @license   http://github.com/sandrokeil/php-to-zephir/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace PhpToZephirTest\Mock;

class ClassMethodsReturnTypes
{
    /**
     * @param $a
     * @return bool|string
     */
    public function getSomeData($a)
    {
    }

    /**
     * @param $a
     * @return mixed
     */
    public function mixed($a)
    {
    }

    /**
     * @param $a
     * @return string|array|object awesome Data
     * @throws \RuntimeException if possible
     */
    public function data($a)
    {
    }

    public function getId(): ?string
    {
    }
}