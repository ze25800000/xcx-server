<?php

namespace app\api\model;


class User extends BaseModel {
    public function address() {
        return $this->hasOne('user_address', 'user_id', 'id');
    }

    public static function getUserByOpenID($openid) {
        return self::where('openid', '=', $openid)
            ->find();
    }
}