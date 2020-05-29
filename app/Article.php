<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function commentaires() {
        return $this->hasMany( Commentaire::class );
    }

    public function tags() {
        return $this->belongsToMany( Tag::class, 'tag_articles' );
    }

    public function categories() {
        return $this->belongsToMany( Categorie::class, 'categorie_articles' );
    }
}
