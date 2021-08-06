<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	class Contacts extends MY_Controller
	{
		public function __construct() {
			parent::__construct();
		}
		
		public function customers(){
			
		
			$this->data['contacts'] = $this->web->GetAll('contact_id', 'contacts', ' where contacts.contact_customer = 1');
			$this->load->view("contacts/customers", $this->data);
//			print_r($this->data['customers']);
		
		}
		
		public function new_customer () {
		
			if($_POST):
				unset($_POST['type']);
				$_POST['contact_user_id'] = $this->session->userdata('user_id');
				$this->web->Add('contacts', $_POST);
				redirect("contacts/customers", "refresh");
			
			else:
			$this->load->view("contacts/new_customer", $this->data);
			endif;
		}
		
		public function edit_customer(){
			if($_POST):
				unset($_POST['type']);
				$id = $_POST['contact_id'];
				$this->web->Update("contact_id", "contacts", $id, $_POST);
				redirect("contacts/customers", "refresh");
			else:
				$contact_id = $this->uri->segment(3);
				$customer = $this->web->GetOne('contact_id', 'contacts', $contact_id);
				$this->data['contact'] = $customer[0];
				$this->load->view("contacts/edit_customer", $this->data);
			endif;
		}
		
		public function vendors(){
			$this->data['contacts'] = $this->web->GetAll('contact_id', 'contacts', ' where contacts.contact_supply = 1');
			$this->load->view("contacts/vendors", $this->data);
		}
		
		public function new_vendor () {
			
			if($_POST):
				unset($_POST['type']);
				$_POST['contact_user_id'] = $this->session->userdata('user_id');
				$this->web->Add('contacts', $_POST);
				redirect("contacts/vendors", "refresh");
			
			else:
				$this->load->view("contacts/new_vendor", $this->data);
			endif;
		}
		
		public function edit_vendor(){
			if($_POST):
				unset($_POST['type']);
				$id = $_POST['contact_id'];
				$this->web->Update("contact_id", "contacts", $id, $_POST);
				redirect("contacts/vendors", "refresh");
			else:
				$contact_id = $this->uri->segment(3);
				$vendor = $this->web->GetOne('contact_id', 'contacts', $contact_id);
				$this->data['contact'] = $vendor[0];
				$this->load->view("contacts/edit_vendor", $this->data);
			endif;
		}
		
		public function all_invoices(){
			$user_group_id = $this->session->userdata('user_group_id');
			$store_id = json_decode($this->session->userdata('user_store_id'));
			$warehouse_id = json_decode($this->session->userdata('user_warehouse_id'));
			
			$contact_id = $this->uri->segment(3);
			$sales = $this->web->GetAllSalesContact($contact_id);
			$new_sales_array = array();
			$i = 0;
			$total_balance = 0;
			foreach ($sales as $sale):
				$total_paid = 0;
				
				
				if($sale['payment_status'] == 'Confirmed'):
					$sale['balance'] =0;
					endif;
				
				if($sale['payment_status'] == 'Pending'):
				$receipts = $this->web->GetOne('r_invoice_id', 'receivables', $sale['invoice_id']);
					if(empty($receipts)):
						$total_paid = 0;
					else:
						foreach ($receipts as $receipt):
							$total_paid = $total_paid+ $receipt->r_amount;
						endforeach;
					
					endif;
					
					$sale['balance'] = $sale['invoice_total'] - ($total_paid + $sale['total_discount'] );
				endif;
				
				if(@in_array($sale['invoice_store_id'], $store_id)):
				
					$store = $this->web->GetOne('store_id', 'stores', $sale['invoice_store_id']);
			
					$sale['store_name'] = $store[0]->store_name;
					$sale['warehouse_name'] = '';
					$new_sales_array[$i] = $sale;
					$i++;
				endif;
				
				if(@in_array($sale['invoice_warehouse_id'], $warehouse_id)):
					
					$store = $this->web->GetOne('warehouse_id', 'warehouses', $sale['invoice_warehouse_id']);
					
					$sale['store_name'] = '';
					$sale['warehouse_name'] = $store[0]->warehouse_name;
					$new_sales_array[$i] = $sale;
					$i++;
				endif;
				$total_balance = $total_balance + $sale['balance'];
			endforeach;
			$this->data['sales'] = $new_sales_array;
			$this->data['total_balance'] = $total_balance;
			
			$this->load->view('contacts/all_invoices', $this->data);
			//print_r($new_sales_array);
			
		}
		
		public function receive_payment(){
			
			$invoice_id = $this->uri->segment(3);
			if($_POST):
				$data['r_user_id'] = $this->session->userdata('user_id');
				$data['r_amount'] = $_POST['r_amount'];
				$data['r_invoice_id'] = $invoice_id;
				$data['r_date'] = $_POST['r_date'];
				
				$this->web->Add('receivables', $data);
				$total_paid =0;
				
				$query = "SELECT invoice.*,accounts.*, contacts.*, invoice.description as invoice_desc, accounts.description as account_desc FROM invoice LEFT JOIN accounts ON invoice.account_id = accounts.account_id LEFT JOIN contacts ON invoice.invoice_contact_id = contacts.contact_id WHERE invoice.invoice_id = '" . $invoice_id . "' ORDER BY invoice.invoice_id ASC";
				
				$query = $this->db->query($query);
				$invoice = $query->result();
				
				$receipts = $this->web->GetOne('r_invoice_id', 'receivables', $invoice_id);
				foreach ($receipts as $receipt):
					$total_paid = $total_paid+ $receipt->r_amount;
				endforeach;
				
				if($total_paid == ($invoice[0]->invoice_total + $invoice[0]->total_discount) ):
					$invoice_data = array(
						'payment_status' => 'Confirmed'
					);
					
					$this->web->Update("invoice_id", "invoice", $invoice_id, $invoice_data);
					endif;
				
				$url = 'contacts/receive_payment/'.$invoice_id;
				
				redirect($url, "refresh");
			
			else:
				$receivables = $this->web->GetOne('r_invoice_id', 'receivables', $invoice_id);
				
				
				$query = "SELECT invoice.*,accounts.*, contacts.*, invoice.description as invoice_desc, accounts.description as account_desc FROM invoice LEFT JOIN accounts ON invoice.account_id = accounts.account_id LEFT JOIN contacts ON invoice.invoice_contact_id = contacts.contact_id WHERE invoice.invoice_id = '" . $invoice_id . "' ORDER BY invoice.invoice_id ASC";
				
				$query = $this->db->query($query);
				$invoice = $query->result();
				
				if($invoice[0]->invoice_store_id):
					$store = $this->web->GetOne('store_id', 'stores', $invoice[0]->invoice_store_id);
					$invoice[0]->target_name = $store[0]->store_name;
				endif;
				
				if($invoice[0]->invoice_warehouse_id):
					$store = $this->web->GetOne('warehouse_id', 'warehouses', $invoice[0]->invoice_warehouse_id);
					$invoice[0]->target_name = $store[0]->warehouse_name;
				endif;
				
				
				$this->data['invoice'] = $invoice;
				$this->data['receipts']= $receivables;
				$this->data['invoice_items'] = $this->web->GetInvoiceItems($invoice_id);
				$this->load->view("contacts/view_invoice", $this->data);
				
			endif;
			
			
			
		}
	}
