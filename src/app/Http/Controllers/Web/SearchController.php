<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->insertSeoMetaFields();

        $query    = Product::query();
        $query    = $this->applySearchFromRequest($query, ['name'], $request);
        $products = $query->orderBy('id', 'desc')->get();

        return view('pages.search', [
            'products' => $products,
        ]);
    }

    protected function applySearchFromRequest($query, array $fields, Request $request)
    {
        if ($request->has('s')) {
            $search = $request->get('s');
            if (count($fields)) {
                $query = $query->where(function ($q) use ($fields, $search) {
                    foreach ($fields as $key => $field) {
                        $q = $q->orWhere($field, 'like', "%{$search}%");
                    }
                });
            }
        }
        return $query;
    }
}
