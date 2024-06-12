<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'prefix',
        'code',
        'name',
        'icon'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'module_groups', 'module_id', 'group_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_modules', 'module_id', 'menu_id');
    }
}
