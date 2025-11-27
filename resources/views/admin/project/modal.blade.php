<form id="form" method="POST" action="#">
    @csrf
    <input type="hidden" name="data-url" id="data-url" value="{{ Request::url() }}">
    <input type="hidden" name="data-id" id="data-id" value="{{ $project->id }}">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title"
                       class="form-control" value="{{ $project->title }}" placeholder="Enter Project Title" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="location">Location <span class="text-danger">*</span></label>
                <input type="text" name="location" id="location"
                       class="form-control" value="{{ $project->location }}" placeholder="Enter Project Location"
                       required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="completion_date">Completion Date <span class="text-danger">*</span></label>
                <input type="date" name="completion_date" id="completion_date" class="form-control"
                       value="{{$project->id > 0 ? date('Y-m-d', strtotime($project->completion_date)) : date('Y-m-d')}}"
                       required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="attachment_url">Attachment URL @if($project->attachment_url) <a
                        href="{{getFromDisk($project->attachment_url)}}" target="_blank"><i
                            class="fas fa-eye"></i></a> @endif</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="attachment_url" accept=".png,.jpeg,.jpg"
                           id="attachment_url">
                    <label class="custom-file-label" for="attachment_url">Choose file</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <div class="custom-file">
                    <textarea name="capacity" id="capacity" class="form-control"
                              rows="2">{{$project->capacity}}</textarea>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="service_provided">Services Provided <span class="text-danger">*</span></label>
                <textarea name="service_provided" id="service_provided" class="form-control"
                          required>{{$project->service_provided}}</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="project_description">Description</label>
                <textarea name="project_description" id="project_description"
                          class="form-control">{{ $project->description }}</textarea>
            </div>
        </div>
    </div>
</form>
