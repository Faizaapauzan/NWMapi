<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechnicianPhotoupdate
 * 
 * @property int $id
 * @property int $jobregister_id
 * @property string|null $file_name
 * @property string|null $description
 * @property string|null $file_after
 * 
 * @property JobRegister $job_register
 *
 * @package App\Models
 */
class TechnicianPhotoupdate extends Model
{
	protected $table = 'technician_photoupdate';
	public $timestamps = false;

	protected $casts = [
		'jobregister_id' => 'int'
	];

	protected $fillable = [
		'jobregister_id',
		'file_name',
		'description',
		'file_after'
	];

	public function job_register()
	{
		return $this->belongsTo(JobRegister::class, 'jobregister_id');
	}
}
