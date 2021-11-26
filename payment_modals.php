<!-- checkout modals -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">

    <!-- modal one  -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"> Payment </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" id="payment_form">
          <script type="text/javascript">
            const form = $('#payment_form');
            form.submit(function(e) {
              e.preventDefault();
            })
          </script>
          <!-- mobile number  -->
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Mobile number</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>

          <!-- holder name  -->
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Account Holder name</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>

          <!-- mobile money provider  -->
          <div class="col-md-4">
            <label for="inputState" class="form-label">Payment Provider</label>
            <select id="inputState" class="form-select">
              <option selected>MTN</option>
              <option>Vodafone</option>
            </select>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- payment success modal -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Payment successful</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Payment was successful. Code will be emailed to you shortly.
      </div>
      <div class="modal-footer">
        <a href="backend/marketplace.php" class="btn btn-success">Continue shopping</a>
      </div>
    </div>
  </div>
</div>


