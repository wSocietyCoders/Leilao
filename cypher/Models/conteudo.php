<?php

class Conteudo extends Model{

	public function postConteudo(){
		$sql = "SELECT * FROM conteudo";
		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		if($sql->rowCount()>0){
			$array=$sql->fetchAll();
			
			foreach($array as $post): ?>
				
				<div ><img style="float: left; margin-right: 10px;"src="assets/images/posts/<?php
				echo $post["imagem"];
				?>"><?php
				echo "<h1>".($post["titulo"])."</h1>"."<br/><br/><br/>";
				echo $post["corpo"]."<br/><br/>";
				echo "Autor: ".$post["autor"]."<hr/>";
			
				?></div> <?php endforeach;
				
			
			
		}






	}
}



?>
