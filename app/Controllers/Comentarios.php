<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComentariosModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Comentarios extends BaseController
{
    public function index()
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }
    public function documentacionIndex(){
        return view('comentarios/index'); 
    }

    public function getComentarioCalificacion($calificacion)
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->getComentarioCalificacion($calificacion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }
}
