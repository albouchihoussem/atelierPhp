<?php
/*if (empty(($_GET['nom'])&& ($_GET['prenom'])&& ($_GET['email'])&& ($_GET['telephone'])&& ($_GET['adresse'])&& ($_GET['code']))) {
    echo 'vide';*/
    if (isset($_GET['nom'])&& $_GET['nom'] == null) {
        echo 'vide';
}else{
echo "<table border=2>
<tr>
<td>nom</td>
<td>prenom</td>
<td>email</td>
<td>telephone</td>
<td>adresse</td>
<td>code</td>
</tr> " ; 
echo "<tr><td>" .$_GET['nom']. "</td>"  ;
echo "<td>" .$_GET['prenom']. "</td>"  ;
echo "<td>" .$_GET['email']. "</td>"  ;
echo "<td>" .$_GET['telephone']. "</td>"  ;  /* die() */
echo "<td>" .$_GET['adresse']. "</td>"  ; 
echo "<td>" .$_GET['code']. "</td> </tr>" ;
echo "</table>";
}
;

include "testinclude.php"; 
echo"<br>";
echo somme(50,35);
?>