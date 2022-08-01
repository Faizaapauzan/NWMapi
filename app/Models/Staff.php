<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Staff
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 *
 * @package App\Models
 */
class Staff extends Model
{
	protected $table = 'staff';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password'
	];
}
