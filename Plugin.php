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
            'description' => 'A Podcast Plugin',
            'author'      => 'StadtmissionButzbach',
            'icon'        => 'icon-headphones'
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
