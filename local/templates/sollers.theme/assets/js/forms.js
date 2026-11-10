$(document).on('click', '[role="sendForm"]', function () {

    let Form = $(this).closest('form');
    let Flag = true;

    let Success = $(Form).siblings('.alert-success')
    let Error = $(Form).siblings('.alert-danger')

    let Send = {};

    $(Form).find('input, select').each(function (i, e) {
        const $el = $(e);
        const name = $el.attr('name');
        const val = ($el.val() || '').toString().trim(); // Безопасный нативный trim

        // Снимаем ошибку перед проверкой
        $el.removeClass('is-invalid');

        // 1. Проверка на обязательность
        if ($el.is(':required')) {
            
            // Для чекбоксов: обязателен, но не нажат
            if ($el.is(':checkbox') && !$el.is(':checked')) {
                Flag = false;
                $el.addClass('is-invalid');
            }

            // Для остальных полей (текст, селекты): обязателен, но пустой
            if (!$el.is(':checkbox') && (!val || val === '0')) {
                Flag = false;
                $el.addClass('is-invalid');
            }
        }

        // 2. Сохранение данных в Send
        if (name) {
            if ($el.is(':checkbox')) {
                Send[name] = $el.is(':checked') ? 1 : 0;
            } else {
                Send[name] = $el.val();
            }
        }
    });

    

    if (Flag) {

        $.ajax({
            type: "POST",
            url: '/api/send',
            data: Send,
            success: function (data) {

                let res = JSON.parse(data);

                if (res.status == 'success') {

                    $(Form).slideUp(200);
                    $(Success).slideDown(200);
                    $(Error).hide();

                    // let ct_site_id = '59260';
                    // let ct_data = {
                    //     fio: Send.name,
                    //     phoneNumber: Send.phone.replace(/[^\d;]/g, ''),
                    //     subject: 'Формы лендинга TANK - ' + Send.form,
                    //     requestUrl: location.href,
                    //     sessionId: window.call_value
                    // };
                    // jQuery.ajax({
                    //     url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/' + ct_site_id + '/register/',
                    //     dataType: 'json',
                    //     type: 'POST',
                    //     data: ct_data
                    // });
                    // if (!!$(Form.data('goal'))) ym(93480545, 'reachGoal', Form.data('goal'));

                    setTimeout(() => {
                        // $(Form).find('.row:not([role="title"])').slideDown(680);
                        $(Form).slideDown(200);
                        $(Success).slideUp(200);
                        $(Error).slideUp(200);
                        $(Form).find('input').each(function (i, e) {
                            $(e).val('')
                            $(e).prop('checked', false);
                        });
                    }, 5000);


                } else {

                    $(Error).slideDown(200);
                    setTimeout(() => {
                        $(Success).slideUp(200);
                        $(Error).slideUp(200);
                    }, 5000);
                }
            },
            error: function () {

                $(Error).slideDown(680);
                setTimeout(() => {
                    $(Success).slideUp(200);
                    $(Error).slideUp(200);
                }, 5000);
            }

        });

    }

    return false
});

