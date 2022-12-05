@extends('layouts.app')


@section('title', 'Dashboard')
@section('head')
 <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"> 
 @endsection
 
 
 @section('page_header')
 <!-- Content Header (Page header) -->
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item active"> {{ $user['name'] }}</li> 
            </ol>
          </div><!-- /.col -->
       </div>
    <!-- /.content-header -->
@endsection
    @section('content')
    <!-- Main content --> 
        <!-- Small boxes (Stat box) -->
       
        <h5 class="mb-2">Account Summary</h5>
        <div class="row">
          <div class="col-md-5 col-sm-6 col-12">
            <div class="info-box">
               <span class="info-box-icon bg-info"><i class="{{  $user['currency']   }}"></i></span>  

              <div class="info-box-content">
                <span class="info-box-text">Balance</span>
                <span class="info-box-number"> @formatMoney($user['wallet']) </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         
          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ url('/public/account/transfer') }}">
            <button class="btn btn-primary">Transfer Fund</button>
          </a>
            
          </div> 

          <!-- /.col -->
          <div class="col-md-1 col-sm-6 col-12">
             
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
             
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
          
        <div class="row">
          <div class="col-lg-12">
            
              <div class="card-body table-responsive p-0">
                <table id="example2" class="table data-table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <!-- <th>Transaction Type</th> -->
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Reference Number</th>
                    <th>Transaction Date & Time</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
          </div>
        </div>

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
             <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Savings Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
             
            </div>
            <!-- /.card -->
 
 
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col We are only adding the ID to make the widgets sortable-->
          <section class="col-lg-5 connectedSortable"> 

       
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div> 
        @endsection
        @section('footer')
 <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
 
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('account.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'description', name: 'description'},
            {data: 'amount', name: 'amount'},
            {data: 'ref', name: 'ref'}, 
            {data: 'date', name: 'date'}, 
        ]
    });
    
  });
</script>
{{-- <script>
  $(function () { 
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
   
  });
</script>   --}}
  @endsection
