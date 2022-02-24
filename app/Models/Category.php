<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Category extends Model
 {
     use HasFactory;

     protected $fillable = ['name'];

     //Todo : definir le hasmany on cherche a recuperer les film dans une catégorie
     public function movies()
     {
         return $this->hasMany(Movie::class);
     }
 }

?>