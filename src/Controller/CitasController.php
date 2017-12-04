<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Citas Controller
 *
 * @property \App\Model\Table\CitasTable $Citas
 *
 * @method \App\Model\Entity\Cita[] paginate($object = null, array $settings = [])
 */
class CitasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes', 'Medicos']
        ];
        $citas = $this->paginate($this->Citas);

        $this->set(compact('citas'));
        $this->set('_serialize', ['citas']);
    }

    public function verhorario()
    {   //Lista los horarios ocupados del medico x
        $Mid=$_GET['Mid'];
        $fecha=$_GET['fecha'];

        $this->autoRender = false;
        $this->paginate = array( 
            'contain' =>['Medicos'],
            'fields' => [   'id', 'dia','hora']            
        );

        $opciones=array('conditions' => array('dia' => $fecha,'Medicos.id'=>$Mid));
        $Cits = $this->paginate('citas',$opciones);
        echo json_encode(compact('Cits'));
    }

    /**
     * View method
     *
     * @param string|null $id Cita id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cita = $this->Citas->get($id, [
            'contain' => ['Pacientes', 'Medicos']
        ]);

        $this->set('cita', $cita);
        $this->set('_serialize', ['cita']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cita = $this->Citas->newEntity();
        if ($this->request->is('post')) {
            $cita = $this->Citas->patchEntity($cita, $this->request->getData());
            if ($this->Citas->save($cita)) {
                $this->Flash->success(__('The cita has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cita could not be saved. Please, try again.'));
        }
        $pacientes = $this->Citas->Pacientes->find('list', ['limit' => 200]);
        $medicos = $this->Citas->Medicos->find('list', ['limit' => 200]);
        $this->set(compact('cita', 'pacientes', 'medicos'));
        $this->set('_serialize', ['cita']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cita id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cita = $this->Citas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cita = $this->Citas->patchEntity($cita, $this->request->getData());
            if ($this->Citas->save($cita)) {
                $this->Flash->success(__('The cita has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cita could not be saved. Please, try again.'));
        }
        $pacientes = $this->Citas->Pacientes->find('list', ['limit' => 200]);
        $medicos = $this->Citas->Medicos->find('list', ['limit' => 200]);
        $this->set(compact('cita', 'pacientes', 'medicos'));
        $this->set('_serialize', ['cita']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cita id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cita = $this->Citas->get($id);
        if ($this->Citas->delete($cita)) {
            $this->Flash->success(__('The cita has been deleted.'));
        } else {
            $this->Flash->error(__('The cita could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
