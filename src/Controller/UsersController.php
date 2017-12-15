<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    public function isAuthorized($user){
        
        if (isset($user['role']) and $user['role']=='Paciente') {
            if (in_array($this->request->action,['index','logout'])) {
                 return true;
            }           
        }
        return parent::isAuthorized($user);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);                
                if (($this->Auth->user()["role"])=="Paciente") {
                    return $this->redirect('/pages/reservas');
                    //return "sesion iniciada";
                }elseif (($this->Auth->user["role"])=="Admin") {
                    return $this->redirect($this->Auth->redirectUrl());
                }

                return $this->redirect($this->Auth->redirectUrl());
            }elseif (($this->request["data"]["role"])=='Paciente') {
                return $this->redirect('/pages/reserva_dia?Mid='.$this->request["data"]["Mid"].'&errorlogin=true');
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }


    public function add()
    {
        //$this->autoRender = false;
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            
            if (($this->request["data"]["role"])=='Paciente') {               
            
                $pacienteTipodoc=($this->request["data"]["tipodoc"]);
                $pacienteNumdoc=($this->request["data"]["username"]);
     

                $opciones=array('conditions' => array('Pacientes.numdoc' => $pacienteNumdoc,'Pacientes.tipodoc' => $pacienteTipodoc));
                $Pacientes =$this->paginate('pacientes',$opciones) ;
                $pac=json_decode(json_encode(compact('Pacientes')));
                if (isset($pac->Pacientes[0]->nombre)) {

                    $this->request["data"]["username"]==$pac->Pacientes[0]->numdoc;
                    //echo $this->request["data"]["username"];
                }else{
                    $this->Flash->error(__('El usuario debe existir en la tabla Pacientes'));
                }
            }

            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            
            $this->Flash->error(__('ha Ocurrido un error intente denuevo'));
            
            
        }


        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
