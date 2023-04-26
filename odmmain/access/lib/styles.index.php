<style>
    @import url('https://fonts.googleapis.com/css2?family=Oxanium&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        /* border: 1px solid red; */
    }

    body {
        position: relative;
        width: 100vw;
        height: 100vh;
        font-family: 'Oxanium', cursive !important;
        color: white !important;
        text-shadow: 1px 0px 2px black;
        font-size: 1vmax !important;
        background: #C9CCD3;
        background-image: linear-gradient(to right, #f9d423 0%, #ff4e50 100%);
        background-blend-mode: exclusion;
        /* overflow: hidden; */
    }

    #app-init {
        position: relative;
        width: 100%;
        height: 100%;
        /* overflow: hidden; */
    }

    textarea {
        resize: none;
    }

    #header {
        appearance: none;
        display: none;
    }

    #frame-bg {
        background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);

    }

    #frame-bg-child>div:only-child {
        visibility: hidden;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    /* Modal Content */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 800px;
        height: auto;
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: all 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }
</style>