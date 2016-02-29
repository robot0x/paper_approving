<?php
namespace Admin\Controller;

require_once VENDOR_PATH . '/autoload.php';

use Review\Logic\ReviewLogic;
use ExpertView\Logic\ExpertViewLogic;                   //专家视图信息
use Expert\Logic\ExpertLogic;                           //专家
use ReviewDetailView\Logic\ReviewDetailViewLogic;       //评阅详情
use ReviewDetailOther\Logic\ReviewDetailOtherLogic;     //评阅详情其它信息
use PhpOffice\PhpWord\Settings;                         //phpword设置
use PhpOffice\PhpWord\TemplateProcessor;                //phpword模板
use Cycle\Logic\CycleLogic;                             //周期
use Yunzhi\Logic\ZipLogic;                              //ZIP
/**
* 
*/
class ReviewController extends AdminController
{
    public function indexAction()				//初始页面
	{
		$ReviewL=new ReviewLogic();				
		$reviews=$ReviewL->getlists();			//取评阅信息
		$this->assign('reviews',$reviews);		//向V层赋值
		$this->display();
	}

	public function editAction()
    {
        //获取用户ID
        $reviewId = I('get.id');

        //取用户信息getListById()
        $ReviewL = new ReviewLogic();
        $review = $ReviewL->getListById($reviewId);

        //传给前台
        $this -> assign('review',$review);

        //显示display('add')
        $this -> display('add');
    }

    public function saveAction()
    {
        
        //取用户信息
        $review = I('post.');

        //保存
        $ReviewL = new ReviewLogic();
        $ReviewL -> saveList($review);
        //echo $this->getlastsql();

        //判断异常
        if(count($errors = $ReviewL->getErrors())!==0)
        {
            
            //数组变字符串
            $error = implode('<br/>',$errors);

            //显示错误
            $this -> error("添加失败，原因：".$error,U('Admin/ReviewSetting/index?p='.I('get.p')));
        }
        else
        {
            $this -> success("操作成功",U('Admin/ReviewSetting/index?p='.I('get.p')));
        }
    }

    public function deleteAction()
    {
        //取id
        $reviewId= I('get.id');

        //删除
        $ReviewL = new ReviewLogic();
        $status = $ReviewL->deleteList($reviewId);

        //判断是否删除成功
        if($status!==false)
        {
            $this -> success("删除成功",U('Admin/ReviewSetting/index?p='.I('get.p')));
        }
        else
        {
            $this -> error("删除失败",U('Admin/ReviewSetting/index?p='.I('get.p')));
        }
    }

    /**
     * 下载评阅表
     * @param  int $expertId 专家ID
     * @return word文档
     * panjie
     * 2016.02
     */
    public function downLoadTableAction()
    {
        $expertId = (int)I("get.expert_id");

        //生成word文档,成功则返回文件相对于 文件的绝对地址
        $ReviewL = new ReviewLogic();
        $saveInfo = $ReviewL->makeWordByExpertId($expertId);
        
        if ($saveInfo === false)
        {
            die($ReviewL->getError());
        }

        $ExpertL = new ExpertLogic();
        $expert = $ExpertL->getListById($expertId);

        $saveFile = $saveInfo['saveFile'];
        $fileName = $saveInfo['fileName'] . '.doc';

        //指引用户下载
        header('Content-type: application/msword'); 
        header('Content-Disposition: attachment; filename="' . $fileName  . '"'); 
        readfile($saveFile);        
    }

    /**
     * 打包下载评阅表
     * @return  zip file
     * panjie
     * 2016.02
     */
    public function downLoadZipAction()
    {
        //取出当前周期信息
        $CycleL = new CycleLogic();
        $currentCycle = $CycleL->getCurrentList();
        if ($currentCycle === false)
        {
            die($CycleL->getError());
        }

        //取出所有的当前周期下专家信息
        $ExpertViewL = new ExpertViewLogic();
        $experts = $ExpertViewL->getReviewdListsByCycleId($currentCycle['id']);
        if ($experts === false)
        {
            die($ExpertViewL->getError());
        }

        //依次生成 评阅表
        $ReviewL = new ReviewLogic();
        foreach ($experts as $expert)
        {
            $ReviewL->makeWordByExpertId($expert['id']);
        }

        //打包
        $ZipL = new ZipLogic();
        $saveDir = I('server.DOCUMENT_ROOT') . __ROOT__ . '/download/review/' . $currentCycle['id'];

        $saveZip = $saveDir . '.zip';

        if( $ZipL->zip($saveDir, $saveZip) === false)
        {
            die($ZipL->getError());
        }

        $downLoadUrl = __ROOT__ . '/download/review/' . $currentCycle['id'] . '.zip';
        echo '<a href="' . $downLoadUrl . '">download</a>';

        // header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
        // header("Content-Type: application/zip");
        // header("Content-Transfer-Encoding: Binary");
        // header("Content-Length: " . filesize($saveZip));
        // header("Content-Disposition: attachment; filename=\"".basename($saveZip)."\"");
        // readfile($saveZip);
        exit; 
    }
}