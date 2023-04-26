<script type="text/javascript">
    const createDatas = (url, form) => {
        const xhr = new XMLHttpRequest();
        const formData = new FormData(form);
        xhr.open('POST', url);
        xhr.onload = () => {
            if (xhr.status === 200) {
                setTimeout(() => {
                    location.reload();
                }, 200);
            }
        };
        xhr.send(formData);
    };

    const forms = document.querySelectorAll('form');
    forms.forEach((form) => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const url = `http://localhost/odmmain/server/models/add${form.id.charAt(4).toUpperCase()}${form.id.slice(5)}.php`;
            createDatas(url, form);
        });
    });
</script>