<script type="text/javascript">
    function deleteDatas(url, value) {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", url + `?query=${value}`);
        xhr.onload = () => {
            if (xhr.status === 200)
                setTimeout(() => {
                    location.reload();
                }, 3e2);
        };
        xhr.send(null);
    };

    setTimeout(() => {
        if (null !== myDestinations) {
            let children = myDestinations.children;
            for (let i = 0; i < children.length; i++) {
                const value = children.item(i).firstElementChild.innerText;
                const button = children.item(i).lastElementChild.lastElementChild;
                button?.addEventListener("click", function() {
                    deleteDatas("http://localhost/odmmain/server/models/delDestination.php", value);
                });
            }
        }

        let pportDeletes = document.querySelectorAll("#del-pport");
        pportDeletes.forEach((btn) => {
            btn.addEventListener("click", function() {
                const KEY = btn.getAttribute("key");
                deleteDatas("http://localhost/odmmain/server/models/delPassports.php", KEY);
            }, false);
        });

        let delvehic = document.querySelectorAll("#del-vehicule");
        delvehic.forEach(dv => {
            const KEY = dv.getAttribute("key");
            dv.addEventListener('click', () => {
                deleteDatas("http://localhost/odmmain/server/models/delVehicles.php", KEY);
            }, false);
        });
    }, 5e2);
</script>