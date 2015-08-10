<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model {
    
    /**
     * Database table name
     *
     * @var String
     */
    protected $table = 'user_roles';
    
    /**
     * Timestamps
     *
     * @var Boolean
     */
    public $timestamps = false;

    /**
     * Clean up user roles
     *
     * @param int $userId
     */
    public static function cleanUpRoles($userId) {
        self::where('user_id', $userId)->delete();
    }
}
