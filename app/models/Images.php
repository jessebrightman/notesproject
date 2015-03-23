<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 22/03/2015
 * Time: 3:07 PM
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Images extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';
    public $timestamps = true;

    protected $fillable = ['user_id', 'images1', 'image_path1',  'images2', 'image_path2',  'images3', 'image_path3',  'images4', 'image_path4'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('');

}