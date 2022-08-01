<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechAttendance
 * 
 * @property int $attID
 * @property string $techname
 * @property string $att_date
 * @property string $clock_in
 * @property string $clock_out
 *
 * @package App\Models
 */
class TechAttendance extends Model
{
	protected $table = 'tech_attendance';
	protected $primaryKey = 'attID';
	public $timestamps = false;

	protected $fillable = [
		'techname',
		'att_date',
		'clock_in',
		'clock_out'
	];
}
