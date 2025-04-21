<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded p-4" style="background-color: #f5f9fa">
            <div class="modal-body">
                <form class="rnt-contact-form rwt-dynamic-form" id="enquiry-form">
                    @csrf
                    <div class="modal-header mb-4">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    <div class="row row--10">
                        <div class="form-group col-lg-12">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="tel" name="phone" id="phone" placeholder="Phone number">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="interested_program" id="interested_program"
                                placeholder="Interested Program">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="6" placeholder="Type your message"></textarea>
                        </div>
                        <div class="form-group col-12 text-left">
                            <button class="rn-btn edu-btn submit-btn btn-medium" name="submit" type="submit">Submit <i class="icon-4"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

