<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Mailer\Email;

   class EmailsController extends AppController{
      public function index(){
         $email = new Email('default');
         $email->to('maximedery@gmail.com')->subject('Envoie Email Tp1')->send('yo');
           
      }

      public function isAuthorized($user)
      {
          $action = $this->request->getParam('action');
          // Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
          // authentifiés sur l'application
          if (in_array($action, ['add', 'tags'])) {
              return true;
          }
  
         /* // Toutes les autres actions nécessitent un slug
          $slug = $this->request->getParam('pass.0');
          if (!$slug) {
              return false;
          }
  
          // On vérifie que l'asset appartient à l'utilisateur connecté
          $asset = $this->Assets->findBySlug($slug)->first();
  
          return $asset->user_id === $user['id'];*/
      }
   }
   
?>

