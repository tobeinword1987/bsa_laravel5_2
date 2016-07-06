<?php
/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 06.07.16
 * Time: 23:15
 */

namespace App\Lib;


class Smartphone
{
private $phone;

    public function __construct()
    {
        $this->phone=array(
            'Name' => 'Apple iPhone',
            'CPU:vendor' => 'Qualcomm 5555',
            'Cores' => '2',
            'Display' => '480x320',
            'Camera' => '8 megapixels',
            'Battery Capacity' => '1234 mAh'
        );
    }
}
