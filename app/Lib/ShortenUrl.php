<?php
/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 06.07.16
 * Time: 19:08
 */
namespace App\Lib;
use Bitly;

class ShortenUrl {
    protected $long_url;
    protected $short_url;
    public function __construct(string $url_loc)
    {
        $this->long_url=$url_loc;
        $this->short_url=Bitly::shorten($url_loc);
    }
}