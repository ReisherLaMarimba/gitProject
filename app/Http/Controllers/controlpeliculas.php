<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Auth;

class controlpeliculas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $buscar = trim($request -> get('buscar'));
        //$buscarT['peliculas'] = Peliculas::orderBy('id', 'desc')->get();
        //$datosP['peliculas'] = Peliculas::orderBy('id', 'desc')->get();
        $peliculas = DB::table('peliculas')
                    ->select('id','titulo', 'director', 'reseña', 'fecha_estreno', 'Link', 'actores')
                    ->where('titulo','LIKE', '%'.$buscar.'%')
                    ->orderBy('id', 'desc')
                    ->get();
        //$datosV['peliculas']= Peliculas::paginate(5);

        //return response()->json($datosP);
        return view('peliculas.index', compact('peliculas', 'buscar', ));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peliculas.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ValidDatos=[
            'Titulo'=>'required|string|max:50' , 
            'Director'=>'required|string|max:50' , 
            'Actores'=>'required|string|max:50'  ,
            'Reseña'=>'required|string|max:250'    
        ];
        $MensajeErr=[
                'required'=>'Es requerido completar: :attribute'
            ];
            $this->validate($request, $ValidDatos, $MensajeErr);

        //
        date_default_timezone_set("America/Santo_Domingo");
        //
        //$datosVideo = request()->except('_token');
        $fecha = date("Y-m-d H:i:s");
        $nombre = $_POST['Titulo'];
        $urlVideo = $_POST['Link'];
        $fecha_estreno = $_POST['fecha_estreno'];
        $director = $_POST['Director'];
        $actores = $_POST['Actores'];
        $resena = $_POST['Reseña'];
        $userid = User::where('id', '=', Auth::user()->id)->get('id');
        $userid = Auth::id();
        

        $cantidad_url_video = strlen($urlVideo);
        $url_final_video = "";

        switch($cantidad_url_video){
            case 28:
                $cortar_url = str_replace('https://youtu.be/','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 41:
                $cortar_url = str_replace('https://m.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 43:
                $cortar_url = str_replace('https://www.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 58:
                $cortar_url = str_replace('https://m.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 60:
                $cortar_url = str_replace('https://www.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            default:
                echo "URL INVALIDA";
                break;
        }

        // insertando en la tabla

        Peliculas::insert([
            'titulo' => $nombre, 'Link' => $url_final_video, 'fecha_estreno' => $fecha_estreno,
            'director' => $director, 'reseña' => $resena, 'actores' => $actores, 'user_id' => $userid,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        //return response()->json($userid);
        return redirect('peliculas');
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
        $pelicula=Peliculas::findOrFail($id);
        return view('peliculas.edit', compact('pelicula'));
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
        // $datosP =$request->except(['_token', '_method']);
        // Peliculas::where('id','=',$id)-> update($datosP);
        // $pelicula=Peliculas::findOrFail($id);
        $nombre = $_POST['Titulo'];
        $urlVideo = $_POST['Link'];
        $fecha_estreno = $_POST['fecha_estreno'];
        $director = $_POST['Director'];
        $actores = $_POST['Actores'];
        $resena = $_POST['Reseña'];
        //$userid = User::where('id', '=', Auth::user()->id)->get('id');
        $userid = Auth::id();
        

        $cantidad_url_video = strlen($urlVideo);
        $url_final_video = "";

        switch($cantidad_url_video){
            case 28:
                $cortar_url = str_replace('https://youtu.be/','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 41:
                //$cortar_url = str_replace('https://m.youtube.com/watch?v=','',$urlVideo);
                //$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                $url_final_video = $urlVideo;
                break;
            case 43:
                $cortar_url = str_replace('https://www.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 58:
                $cortar_url = str_replace('https://m.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            case 60:
                $cortar_url = str_replace('https://www.youtube.com/watch?v=','',$urlVideo);
                $url_final_video = 'https://www.youtube.com/embed/' .$cortar_url;
                break;
            default:
                echo "URL INVALIDA";
                break;
        }

        // insertando en la tabla

        // Peliculas::insert([
        //     'titulo' => $nombre, 'Link' => $url_final_video, 'fecha_estreno' => $fecha_estreno,
        //     'director' => $director, 'reseña' => $resena, 'actores' => $actores, 'user_id' => $userid,
        //     'updated_at' => date("Y-m-d H:i:s")
        // ]);
        
        // $pelicula = array(
        //     'titulo' => $nombre, 'Link' => $url_final_video, 'fecha_estreno' => $fecha_estreno,
        //     'director' => $director, 'reseña' => $resena, 'actores' => $actores, 'user_id' => $userid,
        //     'created_at' => Peliculas::select('created_at')->where('id', '=', $id)->get()
        // );

        Peliculas::where('id','=',$id)->update([
                'titulo' => $nombre, 'Link' => $url_final_video, 'fecha_estreno' => $fecha_estreno,
                'director' => $director, 'reseña' => $resena, 'actores' => $actores, 'user_id' => $userid,
                'updated_at' => date("Y-m-d H:i:s")
            ]);

        $pelicula = Peliculas::findOrFail($id);

        //return view('peliculas.edit', compact('pelicula'));
        return redirect('peliculas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       peliculas::destroy($id);
       return redirect('peliculas');
    }
}
