<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typetickets Controller
 *
 * @property \App\Model\Table\TypeticketsTable $Typetickets
 *
 * @method \App\Model\Entity\Typeticket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeticketsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamentos']
        ];
        $typetickets = $this->paginate($this->Typetickets);

        $this->set(compact('typetickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeticket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeticket = $this->Typetickets->get($id, [
            'contain' => ['Departamentos', 'Tickets']
        ]);

        $this->set('typeticket', $typeticket);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeticket = $this->Typetickets->newEntity();
        if ($this->request->is('post')) {
            $typeticket = $this->Typetickets->patchEntity($typeticket, $this->request->getData());
            if ($this->Typetickets->save($typeticket)) {
                $this->Flash->success(__('The typeticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeticket could not be saved. Please, try again.'));
        }
        $departamentos = $this->Typetickets->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('typeticket', 'departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeticket = $this->Typetickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeticket = $this->Typetickets->patchEntity($typeticket, $this->request->getData());
            if ($this->Typetickets->save($typeticket)) {
                $this->Flash->success(__('The typeticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeticket could not be saved. Please, try again.'));
        }
        $departamentos = $this->Typetickets->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('typeticket', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeticket = $this->Typetickets->get($id);
        if ($this->Typetickets->delete($typeticket)) {
            $this->Flash->success(__('The typeticket has been deleted.'));
        } else {
            $this->Flash->error(__('The typeticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
