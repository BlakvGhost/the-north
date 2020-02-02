<?php
if(isset($_POST)){
  $post = $_POST;
  if(isset($post['create'])){
    if (!empty($post['name']) && !empty($post['email'])) {
      // code...
    }
  }

}
