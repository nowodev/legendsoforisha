<!-- Contact Us area -->
<section id="contact" class="content-section latest-articles text-light">
  <div class="container">
    <header class="section-header text-center">
      <h2>Contact Us</h2>
      <hr class="w-10 border-warning border-top-2 o-90">
      <p class="lead-1">Proin sed enim eu libero dapibus convallis ut sed felis. Sed luctus ac mi sit amet tincidunt. Nullam in urna dolor. Pellentesque eget venenatis elit, a aliquet velit. Proin metus erat, convallis id sapien sed, porta viverra odio. Mauris ac odio eu libero vehicula pulvinar. Nam ac lacus non turpis fermentum accumsan.</p>
    </header>
    <div class="row gutters-y align-items-center">
      <div class="col-lg-4">
          <form data-form="contact_form" action="@url('assets/php/contact-form.php')" class="input-transparent" method="POST"><div class="alert" role="alert" data-alert="result" style="display: none;"></div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name" required="">
              </div>
              <div class="form-group col-md-12">
                <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address" required="">
              </div>
            </div>
            <div class="form-group">
              <input name="subject" type="text" class="form-control" placeholder="Subject" required="">
            </div>
            <div class="form-group">
              <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" name="message" required=""></textarea>
            </div>
            <button class="btn btn-lg btn-warning" type="submit">Send it over</button>
        </form>
      </div>
      <div class="col-lg-8">
        <div class="py-13 rounded" data-map="true" data-map-style="custom" data-lat="35.61030245" data-lng="140.11365268" data-marker-lat="35.61030245" data-marker-lng="140.11365268" data-marker-animation="drop" data-marker-title="Office" data-zoom="12"></div>
      </div>
    </div>
  </div>
</section>
<!-- /.Contact Us area -->