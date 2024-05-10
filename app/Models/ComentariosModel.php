<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ComentariosModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->comentarios;
    }

    public function index()
    {
        $comentarios = $this->collection->find();
        return $comentarios->toArray();
    }

    public function getComentarioCalificacion($calificacion)
    {
        $comentarios = $this->collection->find( ['calificacion' => intval($calificacion)] );
        return $comentarios->toArray();
    }
}
