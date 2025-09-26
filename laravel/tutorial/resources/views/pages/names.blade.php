@extends('layouts.app')
@section('title', '| Nevek')


@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>Név</th>
                    <th>Létrehozás</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($names as $name )
                <tr>
                    <td>{{ $name->id }}</td>
                    <td>{{ $name->name }}</td>
                    <td>{{ $name->created_at }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <!--ul>
            @foreach ($names as $name ) 
            
                <li @if ($name == 'Szabi')style="font-weight: bold; color: red" @endif>
                    @if($loop-> last) Utolsó: @endif
                    {{ $name }} 
                </li> 
            
            @endforeach
        </ul-->
    </div>

@endsection