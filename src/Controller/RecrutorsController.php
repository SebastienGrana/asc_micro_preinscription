<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Recrutors Controller
 *
 * @property \App\Model\Table\RecrutorsTable $Recrutors
 */
class RecrutorsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->config('authenticate',[
                    'Form' => [
                        'userModel' => 'Recrutors',
                        'fields' => ['username' => 'email','password' => 'password' ]
                    ]
                ],           
                'loginAction' , [
                    'controller' => 'Recrutors',
                    'action' => 'login',
                ],
                'logoutAction' , [
                    'controller' => 'Recrutors',
                    'action' => 'login',
                ],
                'logoutRedirect' , [
                    'controller' => 'Recrutors',
                    'action' => 'login'
                ],
                'loginRedirect' , [
                    'controller' => 'Students',
                    'action' => 'index'
                ]
            );
        // Allow recrutor to register and logout.
        $this->Auth->allow(['logout']);
    } 
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {   /*PROBLEM !!!*/
        $this->paginate = [
            'contain' => ['Schools']
        ];
        /*PROBLEM !!!*//*'Recrutors',*/ 
        $recrutors = $this->paginate($this->Recrutors);

        $this->set(compact('recrutors'));
        $this->set('_serialize', ['recrutors']);
    }

    /**
     * View method
     *
     * @param string|null $id Recrutor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {   
        /*PROBLEM !!!*/
        $recrutor = $this->Recrutors->get($id, [
            'contain' => [ 'Schools']
        ]);
        /*PROBLEM !!!'Recrutors',*/

        $this->set('recrutor', $recrutor);
        $this->set('_serialize', ['recrutor']);
//        
//        $this->Session->read('Auth.User.first_name');
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recrutor = $this->Recrutors->newEntity();
        if ($this->request->is('post')) {
            $recrutor = $this->Recrutors->patchEntity($recrutor, $this->request->data);
            if ($this->Recrutors->save($recrutor)) {
                $this->Flash->success(__('The recrutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recrutor could not be saved. Please, try again.'));
            }
        }
        $recrutors = $this->Recrutors->find('list', ['limit' => 200]);
        $schools = $this->Recrutors->Schools->find('list', ['limit' => 200]);
        $this->set(compact('recrutor', 'recrutors', 'schools'));
        $this->set('_serialize', ['recrutor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recrutor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recrutor = $this->Recrutors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recrutor = $this->Recrutors->patchEntity($recrutor, $this->request->data);
            if ($this->Recrutors->save($recrutor)) {
                $this->Flash->success(__('The recrutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recrutor could not be saved. Please, try again.'));
            }
        }
        $recrutors = $this->Recrutors->find('list', ['limit' => 200]);
        $schools = $this->Recrutors->Schools->find('list', ['limit' => 200]);
        $this->set(compact('recrutor', 'recrutors', 'schools'));
        $this->set('_serialize', ['recrutor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recrutor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recrutor = $this->Recrutors->get($id);
        if ($this->Recrutors->delete($recrutor)) {
            $this->Flash->success(__('The recrutor has been deleted.'));
        } else {
            $this->Flash->error(__('The recrutor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    

    public function login()
    {
        if ($this->request->is('post')) {
            $recrutor = $this->Auth->identify();
            if ($recrutor) {
                $this->Auth->setUser($recrutor);
                return $this->redirect(array('controller' => 'students','action' => 'index'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect(array('controller' => 'recrutors','action' => 'login'));
    }
}
