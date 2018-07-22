<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "datatable";
    protected $fillable = ["Exam","CODE","EIIN","BOARD","YEAR","NAME","DISTRICT","THANA","FATHER","STUDENT","GRADE"];
}
