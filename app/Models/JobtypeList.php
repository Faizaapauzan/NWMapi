<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobtypeList
 * 
 * @property int $jobtype_id
 * @property string $job_code
 * @property string $job_name
 * @property string|null $job_description
 * @property string $jobtypecreated_by
 * @property Carbon $jobtypecreated_at
 * @property string $jobtypelastmodify_by
 * @property Carbon $jobtypelastmodify_at
 *
 * @package App\Models
 */
class JobtypeList extends Model
{
	protected $table = 'jobtype_list';
	protected $primaryKey = 'jobtype_id';
	public $timestamps = false;

	protected $dates = [
		'jobtypecreated_at',
		'jobtypelastmodify_at'
	];

	protected $fillable = [
		'job_code',
		'job_name',
		'job_description',
		'jobtypecreated_by',
		'jobtypecreated_at',
		'jobtypelastmodify_by',
		'jobtypelastmodify_at'
	];
}
