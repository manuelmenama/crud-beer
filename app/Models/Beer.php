<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Beer extends Model
{
    use HasFactory;

    protected $fillable =['name','slug','image','price'];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $beer_exists = Beer::where('slug', $slug)
        ->first();
        while($beer_exists){
            $slug = $original_slug . '-' . $c;
            $beer_exists = Beer::where('slug',$slug)
            ->first();
            $c++;
        }
        return $slug;
    }
}
