<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @method static create(array $array)
 * @method static orderBy(string $string, string $string1)
 * @method static insert(array[] $users)
 * @method static find(mixed $id)
 * @method static findOrFail($id)
 * @property mixed $name
 * @property mixed $email
 * @property mixed|string $password
 * @property mixed $phone
 * @property mixed|string|null $profile
 * @property mixed $id
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasApiTokens, Notifiable;


    protected array $guard_name = ['web', 'sanctum'];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'profile'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return string[]
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
