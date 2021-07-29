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

			$this->load->view("product_transfer/new", $this->data);
			
		
			
		}
		
		public function add(){
			
			$transfer_type = $_POST['transfer_type'];
		
			if($transfer_type == 1): //store to warehouse
				$s_store_id = $_POST['s_store'];
				$r_warehouse_id = $_POST['r_warehouse'];
				$qty = $this->db->escape_str($this->input->post("qty", true));
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['credit_qty'] = 0;
				$data['description'] = "Product Transfer";
				$data['store_id'] = $_POST['s_store'];
				$data['type']='STORE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = 0;
				$data['credit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['description'] = "Product Transfer";
				$data['warehouse_id'] = $_POST['r_warehouse'];
				$data['type']='WAREHOUSE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$sending_stores = $this->web->GetOne('store_stock_store_id', 'store_stock', $s_store_id);
				foreach ($sending_stores as $store):
					if($store->store_stock_product_id == $data['product_id']):
						$old_quantity = $store->store_stock_quantity;
						
						endif;
					
					endforeach;
					
				$new_quantity = $old_quantity - $qty;
				$update_debitstock = "Update store_stock set store_stock_quantity={$new_quantity} WHERE store_stock_product_id ={$data['product_id']} AND store_stock_store_id ={$s_store_id}";
				$this->db->query($update_debitstock);
				
				
				$r_warehouses = $this->web->GetOne('warehouse_stock_warehouse_id', 'warehouse_stock', $r_warehouse_id);
				foreach ($r_warehouses as $warehouse):
					if($warehouse->warehouse_stock_product_id == $data['product_id']):
						$old_quantity = $warehouse->warehouse_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity + $qty;
				$update_debitstock = "Update warehouse_stock set warehouse_stock_quantity={$new_quantity} WHERE warehouse_stock_product_id ={$data['product_id']} AND warehouse_stock_warehouse_id ={$r_warehouse_id}";
				$this->db->query($update_debitstock);
				
				endif;
			
			if($transfer_type == 2): //  warehouse to store
				
				$s_warehouse_id = $_POST['s_warehouse'];
				$r_store_id = $_POST['r_store'];
				$qty = $this->db->escape_str($this->input->post("qty", true));
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['credit_qty'] = 0;
				$data['description'] = "Product Transfer";
				$data['warehouse_id'] = $_POST['s_warehouse'];
				$data['type']='WAREHOUSE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = 0;
				$data['credit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['description'] = "Product Transfer";
				$data['store_id'] = $_POST['r_store'];
				$data['type']='STORE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$s_warehouses = $this->web->GetOne('warehouse_stock_warehouse_id', 'warehouse_stock', $s_warehouse_id);
				foreach ($s_warehouses as $warehouse):
					if($warehouse->warehouse_stock_product_id == $data['product_id']):
						$old_quantity = $warehouse->warehouse_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity - $qty;
				$update_debitstock = "Update warehouse_stock set warehouse_stock_quantity={$new_quantity} WHERE warehouse_stock_product_id ={$data['product_id']} AND warehouse_stock_warehouse_id ={$s_warehouse_id}";
				$this->db->query($update_debitstock);
				
				$r_stores = $this->web->GetOne('store_stock_store_id', 'store_stock', $r_store_id);
				foreach ($r_stores as $store):
					if($store->store_stock_product_id == $data['product_id']):
						$old_quantity = $store->store_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity + $qty;
				$update_debitstock = "Update store_stock set store_stock_quantity={$new_quantity} WHERE store_stock_product_id ={$data['product_id']} AND store_stock_store_id ={$r_store_id}";
				$this->db->query($update_debitstock);
				
				
				
			
			endif;
			
			if($transfer_type == 3): //warehouse to warehouse
				$s_warehouse_id = $_POST['s_warehouse'];
				$r_warehouse_id = $_POST['r_warehouse'];
				
				$qty = $this->db->escape_str($this->input->post("qty", true));
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['credit_qty'] = 0;
				$data['description'] = "Product Transfer";
				$data['store_id'] = $_POST['s_warehouse'];
				$data['type']='WAREHOUSE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = 0;
				$data['credit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['description'] = "Product Transfer";
				$data['warehouse_id'] = $_POST['r_warehouse'];
				$data['type']='WAREHOUSE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$s_warehouses = $this->web->GetOne('warehouse_stock_warehouse_id', 'warehouse_stock', $s_warehouse_id);
				foreach ($s_warehouses as $warehouse):
					if($warehouse->warehouse_stock_product_id == $data['product_id']):
						$old_quantity = $warehouse->warehouse_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity - $qty;
				$update_debitstock = "Update warehouse_stock set warehouse_stock_quantity={$new_quantity} WHERE warehouse_stock_product_id ={$data['product_id']} AND  warehouse_stock_warehouse_id ={$s_warehouse_id}";
				$this->db->query($update_debitstock);
				
				
				$r_warehouses = $this->web->GetOne('warehouse_stock_warehouse_id', 'warehouse_stock', $r_warehouse_id);
				foreach ($r_warehouses as $warehouse):
					if($warehouse->warehouse_stock_product_id == $data['product_id']):
						$old_quantity = $warehouse->warehouse_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity + $qty;
				$update_debitstock = "Update warehouse_stock set warehouse_stock_quantity={$new_quantity} WHERE warehouse_stock_product_id ={$data['product_id']} AND warehouse_stock_warehouse_id ={$r_warehouse_id}";
				$this->db->query($update_debitstock);
			
			endif;
			
			if($transfer_type == 4): //store to store
				
				$s_store_id = $_POST['s_store'];
				$r_store_id = $_POST['r_store'];
				$qty = $this->db->escape_str($this->input->post("qty", true));
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['credit_qty'] = 0;
				$data['description'] = "Product Transfer";
				$data['store_id'] = $_POST['s_store'];
				$data['type']='STORE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$data = array();
				$data['date_ledger'] = date("Y-m-d", strtotime(str_replace("-", "/", $this->input->post("date_ledger", true)))) . " " . date("H:i:s");
				$data['product_id'] = $this->db->escape_str($this->input->post("product_id", true));
				$data['debit_qty'] = 0;
				$data['credit_qty'] = $this->db->escape_str($this->input->post("qty", true));
				$data['description'] = "Product Transfer";
				$data['warehouse_id'] = $_POST['r_store'];
				$data['type']='STORE';
				$data['user_id'] = $this->session->userdata('user_id');
				$this->web->Add("product_ledger", $data);
				
				$sending_stores = $this->web->GetOne('store_stock_store_id', 'store_stock', $s_store_id);
				foreach ($sending_stores as $store):
					if($store->store_stock_product_id == $data['product_id']):
						$old_quantity = $store->store_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity - $qty;
				$update_debitstock = "Update store_stock set store_stock_quantity={$new_quantity} WHERE store_stock_product_id ={$data['product_id']} AND store_stock_store_id ={$s_store_id}";
				$this->db->query($update_debitstock);
				
				
				$r_stores = $this->web->GetOne('store_stock_store_id', 'store_stock', $r_store_id);
				foreach ($r_stores as $store):
					if($store->store_stock_product_id == $data['product_id']):
						$old_quantity = $store->store_stock_quantity;
					
					endif;
				
				endforeach;
				
				$new_quantity = $old_quantity + $qty;
				$update_debitstock = "Update store_stock set store_stock_quantity={$new_quantity} WHERE store_stock_product_id ={$data['product_id']} AND store_stock_store_id ={$r_store_id}";
				$this->db->query($update_debitstock);
				
				
			
			endif;
			
			redirect("product_transfer", "refresh");
		}
	}
