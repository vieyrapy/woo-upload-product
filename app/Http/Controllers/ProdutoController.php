<?php

namespace App\Http\Controllers;
use App\Exports\ProdutoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lista;
use DB;
/**
 * Class ProdutoController
 * @package App\Http\Controllers
 */
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        $listas =  Lista::select('user_id');
        $datos = ($listas=Auth::id());
        $produtos = Produto::where('lista_id','=',  $datos)->paginate();
      

        return view('produto.index', compact('produtos'))
            ->with('i', (request()->input('page', 1) - 1) * $produtos->perPage());
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'lista_id'	=>	$request->lista_id,
    				'sku'		=>	$request->sku,
    				'nombre'		=>	$request->nombre,
                    'descripcion'		=>	$request->descripcion,
                    'precionormal'		=>	$request->precionormal,
                    'categorias'		=>	$request->categorias,
                    'imagenes'		=>	$request->imagenes
                    
    			);
    			DB::table('produtos')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('produtos')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function create()
    {
        $produto = new Produto();
        return view('produto.create', compact('produto'));
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    /**public function store(Request $request)
    {
        request()->validate(Produto::$rules);

        $produto = Produto::create($request->all());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto created successfully.');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    /**public function show($id)
    {
        $produto = Produto::find($id);

        return view('produto.show', compact('produto'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    /**public function edit($id)
    {
        $produto = Produto::find($id);

        return view('produto.edit', compact('produto'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Produto $produto
     * @return \Illuminate\Http\Response
     */
   /**public function update(Request $request, Produto $produto)
    {
        request()->validate(Produto::$rules);

        $produto->update($request->all());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto updated successfully');
    }*/

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    /**public function destroy($id)
    {
        $produto = Produto::find($id)->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto deleted successfully');
    }*/

    public function export()
    {
        return Excel::download(new ProdutoExport, 'productos.csv');
    }
}
