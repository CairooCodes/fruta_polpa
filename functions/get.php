<?php
function getBanners()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProducts()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllServicos()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT services.id, services.img, services.name, c.name as categorie_type FROM services INNER JOIN categories c ON services.categorie_id = c.id order by services.id desc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getServicos1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM services where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getServicos2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM services where categorie_id = 2 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getServico($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM services WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getCursos()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM cursos order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCurso($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM cursos WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}
