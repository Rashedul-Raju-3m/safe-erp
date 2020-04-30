<?php

namespace App\Modules\File\Models;

use Illuminate\Database\Eloquent\Model;

use App;
use Auth;

class MemberFile extends Model {
	protected $table = 'file';
    protected $fillable = [
        'title',
        'discription',
        'file_link',
        'status',
        'file_day',
        'file_month',
        'file_year',
        'file_time',
        'file_date',
        'updated_by',
        'created_by',
    ];

    

    // TODO :: boot
    // boot() function used to insert logged user_id at 'created_by' & 'updated_by'
    public static function boot(){
        parent::boot();
        static::creating(function($query){
            if(Auth::check()){
                $query->created_by = Auth::user()->id;
            }
        });
        static::updating(function($query){
            if(Auth::check()){
                $query->updated_by = Auth::user()->id;
            }
        });
    }
}
