<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator_data extends Model
{
    use HasFactory;
    protected $table = 'tb_obs_indicator_data_cualitative';
    protected $fillable = ['indicator_data_description','indicador_id','indicator_region_id']; //indicator_sub_variable_id, indicator_variable_type_id
    //protected $hidden = ['indicator_reference_id'];
    
    public function getIndicatorDataCualitativebyId($indicator_id){ return DB::statement('call getIndicatorDataCualitativebyId(?)',[$indicator_id]);}
   
}
