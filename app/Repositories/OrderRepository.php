<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 9/4/16
 * Time: 10:27 AM
 */

namespace App\Repositories;

use App\Order;

class OrderRepository
{
    public static function create($input)
    {
        $result = Order::create($input);
        return $result ? 1 : 0 ;
    }

    public static function lists()
    {
    }

    public static function show()
    {
    }

    public static function updateStatus()
    {
    }
}