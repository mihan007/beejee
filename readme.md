Создать приложение-задачник.

Задачи состоят из:
- имени пользователя;
- е-mail;
- текста задачи;
- картинки;

1. Требования к изображениям - формат JPG/GIF/PNG, не более 320х240 пикселей. При попытке загрузить изображение большего размера, картинка должна быть пропорционально уменьшена до заданных размеров.

2. Создавать новые задачи может любой посетитель. Перед сохранением новой задачи можно нажать "Предварительный просмотр", он должен работать без перезагрузки страницы.

3. Сделайте вход для администратора (логин "admin", пароль "123"). Администратор имеет возможность редактировать текст задачи и поставить галочку о выполнении. Выполненные задачи в общем списке выводятся с соответствующей отметкой.

4. В списке задач нужно сделать возможность сортировки по имени пользователя, email и статусу. Вывод задач нужно сделать страницами по 3 штуки (пагинация).

5. В приложении нужно с помощью чистого PHP реализовать модель MVC (PHP-фреймворки использовать нельзя). Верстка на bootstrap. Результат нужно развернуть на любом бесплатном хостинге, (как пример - zzz.com.ua) чтобы можно было посмотреть его в действии. На github.com или bitbucket.org выкладывать необходимости нет.

6. Для того, чтобы мы могли проверить код, пожалуйста, скопируйте в корневую папку проекта наш онлайн-редактор dayside (https://github.com/boomyjee/dayside). Таким образом редактор будет доступен по url <ваш проект>/dayside/index.php. Нужно дать PHP доступ на исполнение и запись к папке dayside. Попробуйте открыть dayside сами - вы должны увидеть код своего приложения. При первом запуске редактор попросит установить пароль: пожалуйста, поставьте как в админке "123".

7. Обратите внимание, аккуратность - это один из главных критериев оценки тестового.