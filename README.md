## Пояснительная записка

Для реализации собрал докер с PHP 7.4.30 и Symfony 5.4.11, так как в компании используются эти версии.

Для реализации AJAX выбрал метод fetch(). Повесил на обработчик onkeyup текстового поля textarea вызов функции sendText(). Таким образом, при каждом нажатии клавиши текст с markdown отправляется на сервер (/markdown/result), где обрабатывается и возвращается в виде текста (выбрал такой способ реализации вместо возврата JSON из-за простоты задачи). 

Текст на сервере обрабатывается правилами, которые описываются интерфейсом MarkdownRuleInterface, что позволит в будущем дописать необходимый функционал по оформлению другой markdown-разметки.

## Как запустить проект

git clone git@github.com:aftaa/playground-markdown.git

cd playground-markdown

docker-compose up -d

docker-compose exec php symfony composer update

http://localhost:82/
