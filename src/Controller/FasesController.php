<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fases Controller
 *
 * @property \App\Model\Table\FasesTable $Fases
 *
 * @method \App\Model\Entity\Fase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fases = $this->paginate($this->Fases);

        $this->set(compact('fases'));
    }

    /**
     * View method
     *
     * @param string|null $id Fase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fase = $this->Fases->get($id, [
            'contain' => ['Tickets']
        ]);

        $this->set('fase', $fase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fase = $this->Fases->newEntity();
        if ($this->request->is('post')) {
            $fase = $this->Fases->patchEntity($fase, $this->request->getData());
            if ($this->Fases->save($fase)) {
                $this->Flash->success(__('The fase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fase could not be saved. Please, try again.'));
        }
        $this->set(compact('fase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fase = $this->Fases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fase = $this->Fases->patchEntity($fase, $this->request->getData());
            if ($this->Fases->save($fase)) {
                $this->Flash->success(__('The fase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fase could not be saved. Please, try again.'));
        }
        $this->set(compact('fase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fase = $this->Fases->get($id);
        if ($this->Fases->delete($fase)) {
            $this->Flash->success(__('The fase has been deleted.'));
        } else {
            $this->Flash->error(__('The fase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
