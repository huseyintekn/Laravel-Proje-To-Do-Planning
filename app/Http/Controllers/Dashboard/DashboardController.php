<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Catalog\Provider\ProviderRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $providers;

    public function __construct(ProviderRepository $providers)
    {
        $this->providers = $providers;
    }

    public function index()
    {
        $data['providers'] = $this->providers->getAll();
        return view('dashboard.dashboard', $data);
    }

	public function ajax()
	{
        $data['providers'] = $this->providers->getAll();
        return response()->json($data['providers'], 200);
	}

}
