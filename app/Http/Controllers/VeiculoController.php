<?php

namespace App\Http\Controllers;
use App\user;
use App\Veiculo;
use App\Notifications\CustomerNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $proprietarios = User::where('role',1)->get();
    
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
           $this->validator($request->all())->validate();
           
           $veiculo = $this->model($request->all());

           $veiculo->save();

           $proprietario = $veiculo->user;

           $subject = 'Adicionado Veiculo';
           $message = "O Veiculo $veiculo->modelo Foi Adicionado ";
   
           $proprietario->notify(new CustomerNotification($proprietario->name , $proprietario->email,$subject,$message));

           return redirect()->route('admin.veiculo.edit', [
            'veiculo' => $veiculo->id,
            ])->with('success', 'registrado com sucesso!');  

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
    public function edit(Veiculo $veiculo)
    {
        $proprietarios = User::where('role',1)->get();
        return view('admin.veiculos.edit',[
            'veiculo' => $veiculo,
            'proprietarios' => $proprietarios
        ]); 

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
        $veiculo = Veiculo::find($id);
        $this->validator($request->all())->validate();

        $veiculo->fill($request->all());

        $veiculo->save();
        $proprietario = $veiculo->user;

        $subject = 'Alteração no Seu Veviculo';
        $message = "O Veiculo $veiculo->modelo Foi Alterado ";

        $proprietario->notify(new CustomerNotification($proprietario->name , $proprietario->email,$subject,$message));
        
        return redirect()->route('admin.veiculo.edit', [
            'veiculo' => $veiculo->id,
            ])->with('success', 'Atualizada com sucesso!'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $veiculo = Veiculo::find($id);

        $proprietario = $veiculo->user;

        $subject = 'Removido o Veiculo';
        $message = "O Veiculo $veiculo->modelo Foi Removido ";

        $proprietario->notify(new CustomerNotification($proprietario->name , $proprietario->email,$subject,$message));

        if($veiculo->delete()){
           return redirect()->back()->with('success', 'Deletado com sucesso');
        }else{
            return redirect()->back()->with('success', 'Erro ao Deletar Registro');
        }
    }

    private function model(array $data = [])
    {
        return new Veiculo($data);
    }

    private function validator(array $data)
    {
        return Validator::make($data, [
            'placa' => 'required|string|max:7',
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'ano' => 'required|string|max:4',
        ], [], [
        ]);
    }

}
