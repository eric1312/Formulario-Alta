<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftguardAccount extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','numero_cuenta','direccion_monitoreada','zonas','panel_protocolo','estado'];

    public function customer() { return $this->belongsTo(Customer::class); }
    public function receptoras() { return $this->hasMany(Receptora::class); }
    public function equipments() { return $this->hasMany(Equipment::class); }
}
