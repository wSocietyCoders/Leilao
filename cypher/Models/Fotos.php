<?php

class Fotos extends Model{

	
	public function getFotos(){	
		$sql ="SELECT * FROM galeria";
		$sql = $this->pdo->prepare($sql);
		$sql->execute();
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			foreach($array as $foto): ?>
				<img src="assets/images/posts/<?php 
				echo $foto["caminho"];?>" border="0"><br/><br/>
				<?php //echo($foto["caminho"])."<br/>"."<hr/>";?>

			<?php 
			endforeach;
			
			

		}
	}
}

?>
