<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Profesores extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profesores_model');
    } 

    /*
     * Listing of profesores
     */
    function index()
    {
        $data['profesores'] = $this->Profesores_model->get_all_profesores();
        
        $data['_view'] = 'profesores/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new profesor
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombreProfesor' => $this->input->post('nombreProfesor'),
            );
            
            $profesor_id = $this->Profesores_model->add_profesor($params);
            redirect('profesores/index');
        }
        else
        {            
            $data['_view'] = 'profesores/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a profesor
     */
    function edit($idProfesor)
    {   
        // check if the profesor exists before trying to edit it
        $data['profesor'] = $this->Profesores_model->get_profesor($idProfesor);
        
        if(isset($data['profesor']['idProfesor']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombreProfesor' => $this->input->post('nombreProfesor'),
                );

                $this->Profesores_model->update_profesor($idProfesor,$params);            
                redirect('profesores/index');
            }
            else
            {
                $data['_view'] = 'profesores/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The profesor you are trying to edit does not exist.');
    } 

    /*
     * Deleting profesor
     */
    function remove($idProfesor)
    {
        $profesor = $this->Profesores_model->get_profesor($idProfesor);

        // check if the profesor exists before trying to delete it
        if(isset($profesor['idProfesor']))
        {
            $this->Profesores_model->delete_profesor($idProfesor);
            redirect('profesores/index');
        }
        else
            show_error('The profesor you are trying to delete does not exist.');
    }
    
}