<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->db->db_select(DATABASE_NAME);
        $this->load->model('basemodel');
    }

    public function index()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/home');
        $this->load->view('admin/layout/footer');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function addPortfolio()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/add_portfolio');
        $this->load->view('admin/layout/footer');
    }

    public function editPortfolio($id = null)
    {
        if ($id == null) {
            $this->load->view('404');
        } else {
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/navbar');
            $this->load->view('admin/edit_portfolio');
            $this->load->view('admin/layout/footer');
        }
    }

    public function viewPortfolio()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/view_portfolio');
        $this->load->view('admin/layout/footer');
    }

    public function addCategory()
    {
        if ($this->input->method() == "post") {
            $value = $this->input->post('category');
            if ($value != null) {
                $data = array(
                    "name" => $value
                );
                $category = new Basemodel;
                $category->tablename = "category";
                $row = $category->getSingleData($data);

                if ($row != null) {
                    $this->session->set_flashdata('msg', $value . ' already exist');
                    redirect('adminpanel/addCategory');
                }

                $id = $category->insertData($data);
                $this->session->set_flashdata('msg', 'Category Added');
                redirect('adminpanel/addCategory');
            }
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/add_category');
        $this->load->view('admin/layout/footer');
    }

    public function editCategory($id = null)
    {
        if ($id == null) {
            $this->load->view('404');
        } else {
            $condition = array(
                'id' => $id
            );
            $editcategory = new Basemodel;
            $editcategory->tablename = "category";
            if ($this->input->method() == "post") {
                $value = $this->input->post('category');
                if ($value != null) {
                    $data = array(
                        "name" => $value
                    );
                    $category = new Basemodel;
                    $category->tablename = "category";
                    $row = $category->getSingleData($data);

                    if ($row != null) {
                        $this->session->set_flashdata('msg', $value . ' already exist');
                        redirect('adminpanel/addCategory');
                    }

                    $updateCategory = $category->updateData($condition, $data);
                    $this->session->set_flashdata('msg', 'Category Update');
                    redirect('adminpanel/viewCategory');
                }
            }
            $data['category'] = $editcategory->getSingleData($condition);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/navbar');
            $this->load->view('admin/edit_category');
            $this->load->view('admin/layout/footer');
        }
    }

    public function viewCategory()
    {
        $category = new Basemodel;
        $category->tablename = "category";
        $data['category'] = $category->getMultipleData();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/view_category');
        $this->load->view('admin/layout/footer');
    }
    public function deleteCategory($id=null)
    {
        if ($id == null) {
            $this->load->view('404');
        } else {
            if ($id != null) {
                $data = array(
                    "id" => $id
                );
                $category = new Basemodel;
                $category->tablename = "category";
                $row = $category->deleteData($data);
                if ($row == TRUE) {
                    $this->session->set_flashdata('msg', 'deleted successfully');
                    redirect('adminpanel/viewCategory/'.$id);
                }
            }
        }
    }
}
