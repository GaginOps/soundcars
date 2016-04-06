<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carros Controller
 *
 * @property \App\Model\Table\CarrosTable $Carros
 */
class CarrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $carros = $this->paginate($this->Carros);

        $this->set(compact('carros'));
        $this->set('_serialize', ['carros']);
    }

    /**
     * View method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carro = $this->Carros->get($id, [
            'contain' => ['Clientes']
        ]);

        $this->set('carro', $carro);
        $this->set('_serialize', ['carro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carro = $this->Carros->newEntity();
        if ($this->request->is('post')) {
            $carro = $this->Carros->patchEntity($carro, $this->request->data);
            if ($this->Carros->save($carro)) {
                $this->Flash->success(__('The carro has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The carro could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Carros->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('carro', 'clientes'));
        $this->set('_serialize', ['carro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carro = $this->Carros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carro = $this->Carros->patchEntity($carro, $this->request->data);
            if ($this->Carros->save($carro)) {
                $this->Flash->success(__('The carro has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The carro could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Carros->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('carro', 'clientes'));
        $this->set('_serialize', ['carro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carro = $this->Carros->get($id);
        if ($this->Carros->delete($carro)) {
            $this->Flash->success(__('The carro has been deleted.'));
        } else {
            $this->Flash->error(__('The carro could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
