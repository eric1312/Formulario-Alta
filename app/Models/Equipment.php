<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','softguard_account_id','marca','modelo','numero_serie','estado','observaciones'];

    public function customer() { return $this->belongsTo(Customer::class); }
    public function softguardAccount() { return $this->belongsTo(SoftguardAccount::class); }
}
