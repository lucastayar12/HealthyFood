<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo','=','sobre')->count();

        if($existe){
        	$paginaSobre = Pagina::where('tipo','=','sobre')->first();
        }
        else{
        	$paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = 'Título da Empresa';
        $paginaSobre->descricao = 'Descrição breve sobre a empresa.';
        $paginaSobre->texto = 'Texto sobre a empresa.';
        $paginaSobre->imagem = 'site/imagens/sanduiche-natural.jpg';
        $paginaSobre->tipo = 'sobre';
        $paginaSobre->save();
    }
}
