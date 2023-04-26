<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3 class="mx-3 my-2 text-dark bg-light py-2 px-3 rounded-3 font-monospace">
                <i class="fa-solid fa-folder-open"></i>
                New document
            </h3>
        </div>
    </div>
    <div class="row position-relative">
        <div class="col-4">
            <form action="" method="post" style="height: 85vh;" class="position-relative" id="submit-odm">
                <div class="row row-cols-2 mb-2">
                    <div class="col-12 mb-3">
                        <select name="odmproject" id="project_name"></select>
                    </div>
                    <div class="col mb-3">
                        <input type="date" name="odmdate" id="scheduled_on">
                    </div>
                    <div class="col mb-3">
                        <select name="odmfrom" id="from"></select>
                    </div>
                    <div class="col mb-3">
                        <input name="odmto" type="text" id="to" value=<?= array_key_exists("location", $_GET) ? $_GET['location'] : "" ?>>
                    </div>
                    <div class="col mb-3">
                        <select name="odmvehicle" id="vehicle">
                            <option disabled value="0" selected>Choose a vehicle</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 position-relative">
                    <fieldset class=" d-flex flex-column">
                        <div class="container">
                            <legend class="fs-6 fw-bold">Onboard passengers</legend>
                            <div class="row row-cols-2 g-2" id="s-passengers" style="height:20rem; overflow-y:auto"></div>
                        </div>
                    </fieldset>
                </div>
                <div class="mb-3 d-flex justify-content-end flex-column py-2 position-absolute start-0 bottom-0 w-100">
                    <button type="submit" class="btn-outline-dark w-50 shadow-sm fw-bold font-monospace mb-3 mx-auto w-25">
                        <i class="fa-solid fa-expand"></i>&nbsp;
                        Preview
                    </button>
                    <button type="button" class="btn-primary w-50 shadow-sm fw-bold font-monospace mx-auto w-25" id="print-button">
                        <i class="fa-solid fa-print"></i>&nbsp;
                        Print
                    </button>
                </div>
            </form>
        </div>
        <div class="col position-relative">
            <div class="border rounded-0 mx-3 pt-2 bg-light text-dark ps-3 fw-bold d-flex align-items-center">
                <h3 class="font-monospace fs-6">
                    <i class="fa-solid fa-i-cursor"></i>&nbsp;
                    Layout
                </h3>
            </div>
            <div id="frame-bg" class="border mx-3 px-2 py-2 d-flex position-relative" style="height: 95%; overflow-y: auto; background-color: transparent;">
                <div id="frame-bg-child" style="width: 53%; height:98%; min-width:30rem; max-width:45rem" class="shadow-lg my-2 mx-auto border bg-light">
                    <div class="container" id="odm-body">
                        <div class="row">
                            <div class="col position-relative">
                                <img src="https://www.shutterstock.com/image-vector/dark-wide-abstract-banner-grey-260nw-1804227037.jpg" alt="" id="doc-header" class="w-100 mt-3" style="height: 6rem !important;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <h5 class="text-center text-black-50 py-2" style="text-shadow: none;">Ordre de Mission</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col px-3" style="line-height: 20px; text-align: justify;">
                                <p style="color: black; text-shadow:none; font-size:12px; text-indent: 30px; font-family: 'Times New Roman', Times, serif;">
                                    Par la présente, le Directeur de Projet de la société %company%, %manager%, a l'honneur de solliciter l'attention bienveillante des autorités compétentes pour
                                    permettre le passage des employés mentionnés dans le tableau ci-dessous lors de leur trajet de <b>%depuis%</b> à
                                    <b>%destination%</b>. Ces derniers prendront la route le %schedule%, à bord du véhicule immatriculé %matriculation%.
                                </p>
                                <p class="text-decoration-underline" style="color: black; text-shadow:none; font-size:12px; text-indent: 30px; font-family: 'Times New Roman', Times, serif;">Liste des passagers:</p>
                                <ul class="list-group list-group-flush list-group-numbered ps-5" id="crew-list" style="font-family: 'Times New Roman', Times, serif; font-size: 10px;"></ul>
                                <p style="color: black; text-shadow:none; font-size:12px; text-indent: 30px; font-family: 'Times New Roman', Times, serif;">Je vous remercie par avance pour votre compréhension et votre collaboration.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col px-5 mt-1 d-flex">
                                <p class="ms-auto fw-bolder" style="color: black; text-shadow:none; font-size:12px; font-family: 'Times New Roman', Times, serif;">Fait à %depuis%, le %signdate%</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col  px-5 d-flex flex-column">
                                <p class="ms-auto px-4" style="color: black; text-shadow:none; font-size:12px; text-indent: 30px; font-family: 'Times New Roman', Times, serif;">Le Directeur du projet</p>
                                <p class="ms-auto px-4" style="color: black; text-shadow:none; font-size:12px; text-indent: 30px; font-family: 'Times New Roman', Times, serif;">%manager%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>