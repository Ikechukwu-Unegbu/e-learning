<div
  class="modal fade"
  id="enroll"
  tabindex="-1"
  aria-labelledby="enrollLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="enrollLabel">Enrollment</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <p class="lead">Fill out this form and we will get back to you</p>
        <form>
          <div class="mb-3">
            <label for="first-name" class="col-form-label">
              Fullname:
            </label>
            <input type="text" name="fullname" class="form-control" id="first-name" />
          </div>
          <!-- <div class="mb-3">
            <label for="last-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" id="last-name" />
          </div> -->
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="email" />
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password" />
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" name="confirm_password" class="form-control" id="password" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal"
        >
          Close
        </button>
        <button type="button" class="btn btn-primary">Create Account</button>
      </div>
    </div>
  </div>
</div>
