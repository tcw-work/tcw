$(window).on('load', function () {
    const config = {
        messagingSenderId: "335739863590"
    };
    firebase.initializeApp(config);
    const messaging = firebase.messaging();
    messaging.usePublicVapidKey("BOmwBsR6YQWp39KEIAMEzGcaS5ej7FSQ-KxYHaHMCPEdocWJJ_2nv_aNM8xLJAODYmQWJm7fZv4jgPYhJcsfXA0");

    Notification.requestPermission().then((permission) => {
        if (permission === 'granted') {
            // 通知を許可した場合
            console.log('Notification permission granted.');

            messaging.getToken().then((currentToken) => {
                if (currentToken) {
                    // トークン取得成功
                    console.log('通知許可されました');
                    console.log("currentToken:");
                    console.log(currentToken);
                } else {
                    // トークン取得失敗
                    console.log("トークン取得に失敗しました:");
                }
            });
        } else {
            // 通知を拒否した場合
            console.log('通知拒否されました');
        }
    });
});
