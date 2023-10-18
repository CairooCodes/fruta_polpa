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

function getProducts()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProduct($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
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

function getMixs()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM mixs order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMix($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM mixs WHERE id = :id");
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