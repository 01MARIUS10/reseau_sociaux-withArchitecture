<?php

class PublicationModel  extends Model{
    public function __construct(){
        Parent::__construct();
        $this->table = "Publication";
        $this->column = ["id","titre"];
        $this->filliale = ['titre', 'description', 'author_id'];
    }

    public function getAllPubs(){
        $sql = <<<EOD
            SELECT 
                p.id AS publication_id,
                p.titre,
                p.description,
                u.nom AS auteur_nom,
                u.prenom AS auteur_prenom,
                
                COUNT(DISTINCT c.id) AS count_comments,
                COUNT(DISTINCT rp.reaction_id) AS count_reactions

            FROM 
                Publication p

            LEFT JOIN User u ON p.author_id = u.id

            LEFT JOIN commentaire_publication cp ON p.id = cp.publication_id
            LEFT JOIN Commentaire c ON cp.commentaire_id = c.id

            LEFT JOIN reaction_publication rp ON p.id = rp.publication_id

            GROUP BY 
                p.id, u.id;
        EOD;
        
        $this->query($sql)->execute();
        return $this->fetchAll();
    }
}
