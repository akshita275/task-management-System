<x-app-layout>
    @auth
        <div class="wrapper">
            @include('components.user-header')
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-3">
                                    <div class="card-header">
                                        <h3 class="card-title">Your Tasks</h3>
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
                                                    <th>Current Stage</th>
                                                    <th>Comments</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($userTasks as $task)
                                                @if ($task->status === 1)
                                                <tr>                                            
                                                    <td>{{ $task->task_name }}</td>
                                                    <td>{{ $task->task_description }}</td>
                                                    <td>{{ $task->requirement->requirement_name }}</td>
                                                    <td>{{ $task->task_type }}</td>
                                                    <td>{{ $task->task_end_date }}</td>
                                                    <td>{{ $task->task_current_stage }}</td>
                                                    <td>{{ $task->teamleader_comments }}</td>
                                                </tr>
                                                @endif                                                   
                                                @empty
                                                    <tr>
                                                        <td colspan="7">No tasks assigned to you</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endauth
</x-app-layout>