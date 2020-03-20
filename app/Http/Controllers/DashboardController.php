<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\sub_category;
use App\product;

class DashboardController extends Controller
{

  // middleware

  public function __construct()
  {
    $this->middleware('auth');
  }

  // dashboard_index
  function index()
  {
    return view('dashboard.homepage.index');
  }


  // add_product

  function add_product ()
  {
    $categories = Category::all();
    $subcategories = sub_category::all();
    return view('dashboard.product.add_product',compact('categories','subcategories'));
  }

  // product_list
  function product_list ()
  {
    $products = product::all();
    return view('dashboard.product.product_list',compact('products'));
  }

    // END
}
