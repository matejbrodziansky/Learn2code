<?php


class Adventure {

	protected $dudes = [];

	public function getDudes()
	{
		return $this->dudes;
	}

	public function addDude( Dude $dude )
	{
		array_push( $this->dudes, $dude );
	}

	public function dudeCount()
	{
		return count( $this->dudes );
	}

	public function commentCount()
	{
		$count = 0;

		foreach ( $this->dudes as $dude )
		{
			$count += $dude->getComments();
		}

		return $count;
	}

	public function commentsText()
	{
		

		$arr = array();

		foreach ( $this->dudes as $dude ){
			$show = $dude->getcommentsText();
				foreach ( $show as $item ){

					echo($item);
			}

			 if(is_array($item)){
				 foreach($item as $value){
					$arr[] = $value; 
					$result = array_unique($arr);
					echo $result;
				 }
			 }
			 else {
				 $arr[] = $dude;
			 }
		}
		//print_r($arr);
		//return $arr;
		return $item;



		// public function commentsText()
		// {
		// 	$count = 0;
	
		// 	foreach ( $this->dudes as $dude )
		// 	{
		// 		$show = $dude->getcommentsText();
		// 	}
	
		// 	return $show;
		// }



		// foreach ( $this->dudes as $dude )
		// {
		// 	$arr
		// 	//$show = $dude->getcommentsText();
		// 	foreach( $dude->getcommentsText() as $item)
		// 	{
		// 		print_r( $item);
		// 	}
		// //	print_r($show);
		// }

		// //return $show;
		// //return $show;
		// return $item;
	}

}