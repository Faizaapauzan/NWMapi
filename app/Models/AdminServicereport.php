<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminServicereport
 * 
 * @property int $servicereport_id
 * @property string $date
 * @property string $customer_name
 * @property string $cust_phone1
 * @property string $job_name
 * @property string $job_assign
 * @property string $technician_arrival
 * @property string $technician_leaving
 * @property string $machine_name
 * @property string $serialnumber
 * @property string $srvcreportnumber
 * @property string $report
 * @property string $Issue_By
 * @property string $cust
 * @property string $custphone
 * @property string $Travel_Time
 * @property string|null $remark_desc
 * @property string|null $remark_solution
 *
 * @package App\Models
 */
class AdminServicereport extends Model
{
	protected $table = 'admin_servicereports';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'servicereport_id' => 'int'
	];

	protected $fillable = [
		'servicereport_id',
		'date',
		'customer_name',
		'cust_phone1',
		'job_name',
		'job_assign',
		'technician_arrival',
		'technician_leaving',
		'machine_name',
		'serialnumber',
		'srvcreportnumber',
		'report',
		'Issue_By',
		'cust',
		'custphone',
		'Travel_Time',
		'remark_desc',
		'remark_solution'
	];
}
