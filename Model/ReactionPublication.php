<?php

class ReactionPublicationModel  extends Model{
    public function __construct(){
        Parent::__construct();
        $this->table = "reaction_publication";
        $this->column   = ["reaction_id","publication_id","author_id"];
        $this->filliale = ["reaction_id","publication_id","author_id"];
    }
}
