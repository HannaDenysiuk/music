<?php

class Track
{

    public static function getTracksList($count = Configuration::SHOW_BY_DEFAULT)
    {
        $db = Db::GetConnection();
        $query = "SELECT id, name, image  
        FROM track WHERE status = 1 
        ORDER BY id DESC LIMIT $count";
        $result = $db->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function getTracksListByCategory($categoryId, $page = 1)
    {
        $offset = ($page - 1) * Configuration::SHOW_BY_DEFAULT;
        $db = Db::GetConnection();
        $query = "SELECT id, name, image, description  
        FROM track WHERE status = 1 AND categoryid = $categoryId
        ORDER BY id DESC LIMIT " . Configuration::SHOW_BY_DEFAULT . " OFFSET " . $offset;
        $result = $db->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function getTrackById($id)
    {
        $db = Db::GetConnection();
        $query = "SELECT * FROM track WHERE id = $id";
        $result = $db->query($query);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function getTrackInCategory($categoryId)
    {
        $db = Db::GetConnection();
        $query = "SELECT COUNT(id) AS count FROM track "
            . "WHERE status = 1 AND categoryid = $categoryId";
        $result = $db->query($query);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data['count'];
    }
    public static function getProductsIs_recomendet()
    {
        $db = Db::GetConnection();
        $query = "SELECT id, name, price, image, is_new, is_recommended, image 
        FROM Product WHERE is_recommended = 1 AND availability > 0 AND status = 1 
        ORDER BY id DESC";
        $result = $db->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function getProductByIds($idsArray)
    {
        $db = Db::GetConnection();
        $idString = implode(', ', $idsArray);
        $query = "SELECT * FROM Product WHERE status = '1' AND id IN ($idString)";
        $result = $db->query($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function deleteTrackById($id)
    {
        $db = Db::GetConnection();
        $query = "DELETE FROM track WHERE id =:id";
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function createTrack($options)
    {
        $db = Db::GetConnection();
        $query = "INSERT INTO track
        (name, categoryid, description, status, image) 
        VALUES(:name, :categoryid, :description, :status, :image )";
        $result = $db->prepare($query);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':categoryid', $options['categoryid'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        if ($result->execute())
            return $db->lastInsertId();
        return 0;
    }
    public static function updateTrackById($id, $options)
    {
        $db = Db::GetConnection();

        $query = "UPDATE track SET 
        name = :name, 
        categoryid = :categoryid, 
        description = :description, 
        status =  :status, 
        image= :image 
        WHERE id= :id";
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':categoryid', $options['categoryid'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);

        return $result->execute();
    }
}
