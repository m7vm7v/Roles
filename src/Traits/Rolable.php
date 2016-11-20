<?php

namespace m7vm7v\Roles\Traits\User;

use App\User;

trait UserRoles {

    public function isAdmin() {

        return $this->role == 'admin';
    }

    public function isModerator() {
        
        return $this->role == 'moderator';
    }

    public function isOwner() {
        
        return $this->role == 'owner';
    }

    public static function makeCustomerByID($id) {
        
        return User::findOrFail($id)->update([
                    'role' => 'customer'
        ]);
    }

    public static function makeModeratorByID($id) {
        
        return User::findOrFail($id)->update([
                    'role' => 'moderator'
        ]);
    }

    public static function makeAdminByID($id) {
        
        return User::findOrFail($id)->update([
                    'role' => 'admin'
        ]);
    }

    public static function makeOwnerByID($id) {
        
        return User::findOrFail($id)->update([
                    'role' => 'owner'
        ]);
    }
}
