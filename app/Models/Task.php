<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo Task
 *
 * Representa una fila en la tabla tasks.
 */
class Task extends Model
{
    /**
     * Mass assignment
     *
     * Permite asignar estos campos en masa.
     */
    protected $fillable = [
        'title',
        'description',
        'completed'
    ];
}
