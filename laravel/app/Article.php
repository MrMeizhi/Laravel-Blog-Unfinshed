<?php
/**
 * Created by PhpStorm.
 * User: meizhi
 * Date: 17-1-20
 * Time: 下午5:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{

    protected $table = 'meizhi_article';

    protected $primaryKey = 'id';

}