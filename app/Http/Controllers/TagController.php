<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    
    public function create()
    {
        return view('admin.tags.create', compact('tags'));
    }

    
    public function store(TagRequest $request)
    {
        Tag::create($request->all());

        return redirect()
        ->route('tags.index')
        ->with('success', 'La etiqueta se creó con éxito');
    }

    
    public function show(Tag $tag)
    {
        //
    }

    
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    
    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->all());

        return redirect()
        ->route('tags.edit', $tag->id)
        ->with('success', 'La etiqueta se actualizó con éxito');
        
    }

    
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()
        ->route('tags.index')
        ->with('success', 'La publicación ha sido eliminado con éxito');
    }
}
