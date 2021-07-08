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
                    <div class="col-md-12">
                        <div class="tableOptional table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Developer</th>
                                    <th scope="col">Süre</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($devs as $dev)
                                <tr>
                                    <th scope="row">#</th>
                                    <td>DEV{{$loop->iteration}}</td>
                                    <td>{{$dev}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-right" colspan="2">Toplam Süre</td>
                                    <td>{{$getTotalTime}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="2">Toplam Bitirme Süresi (Hafta)</td>
                                    <td>{{$finisTime}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection
