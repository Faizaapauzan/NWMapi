<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogIn
 * 
 * @property int $login_id
 * @property string|null $username
 * @property string $staff_position
 * @property string $password
 * @property Carbon $log_in_at
 *
 * @package App\Models
 */
class LogIn extends Model
{
	protected $table = 'log_in';
	protected $primaryKey = 'login_id';
	public $timestamps = false;

	protected $dates = [
		'log_in_at'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'staff_position',
		'password',
		'log_in_at'
	];
}
