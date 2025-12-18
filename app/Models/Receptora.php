<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptora extends Model
{
    use HasFactory;

    protected $fillable = ['softguard_account_id','marca','modelo','puerto','ip','observaciones'];

    public function softguardAccount() { return $this->belongsTo(SoftguardAccount::class); }
}
