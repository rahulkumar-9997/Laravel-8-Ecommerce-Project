<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class ProductController extends Controller{
    public function create(){
	    return view('backend.product.create');
    }

    public function getAttribute(){
        $product_category = Category::all();

        return ['product_category' => $product_category];
    }
}