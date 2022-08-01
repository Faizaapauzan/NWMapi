<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerList
 * 
 * @property int $customer_id
 * @property string|null $customer_code
 * @property string|null $customer_name
 * @property string|null $customer_grade
 * @property string|null $customer_PIC
 * @property string|null $cust_phone1
 * @property string|null $cust_phone2
 * @property string|null $cust_address1
 * @property string|null $cust_address2
 * @property string|null $cust_address3
 * @property string|null $customercreated_by
 * @property Carbon|null $customercreated_at
 * @property string|null $customerlasmodify_by
 * @property Carbon|null $customerlasmodify_at
 *
 * @package App\Models
 */
class CustomerList extends Model
{
	protected $table = 'customer_list';
	protected $primaryKey = 'customer_id';
	public $timestamps = false;

	protected $dates = [
		'customercreated_at',
		'customerlasmodify_at'
	];

	protected $fillable = [
		'customer_code',
		'customer_name',
		'customer_grade',
		'customer_PIC',
		'cust_phone1',
		'cust_phone2',
		'cust_address1',
		'cust_address2',
		'cust_address3',
		'customercreated_by',
		'customercreated_at',
		'customerlasmodify_by',
		'customerlasmodify_at'
	];
}
