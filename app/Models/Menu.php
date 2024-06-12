<?php

namespace App\Models;

use App\Models\Module;
use App\Models\GroupModuleMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'route',
        'view'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function group_module_menu()
    {
        return $this->hasOne(GroupModuleMenu::class);
    }
}

