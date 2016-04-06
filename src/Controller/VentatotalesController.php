<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Ventatotales Controller
 *
 * @property \App\Model\Table\VentatotalesTable $Ventatotales
 */
class VentatotalesController extends AppController
{
     public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
    }   
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes'=>['Carros'],'Items'=>['Productos']]
        ];
        $ventatotales = $this->paginate($this->Ventatotales->find()->where(['espera'=>0]));

        $this->set(compact('ventatotales'));
        $this->set('_serialize', ['ventatotales']);
    }

     public function indexenespera()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $ventatotales = $this->paginate($this->Ventatotales->find()->where(['espera'=>1]));

        $this->set(compact('ventatotales'));
        $this->set('_serialize', ['ventatotales']);
    }
    /**
     * View method
     *
     * @param string|null $id Ventatotale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ventatotale = $this->Ventatotales->get($id, [
            'contain' => ['Clientes','Items'=>['Productos']]
        ]);

        $this->set('ventatotale', $ventatotale);
        $this->set('_serialize', ['ventatotale']);
    }

    public function viewenespera($id = null)
    {
        $vent=$this->Ventatotales->get($id);
        if(empty($vent)){
          throw new NotFoundException();
          return $this->redirect(['controller'=>'ventas','action' => 'index']);
        }
        $ventatotale = $this->Ventatotales->get($id, [
            'contain' => ['Clientes','Items']
        ]);
        
          $this->set('ventatotale', $ventatotale);
          $this->set('_serialize', ['ventatotale']);
        

       

       
          if ($this->request->is('ajax')) {
               $ventasTable = TableRegistry::get('Ventas');
               $itemsTable = TableRegistry::get('Items');
               $item=$itemsTable->find()->where(['id'=>$id])->toArray();
               for ($i=0; $i <count($item) ; $i++) { 
                   $producto_id=$item[$i]->producto_id;
                   $precio_u=$item[$i]->precio_u;
                   $cantidad=$item[$i]->cantidad;
                   $subtotal=$item[$i]->subtotal;

                   $ventas = $ventasTable->newEntity();
                   $ventas->producto_id=$producto_id;
                   $ventas->precio_u=$precio_u;
                   $ventas->cantidad=$cantidad;
                   $ventas->subtotal=$subtotal;
                   $ventasTable->save($ventas);
               }
               
               $ventat = $this->Ventatotales->get($id);
              $this->Ventatotales->delete($ventat);
              
              
              
        }
        

    }

   

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       
       $ventatotale = $this->Ventatotales->newEntity();
       $this->loadModel('Ventas');
       $ventaitem = $this->Ventas->find()->all();

       if(count($ventaitem)>0)
       {
        $total=$this->Ventas->find();
        $total->select([
        'total' => $total->func()->sum('subtotal')])
        ->toArray();
        $this->set(compact('ventaitem','total'));
        $this->set('_serialize', ['ventaitem','total']);

       }else{
            return $this->redirect(['controller'=>'productos','action' => 'index']);
       }

        if ($this->request->is('ajax')) {
            $ventatotale = $this->Ventatotales->patchEntity($ventatotale, $this->request->data);
            if ($this->Ventatotales->save($ventatotale)) {
                $ventatotale_id=$ventatotale->id;
                $vi=$ventaitem->toArray();
                $itemsTable = TableRegistry::get('Items');
                $productos = TableRegistry::get('Productos');
                for ($i=0; $i <count($vi) ; $i++) { 
                   $producto_id=$vi[$i]->producto_id;
                   $precio_u=$vi[$i]->precio_u;
                   $cantidad=$vi[$i]->cantidad;
                   $subtotal=$vi[$i]->subtotal;
                   $item = $itemsTable->newEntity();
                   $item->ventatotale_id=$ventatotale_id;
                   $item->producto_id=$producto_id;
                   $item->precio_u=$precio_u;
                   $item->cantidad=$cantidad;
                   $item->subtotal=$subtotal;
                   $itemsTable->save($item);

                $exist= $productos->find()
                ->select(['existencia'])
                ->where(['id' => $producto_id])
                ->toArray();
                $existencia= $exist[0]->existencia-$cantidad;
                $nueva_cantidad = $productos->query();
                $nueva_cantidad->update()
                ->set(['existencia' => $existencia])
                ->where(['id' => $producto_id])
                ->execute();
                   $venta = $this->Ventas->get($vi[$i]->id);
                   $this->Ventas->delete($venta);
                }
                $this->Flash->success(__('The ventatotale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ventatotale could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Ventatotales->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes'));
        $this->set('_serialize', ['ventatotale']);
    }

    public function enespera()
    {

         $ventatotale = $this->Ventatotales->newEntity();
       $this->loadModel('Ventas');
       $ventaitem = $this->Ventas->find()->all();

       if(count($ventaitem)>0)
       {
        $total=$this->Ventas->find();
        $total->select([
        'total' => $total->func()->sum('subtotal')])
        ->toArray();
        $this->set(compact('ventaitem','total'));
        $this->set('_serialize', ['ventaitem','total']);

       }else{
            return $this->redirect(['controller'=>'productos','action' => 'index']);
       }

        if ($this->request->is('ajax')) {
            $ventatotale = $this->Ventatotales->patchEntity($ventatotale, $this->request->data);
            if ($this->Ventatotales->save($ventatotale)) {
                $ventatotale_id=$ventatotale->id;
                $vi=$ventaitem->toArray();
                $itemsTable = TableRegistry::get('Items');
                $productos = TableRegistry::get('Productos');
                for ($i=0; $i <count($vi) ; $i++) 
                { 
                   $producto_id=$vi[$i]->producto_id;
                   $precio_u=$vi[$i]->precio_u;
                   $cantidad=$vi[$i]->cantidad;
                   $subtotal=$vi[$i]->subtotal;
                   $item = $itemsTable->newEntity();
                   $item->ventatotale_id=$ventatotale_id;
                   $item->producto_id=$producto_id;
                   $item->precio_u=$precio_u;
                   $item->cantidad=$cantidad;
                   $item->subtotal=$subtotal;
                   $item->espera=1;
                   $itemsTable->save($item);
                   $venta = $this->Ventas->get($vi[$i]->id);
                   $this->Ventas->delete($venta);
                }
                $this->Flash->success(__('The ventatotale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ventatotale could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Ventatotales->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes'));
        $this->set('_serialize', ['ventatotale']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Ventatotale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ventatotale = $this->Ventatotales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ventatotale = $this->Ventatotales->patchEntity($ventatotale, $this->request->data);
            if ($this->Ventatotales->save($ventatotale)) {
                $this->Flash->success(__('The ventatotale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ventatotale could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Ventatotales->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes'));
        $this->set('_serialize', ['ventatotale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ventatotale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ventatotale = $this->Ventatotales->get($id);
        if ($this->Ventatotales->delete($ventatotale)) {
            $this->Flash->success(__('The ventatotale has been deleted.'));
        } else {
            $this->Flash->error(__('The ventatotale could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}