<?php
$host="localhost";
$user="root";
$password="energy";
$dbname = "meta";
$cxn = mysqli_connect($host,$user,$password,$dbname) or die("Couldn’t connect to server");
$query= ( "select * from drug_info");
$result=mysqli_query($cxn, $query);
?>
<!DOCTYPE html>
<head>
<title> fetch database </title>
</head>
<body>
<table width=600   border=2 bgcolor="6CCDBC"    >
    <tr>
<th>dr_acc_no</th>
<th>dr_name</th>
<th>smiles</th>
<th>inchi_key</th>
<th>CAS_NO</th>
<th>mol_wt</th>
<th>mol_formula</th>
<th>pubchem_id</th>
<th>IUPAC</th>
<th>dr_ei</th>
<th>dr_2D</th>
<th>dr_3D</th>
</tr>
<?php
 while($rows= mysqli_fetch_assoc($result))
 {
     ?>
 <tr>
     <td><?php  echo $rows['dr_acc_no']?></td>
     <td><?php  echo $rows['dr_name']?></td>
     <td><?php  echo $rows['SMILES']?></td>
     <td><?php  echo $rows['inchi_key']?></td>
     <td><?php  echo $rows['CAS_NO']?></td>
     <td><?php  echo $rows['mol_wt']?></td>
     <td><?php  echo $rows['mol_formula']?></td>
     <td><?php  echo $rows['pubchem_id']?></td>
     <td><?php  echo $rows['IUPAC']?></td>
     <td><?php  echo $rows['dr_ei']?></td>
     <td><?php  echo $rows['dr_2D']?></td>
     <td><?php  echo $rows['dr_3D']?></td>
      </tr>      
    <?php      
 }
 ?>
</table>
 </body>
 </html> 
