<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stores extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['stores'] = $this->web->GetAll("store_id", "stores");
        // print_r($this->data['stores']); die();
        $this->load->view("stores/all", $this->data);
    }

    function view() {
        $store_id = $this->uri->segment(3);
        $this->data['store'] = $this->web->GetOne("store_id", "stores", $store_id);
        $this->load->view("stores/edit", $this->data);
    }

    function edit() {
        $data = array();
        $data['store_name'] = $this->db->escape_str($this->input->post("name", true));
        $data['store_address'] = $this->db->escape_str($this->input->post("address", true));
        $id = $this->input->post("store_id", true);
        $this->web->Update("store_id", "stores", $id, $data);
        redirect("stores", "refresh");
    }

    function delete() {
        $store_id = $this->input->post("id", true);
        if ($this->web->Delete("store_id", "stores", $store_id)) {
            echo "done";
        }
    }

    function add() {
        if ($this->input->post()) {
            $data = array();
            $data['store_name'] = $this->db->escape_str($this->input->post("name", true));
            $data['store_address'] = $this->db->escape_str($this->input->post("address", true));
            $store_id = $this->web->Add("stores", $data);
	
	        $products = $this->web->GetAll("product_id", "products");
	        foreach ($products as $product) {
		        $data = array(
			        'store_stock_store_id' => $store_id,
			        'store_stock_product_id' => $product->product_id,
			        'store_stock_quantity' => 0
		        );
		
		        $this->web->Add('store_stock', $data);
	        }
	
	       
                redirect("stores", "refresh");
           
        } else {
            $this->load->view("stores/add", $this->data);
        }
    }

}
