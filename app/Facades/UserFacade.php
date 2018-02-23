<?php

namespace PHPatterns\Facades;

use PHPatterns\Database\Models\User;
use PHPatterns\Database\Models\Coupon;

class UserFacade
{

    /**
     *
     * Creates new User and attaches a Coupon for him
     *
     */
    public static function newUserWithCoupon($userAttr = []) {
        $user = new User;
        if(isset($userAttr) and $userAttr !== [])
            $user->setNickname($userAttr['nickname']);
        $coupon = Coupon::generate();
        $user->addCoupon($coupon);
        var_dump($user);
    }

}
