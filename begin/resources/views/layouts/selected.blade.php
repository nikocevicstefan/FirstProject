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
                @if($task->favorite == 0)
                    <form action="{{url('tasks')."/favorite/".$task->id }}" method="post">
                        <input type="image" src="/svg/yellowstar.svg" alt="Submit" width="20" height="20">
                        {{ method_field('PATCH') }}
                        {{csrf_field()}}
                    </form>

                @endif

            </td>

            <td style="width:51px;">
                @if($task->completed == 0)
                <form action="{{url('tasks')."/completed/".$task->id }}" method="post">
                    <input type="image" src="/svg/checked.svg" alt="Submit" width="20" height="20">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}
                </form>
                @endif
            </td>

            <td style="width:51px;">
                <form action="{{url('tasks')."/".$task->id }}" method="post">
                    <input type="image" src="/svg/error.svg" alt="Submit" width="20" height="20">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                </form>
            </td>

        </div>
    </tr>
        @endif
@endforeach
    </tbody>
</table>
</div>

{{--
<form method="POST" action="{/{ Url('/destroy') }/}">
    @foreach($tasks as $t)
        <label>
            <input type="checkbox" name="checked[]" value="{/{ $t->id }/}">
        </label>
    @endforeach
    <button type="submit">Submit!</button>
</form>--}}
