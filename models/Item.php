<?php namespace Stadtmissionbutzbach\Podcast\Models;

use Model;

/**
 * Item Model
 */
class Item extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stadtmissionbutzbach_podcast_items';

    /**
     * @var string Title of this item
     */
//    public $title;

    /**
     * @var string Url of this item
     */
//    public $link;

    /**
     * @var string Description
     */
//    public $description;

    /**
     * @var string Category
     */
//    public $category;

    /**
     * @var int Duration in seconds
     */
//    public $duration;

    /**
     * @var \DateTime Publication date
     */
//    public $pub_date;

    /**
     * @var boolean Published flag
     */
//    public $published;

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    public $fillable = [
        'title',
        'link',
        'description',
        'category',
        'duration',
        'pub_date',
        'published'
    ];

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