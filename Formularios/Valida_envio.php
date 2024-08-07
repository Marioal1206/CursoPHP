<?php 
// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     echo "Se enviaron por GET";
// } else{
//     echo "se enviaron por POST";
// }


if(isset($_POST['submit'])){
    echo "se han guardados los valores correctamente";
    print_r($_POST['submit']);
}

?>