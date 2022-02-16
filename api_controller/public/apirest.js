function api_js_index() {
    console.log('Entrando en la unción AJAX');
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById('resultado').innerHTML = xhttp.responseText;

    };

    xhttp.open('GET', '/api/apirest', true);
/*     xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json');
    xhttp.setRequestHeader('Accept', 'application/vnd.api+json'); */
    xhttp.send();
}