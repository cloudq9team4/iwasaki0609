<?php
$m = new MongoClient( 'mongodb://localhost:27099');
$cursor = $m->tem->users->find( array( 'name' => 'iwasaki'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
