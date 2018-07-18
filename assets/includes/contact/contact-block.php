<div class="w-40 mx-auto mt-5">
  <form class="js-validate">
      <h1 class="text-center text-primary">Contact Us</h1>
  <div class="js-form-message mb-4">
        <div class="js-focus-state input-group u-form">
          <div class="input-group-prepend u-form__prepend">
            <span class="input-group-text u-form__text">
              <span class="fa fa-user u-form__text-inner"></span>
            </span>
          </div>
          <input type="text" class="form-control u-form__input" name="name" required
                 placeholder="Name"
                 aria-label="Name"
                 data-msg="Please enter a valid name."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
      </div>
      <!-- Input -->
      <div class="js-form-message mb-4">
        <div class="js-focus-state input-group u-form">
          <div class="input-group-prepend u-form__prepend">
            <span class="input-group-text u-form__text">
              <span class="fa fa-envelope u-form__text-inner"></span>
            </span>
          </div>
          <input type="email" class="form-control u-form__input" name="email" required
                 placeholder="Email"
                 aria-label="Email"
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
      </div>
      <!-- End Input -->
      <div class="js-form-message mb-4">
        <div class="js-focus-state input-group u-form">
          <div class="input-group-prepend u-form__prepend">
            <span class="input-group-text u-form__text">
              <span class="fa fa-user u-form__text-inner"></span>
            </span>
          </div>
          <input type="text" class="form-control u-form__input" name="subject" required
                 placeholder="Subject"
                 aria-label="Subject"
                 data-msg="Please enter a valid subject"
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
      </div>
      <div class="js-form-message mb-4">
      <div class="js-focus-state input-group u-form">
      <textarea class="form-control u-form__input" rows="4" name="message" required
                placeholder="Your message goes here..."
                aria-label="Your message goes here..."
                data-msg="Please enter a message."
                data-error-class="u-has-error"
                data-success-class="u-has-success"></textarea>
    </div>
  </div>
        <button type="submit" class="btn btn-block btn-primary u-btn-primary transition-3d-hover">Send</button>
  </form>
</div>