<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listacertificado extends Model
{
    protected $table = 'certificados.certificadoall';
	protected $fillable = ['fecingreso','fk_certifiid','fk_idalumcac','fecfirma','numcercacip'];
	protected $guarded = ['id'];

}