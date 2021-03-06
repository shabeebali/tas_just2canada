<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $client_id
 * @property array $form_data
 * @property int $form_type_id
 * @property string $created_at
 * @mixin \Eloquent
 */
class FormSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'form_data',
        'form_type'
    ];

    protected $casts = [
        'form_data' => 'array'
    ];

    public function form_type(): BelongsTo
    {
        return $this->belongsTo(FormType::class);
    }

    public function remarks()
    {
        return $this->hasMany(FormRemark::class);
    }
}
