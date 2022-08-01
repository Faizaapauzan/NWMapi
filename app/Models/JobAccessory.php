<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobAccessory
 * 
 * @property int $id
 * @property int|null $jobregister_id
 * @property int|null $accessories_id
 * @property string $accessories_code
 * @property string $accessories_name
 * @property string|null $accessories_uom
 * @property int|null $accessories_quantity
 * @property string|null $accessories_status
 * @property string $accessories_remark
 * @property Carbon $accessoriesregister_at
 * @property Carbon $accessoriesmodify_at
 * 
 * @property JobRegister|null $job_register
 * @property AccessoriesList|null $accessories_list
 *
 * @package App\Models
 */
class JobAccessory extends Model
{
	protected $table = 'job_accessories';
	public $timestamps = false;

	protected $casts = [
		'jobregister_id' => 'int',
		'accessories_id' => 'int',
		'accessories_quantity' => 'int'
	];

	protected $dates = [
		'accessoriesregister_at',
		'accessoriesmodify_at'
	];

	protected $fillable = [
		'jobregister_id',
		'accessories_id',
		'accessories_code',
		'accessories_name',
		'accessories_uom',
		'accessories_quantity',
		'accessories_status',
		'accessories_remark',
		'accessoriesregister_at',
		'accessoriesmodify_at'
	];

	public function job_register()
	{
		return $this->belongsTo(JobRegister::class, 'jobregister_id');
	}

	public function accessories_list()
	{
		return $this->belongsTo(AccessoriesList::class, 'accessories_id');
	}
}
