<div class="container-fluid bg-transparent">
    <div class="row py-3">
        <div class="col">
            <h3 class="mx-3 my-2 text-white bg-dark py-2 px-3 rounded-3 font-monospace">
                <i class="fa-solid fa-location-arrow"></i>
                Add destinations
            </h3>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-4">
            <form id="add-destination" method="post" class="shadow">
                <div class="mb-3">
                    <input type="text" name="odmdestination" id="new_destination" class="form-control" placeholder="Enter destination">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Submit" class="btn btn-outline-dark w-100">
                </div>
            </form>
            <div class="my-2 w-50 mx-auto">
                <div class="resp"></div>
            </div>
        </div>
        <div class="col-7 mx-1">
            <div class="bg-transparent border rounded-3 shadow p-4" style="height: 42rem; overflow-y:auto">
                <h5 class="mb-3">My destinations:</h5>
                <ul class="list-group" id="my-destinations"></ul>
            </div>
        </div>
    </div>
</div>