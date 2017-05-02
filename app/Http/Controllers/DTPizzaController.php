<?php namespace App\Http\Controllers;

use App\Models\DTPizzaBase;
use App\Models\DTPizzaCheese;
use App\Models\DTPizzaIngredients;
use Illuminate\Routing\Controller;

class DTPizzaController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dtpizza
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function form()
    {
        $configuration ['cheese'] = DTPizzaCheese::get()->pluck('name','id')->toArray();
        $configuration ['base'] = DTPizzaBase::get()->pluck('name','id')->toArray();
        $configuration ['ingredients'] = DTPizzaIngredients::get()->pluck('ingredients','id')->toArray();

        return view('content.form_pizza', $configuration);
    }
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dtpizza
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dtpizza/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dtpizza/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dtpizza/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dtpizza/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}