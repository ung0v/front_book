<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ImageModel;
use App\Models\DiscountModel;

class Book extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $db = \Config\Database::connect();

		$query = $db->query("SELECT product.id, product.name, product.image,product.quantity,
                            product.author, product.SKU, product.price,
                            product_category.name AS category, discount_percent AS discount,
                            product.created_at, product.price
                            FROM product, product_category, discount WHERE
							product.category_id = product_category.id
                            AND discount.id = product.discount_id
                            ");

		$result = $query->getResult();
        // print_r($result);
        // die();
        $data['product'] = $result;
        // $product_model = new ProductModel();
        // $data['product'] = $product_model->findAll();
		return view('/admin/book',$data);
	}

    public function add()
    
    {   
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $category_model = new CategoryModel();
        $discount_model = new DiscountModel();
        $data['message'] = NULL;
        $data['discount'] = $discount_model->where('active',1)->findAll();
        $data['category'] = $category_model->findAll();
        if($this->request->getMethod() == 'post'){
            $image_model = new ImageModel();
            $product_model = new ProductModel();
            $insert_data = [
                "name" => $this->request->getVar('product_name'),
                "description" => $this->request->getVar('product_desc'),
                "author" => $this->request->getVar('product_author'),
                "SKU" => $this->request->getVar('product_sku'),
                "category_id" => $this->request->getVar('product_category'),
                "price" => $this->request->getVar('product_price'),
                "quantity" => 0,
                'discount_id' => $this->request->getVar('product_discount'),
                'created_at' => date("Y-m-d h:i:s"),

            ];
            $checkSKU = $product_model->where('SKU', $insert_data['SKU'])
            ->first();
            if (!empty($checkSKU)){
				$data['message'] = 'SKU đã được sử dụng';
				return view('/admin/add-book', $data);
            }
            // echo $this->request->getFile('fileToUpload');
            if($this->request->getFile('fileToUpload')){
                $newName = $this->request->getFile('fileToUpload')->getRandomName();
                $this->request->getFile('fileToUpload')->move("./admin/assets/uploads/",$newName);
                $url = base_url()."/public/admin/assets/uploads/".$newName;
                $insert_data['image'] = $url;
            }
            $product_id = $product_model->insert($insert_data);
            if($imagefile = $this->request->getFiles())
                {
                    foreach($imagefile['images'] as $img)
                    {
                        
                        $newName = $img->getRandomName();
                        // $img->move(WRITEPATH.'uploads', $newName);
                        $img->move("./admin/assets/uploads/",$newName);
                        $url = base_url()."/public/admin/assets/uploads/".$newName;
                        $image_model->insert([
                            'product_id' => $product_id,
                            'image' => $url
                        ]);
                        
                    }
                }
            return redirect()->to(base_url()."/public/admin/book");
        }
        return view('/admin/add-book', $data);
    }
    public function detail()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $id = $_GET['id'];
        $image_model = new ImageModel();
        $product_model = new ProductModel();
        $category_model = new CategoryModel();
        $data['product'] = $product_model->find($id);
        $data['category'] = $category_model->find((int)$data['product']['category_id']);
        $data['image'] = $image_model->where('product_id',(int)$data['product']['id'])->findAll();
        return view('/admin/book-details',$data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $image_model = new ImageModel();
        $product_model = new ProductModel();
        $id = $_GET['id'];
        $image_model->where('product_id', $id)->delete();
        $product_model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/book");
    }
}
