<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CategoryController extends Controller{
    public function create(){
	    return view('backend.category.create');
    }

    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'cate_name' => 'required|unique:product_categories,name',
        ]);
        $storeCategory = [
            'name' => $request->input('cate_name'),
            'created_by' => Auth::user()->id
        ];
        if ($product_category = Category::create($storeCategory)) {
            $response = [
                'message' =>'success'
            ];
            return response()->json($response, 201);
        } else {
            $response = [
                'message' =>'error'
            ];
            return response()->json($response, 404);
        }
        //return response()->json(['success'=>'Done!']);
       
    }
}