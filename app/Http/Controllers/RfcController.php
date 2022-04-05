<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Funciones;
use Inertia\Inertia;

class RfcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->funciones = new Funciones;
    }

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
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        try {
            $RFC = $request->rfc;
            $tokenId = 'SistemaDeRpueba4as4x4vdlsad';
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => "10.1.181.9:9003/usuarios/loadUserCASI",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\n \"security\":\n {\n \"tokenId\":\"$tokenId\"\n },\n \"data\":\n {\n \"RFC\":\"$RFC\"\n }\n \n}",
                CURLOPT_HTTPHEADER => array("Content-Type:application/json"),

            ));
            $response = curl_exec($ch);
            curl_close($ch);

            $array = json_decode($response, true);
            foreach ($array['data'] as $key => &$value) {
                if ($value === "0" || is_null($value)) {
                    $value = "DATO NO ENCONTRADO";
                }
            }
            $data= $array['data'];
//                return view('preinscripcion.preinscripcion_form', compact('data'));
//            var_dump(compact('data'));
            return Inertia::render('Auth/Register', [
                'datosTutor'=> compact('data')
            ]);
//                    echo (compact('data'));

        } catch (\Throwable $th) {
//             dd($th);
//            return redirect('/preinscripcion_validar_rfc')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
//            echo($request->rfc . 'no existe ');
            return redirect()->route('register')->with('status', 'Este RFC no se encuentra en nuestros registros, intente con otro');
            echo ($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
