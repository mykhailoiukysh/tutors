<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/1/2020
 * Time: 1:29 PM
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subjectName', 'url',
    ];

}
