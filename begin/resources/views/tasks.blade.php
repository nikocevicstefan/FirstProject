@extends('master')

@section('content')
    <div class="container">



        <div class="form-group">
            <form action="/tasks" method="POST">

                {{csrf_field()}}

                <table >

                    <tr>
                        <td><h2 style="width: 965px">Add todo items</h2></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" class="form-control" name="body" placeholder="todo item" >
                        </td>
                        <td>
                            <button type="submit" class="btn btn-default"
                                    style="margin-bottom: 0.3%;
                                     margin-left: 100%;
                                     border:solid 1px #007bff;
                                     color: #007bff;">Add</button>
                        </td>
                    </tr>

                </table>

            </form>
        </div>

        <div class="form-group form-control" >
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/">All</a>
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
            <form method="POST" action="{{ url('/tasks/destroy') }}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
            @include('layouts.selected')
                <button type="submit" class="btn btn-danger" style="margin-bottom: 10px">Remove all</button>
            </form>

        </div>
    </div>





@endsection
