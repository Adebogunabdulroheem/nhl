@extends('layouts.dashboard')

@section('title')
   Dashboard
@endsection

@section('content')
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Users</h4>
              </div>
            @if(count($users) > 0)
              @foreach ($users as $user):
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Email</th>
                      <th class="text-right">User Id</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-right">{{$user->id}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              @endforeach
            @else
                <p>You have no users!</p>
            @endif
            </div>
          </div>
        </div>
      </div>
  @endsection