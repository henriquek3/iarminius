<?php 
required("../models/crud.php")    

Crud::select(Select::sinodos());
foreach ( Crud::select(Select::sinodos()) as $key )
{
echo $key['id_sinodos'];
}
;

?>