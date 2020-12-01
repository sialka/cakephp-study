<?php

namespace App\Controller;

/**
 * Users Controller.
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $usuarios = 'sidnei';
        $usuarios = $this->Users->find()->all();

        // $this->set(['usuarios' => $usuarios]);
        $this->set(compact('usuarios'));
    }
}
