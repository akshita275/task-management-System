
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
                <option value="">Select Position</option>
                @foreach($positions as $position)
                    <option value="{{ $position->position_id }}">{{ $position->position_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="requirement_status" class="form-label">Requirement Status</label>
            <select class="form-select" id="requirement_status" name="requirement_status" required>
                <option value="">Select Status</option>
                <option value="New">New</option>
                <option value="InProgress">InProgress</option>
                <option value="Closed">Closed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="requirement_priority" class="form-label">Requirement Priority</label>
            <select class="form-select" id="requirement_priority" name="requirement_priority" required>
                <option value="">Select Priority</option>
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
        </div>
        <button type="submit" class="btn btn-primary">Save Requirement</button>
    </form>


