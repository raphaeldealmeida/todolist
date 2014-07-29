<?php
session_start();

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function (){
    return include('../index.php');
});

$app->post('/salvar', function (Request $request) use($app) {
    
    //array_unshift($_SESSION['tasks'],['texto' => $request->get('texto') ]);
    $_SESSION['tasks'][]['texto'] = $request->get('texto');
    return $app->redirect('/');
});

$app->get('/excluir/{id}', function (Silex\Application $app, $id) {
    if (!isset($id)) {
        $app->abort(404, "Tarefa $id does not exist.");
    }
    unset($_SESSION['tasks'][$id]);
    return $app->redirect('/');
});

$app->get('/done/{id}', function (Silex\Application $app, $id) {
    if (!isset($id)) {
        $app->abort(404, "Tarefa $id does not exist.");
    }
    $_SESSION['tasks'][$id]['done'] = true;    
    return $app->redirect('/');
});


$app->run();