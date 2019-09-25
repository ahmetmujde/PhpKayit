
<?php    
//veri tabanı bağlantısı oluşturma....

$db_host ='localhost'; //standart 127.0.0.1
$db_username='root';  //veritabanı kullanıcı adı
$db_pass=''; //veritabanı kullanıcı şifresi
$db_name ='okul'; //veritabanı ismi


$conn = mysqli_connect($db_host, $db_username,$db_pass, $db_name);

$blank ='<br/>'; //satır atlamak için kullanılan değişken


if (!$conn) {
    echo "Hata : MySQL bağlantısı başarısız." . $blank;
    echo "Hata Kodu : " .mysqli_connect_errno() . $blank;
    echo "Hata Mesajı : " .mysqli_connect_error() . $blank;
    exit;
}

echo "Bağlantı başarılı : <i style='color:red;'>".$db_name."</i> <i>"."adlı veritabanına başarılı bir şekilde bağlanıldı. </i>" . $blank;

?>  