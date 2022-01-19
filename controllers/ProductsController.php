<?php
require_once 'controllers/Controller.php';
require_once 'models/Manufacturers.php';
require_once 'models/Categories.php';

class ProductsController extends Controller
{
    protected $modelClass = 'Products';

    public function index()
    {
        $data = $this->model->all();
        require_once $this->viewPath.'/index.php';
    }

    public function show(int $id)
    {
        $data = $this->model->one($id);
        require_once $this->viewPath.'/show.php';
    }

    public function edit($id = null)
    {
        $data = null;
        $manufacturers = (new Manufacturers)->all();
        $categories = (new Categories)->all();

        if ( $id ) {
            $data = $this->model->one($id);
            $data['description'] = strip_tags($data['description']);
        }

        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null)
    {
        $params = [
            'name'              => $_POST['name'],
            'manufacturer_id'   => $_POST['manufacturer_id'],
            'category_id'       => $_POST['category_id'],
            'description'       => nl2br($_POST['description']),
        ];
//        d($_FILES['image']);
//        die();
        if(isset($_FILES['image']) && 0 === $_FILES['image']['error']) {
            $soursePath         = $_FILES['image']['tmp_name'];
            $imgName            = $_FILES['image']['name'];
            $destinationPath    = __DIR__ . '/../uploads/' . $imgName;

            try {
                move_uploaded_file($soursePath, $destinationPath);
                $params += ['image' => $imgName];
            } catch(Exception $e) {
                throw new Exception($e);
            }
        }
        if ( $id ) {
            $params += ['id' => $id];
            $this->model->update($params);
        } else {
            $this->model->insert($params);
        }
        header('location: /products');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /products');
    }


}
