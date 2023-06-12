<div class="modal fade" id="add-edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Add Or Editing User</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <form id="addform" method="POST" enctype="multipart/form-data">
	  <div class="modal-body">
      <div class="form-group">
            <label for="username">Category</label>
            <input type="text" class="form-control" name="category" id="username" autocomplete="off" placeholder="online or offline or self" >
        </div>
        <div class="form-group">
            <label for="username">Unique Id</label>
            <input type="text" class="form-control" name="unique_id" id="username" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="username">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="username" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="email">Course Front Page Description</label>
            <input type="text" class="form-control" name="course_des_1" id="email" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Course Point Details 1</label>
            <input type="text" class="form-control" name="course_p_d_1" id="mobile" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Course Point Details 2</label>
            <input type="text" class="form-control" name="course_p_d_2" id="mobile" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Course Point Details 3</label>
            <input type="text" class="form-control" name="course_p_d_3" id="mobile" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Course Back Page Description</label>
            <input type="text" class="form-control" name="course_des_2" id="mobile" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Course Fees</label>
            <input type="text" class="form-control" name="course_fees" id="mobile" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Course Certificate Description</label>
            <input type="text" class="form-control" name="course_des_3" id="mobile" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="mobile">Why Learn Details 1</label>
            <input type="text" class="form-control" name="why_learn_1" id="mobile" autocomplete="off" placeholder="Work on Real Projects">
        </div>
        <div class="form-group">
            <label for="mobile">Why Learn Details 2</label>
            <input type="text" class="form-control" name="why_learn_2" id="mobile" autocomplete="off" placeholder="Advanced Techniques">
        </div>
        <div class="form-group">
            <label for="mobile">Why Learn Details 3</label>
            <input type="text" class="form-control" name="why_learn_3" id="mobile" autocomplete="off" placeholder="Access to Premium Tools">
        </div>
        <div class="form-group">
            <label for="mobile">Why Learn Details 4</label>
            <input type="text" class="form-control" name="why_learn_4" id="mobile" autocomplete="off" placeholder="Training by Expert">
        </div>
        <div class="form-group">
            <label for="mobile">Why Learn Details 5</label>
            <input type="text" class="form-control" name="why_learn_5" id="mobile" autocomplete="off" placeholder="100% Job Assistance">
        </div>
        <div class="form-group">
            <label for="mobile">Why Learn Details 6</label>
            <input type="text" class="form-control" name="why_learn_6" id="mobile" autocomplete="off" placeholder="Certification">
        </div>
        <div class="form-group">
            <label for="mobile">Faq's Answer 1</label>
            <input type="text" class="form-control" name="faq_ans_1" id="mobile" autocomplete="off" placeholder="What is SEO for beginners?">
        </div>
        <div class="form-group">
            <label for="mobile">Faq's Answer 2</label>
            <input type="text" class="form-control" name="faq_ans_2" id="mobile" autocomplete="off" placeholder="How can I learn SEO?">
        </div>
        <div class="form-group">
            <label for="mobile">Faq's Answer 3</label>
            <input type="text" class="form-control" name="faq_ans_3" id="mobile" autocomplete="off" placeholder="Is SEO a good career?">
        </div>
        <div class="form-group">
            <label for="mobile">Faq's Answer 4</label>
            <input type="text" class="form-control" name="faq_ans_4" id="mobile" autocomplete="off" placeholder="Is SEO difficult to learn?">
        </div>
        <div class="form-group">
            <label for="mobile">Faq's Answer 5</label>
            <input type="text" class="form-control" name="faq_ans_5" id="mobile" autocomplete="off" placeholder="What if I miss a class due to any reason?">
        </div>
        <div class="form-group">
            <label for="mobile">Faq's Answer 6</label>
            <input type="text" class="form-control" name="faq_ans_6" id="mobile" autocomplete="off" placeholder="Can I take a demo class before paying the fees?">
        </div>
        <div class="form-group">
            <label for="image">Course Image</label>
            <input type="file" class="form-control" name="photo" id="userphoto" >
        </div>
	  </div>
	  <div class="modal-footer">
		<button type="submit" class="btn btn-secondary">Submit</button>
		<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

		<input type="hidden" name="action" value="adduser">
		<input type="hidden" name="userId" id="userId" value="">
	  </div>
	  </form>
	</div>
  </div>
</div>