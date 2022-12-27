<html>

<?php

    include 'koneksi.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_antrian where id = '$id'";
    $data = mysqli_query($koneksi, $query);
    while ($d = mysqli_fetch_array($data)) {
?>
<form class="form" method="POST" id="cliker" action="kirim_email.php">
    <input type ="hidden" name="email" value="<?php echo $d['email']; ?>">
    <input type ="hidden" name="id_sks" value="<?php echo $d['id_sks']; ?>">
    <button  type="submit" style="display:none;" class="btn btn-primary me-1 mb-1">Kirim Email</button>
</form>
<script type="text/javascript">
  document.getElementById("cliker").submit();
</script>
<?php
    }
?>
</html>