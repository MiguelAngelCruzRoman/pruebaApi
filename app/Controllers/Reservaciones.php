<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservacionesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Reservaciones extends BaseController
{
    public function index()
    {
        $reservaciones = new ReservacionesModel();
        $allReservaciones = $reservaciones->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allReservaciones);
        return $response;
    }
    public function documentacionIndex(){
        return view('reservaciones/index'); 
    }
}
