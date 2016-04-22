<?php

namespace brisgis;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FloodMap extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'flood_maps';

    private $id;
    private $barangay_id;
    private $return_period;
    private $shape;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'barangay_id', 'return_period', 'shape',
    ];



    public function getShapeAttribute(){
        $id =  $this->attributes['id'];
        $wkt = DB::table('flood_maps')->find( $id, array(DB::raw('ST_AsText(shape) AS shape')));
        $shape = $wkt->shape;
        return $shape;
     }


    public function barangay()
    {
        return $this->belongsTo('brisgis\Barangay');
    }

}
