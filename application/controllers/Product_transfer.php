<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Product_transfer extends MY_Controller
	{
		public function __construct() {
			parent::__construct();
		}
		
		
		public function index(){
			$this->data['warehouse_products'] = $this->web->GetProductsWarehouse();
			$this->data['store_products'] = $this->web->GetProductsStore();
			$this->data['stores'] = $this->web->GetAll("store_id", "stores");
			$this->data['warehouses'] = $this->web->GetAll("warehouse_id", "warehouses");
			
//			print_r($this->web->GetProductsWarehouse());
//
//			echo "<br>";
//
//			print_r($this->web->GetProductsStore());
		
			$this->load->view("product_transfer/new", $this->data);
			
		
			
		}
		
		public function add(){
			
			$transfer_type = $_POST['transfer_type'];
		
			if($transfer_type == 1): //store to warehouse
				$s_store_id = $_POST['s_store'];
				$r_warehouse = $_POST['r_warehouse'];
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['credit_qty'] = 0;
				$data['description'] = "Product Transfer";
				$data['store_id'] = $_POST['s_store'];
				$data['type']='STORE';
				$this->web->Add("product_ledger", $data);
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = 0;
				$data['credit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['description'] = "Product Transfer";
				$data['warehouse_id'] = $_POST['r_warehouse'];
				$data['type']='WAREHOUSE';
				$this->web->Add("product_ledger", $data);
				
				$sending_stores = $this->web->GetOne('store_stock_store_id', 'store_stock', $s_store_id);
				foreach ($sending_stores as $store):
					if($store->store_stock_product_id == $data['product_id']):
						$old_quantity = $store->store_stock_quantity;
						
						endif;
					
					endforeach;
				
				
				
				$update_debitstock = "Update store_stock set store_stock_quantity={$data['credit_qty']} WHERE product_id ={$data['product_id']} AND WHERE store_stock_store_id ={$s_store_id}";
				
				
				
				
				endif;
			
			if($transfer_type == 2): //  warehouse to store
			
			
			endif;
			
			if($transfer_type == 3): //warehouse to warehouse
			
			
			endif;
			
			if($transfer_type == 4): //store to store
			
			
			endif;
			
			//print_r($_POST);
		}
	}
