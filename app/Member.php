<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tbl_member';
    protected $primaryKey = 'member_id';
    public $incrementing = false;
}
