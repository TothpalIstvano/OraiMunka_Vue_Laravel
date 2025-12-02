@extends('layouts.app')
@section('title', '| Profilom')

@section('content')

        <div class="row ">
            <div class="col-12 md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title">{{ Auth::user()->name }}</div>
                        <p class="card-text">Profilja</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                        <li class="list-group-item">Regisztráció: {{ Auth::user()->created_at }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 md-6">
                <h3>Jelszócsere</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/profile/change-password" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="password">Jelszó</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Jelszó megerŐsitésE</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Jelszócsere</button>
                </form>
            </div>
        </div>
@endsection