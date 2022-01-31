<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                </li>
              </ul>
              <div>
                <div class="btn-wrapper">
                  <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                  <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                  <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                </div>
              </div>
            </div>
          
            
                <div class="row">
                  {{-- <div class="col-lg-8 d-flex flex-column"> --}}
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                        
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded table-darkBGImg">
                          <div class="card-body">
                            <div class="col-sm-8">
                              <h3 class="text-white upgrade-info mb-0">
                                Art  Is Real <span class="fw-bold">Campaign</span> for better outreach
                              </h3>
                              <a href="#" class="btn btn-info upgrade-btn">Manage Users</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h4 class="card-title card-title-dash">Pending Requests</h4>
                               <p class="card-subtitle card-subtitle-dash">You have 50+ Users of  the  system</p>
                              </div>
                              <div>
                                <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Update Users</button>
                              </div>
                            </div>
                            <div class="table-responsive  mt-1">
                               <table class="table table-bordered">
                                <thead>
                                  <tr>
                                 
                                    <th>id</th>
                                    <th>name</th>
                                    <th>user Type</th>
                                    <th>Email</th>
                                 
                                    <th>Account Created_at</th>
                                    <th>Account Updated_at</th>
                                    <th>Delete User</th>
                                    <th>Send Mail</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                 @foreach ($user as $users) 
                                   
                                
                                  <tr>
                                
                                    <td>
                                      <div class="d-flex ">
                                      
                                        <div>
                                          <p>{{$users->id}}</p>
                                        
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p>{{$users->name}}</p>
                                      <p>{{$users->usertype}}</p>
                                    </td>
                                    <td>
                                      <div>
                                    
                                       
                                          <p>{{$users->usertype}}</p>
                                    
                                    </td>
                                    <td>{{$users->email}}</td>
                                    <td>{{$users->created_at}}</td>
                                    <td>{{$users->updated_at}}</td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')" href="{{url('deleteUser',$users->id)}}">Delete</a></td>
                                    <td><a class="btn btn-primary"  href="{{url('MessageUser',$users->id)}}">Send Mail</a></td>
                                  </tr>
                             
                                   
                                 @endforeach
       
                                
                                    
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                    <div class="row flex-grow">
                      <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body card-rounded">
                            <h4 class="card-title  card-title-dash">Recent Events</h4>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Change in Directors
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Other Events
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Quarterly Report
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Change in Directors
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="list align-items-center pt-3">
                              <div class="wrapper w-100">
                                <p class="mb-0">
                                  <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                </div>
              </div>
            </div>
          {{-- </div> --}}
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include("Super.Footer")
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>