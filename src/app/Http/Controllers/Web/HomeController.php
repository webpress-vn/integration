<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use VCComponent\Laravel\Menu\Http\Controllers\GenerateMenuFrontEndController;

class HomeController extends Controller
{
    public function __invoke()
    {
        $this->insertSeoMetaFields();
        $categories = Category::with('viewProducts')->paginate(3);
        return view('index', [
            'categories' => $categories,
            'menu'       => App::make(GenerateMenuFrontEndController::class)->renderUlOnly(1),
        ]);
    }
}
