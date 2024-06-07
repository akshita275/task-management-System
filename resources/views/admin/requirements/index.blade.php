<x-app-layout>

    <div class="wrapper">
        @include('components.header')
        <div class="content-wrapper">
            <section class="content">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-3">
                                <div class="card-header">
                                    <h3 class="card-title">Requirements</h3>
                            
                            <div class="card-tools">
                            <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#modal-m">                
                                    <p>
                                    <i class="nav-icon fas fa-plus left"></i>    
                                    Add Position
                                    </p> 
                                </button>
                                
                                <div class="modal fade" id="modal-m">
                                    <div class="modal-dialog modal-m">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Position form</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('positions.store')}}" method="POST">
                                                    @csrf
                                                                                                        
                                                    <div class="mb-1">
                                                        <label for="position_name" class="form-label">Position Name</label>
                                                        <input type="text" class="form-control"  name="position_name" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" name="description" rows="3" required></textarea>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-primary">Save Position</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-xl">                
                                    <p>
                                    <i class="nav-icon fas fa-plus left"></i>    
                                    Add Requirement
                                    </p> 
                                </button>
                                
                                <div class="modal fade" id="modal-xl">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Requirement</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('requirements.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="requirement_name" class="form-label">Requirement Name</label>
                                                        <input type="text" class="form-control" id="requirement_name" name="requirement_name" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="requirement_description" class="form-label">Requirement Description</label>
                                                        <textarea class="form-control" id="requirement_description" name="requirement_description" rows="3" required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="client_name" class="form-label">Client Name</label>
                                                        <input type="text" class="form-control" id="client_name" name="client_name" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="position_id" class="form-label">Position</label>
                                                        <select class="form-select" id="position_id" name="position_id" required>
                                                            <option value="" selected disabled>Select Position</option>
                                                            @foreach($positions as $position)
                                                                <option value="{{ $position->position_id }}">{{ $position->position_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="requirement_status" class="form-label">Requirement Status</label>
                                                        <select class="form-select" id="requirement_status" name="requirement_status" required>
                                                            <option value="" selected disabled>Select Status</option>
                                                            <option value="New">New</option>
                                                            <option value="InProgress">InProgress</option>
                                                            <option value="Closed">Closed</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="requirement_priority" class="form-label">Requirement Priority</label>
                                                        <select class="form-select" id="requirement_priority" name="requirement_priority" required>
                                                            <option value="" selected disabled>Select Priority</option>
                                                            <option value="Low">Low</option>
                                                            <option value="Medium">Medium</option>
                                                            <option value="High">High</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="attachment" class="form-label">Attachment</label>
                                                        <input type="file" class="form-control" id="attachment" name="attachment">
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
                        <!-- Modal for updating user details -->
                        <div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateUserModalLabel">Update User Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="updateUserDetails">
                                        <!-- User details form -->
                                        
                                        <!-- End of user details form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap border-collapse border">
                                <thead>
                                <tr>
                                    <th>Requirement Name</th>
                                    <th>Description</th>
                                    <th>Position</th>
                                    <th>Requirement Status</th>
                                    <th>Requirement Priority</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requirements as $requirement)
                                   
                                        <tr>                                            
                                            <td>{{$requirement->requirement_name}}</td>
                                            <td>{{$requirement->requirement_description}}</td>
                                            <td>{{$requirement->position->position_name}}</td>
                                            <td>
                                                @if($requirement->requirement_status == 'New')
                                                <span class="badge bg-success">{{ $requirement->requirement_status }}</span>
                                            @elseif ($requirement->requirement_status == 'InProgress')
                                                <span class="badge bg-warning">{{ $requirement->requirement_status }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $requirement->requirement_status }}</span>
                                            @endif
                                            </td> 
                                            <td>
                                                @if($requirement->requirement_priority == 'Low')
                                                <span class="badge bg-success">{{ $requirement->requirement_priority }}</span>
                                            @elseif ($requirement->requirement_priority == 'Medium')
                                                <span class="badge bg-warning">{{ $requirement->requirement_priority }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $requirement->requirement_priority }}</span>
                                            @endif
                                            </td>                                            
                                        </tr>                                    
                                   
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                </div>
            </section>
          </div>
      </div>
    </div>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</x-app-layout>