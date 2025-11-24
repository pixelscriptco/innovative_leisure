{!! Form::open(['id' => 'form']) !!}
{!! Form::hidden('data-url', Request::url(), ['id' => 'data-url']) !!}
<div class="card shadow-none">
    <div class="card-header">
        <h4>Privileges</h4>
        <div class="card-tools">
            <div class="form-group clearfix">
                <div class="icheck-primary d-inline">
                    <input type="checkbox" name="all-privilege" value="1" id="all-privilege">
                    <label for="all-privilege">Select All</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Privilege</th>
                    <th>Read</th>
                    <th>Write</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($privileges->count() > 0)
                    @foreach ($privileges as $key => $privilege)
                        @php $read = 0; $write = 0; $delete = 0; @endphp
                        @if(count($privilege->privilegeRole) > 0)
                            @php
                                $read = $privilege->privilegeRole[0]->read_access;
                                $write = $privilege->privilegeRole[0]->write_access;
                                $delete = $privilege->privilegeRole[0]->delete_access;
                            @endphp
                        @endif
                        <tr>
                            <td>
                                {{$privilege->name}}
                                <input type="hidden" name="privilege_id[]" value="{{$privilege->id}}">
                            </td>
                            <td>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="read-{{$privilege->id}}" value="{{$read}}"
                                               {{$read === 1 ? "checked" : ''}} class="privilege-role"
                                               id="read-{{$key}}">
                                        <label for="read-{{$key}}"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="write-{{$privilege->id}}" value="{{$read}}"
                                               {{$write === 1 ? "checked" : ''}} class="privilege-role"
                                               id="write-{{$key}}">
                                        <label for="write-{{$key}}"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="delete-{{$privilege->id}}" value="{{$read}}"
                                               {{$delete === 1 ? "checked" : ''}} class="privilege-role"
                                               id="delete-{{$key}}">
                                        <label for="delete-{{$key}}"></label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
{!! Form::close() !!}
