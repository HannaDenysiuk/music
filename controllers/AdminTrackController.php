<?php

use Symfony\Component\Console\Logger\ConsoleLogger;

class AdminTrackController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();
        $tracks = Track::getTracksList();
        require_once(ROOT . '/views/admin_track/index.php');
        return true;
    }
    public function actionDelete($id)
    {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Track::deleteTrackById($id);
            header("Location: /admin/track");
        }

        require_once(ROOT . '/views/admin_track/delete.php');
        return true;
    }
    public function actionCreate()
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesList();
        $img = "";
        if (isset($_POST['submit'])) {

            $errors = false;

            if (!isset($_FILES['track']['name']))
                $errors[] = "select a track";

            if ($errors == false) {
                $option['name'] =  $_FILES['track']['name'];
                $option['categoryid'] = $_POST['categoryid'];
                $option['status'] = $_POST['status'];
                $option['description'] = $_POST['description'];
                $img  = $_FILES['image']['name'];
                if (isset($_FILES['image']['name']))
                    $option['image'] = $_FILES['image']['name'];
                else
                    $option['image'] = $img;


                $id = Track::createTrack($option);
                if (is_uploaded_file($_FILES["track"]["tmp_name"])) {

                    move_uploaded_file($_FILES["track"]["tmp_name"], ROOT . "/template/music/{$option['name']}");
                }
                if ($img != "") {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT . "/template/images/{$option['image']}");
                    }
                }
                header("Location: /admin/track");
            }
        }
        require_once(ROOT . '/views/admin_track/create.php');
        return true;
    }
    public function actionUpdate($id)
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesList();
        $track = Track::getTrackById($id);
        $img = $track['image'];
        if (isset($_POST['submit'])) {
           
                $option['name'] =  $track['name'];
                $option['categoryid'] = $_POST['categoryid'];
                $option['status'] = $_POST['status'];
                $option['description'] = $_POST['description'];
                
                if (isset($_FILES['image']['name']))
                    $option['image'] = $_FILES['image']['name'];
                else
                    $option['image'] = $img;


                $id = Track::updateTrackById($id, $option);
              
                if ($img != "") {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT . "/template/images/{$option['image']}");
                    }
                }
                header("Location: /admin/track");
            
        }
        require_once(ROOT . '/views/admin_track/update.php');
        return true;
    }
}
