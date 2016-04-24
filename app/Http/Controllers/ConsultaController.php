<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Consulta;

class ConsultaController extends Controller
{
    //

    public function index()
    {
    	$consultas = Consulta::all();
    	return view('consulta')->with('consultas', $consultas);
    }


    public function store(Request $request)
    {
    	$consulta= new Consulta();
    	$consulta -> nomePaciente =$request -> get('nomePaciente'); 
    	$consulta -> apelidoPaciente =$request -> get('apelidoPaciente');
    	$consulta -> dataNascimentoPaciente =$request -> get('dataNascimento');
    	$consulta -> telefonePaciente =$request -> get('telefone');
    	$consulta -> emailPaciente =$request -> get('email');
    	$consulta -> especialidadeConsulta =$request -> get('especialidade');
    	$consulta -> dataConsulta =$request -> get('dataConsulta');
    	$consulta -> horaConsulta =$request -> get('horaConsulta');
    	$consulta -> nomeMedico =$request -> get('nomeMedico');
    	$consulta -> save();

        return view('sucesso');
    }
}
