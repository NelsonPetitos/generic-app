<?php
namespace App\Controller\Collection;

use App\Controller\AppController;

/**
 * Gases Controller
 *
 * @property \App\Model\Table\GasesTable $Gases
 *
 * @method \App\Model\Entity\Gase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $gases = $this->paginate($this->Gases);

        $this->set(compact('gases'));
        $this->viewBuilder()->layout('collection');
    }

    /**
     * View method
     *
     * @param string|null $id Gase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gase = $this->Gases->get($id, [
            'contain' => ['Countries']
        ]);

        $this->set('gase', $gase);
        $this->viewBuilder()->layout('collection');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
//    public function add()
//    {
//        $gase = $this->Gases->newEntity();
//        if ($this->request->is('post')) {
//            $gase = $this->Gases->patchEntity($gase, $this->request->getData());
//            if ($this->Gases->save($gase)) {
//                $this->Flash->success(__('The gase has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The gase could not be saved. Please, try again.'));
//        }
//        $countries = $this->Gases->Countries->find('list', ['limit' => 200]);
//        $this->set(compact('gase', 'countries'));
//    }
//
//    /**
//     * Edit method
//     *
//     * @param string|null $id Gase id.
//     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
//     * @throws \Cake\Network\Exception\NotFoundException When record not found.
//     */
//    public function edit($id = null)
//    {
//        $gase = $this->Gases->get($id, [
//            'contain' => []
//        ]);
//        if ($this->request->is(['patch', 'post', 'put'])) {
//            $gase = $this->Gases->patchEntity($gase, $this->request->getData());
//            if ($this->Gases->save($gase)) {
//                $this->Flash->success(__('The gase has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The gase could not be saved. Please, try again.'));
//        }
//        $countries = $this->Gases->Countries->find('list', ['limit' => 200]);
//        $this->set(compact('gase', 'countries'));
//    }
//
//    /**
//     * Delete method
//     *
//     * @param string|null $id Gase id.
//     * @return \Cake\Http\Response|null Redirects to index.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $gase = $this->Gases->get($id);
//        if ($this->Gases->delete($gase)) {
//            $this->Flash->success(__('The gase has been deleted.'));
//        } else {
//            $this->Flash->error(__('The gase could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }
}
