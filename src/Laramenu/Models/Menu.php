<?php
namespace hihozhou\Laramenu\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Menu.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-11-14 下午2:41
 */
class Menu extends Model
{
    public function parent()
    {

        return $this->belongsTo('hihozhou\Laramenu\Models\Menu', 'pid', 'id');
    }

    public function childs()
    {

        return $this->hasMany('hihozhou\Laramenu\Models\Menu', 'pid', 'id');
    }
}