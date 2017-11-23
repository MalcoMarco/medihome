<?php
namespace App\Controller;

use App\Controller\AppController;

/**
     * Medicos Controller
     *
     * @property \App\Model\Table\MedicosTable $Medicos
     *
     * @method \App\Model\Entity\Medico[] paginate($object = null, array $settings = [])
 */
class MedicosController extends AppController
{
    public $paginate = array( 
            'order' =>['Especialidads.id'=>'asc']
    );
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */ 
    public function index()
    {
        $this->paginate = [
            'contain' => ['Especialidads']
        ];
        $medicos = $this->paginate($this->Medicos);

        $this->set(compact('medicos'));
        $this->set('_serialize', ['medicos']);
    }

    public function buscar($id = null)
    {//buscar medico de expecialidad x
        $this->paginate = array( 
            'fields' => ['id', 'nombre','apaterno','amaterno', 'telefono','email','especialidad_id'],
            'order' =>['Medicos.id'=>'asc']
        );        
        $this->autoRender = false;
        $opciones=array('conditions' => array('Medicos.especialidad_id' => $id));
        $Medics = $this->paginate('medicos',$opciones);
        echo json_encode(compact('Medics'));

    }

    /**
     * View method
     *
     * @param string|null $id Medico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medico = $this->Medicos->get($id, [
            'contain' => ['Especialidads', 'Citas']
        ]);

        $this->set('medico', $medico);
        $this->set('_serialize', ['medico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medico = $this->Medicos->newEntity();
        if ($this->request->is('post')) {
            $medico = $this->Medicos->patchEntity($medico, $this->request->getData());
            if ($this->Medicos->save($medico)) {
                $this->Flash->success(__('The medico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medico could not be saved. Please, try again.'));
        }
        $especialidads = $this->Medicos->Especialidads->find('list', ['limit' => 200]);
        $this->set(compact('medico', 'especialidads'));
        $this->set('_serialize', ['medico']);
        //dd($this->set(compact('medico', 'especialidads')));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medico = $this->Medicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medico = $this->Medicos->patchEntity($medico, $this->request->getData());
            if ($this->Medicos->save($medico)) {
                $this->Flash->success(__('The medico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medico could not be saved. Please, try again.'));
        }
        $especialidads = $this->Medicos->Especialidads->find('list', ['limit' => 200]);
        $this->set(compact('medico', 'especialidads'));
        $this->set('_serialize', ['medico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medico = $this->Medicos->get($id);
        if ($this->Medicos->delete($medico)) {
            $this->Flash->success(__('The medico has been deleted.'));
        } else {
            $this->Flash->error(__('The medico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
