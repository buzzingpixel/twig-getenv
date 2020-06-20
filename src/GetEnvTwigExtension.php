<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2018 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace buzzingpixel\twiggetenv;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class GetEnvTwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [new TwigFunction('getenv', [$this, 'getenv'])];
    }

    public function getenv(string $which)
    {
        return getenv($which);
    }
}
