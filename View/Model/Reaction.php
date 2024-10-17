<?php

class ReactionModel  extends Model{
    public function __construct(){
        Parent::__construct();
        $this->table = "Reaction";
        $this->column   = ['id', 'label', 'image'];
        $this->filliale = ['label', 'image'];
    }
}
