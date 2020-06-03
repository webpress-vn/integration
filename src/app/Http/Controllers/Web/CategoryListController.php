<?php

namespace App\Http\Controllers\Web;

use VCComponent\Laravel\Category\Contracts\ViewCategoryListControllerInterface;
use VCComponent\Laravel\Category\Http\Controllers\Web\CategoryListController as CategoryListControllerBase;

class CategoryListController extends CategoryListControllerBase implements ViewCategoryListControllerInterface
{

}
