@extends('layouts.app')
 
@section('title', 'Coming soon')

  
   @section('page_header')
   <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Profile</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Account</a></li>
        <li class="breadcrumb-item active">User Profile</li>
      </ol>
    </div>
  </div>
   @endsection 

    @section('content')
    <!-- Main content -->
   
        <!-- Small boxes (Stat box) -->
       
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('dist/img/'.$user["logo"]) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"> {{ $user['name'] }}</h3>

                <p class="text-muted text-center"> {{ $user['occupation'] }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                   
                  <li class="list-group-item">
                    <b>Passport Number</b> <a class="float-right">015*****9</a>
                  </li>  
                  <li class="list-group-item">
                    <b>Account Type</b> <a class="float-right">Current</a>
                  </li>  
                  
                </ul>
 
 
  <a href="{{ url('/account/transfer') }}" class="btn btn-primary btn-block"><b>Transfer</b></a>
          
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                   <!-- University of Rochester City New York  -->
                 {{ $user['education'] }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted"> {{ $user['location'] }}</p>

                <hr>

                <strong><i class="fas fa-user mr-1"></i> Next of kin</strong>

                <p class="text-muted">
                  <p class="text-muted"> {{ $user['nok'] }}</p>
                </p>

                <hr>
   </div> 
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                   <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div> 
              <div class="card-body">
                <div class="tab-content">
                   
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    {{-- @foreach ($logs as  $line)
                    <div class="post">
                        {{ $line }}
                    </div>
                    @endforeach --}}
                   
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
     


      @endsection 
     
 @section('footer') 
 <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
 @endsection