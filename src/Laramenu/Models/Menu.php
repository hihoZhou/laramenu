<?php
namespace HihoZhou\Laramenu\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Menu.php.
 *
 *
 * @author    HihoZhou <HihoZhou.github.io>
 * @email     HihoZhou@gmail.com
 * Time: 16-11-14 下午2:41
 */
class Menu extends Model
{
    public function parent()
    {

        return $this->belongsTo('HihoZhou\Laramenu\Models\Menu', 'pid', 'id');
    }

    public function childs()
    {

        return $this->hasMany('HihoZhou\Laramenu\Models\Menu', 'pid', 'id');
    }
}