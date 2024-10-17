<?php

class PublicationService {
    public $publicationModel;
    public $commentaireModel;
    public $commentairePublicationModel;
    public $reactionPublicationModel;
    public $reactionModel;
    public function __construct()
    {
        $this->publicationModel = new PublicationModel(); 
        $this->commentaireModel = new CommentaireModel(); 
        $this->reactionModel = new ReactionModel(); 
        $this->commentairePublicationModel = new CommentairePublicationModel();
        $this->reactionPublicationModel = new reactionPublicationModel();   
    }

    public function publicationsWithAll(){
        $publications = $this->publicationModel->findAll();        
        $publication_reaction = 0;
    }

    public function isReacted($userId,$publicationId){
        $reaction = $this->reactionPublicationModel->find([
            'publication_id'=>$publicationId,
            'author_id'=>$userId
        ]);

        if($reaction) return true;
        return false;
    }

    public function reagir($userId,$publicationId,$reactionId){
        $reactionPub = $this->reactionPublicationModel->create([
            'reaction_id'=>$reactionId,
            'publication_id'=>$publicationId,
            'author_id'=>$userId
        ]);

 
        return $reactionPub;
    }

    public function commenter($userId,$publicationId,$commentaire){
        $commentaireId = $this->commentaireModel->create([
            'description'=>$commentaire,
            'author_id'=>$userId
        ]);

        $commentairePub = $this->commentairePublicationModel->create([
            'commentaire_id'=>$commentaireId,
            'publication_id'=>$publicationId
        ]);

        return $commentairePub;
    }

    

}

