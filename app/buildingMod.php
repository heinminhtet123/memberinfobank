<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buildingMod extends Model
{
    protected $fillable=['buildingDesc','active','remark'];
	protected $primaryKey='buildingId';
}
