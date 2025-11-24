<form id="form" method="POST" action="#">
    @csrf
    <input type="hidden" name="data-url" id="data-url" value="{{ Request::url() }}">
    <input type="hidden" name="data-id" id="data-id" value="{{ $role->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name"
                       class="form-control" value="{{ $role->name }}" placeholder="Enter Role Name" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $role->description }}</textarea>
            </div>
        </div>
    </div>
</form>
