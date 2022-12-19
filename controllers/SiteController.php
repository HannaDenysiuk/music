<?php


class SiteController
{
  public function actionIndex()
  {
    $categories = Category::getCategoriesList();
    $tracks = Track::getTracksList();
    $is_session_set = User::isSessionSet();
    require_once(ROOT . "/views/site/index.php");
    return true;
  }

}
