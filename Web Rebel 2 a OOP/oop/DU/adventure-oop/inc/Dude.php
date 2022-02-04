<?php


class Dude {

	public $who;
	public $wat;
	protected $comments = 0;
	public $commentsText;


	/**
	 * Dude constructor.
	 *
	 * @param     $who
	 * @param     $wat
	 * @param int $comments
	 */
	public function __construct( $who, $wat, $comments, ...$commentsText )
	{
		$this->who      = $who;
		$this->wat      = $wat;
		$this->comments = $comments;
		$this->commentsText = $commentsText;
	}


	/**
	 * @return mixed
	 */
	public function getWho()
	{
		return $this->who;
	}


	/**
	 * @param mixed $who
	 */
	public function setWho( $who )
	{
		$this->who = $who;
	}


	/**
	 * @return mixed
	 */
	public function getWat()
	{
		return $this->wat;
	}


	/**
	 * @param mixed $wat
	 */
	public function setWat( $wat )
	{
		$this->wat = $wat;
	}


	/**
	 * @return int
	 */
	public function getComments()
	{
		return $this->comments;
	}


	/**
	 * @param int $comments
	 */
	public function setComments( $comments )
	{
		$this->comments = $comments;
	}

	/**
	 * @return int
	 */
	public function getCommentsText()
	{
		return $this->commentsText;
	}


	/**
	 * @param int $comments
	 */
	public function setCommentsText( $commentsText )
	{
		$this->comments = $commentsText;
	}


}