<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupModuleMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_id',
        'module_id',
        'menu_id',
        'show',
        'create',
        'update',
        'delete'
    ];
}
