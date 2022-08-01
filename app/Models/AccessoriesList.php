<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessoriesList
 * 
 * @property int $accessories_id
 * @property string|null $accessories_code
 * @property string|null $accessories_name
 * @property string|null $accessories_uom
 * @property string|null $accessories_brand
 * @property string|null $accessories_description
 * @property string|null $file_name
 * @property string|null $accessorieslistcreated_by
 * @property Carbon|null $accessorieslistcreated_at
 * @property string|null $accessorieslistlasmodify_by
 * @property Carbon|null $accessorieslistlasmodify_at
 * 
 * @property Collection|JobAccessory[] $job_accessories
 *
 * @package App\Models
 */
class AccessoriesList extends Model
{
	protected $table = 'accessories_list';
	protected $primaryKey = 'accessories_id';
	public $timestamps = false;

	protected $dates = [
		'accessorieslistcreated_at',
		'accessorieslistlasmodify_at'
	];

	protected $fillable = [
		'accessories_code',
		'accessories_name',
		'accessories_uom',
		'accessories_brand',
		'accessories_description',
		'file_name',
		'accessorieslistcreated_by',
		'accessorieslistcreated_at',
		'accessorieslistlasmodify_by',
		'accessorieslistlasmodify_at'
	];

	public function job_accessories()
	{
		return $this->hasMany(JobAccessory::class, 'accessories_id');
	}
}
