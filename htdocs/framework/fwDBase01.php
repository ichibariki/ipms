<?php
	/**
	 * fwDBase01
	 *  データベースアクセス基底クラス(全件取得)
	 * author      Koki
	 * environment PHP 5.4.16/Apache 2.4.6/MariaDB 5.5.52
	 * since       2016/02/04
	 */
	class fwDBase01
	{
		protected $sql;
		protected $dao;
		private $con;
		private $stmt;
		private $result;

		//Dao生成
		protected function createDao()
		{
		}

		//初期化
		public function __construct($dbc)
		{
			$this->con = $dbc->getconnect();
		}

		//検索実行
		public function select()
		{
			try{
				$this->stmt = $this->con->prepare($this->sql);
				$this->stmt->execute();
			}catch (PDOException $e){
    			print('Error:'.$e->getMessage());
    			die();
			}
			return($this->stmt->rowCount());
		}

		//データ取得
		public function fetch()
		{
			if($this->result = $this->stmt->fetch(PDO::FETCH_ASSOC))
			{
				$this->dao = $this->createDao();
				$this->dao->setDao($this->result);
			}else{
				$this->dao = null;
			}
			return($this->dao);
		}
	}
?>
