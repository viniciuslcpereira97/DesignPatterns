<?php

namespace PHPatterns\Database\Models;

use PHPatterns\Database\Models\Model;

class Coupon extends Model
{

    public static function generate() {
        $instance = new static;
        $instance->hash = $instance->generateHash();
        return $instance;
    }

    private function generateHash() {
        $b64 = base64_encode(rand(111111111111, 999999999999));
        return hash('sha256', $b64, false);
    }

}
