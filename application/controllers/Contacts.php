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
	}
