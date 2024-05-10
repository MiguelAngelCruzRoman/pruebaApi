<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ReservacionesModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->reservaciones;
    }

    public function index()
    {
        $reservaciones = $this->collection->find();
        return $reservaciones->toArray();
    }

}
