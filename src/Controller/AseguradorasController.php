<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aseguradoras Controller
 *
 * @property \App\Model\Table\AseguradorasTable $Aseguradoras
 *
 * @method \App\Model\Entity\Aseguradora[] paginate($object = null, array $settings = [])
 */
class AseguradorasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aseguradoras = $this->paginate($this->Aseguradoras);

        $this->set(compact('aseguradoras'));
        $this->set('_serialize', ['aseguradoras']);
    }

    /**
     * View method
     *
     * @param string|null $id Aseguradora id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aseguradora = $this->Aseguradoras->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('aseguradora', $aseguradora);
        $this->set('_serialize', ['aseguradora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aseguradora = $this->Aseguradoras->newEntity();
        if ($this->request->is('post')) {
            $aseguradora = $this->Aseguradoras->patchEntity($aseguradora, $this->request->getData());
            if ($this->Aseguradoras->save($aseguradora)) {
                $this->Flash->success(__('The aseguradora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aseguradora could not be saved. Please, try again.'));
        }
        $this->set(compact('aseguradora'));
        $this->set('_serialize', ['aseguradora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aseguradora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aseguradora = $this->Aseguradoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aseguradora = $this->Aseguradoras->patchEntity($aseguradora, $this->request->getData());
            if ($this->Aseguradoras->save($aseguradora)) {
                $this->Flash->success(__('The aseguradora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aseguradora could not be saved. Please, try again.'));
        }
        $this->set(compact('aseguradora'));
        $this->set('_serialize', ['aseguradora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aseguradora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aseguradora = $this->Aseguradoras->get($id);
        if ($this->Aseguradoras->delete($aseguradora)) {
            $this->Flash->success(__('The aseguradora has been deleted.'));
        } else {
            $this->Flash->error(__('The aseguradora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
