<?php

namespace App\Http\Controllers;

use App\Fan;
use Illuminate\Http\Request;

 function xmlToArray(){
    $path = "https://raw.githubusercontent.com/p21sistemas/skeleton21/master/clientes.xml";
    $xml = simplexml_load_file($path);

    //for pra varrer o XML e trata-lo
    for($i = 0; $i < count($xml->torcedor); $i++ ){
        $dados['nome'] = $xml->torcedor[$i]->attributes()['nome']->__toString();; 
        $dados['cpf'] = $xml->torcedor[$i]->attributes()['documento']->__toString(); 
        $dados['cep'] = $xml->torcedor[$i]->attributes()['documento']->__toString(); 
        $dados['endereco'] = $xml->torcedor[$i]->attributes()['endereco']->__toString(); 
        $dados['bairro'] = $xml->torcedor[$i]->attributes()['bairro']->__toString();
        $dados['cidade'] = $xml->torcedor[$i]->attributes()['cidade']->__toString();
        $dados['uf'] = $xml->torcedor[$i]->attributes()['uf']->__toString();
        $dados['telefone'] = $xml->torcedor[$i]->attributes()['telefone']->__toString();
        $dados['email'] = $xml->torcedor[$i]->attributes()['email']->__toString();
        $dados['ativo'] = $xml->torcedor[$i]->attributes()['ativo']->__toString();
        
        $allFans[$i] = $dados;
    }
    return $allFans;
    
    
}

class FanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Fan::all();
        return view('index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        if($dados){
            Fan::create($dados);
        }else{
            $allFans = xmlToArray(); 
            foreach($allFans as $fans){
                Fan::create($fans);
            }
        }
       
        $dados = Fan::all();
        return redirect()->route('index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id = null)
    {
        if($id){
            $dados = Fan::find($id);
        }else{
            
        }
        
        return view('form', compact('dados'));
    }

  
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Fan::find($id)->update($dados);
        return redirect()->route('index');
    }

   
    public function destroy($id)
    {
        //
    }

    
}
