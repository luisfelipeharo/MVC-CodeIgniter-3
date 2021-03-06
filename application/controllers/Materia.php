<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Materia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Materias_model');
    } 

    /*
     * Listing of materias
     */
    function index()
    {
        $data['materias'] = $this->Materias_model->get_all_materias();
        $data['_view'] = 'materias/index';

        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new materia
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'idProfesor' => $this->input->post('idProfesor'),
				'nombreMateria' => $this->input->post('nombreMateria'),
				'diaMateria' => $this->input->post('diaMateria'),
				'horaInicio' => $this->input->post('horaInicio'),
				'horaFin' => $this->input->post('horaFin'),
            );
            
            $materia_id = $this->Materias_model->add_materia($params);
            redirect('materia/index');
        }
        else
        {
			$this->load->model('Profesores_model');
			$data['all_profesores'] = $this->Profesores_model->get_all_profesores();
            
            $data['_view'] = 'materias/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a materia
     */
    function edit($idMateria)
    {   
        // check if the materia exists before trying to edit it
        $data['materia'] = $this->Materias_model->get_materia($idMateria);
        
        if(isset($data['materia']['idMateria']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'idProfesor' => $this->input->post('idProfesor'),
					'nombreMateria' => $this->input->post('nombreMateria'),
					'diaMateria' => $this->input->post('diaMateria'),
					'horaInicio' => $this->input->post('horaInicio'),
					'horaFin' => $this->input->post('horaFin'),
                );

                $this->Materias_model->update_materia($idMateria,$params);            
                redirect('materia/index');
            }
            else
            {
				$this->load->model('Profesores_model');
				$data['all_profesores'] = $this->Profesores_model->get_all_profesores();

                $data['_view'] = 'materias/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The materia you are trying to edit does not exist.');
    } 

    /*
     * Deleting materia
     */
    function remove($idMateria)
    {
        $materia = $this->Materias_model->get_materia($idMateria);

        // check if the materia exists before trying to delete it
        if(isset($materia['idMateria']))
        {
            $this->Materias_model->delete_materia($idMateria);
            redirect('materia/index');
        }
        else
            show_error('The materia you are trying to delete does not exist.');
    }
    
}
