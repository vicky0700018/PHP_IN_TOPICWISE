<?php
function vote($age){
if ($age >= 18 && $age<= 65){
    return "yes you can vote";
}else{
    return "no you cannot vote";
}
}
echo "age 24;". vote(24)."</br>";
echo "age 16;". vote(16)."</br>";

?>