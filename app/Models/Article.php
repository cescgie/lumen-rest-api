<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'articles';

    protected $fillable = ['article_name', 'article_description'];

}
