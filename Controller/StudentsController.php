<?php

class StudentsController extends AppController {
    public $helpers = array('html','Form');
    public $components = array('Session');
    public function index() {
        // $this->set('estudiantes',$this->Student->findById(1));
        $this->set('estudiantes',$this->Student->find('all'));
    }
    
    
    public function agregar() {
        
        if($this->request->is('post')) {
           if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash('Estudiante guardado');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    public function editar($id) {
        $this->Student->id=$id;
        if($this->request->is('get')) {
            $this->request->data = $this->Student->read();
        }else

        if($this->Student->save($this->request->data)) {
            $nombre = $this->request->data['Student']['nombre'];
            $this->Session->setFlash('Estudiante ' . $nombre.' Editado');
            $this->redirect(array('action'=>'index'));
        }
      
        // $this->Student->save($this->request->data); con el post
    
    }

    public function eliminar($id) {
        if ($this->request->is('get')) {
            echo 'no es por get';
        }else if ($this->Student->delete($id)) {
            $this->Session->setFlash('Estudiante borrado');
        $this->redirect (array('action'=>'index'));	
        }	   
    }




}