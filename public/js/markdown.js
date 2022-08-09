let textElement = document.getElementById('markdown_text');
let resultElement = document.getElementById('markdown_result');

let sendText = function () {

    resultElement.innerHTML = textElement.value;
}