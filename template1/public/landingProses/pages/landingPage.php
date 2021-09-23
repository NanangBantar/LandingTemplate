<?php
class Result{
    function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    function sql($title){
        $sql = "SELECT * FROM landingpage WHERE titlePage = '$title'";
        $ql = $this->koneksi->query($sql);

        $rql = $ql->fetch_array(MYSQLI_ASSOC);

        return array(
            "title" => $rql['titlePage']
        );
    }
}
?>