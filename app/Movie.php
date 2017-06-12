<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
class Movie extends Model
{
    protected $table="movies";
    protected $fillable = ['name','path','cast','direction','duration','genres_id'];
    //se crea un mutador para no sobre escribir archivos
    public function setPathAttribute($path){
        $this->attributes['path']=Carbon::now()->second.$path->getClientOriginalName();
        $name=Carbon::now()->second.$path->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($path));
    }
    public static function Movies(){
        return DB::table('movies')
        ->join('genres','genres.id','=','movies.genres_id')
        ->select('movies.*','genres.genre')
        ->get();
    }
}