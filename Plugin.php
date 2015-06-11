<?php namespace StamiButzbach\Podcast;

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
            'author'      => 'StamiButzbach',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            // 'Acme\Blog\Components\Post' => 'blogPost'
        ];
    }

}
