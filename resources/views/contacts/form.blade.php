@extends('layouts.main')




@section('content')

<div class="panel panel-default">
            <div class="panel-heading">
              <strong>Add Contact</strong>
            </div>
              
            {!! Form::open(['route' => 'contacts.store'])  !!}
                                  
            <div class="panel-body">
              <div class="form-horizontal">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Name</label>
                      <div class="col-md-8">
                       
                       {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="company" class="control-label col-md-3">Company</label>
                      <div class="col-md-8">
                        {!! Form::text('company', null, ['class' => 'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="control-label col-md-3">Email</label>
                      <div class="col-md-8">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="control-label col-md-3">Phone</label>
                      <div class="col-md-8">
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Address</label>
                      <div class="col-md-8">
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'rows'=> 3]) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="group" class="control-label col-md-3">Group</label>
                      <div class="col-md-5">
                       
                        {!! Form::select('group_id', App\Group::pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                        
                        <!--
                         <select name="group" id="group" class="form-control">
                          <option value="">Select group</option>
                          <option value="1">Family</option>
                          <option value="2">Friend</option>
                          <option value="3">Other</option>
                        </select>
                        -->
                        
                      </div>
                      <div class="col-md-3">
                        <a href="#" id="add-group-btn" class="btn btn-default btn-block">Add Group</a>
                      </div>
                    </div>
                    <div class="form-group" id="add-new-group">
                      <div class="col-md-offset-3 col-md-8">
                        <div class="input-group">
                          <input type="text" name="new_group" id="new_group" class="form-control">
                          <span class="input-group-btn">
                            <a href="#" class="btn btn-default">
                              <i class="glyphicon glyphicon-ok"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                        <img src="http://placehold.it/150x150" alt="Photo">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                      <div class="text-center">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Choose Photo</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <a href="#" class="btn btn-default">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            {!! Form::close() !!}
            
          </div>


@endsection