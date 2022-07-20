# opencart_3_autologin
The plugin allows you to set the lifetime of the session, edited in the admin panel in seconds.
With each visit, the session validity period is extended again.
You can also add a cart lifetime for an unregistered user

# Модуль позволяет настраивать продолжительность сессии. 
По умолчанию продолжительность сессии в opencart прерывается после закрытия браузера. Если покупатель не залогинился, и добавил товары в корзину или закладки, то они  обнулятся после закрытия браузера. 
С помощью этого модуля можно увеличить продолжительность сессии, указав его в секундах в панели администратора модуля. 

Также при каждом новом заходе пользователя на сайт, его время сессии будет снова продлеваться. Например: вы в панели указали 864000 (10 дней), если пользователь зайдет через 5 дней, то его сессия обновится и к ее жизни опять прибавится 10 дней.
Еще плагин позволяет настроить время жизни корзины незарегистрированных пользователей в часах. Например вы можете указать 720 часов, это значит, что корзина у незарегистрированного пользователя будет сохраняться 30 дней.
