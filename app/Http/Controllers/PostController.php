<?php

namespace App\Http\Controllers;

use App\Http\Responses\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function show(Request $request)
    {
        if ($request->ajax()) {
            #$data = Order::select('*');
            $posts = Post::select('*')
                ->where('posts.in_deleted', '=', '0')
                ->get();

            return DataTables::of($posts)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a class="btn btn-link text-dark px-3 mb-0" href="publicaciones/editar/'.$row->in_postid.'"><i class="fas fa-pencil-alt text-dark me-2"></i></a>
                                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function store(Request $request)
    {
        // Valida los datos recibidos.
        /*$validatedData = $request->validate([
            'vc_title' => 'required|string|max:350',
            'tx_content' => 'required|string',   
        ]);*/

        // Crea un array asociativo con los datos validados.
        $data = [
            'vc_title' => $request->title,
            'vc_slug' => $request->slug,
            'tx_content' => $request->content,
            'vc_cover' => '',
            'in_userid' => 1,
        ];

        // Generamos SLUG URL
        $data['vc_slug'] = $this->generarSlugUnico($data['vc_title']);

        // Valida si se envió una imagen
        if ($request->hasFile('cover')) {
            $imagen = $request->file('cover');

            $nombreImagen = uniqid() . '.' . $imagen->getClientOriginalExtension();

            $imagen->storeAs('public/uploads', $nombreImagen);
            $rutaImagen = 'storage/uploads/' . $nombreImagen;

            $data['vc_cover'] = $rutaImagen;
        }

        // Usa el método create para insertar el registro en la base de datos.
        Post::create($data);

        $response = ['message' => 'Se guardo correctamente', 'status' => 'success', 'code' => '200'];

        return JsonResponse::success($response);
    }

    public function generarSlugUnico($titulo)
    {
        $slug = Str::slug($titulo, '-'); // Genera un slug a partir del título

        // Comprueba si el slug ya existe en la base de datos
        $contador = 1;
        $slugOriginal = $slug;

        while (Post::where('vc_slug', $slug)->exists()) {
            $slug = $slugOriginal . '-' . $contador; // Agrega un contador si ya existe
            $contador++;
        }

        return $slug;
    }
}
