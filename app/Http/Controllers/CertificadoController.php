<?php

namespace App\Http\Controllers;

use App\Riesgo;
use App\Certificado;
use Illuminate\Http\Request;
use App\Http\Requests\CertificadoRequest;

class CertificadoController extends Controller
{

    public function index()
    {
        $certificados = Certificado::latest()->paginate();
        return view('certificados.index', compact('certificados'));
    }


    public function create()
    {
        $riesgos = Riesgo::all();
        return view('certificados.create', compact('riesgos'));
    }


    public function store(CertificadoRequest $request)
    {
        Certificado::create($request->validated());
        return back()->with('status', 'Cerficicado creado con éxito!');
    }


    public function show(Certificado $certificado)
    {
        return view('certificados.show', compact('certificado'));
    }


    public function edit(Certificado $certificado)
    {
        //
    }


    public function update(Request $request, Certificado $certificado)
    {
        //
    }


    public function destroy(Certificado $certificado)
    {
        //
    }
}
