{{--  user management page  --}}
@extends('layouts.admin')

@section('content')
  
   {{--   <div class="user-management-page border border-secondary" align="center">
        <div class="user-container">  --}}
            {{--  <button class="user" type="button">User Information</button>  <button class="role" type="button">Current Role</button>  --}}
           {{--  <span class="user-text">User</span>  <span class="role-text">Role</span>  --}} {{--  User {{User}}  Role{{Role}}  --}} 
          {{--   <button id="drop-user" type="button" class="btn btn-danger">Delete user</button>  --}}
           {{--  this may have to be a table instead  --}}
{{--  </div> </div> --}}

    
    {{--  <div class ="members"></div>
    <table class="table" border ='1'>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Current Role</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark Johnson</td>
                <td>Intern</td>
               </tr>
              <tr>
                <th scope="row">2</th>
                <td>Nico Las</td>
                <td>Managing Director</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jean Vicks</td>
                <td>The Janitor</td>
              </tr>
            </tbody>
          </table>
</div>  --}}
<div class="table">
    <table>
       @foreach($Doors as $Door)
       <tr><td>{{$Door->name}} - {{$Door->created_at}}</td></tr>
   
       @endforeach
   </table>
</div>
   


@endsection