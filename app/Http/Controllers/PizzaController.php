<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

/*
 * to create a database
 * create database pizzahouse;
 */

class PizzaController extends Controller
{
    //

    public function index()
    {

//        $pizzas = Pizza::all(); /* to get all data from db no order*/

//        $pizzas = Pizza::orderBy('price')->get(); /* to get all data from db by order price*/
//        $pizzas = Pizza::orderBy('type','desc')->get(); /* to get all data from db by order price*/
//        $pizzas = Pizza::where('type', 'Ahawalian 1')->get(); /* to get data from db by condition*/
        $pizzas = Pizza::latest()->get(); /* to retrieve data from db in date order it's mean by time*/
        /*$pizzas = [['type' => 'tyjr5je754j',
            'base' => 'chees crust',
            'price' => 30],
            ['type' => 'sfbdfabdg',
                'base' => 'chees crust',
                'price' => 56],
            ['type' => 'nbrgnrnfh',
                'base' => 'chees crust',
                'price' => 88]];*/

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
        return view('pizzas.index', ['pizzas' => $pizzas, 'name' => Request('name'), 'age' => request('age')]);
    }

    public function show($id)
    {
//        $pizzas = Pizza::find($id); /* getting element by id*/
        $pizzas = Pizza::findOrFail($id); /* getting element by id - findOrFail() is better because if not exist return 404 */
        return view('pizzas.show', ['pizzas' => $pizzas]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
//        error_log(request('name'));
//        error_log(request('type'));
//        error_log(request('base'));

        $pizza = new Pizza();


        $pizza->name = request('name');  /* -> it's mean set in java*/
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();  /*to save data in db and laravel it's know which table save data by model */
        error_log("Model => " . $pizza);

        return redirect('/pizzas')->with('message', 'thanks for your order');/* we send a message by key and data by method call with(key, value)*/
    }
}
