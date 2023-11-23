@foreach($tasks as $task)
<tr>
    <th>{{$task->nom}}</th>
    <td>{{$task->description}}</td>
    @can('edit-Tasks')
    <td class="d-flex gap-2 justify-content-center">
      <form action="{{ route('edit.task', ['id' => $task->id]) }}" method="GET">
        <button type="submit" class="btn btn-success">
            Modifier
        </button>
      </form>

        <form action="{{route('delete.task', ['id' => $task->id]) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-danger">
                Supprimer
            </button>
        </form>

    </td>
@endcan



</tr>
@endforeach
<tr>
    <td colspan="3" align="center">
        {!! $tasks->links() !!}
    </td>
</tr>