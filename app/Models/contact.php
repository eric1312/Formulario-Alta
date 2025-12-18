<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','nombre','telefono','email','parentesco','principal'];

    public function customer() { return $this->belongsTo(Customer::class); }
}
