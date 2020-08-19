<?php
require_once("model/model.php");
require_once('model/productModel.php');



class Produit{
	public function getProduits(){
	
	$conn = mysqli_connect("localhost","root","","labranche","3308");
	$query = "SELECT image, idProduits, nomProduits FROM produits ORDER BY nomProduits;";
	$result = $conn->query($query);
	
	return $result;
	}


    public function getProduit($prodId)
    {
		$query ='SELECT * FROM produits WHERE idProduits = ?';
		$conn = mysqli_connect("localhost","root","","labranche","3308");
        $stmt = $conn->prepare($query); 
		$stmt->bind_param("i", $prodId);
		$stmt->execute();
		$result = $stmt->get_result();

        return $result;
    }
}

?>