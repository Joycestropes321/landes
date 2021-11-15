<?php $this->setSiteTitle(APP_NAME .' | Home'); ?>


 <?php $this->start('page_header') ?> 
 <!-- Content Header (Page header) -->
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
    <!-- /.content-header -->

    <?php $this->end() ?>
 <?php $this->start('body') ?>
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
                       src="<?=base_url.'public/dist/img/'.$this->user['logo']?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"> <?=$this->user['name']?></h3>

                <p class="text-muted text-center"> <?=$this->user['occupation']?></p>

                <ul class="list-group list-group-unbordered mb-3">
                   
                  <li class="list-group-item">
                    <b>Passport Number</b> <a class="float-right">015*****9</a>
                  </li>  
                  <li class="list-group-item">
                    <b>Account Type</b> <a class="float-right">Current</a>
                  </li>  
                  
                </ul>
 
 <?php 
 if($this->user['owner'] === "on") {
  ?>
  <a href="<?=base_url?>account/transfer" class="btn btn-primary btn-block"><b>Transfer</b></a>
  <?php
 }
       ?>         
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
                  <?php echo $this->user['education']?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">  <?=$this->user['location']?></p>

                <hr>

                <strong><i class="fas fa-user mr-1"></i> Next of kin</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">-</span> 
                </p>

                <hr>
<!-- 
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>-->
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
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                   <?php 
 if($this->user['owner'] === "on") {
  ?>
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                   <?php 

                    foreach ($this->logs as $line) {
                      # code...
                      echo '<div class="post">';
                         echo  $line ;
 
                   echo '</div>';
                    }

                   ?>
                    <!-- /.post --> 
 <?php
 } else {
  echo '<div class="active tab-pane" id="activity">';

echo 'Recent activities not available';
  echo '</div>';
 }
       ?>   
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
     

    <?php $this->end() ?>



 <?php $this->start('scripts') ?>
<script src="<?=base_url.'public/dist/js/pages/dashboard.js'; ?>"></script>

    <?php $this->end() ?>