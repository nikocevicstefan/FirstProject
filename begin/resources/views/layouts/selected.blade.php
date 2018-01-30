<div class="form-group form-control">
<table class="table table-striped">
    <tbody>

@foreach($tasks as $task)
    @if(auth()->id() === $task->user_id)
    <tr>
        <div>
            <td colspan="5">
                <input type="checkbox"  name="checked[]" value="{{ $task->id }}">
            @if($task->completed == 1)
                <s>{{$task->body}}</s>
            @else
                {{$task->body}}
            @endif
            </td>
        </div>
        <div>
            <td style="width:51px;">
                @if($task->completed == 0)
                    @if($task->favorite == 0)
                        <a href="/tasks/favorite/{{$task->id}}" ><img src="/svg/yellowstar-empty.svg" width="20" height="20" ></a>
                    @else
                        <a href="/tasks/unfavorite/{{$task->id}}"><img src="/svg/yellowstar.svg" width="20" height="20" ></a>
                    @endif
                @endif
            </td>
            
            <td style="width:51px;">
                @if($task->completed == 0)
                    <a href="/tasks/completed/{{$task->id}}"><img src="/svg/checked.svg" width="20" height="20" ></a>
                @endif
            </td>

            <td style="width:51px;">
                <a href="/tasks/delete/{{$task->id}}"><img src="/svg/error.svg" width="20" height="20" ></a>
            </td>

        </div>
    </tr>
        @endif
@endforeach
    </tbody>
</table>
</div>
