<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Set the default page size and order values
        $size = $request->query('size') ? $request->query('size') : 12;
        $order = $request->query('order') ? $request->query('order') : -1;

        // Initialize ordering column and direction
        $o_column = "id";
        $o_order = "DESC";

        // Determine the order column and direction based on the order parameter
        switch ($order) {
            case 1:
                $o_column = "created_at";
                $o_order = "DESC";
                break;
            case 2:
                $o_column = "created_at";
                $o_order = "ASC";
                break;
            case 3:
                $o_column = "sale_price";
                $o_order = "ASC";
                break;
            case 4:
                $o_column = "sale_price";
                $o_order = "DESC";
                break;
            default:
                $o_column = "id";
                $o_order = "DESC";
        }

        // Use the variables instead of string literals in orderBy
        $products = Product::orderBy($o_column, $o_order)->paginate($size);
        $brands = Brand::orderBy('name','ASC')->get();

        return view('shop', compact("products", "size", "order","brands"));
    }
    public function product_details($product_slug)
    {
        $product = Product::where("slug",$product_slug)->first();
        $rproducts = Product::where("slug","<>",$product_slug)->get()->take(8);
        return view('details',compact("product","rproducts"));
    }

}
