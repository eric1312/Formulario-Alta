<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_fantasia','cuit_dni','razon_social','direccion','localidad','provincia',
        'email_admin','telefono_admin','tiene_movil_verificador','email_config_dealer',
        'telefono_config_dealer','comunicadores_puertos'
    ];

    public function contacts() { return $this->hasMany(Contact::class); }
    public function softguardAccounts() { return $this->hasMany(SoftguardAccount::class); }
    public function equipments() { return $this->hasMany(Equipment::class); }
    public function movilVerificadores() { return $this->hasMany(MovilVerificador::class); }
}
