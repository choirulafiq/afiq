<?php
defined('BASEPATH') or exit('No direct script access allowed');
echo "<table border='1'>
<tr>
	<td>No</td>
	<td>Nim</td>
	<td>Nama Lengkap</td>
	<td>Jemis Kelamin</td>
	<td>Angkatan</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo 
	"<tr>";
		echo "<td>" . $row['No'] ."</td>";
		echo "<td>" . $row['NIM'] . "</td>";
		echo "<td>" . $row['Nama_depan']." ".$row['Nama_belakang'] . "</td>";
		echo "<td>" . $row['Jenis_kelamin'] . "</td>";
		echo "<td>" . $row['Angkatan']. "</td>";
	}
	echo "</tr>";
	echo "</table>";