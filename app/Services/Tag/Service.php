<?php

namespace App\Services\Tag;

use App\Models\Tag;

class Service {

    public function store( $req){
        
        $tag = new Tag();

        $tag->title = $req->input('title');
        $tag->save();


    }

    public function update($req, $tag_id){
        
        $tag = Tag::find($tag_id);

        $tag->title = $req->input('title');
        $tag->update();
    }
}