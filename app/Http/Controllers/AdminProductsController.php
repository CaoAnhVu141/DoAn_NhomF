<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Supplier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductsController extends Controller
{
    //
    public function showIndexProduct()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    //show giao diện thêm sản phẩm

    public function showCreateProduct()
    {
        $category = Category::all();
        $producttype = ProductType::all();
        $supplier = Supplier::all();
        $attributes = Attribute::all();
        return view('admin.product.create', compact('category', 'producttype', 'supplier', 'attributes'));
    }

     //show giao diện sửa sản phẩm

     public function showIndexUpdateProduct($id)
     {
         return view('admin.product.update');
     }

    //thực hiệm thêm sản phẩm 

    // public function addDataProduct(Request $request)
    // {
    //     if (Auth::guard('admin')->check()) {
    //         $userId = Auth::guard('admin')->user()->id;

    //         $product = new Product();
    //         $product->name = $request->input('name');
    //         $product->price = $request->input('price');
    //         $product->discount = $request->input('discount');
    //         $product->id_category = $request->input('category_id');
    //         $product->id_producttype = $request->input('typeproduct_id');
    //         $product->id_supplier = $request->input('supplier_id');
    //         $product->amount = $request->input('amount');
    //         $product->id = $userId; // Might not be necessary depending on your database schema

    //         // Save product image (if uploaded)
    //         if ($request->hasFile('image')) {
    //             $image = $request->file('image');
    //             $imageName = time() . '.' . $image->getClientOriginalExtension();
    //             $image->move(public_path('images'), $imageName);
    //             $product->image = 'images/' . $imageName;
    //         }

    //         // Save product list_images (multiple images)
    //         $product->list_images = [];
    //         if ($request->hasFile('file')) {
    //             $images = $request->file('file');
    //             foreach ($images as $image) {
    //                 $imageName = time() . '_' . $image->getClientOriginalName();
    //                 $image->move(public_path('images'), $imageName);
    //                 $product->list_images[] = 'images/' . $imageName;
    //             }
    //         }

    //         $product->save();

    //         // Save product attributes (optional)
    //         $selectedAttributes = $request->input('attribute');
    //         if (isset($selectedAttributes)) { // Check if attribute data is provided
    //             foreach ($selectedAttributes as $attributeId) {
    //                 AttributeProduct::create([
    //                     'product_id' => $product->id,
    //                     'attribute_id' => $attributeId,
    //                 ]);
    //             }
    //         }
    //         return redirect()->route('indexproduct')->with('status', "Bạn đã thêm thành công");
    //     }
    // }
    //thực thi nè

    public function addDataProduct(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $userId = Auth::guard('admin')->user()->id;

            $product = new Product();
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->discount = $request->input('discount');
            $product->id_category = $request->input('category_id');
            $product->id_producttype = $request->input('typeproduct_id');
            $product->id_supplier = $request->input('supplier_id');
            $product->amount = $request->input('amount');
            $product->description = $request->input('description');
            $product->content = $request->input('content');
            $product->sizes = json_encode($request->input('sizes'));
            $product->id = $userId; // Might not be necessary depending on your database schema

            // Save product image (if uploaded)
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $product->image = 'images/' . $imageName;
            }

            // Save product list_images (multiple images)
            $listImages = [];
            if ($request->hasFile('file')) {
                $images = $request->file('file');
                foreach ($images as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
                    $listImages[] = 'images/' . $imageName;
                }
            }
            $product->list_images = json_encode($listImages); // Convert array to JSON string

            $product->save();

            // Save product attributes (optional)
            $selectedAttributes = $request->input('attribute');
            if (isset($selectedAttributes)) { // Check if attribute data is provided
                foreach ($selectedAttributes as $attributeId) {
                    AttributeProduct::create([
                        'product_id' => $product->id,
                        'attribute_id' => $attributeId,
                    ]);
                }
            }
            return redirect()->route('indexproduct')->with('status', "Bạn đã thêm thành công");
        }
    }


    //viết hàm xoá sản phẩm

    public function deleteProducts($id)
    {
        $product = Product::find($id);

        if(!empty($product))
        {
            $product->delete();
            return redirect()->route('indexproduct')->with('status',"Xoá thành công rồi nè");
        }
        return redirect()->route('indexproduct')->with('status', "Bạn xoá chưa thành công");
    }


   
}
