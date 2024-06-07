<x-app-layout>
    
    <div class="wrapper">
        @include('components.header')
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-2">Designations</h1>
                    <div class="card-tools">
                      <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#modal-m">                
                          <p>
                          <i class="nav-icon fas fa-plus left"></i>    
                          Add Designation
                          </p> 
                      </button>
                      
                      <div class="modal fade" id="modal-m">
                          <div class="modal-dialog modal-m">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title">Designation form</h4>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{ route('designations.store') }}" method="POST">
                                          @csrf
                                                                                              
                                          <div class="mb-1">
                                              <label for="client_name" class="form-label">Designation Name</label>
                                              <input type="text" class="form-control"  name="designation_name" required>
                                          </div>
                                          <div class="mb-1">
                                              <label for="client_name" class="form-label">Description</label>
                                              <textarea class="form-control" id="requirement_description" name="description" rows="3" required></textarea>
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Requirement</button>
                                          </div>
                                      </form>
                                  </div>
                                  
                              </div>
                              <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                      
                  </div>
                    
                  </div>
                  
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  @foreach ($designations as $designation)
                  @if ($designation->status == 1)
                  <div class="col-md-3">
                    <div class="card card-primary collapsed-card">
                      <div class="card-header">            
                        <h3 class="card-title">{{$designation->designation_name}}</h3>
        
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-ellipsis-v"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <button type="button" class="btn btn-link" style="text-decoration: none;"><i class="fas fa-edit px-2"></i>Edit</button>
                        
                        <form action="{{ route('designations.destroy', $designation->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this designation?');">
                          @csrf
                          @method('DELETE')                                         
                          <button type="submit" class="btn btn-link" style="text-decoration: none;"><i class="fas fa-trash px-2"></i>Delete</button>
                        </form>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                  @endif                    
                  @endforeach                
                  
                  
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    
                  
                  
                     
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
