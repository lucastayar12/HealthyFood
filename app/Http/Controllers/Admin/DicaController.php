<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dica;
use App\Tipo;

class DicaController extends Controller
{
	 public function index()
    {
        $registros = Dica::all();
        return view('admin.dicas.index', compact('registros')); 
    }

    public function adicionar()
    {	
    	$tipos = Tipo::all();

        return view('admin.dicas.adicionar',compact('tipos'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Dica();
        $registro->titulo = $dados['titulo'];
        $registro->descrição = $dados['descrição'];
        $registro->publicar = $dados['publicar'];
        $registro->visualizacoes = 0;
        $registro->tipo_id = $dados['tipo_id'];

        $file = $request->file('imagem');
    	if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "imagem/dicas/".str_slug($dados['titulo'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo; 
    	}

        $registro->save();
        
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

            return redirect()->route('admin.dicas');
    }

    public function editar($id)
    {	

    	$registro = Dica::find($id);
    	$tipos = Tipo::all();
       
        return view('admin.dicas.editar',compact('registro','tipos'));
    }

    public function atualizar(Request $request, $id)
    {
     	$registro = Dica::find($id);
        $dados = $request->all();
        $registro->titulo = $dados['titulo'];
        $registro->descrição = $dados['descrição'];
        $registro->publicar = $dados['publicar'];
        $registro->tipo_id = $dados['tipo_id'];

        $file = $request->file('imagem');
    	if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "imagem/dicas/".trim($dados['titulo'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo; 
    	}

        $registro->update();
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

            return redirect()->route('admin.dicas');
    }

    public function deletar($id)
    {   
        
        Dica::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);

            return redirect()->route('admin.dicas');
    }
}
