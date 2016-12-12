<!DOCUMENT>
<html>
<script type="text/javascript">
	
	// при регистрации указываем на js-файл с кодом serviceWorker’а
// получаем Promise объект
navigator.serviceWorker.register(
   '/test_serviceworker/appCache.js'
).then(function(registration) {
    // при удачной регистрации имеем объект типа ServiceWorkerRegistration  
    console.log('ServiceWorker registration', registration);
    // строкой ниже можно прекратить работу serviceWorker’а
    //registration.unregister();
}).catch(function(err) {
    throw new Error('ServiceWorker error: ' + err);
});


self.addEventListener('install', function(event) {
    // инсталляция
    console.log('install', event);
});

self.addEventListener('activate', function(event) {
    // активация
    console.log('activate', event);
});
</script>
</html>