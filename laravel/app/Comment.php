<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{



    protected $table = 'meizhi_discuss';

    protected $primaryKey = 'id';

    public $timestamps = false;


}