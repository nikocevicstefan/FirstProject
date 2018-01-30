@extends('master')

@section('content')
    <div class="container">



        <div class="form-group">
            <form action="/tasks" method="POST">

                {{csrf_field()}}

                <table>

                    <tr>
                        <td><strong>Add to-do items:</strong></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" class="form-control" style="margin-bottom: 1%" name="body" placeholder="todo item">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>

                </table>

            </form>
        </div>

        <div class="form-group form-control">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/tasks">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/active">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/completed">Completed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/favorite">Favorite</a>
                </li>
            </ul>
            <form method="POST" action="{{ Url('/tasks/destroy') }}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
            @include('layouts.selected')
                <button type="submit" class="btn btn-danger">Remove all!</button>

            </form>

        </div>
    </div>





@endsection
