<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MImpian extends Model
{
    protected $table = "impian";

    protected $fillable = ['nama_impian','harapan_tercapai'];
}
