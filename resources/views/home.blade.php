@extends('layouts.app')

@section('content')
<div class="container">
	@if(\Session::has('error'))
		<div class="alert alert-danger">
		{{\Session::get('error')}}
		</div>
	@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
					<?php if(auth()->user()->isAdmin == 1) {?>
						<div class="panel-body">
							<a href="{{url('admin/routes')}}">Admin</a>
						</div>
					<?php } else echo '<div class="panel-heading">Normal user</div>';?>
                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
