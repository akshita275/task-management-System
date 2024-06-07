<x-app-layout>
    
    <div class="wrapper">
        @include('components.user-header')
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                  </div>
                  
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            
                            <p>Total Task</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>53<sup style="font-size: 20px">%</sup></h3>
          
                          <p>Completed Tasks</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>44</h3>
          
                          <p>Total Users</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>65</h3>
          
                          <p>Total Clients</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Tasks Details</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">id</th>
                              <th>Task name</th>
                              <th>Task assignment</th>
                              <th>Task Type</th>
                              <th>Task start date</th>
                              <th>Task end date</th>
                              <th>Task current stage</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Find candidate</td>
                              <td>Employee name</td>
                              <td>email</td>
                              <td>01-02-2024</td>
                              <td>14-02-2024</td>
                              <td><span class="badge bg-danger">55%</span></td>
                            </tr>                    
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                      </div>
                    </div>
                   
                  </div>
                  <!-- /.col -->
                  
                  <!-- /.col -->
                </div>
        
        
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Clients details</h3>
        
                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Client name</th>
                              <th>Created_at</th>
                              <th>Status</th>
                              <th>Requirement description</th>
                              <th>View Details</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>John Doe</td>
                              <td>11-3-2024</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>Requirement of Data analyts with 3 yrs of experience</td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Alexander Pierce</td>
                              <td>11-7-2014</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>Required Project Manager</td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Bob Doe</td>
                              <td>11-7-2014</td>
                              <td><span class="badge bg-danger">Inactive</span></td>
                              <td>Requirement of Senior Software Developer </td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Mike Doe</td>
                              <td>11-7-2014</td>
                              <td><span class="badge bg-danger">Inactive</span></td>
                              <td>Requirement of Human Resource Manager</td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Users</h3>
        
                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Created_at</th>
                              <th>Status</th>
                              <th>Requirement description</th>
                              <th>View Details</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>John Doe</td>
                              <td>11-3-2024</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>Requirement of Data analyts with 3 yrs of experience</td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Alexander Pierce</td>
                              <td>11-7-2014</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>Required Project Manager</td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Bob Doe</td>
                              <td>11-7-2014</td>
                              <td><span class="badge bg-danger">Inactive</span></td>
                              <td>Requirement of Senior Software Developer </td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Mike Doe</td>
                              <td>11-7-2014</td>
                              <td><span class="badge bg-danger">Inactive</span></td>
                              <td>Requirement of Human Resource Manager</td>
                              <td><button type="button" class="btn btn-link">#details</button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
                <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
       
      
        
        <!-- /.control-sidebar -->
    </div>
    
</x-app-layout>
