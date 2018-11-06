@extends('layouts.app')
@section('pageTitle', 'Contact Us')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>

                <div class="panel-body">
                    <div class="form-area">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" maxlength="140" rows="7"></textarea>
                                <span class="help-block"><p id="characterLeft" class="help-block ">Max length is only 150 characters</p></span>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
