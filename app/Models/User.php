<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Concerns\Filterable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Filterable, SoftDeletes;

	protected $table = 'user';
	protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

	protected $sortable = [
		'user_id',
		'status',
		'date_created',
		'date_modified',
	];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	const CREATED_AT = 'date_created';
	const UPDATED_AT = 'date_modified';
	const DELETED_AT = 'date_deleted';

	public function getSortable()
	{
		return $this->sortable;
	}

}
