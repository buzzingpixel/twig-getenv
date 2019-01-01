<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2018 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace buzzingpixel\twiggetenv;

use Twig_Function;
use Twig_Extension;

class GetEnvTwigExtension extends Twig_Extension
{
    public function getFunctions(): array
    {
        return [new Twig_Function('getenv', [$this, 'getenv'])];
    }

    public function getenv(string $which)
    {
        return getenv($which);
    }
}
