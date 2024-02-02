<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($id, Request $request) {
        $search = $request->input('search');

        $query = Product::where('restaurant_id', $id);

        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $products = $query->get();

        return response()->json($products);
    }
}
