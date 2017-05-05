<?php namespace App\Http\Controllers;

use App\Models\DTPizza;
use App\Models\DTPizzaBase;
use App\Models\DTPizzaCheese;
use App\Models\DTPizzaIngredients;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DTPizzaController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /dtpizza
     *
     * @return Response
     */
    public function index()
    {
        $configuration ['all_pizzas'] = DTPizza::with(['ingredientsConnection'])->with(['pizzaBase'])->with(['pizzaCheese'])->get()->toArray();
     //dd($configuration);
        return view('content.form_list',  $configuration);
    }


    public function create()
    {
        $configuration = $this->getFormData();
//        dd($configuration);
        return view('content.form_pizza', $configuration);
    }


    public function store()
    {
        $configuration = $this->getFormData();
        $data = request()->all();

        //dd($data);
//        $configuration ['cheese'] = DTPizzaCheese::get()->pluck('name', 'id')->toArray();
//        $configuration ['base'] = DTPizzaBase::get()->pluck('name', 'id')->toArray();
//        $configuration ['ingredients'] = DTPizzaIngredients::get()->pluck('ingredients', 'id')->toArray();

        if (sizeof($data['ingredients']) > 3) {
            $configuration ['data'] = $data;
            return view('content.form_pizza', $configuration);
        }


        $base_calories = array_sum(DB::table('DT_pizza_base')->where('id', '=', $data['base'])->select('calories')->get()->pluck('calories')->toArray());
        $cheese_calories = array_sum(DB::table('DT_pizza_cheese')->where('id', '=', $data['cheese'])->select('calories')->get()->pluck('calories')->toArray());

        $ingredients_calories = 0;
        //dd($data);
        foreach ($data['ingredients'] as $ingredient) {
            $ingredient_calories = DB::table('DT_pizza_ingredients')->where('id', '=', $ingredient)->select('calories')->get()->pluck('calories')->toArray();
            $ingredients_calories += array_sum($ingredient_calories);


        }
        $pizza_calories = $base_calories + $cheese_calories + $ingredients_calories;

        $record = DTPizza::create([
            'pizzaName' => $data['pizza'],
            'pizza_base_id' => $data['base'],
            'pizza_cheese_id' => $data['cheese'],
            'calories' => $pizza_calories,

        ]);

        $record->connection()->sync($data['ingredients']);

        $record['cheese'] = DTPizzaCheese::all()->pluck('name', 'id')->toArray();
        $record['base'] = DTPizzaBase::all()->pluck('name', 'id')->toArray();
        $record['ingredients'] = DTPizzaIngredients::all()->pluck('ingredients', 'id')->toArray();

        return view('content.form_pizza', $configuration);
    }
    public function getFormData()
    {
        $configuration ['cheese'] = DTPizzaCheese::all()->pluck('name', 'id')->toArray();
        $configuration ['base'] = DTPizzaBase::all()->pluck('name', 'id')->toArray();
        $configuration ['ingredients'] = DTPizzaIngredients::all()->pluck('ingredients', 'id')->toArray();


        return $configuration;
    }



    /**
     * Display the specified resource.
     * GET /dtpizza/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $configuration ['pizza'] = DTPizza::with(['ingredientsConnection'])->with(['pizzaBase'])->with(['pizzaCheese'])->find($id)->toArray();
        //dd($configuration);
        return view('content.one_pizza',  $configuration);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /dtpizza/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $configuration = $this->getFormData();
        $configuration ['pizza'] = DTPizza::with(['ingredientsConnection'])->with(['pizzaBase'])->with(['pizzaCheese'])->find($id)->toArray();


       //dd($configuration);
        return view('content.edit_pizza',  $configuration);

    }

    /**
     * Update the specified resource in storage.
     * PUT /dtpizza/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {


    }

    /**
     * Remove the specified resource from storage.
     * DELETE /dtpizza/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}