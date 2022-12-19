<?php
class Category
{
    public static function getCategoriesList()
    {
        $db = Db::GetConnection();
        $query = "SELECT id, name FROM categories ORDER BY id ASC";
        $result = $db->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function getCategoryNameById($idCategory)
    {
        $db = Db::getConnection();
        $query = "SELECT name FROM  categories WHERE id = $idCategory";
        $result = $db->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data[0]['name'];
    }
   
    public static function deleteCategoryById($id)
    {
        $db = Db::GetConnection();
        $sql = 'DELETE FROM categories WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function createCategory($name)
    {
        $db = Db::GetConnection();
        $sql = 'INSERT INTO categories (name) VALUES (:name)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }
    public static function getCategoryById($id)
    {
        $db = Db::getConnection();
        $query = "SELECT * FROM  categories WHERE id = $id";
        $result = $db->query($query);
        $data = $result->fetch();
        return $data;
    }
    public static function updateCategoryById($id, $name)
    {
        $db = Db::GetConnection();
        $sql = "UPDATE categories SET 
        name = :name 
        WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        
        return $result->execute();
    }
    
}
