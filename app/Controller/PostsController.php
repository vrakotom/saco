<?php

class PostsController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index()
    {
        $this->set('post', $this->Post->find('all'));
    }

    public function view($id)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->request->data['post']['user_id'] = $this->Auth->user('id'); //Ligne ajoutée
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Votre post a été sauvegardé.'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }


    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">Your post has been saved.</div>'));
                return $this->redirect(array('action' => 'view', $id));
            }
            $this->Session->setFlash(__('<div class="alert alert-danger" role="alert">Unable to add your post.</div>'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash(
                __('<div class="alert alert-success" role="alert">L\'post avec id : %s a été supprimé.</div>', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function isAuthorized($user)
    {
        // Tous les users inscrits peuvent ajouter les posts
        if ($this->action === 'add') {
            return true;
        }

        // Le propriétaire de l'post peut l'éditer et le supprimer
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = (int)$this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }



    public function getInterventionetat($intervention_etat)
    {

        if ($intervention_etat === 'fini') {
            return '<span class="label label-success">Fini</span>';
        }

        if ($intervention_etat === 'en cours') {
            return '<span class="label label-warning">En cours</span>';
        }

        return '<span class="label label-default">Indéfini</span>';

    }
}