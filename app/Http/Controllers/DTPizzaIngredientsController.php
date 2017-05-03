<?php namespace App\Http\Controllers;

use App\Models\DTPizzaIngredients;
use Illuminate\Routing\Controller;

class DTPizzaIngredientsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /dtpizzaingredients
     *
     * @return Response
     */
    public function index()
    {
        return DTPizzaIngredients::get()->toArray();
    }

    public function form()
    {

        $configuration ['ingredient'] = DTPizzaIngredients::get()->pluck(' ingredients','id')->toArray();



        return view('content.form_ingredients', $configuration);
    }
    public function addIngredient ()
    {

        $data = request()->all();

        $record = DTPizzaIngredients::create([
            ' ingredients' => $data['ingredient'],
            'calories' => rand(1,200),
        ]);

        return view('content.form_ingredients', $record->toArray());

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /dtpizzaingredients
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /dtpizzaingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /dtpizzaingredients/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /dtpizzaingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /dtpizzaingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}