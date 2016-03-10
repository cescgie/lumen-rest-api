<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'] , function($app){
    $app->get('/article', ['uses' => 'ArticleController@getArticles', 'as' => 'allArticles']);
    $app->get('/article/{id}', ['uses' => 'ArticleController@getArticle', 'as' => 'singleArticle']);
    $app->post('/article', ['uses' => 'ArticleController@saveArticle', 'as' => 'saveArticle']);
    $app->put('/article/{id}', ['uses' => 'ArticleController@updateArticle', 'as' => 'updateArticle']);
    $app->delete('/article/{id}', ['uses' => 'ArticleController@deleteArticle', 'as' => 'deleteArticle']);
});
