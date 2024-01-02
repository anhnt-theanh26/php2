<?php
function get_categories() // lấy toàn bộ dữ liệu bảng category
{
    global $db;
    $q = "SELECT *, (
        SELECT COUNT(*) FROM products 
        WHERE products.categoryID = categories.categoryID) AS productCount 
        from categories
        order by categoryID ";
    try {
        $stm = $db->prepare($q);
        $stm->execute();
        $result = $stm->fetchAll();
        $stm->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $err = $e->getMessage();
        // display_db_error($err);
    }
}
function get_category($cateID) // hiểm thị dữ liệu theo id
{
    global $db;
    $q = "select * from categories where categoryID = :cateID";
    try {
        $stm = $db->prepare($q);
        $stm->bindValue(':cateID', $cateID);
        $stm->execute();
        $result = $stm->fetch();
        $stm->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $err = $e->getMessage();
        // display_db_error($err);
    }
}

function add_category($n) // thêm dữ liệu lấy ra id vừa thêm
{
    global $db;
    $q = 'insert into categories (categoryName) values(:n)';
    try {
        $stm = $db->prepare($q);
        $stm->bindValue(':n', $n);
        $stm->execute();
        $stm->closeCursor();
        $cateID = $db->lastInsertId();
        return $cateID;
    } catch (PDOException $e) {
        $err = $e->getMessage();
        // display_db_error($err);
    }
}

function update_category($cateID, $n) // sua
{
    global $db;
    $q = 'update categories set categoryName=:n where categoryID=:cateID';
    try {
        $stm = $db->prepare($q);
        $stm->bindValue(':cateID', $cateID);
        $stm->bindValue(':n', $n);
        $stm->execute();
        $stm->closeCursor();
    } catch (PDOException $e) {
        $err = $e->getMessage();
        // display_db_error($err);
    }
}

function delete_category($cateID) // xoa
{
    global $db;
    $q = "delete from categories where categoryID = :cateID";
    try {
        $stm = $db->prepare($q);
        $stm->bindValue(':cateID', $cateID);
        $stm->execute();
        $stm->closeCursor();
    } catch (PDOException $e) {
        $err = $e->getMessage();
        // display_db_error($err);
    }
}
