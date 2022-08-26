@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>Rank</th>
                    <th>User</th>
                    <th>Level</th>
                    <th>Timestamp</th>
                    @if(Auth::check() && in_array(Auth::user()->email, config('app.admin')))<th>Email</th>@endif
                </tr>
                @foreach($users as $participant)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $participant->name }}</th>
                    <th>{{ ($participant->level >= count(config('app.qs')))?"Done":$participant->level }}</th>
                    <th>{{ $participant->updated_at }}</th>
                    @if(Auth::check() && in_array(Auth::user()->email, config('app.admin')))<th>{{ $participant->email }}</th>@endif
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</div>
@endsection