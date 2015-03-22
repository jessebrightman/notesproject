<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 14/03/2015
 * Time: 3:01 PM
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Notes extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notes';
    public $timestamps = true;

    protected $fillable = ['user_id', 'notes', 'tbd', 'hyperlinks'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('');

}
