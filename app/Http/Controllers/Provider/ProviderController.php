<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Repositories\Provider\ProviderRepository;

use App\Http\Requests\Provider\ProviderStore;
use App\Http\Requests\Provider\ProviderUpdate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    protected $providers;
    protected $x = 1;
    protected $time = 0;
    protected $week = 45;

    public function __construct(ProviderRepository $providers)
    {
        $this->providers = $providers;
    }

    public function index(Request $request)
    {
        $url = $this->providers->getUrl();
        $providers = $this->providers->getProvider($url);
        $data['getTotalTime'] = $this->providers->getTotalTime($providers);
        $data['devs'] = $this->providers->getDevCount($providers, 5);
        $data['finisTime'] = $data['getTotalTime'] / $this->week ;
        return view('provider.list', $data);
    }

    public function create()
    {
        return view('provider.create');
    }

    public function store(ProviderStore $request)
    {
        $url = $request->input('provider');
        $providers = $this->providers->getProvider($url);
        $this->providers->setCreate($providers);
        return redirect()->route('provider.index');
    }
}
