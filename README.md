# Opencart 3.x session time change
The plugin allows you to set the lifetime of the session, edited in the admin panel in seconds.
With each visit, the session validity period is extended again.
You can also add a cart lifetime for an unregistered user

# Модуль позволяет настраивать продолжительность сессии. 
По умолчанию продолжительность сессии в opencart прерывается после закрытия браузера. Если покупатель не залогинился, и добавил товары в корзину или закладки, то они  обнулятся после закрытия браузера. 
С помощью этого модуля можно увеличить продолжительность сессии, указав его в секундах в панели администратора модуля. 
![screenshot1](https://user-images.githubusercontent.com/106067946/180034371-76b57b51-a4a0-4200-afeb-6d121db15873.jpg)

## При каждом новом заходе пользователя на сайт, его время сессии будет снова продлеваться. 
Например: вы в панели указали 864000 (10 дней), если пользователь зайдет через 5 дней, то его сессия обновится и к ее продолжительности опять прибавится 10 дней. В этом случае, пользователь который заходит на сайт раз в 10 дней будет оставаться авторизованным. Если же пользователь не авторизован, то у него также будет продлеваться сессия, и будут сохраняться закладки и корзина (время корзины надо тоже указать)

## Плагин позволяет настроить продолжительность хранения корзины для незарегистрированных пользователей. 
По умолчанию данные из корзины незарегистрированных покупателей удаляются через один час после добавления. 
Вы можете указать продолжительность хранения корзины для незарегистрированных покупателей в часах.
Например вы можете указать 720 часов, это значит, что корзина у незарегистрированного покупателя будет сохраняться 30 дней.
![screenshot2](https://user-images.githubusercontent.com/106067946/180036995-6b00c9c6-9b5b-44b1-9422-735ecbb6a3c3.jpg)
Продолжительность хранения корзины не продлевается при повторном посещении сайта.

## Установка
* Скачайте install.xml и upload. 
* Запакуйте их в zip архив. 
* Переименуйте архив в autologin.ocmod.zip.
* В - Модули / Расширения - Установка расширений  - загрузите архив.
* В - Модификаторы - обновите модификаторы.
* В - Модули / Расширения - установите модуль, и произведите настройки.
