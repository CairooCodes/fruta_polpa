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
  $stmt = $pdo->prepare("SELECT products.id, products.img, products.name, c.name as categorie_type FROM products INNER JOIN categories c ON products.categorie_id = c.id order by products.id asc;");
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
  $stmt = $pdo->prepare("SELECT * FROM receitas order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getReceitas1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas where categorie_id = 1 order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getReceitas2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM receitas where categorie_id = 2 order by id asc");
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

function getNutri($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM nutri WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getNutri2($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM nutri WHERE product_id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllNutri()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM nutri order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCupons()
{
  global $pdo;
  $sql = "
    SELECT 
      coupons.*, 
      participants.first_name AS participant_name 
    FROM coupons 
    LEFT JOIN participants ON coupons.participant_id = participants.id
    ORDER BY coupons.id DESC
  ";
  $stmt = $pdo->query($sql);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCouponCodes()
{
  global $pdo;
  $sql = "SELECT 
            cc.id,
            cc.code,
            cc.created_at,
            p.first_name AS participant_name,
            c.image AS coupon_image
          FROM coupon_codes cc
          JOIN participants p ON cc.participant_id = p.id
          LEFT JOIN coupons c ON cc.coupon_id = c.id
          ORDER BY cc.created_at DESC";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
