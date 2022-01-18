@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ini Halaman Kantin') }}</div>

                <div class="card-body">
                    <?php 
                        $role = Auth::user()->role;
                        $name = Auth::user()->name
                    ?>
                    @if ($role == '3')
                    <div class="alert alert-success" role="alert">
                        {{ __('Berhasil login sebagai '. $name) }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
