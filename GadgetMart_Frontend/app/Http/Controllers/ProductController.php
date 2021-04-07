<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function productLoad()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://localhost:8086/item');
        $allProducts = $response->getBody()->getContents();
        $allProducts = json_decode($allProducts);
        $modifiedProducts = [];
        $itemtypes =[];

        foreach ($allProducts as $product ) {
          $categoryRaw = $client->get('http://localhost:8086/subcategory/' . $product->subCategory);
          $category = $categoryRaw->getBody()->getContents();
          $category = json_decode($category);
          
          $brandRaw = $client -> get('http://localhost:8086/brand/' . $product->brand);
          $brand = $brandRaw->getBody()->getContents();
          $brand = json_decode($brand);

          $product->brandName = $brand->name;
          $product->subCategoryName = $category->name;
         
          $item =  $product->itemtype;
          
          if(!in_array($item, $itemtypes)) {
            array_push($itemtypes, $item);
          }
          array_push($modifiedProducts, $product);
        }
        return view('index',['items' => $allProducts, 'itemtypes' => $itemtypes]);
    }
}
