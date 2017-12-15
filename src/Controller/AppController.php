<?php

namespace App\Controller;
 
use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{


    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize'=>['Controller'], 

            'aunthenticate'=>[
                'Form'=>[
                    'fields'=>[
                        'username'=>'username',
                        'password'=>'password',
                    ],
                    'finder'=>'auth'
                ]
            ],

            'loginAction'=>[
                'controller'=>'Users',
                'action'=>'login'

            ],
            'loginRedirect' => [
                'controller' => 'Citas',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'inicio'
            ]
                     
        ]);

//'unauthorizedRedirect'=>$this->referer()   
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeFilter(Event $event)
    {
        $this->set('current_user', $this->Auth->user());
        $this->Auth->allow(['display','listar','buscar','verhorario','medicoid']);
        /* 'index', 'view','delete', 'add', 
        que no requiera login para las acciones index y view en cada controlador. Queremos que nuestros visitantes puedan leer y listar las entradas sin registrarse.
        */
    }
 
    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function isAuthorized($user){
        
        if (isset($user['role']) and $user['role']=='Admin') {

            return true;
        }
        return False;
    }
}
