<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TechJoblist
 * 
 * @property int $jobregister_id
 * @property string|null $technician_rank
 * @property string $job_assign
 * @property string $job_order_number
 * @property int $job_priority
 * @property string $customer_name
 * @property string $machine_type
 * @property string $job_description
 * @property string $accessories_required
 * @property string $job_status
 * @property Carbon $jobregisterlastmodify_at
 *
 * @package App\Models
 */
class TechJoblist extends Model
{
	protected $table = 'tech_joblist';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jobregister_id' => 'int',
		'job_priority' => 'int'
	];

	protected $dates = [
		'jobregisterlastmodify_at'
	];

	protected $fillable = [
		'jobregister_id',
		'technician_rank',
		'job_assign',
		'job_order_number',
		'job_priority',
		'customer_name',
		'machine_type',
		'job_description',
		'accessories_required',
		'job_status',
		'jobregisterlastmodify_at'
	];
}
