@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <label for="country">Country:</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" checked name="country" id="India" value="India">
            <label class="form-check-label" for="India">India</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="country" id="United State" value="United State">
            <label class="form-check-label" for="United State">United State</label>
          </div>
          <div class="form-group">
            <label for="job_title">Job Title:</label>
            <select class="form-control" id="job_title" name="job_title">
              <option disabled selected value="">Select</option>
              <option value="Team Leader">Team Leader</option>
              <option value="Manager">Manager</option>
              <option value="Assistant Manager">Assistant Manager</option>
              <option value="Executive">Executive</option>
              <option value="Director">Director</option>
              <option value="Coordinator">Coordinator</option>
              <option value="Administrator">Administrator</option>
              <option value="Controller">Controller</option>
              <option value="Project Manager">Project Manager</option>
            </select>
          </div>                    
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection