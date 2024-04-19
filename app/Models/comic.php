<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comic extends Model
{
    use HasFactory;

    // Utilizzo del trait SoftDeletes per consentire la cancellazione "soft" dei fumetti in questo caso
    use SoftDeletes;
}
