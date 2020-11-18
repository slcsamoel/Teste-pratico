<?php

namespace App\Http\Controllers;
use App\user;
use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proprietarios = User::where('role',1);
    
        return view('admin.veiculos.edit',[
            'veiculo' => $this->model(),
            'proprietarios' => $proprietarios
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function model(array $data = [])
    {
        return new Veiculo($data);
    }

    // private function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'state_id' => 'required|exists:states,id',
    //         'city' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //     ], [], [
    //         'state_id' => 'estado',
    //     ]);
    // }

}
