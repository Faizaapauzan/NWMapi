<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MachineList
 * 
 * @property int $machine_id
 * @property string|null $customer_name
 * @property string|null $machine_code
 * @property string|null $machine_brand
 * @property string|null $machine_type
 * @property string|null $serialnumber
 * @property Carbon|null $purchase_date
 * @property string|null $machine_name
 * @property string|null $machine_description
 * @property string|null $machinelistcreated_by
 * @property Carbon|null $machinelistcreated_at
 * @property string|null $machinelistlastmodify_by
 * @property Carbon|null $machinelistlastmodify_at
 *
 * @package App\Models
 */
class MachineList extends Model
{
	protected $table = 'machine_list';
	protected $primaryKey = 'machine_id';
	public $timestamps = false;

	protected $dates = [
		'purchase_date',
		'machinelistcreated_at',
		'machinelistlastmodify_at'
	];

	protected $fillable = [
		'customer_name',
		'machine_code',
		'machine_brand',
		'machine_type',
		'serialnumber',
		'purchase_date',
		'machine_name',
		'machine_description',
		'machinelistcreated_by',
		'machinelistcreated_at',
		'machinelistlastmodify_by',
		'machinelistlastmodify_at'
	];
}
