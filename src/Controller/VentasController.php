<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

/**
 * Ventas Controller
 *
 * @property \App\Model\Table\VentasTable $Ventas
 */
class VentasController extends AppController
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
            'contain' => ['Productos']
        ];
        $ventas = $this->paginate($this->Ventas);
        $total=$this->Ventas->find();
        $total->select([
        'total' => $total->func()->sum('subtotal'),
        'resta' => $total->func()->sum('rest')])
        ->toArray();
        $this->set(compact('ventas','total'));
        $this->set('_serialize', ['ventas','total']);
        $productos = TableRegistry::get('Productos'); 
        $buscador=$productos->find()
                   ->select(['modelo','codigo'])
                   ->toArray();
        $modelo=array();
        $codigo=array();
        for ($i=0; $i <count($buscador) ; $i++) { 
            array_push($modelo, $buscador[$i]->modelo);
            array_push($codigo, $buscador[$i]->codigo);
        }
                         
        $this->set(compact('codigo','modelo'));
        $this->set('_serialize', ['codigo','modelo']);
        
        //Ventatotale
        $ventatotaleTable = TableRegistry::get('Ventatotales');
        $ventatotale = $ventatotaleTable->newEntity();
        $clienteTable = TableRegistry::get('Ventatotales');
        $bancoTable = TableRegistry::get('Ventatotales');
        $bancos=$ventatotaleTable->Bancos->find('list', ['limit' => 200]);
        $cliente = $clienteTable->newEntity();
        $banco = $bancoTable->newEntity();
        $clientes = $ventatotaleTable->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes','cliente','bancos','banco'));
        $this->set('_serialize', ['ventatotale']);
        $real=0;
        $this->set('real', $real);
        //add action
        $venta = $this->Ventas->newEntity();
        if ($this->request->is('ajax')) {
            $validador=json_decode($this->request->data['validador']);
            if($validador==1){
               $pro=json_decode($this->request->data['producto']);
               $precio= $productos->find()
                    ->select(['precio','id'])
                    ->where(['id' => $pro])
                    ->toArray();
                $preciou=$precio[0]->precio;
                $miproducto=$precio[0]->id;    
                echo json_encode(compact('preciou','miproducto'));
                die;
                $this->set('preciou', $preciou);
                $this->set('miproducto', $miproducto);
                $this->set('_serialize', ['preciou','miproducto']);
            }
            else
                {
                   $vt=json_decode($this->request->data['paradescontar']);
                   $real=$total[0]->total-$total[0]->rest-$vt;
                   echo json_encode(compact('real'));
                    die;
                    $this->set('real', $real);
                    $this->set('_serialize', ['real']);
                }
            }
        if ($this->request->is('post')) {
            $pro=$this->request->data['producto_id'];
            $cant=$this->request->data['cantidad'];
            $existencia=$productos->find()
                    ->select(['existencia','minimo'])
                    ->where(['id' => $pro])
                    ->toArray();
            $minimo=$productos->find()
                    ->select(['minimo'])
                    ->where(['id' => $pro])
                    ->toArray();        
            $restante=$existencia[0]->existencia-$cant;
            
            if($minimo[0]->minimo>=$restante){
                    $venta = $this->Ventas->patchEntity($venta, $this->request->data);
                if ($this->Ventas->save($venta)) {
                    $this->Flash->success(__('la ultima venta llevo o sobrepaso el minimo del producto en inventario'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The venta could not be saved. Please, try again.'));
                }
            } elseif ($restante>0) {
                $venta = $this->Ventas->patchEntity($venta, $this->request->data);
                if ($this->Ventas->save($venta)) {
                    $this->Flash->success(__('The venta has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }  else {
                    $this->Flash->error(__('The venta could not be saved. Please, try again.'));
                }
            }
            elseif ($restante==0) {
               $venta = $this->Ventas->patchEntity($venta, $this->request->data);
                if ($this->Ventas->save($venta)) {
                    $this->Flash->success(__('la ultima venta agoto el producto'));
                    return $this->redirect(['action' => 'index']);
                }  else {
                    $this->Flash->error(__('The venta could not be saved. Please, try again.'));
                }
            }else{
                    $this->Flash->error(__('ah seleccionado mayor cantidad de lo existente en inventario'));
                }                
            
        }
        $producto = $this->Ventas->Productos->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'full'])->toArray();
        $producto2= $this->Ventas->Productos->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'modelo'])->toArray();
        $productot=array_merge($producto,$producto2);
        $this->set(compact('venta', 'producto','producto2','productot'));
        $this->set('_serialize', ['venta']);
}

    /**
     * View method
     *
     * @param string|null $id Venta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venta = $this->Ventas->get($id, [
            'contain' => ['Productos']
        ]);

        $this->set('venta', $venta);
        $this->set('_serialize', ['venta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $venta = $this->Ventas->newEntity();
        if ($this->request->is('ajax')) {
               $productos = TableRegistry::get('Productos'); 
               $produs=json_decode($this->request->data['producto']);
               $p=intval($produs);
               $precio= $productos->find()
                    ->select(['precio'])
                    ->where(['id' => $p])
                    ->toArray();
                $preciou=$precio[0]->precio;    
                echo json_encode(compact('preciou'));
                die;
                $this->set('preciou', $preciou);
                $this->set('_serialize', ['preciou']);

            }
        if ($this->request->is('post')) {
          /*  $id = intval($this->request->data('producto_id'));
            $resta=intval($this->request->data('cantidad'));
           
                */                           
            $venta = $this->Ventas->patchEntity($venta, $this->request->data);
            if ($this->Ventas->save($venta)) {
                $this->Flash->success(__('The venta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venta could not be saved. Please, try again.'));
            }
        }
        $producto = $this->Ventas->Productos->find('list', ['limit' => 200]);
        $this->set(compact('venta', 'producto'));
        $this->set('_serialize', ['venta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venta = $this->Ventas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venta = $this->Ventas->patchEntity($venta, $this->request->data);
            if ($this->Ventas->save($venta)) {
                $this->Flash->success(__('The venta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venta could not be saved. Please, try again.'));
            }
        }
        $productos = $this->Ventas->Productos->find('list', ['limit' => 200]);
        $this->set(compact('venta', 'productos'));
        $this->set('_serialize', ['venta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venta = $this->Ventas->get($id);
        if ($this->Ventas->delete($venta)) {
            $this->Flash->success(__('The venta has been deleted.'));
        } else {
            $this->Flash->error(__('The venta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
