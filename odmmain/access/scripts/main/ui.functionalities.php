<script type="text/javascript">
    const imgUploader = document.querySelector("#header");
    const imgInput = document.querySelector("#new_header");
    const imgPreview = document.querySelector("#img-preview");

    imgUploader?.addEventListener("change", handleImageChange);

    function handleImageChange(event) {
        const file = event.target.files[0];

        const reader = new FileReader();
        reader.addEventListener('load', () => {
            const dataUrl = reader.result;
            imgInput.value = dataUrl;
            imgPreview.src = dataUrl;
        });

        reader.readAsDataURL(file);
    }


    const setHeaderAssign = () => {
        const hSelect = document.querySelector("#activate_header");
        const pSelect = document.querySelector(".assign_to");
        const parametersSelected = hSelect.value * pSelect.value !== 0;

        if (!parametersSelected) {
            alert(`Kindly ensure that the header and project fields have been duly selected.`);
            return;
        }

        const headerId = hSelect.value;
        const projectId = pSelect.value;
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `http://localhost/odmmain/server/models/assignHP.php?h=${headerId}&p=${projectId}`);
        xhr.onload = () => {
            if (xhr.status === 200) {
                alert("Operation performed. The project has been properly configured with a header.");
            }
        };
        xhr.send(null);
    };

    const setHeaderAssignBtn = document.querySelector("#set_assign_header");
    setHeaderAssignBtn?.addEventListener("click", setHeaderAssign, false);



    var modal = document.getElementById("myModal");
    var img = document.getElementById("img-preview");
    var modalImg = document.getElementById("img01");
    if (null !== img) {
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
        }
    }
    var span = document.getElementsByClassName("close")[0];
    if (void 0 !== span) {
        span.onclick = function() {
            modal.style.display = "none";
        }
    }

    const odmframepreview = document.querySelector("#frame-bg-child>div:only-child");
    const submitodm = document.querySelector("#submit-odm");
    const passengers = document.querySelector("#s-passengers");

    submitodm?.addEventListener("submit", async function(e) {
        e.preventDefault();
        odmframepreview.style.visibility = "visible";
        const formdata = new FormData(submitodm);
        const passengersNodes = passengers.childNodes;
        const crewTemp = [];

        passengersNodes.forEach(pNode => {
            const pSelect = pNode.firstChild.value;
            crewTemp.push(pSelect);
        });

        const crewList = JSON.stringify(crewTemp.filter(a => a !== "0"));

        const response = await fetch(`http://localhost/odmmain/server/models/saveOdm.php?crew=${crewList}`, {
            method: 'POST',
            body: formdata
        });

        if (response.ok) {
            const snapshots = await response.json();

            if (snapshots.saved) {
                const database = snapshots.datas;
                const header = database['image'];
                const docheader = document.getElementById("doc-header");
                docheader.src = header;
                const passagers = database['passagers'].split(" ");
                const crewlist = document.getElementById("crew-list");

                if (passengers.length !== 0) {
                    for (const passager of passagers) {
                        const listitem = document.createElement("li");
                        listitem.style.textShadow = "none";
                        listitem.style.color = "black";
                        const response = await fetch(`http://localhost/odmmain/server/models/queryPassport.php?query=${passager}`);

                        if (response.ok) {
                            const data = await response.json();
                            const {
                                names,
                                number,
                                country
                            } = data[0];
                            const queryPassenger = [names, number, country].join("/").toUpperCase();
                            listitem.innerHTML = queryPassenger;
                            crewlist.append(listitem);
                        }
                    }
                }

                const odmbody = document.querySelectorAll("#odm-body p");

                for (const p of odmbody) {
                    let text = p.outerText;

                    for (const prop in database) {
                        const regex = new RegExp(`%${prop}%`, "g");

                        switch (prop) {
                            case "signdate":
                                const datetime = database[prop];
                                const dateParts = datetime.split(" ");
                                const newdate = dateParts[0];
                                const dateStr = newdate;
                                const date = new Date(dateStr);
                                const day = date.getDate().toString().padStart(2, "0");
                                const month = (date.getMonth() + 1).toString().padStart(2, "0");
                                const year = date.getFullYear().toString();
                                const formattedDate = `${day}/${month}/${year}`;
                                text = text.replace(regex, formattedDate);
                                break;
                            case "schedule":
                                const ds = database[prop];
                                const dt = new Date(ds);
                                const dd = dt.getDate().toString().padStart(2, "0");
                                const mm = (dt.getMonth() + 1).toString().padStart(2, "0");
                                const yyyy = dt.getFullYear().toString();
                                const fDate = `${dd}/${mm}/${yyyy}`;
                                text = text.replace(regex, fDate);
                                break;
                            default:
                                text = text.replace(regex, database[prop]);
                                break;
                        }
                    }

                    p.innerHTML = text;
                }
            }
        } else {
            alert("An error occurred while saving the ODM.");
        }
    });
</script>