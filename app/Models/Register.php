<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['full_name', 'username', 'email', 'contact', 'password', 'profile'];


}
