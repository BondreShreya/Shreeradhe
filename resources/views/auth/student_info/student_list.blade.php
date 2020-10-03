@extends('layout.mainlayout')
@section('pagetitle','ALL ADMISSION')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">ADMISSION</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>STUDENT NAME</th>
                  <th>SCHOOL NAME</th>
                  <th>ADMISSION NUMBER</th>
                  <th>ADMISSION DATE</th>
                  <th>CLASS</th>
               
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($users as $key => $user)
                 <?php 
                 $name=DB::table('school_profile')->where('id',$user->school_name)->first();
                 ?>
                <?php 
                 $class=DB::table('standerd')->where('id',$user->class_name)->first();
                 ?>
                    <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>@if(!empty($name)){{$name->school_name}}@endif</td>
                    <td class="text-center">{{ $user->admission_number }}</td>
                    <td>{{ $user->admission_date }}</td>
                    <td>@if(!empty($class)){{$class->standard}}@endif</td>
                   
                   
                      <td class="action">
                          <button class="btn btn-info"><a href="{{ route('new_student_profile.edit', $user->id) }}"><i class="fa fa-pencil text-white"></i>
                          </a></button><br>
                          <button class="btn btn-danger"><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete"><i class="fa fa-trash text-white"></i>
                         
                          <form action="{{ route('student_list.destroy', $user->id)  }}" method="post">
                              @method('DELETE')
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </form>
                          </a>
                          </button>
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