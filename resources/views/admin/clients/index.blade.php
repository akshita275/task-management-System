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
                                    <h3 class="card-title">Client List</h3>
                            
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-l">                
                                    <p>
                                    <i class="nav-icon fas fa-plus left"></i>    
                                    Add Clients info
                                    </p> 
                                </button>
                                
                                <div class="modal fade" id="modal-l">
                                    <div class="modal-dialog modal-l">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Requirement</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('clients.store') }}" method="POST">
                                                    @csrf
                                                                                                        
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">Client Name</label>
                                                        <input type="text" class="form-control"  name="client_name" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">Address</label>
                                                        <input type="text" class="form-control"  name="address" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">City</label>
                                                        <input type="text" class="form-control"  name="city" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">District</label>
                                                        <input type="text" class="form-control"  name="district" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">state</label>
                                                        <input type="text" class="form-control"  name="state" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="website" class="form-label">Website url</label>
                                                        <input type="url" class="form-control"  name="website" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email_address" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">Phone</label>
                                                        <input type="number" class="form-control" name="phone" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="client_name" class="form-label">Logo</label>
                                                        <input type="file" class="form-control" name="logo" >
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add Client</button>
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
                                    <th>Clients Name</th>
                                    <th>Website</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($clients as $client)
                                    @if ($client->status == 1)
                                    <tr>    
                                        <td>{{$client->client_name}}</td>
                                        <td><a href="{{$client->website}}">{{$client->website}}</a></td>
                                        <td>{{$client->email_address}}</td>
                                        <td>{{$client->phone}}</td>                                            
                                        <td>
                                            <div class="d-flex p-0 m-0">
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this client?');">
                                                    @csrf
                                                    @method('DELETE')                                                    
                                                    <button type="submit" class="btn btn"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>     
                                        </td>                                            
                                    </tr>                                           
                                    @endif
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