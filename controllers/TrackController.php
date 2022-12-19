<?php
class TrackController{

    public function actionView($id){
        $categories = Category::getCategoriesList();
        $track = Track::getTrackById($id);
        $categ = Category::getCategoryNameById($track['categoryid']);
        $is_session_set = User::isSessionSet();
        require_once(ROOT . "/views/track/view.php");
        return true;
    }
}