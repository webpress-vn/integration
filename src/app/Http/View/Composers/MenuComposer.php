<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Menu\Entities\ItemMenu;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $getMenus          = ItemMenu::where('parent_id', 0)->where('menu_id', 1)->get();
        $getMenus_category = ItemMenu::where('parent_id', 0)->where('menu_id', 2)->get();

        $view->with('getMenus', $getMenus);
    }
}
