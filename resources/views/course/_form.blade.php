@csrf
    <div class="form-group">
        <label for="first_name">Name</label>
        <input type="text" class="form-control" name="name" 
        id="first_name" aria-describedby="helpId" placeholder="" value="{{ $course->name }}">
    </div>