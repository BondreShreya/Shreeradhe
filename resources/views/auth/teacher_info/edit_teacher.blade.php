@extends('layout.mainlayout')
@section('pagetitle',' UPDATE TEACHER')
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
              <form action="{{ route('new_teacher_profile.update',$teachInfo->id) }}" method="POST" enctype="multipart/form-data" class="">
              @method('PUT')
               {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">NAME</label>
                      <input type="text" class="form-control" name="name" value="{{ $teachInfo->name}}">
                      @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">EMAIL</label>
                      <input type="email" class="form-control" name="email" value="{{ $teachInfo->email}}">
                      @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">DESIGNATION</label>
                      <input type="text" class="form-control" name="designation" value="{{ $teachInfo->designation}}">
                      @error('designation')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">QUALIFICATION</label>
                      <input type="text" class="form-control" name="qualification" value="{{ $teachInfo->qualification}}">
                      @error('qualification')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">TEACHER  PHOTO</label>
                      <input type="file" class="form-control-file" name="file">
                      <img src="{{  URL::asset('file/' . $teachInfo->file) }}"  style="width:50%">
                      <input type="hidden" class="form-control-file" name="hidden_image" value="{{ $teachInfo->file}}">
                      @error('file')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success ">UPDATE</button>
                        <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </from>
            </div>
        </div>
      </div>     
    </div>
  </div>
</div>  
@endsection