@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/create') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('bill_name') ? ' has-error' : '' }}">
                                <label for="bill_name" class="col-md-4 control-label">Name of Bill</label>

                                <div class="col-md-6">
                                    <input id="bill_name" type="text" class="form-control" name="bill_name" value="{{ old('bill_name') }}" required autofocus>

                                    @if ($errors->has('bill_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bill_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Amount Due</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" required autofocus>

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Due Date</label>

                                <div class="col-md-6">
                                    <input id="due_date" type="date" class="form-control" name="due_date" value="{{ old('due_date') }}" required autofocus>

                                    @if ($errors->has('due_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('due_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="recurring" {{ old('recurring') ? 'checked' : '' }}> Is this bill recurring?
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Category</label>

                                <div class="col-md-6">
                                    <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required autofocus>

                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Bill
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
