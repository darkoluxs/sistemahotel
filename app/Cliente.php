<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // table name
    protected $table = 'clientes';
    //primary key
    protected $primaryKey ='cli_id';
    
    public $timestamps = false; 
    
    protected $fillable =['cli_id', 'cli_name', 'cli_apellido', 'cli_email', 'cli_telefono'];
    
}
