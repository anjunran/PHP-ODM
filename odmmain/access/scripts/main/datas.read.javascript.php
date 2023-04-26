<script type="text/javascript">
    function populatePassportSelect(element, datas) {
        [...datas].forEach(({
            id,
            name,
            pnum
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column"><em>${name}</em>&nbsp;<b class="fw-bold">(${pnum})</b></span>`;
                element.append(optNode);
            }
        });
    }

    function populateDestinationSelect(element, datas) {
        [...datas].forEach(({
            id,
            dest,
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column">${dest}</span>`;
                element.append(optNode);
            }
        });
    }

    function populateVehicleSelect(element, datas) {
        [...datas].forEach(({
            id,
            ni,
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column">${ni}</span>`;
                element.append(optNode);
            }
        });
    }

    function populateOdmVehicleSelect(element, datas) {
        [...datas].forEach(({
            id,
            name,
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column">${name}</span>`;
                element.append(optNode);
            }
        });
    }

    function populatePassengerSelectArray(element, datas) {
        [...datas].forEach(({
            id,
            name,
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column">${name}</span>`;
                element.append(optNode);
            }
        });
    };

    function populateHeaderSelectList(element, datas) {
        [...datas].forEach(({
            id,
            header,
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column">${header}</span>`;
                element.append(optNode);
            }
        });
    };

    function populateAssignProjectSelect(element, datas) {
        [...datas].forEach(({
            id,
            name,
        }) => {
            if (null !== element) {
                let optNode = document.createElement("option");
                optNode.setAttribute("value", id);
                optNode.innerHTML = `<span class="d-flex flex-column">${name}</span>`;
                element.append(optNode);
            }
        });
    }

    function parseDatas(url, element) {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.onload = () => {
            if (xhr.status === 200)
                if (element !== null) {
                    if (element.tagName == "SELECT") {
                        let datas = JSON.parse(xhr.response);
                        switch (element.getAttribute("id")) {
                            case "select-pp":
                                populatePassportSelect(element, datas);
                                break;
                            case "from":
                                populateDestinationSelect(element, datas);
                                break;
                            case "vehicle":
                                populateVehicleSelect(element, datas);
                                break;

                            case "project_name":
                                populateOdmVehicleSelect(element, datas);
                                break;
                            case "p-select":
                                populatePassengerSelectArray(element, datas);
                                break;

                            case "activate_header":
                                populateHeaderSelectList(element, datas);
                                break;
                            default:
                                populateAssignProjectSelect(element, datas);
                                break;
                        }
                    } else {
                        element.innerHTML = xhr.response;
                    }
                }
        };
        xhr.send(null);
    };

    let myDestinations = document.querySelector("#my-destinations");
    parseDatas("http://localhost/odmmain/server/models/getDestination.php", myDestinations);

    let count = document.querySelector("#count-docs");
    parseDatas("http://localhost/odmmain/server/models/countPassports.php", count);

    let passportView = document.querySelector("#pp-list");
    parseDatas("http://localhost/odmmain/server/models/getPassports.php", passportView);

    let selectPP = document.querySelector("#select-pp");
    parseDatas("http://localhost/odmmain/server/models/getPassports.options.php", selectPP);

    let selectFrom = document.querySelector("#from");
    parseDatas("http://localhost/odmmain/server/models/getDestinations.options.php", selectFrom);

    let listvehicle = document.querySelector("#list-vehicle");
    parseDatas("http://localhost/odmmain/server/models/getVehicles.php", listvehicle);

    let listSelectVehicle = document.querySelector("#vehicle");
    parseDatas("http://localhost/odmmain/server/models/getVehicles.options.php", listSelectVehicle);
    listSelectVehicle?.addEventListener("change", (e) => {
        let car = e.target.value;
        let xhri = new XMLHttpRequest();
        xhri.open("GET", `http://localhost/odmmain/server/models/getVehicleSeat.php?vehicle=${car}`);
        xhri.onload = () => {
            if (xhri.status === 200) {
                let seats = xhri.response;
                let passengers = document.querySelector("#s-passengers");
                passengers.innerHTML = "";
                for (let i = 0; i < seats; i++) {
                    let selection = document.createElement("select");
                    let column = document.createElement("div");
                    let title = document.createElement("option");
                    title.innerHTML = `Passenger ${i+1}`;
                    title.setAttribute("value", 0);
                    title.setAttribute("disabled", true);
                    title.setAttribute("selected", true);
                    column.setAttribute("class", "col");
                    selection.setAttribute("class", "form-select");
                    selection.setAttribute("id", `p-select`);
                    selection.append(title);
                    column.appendChild(selection)
                    passengers.append(column);
                }
                let selectArrays = document.querySelectorAll("#p-select");
                selectArrays.forEach(sa => {
                    parseDatas("http://localhost/odmmain/server/models/getPassports.options.php", sa);
                });
            }
        };
        xhri.send(null);
    }, false);

    let listSelectOdmProject = document.querySelector("#project_name");
    parseDatas("http://localhost/odmmain/server/models/getProjects.options.php", listSelectOdmProject);

    let listselectHeader = document.querySelector("#activate_header");
    parseDatas("http://localhost/odmmain/server/models/getHeaders.options.php", listselectHeader);
    listselectHeader?.addEventListener("change", (e) => {
        const xhri = new XMLHttpRequest();
        const image = e.target.value;
        xhri.open("GET", "http://localhost/odmmain/server/models/getHeaderimage.php?query=" + image);
        xhri.onload = () => {
            if (xhri.status === 200) {
                const source = xhri.response;
                const img = document.querySelector("#p-img");
                img.src = source;
            }
        };
        xhri.send(null);
    }, false);

    let listAssignProject = document.querySelector(".assign_to");
    parseDatas("http://localhost/odmmain/server/models/getProjects.options.php", listAssignProject);
</script>