<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HotelesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Hoteles extends BaseController
{
    public function index()
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHoteles);
        return $response;
    }
    public function documentacionIndex(){
        return view('hoteles/index'); 
    }
}
