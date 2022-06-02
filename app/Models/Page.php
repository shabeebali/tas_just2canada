<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $url_key
 * @property string $content
 * @property boolean $active
 * @property boolean $show_in_main_menu
 */
class Page extends Model
{
    use HasFactory;
}
