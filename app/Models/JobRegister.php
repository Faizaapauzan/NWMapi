<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobRegister
 * 
 * @property int $jobregister_id
 * @property Carbon $today_date
 * @property string $job_code
 * @property string $job_name
 * @property string $job_order_number
 * @property string $job_description
 * @property int $staffregister_id
 * @property string $job_assign
 * @property string|null $technician_rank
 * @property string|null $staff_position
 * @property string $job_cancel
 * @property string|null $Job_assistant
 * @property string $Job_assistant2
 * @property string $Job_assistant3
 * @property string $Job_assistant4
 * @property string $job_status
 * @property string $reason
 * @property string $customer_code
 * @property string $customer_name
 * @property string $customer_grade
 * @property int $job_priority
 * @property Carbon $requested_date
 * @property Carbon $delivery_date
 * @property string $customer_PIC
 * @property string $cust_phone1
 * @property string $cust_phone2
 * @property string $cust_address1
 * @property string $cust_address2
 * @property string $cust_address3
 * @property string $machine_code
 * @property string $machine_name
 * @property string $machine_type
 * @property string $machine_brand
 * @property string|null $serialnumber
 * @property string $srvcreportdate
 * @property string $accessories_required
 * @property string|null $technician_departure
 * @property string|null $technician_arrival
 * @property string|null $technician_leaving
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string $jobregistercreated_by
 * @property Carbon $jobregistercreated_at
 * @property string $jobregisterlastmodify_by
 * @property Carbon $jobregisterlastmodify_at
 * 
 * @property Collection|JobAccessory[] $job_accessories
 * @property Collection|Servicereport[] $servicereports
 * @property Collection|TechnicianPhotoupdate[] $technician_photoupdates
 * @property Collection|TechnicianRemark[] $technician_remarks
 * @property Collection|TechnicianVideoupdate[] $technician_videoupdates
 *
 * @package App\Models
 */
class JobRegister extends Model
{
	protected $table = 'job_register';
	protected $primaryKey = 'jobregister_id';
	public $timestamps = false;

	protected $casts = [
		'staffregister_id' => 'int',
		'job_priority' => 'int'
	];

	protected $dates = [
		'today_date',
		'requested_date',
		'delivery_date',
		'jobregistercreated_at',
		'jobregisterlastmodify_at'
	];

	protected $fillable = [
		'today_date',
		'job_code',
		'job_name',
		'job_order_number',
		'job_description',
		'staffregister_id',
		'job_assign',
		'technician_rank',
		'staff_position',
		'job_cancel',
		'Job_assistant',
		'Job_assistant2',
		'Job_assistant3',
		'Job_assistant4',
		'job_status',
		'reason',
		'customer_code',
		'customer_name',
		'customer_grade',
		'job_priority',
		'requested_date',
		'delivery_date',
		'customer_PIC',
		'cust_phone1',
		'cust_phone2',
		'cust_address1',
		'cust_address2',
		'cust_address3',
		'machine_code',
		'machine_name',
		'machine_type',
		'machine_brand',
		'serialnumber',
		'srvcreportdate',
		'accessories_required',
		'technician_departure',
		'technician_arrival',
		'technician_leaving',
		'latitude',
		'longitude',
		'jobregistercreated_by',
		'jobregistercreated_at',
		'jobregisterlastmodify_by',
		'jobregisterlastmodify_at'
	];

	public function job_accessories()
	{
		return $this->hasMany(JobAccessory::class, 'jobregister_id');
	}

	public function servicereports()
	{
		return $this->hasMany(Servicereport::class, 'jobregister_id');
	}

	public function technician_photoupdates()
	{
		return $this->hasMany(TechnicianPhotoupdate::class, 'jobregister_id');
	}

	public function technician_remarks()
	{
		return $this->hasMany(TechnicianRemark::class, 'jobregister_id');
	}

	public function technician_videoupdates()
	{
		return $this->hasMany(TechnicianVideoupdate::class, 'jobregister_id');
	}
}
