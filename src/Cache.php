<?php

namespace Mrcnpdlk\Api\Regon;

interface Cache
{
    /**
     * @param string $key
     * @param mixed[] $conditions
     * @param \Closure $function
     * @param bool $file
     * @param bool $actual
     * @return string
     */
    public function getOrCreate(string $key, array $conditions, \Closure $function, bool $file = false, bool $actual = false):string;
}