<?php

namespace Mrcnpdlk\Api\Regon;

use Gregwar\Cache\Cache;

class GregwarCache implements \Mrcnpdlk\Api\Regon\Cache
{
    private \Gregwar\Cache\Cache $cache;
    private Config $config;

    public function __construct(\Mrcnpdlk\Api\Regon\Config $config)
    {
        $this->config = $config;
        $oCache = new Cache();
        $oCache
            ->setCacheDirectory($this->config->getCacheDir())
            ->setPrefixSize(0);
        $this->cache = $oCache;
    }


    /**
     * @param string $key
     * @param mixed[] $conditions
     * @param \Closure $function
     * @param bool $file
     * @param bool $actual
     * @return string
     */
    public function getOrCreate(string $key, array $conditions, \Closure $function, bool $file = false, bool $actual = false):string
    {
        return $this->cache->getOrCreate($key, $conditions, $function, $file, $actual);
    }
}