<?php


class BookController extends Controller
{

    public function actionIndex()
    {
        $array=array(2,3);
        $num=1234;

        $a = Book::model()->updateAll(array('title' => 'Вини пух'),'title = Хер простой');

        //foreach($a as $one ) {
        //    echo $one->title;
        //    echo '<hr />';
        //}
//            echo $a->title;
        if($a){
            echo 'Есть!';
        } else {
            echo'НЕТ!';
        }

        //echo $a;
        }








}
/**
 * Created by PhpStorm.
 * User: admin7
 * Date: 06.10.14
 * Time: 11:57
 */
