<?php

namespace App\Repositories\Provider;

interface ProviderRepositoryInterface
{
	public function getById($provider_id);

	public function getByField($field, $value);

	public function getAll();

	public function setCreate(array $attributes);

	public function setUpdate(array $attributes, $provider_id);

	public function getProvider($url);

    public function getTotalTime(array $attributes);

	public function getDevTime(array $attributes, $developer);

	public function getDev(array $attributes, $developer, $level);

	public function getDevCount(array $attibutes, $count);


}
