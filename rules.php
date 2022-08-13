<?php
//Ponzi Script
//BY HILLSOFTS TECH
//AWOLU FAITH 
//+2348138652645 
// awolu_faith@Live.com
include 'inc/header.php';

FlashTitle('Rules And Regulation | '.$set['title']);
echo '<center><div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
						                                  
 <h4 class="text-uppercase">
<h2>Rules</h2>
<hr class="dhr" style="background:white;"/>
<p><b>'.$set['rules'].'</p>
</div></div>
<div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box"><br/><br/>
						<h2> Information </h2>
						<p><b>'.$set['notification'].'</b></p>
						</div></div></div></div></div></div></center>';
include 'inc/footer.php';
?>