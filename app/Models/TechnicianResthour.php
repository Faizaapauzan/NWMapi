<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechnicianResthour
 * 
 * @property int $resthour_id
 * @property string|null $technician
 * @property string|null $tech_out
 * @property string|null $tech_in
 * @property string|null $Ass_1
 * @property string|null $Ass1_out
 * @property string|null $Ass1_in
 * @property string|null $Ass_2
 * @property string|null $Ass2_out
 * @property string|null $Ass2_in
 * @property string|null $Ass_3
 * @property string|null $Ass3_out
 * @property string|null $Ass3_in
 * @property string|null $Ass_4
 * @property string|null $Ass4_out
 * @property string|null $Ass4_in
 * @property string|null $today_date
 *
 * @package App\Models
 */
class TechnicianResthour extends Model
{
	protected $table = 'technician_resthour';
	protected $primaryKey = 'resthour_id';
	public $timestamps = false;

	protected $fillable = [
		'technician',
		'tech_out',
		'tech_in',
		'Ass_1',
		'Ass1_out',
		'Ass1_in',
		'Ass_2',
		'Ass2_out',
		'Ass2_in',
		'Ass_3',
		'Ass3_out',
		'Ass3_in',
		'Ass_4',
		'Ass4_out',
		'Ass4_in',
		'today_date'
	];
}
