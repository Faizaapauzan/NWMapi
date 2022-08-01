<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceReport
 * 
 * @property int $jobregister_id
 * @property string $job_order_number
 * @property string $job_name
 * @property string $job_assign
 * @property string $customer_name
 * @property string $cust_phone1
 * @property string $machine_name
 * @property string|null $serialnumber
 * @property string|null $technician_arrival
 * @property string|null $technician_departure
 * @property string|null $technician_leaving
 * @property string $srvcreportdate
 * @property Carbon $requested_date
 * @property string|null $remark_desc
 * @property string|null $remark_solution
 *
 * @package App\Models
 */
class ServiceReport extends Model
{
	protected $table = 'service_report';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jobregister_id' => 'int'
	];

	protected $dates = [
		'requested_date'
	];

	protected $fillable = [
		'jobregister_id',
		'job_order_number',
		'job_name',
		'job_assign',
		'customer_name',
		'cust_phone1',
		'machine_name',
		'serialnumber',
		'technician_arrival',
		'technician_departure',
		'technician_leaving',
		'srvcreportdate',
		'requested_date',
		'remark_desc',
		'remark_solution'
	];
}
