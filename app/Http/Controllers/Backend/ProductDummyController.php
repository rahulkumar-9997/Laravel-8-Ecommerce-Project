<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\producs_dummy;

class ProductDummyController extends Controller{
    protected $folder_name = 'productImage';
    protected $folder_path;
    public function __construct(){
        $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
    }

    public function index(){
        $data = [];
	    $data['product_list'] = producs_dummy::select()->get();
	    return view('backend.product-dummy.index', compact('data'));
    }

    public function create(){
        return view('backend.product-dummy.add');
    }

    public function store(Request $request){
        $current_date_time = date('Y-m-d-H:i:s');
        $this->validate($request, [
            'product_head_name' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_unit' => 'required',
            'product_qty' => 'required',
            'product_details' => 'required',
            
        ]);
        $input = $request->all();
        $product_head_name  = str_replace(' ', '-', $request->input('product_head_name'));
        if ($request->hasFile('product_image')){
            $product_image = $request->file('product_image');
            $product_image_name = $product_head_name.'_product_image.'.$product_image->getClientOriginalExtension();
            $product_image->move(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'productImage'.DIRECTORY_SEPARATOR, $product_image_name);
            $input['product_image'] = $product_image_name;
        }
        
	    $product_add = producs_dummy::create($input);
        if ($product_add){
            return redirect('admin/product-dummy')->with('success','Product updated successfully');
        }else{
            return redirect()->back()->with('error','Product added successfully.');
        }
    }
    public function edit($id) {
        $data = [];
	    $data['product-edit'] = producs_dummy::find($id);
	    return view('backend.product-dummy.edit', compact('data'));
        /*<?php echo url('/'); ?>/product-dummy/{{ $products->id }}/edit*/
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'product_head_name' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_unit' => 'required',
            'product_qty' => 'required',
            'description' => 'required',
            
        ]);
        
        $input = $request->all();
        
        $product_row = producs_dummy::find($id);
        
        $product_head_name  = str_replace(' ', '-', $request->input('product_head_name'));
	    if ($request->hasFile('product_image')) {
            // remove old image from folder
            if (file_exists($this->folder_path.$product_row->product_image)){
                @unlink($this->folder_path.$product_row->product_image);
            }
            /*upload new student image*/
            $product_image = $request->file('product_image');
            $product_image_name = $product_head_name.'_product_image.'.$product_image->getClientOriginalExtension();
            $product_image->move($this->folder_path, $product_image_name);
           
	    }
        $input['product_image'] = isset($product_image_name)?$product_image_name:$product_row->product_image;
        $product_update = $product_row->update($input);
        if($product_update){
            return redirect('admin/product-dummy')->with('success','Product updated successfully');
        }
    }

    public function destroy($id){
        $product = producs_dummy::find($id);
        $product->delete();
        return redirect('admin/product-dummy')->with('success','Product deleted successfully');
    }
}