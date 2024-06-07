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
                                    <h3 class="card-title">Tasks</h3>
                            <div class="card-tools">
                                                                 
                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">                
                                    <p>
                                    <i class="nav-icon fas fa-plus left"></i>    
                                    CreateTask
                                    </p> 
                                </button>                    
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Task Form</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" >                                                                              
                                            <form action="{{ route('tasks.store') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="taskName" class="form-label">Task Name</label>
                                                    <input type="text" class="form-control" id="taskName" name="task_name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskDescription" class="form-label">Task Description</label>
                                                    <textarea class="form-control" id="taskDescription" name="task_description"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskType" class="form-label">Task Type</label>
                                                    <select class="form-select" id="taskType" name="task_type">
                                                        <option value="" selected disabled>select task type</option>
                                                        <option value="Call">Call</option>
                                                        <option value="Meeting">Meeting</option>
                                                        <option value="Email">Email</option>
                                                        <option value="Scheduling Interview">Scheduling Interview</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskAssignment" class="form-label">Requirement</label>
                                                    <select class="form-select" name="requirement_id">
                                                        <option value="" selected disabled>select requirement</option>
                                                        @foreach($requirements as $requirement)
                                                        
                                                        <option value="{{ $requirement->id }}">{{ $requirement->requirement_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="attachment" class="form-label">Attachment</label>
                                                    <input type="file" class="form-control" id="attachment" name="attachment">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskAssignment" class="form-label">Task Assignment</label>
                                                    <select class="form-select" id="taskAssignment" name="task_assignment">
                                                        <option value="" selected disabled>Assign to</option>
                                                        
                                                        @foreach($employees as $employee)

                                                        @if ($employee->Status === 1)      
                                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                        @endif
                                                        
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskStartDate" class="form-label">Task Start Date</label>
                                                    <input type="date" class="form-control" id="taskStartDate" name="task_start_date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskEndDate" class="form-label">Task End Date</label>
                                                    <input type="date" class="form-control" id="taskEndDate" name="task_end_date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskCurrentStage" class="form-label">Task Current Stage (%)</label>
                                                    <input type="text" class="form-control" id="taskCurrentStage" name="task_current_stage">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="taskStatus" class="form-label">Task Status</label>
                                                    <select class="form-select" id="taskStatus" name="task_status">
                                                        <option value="" selected disabled>select task status</option>
                                                        <option value="New">New</option>
                                                        <option value="In Progress">In Progress</option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="teamleaderComments" class="form-label">Team Leader Comments</label>
                                                    <textarea class="form-control" id="teamleaderComments" name="teamleader_comments"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Task</button>
                                            </form>
                                            
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- /.card-header -->
                        <div class="card-body table-responsive px-2">
                           
                            <table class="table table-bordered text-pretty border-collapse">
                                <thead class="text-nowrap">
                                <tr>
                                    <th>Task Name</th>
                                    <th>Description</th>
                                    <th>Requirement</th>
                                    <th>Task Type</th>
                                    <th>Task End date</th>
                                    <th>Assign to</th>
                                    <th>Current Stage</th>
                                    <th>Comments</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                    @if ($task->status == 1)
                                    <tr>                                            
                                        <td>{{$task->task_name}}</td>
                                        <td>{{$task->task_description}}</td>
                                        <td>{{$task->requirement->requirement_name}}</td>
                                        <td>{{$task->task_type}}</td>
                                        <td>{{$task->task_end_date}}</td>
                                        <td>{{$task->assignto->name}}</td>
                                        <td>{{$task->task_current_stage}}</td>
                                        <td>{{$task->teamleader_comments}}</td>
                                        <td>
                                            <div class="d-flex p-0 m-0">
                                                
                                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
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