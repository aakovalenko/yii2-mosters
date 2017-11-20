<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 10:44
 */
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 10:44
 */
namespace app\actions;

use yii\base\Action;
use yii\data\Pagination;

class IndexAction extends Action
{
    public $modelClass;
    public $pageSize = 3;

    public function run()
    {
        $class = $this->modelClass;
        $query = $class::find();
        $countQuery = clone $query;

        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
        ]);
        $pages->setPageSize($this->pageSize);

        $models = $query->offset($pages->offset)
                                 ->limit($pages->limit)
                                 ->all();
        return $this->controller->render('//crud/index',[
            'pages' => $pages,
        ]);
    }
}