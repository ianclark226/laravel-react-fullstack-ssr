<?php

namespace App\Enum;

enum RolesEnum: string
{
    case Admin = 'admin';

    case User = 'user';

    case Commenter = 'commenter';

    public static function labels(): array {
        return [
           self::Admin -> value => __('Admin'),
            self::Commenter -> value => __('Commenter'),
            self::User -> value => __('User'),
        ];
    }

    public function label(): string {
        return match($this) {
            self::Admin => 'Admin',
            self::Commenter => 'Commenter',
            self::User => 'User',
        };
    }
}
