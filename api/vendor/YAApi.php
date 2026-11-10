<?php 

    use Bitrix\Main\Loader;
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    Loader::includeModule("iblock");
    Loader::includeModule("cfile");
    Loader::IncludeModule('form');


    class YAApi {

        public static function apiSendform( $POST ) {

            // YApp::sp( $POST );

            if ( $POST['FORM_CODE'] ) {

                $mail = new PHPMailer(true);

                try {
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    // $mail->isSMTP();                                            //Send using SMTP
                    // $mail->Host       = 'mail.yug-avto.ru';                     //Set the SMTP server to send through
                    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    // $mail->Username   = 'no-reply';                             //SMTP username
                    // $mail->Password   = 'Qaz12345!';                            //SMTP password
                    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    // $mail->Port       = 25;
                    // $mail->SMTPSecure = false;
                    // $mail->SMTPAutoTLS = true;
                        
                    //Recipients
                    $mail->setFrom('formsender@sollers-yug-avto.ru', 'Формы сайта sollers-yug-avto.ru');
                    $mail->isHTML(true);
                    $mail->CharSet = 'utf-8';
                    $mail->Subject = 'Заполнена форма '.$POST['FORM_NAME'];

                    if ( $POST['NAME'] == 'testtesttest' ) {
                        $mail->addAddress('anton.boreckiy@yug-avto.ru');
                    } else {
                        foreach ( Site::getFormRecipients() as $item ) $mail->addAddress($item);
                    }

                    $mail->Body = 'Заполнена форма '.$POST['FORM_NAME'].'<br /><br />';
                    if ( !empty($POST['MODEL']) )        $mail->Body .= 'Модель: '.$POST['MODEL'].'<br />';
                    if ( !empty($POST['VIN']) )          $mail->Body .= 'VIN: '.$POST['VIN'].'<br />';
                    if ( !empty($POST['MILEAGE']) )      $mail->Body .= 'Пробег: '.$POST['MILEAGE'].'<br />';
                    if ( !empty($POST['WISHES']) )       $mail->Body .= 'Пожелания по ремонту: '.$POST['WISHES'].'<br />';
                    if ( !empty($POST['SERVICE_TYPE']) ) $mail->Body .= 'Тип обслуживания: '.$POST['SERVICE_TYPE'].'<br />';
                    if ( !empty($POST['REGION']) )       $mail->Body .= 'Регион: '.$POST['REGION'].'<br />';
                    if ( !empty($POST['CITY']) )         $mail->Body .= 'Город: '.$POST['CITY'].'<br />';
                    if ( !empty($POST['DEALERSHIP']) )   $mail->Body .= 'Дилерский центр: '.$POST['DEALERSHIP'].'<br />';
                    if ( !empty($POST['DATE']) )         $mail->Body .= 'Желаемая дата: '.$POST['DATE'].'<br />';
                    if ( !empty($POST['NAME']) )         $mail->Body .= 'Имя: '.$POST['NAME'].'<br />';
                    if ( !empty($POST['PHONE']) )        $mail->Body .= 'Телефон: '.$POST['PHONE'].'<br />';
                    if ( !empty($POST['EMAIL']) )        $mail->Body .= 'E-mail: '.$POST['EMAIL'].'<br />';
                    if ( !empty($POST['DATES']) )        $mail->Body .= 'Длительность и даты: '.$POST['DATES'].'<br />';
                    if ( !empty($POST['COMPANY_NAME']) ) $mail->Body .= 'Организация: '.$POST['COMPANY_NAME'].'<br />';
                    if ( !empty($POST['COMPANY_INN']) )  $mail->Body .= 'ИНН: '.$POST['COMPANY_INN'].'<br />';
                    if ( !empty($POST['COMMENT']) )      $mail->Body .= 'Комментарий: '.$POST['COMMENT'].'<br />';
                    if ( isset($POST['LEGAL_ENTITY']) )    $mail->Body .= 'Юридическое лицо: '.($POST['LEGAL_ENTITY'] ? 'Да' : 'Нет').'<br />';
                    if ( isset($POST['AGREE_ADS']) )       $mail->Body .= 'Согласие на рекламу: '.($POST['AGREE_ADS'] ? 'Да' : 'Нет').'<br />';
                    if ( isset($POST['AGREE_INTERVIEW']) ) $mail->Body .= 'Согласие на интервью: '.($POST['AGREE_INTERVIEW'] ? 'Да' : 'Нет').'<br />';

                    $mail->send();
                    return ['status' => 'success'];
    
                } catch (Exception $e) {
    
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    return ['status' => 'error'];
                }

            } else {

                return ['status' => 'error'];
            }
        }
    }

?>