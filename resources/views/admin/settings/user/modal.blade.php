<form id="form" method="POST" action="#">
    @csrf
    <input type="hidden" name="data-url" id="data-url" value="{{ Request::url() }}">
    <input type="hidden" name="data-id" id="data-id" value="{{ $user->id }}">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Full Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name"
                       class="form-control" value="{{ $user->name }}" placeholder="Enter Full Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="role_id">Role <span class="text-danger">*</span></label>
                <select id="role_id" name="role_id" class="form-control select2" required>
                    @if(count($roles) > 0)
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="text" name="email" id="email"
                       class="form-control" value="{{ $user->email }}" placeholder="Enter Email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone <span class="text-danger">*</span></label>
                <input type="text" name="phone" id="phone"
                       class="form-control" value="{{ $user->phone }}" placeholder="Enter Phone" required>
            </div>
        </div>
    </div>
</form>
