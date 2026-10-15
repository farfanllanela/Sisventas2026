<?php
namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Admin\Categorias; 

class ProductosController extends Controller
{
    protected $categoriasModel;
    public function __construct()
    {
        $this->categoriasModel = new Categorias();
    }
    public function index()
    {
        $this->view('admin/productos/index', [
            'module'    => 'admin',
            'pageTitle' => 'Productos'
        ]);
        exit;
    }
    public function nuevo(){
        $categorias = $this->categoriasModel->categirias__select();
        $this->view('admin/productos/nuevo', [
            'isAdmin'   => true,
            'module'    => 'admin',
            'pageTitle' => 'Nuevo Producto',
            'categorias' => $categorias
        ]);
        exit;
    }
    public function guardar(){
    $data = $_POST;
    //validar datos
    if(!empty($data['categoria']) && !empty($data['codigo']) && !empty($data['nombre']) && !empty($data['descripcion']) && !empty($data['precio']) && !empty($data['stock'])){
        //guardar producto
        //llmar al modelo de productos para guardar el producto en la base de datos
    }else{
        header('Location: ' . BASE_URL . '/admin/productos/nuevo');
    }
}
}