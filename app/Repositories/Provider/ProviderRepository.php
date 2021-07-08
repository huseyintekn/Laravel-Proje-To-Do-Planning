<?php

namespace App\Repositories\Provider;

use App\Models\Provider\Provider;

class ProviderRepository implements ProviderRepositoryInterface
{
    public function  getUrl()
    {
        return 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa';
    }
    public function getProvider($url)
    {
        $url = file_get_contents($url);
        $attributes = json_decode($url, true);
        return $attributes;
    }

    public function getTotalTime(array $attributes){
        $totalTime = 0;
        foreach ($attributes as $attribute){
            $totalTime += $attribute['sure'];
        }
        return $totalTime;
    }

    public function getDevTime(array $attributes, $developer){
        $time = 0;
        foreach ($attributes as $attribute){
            if ($attribute['zorluk'] == $developer){
                $time += $attribute['sure'];
            }
        }
        return $time;
    }

    public function getDev(array $attributes, $developer, $level)
    {
        $time = 0;
        foreach ($attributes as $attribute){
            if ($attribute['zorluk'] == $level){
                $dev = $attribute['sure'] * $level;
                $devTotal = $dev / $developer;
                $time += $devTotal;
            }
        }
        return $time;
    }

    public  function getDevCount(array $attibutes, $count){
        $data = array();
        for ($i=1; $i <= $count; $i++){
           $data[] =$this->getDev($attibutes, $i, $i);
        }
        return $data;
    }

	public function getById($provider_id)
	{
		return Provider::find($provider_id);
	}

	public function getByField($field, $value)
	{
		return Provider::where($field, $value)->first();
	}

	public function getAll()
	{
		return Provider::all();
	}

	public function setCreate(array $attributes)
	{
	    foreach ($attributes as $attribute){
            $provider = Provider::create([
                'task'              => (isset($attribute['id']) && !empty($attribute['id'])) ? $attribute['id'] : '',
                'time'              => (isset($attribute['sure']) && !empty($attribute['sure'])) ? $attribute['sure'] : '',
                'difficulty'        => (isset($attribute['zorluk']) && !empty($attribute['zorluk'])) ? $attribute['zorluk'] : '',
                'date_created'		=> now(),
                'date_modified'		=> now()
            ]);
        }
		return;
	}

	public function setUpdate(array $attributes, $provider_id)
	{
        $provider = Provider::find($provider_id)->update([
            'task'              => (isset($attributes['id']) && !empty($attributes['id'])) ? $attributes['id'] : '',
            'time'              => (isset($attributes['sure']) && !empty($attributes['sure'])) ? $attributes['sure'] : '',
            'difficulty'        => (isset($attributes['zorluk']) && !empty($attributes['zorluk'])) ? $attributes['zorluk'] : '',
            'date_modified'		=> now()
        ]);
		return;
	}
}
