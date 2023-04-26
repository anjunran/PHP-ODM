<div class="row w-100">
    <div class="col">
        <h3 class="mx-3 my-2 text-white bg-dark py-2 px-3 rounded-3 font-monospace">
            <i class="fa-solid fa-heading"></i> File header
        </h3>
    </div>
</div>
<div class="row py-2 w-100 position-relative mt-5">
    <div class="col-8 ms-3 d-flex align-items-center shadow">
        <div class="row g-5 w-100">
            <div class="col-12">
                <form action="" method="post" class="mx-auto h-100" id="f-header">
                    <div class="mb-3">
                        <input type="text" name="odmheadname" id="header_name">
                    </div>
                    <div class="position-absolute" style="visibility: hidden;">
                        <input readonly type="text" name="odmnewheader" id="new_header">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12 d-flex flex-column justify-content-center">
                                <input type="file" id="header">
                                <div class="container-fluid" style="height: 250px; width: 100%; overflow: hidden;">
                                    <img style="width: 35%; aspect-ratio:3/2; object-fit:contain" class="bg-transparent p-1 fa-regular fa-images" alt='No image to display' id="img-preview">
                                </div>
                                <label for="header" class="rounded-3 w-50 d-flex justify-content-start py-3 px-3" style="cursor: pointer;">
                                    <i class="fa-solid fa-upload "></i>
                                    &nbsp;
                                    &nbsp;
                                    <span class="">Upload header</span>
                                </label>
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <input type="submit" value="Save" class="btn-info ms-auto mt-auto w-25">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="py-5 rounded-3 shadow px-4 me-3">
            <div class="py-5 w-100">
                <div class="mb-3">
                    <select name="activeheader" id="activate_header">
                        <option value="0" selected disabled>Select your header</option>
                    </select>
                </div>
                <div class="mb-3">
                    <img id="p-img" style="height:200px; width:100%" src="https://www.hope3k.net/images/placeholders/portfolio-single-placeholder.jpg" alt="..." class="img-fluid border rounded-4">
                </div>
                <div class="mb-3">
                    <select name="assignid" id="assign_to_(project)" class="assign_to">
                        <option value="0" selected disabled>Select your project</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn-secondary w-25" id="set_assign_header">Set</button>
                </div>
            </div>
        </div>
    </div>
</div>