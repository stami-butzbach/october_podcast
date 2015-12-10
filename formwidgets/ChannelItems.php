<?php namespace Stadtmissionbutzbach\Podcast\FormWidgets;

use Request;
use Backend\Classes\FormWidgetBase;
use Stadtmissionbutzbach\Podcast\Models\Item;

class ChannelItems extends FormWidgetBase
{

    protected $typeListCache = false;
    protected $typeInfoCache = [];

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'channelitems';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('items');
    }

    /**
     * Prepares the list data
     */
    public function prepareVars()
    {
        $channelItem = new Item;

        $this->vars['itemProperties'] = json_encode($channelItem->fillable);
        $this->vars['items'] = $this->model->items;

        $emptyItem = new Item;
        $emptyItem->title = 'Add Item';
        $emptyItem->link = '/';
        $emptyItem->url = '/';

        $this->vars['emptyItem'] = $emptyItem;

        $widgetConfig = $this->makeConfig('~/plugins/stadtmissionbutzbach/podcast/models/item/fields.yaml');
        $widgetConfig->model = $channelItem;
        $widgetConfig->alias = $this->alias.'Item';

        $this->vars['itemFormWidget'] = $this->makeWidget('Backend\Widgets\Form', $widgetConfig);
    }
}
