<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitaciones';

    protected $primarykey = 'hab_id';

    public $timestamps = false;

    protected $fillable =['hab_id', 'hab_tip', 'hab_num', 'hab_cp'];
    
}
