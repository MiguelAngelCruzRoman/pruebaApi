<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ClientesModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->clientes;
    }

    public function index()
    {
        $clientes = $this->collection->find();
        return $clientes->toArray();
    }

    public function getClienteNombre($nombre)
    {
        $clientes = $this->collection->find( [ 'primerNombre' => $nombre] );

        return $clientes->toArray();
    }

}
