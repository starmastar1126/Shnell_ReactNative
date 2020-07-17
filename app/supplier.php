<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $table ='supplier_data';
    public $primaryKey='supplierid';
    public $timestamps=true;
}
