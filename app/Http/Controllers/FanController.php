<?php

namespace App\Http\Controllers;

use App\Fan;
use Illuminate\Http\Request;

function convertCheckboxValue($dado){
    if(isset($dado['ativo']) && $dado['ativo'] == 'on'){
        $dado['ativo'] = '1';
    }else{
        $dado['ativo'] = '0';
    }
    return $dado;
}

 function xmlToArray($path){
    //$path = "https://raw.githubusercontent.com/p21sistemas/skeleton21/master/clientes.xml";
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
    
    public function index()
    {
        $dados = Fan::all();
        return view('index', compact('dados'));
    }

    
    public function store(Request $request)
    {
        $dado = $request->all();
        $dados = convertCheckboxValue($dado);
        Fan::create($dados);
        return redirect()->route('index');
    }


    public function edit($id = null)
    {
        if(isset($id)){
            $dados = Fan::find($id);
            return view('editar', compact('dados'));
        }else{
            return view('cadastrar');
        }
    }

  
    public function update(Request $request, $id)
    {
        $dado = $request->all();
        $dados = convertCheckboxValue($dado);
        Fan::find($id)->update($dados);
        return redirect()->route('index');
    }

   
    public function destroy($id)
    {
        Fan::destroy($id);
        return redirect()->route('index');
    }

    public function extract(Request $request){
        $file = $request->file('file');
        $name = "lastUpdateFile.xml";
        $url = "files/";
        $file->move($url, $name);
        $path = $url . $name;

        $allFans = xmlToArray($path); 
            foreach($allFans as $fans){
                Fan::create($fans);
            }
            return redirect()->route('index');
    }

}
