<?php

namespace App\Listeners;

class CategoryUpdatedByAdminListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $category = $event->category;
        $request  = request();
        if ($request->has('item_menu_id')) {
            // $categories = $category->item_menus;
            // if ($categories->count()) {
            //     $category_ids = $category->categories->map(function ($cate) {
            //         return $cate->id;
            //     })->toArray();
            //     $category->detachMenus($category_ids);
            // }

            // $category->detachMenus($request->id);

            $category->syncMenus($request->input('item_menu_id'));

        }
    }
}
