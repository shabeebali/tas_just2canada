<?php

namespace App\Models;

use Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property mixed | NULL $form_data
 * @property int $id
 * @property string $password
 * @property string $email
 *
 * @mixin Eloquent
 */
class Employer extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email','password','email_verified_at','form_data'
    ];

    protected $hidden = ['password','email_verified_at'];
}
