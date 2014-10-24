<?php
namespace Icecave\Stump;

interface PrefixableInterface
{
    /**
     * Create a logger that logs with the given prefix.
     *
     * @param string $prefix
     * @param string $separator
     *
     * @return LoggerInterface
     */
    public function prefixWith($prefix, $separator = '.');
}
