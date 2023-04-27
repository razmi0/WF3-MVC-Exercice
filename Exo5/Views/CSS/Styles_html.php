<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ul {
        border: 1px solid black;
        list-style-type: none;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        width: fit-content;
        align-items: center;
        padding: 30px;
        margin: 30px;
    }

    li {
        padding: 20px;
    }

    tr {
        display: flex;
        flex-direction: column;
        margin: 2px 5px;
        padding: 5px 2px;
        text-align: center;
    }

    .key {
        border: solid 1px red;
    }

    .val {
        border: solid 1px blue;
    }

    /* FORM CUSTOM STYLESHEETS */

    .container-form {
        background: #f8f9fa;
        border: 1px solid white;
        box-shadow: 0px 0px 5px 0px rgba(180, 180, 207, 0.75);
        border-radius: 5px;
        color: #212121;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .form-title {
        color: #292d33;
        font-weight: 600;
        font-size: 2.2rem;
    }

    .form-group {
        margin-bottom: 2rem;
        color: rgba(180, 180, 207, 0.75);
        font-style: italic;
    }

    .form-title-input {
        color: rgba(180, 180, 207, 0.75);
        font-weight: 500;
        font-size: 1.1rem;
        position: relative;
        bottom: 35px;
        left: 10px;
        transition: all 0.5s ease-in-out;
    }

    input:focus~label,
    input:valid~label {
        bottom: 65px;
        font-size: 1rem;
        color: #292d33;
    }

    label.required::after {
        content: "*";
        color: #292d33;
        margin-left: 4px;
    }
    input[type="password"],
    input[type="text"],
    input[type="email"],
    textarea {
        background: #f8f9fa;
        border-radius: 0% !important;
        border: none !important;
        box-shadow: none !important;
        border-bottom: 1px solid #292d33 !important;
        resize: none;
    }

    .textarea-counter {
        color: #292d33;
    }

    .error {
        color: rgb(201, 48, 21);
        font-size: 14px;
        font-weight: 400;
    }

    .title-emoji-anim {
        animation: emoji-anim 1s ease-in-out infinite;
    }

    button {
        display: inline-block;
        border-radius: 4px;
        background-color: #333333;
        border: none;
        color: #e8e8e8;
        text-align: center;
        font-size: 1.1rem;
        padding: 16px;
        width: 130px;
        transition: all 0.5s;
        cursor: pointer;
    }

    button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    button span:after {
        content: "»";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -15px;
        transition: 0.5s;
    }

    button:hover span {
        padding-right: 15px;
    }

    button:hover span:after {
        opacity: 1;
        right: 0;
    }

    @keyframes emoji-anim {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0, 5px);
        }

        100% {
            transform: translate(0, 0);
        }
    }
</style>