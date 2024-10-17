<?php

class PublicationController extends Controller{
    public $publicationService;

    public function __construct(){
        Parent::__construct();
        $this->publicationService = new PublicationService();
    }
    public function showAllPublications(){
        
        $reactions = $this->publicationService->reactionModel->findAll();
        $publications = $this->publicationService->publicationModel->getAllPubs();        
        //dump($reactions);die();
        Parent::getPage()->renderView("/Page/publication/list.php",[
            'publications'=>$publications,
            'reactions'=>$reactions,
            'title'=>"List"
        ]);
    }
   
    public function new(){
        Parent::getPage()->renderView("/Page/publication/new.php",[
            "title"=>"New Publication"
        ]);
    }
    public function edit($params){
        if(isset($params['id'])){
            $user = $this->publicationService->publicationModel->find($params['id']);
            if($user){
                Parent::getPage()->renderView("/Page/publication/edit.php",[
                    'user'=>$user,
                    'title'=>'Edit'
                ]);
            }
            else{
                Parent::getPage()->renderView("/erreur404.php",[
                    "title"=>"Erreur"
                ]);
            }
        }
        else{
            Parent::getPage()->renderView("/erreur404.php",[
                "title"=>"Erreur"
            ]);
        }
    }
    public function register($params){
        //dump($params);die();

        $publication = $this->publicationService->publicationModel->create([
            $params['titre'],
            $params['description'],
            $params['id']
        ]); 
        Parent::redirect('/home');
    }

    public function update($params){
        $user = $this->publicationService->publicationModel->update([
            'id' => $params['id'],
            'nom' => $params['nom'],
            'prenom' => $params['prenom'],
            'email' => $params['email'],
            'password' => $params['password']
        ]);
        Parent::redirect('/home');
        //Parent::getPage()->renderView("/Page/up.php");
    }
    public function delete($params){
        $id = $params['id'];
        $user = $this->publicationService->publicationModel->delete($id);
        Parent::redirect('/home');
        //Parent::getPage()->renderView("/Page/edit.php");
    }

    public function reaction($params){
        // $user = $this->publicationService->publicationModel->update([
        //     'id' => $params['id'],
        //     'nom' => $params['nom'],
        //     'prenom' => $params['prenom'],
        //     'email' => $params['email'],
        //     'password' => $params['password']
        // ]);
        // Parent::redirect('/home');
        Parent::renderJson(['params'=>$params]);
        //Parent::getPage()->renderView("/Page/up.php");
    }
    public function getCommentaires($params){
        $comments = $this->publicationService->commentaireModel->getCommentsFromPub($params['id']);
        Parent::renderJson(['commentaires'=>$comments]);
    }
    

}

?>