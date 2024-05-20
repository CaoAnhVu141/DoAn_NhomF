<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductFavoriteModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteProductController extends Controller
{
    // show giao diện trang yêu thích sản phẩm
    public function showLoveProduct()
    {
        // $user = Auth::user();
        // $favorite = $user->favoriteProducts()->get();
        // return view('shopping.loveproduct');
        // $user = Auth::user();
        // $favotite = $user->favoriteProduct->get();

        $favotite = ProductFavoriteModel::paginate(10);
        return view('shopping.loveproduct', compact('favotite'));
    }

     /// thực thi yêu thích sản phẩm
    public function favoriteProduct($id_favorite)
    {
        $userId = Auth::id();
        $product = Product::find($id_favorite);
        // dd($product);
       

        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$product) {
            return redirect()->route('haha')->with('error', 'Product not found');
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong danh sách yêu thích của người dùng chưa
        $favoriteExists = ProductFavoriteModel::where('id_user', $userId)
            ->where('id_product', $id_favorite)
            ->exists();

        if ($favoriteExists) {
            return redirect()->route('haha')->with('error', 'Product already in favorites');
        }

        // Lưu thông tin sản phẩm vào bảng favoriteproducts
        ProductFavoriteModel::create([
            'id_product' => $product->id_product,
            'id_user' => $userId,
        ]);
        return redirect()->route('haha')->with('success', 'Product added to favorites');
    }
}
