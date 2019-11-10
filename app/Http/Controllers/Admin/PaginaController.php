<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pagina;

class PaginaController extends Controller
{
    public function index()
    {	
    	$paginas = Pagina::all();
    	return view('admin.paginas.index', compact('paginas'));
    }

    public function editar($id)
    {
    	$pagina = Pagina::find($id);
    	return view('admin.paginas.editar', compact('pagina'));
    }

    public function atualizar(Request $request, $id)
    {
    	$dados = $request->all();
    	$pagina = Pagina::find($id);
    	$pagina->titulo = trim($dados['titulo']);
    	$pagina->descricao = trim($dados['descricao']);
    	$pagina->texto = trim($dados['texto']);

    	if(isset($dados['email'])){
    		$pagina->email = trim($dados['email']);
    	}

    	$file = $request->file('imagem');
    	if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "imagem/paginas/".$id."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$pagina->imagem = $diretorio.'/'.$nomeArquivo; 
    	}

    	$pagina->update();

    	\Session::flash('mensagem',['msg'=>'Resgistro atulizado com sucesso!','class'=>'green white-text']);

    	return redirect()->route('admin.paginas');

    }
}
