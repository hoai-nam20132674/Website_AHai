app.controller('footer', function ($scope, modal) {
    $scope.subscribeEmail = '';

    $scope.subscribe = function(){
        loading.show();
        $.ajax({
            url: baseUrl + '/site/subscribe',
            method: 'GET',
            data: {
                email: $scope.subscribeEmail
            },
            success: function (resp) {
                if (resp.success) {
                    modal.alert('Đăng ký nhận bản tin thành công!');
                }
                else
                    modal.alert(resp.data.email[0]);
                loading.hide();
            }
        });
    }
});
