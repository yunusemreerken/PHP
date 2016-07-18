<?php
/**
 * Created by PhpStorm.
 * User: YunusEmre
 * Date: 17.7.2016
 * Time: 16:44
 */
    $ad=strip_tags($_POST['ad']);
    $eposta=strip_tags($_POST['eposta']);
    $konu=strip_tags($_POST['konu']);
    $mesaj=strip_tags($_POST['mesaj']);
    $icerik= 'Ad :'.$ad.'<br> Eposta :'.$eposta.'<br>'.$mesaj;

    mail('ynsmrrkn@gmail.com',$konu,$icerik);
    echo "Mesajınız gönderildi!";

?>