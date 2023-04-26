
<div class="container-fluid mx-1">
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="card bg-transparent h-100 my-2">
        <div class="card-header bg-light text-dark">
          <i class="fa-solid fa-passport"></i> Passports
        </div>
        <div class="card-body d-flex flex-column justify-content-start align-items-center">
          <form method="post" id="add-passport" class="shadow">
            <div class="mb-3">
              <input type="text" name="odmpassportname" id="passport_holder_names" class="form-control">
            </div>
            <div class="row g-3">
              <div class="col-md mb-3">
                <input type="text" name="odmpassportnum" id="passport_number" class="form-control">
              </div>
              <div class="col-md mb-3">
                <input type="text" name="odmpassportnationality" id="country" class="form-control">
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="text-black-50 fw-bold">
                <em id="count-docs"></em>
                &nbsp;
                <em>Passport(s) in records.</em>
              </div>
              <button type="submit" class="btn btn-outline-dark">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div class="card h-100 bg-transparent my-2">
        <div class="card-header bg-light text-dark">
          Passport List
        </div>
        <div class="card-body">
          <div class="row row-cols-md-2 g-1" id="pp-list" style="height: 85vh; overflow-y: auto;"></div>
        </div>
      </div>
    </div>
  </div>
</div>
