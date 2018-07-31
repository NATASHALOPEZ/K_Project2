<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class countryController extends Controller
{
	public function index()
    {
     
    
  
       $article = Article::all();
      return $article;
    }
    public function send($locale)
    {
    	$article = new Article();
    $article->online = true;
    $article->save();

    foreach (['en', 'nl', 'fr', 'de'] as $locale) {
        $article->translateOrNew($locale)->name = "Title {$locale}";
        $article->translateOrNew($locale)->text = "Text {$locale}";
    }

    $article->save();

    echo 'Created an article with some translations!';
    }
  
}
