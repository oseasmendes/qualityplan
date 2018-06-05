<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 *
 * @method \App\Model\Entity\Ticket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TicketsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function index()    
    {

    /*  $dados = $this->Participantes->find('all', ['conditions' => ['Participantes.confirmado IS' => True,
                                                             'AND' =>  ['Participantes.evento_id =' => 1 ]]]); */


    $dados = $this->Tickets->find('all', ['conditions' => ['Tickets.stat_id <>' => 5]]); 


        $this->paginate = [
            'contain' => ['Typetickets', 'Stats', 'Departamentos', 'Vendors', 'Tecnicos', 'Fases', 'Users', 'Projetos']
        ];
        /* $tickets = $this->paginate($this->Tickets); */
        $tickets = $this->paginate($dados);

        $this->set(compact('tickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Typetickets', 'Stats', 'Departamentos', 'Vendors', 'Tecnicos', 'Fases', 'Users', 'Projetos', 'Actions']
        ]);

        $this->set('ticket', $ticket);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    use MailerAwareTrait;
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {

                  $this->getMailer('User')->send('tickets', [$ticket]);

                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $typetickets = $this->Tickets->Typetickets->find('list', ['limit' => 200]);
        $stats = $this->Tickets->Stats->find('list', ['limit' => 200]);
        $departamentos = $this->Tickets->Departamentos->find('list', ['limit' => 200]);
        $vendors = $this->Tickets->Vendors->find('list', ['limit' => 200]);
        $tecnicos = $this->Tickets->Tecnicos->find('list', ['limit' => 200]);
        $fases = $this->Tickets->Fases->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $projetos = $this->Tickets->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'typetickets', 'stats', 'departamentos', 'vendors', 'tecnicos', 'fases', 'users', 'projetos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $typetickets = $this->Tickets->Typetickets->find('list', ['limit' => 200]);
        $stats = $this->Tickets->Stats->find('list', ['limit' => 200]);
        $departamentos = $this->Tickets->Departamentos->find('list', ['limit' => 200]);
        $vendors = $this->Tickets->Vendors->find('list', ['limit' => 200]);
        $tecnicos = $this->Tickets->Tecnicos->find('list', ['limit' => 200]);
        $fases = $this->Tickets->Fases->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $projetos = $this->Tickets->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'typetickets', 'stats', 'departamentos', 'vendors', 'tecnicos', 'fases', 'users', 'projetos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    
}
