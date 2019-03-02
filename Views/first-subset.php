<div class="container">
<?php
if (isset($_SESSION['id'])) {
$message = $_SESSION['id'];
echo '<h1>'.$message.'</h1>';
}
else echo '<h1>Second Layer, Not Dynamic (yet)</h1>';
?>
</div>