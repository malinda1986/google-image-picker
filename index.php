<?php

$key = 'acb17762511c022129266c8e6c02e682';
$secret = 'c0319893a63157ba';



$google_key = 'AIzaSyAufkUbXACLy38xcp4iSC7fDvmsps8-IkI';
$base_url = '';
include_once 'assets/header.php';


include_once 'lib/Controller/app_controller.php';

?>

<body>
<!--This is the START of the header-->
<div id="topcontrol" style="position: fixed; bottom: 5px; left: 960px; opacity: 1; cursor: pointer;" title="Go to Top"></div>
<div id="header-wrapper">
  <div id="header">
   
    <div id="header-text">
      <h4>Search your faverite Images!</h4>
      <h6></h6>
    </div>
  </div>
</div>
<!--END of header-->
<!--This is the START of the menu-->
<div id="menu-wrapper">
  <div id="main-menu">
    <ul>
      <li><a href="index.php" class="selected" >Search </a></li>
       <li><a href="index.php">My favourite →</a></li>   
    </ul>
  </div>
	<!--This is the START of the footer-->
	<div id="footer">
		
		<h6>Copyright © 2011 - </h6>
	</div>
	<!--END of footer-->
</div>
<!--END of menu-->
<!--This is the START of the content-->
<div id="content">

	<form action="" method="get" id="gf">
	<p>
		<input type="radio" name="search" value="g" <?php if(isset($_REQUEST['search']) && $_REQUEST['search']=='g' ){?> checked<?php }?>>Google 
		<input type="radio" name="search" value="f" <?php if(isset($_REQUEST['search']) && $_REQUEST['search']=='f' ){?> checked<?php }?>> Flicker 
        <input name="name" id="keyword" type="text" class="input" id="sender_name" value="<?php echo (isset($_REQUEST['name']))? $_REQUEST['name']:''?>" />
        <input type="button" class="button btncolor" name="cmd_search" id="cmd_search"  onClick="" value="Search" />
   	</p>
    </form>    

  <!--This is the START of the portfolio section-->
  <div class="spacer"></div>


  <div id="container"> 
  	
  	<?php if(isset($images) && is_array($images)):?>
  	 <ul id="stage">
  	 	<?php foreach ($images as $i):?>
  	 		 <li data-tags="Print Design">
  	 		 <?php 
  	 		 	$src = str_replace('"', '', html_entity_decode($i['i']));
  	 		 	$src = str_replace('"', '', html_entity_decode($src));
  	 		 	//echo $src;
  	 		 ?>
  	 		<a  href="view.php?key=3fj3ic&id=<?php echo $i['id']?>" title="<?php  echo $i['c'];?>">
                <img src="<?php echo html_entity_decode($src);?>" width="150" height="150" alt="" />
            </a>
  	 		 
  	 		   	 		 
		        
		        <p>
		        <a class="readmore" href="javascript:void(0);"  style="float:left"  t="<?php echo $i['t'];?>" r="<?php echo htmlentities($i['s']);?>">
		        <img src="images/del.jpg" class="delfav" width="15" height="15"  id="<?php echo $i['id']; ?>"/>
		          </a>&nbsp;&nbsp;
		        <span class="comments" style="display:inline" onclick="altrtnplcy(<?php echo $i['id']; ?>);" id="c_<?php echo $i['id']; ?>" c="<?php  echo $i['c'];?>" ></span>&nbsp;&nbsp;
		        
				<input type="hidden" id="i_<?php echo $i['id']; ?>" value="<?php echo $i['c']?>">
		        </p>
		      </li>
  	 	<?php endforeach;?>
  	 </ul>
  	<?php endif;?>
  
  </div>
  <!--END of portfolio section-->
</div>
<!--END of content-->


</body>
</html>