function loadCommonBody() {
    fetch('message.html')
        .then(response => response.text())
        .then(data => {
            document.body.innerHTML = data;
        });
};

window.onload = loadCommonBody;