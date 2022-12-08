<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //

    public function index()
    {
        $pizzas = [['type' => 'tyjr5je754j',
            'base' => 'chees crust',
            'price' => 30],
            ['type' => 'sfbdfabdg',
                'base' => 'chees crust',
                'price' => 56],
            ['type' => 'nbrgnrnfh',
                'base' => 'chees crust',
                'price' => 88]];

        //http://localhost/pizzahouse/public/pizzas?name=Eslam
        $name = request('name'); // for sending parameter in link
        http://localhost/pizzahouse/public/pizzas?name=Eslam&age=25
        $age = Request('age'); // for sending parameter in link
        $data = ['type' => 'hawailan',
            'base' => 'chees crust',
            'price' => 10]; // get data from database
        //Content-Type: text/html
//    return view('pizzas', ['pizzas' => $pizzas, 'name' => $name, 'age' => $age]);
        // query parameters
        return view('pizzas', ['pizzas' => $pizzas, 'name' => Request('name'), 'age' => request('age')]);
    }

    public function show($id, $name)
    {
        return view('details', ['id' => $id, 'name' => $name]);
    }
}
