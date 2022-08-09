function sendText() {
    fetch('/markdown/result?text=' + document.getElementById('markdown_text').value)
        .then(function (response) {
            response.text().then(function (html) {
                document.getElementById('markdown_result').innerHTML = html;
            });
        })
        .catch(function (error) {
            console.log('Error: ', error);
        });
}