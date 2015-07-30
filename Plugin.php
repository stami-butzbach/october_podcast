<?php namespace StadtmissionButzbach\Podcast;

use Backend;
use System\Classes\PluginBase;

/**
 * Podcast Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Podcast',
            'description' => 'No description provided yet...',
            'author'      => 'StadtmissionButzbach',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'podcast' => [
                'label' => 'Podcast',
                'url' => Backend::url('stadtmissionbutzbach/podcast/channel'),
                'icon' => 'icon-headphones',
                'permissions' => ['podcast.*'],
                'order' => 100,
            ]
        ];
    }

}
