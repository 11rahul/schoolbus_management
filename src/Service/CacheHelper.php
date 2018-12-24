<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 2018-12-21
 * Time: 23:25
 */

namespace App\Service;


use Symfony\Component\Cache\Adapter\AdapterInterface;

class CacheHelper
{
    private $cache;

    public function __construct(AdapterInterface $cache)
    {
        $this->cache = $cache;
    }

    public function viacache(string $string): string
    {
        $item = $this->cache->getItem('prefix_' . md5($string));

        if (!$item->isHit()) {
            $item->set($string);
            $this->cache->save($item);
        }

        return $item->get();
    }

}