<?php
/**
 * Created by PhpStorm.
 * User: Jayvic
 * Date: 15/3/9
 * Time: 上午10:24
 */

namespace Clover\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model {

    protected $table = 'follow';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function listFollowUser($follower)
    {
        return self::join('user', 'follower', '=', 'user.id')->where('follower', $follower)
            ->select(['star', 'username', 'email'])->get();
    }

}