<form id="editUserForm" action="{{route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
        </div>
    
        <!-- Email -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
        </div>
    
        <!-- Phone -->
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" value="{{ $user->phone }}" class="form-control">
        </div>
    
        <!-- Type -->
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control">
                <option value="Admin" {{ $user->type == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Employee" {{ $user->type == 'Employee' ? 'selected' : '' }}>Employee</option>
            </select>
        </div>
    
        <!-- Designation -->
        <div class="form-group">
            <label for="designation_id">Designation:</label>
            <select name="designation_id" id="designation_id" class="form-control">
                <option value="">Select Designation</option>
                @foreach($designations as $designation)
                    <option value="{{ $designation->id }}" {{ $user->designation_id == $designation->id ? 'selected' : '' }}>{{ $designation->designation_name }}</option>
                @endforeach
            </select>
        </div>
    
        <!-- Profile Picture -->
        <div class="form-group">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" name="profile_picture" id="profile_picture" class="form-control-file">
        </div>
    
        <!-- Submit Button -->

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Update User</button>
</form>
<script>
    
</script>