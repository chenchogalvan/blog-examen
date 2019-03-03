<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
   
    public function index()
    {
        $post = Post::with('User')->where('user_id', Auth::user()->id)->get();
        return view('admin.post.index', compact('post'));
    }

    
    public function create()
    {
        $tags = Tag::all();
        return view('admin.post.create', compact('tags'));
    }

    
    public function store(StorePostRequest $request)
    {
        //Creamos el post y cargamos todos los campos menos la imagen para que no guarde el archivo temp
        $post = Post::create($request->only(['user_id', 'title', 'body', 'slug']));

        //Guardamos la imagen en Sotrage/public/blog y guardamos la url en la base de datos
        $post->cover_path =  $request->file('cover_path')->store('public/blog');
        $post->save();

        //Guardamos los tags
        $post->tags()->attach($request->get('tags'));

        return redirect()
        ->route('posts.index')
        ->with('success', 'La publicación con el titulo "'.$request->get('title').'" se ha guardado con éxito');
    }

    
    public function show(Post $post)
    {
        $tags = Tag::all();
        return view('admin.post.show', compact('post', 'tags'));
    }

    
    public function edit(Post $post)
    {
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'tags'));
    }

    
    public function update(StorePostRequest $request, Post $post)
    {
        //Eliminamos la imagen y agregamos la nueva, en caso de que cover_path tenga un valor
        if ($request->hasFile('cover_path')) {
            Storage::delete($post->cover_path);
            $post->cover_path =  $request->file('cover_path')->store('public/blog');
        }
        
        $post->update($request->only('title', 'body', 'slug'));

        //Verificamos que si el slug es igual al de la BD no lo actualice, si es diferente me crea un nuevo slug
        if (str_slug($request->title) == $post->slug) {
            $post->slug = str_slug($request->title);
        }else{
            $post->generateURL();
        }
        

        


        //Guardamos los tags
        $post->tags()->sync($request->get('tags'));



        return redirect()
        ->route('posts.edit', $post->slug)
        ->with('success', 'La publicación se actualizó con éxito');
    }

    
    public function destroy(Post $post)
    {
        //Quitamos los Tags
        $post->tags()->detach();

        //Quitamos la imagen de la carpeta Storage
        Storage::delete($post->cover_path);

        //Borramos el post
        $post->delete();

        return redirect()
        ->route('posts.index')
        ->with('success', 'La publicación ha sido eliminado con éxito');

    }
}
