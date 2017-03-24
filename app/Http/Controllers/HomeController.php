<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_curso;
use DB;
use App\Consultas;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cursos = DB::table('tbl_cursos')->orderByRaw("RAND()")->get();    
        $tiposCursos = Consultas::consulta('categorias','');
        $cursosNegocios = Consultas::consulta('cursosCategoria','Negocios');
        $cursosDesarrollo = Consultas::consulta('cursosCategoria','Desarrollo');
        $cursosTecnologia = Consultas::consulta('cursosCategoria','Tecnología');
        $cursosProductividad = Consultas::consulta('cursosCategoria','Productividad');

        return \View::make('index', compact('cursos','tiposCursos','cursosNegocios','cursosDesarrollo', 'cursosTecnologia','cursosProductividad'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function curso($curso)
    {

        $cursos = DB::table('tbl_cursos')->where('str_curso', $curso)->get();
        $cursosNegocios = Consultas::consulta('cursosCategoria','Negocios');
        $cursosDesarrollo = Consultas::consulta('cursosCategoria','Desarrollo');
        $cursosTecnologia = Consultas::consulta('cursosCategoria','Tecnología');
        $cursosProductividad = Consultas::consulta('cursosCategoria','Productividad');

         
        return \View::make('curso', compact('cursos','cursosNegocios','cursosDesarrollo', 'cursosTecnologia','cursosProductividad'));
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
}
