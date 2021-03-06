<?php namespace App\Http\Controllers;

use App\Models\DTPizzaBase;
use Illuminate\Routing\Controller;

class DTPizzaBaseController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dtpizzabase
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
    public function form()
    {
        $configuration ['base'] = DTPizzaBase::get()->pluck('name', 'id')->toArray();

        return view('content.form_base', $configuration);
    }

    public function addbase()
    {

        $data = request()->all();

        $record = DTPizzaBase::create([
            'name' => $data['base'],
            'calories' => rand(1, 200),
        ]);

        return view('content.form_base', $record->toArray());

    }

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dtpizzabase
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dtpizzabase/{id}
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
	 * GET /dtpizzabase/{id}/edit
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
	 * PUT /dtpizzabase/{id}
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
	 * DELETE /dtpizzabase/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}