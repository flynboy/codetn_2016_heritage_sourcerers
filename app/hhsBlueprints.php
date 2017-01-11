<?php

    namespace App;
    use Illuminate\Database\Eloquent\Model;
    
    class hhsBlueprints extends Model {
        protected $table = 'hhsBlueprints';
        
        protected $fillable = array('route','time','location','prizes');   
    }