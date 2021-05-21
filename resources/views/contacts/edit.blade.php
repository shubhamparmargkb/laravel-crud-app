@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $contact->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $contact->last_name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value={{ $contact->city }} />
            </div>
            <label for="country">Country:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php if($contact->country == 'India'){ echo 'checked'; } ?> name="country" id="India" value="India">
                <label class="form-check-label" for="India">India</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php if($contact->country == 'United State'){ echo 'checked'; } ?> name="country" id="United State" value="United State">
                <label class="form-check-label" for="United State">United State</label>
            </div>
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <select class="form-control" id="job_title" name="job_title">
                <option disabled selected value="">Select</option>
                <option value="Team Leader" <?php if($contact->job_title == 'Team Leader'){ echo "selected"; }?>>Team Leader</option>
                <option value="Manager" <?php if($contact->job_title == 'Manager'){ echo "selected"; }?>>Manager</option>
                <option value="Assistant Manager" <?php if($contact->job_title == 'Assistant Manager'){ echo "selected"; }?>>Assistant Manager</option>
                <option value="Executive" <?php if($contact->job_title == 'Executive'){ echo "selected"; }?>>Executive</option>
                <option value="Director" <?php if($contact->job_title == 'Director'){ echo "selected"; }?>>Director</option>
                <option value="Coordinator" <?php if($contact->job_title == 'Coordinator'){ echo "selected"; }?>>Coordinator</option>
                <option value="Administrator" <?php if($contact->job_title == 'Administrator'){ echo "selected"; }?>>Administrator</option>
                <option value="Controller" <?php if($contact->job_title == 'Controller'){ echo "selected"; }?>>Controller</option>
                <option value="Project Manager" <?php if($contact->job_title == 'Project Manager'){ echo "selected"; }?>>Project Manager</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection