@extends('environment.skeleton_app')
@section('title', trans('dashboard/dashboard.heading_title'))
@section('content')
<div class="p-0 mt-0">
    <div class="card">
        <div class="col-md-12">
            <div class="card-body"></div>
        </div>
    </div>
</div>
<div class="container mt-3" id="">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{route('provider.store')}}" method="post" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="provider" class="form-label">Provider Ekle</label>
                                <input type="url" class="form-control  @error('provider') is-invalid @enderror" name="provider" id="provider" aria-describedby="Provider Ekle">
                                @error('provider')
                                <p class="alert alert-danger rounded-0 mb-0 mt-2 p-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
