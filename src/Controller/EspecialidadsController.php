<?php
namespace App\Controller;

use App\Controller\AppController;

/**
     * Especialidads Controller
     *
     * @property \App\Model\Table\EspecialidadsTable $Especialidads
     *
     * @method \App\Model\Entity\Especialidad[] paginate($object = null, array $settings = [])
 */
class EspecialidadsController extends AppController
{
    public $components=array('Paginator');
    public $paginate = array( 
            'order' =>['Especialidads.id'=>'asc']
    ); 
    public function initialize()
    {
       parent::initialize();
       $this->loadComponent('Paginator');
       //$this->loadHelper('Paginator', ['templates' => 'paginator-templates']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $especialidads = $this->paginate();
        $this->set(compact('especialidads'));
        $this->set('_serialize', ['especialidads']);
    }
    
    public function listar(){
         $this->autoRender = false; // No renderiza mediate el fichero .ctp
        
        $this->paginate = array( 
                'fields' => ['Especialidads.id', 'Especialidads.nombre'],            
                'order' =>['Especialidads.id'=>'asc']
        );
        //'limit' => 2,

        $especialidads = $this->paginate();
        
        //$pp=$this->Paginator;
        $xpage=$this->Paginator->request->params['paging']['Especialidads'];
        //$pp=json_encode($this->Paginator->request->params['paging']['Especialidads']['page']);
        $mipag=[
                'total'=>$xpage['count'],
                'current_page'=>$xpage['page'],  
                'per_page'=>$xpage['perPage'],         
                'last_page'=>$xpage['pageCount'],
                'from'=>$xpage['page'],
                'to'=>$xpage['current']
            ];
        echo json_encode(compact('especialidads','mipag'));       
        //print_r($this->Paginator);
            
    }

    /**
     * View method
     *
     * @param string|null $id Especialidad id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $especialidad = $this->Especialidads->get($id, [
            'contain' => ['Medicos']
        ]);

        $this->set('especialidad', $especialidad);
        $this->set('_serialize', ['especialidad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $especialidad = $this->Especialidads->newEntity();
        if ($this->request->is('post')) {
            $especialidad = $this->Especialidads->patchEntity($especialidad, $this->request->getData());
            if ($this->Especialidads->save($especialidad)) {
                $this->Flash->success(__('The especialidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especialidad could not be saved. Please, try again.'));
        }
        $this->set(compact('especialidad'));
        $this->set('_serialize', ['especialidad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Especialidad id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $especialidad = $this->Especialidads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especialidad = $this->Especialidads->patchEntity($especialidad, $this->request->getData());
            if ($this->Especialidads->save($especialidad)) {
                $this->Flash->success(__('The especialidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especialidad could not be saved. Please, try again.'));
        }
        $this->set(compact('especialidad'));
        $this->set('_serialize', ['especialidad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Especialidad id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $especialidad = $this->Especialidads->get($id);
        if ($this->Especialidads->delete($especialidad)) {
            $this->Flash->success(__('The especialidad has been deleted.'));
        } else {
            $this->Flash->error(__('The especialidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
