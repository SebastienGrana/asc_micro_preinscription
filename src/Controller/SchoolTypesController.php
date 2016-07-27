<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolTypes Controller
 *
 * @property \App\Model\Table\SchoolTypesTable $SchoolTypes
 */
class SchoolTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $schoolTypes = $this->paginate($this->SchoolTypes);

        $this->set(compact('schoolTypes'));
        $this->set('_serialize', ['schoolTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id School Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolType = $this->SchoolTypes->get($id, [
            'contain' => []
        ]);

        $this->set('schoolType', $schoolType);
        $this->set('_serialize', ['schoolType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolType = $this->SchoolTypes->newEntity();
        if ($this->request->is('post')) {
            $schoolType = $this->SchoolTypes->patchEntity($schoolType, $this->request->data);
            if ($this->SchoolTypes->save($schoolType)) {
                $this->Flash->success(__('The school type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school type could not be saved. Please, try again.'));
            }
        }
        $schoolTypes = $this->SchoolTypes->find('list', ['limit' => 200]);
        $this->set(compact('schoolType'));
        $this->set('_serialize', ['schoolType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolType = $this->SchoolTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolType = $this->SchoolTypes->patchEntity($schoolType, $this->request->data);
            if ($this->SchoolTypes->save($schoolType)) {
                $this->Flash->success(__('The school type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school type could not be saved. Please, try again.'));
            }
        }
        $schoolTypes = $this->SchoolTypes->find('list', ['limit' => 200]);
        $this->set(compact('schoolType'));
        $this->set('_serialize', ['schoolType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolType = $this->SchoolTypes->get($id);
        if ($this->SchoolTypes->delete($schoolType)) {
            $this->Flash->success(__('The school type has been deleted.'));
        } else {
            $this->Flash->error(__('The school type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
