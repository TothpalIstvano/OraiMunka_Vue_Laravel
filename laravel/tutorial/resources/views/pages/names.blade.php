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
                    <th>Müveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($names as $name )
                <tr>
                    <td>{{ $name->id }}</td>
                    @empty($name->family)
                    <td><strong>Nincs adat</strong></td>
                    @else
                    <td>{{ $name->family->surname }}</td>
                    @endempty
                    <td>{{ $name->name }}</td>
                    <td>{{ $name->created_at }}</td>
                    <td><a href="#" class="btn btn-sn btn-danger btn-delete-name" data-id="{{ $name->id }}">Törlés</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
            <h3 class="mt-3">Új Név hozzáadása</h3>
            <form method="post" action="/names/manage/name/new">
                @csrf
                <div class="form-group">
                    <label for="inputFamily">Családnév</label>
                    <select class="form-control" id="inputFamily" name="inputFamily">
                        @foreach ($families as $family)
                            <option value="{{ $family->id }}">{{ $family->surname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputName">Keresztnév</label>
                    <input type="text" class="form-control" id="inputName" name="inputName">
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
                url: "/names/delete",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function(){
                    thisBtn.closest('tr').fadeOut();
                },
                error: function(){ 
                        alert('Hiba a törlés során!');
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