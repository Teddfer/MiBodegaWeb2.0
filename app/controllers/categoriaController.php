<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Services\CategoriaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;
use stdClass;

class CategoriaController extends Controller
{
    private readonly ICategoriaService $service;

    public function __construct(
        
        ICategoriaService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAllSimple(true);
        echo $this->blade->render('categoria.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        $data = $this->service->get($id);

        echo $this->blade->render('categoria.detail', [
            'data' => $data
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdCategoria']) ? intval($_POST['IdCategoria']) : 0;
        $obj = new \stdClass();
        $obj->IdCategoria = $id;
        $obj->Nombre = $_POST['Nombre'];
        $obj->Descripcion = $_POST['Descripcion'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Categoria guardada correctamente',
                'redirection' => URL . 'categoria/index'
            ];
        }

        echo json_encode($response);
    }

    public function delete($param = null)
    {
        $id = $param[0] ?? 0;
        if ($id > 0) {
            $rpta = $this->service->delete($id);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Categoria eliminada correctamente',
                'redirection' => URL . 'categoria/index'
            ];
        }

        echo json_encode($response);
    }

}
