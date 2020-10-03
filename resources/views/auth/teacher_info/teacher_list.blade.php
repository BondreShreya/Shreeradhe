@extends('layout.mainlayout')
@section('pagetitle','ALL LIST')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">TEACHERS</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>NAME</th>
                  <th class="text-center">EMAIL</th>
                  <th>DESIGNATION</th>
                  <th class="text-center">QUALIFICATION</th>
                  <th class="text-center">IMAGE</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($users as $key => $user)
                    <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->designation }}</td>
                    <td class="text-center">{{ $user->qualification }}</td>
                    <td class="text-center">
                      <img src="{{  URL::asset('file/' . $user->file) }}" style="width:50%">
                    </td>
                      <td class="action">
                          <button class="btn btn-info"><a href="{{ route('edit_teacher.edit',$user->id) }}"><i class="fa fa-pencil text-white"></i>
                          </a></button>
                          <button class="btn btn-danger"><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete"><i class="fa fa-trash text-white"></i>
                          </a>
                          <form action="{{ route('teacher_list.destroy',$user->id) }}" method="post">
                              @method('DELETE')
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </form></button>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection