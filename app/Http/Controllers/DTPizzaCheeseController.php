<?php namespace App\Http\Controllers;

use App\Models\DTPizzaCheese;
use Illuminate\Routing\Controller;

class DTPizzaCheeseController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dtpizzacheese
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'cheese';
	}

    public function form()
    {
        $configuration ['cheese'] = DTPizzaCheese::get()->pluck('name','id')->toArray();

        return view('content.form_cheese', $configuration);
    }
    public function addCheese (  )
    {
        //dd($_POST);
        //echo $_POST['city'];
        //dd(request()->ToArray());
        //dd(request()->all());
        //dd($data);
        $data = request()->all();

        $record = DTPizzaCheese::create ([
            'name' => $data['cheese'],
        ]);

        return view('content.form_cheese', $record->toArray());
        //return view('content.form_city');
    }
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dtpizzacheese
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dtpizzacheese/{id}
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
	 * GET /dtpizzacheese/{id}/edit
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
	 * PUT /dtpizzacheese/{id}
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
	 * DELETE /dtpizzacheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}