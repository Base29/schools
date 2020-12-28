<?php

namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

class LegacyPasswordHasher extends AbstractPasswordHasher {
    public function hash($password) {
        return md5($password);
    }

    public function check($password, $hashedPassword) {
        $userPassword = md5($password);
        return $userPassword === $hashedPassword;
    }
}
