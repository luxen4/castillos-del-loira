<form method="post">
    <button type="submit" name="upload" class="boton">Subir proyecto por FTP</button>
</form>
<?php
if (isset($_POST['upload'])) {

$ftp_host = 'ftpupload.net';
$ftp_user = 'if0_40288667';
$ftp_pass = 'C0A4EDDScACvEPt';

    $conn = ftp_connect($ftp_host);
    ftp_login($conn, $ftp_user, $ftp_pass);

    function subir($local, $remoto, $conn) {
        foreach (scandir($local) as $archivo) {
            if ($archivo == "." || $archivo == "..") continue;

            $local_ruta = "$local/$archivo";
            $remoto_ruta = "$remoto/$archivo"; var_dump($remoto_ruta);

            if (is_dir($local_ruta)) {
                if (!@ftp_chdir($conn, $remoto_ruta)) {
                    ftp_mkdir($conn, $remoto_ruta);
                }
                subir($local_ruta, $remoto_ruta, $conn);
            } else {
                ftp_put($conn, $remoto_ruta, $local_ruta, FTP_BINARY);
            }
        }
    }

subir("C:/xampp/htdocs/val-de-loire", "/vald-de-loire", $conn);


    ftp_close($conn);
    echo "✅ Subida completada.";
}
?>
