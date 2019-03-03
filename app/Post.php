<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $date = ['created_at'];


    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function getRouteKeyName()
    {
        return 'slug';
    }

    public static function create(array $attributes = [])
    {
        $post = static::query()->create($attributes);
        $post->generateURL();
        return $post;
    }

    public function generateURL()
    {
        //Verificamos si el slug existe, en caso de si se asigna el id del post
        $slug = str_slug($this->title);
        if ($this->where('slug', $slug)->exists()) {
            $slug = $slug."-{$this->id}";
        }
        $this->slug = $slug;
        $this->save();
    }

    



}
