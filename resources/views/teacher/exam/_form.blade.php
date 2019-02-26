<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="exam_name">Exam Name</label>
                <input type="text" class="form-control" id="exam_name" name="exam_name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="faculty">Faculty</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="faculty" required id="faculty">
                    <option selected="selected">Faculty</option>
                    <option value="1">FSIT</option>
                    <option value="2">Engineering</option>
                    <option value="3">Food and Nutration</option>
                </select>
            </div>

            <div class="form-group">
                <label for="department" >Department</label>
                <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="department" id="department" required>
                    <option selected="selected">Department</option>
                    <option value="1">CSE</option>
                    <option value="2">EEE</option>
                    <option value="3">SWE</option>
                </select>
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" class="form-control" id="semester" placeholder="Semester" name="semester" required>
            </div>

            <div class="form-group">
                <label for="course_title">Course Title</label>
                <input type="text" class="form-control" id="course_title" placeholder="Course Title" name="course_title" required>
            </div>

            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" class="form-control" id="course_code" placeholder="Course Code" name="course_code" required>
            </div>

            <div class="form-group">
                <label for="total_marks">Total Marks</label>
                <input type="text" class="form-control" id="total_marks" placeholder="Total Marks" name="full_marks" required>
            </div>

            <div class="form-group">
                <label for="time" >Time</label>
                <input type="text" class="form-control" id="time" placeholder="Time" name="exam_time" required>
            </div>

            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" rows="3"  placeholder="Note...." name="exam_note"></textarea>
            </div>

            <div class="form-group">
                <label for="rule" >Rule</label>
                <textarea class="form-control" rows="3"  placeholder="Rule...." name="exam_rules"></textarea>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" rows="3"  placeholder="Description...." name="exam_description"></textarea>
            </div>

            <div class="form-group">
                <label for="exam-type">Exam Type</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="exam_type" >
                    <option selected="selected">Exam Type</option>
                    <option value="1">MCQ</option>
                    <option value="2">Broad</option>
                </select>
            </div>

        </div>
    </div>
</div>






