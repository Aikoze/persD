<?
function chaineCoupee($content) {
$length = 50;
if(strlen($content) > $length) {
  $chaineCoupee = substr($content,0,$length).'...';
  return $chaineCoupee;
}else {
    return $content;
}
}


function getArticle($db, $nb = null, $id = null) {
    if ($nb AND !$id) {
        $req = $db->query('SELECT * FROM articles LIMIT' .$nb);
        $articles = $req->fetchAll();
    }elseif($id){
        $req = $db->query('SELECT *FROM articles WHERE id='.$id);
        $articles = $req->fetchObject();
    }else{
        $req = $db->query('SELECT * FROM articles');
        $articles = $req->fetchAll();
    }
    return $articles;
}
?>