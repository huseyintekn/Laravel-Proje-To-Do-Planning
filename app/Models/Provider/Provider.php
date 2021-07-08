<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Model;


use App\Concerns\Filterable;


class Provider extends Model
{

	use Filterable;

	protected $table = 'provider';
	protected $primaryKey = 'provider_id';
	protected $guarded = ['provider_id'];

	protected $hidden = [
		'provider_id',
		'date_created',
		'date_modified',
		'status',
	];

	protected $sortable = [
		'provider_id',
		'status',
		'date_created',
		'date_modified',
	];

	const CREATED_AT = 'date_created';
	const UPDATED_AT = 'date_modified';

	public function getSortable()
	{
		return $this->sortable;
	}
}
