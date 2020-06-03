<?php

namespace App\Listeners;

class CategoryCreatedByAdminListener
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
            $category->attachMenus($request->input('item_menu_id'));
        }
    }
}
