<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class StaffRegister
 * 
 * @property int $staffregister_id
 * @property string|null $staff_fullname
 * @property string|null $employee_id
 * @property int|null $staff_phone
 * @property string|null $staff_email
 * @property string|null $staff_position
 * @property string|null $staff_department
 * @property string|null $staff_group
 * @property string|null $username
 * @property string|null $password
 * @property string|null $api_token
 * @property string|null $technician_group
 * @property string|null $technician_rank
 * @property string|null $job_ability
 * @property string $tech_avai
 * @property string $staffregistercreated_by
 * @property Carbon $staffregistercreated_at
 * @property string $staffregisterlastmodify_by
 * @property Carbon|null $staffregisterlastmodify_at
 * 
 * @property Collection|TechOff[] $tech_offs
 *
 * @package App\Models
 */
class StaffRegister extends Authenticatable
{

	use HasApiTokens, HasFactory, Notifiable;
	
	protected $table = 'staff_register';
	protected $primaryKey = 'staffregister_id';
	public $timestamps = false;

	protected $casts = [
		'staff_phone' => 'int'
	];

	protected $dates = [
		'staffregistercreated_at',
		'staffregisterlastmodify_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'staff_fullname',
		'employee_id',
		'staff_phone',
		'staff_email',
		'staff_position',
		'staff_department',
		'staff_group',
		'username',
		'password',
		'remember_token',
		'technician_group',
		'technician_rank',
		'job_ability',
		'tech_avai',
		'staffregistercreated_by',
		'staffregistercreated_at',
		'staffregisterlastmodify_by',
		'staffregisterlastmodify_at'
	];

	public function tech_offs()
	{
		return $this->hasMany(TechOff::class, 'staffregister_id');
	}
}
