<?php

class CommentairePublicationModel  extends Model{
    public function __construct(){
        Parent::__construct();
        $this->table = "commentaire_publication";
        $this->column   = ["commentaire_id","publication_id"];
        $this->filliale = ["commentaire_id","publication_id"];
    }
}
