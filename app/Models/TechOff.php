<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechOff
 * 
 * @property int $techOFF_id
 * @property int $staffregister_id
 * @property string $tech_name
 * @property string $reason
 * @property string $date_from
 * @property string $date_to
 * 
 * @property StaffRegister $staff_register
 *
 * @package App\Models
 */
class TechOff extends Model
{
	protected $table = 'tech_off';
	protected $primaryKey = 'techOFF_id';
	public $timestamps = false;

	protected $casts = [
		'staffregister_id' => 'int'
	];

	protected $fillable = [
		'staffregister_id',
		'tech_name',
		'reason',
		'date_from',
		'date_to'
	];

	public function staff_register()
	{
		return $this->belongsTo(StaffRegister::class, 'staffregister_id');
	}
}
