<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['bill_name', 'amount', 'due_date', 'recurring', 'category'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
