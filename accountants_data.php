<?php

session_start();


require_once ("connection_sql.php");

header('Content-Type: text/xml');

date_default_timezone_set('Asia/Colombo');

if ($_POST["Command"] == "getdt") {
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT accountanst FROM invpara";
    $result = $conn->query($sql);

    $row = $result->fetch();
    $no = $row['accountanst'];
    $uniq = uniqid();
    $ResponseXML .= "<id><![CDATA[$no]]></id>";
    $ResponseXML .= "<uniq><![CDATA[$uniq]]></uniq>";

    $ResponseXML .= "</new>";

    echo $ResponseXML;
}


if ($_POST["Command"] == "save_inv") {


    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql2 = "insert into accountants(accno,fname, lname, salutation, nic,outno,position,address) values ('" . $_POST['accno'] . "', '" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['salutation'] . "','" . $_POST['nic'] . "','" . $_POST['outno'] . "','" . $_POST['possition'] . "','" . $_POST['address'] . "')"; 
        $result2 = $conn->query($sql2);

        $sql = "SELECT accountanst FROM entry_nogen";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row['accountanst'];
        $no2 = $no + 1;
        $sql = "update invpara set accountanst = $no2 where accountanst = $no";
        $result = $conn->query($sql);
        

        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
    
}
?>