<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class vdmtcustomer extends Authenticatable
{
    use Notifiable;

    protected $table = 'vdmtcustomer';

    protected $fillable = [
        'vdmtcusemail','vdmtcuspassword',
    ];
    
    protected $hidden = [
        'vdmtcuspassword',
    ];
    public function getAuthPassword() { return $this->vdmtcuspassword; }
}
