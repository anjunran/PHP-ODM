<script type="text/javascript">
    let inputClassFormControl = document.querySelectorAll("input:not(input[type~=submit]), textarea");
    inputClassFormControl.forEach(iFC => {
        iFC.classList.add("form-control");
        if (iFC.parentElement.tagName == "DIV") {
            let label = document.createElement("label");
            let textLabel = document.createTextNode(iFC.id.split("_").join(" ").toUpperCase() + " :");
            label.classList.add("fw-bold");
            label.classList.add("mb-2");
            label.appendChild(textLabel);
            iFC.parentElement.insertBefore(label, iFC);
        }
    });

    let inputClassFormSelect = document.querySelectorAll("select");
    inputClassFormSelect.forEach(iFS => {
        iFS.classList.add("form-select");
        if (iFS.parentElement.tagName == "DIV") {
            let label = document.createElement("label");
            let textLabel = document.createTextNode(iFS.id.split("_").join(" ").toUpperCase() + " :");
            label.classList.add("fw-bold");
            label.classList.add("mb-2");
            label.appendChild(textLabel);
            iFS.parentElement.insertBefore(label, iFS);
        }
    });


    let buttonClassBtn = document.querySelectorAll("input[type~=submit], button, a");
    buttonClassBtn.forEach(bFC => {
        bFC.classList.add("btn");
    });

    let formLayout = document.querySelectorAll("form");
    formLayout.forEach(fl => {
        fl.classList.add("container");
        fl.classList.add("border");
        fl.classList.add("mx-3");
        fl.classList.add("py-2");
    });

    let bsTableFlagged = document.querySelectorAll("#flagged-table");
    bsTableFlagged.forEach(fTable => {
        fTable.classList.add("table");
    });
</script>