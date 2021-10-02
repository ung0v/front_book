<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\OrderItemModel;
use App\Models\OrderModel;
use App\Models\ShippingNoteModel;
use App\Models\ShippingModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Order extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $order_model = new OrderModel();
        $shipping_note_model = new ShippingNoteModel();
        $product_model = new ProductModel();
        $user_model = new UserModel();
        $data['order'] = $order_model->findAll();
        $data['shipping_note'] = $shipping_note_model->findAll();
        $data['product'] = $product_model->findAll();
        $data['user'] = $user_model->findAll();
		return view('/admin/order', $data);
	}
    public function add(){
        
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $order_item_model = new OrderItemModel();
        $order_model = new OrderModel();
        $shipping_model = new ShippingModel();
        $shipping_note_model = new ShippingNoteModel();
        $product_model = new ProductModel();
        $user_model = new UserModel();
        $data['user'] = $user_model->findAll();
        $data['shipping'] = $shipping_model->findAll();
        $data['product'] = $product_model->findAll();
        if($this->request->getMethod() == 'post'){
            $data_order = [
                "user_id" => $this->request->getVar('user_id'),
                "payment_status" => $this->request->getVar('payment_status'),
                'created_at' => date("Y-m-d h:i:s"),
            ];
            $order_id = $order_model->insert($data_order);
            $product_array = $this->request->getVar('name');
            $product_quantity = $this->request->getVar('value');
            $total = 0;
            for ($i = 0; $i < count($product_array); $i++) {
                $price = $product_model->find($product_array[$i])['price'];
                $total = $total + (int)$price * (int)$product_quantity[$i];
                $data_order_item = [
                    'order_id' => $order_id,
                    'product_id' => (int)$product_array[$i],
                    'quantity' => (int)$product_quantity[$i],
                    'created_at' => date("Y-m-d h:i:s"),
                ];
                $order_item_model->insert($data_order_item);
            }

            $order_model->update($order_id,['total'=> $total]);
            $data_shipping = [
                "order_id" => $order_id,
                "shipping_id" => $this->request->getVar('shipping_id'),
                'delivery_date' => date('Y-m-d', strtotime($this->request->getVar('delivery_date'))),
                'delivery_cost' => $this->request->getVar('delivery_cost'),
                'created_at' => date("Y-m-d h:i:s"),
            ];
            $shipping_note_model->insert($data_shipping);
            return redirect()->to(base_url()."/public/admin/order");
        }
        return view('/admin/add-order',$data);
    }
    public function detail()
    {
        return view('/admin/order-details');
    }
    public function edit(){
        $id = $_GET['id'];
        $order_model = new OrderModel();
        $order_by_id = $order_model->find($id);
        if ($order_by_id['payment_status'] == 0){
            $order_model->update($id, ['payment_status' => 1]);
        } elseif($order_by_id['payment_status'] == 1) {
            $order_model->update($id, ['payment_status' => 0]);
        }
        return redirect()->to(base_url()."/public/admin/order");

    }
    public function delete(){
        $id = $_GET['id'];
        $order_item_model = new OrderItemModel();
        $order_model = new OrderModel();
        $shipping_note_model = new ShippingNoteModel();
        $order_item_model->where('order_id', $id)->delete();
        $shipping_note_model->where('order_id', $id)->delete();
        $order_model->where('id', $id)->delete();
        return redirect()->to(base_url()."/public/admin/order");

    }
}
