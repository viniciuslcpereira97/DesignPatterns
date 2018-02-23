<?php

namespace PHPatterns\Database\Models;

use PHPatterns\Traits\ModelsTrait;
use PHPatterns\Database\Models\Model;

use PHPatterns\Database\Models\Coupon;

class User extends Model
{

    protected $table;

    /**
     *
     * Set user nickname
     *
     */
    public function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    /**
     *
     * Adds coupon for user
     *
     */
    public function addCoupon(Coupon $coupon) {
        $this->coupon = $coupon;
    }

}
