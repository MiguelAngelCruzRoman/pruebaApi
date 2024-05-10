<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Clientes extends BaseController
{
    public function index()
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }

    public function documentacionIndex(){
        return view('clientes/index'); 
    }

    public function getClienteNombre($nombre)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getClienteNombre($nombre);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }
}
