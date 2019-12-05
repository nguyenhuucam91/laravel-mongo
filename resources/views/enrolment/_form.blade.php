@csrf
    <div class="form-group">
        <label for="first_name">Student Name</label>
        <select name="student_id">
            @foreach($students as $student)
                <option value="{{ $student->_id }}" {{ $enrolment->student->_id === $student->_id ?? 'selected'}} >
                    {{ $student->first_name.' '.$student->last_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="last_name">Course</label>
        <select name="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->_id }}">{{ $course->name }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="address">Mark</label>
        <input type="text" type="number" min="0" max="10" name="mark"/>
    </div>