@extends('layouts.app')
@section('title', '| Családnevek')


@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>Családnév</th>
                    <th>Létrehozás</th>
                    <th>Müveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($names as $name )
                <tr>
                    <td>{{ $name->id }}</td>
                    <td>{{ $name->surname }}</td>
                    <td>{{ $name->created_at }}</td>
                    <td><a href="#" class="btn btn-sn btn-danger btn-delete-name" data-id="{{ $name->id }}">Törlés</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3 class="mt-3">Új Családnév hozzáadása</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="/names/manage/surname/new">
            @csrf
            <div class="form-group">
                <label for="inputFamily">Családnév</label>
                <input type="text" class="form-control" id="inputFamily" name="inputFamily" value="{{ old('inputFamily') }}" minlength="2" maxlength="20" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Hozzáadás</button>
        </form>
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

@section('scripts')
    <script>
        $(".btn-delete-name").on('click', function(){
            let thisBtn = $(this);
            let id = thisBtn.data('id');
            $.ajax({
                type: "POST",
                url: "/names/manage/surname/delete",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function(data){
                    if(data.success === true) {
                        thisBtn.closest('tr').fadeOut();
                    } else {
                        alert('Hiba a törlés során!\nRészletek: ' + data.message);
                    }
                }
                });
            });
    </script>
@endsection
    <script>
        /*
        document.addEventListener('DOMContentLoaded', function() {
            let deleteButtons = document.querySelectorAll('.btn-delete-name');
            deleteButtons.forEach(function(button) {
                let id = this.dataset.id;

                let fromData = new FormData();
                fromData.append('_token', '{{ csrf_token() }}');
                fromData.append('id', id);

                fetch('/names/delete', {
                    method: 'POST',
                    body: fromData
                })
                .then(response => {
                    if (response.ok) {
                        throw new Error('Hiba a törlés során!');
                    }
                    return response;})
                .then(() => {
                    let row = button.closest('tr');
                    row.style.display = 'none';
                })
                .catch(error => {
                    alert(error.message);
                });
            });
        });
    */
    </script>