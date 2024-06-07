<div>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    <p><strong>Type:</strong> {{ $user->type }}</p>
    <p><strong>Designation:</strong> {{ $user->designation->designation_name }}</p>
    <!-- Include other user details as needed -->
</div>