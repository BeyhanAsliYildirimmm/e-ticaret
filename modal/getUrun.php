<?php
include './modal/db.php';
function isXmlHttpRequest()
{
    $header = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? $_SERVER['HTTP_X_REQUESTED_WITH'] : null;
    return ($header === 'XMLHttpRequest');
}
if(!isXmlHttpRequest()){
        die ('Çakallığın Alemi Yok Adam Gibi Oyununu Oyna!');
    }
else {

    if (isset($_GET['q'])) {
        /*
        $q = $_GET['q'];
        $param = "%$q%";

        $sorgu = $db->prepare("SELECT * FROM hasta WHERE ad LIKE :param OR soyad LIKE :param");
        $sorgu->bindParam(':param', $param, PDO::PARAM_STR);
        $sorgu->execute();

        $data = array();
        $result = $sorgu->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            foreach ($result as $row) {
                $id = $row['id'];
                $hasta = $row['ad'] . ' ' . $row['soyad'];
                $data[] = array('id' => $id, 'text' => $hasta);
            }
        } else {
            $data[] = array('id' => 0, 'text' => 'Hasta bulunamadı');
        }

        echo json_encode($data);
        */
    }
}
?>
