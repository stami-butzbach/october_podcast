<?php namespace Stamibutzbach\Podcast\Models;

use Model;

/**
 * Podcast Model
 */
class Podcast extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stamibutzbach_podcast_podcasts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}