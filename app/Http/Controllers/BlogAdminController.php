<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BlogAdminController extends Controller
{
    public function index(Request $request)
    {
        return view('modules.blog.admin.dashboard');
    }

    public function post()
    {
        return view('modules.blog.admin.post');
    }
    public function postStore()
    {        
        $data = [
            'name' => 'Agregar',
            'method' => 'store'
        ];
        return view('modules.blog.admin.postSave', $data);
    }
    public function postUpdate($id)
    {        

        $post = Post::where('in_postid', '=', $id)->first();
        $data = [
            'name' => 'Editar',
            'method' => 'update',
            'post' => $post
        ];
        return view('modules.blog.admin.postSave', $data);
    }
}
