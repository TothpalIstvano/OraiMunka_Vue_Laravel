<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
</head>
<body>
    <h1>Todo list</h1>
    @if ($todos->count() > 0)
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo->task }}</td>
                    <td>{{ $todo->is_completed ? 'Completed' : 'Pending' }}</td>
                    <td>{{ $todo->created_at->format('Y-m-d') }}</td>
                    <td><button type="button" class="Modify">Modify</button></td>
                    <td><button type="button" class="Delete" data-id="{{ $todo->id }}">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    @else
        <p>No tasks available.</p>
    @endif
    </table>
    <div>Add new todo:
        <form action="/addTodo" method="POST">
            @csrf
            <input type="text" name="task" placeholder="Enter task" maxlength="40" required>
            <input type="checkbox" name="is_completed" id="is_completed" class="is_completed">
            <label for="is_completed" id="status_label">Pending</label>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit">Add</button>
        </form>
    </div>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    function escapeHtml(str) {
        return String(str || '').replace(/&/g, '&amp;')
                            .replace(/</g, '&lt;')
                            .replace(/>/g, '&gt;')
                            .replace(/"/g, '&quot;')
                            .replace(/'/g, '&#39;');
    }

    const checkbox = document.getElementById('is_completed');
    const label = document.getElementById('status_label');

    checkbox.addEventListener('change', function() {
        label.textContent = this.checked ? 'Completed' : 'Pending';
    });

    $(".Delete").on('click', function(){
        let thisBtn = $(this)
        let id = thisBtn.data("id")
        $.ajax({
            type: "POST",
            url: "/delete/Todo",
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

    // delegated Modify handler: toggles edit mode, Save sends AJAX to /updateTodo, Cancel restores
    $(".Modify").on('click', function(){
        let $btn = $(this);
        let $tr = $btn.closest('tr');

        if ($btn.data('mode') !== 'edit') {
            // enter edit mode — store originals
            let origTask = $tr.find('td').eq(0).text().trim();
            let origCompleted = $tr.find('td').eq(1).text().trim() === 'Completed';
            $tr.data('origTask', origTask);
            $tr.data('origCompleted', origCompleted);

            // replace cells with inputs
            $tr.find('td').eq(0).html('<input type="text" name="task_edit" value="' + escapeHtml(origTask) + '">');
            $tr.find('td').eq(1).html(
                '<input type="hidden" name="is_completed_edit" value="0">' +
                '<input type="checkbox" name="is_completed_edit" ' + (origCompleted ? 'checked' : '') + '>'
            );

            // switch buttons
            $btn.text('Save').data('mode', 'edit');
            if ($tr.find('.Cancel').length === 0) {
                $btn.after('<button type="button" class="Cancel">Cancel</button>');
            }
        } else {
            // save
            let id = $tr.find('.Delete').data('id');
            if(!id) return alert('Missing id');

            let newTask = $tr.find('input[name="task_edit"]').val();
            let completed = $tr.find('input[name="is_completed_edit"]').is(':checked') ? 1 : 0;

            $.ajax({
                type: 'POST',
                url: '/update/Todo',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    task: newTask,
                    is_completed: completed
                },
                dataType: 'json',
                success: function(res){
                    if(res && res.success){
                        // update row with returned values
                        $tr.find('td').eq(0).text(res.todo.task);
                        $tr.find('td').eq(1).text(res.todo.is_completed ? 'Completed' : 'Pending');
                        $btn.text('Modify').removeData('mode');
                        $tr.find('.Cancel').remove();
                    } else {
                        alert('Update failed');
                    }
                },
                error: function(){
                    alert('Update failed');
                }
            });
        }
    });

    // delegated Cancel handler
    $(document).on('click', '.Cancel', function(){
        let $tr = $(this).closest('tr');
        let origTask = $tr.data('origTask');
        let origCompleted = $tr.data('origCompleted');

        $tr.find('td').eq(0).text(origTask);
        $tr.find('td').eq(1).text(origCompleted ? 'Completed' : 'Pending');
        $tr.find('.Modify').text('Modify').removeData('mode');
        $(this).remove();
    });
</script>
