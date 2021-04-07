<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Session;

class PublicController extends Controller
{

    public function setlocalgadgetSession(Request $request)
    {
        $username = $request->input('username');
        $token = $request->input('token');
        Session()->regenerate();
        Session(['username' => $username]);
        Session(['token' => $token]);
        Session(['login' => TRUE]);
        return 'success';
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['username', 'token', 'login']);
        $request->session()->flush();


        $request->session()->invalidate();
        return "success";
    }

    public function check()
    {
        return Session()->get('username');
    }

    public function singleitemload($id)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://localhost:8086/item/' . $id);
        $body = $response->getBody()->getContents();

        $response = json_decode($body, true);
        $id = $response['id'];
        $name = $response['name'];
        $price = $response['price'];
        $discount = $response['discount'];
        $warranty = $response['warranty'];
        $qty = $response['qty'];
        $imageUrl = $response['imageUrl'];
        $itemtype = $response['itemtype'];
        $brand = $response['brand'];
        $subCategory = $response['subCategory'];
        $longdes = $response['longdes'];
        $shortdes = $response['shortdes'];

        return view('single-product', ['longdes' => $longdes, 'shortdes' => $shortdes, 'id' => $id, 'name' => $name, 'price' => $price, 'discount' => $discount, 'warranty' => $warranty, 'qty' => $qty, 'imageUrl' => $imageUrl, 'itemtype' => $itemtype, 'brand' => $brand, 'subCategory' => $subCategory]);


    }

    public function loadcatdata($name, $id)
    {
        return view('category-by-data', ['name' => $name, 'id' => $id]);

    }

    public function loadBranddata($name, $id)
    {
        return view('brand-by-data', ['name' => $name, 'id' => $id]);

    }

    public function customerOrderHistory()
    {
        if (Session::get('login') == TRUE) {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('http://localhost:8086/order/' . Session::get('username'));
            $response2 = $client->get('http://localhost:8086/item');
            $body = $response->getBody()->getContents();
            $body2 = $response2->getBody()->getContents();

            $response = json_decode($body);
            $response2 = json_decode($body2);
            return view('customer-order-history', ['data' => $response, 'item' => $response2]);

        } else {
            return redirect('/');
        }
    }
}
