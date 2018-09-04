{{-- Admin Page --}}


@extends('layouts.admin')
    @section('content')
    <div class= "content">
        <div class="title m-b-md">
            <h1>Start!</h1>
        </div>
        <div class="table">
 <table>
    @foreach($Doors as $Door)
    <tr><td>{{$Door->name}} - {{$Door->created_at}}</td></tr>
</table>
    @endforeach
        </div>



    </div>
    @endsection