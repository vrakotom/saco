<?php
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 25/10/2014
 * Time: 17:42
 */

class Post extends AppModel {

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }


}