<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FacturasModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Facturas extends BaseController
{
    public function index()
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allFacturas);
        return $response;
    }
    public function documentacionIndex(){
        return view('facturas/index'); 
    }
}
