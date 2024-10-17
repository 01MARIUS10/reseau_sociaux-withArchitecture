<?php

class CommentaireModel  extends Model{
    public function __construct(){
        Parent::__construct();
        $this->table = "Commentaire";
        $this->column = ["id","title"];
        $this->filliale = ['description', 'author_id'];
    }

    public function getCommentsFromPub($id){
        $sql = <<<EOD
            SELECT c.*, u.nom, u.prenom, u.email
            FROM Commentaire c
            JOIN User u ON c.author_id = u.id
            JOIN commentaire_publication cp ON c.id = cp.commentaire_id
            WHERE cp.publication_id = ?;
        EOD;
        
        $this->query($sql)->execute([$id]);
        return $this->fetchAll();
    }

}
