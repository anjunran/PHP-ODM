<div class="container py-5">
  <div class="row mb-4">
    <div class="col">
      <h3 class="text-white bg-dark py-2 px-3 rounded-3 font-monospace">
        <i class="fa-solid fa-location-arrow"></i>
        Add vehicles
      </h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <form method="post" id="add-vehicle" class="border p-4 rounded-3 shadow">
        <div class="mb-3">
          <label for="vehicle_id" class="form-label">Vehicle ID</label>
          <input type="text" class="form-control" id="vehicle_id" name="odmvehicleid">
        </div>
        <div class="mb-3">
          <label for="brand" class="form-label">Brand</label>
          <input type="text" class="form-control" id="brand" name="odmvehiclebrand">
        </div>
        <div class="mb-3">
          <label for="seats_number" class="form-label">Seats Number</label>
          <input type="text" class="form-control" id="seats_number" name="odmvehicleseat">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row pt-5">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table id="flagged-table" class="table table-striped text-center">
          <thead>
            <tr>
              <th>N/I</th>
              <th>Brand</th>
              <th>Seats</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody id="list-vehicle"></tbody>
        </table>
      </div>
    </div>
  </div>
</div>