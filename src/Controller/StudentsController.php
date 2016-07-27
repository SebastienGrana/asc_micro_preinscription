<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 */
class StudentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Schools']
        ];
        $students = $this->paginate($this->Students);

        $this->set(compact('students'));
        $this->set('_serialize', ['students']);
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => [ 'Users', 'Schools']
        ]);

        $this->set('student', $student);
        $this->set('_serialize', ['student']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Students->newEntity();
        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->data);
            $student->user_id = $this->Auth->user('id');
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The student could not be saved. Please, try again.'));
            }
        }
        $users = $this->Students->Users->find('list', ['limit' => 200]);
        $schools = $this->Students->Schools->find('list', ['limit' => 200]);
        $students = $this->Students->Students->find('list', ['limit' => 200]);
        $this->set(compact('student', 'students', 'users', 'schools'));
        $this->set('_serialize', ['student']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The student could not be saved. Please, try again.'));
            }
        }
        $users = $this->Students->Users->find('list', ['limit' => 200]);
        $schools = $this->Students->Schools->find('list', ['limit' => 200]);
        $students = $this->Students->Students->find('list', ['limit' => 200]);
        $this->set(compact('student', 'students', 'users', 'schools'));
        $this->set('_serialize', ['student']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function exportOne($studentId,$userId, $completName) {
            $date = date("d-m-Y");
            $heure = date("H:i");     
            $fileName = $completName.'_'.$heure.'_'.$date;
            
            $this->response->download($fileName.'.csv');
            $dataStudent = $this->Students->findByStudentIdAndUserId($studentId,$userId)->toArray();
            $emptyData = [];
            $dataUser = $this->Students->Users->findByUserId($userId)->toArray();
//            $data = array_merge($dataStudent,$dataUser) ;
            $_serialize = ['dataStudent', 'dataUser'];
            
            $_header = [
                'Student-Id',
                'User',
                'School',
                'Nom-de-famille',
                'Prenom',
                'Autre-prenoms',
                'Genre',
                'Date-de-naissance',
                'Ville-de-naissance',
                'Pays-de-naissance',
                'Nationalitée',
                'École-actuel',
                'Année-scolaire',
                'Régime',
                'Redoublant',
                'Formation-souhaité',
                'Écoles-fréquentées',
                'Collège-fréquentés',
                'Liens-de-parentée'];
            
            $_footer = [
                'User-Id',
                'Civilitée',
                'Nom-de-famille',
                'Prénom',
                'Email',
                'Téléphone',
                'Ville',
                'Code-postal',
                'Adresse',
                'Responsable-Legal',
                'Mot-de-passe',
                'Téléphone-mobile',
                'Nationalitée',
                'Profession',
                'Société',
                'Téléphone-pro',
                'Situation-pro',
                ];
            
            $_delimiter = ' ';
            $_enclosure = '"';
            $_bom = true;
            $_newline = '~';
            $this->set(compact('dataStudent','dataUser', '_serialize', '_header','_footer','_delimiter','_enclosure','_bom','_newline'));
            $this->viewBuilder()->className('CsvView.Csv');
            return;
    }
}
