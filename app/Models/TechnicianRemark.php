<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechnicianRemark
 * 
 * @property int $id
 * @property int $jobregister_id
 * @property string|null $remark_desc
 * @property string|null $remark_solution
 * 
 * @property JobRegister $job_register
 *
 * @package App\Models
 */
class TechnicianRemark extends Model
{
	protected $table = 'technician_remark';
	public $timestamps = false;

	protected $casts = [
		'jobregister_id' => 'int'
	];

	protected $fillable = [
		'jobregister_id',
		'remark_desc',
		'remark_solution'
	];

	public function job_register()
	{
		return $this->belongsTo(JobRegister::class, 'jobregister_id');
	}
}
