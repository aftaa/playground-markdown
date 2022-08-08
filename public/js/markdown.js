let sendText = function () {
    let textElement = document.getElementById('markdown_text');
    let resultElement = document.getElementById('markdown_result');

    resultElement.innerHTML = textElement.value;
}