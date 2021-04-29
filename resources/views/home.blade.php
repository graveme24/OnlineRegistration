@extends('layouts.app')

@section('content')
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('insertp') }}" class="nav-link">Primary Info</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('image.create') }}" class="nav-link">Pay for Admission</a>
                      </li>
                    </ul>
                    
                </div>
                <div class="student-profile py-4">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card shadow-sm">
                            <div class="card-header bg-transparent text-center">
                              <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
                              <h3>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h3>
                            </div>
                            <div class="card-body">
                              <p class="mb-0"><strong class="pr-1">Status:</strong></p>
                              {{-- <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
                              <p class="mb-0"><strong class="pr-1">Section:</strong>A</p> --}}
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="card shadow-sm">
                            <div class="card-header bg-transparent border-0">
                              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                            </div>
                            <div class="card-body pt-0">
                              <table class="table table-bordered">
                                <tr>
                                  <th width="30%">First Name</th>
                                  <td width="2%">:</td>
                                  <td>{{ Auth::user()->fname }}</td>
                                </tr>
                                <tr>
                                  <th width="30%">Middle Name</th>
                                  <td width="2%">:</td>
                                  <td>{{ Auth::user()->mname }}</td>
                                </tr>
                                <tr>
                                  <th width="30%">Last Name</th>
                                  <td width="2%">:</td>
                                  <td>{{ Auth::user()->lname }}</td>
                                </tr>
                                <tr>
                                  <th width="30%">Contact Number</th>
                                  <td width="2%">:</td>
                                  <td>{{ Auth::user()->contact }}</td>
                                </tr>
                                <tr>
                                  <th width="30%">Email</th>
                                  <td width="2%">:</td>
                                  <td>{{ Auth::user()->email }}</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                            <div style="height: 26px"></div>
                          <div class="card shadow-sm">
                            <div class="card-header bg-transparent border-0">
                              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                            </div>
                            <div class="card-body pt-0">
                                <p>Apply online by visiting this link:<br>1.<br>2.&nbsp;Fill out the application form. Use a&nbsp;Gmail account to register. Make sure the spelling of the email address is correct and&nbsp;that all information is updated, accurate, and reliable.&nbsp;<br>3.&nbsp;You will receive an email regarding your registration. Click on the link provided on the email.<br>4.&nbsp;Log-in using your registered email and password.&nbsp;<br>5.&nbsp;Once logged-in,&nbsp;<br>6.&nbsp;Fill-out all the fields with your primary information, personal details, and family details. Then, click “Next.”&nbsp;<br>7.&nbsp;Kindly upload your <span style="font-weight: 700;">Report card and Birth Certificate</span> for the strand evaluation.<br>8.&nbsp;Check the declaration and click “Finish.”&nbsp;<br>9.&nbsp;Pay the application fee amounting to P200.00. Via Gcash<br>10.&nbsp;Wait for the confirmation email in your Gmail account to find out if you qualify. Evaluation usually takes&nbsp;1-2&nbsp;working days.&nbsp;</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- partial -->
                             
                              </div>
                          </div>
                      </div>
                  </section>
                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
