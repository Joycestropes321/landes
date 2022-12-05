@extends('layouts.app')


@section('title', 'Transfer')

    @section('page_header')
 
 
 <!-- Content Header (Page header) -->
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transfer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Account</a></li>
              <li class="breadcrumb-item active">Transfer</li>
            </ol>
          </div>
        </div>
    <!-- /.content-header -->
@endsection
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection
@section('content')
        <!-- Small boxes (Stat box) -->
       
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal"  id="transfer-form" method="post">
              @csrf
                 <div class="form-group row">
                        <label for="inputName" class="col-sm-12 col-form-label">Transfer from</label>

                        <div class="col-sm-12">
                           <div class="info-box"> 
                              <div class="info-box-content">
                                {{-- {{ $user['name']  }} --}}
                                 <input type="text" readonly="" class="form-control" value="{{ $user['wallet']  }}">
                                 <input type="hidden" id="tax" class="form-control" value="{{ $user['tax']  }}">
                                 <input type="hidden" id="imt" class="form-control" value="{{ $user['imt']  }}">
                                 <input type="hidden" id="atcc" class="form-control" value="{{ $user['atcc']  }}">
                              </div> 
                            </div> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="info-box">
                            <div class="info-box-content">
                                <div class="form-group row">
                        <label for="inputName" class="col-sm-12 col-form-label">Recipient's Bank</label> 
                        <div class="col-sm-12">
                             <input type="text" name="bank" class="form-control" required> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName"  class="col-sm-12 col-form-label"> Account Number / IBAN</label> 
                        <div class="col-sm-12">
                              <input type="text" name="acc" class="form-control" required>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputName"  class="col-sm-12 col-form-label"> Beneficiary Name</label> 
                        <div class="col-sm-12">
                              <input type="text" name="beneficiary" class="form-control" required>
                        </div>
                      </div>


                        <div class="form-group row">
                        <label for="inputName" class="col-sm-12 col-form-label">Swift Code</label> 
                         <div class="col-sm-12">
                          <input type="text" name="swift" class="form-control" required>
                         </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName"  class="col-sm-12 col-form-label"> Postal Code</label> 
                        <div class="col-sm-12">
                              <input type="text" name="postal" class="form-control" required>
                        </div>
                      </div>

                        <div class="form-group row">
                        <label for="inputName" class="col-sm-12 col-form-label">Amount</label> 
                        <div class="col-sm-12">
                             <input type="number" name="amount" min='0' max="@removeComma($user['wallet'])" class="form-control"> 
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName"  class="col-sm-12 col-form-label">  Purpose of Transfer</label> 
                        <div class="col-sm-12">
                              <input type="text" name="purpose" class="form-control" required>
                        </div>
                      </div>

                    <div id="atax">
                        <div class="form-group row">
                        <div class="col-sm-4">Tax Clearance Code:</div>
                        <div class="col-sm-4">
                             <input type="text" id="tc" class="form-control"> 
                        </div>
                        <div class="col-sm-4"> <button type="button" id="tcb" class="btn btn-warning confirmBtn">Confirm</button></div>
                      </div>
                    </div>


                    <div id="aimt">
                        <div class="form-group row">
                        <div class="col-sm-4">Intl Transfer Code:</div>
                        <div class="col-sm-4">
                             <input type="text" id="timtc" class="form-control"> 
                        </div>
                        <div class="col-sm-4"> <button type="button" id="imtb" class="btn btn-warning confirmBtn">Confirm</button></div>
                      </div>
                    </div>


                    <div id="catcc">
                        <div class="form-group row">
                        <div class="col-sm-4">Anti-Terrorism Code:</div>
                        <div class="col-sm-4">
                             <input type="text" id="atc" class="form-control"> 
                        </div>
                        <div class="col-sm-4"> <button type="button" id="atccb" class="btn btn-warning confirmBtn">Confirm</button></div>
                      </div>
                    </div>

                        <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary tbutton">Transfer</button>
                        </div>
                      </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>

                   
            </form>
        
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
     
 
@endsection 
 @section('footer')
   
 <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
 @endsection
 