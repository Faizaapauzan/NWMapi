<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechnicianVideoupdate
 * 
 * @property int $id
 * @property int|null $jobregister_id
 * @property string|null $video_url
 * @property string|null $description
 * 
 * @property JobRegister|null $job_register
 *
 * @package App\Models
 */
class TechnicianVideoupdate extends Model
{
	protected $table = 'technician_videoupdate';
	public $timestamps = false;

	protected $casts = [
		'jobregister_id' => 'int'
	];

	protected $fillable = [
		'jobregister_id',
		'video_url',
		'description'
	];

	public function job_register()
	{
		return $this->belongsTo(JobRegister::class, 'jobregister_id');
	}
}
