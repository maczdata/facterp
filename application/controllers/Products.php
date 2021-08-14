<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $category = "";
        $warehouse = "";
        $prod_type = "";
        $this->data['prod_cat'] = $this->web->GetAll("product_category_id", "product_categories");
        $this->data['all_warehouse'] = $this->web->GetAll("warehouse_id", "warehouses");
        if ($this->input->post()) {
            $category = $this->input->post("all_prod", true);
            $warehouse = $this->input->post("all_house", true);
            $prod_type = $this->input->post("pro_type", true);

            $totalRec = count($this->web->filter_products($category, $warehouse, $prod_type));
            //pagination configuration
            $config['target'] = '#postList';
            $config['base_url'] = base_url() . 'products/ajaxPaginationData';
            $config['total_rows'] = $totalRec;
            $config['per_page'] = $this->perPage;
            $this->ajax_pagination->initialize($config);

            //get the posts data
            $this->data['products'] = $this->web->filter_products($category, $warehouse, $prod_type, " {$this->perPage}");

//            $this->data['products'] = $this->web->filter_products($category, $warehouse, $prod_type);
        } else {
            $totalRec = count((array)$this->web->getRows(array('table1' => 'products', 'table2' => 'units', 'table2_primary_key' => 'unit_id', 'search_column_id' => 'products.product_id', 'search_column1' => 'products.product_name', 'search_column2' => 'products.instock', 'search_column3' => 'units.unit_symbol')));
            //pagination configuration
            $config['target'] = '#postList';
            $config['base_url'] = base_url() . 'products/ajaxPaginationData';
            $config['total_rows'] = $totalRec;
            $config['per_page'] = $this->perPage;
            $this->ajax_pagination->initialize($config);

            //get the posts data
            $products = $this->web->getRows(array('table1' => 'products', 'table2' => 'units', 'table2_primary_key' => 'unit_id', 'search_column_id' => 'products.product_id', 'search_column1' => 'products.product_name', 'search_column2' => 'products.instock', 'search_column3' => 'units.unit_symbol', 'limit' => $this->perPage));
	
            $new_products = array();
            $i = 0;
            foreach ($products as $product):
	           $products_stores = $this->web->GetOne('store_stock_product_id', 'store_stock', $product['product_id']);
            
                $products_warehouses = $this->web->GetOne('warehouse_stock_product_id', 'warehouse_stock', $product['product_id']);
	            
                $store_quantity =0;
                $warehouse_quantity = 0;
	                foreach($products_stores as $products_store):
		                $store_quantity = $products_store->store_stock_quantity + $store_quantity;
	                endforeach;
		
		            foreach($products_warehouses as $products_warehouse):
			            $warehouse_quantity = $products_warehouse->warehouse_stock_quantity + $warehouse_quantity;
		            endforeach;
            
		            $total_quantity = $store_quantity + $warehouse_quantity;
		            
		            $product['quantity'] = $total_quantity;
              
		            $new_products[$i] = $product;
		            $i++;
                endforeach;
	        
            $this->data['products'] = $new_products;


//            $this->data['products'] = $this->web->GetAllWithInner("product_id", "products", "units", "unit_id", NULL, NULL);
        }
        $this->data['cate'] = $category;
        $this->data['war'] = $warehouse;
        $this->data['pro'] = $prod_type;
       // print_r($this->data);
       // die();
        $this->load->view("products/all", $this->data);
    }

    function ajaxPaginationData() {
        $page = $this->input->post('page');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        $search = $this->input->post('search');
        $cat = $this->input->post('cat');
        $war = $this->input->post('war');
        $pro = $this->input->post('pro');


        if (!$page) {
            $offset = 0;
        } else {
            $offset = $page;
        }

        //total rows count
        $totalRec = count($this->web->filter_products($cat, $war, $pro, NULL, $search));

        //pagination configuration
        $config['target'] = '#postList';
        $config['base_url'] = base_url() . 'Products/ajaxPaginationData';
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;
        $this->ajax_pagination->initialize($config);

        //get the posts data
        $products = $this->web->filter_products($cat, $war, $pro, " {$offset},{$this->perPage}", $search);
	    $new_products = array();
	    $i = 0;
	    foreach ($products as $product):
		    $products_stores = $this->web->GetOne('store_stock_product_id', 'store_stock', $product['product_id']);
		
		    $products_warehouses = $this->web->GetOne('warehouse_stock_product_id', 'warehouse_stock', $product['product_id']);
		
		    $store_quantity =0;
		    $warehouse_quantity = 0;
		    foreach($products_stores as $products_store):
			    $store_quantity = $products_store->store_stock_quantity + $store_quantity;
		    endforeach;
		
		    foreach($products_warehouses as $products_warehouse):
			    $warehouse_quantity = $products_warehouse->warehouse_stock_quantity + $warehouse_quantity;
		    endforeach;
		
		    $total_quantity = $store_quantity + $warehouse_quantity;
		
		    $product['quantity'] = $total_quantity;
		
		    $new_products[$i] = $product;
		    $i++;
	    endforeach;
	
	    $data['products'] = $new_products;
     
//        print_r($data['issues']);
//        die();
        //load the view
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['search'] = $search;
        $data['cat'] = $cat;
        $data['war'] = $war;
        $data['pro'] = $pro;
        $data['count'] = $offset + 1;

        
        $this->load->view('Products/ajax-pagination-data', $data, false);
    }

    public function search() {
        $search_text = $this->input->post('id');
        $totalRec = count($this->web->filter_products(NULL, NULL, NULL, NULL, $search_text));
//        $totalRec = 222;
        //pagination configuration
        $config['target'] = '#postList';
        $config['base_url'] = base_url() . 'Products/ajaxPaginationData';
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;
        $this->ajax_pagination->initialize($config);

        //get the posts data
        $products = $this->web->filter_products(NULL, NULL, NULL, " 0,{$this->perPage}", $search_text);
	
	    $new_products = array();
	    $i = 0;
	    foreach ($products as $product):
		    $products_stores = $this->web->GetOne('store_stock_product_id', 'store_stock', $product['product_id']);
		
		    $products_warehouses = $this->web->GetOne('warehouse_stock_product_id', 'warehouse_stock', $product['product_id']);
		
		    $store_quantity =0;
		    $warehouse_quantity = 0;
		    foreach($products_stores as $products_store):
			    $store_quantity = $products_store->store_stock_quantity + $store_quantity;
		    endforeach;
		
		    foreach($products_warehouses as $products_warehouse):
			    $warehouse_quantity = $products_warehouse->warehouse_stock_quantity + $warehouse_quantity;
		    endforeach;
		
		    $total_quantity = $store_quantity + $warehouse_quantity;
		
		    $product['quantity'] = $total_quantity;
		
		    $new_products[$i] = $product;
		    $i++;
	    endforeach;
	
	    $this->data['products'] = $new_products;
	
	    //        print_r($this->data['products']);
//        die();
        $this->data['search'] = $search_text;

        $this->load->view("Products/all", $this->data);
    }

    function view() {
        $product_id = $this->uri->segment(3);
        $this->data['product'] = $this->web->GetOneWithInner("product_id", "products", "units", "unit_id", NULL, NULL, $product_id);
        $this->data['warehouses'] = $this->web->GetAll("warehouse_id", "warehouses");
        $this->data['units'] = $this->web->GetAll("unit_id", "units");
        $this->data['product_categories'] = $this->web->GetAll("product_category_id", "product_categories");
        //print_r($this->data['product']);
//        die();
        $this->load->view("products/edit", $this->data);
    }
	
	
	function view_product($product_id) {
		$product_id = $this->uri->segment(3);
		$products_stores = $this->web->GetOne('store_stock_product_id', 'store_stock', $product_id);
		
		
		$products_warehouses = $this->web->GetOne('warehouse_stock_product_id', 'warehouse_stock', $product_id);
		
		$i = 0;
		$j = 0;
		
		$new_products_stores = array();
		$new_products_warehouses = array();
		
		foreach($products_stores as $products_store):
			$store = $this->web->GetOne('store_id', 'stores', $products_store->store_stock_store_id)[0];
			$products_store->store_name = $store->store_name;
			$new_products_stores[$i] = $products_store;
			$i++;
		endforeach;
		
		foreach($products_warehouses as $products_warehouse):
			$warehouse = $this->web->GetOne('warehouse_id', 'warehouses', $products_warehouse->warehouse_stock_warehouse_id)[0];
			$products_warehouse->warehouse_name = $warehouse->warehouse_name;
			$new_products_warehouses[$j] = $products_warehouse;
			$j++;
		endforeach;
		$this->data['product'] = $this->web->GetOne('product_id', 'products', $product_id)[0];
		$this->data['new_products_warehouses'] = $new_products_warehouses;
		$this->data['new_products_stores'] = $new_products_stores;
		$this->load->view("products/view", $this->data);
	}

    function edit() {
        $data = array();
        $data['product_name'] = $this->db->escape_str($this->input->post("name", true));
        //$data['warehouse_id'] = $this->db->escape_str($this->input->post("warehouse", true));
        $data['type'] = $this->db->escape_str($this->input->post("product_type", true));
        $data['unit_id'] = $this->db->escape_str($this->input->post("product_unit", true));
        $data['purchase_unit_id'] = $this->db->escape_str($this->input->post("purchase_unit", true));
        $data['sale_unit_id'] = $this->db->escape_str($this->input->post("sale_unit", true));
        $data['product_category_id'] = $this->db->escape_str($this->input->post("product_category", true));
        //$data['instock'] = $this->input->post("instock", true);
        $data['product_rate'] = $this->input->post("product_rate", true);
        $data['sale_price'] = $this->input->post('sale_price', true);
        $data['description'] = htmlentities($this->input->post("desc", true));
	    $data['purchase_unit_price'] = $this->db->escape_str($this->input->post("purchase_unit_price", true));
        $id = $this->input->post("product_id", true);
        $this->web->Update("product_id", "products", $id, $data);
        redirect("products", "refresh");
    }
    
    function get_product($product_id){
	    
		    $product_id = $this->uri->segment(3);
	        $data = $this->web->GetOne('product_id', 'products', $product_id)[0];
	        echo json_encode($data);
    }

    function delete() {
        $product_id = $this->input->post("id", true);
        if ($this->web->Delete("product_id", "products", $product_id)) {
            echo "done";
        }
    }

    function add() {
        if ($this->input->post()) {
            $data = array();
            $data['product_name'] = $this->db->escape_str($this->input->post("name", true));
            $warehouse_id = $this->db->escape_str($this->input->post("warehouse", true));
	        $store_id = $this->db->escape_str($this->input->post("store", true));
            $data['type'] = $this->db->escape_str($this->input->post("product_type", true));
            $data['unit_id'] = $this->db->escape_str($this->input->post("product_unit", true));
            $data['purchase_unit_id'] = $this->db->escape_str($this->input->post("purchase_unit", true));
            $data['sale_unit_id'] = $this->db->escape_str($this->input->post("sale_unit", true));
            $data['product_category_id'] = $this->db->escape_str($this->input->post("product_category", true));
            $data['sale_price'] = $this->db->escape_str($this->input->post("sale_price", true));
	        $data['purchase_unit_price'] = $this->db->escape_str($this->input->post("purchase_unit_price", true));
            //$data['instock'] = $this->input->post("instock", true);
            $quantity = $this->input->post("instock", true);
            $data['product_rate'] = $this->input->post("product_rate", true);
            $data['description'] = htmlentities($this->input->post("desc", true));
            
            $product_id = $this->web->AddReturnId("products", $data);
	
	        $warehouses = $this->web->GetAll("warehouse_id", "warehouses");
	        
	        foreach ($warehouses as $warehouse){
	        	if($warehouse_id == $warehouse->warehouse_id){
	        		$data = array(
	        			'warehouse_stock_warehouse_id' => $warehouse_id,
				        'warehouse_stock_product_id' => $product_id,
				        'warehouse_stock_quantity' => $quantity
			        );
	        		
	        		$ledger = array(
	        			'product_id' =>$product_id,
				        'debit_qty' => 0.000,
				        'credit_qty' => $quantity,
				        'description' => 'Initial Stocking',
				        'type' => 'WAREHOUSE',
				        'warehouse_id' => $warehouse_id,
				        'user_id' => $this->session->userdata('user_id'),
			        );
	        		
	        		$this->web->Add('product_ledger', $ledger);
	        		
		        }else{
			        $data = array(
				        'warehouse_stock_warehouse_id' => $warehouse->warehouse_id,
				        'warehouse_stock_product_id' => $product_id,
				        'warehouse_stock_quantity' => 0
			        );
		        }
	        	
	        	$this->web->Add('warehouse_stock', $data);
	        	
	        }
	
	        $stores = $this->web->GetAll("store_id", "stores");
	        foreach ($stores as $store){
		        if($store_id == $store->store_id){
			        $data = array(
				        'store_stock_store_id' => $store_id,
				        'store_stock_product_id' => $product_id,
				        'store_stock_quantity' => $quantity
			        );
			
			        $ledger = array(
				        'product_id' =>$product_id,
				        'debit_qty' => 0.000,
				        'credit_qty' => $quantity,
				        'description' => 'Initial Stocking',
				        'type' => 'STORE',
				        'store_id' => $store_id,
				        'user_id' => $this->session->userdata('user_id'),
			        );
			
			        $this->web->Add('product_ledger', $ledger);
			
		        }else{
			        $data = array(
				        'store_stock_store_id' => $store->store_id,
				        'store_stock_product_id' => $product_id,
				        'store_stock_quantity' => 0
			        );
		        }
		
		        $this->web->Add('store_stock', $data);
		
	        }
            
            
            
         redirect("products", "refresh");
         
        } else {
            $this->data['warehouses'] = $this->web->GetAll("warehouse_id", "warehouses");
	        $this->data['stores'] = $this->web->GetAll("store_id", "stores");
            $this->data['units'] = $this->web->GetAll("unit_id", "units");
            $this->data['product_categories'] = $this->web->GetAll("product_category_id", "product_categories");
//            print_r($this->data['warehouses']);
//            die();
            $this->load->view("products/add", $this->data);
        }
    }

}
