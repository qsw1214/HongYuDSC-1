<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
class TopatsResultGetRequest
{
	/** 
	 * 任务id号，创建任务时返回的task_id
	 **/
	private $taskId;
	private $apiParas = array();

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas['task_id'] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return 'taobao.topats.result.get';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
		RequestCheckUtil::checkNotNull($this->taskId, 'taskId');
	}

	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}


?>
