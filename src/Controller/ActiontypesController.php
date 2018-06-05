<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actiontypes Controller
 *
 * @property \App\Model\Table\ActiontypesTable $Actiontypes
 *
 * @method \App\Model\Entity\Actiontype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActiontypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $actiontypes = $this->paginate($this->Actiontypes);

        $this->set(compact('actiontypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Actiontype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actiontype = $this->Actiontypes->get($id, [
            'contain' => ['Actions']
        ]);

        $this->set('actiontype', $actiontype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actiontype = $this->Actiontypes->newEntity();
        if ($this->request->is('post')) {
            $actiontype = $this->Actiontypes->patchEntity($actiontype, $this->request->getData());
            if ($this->Actiontypes->save($actiontype)) {
                $this->Flash->success(__('The actiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('actiontype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actiontype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actiontype = $this->Actiontypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actiontype = $this->Actiontypes->patchEntity($actiontype, $this->request->getData());
            if ($this->Actiontypes->save($actiontype)) {
                $this->Flash->success(__('The actiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('actiontype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actiontype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actiontype = $this->Actiontypes->get($id);
        if ($this->Actiontypes->delete($actiontype)) {
            $this->Flash->success(__('The actiontype has been deleted.'));
        } else {
            $this->Flash->error(__('The actiontype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
