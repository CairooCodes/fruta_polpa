<?php
function getBanners()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAbouts()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM about order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllPolpas()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT products.id, products.img, products.name, c.name as categorie_type FROM products INNER JOIN categories c ON products.categorie_id = c.id order by products.id desc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPolpas1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products where categorie_id = 1 order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPolpas2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products where categorie_id = 2 order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPolpa($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getCategoriesPolpas()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'Polpas' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBlogs()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBlog($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getRecruitments()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM recruitment order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategories()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllReceitas()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getReceitas1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getReceitas2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas where categorie_id = 2 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getReceita($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getReceita2($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas WHERE product_id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getCategoriesReceitas()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'Receitas' order by name asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getNutricionais($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM nutricionais WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getNutricionais2($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM nutricionais WHERE product_id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllNutricionais()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM Nutricionais order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
