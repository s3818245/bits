<?php 
    require_once("../config.php");
    include(TEMPLATES . DS . "header.php");
    ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-2">Game Logo</div>
        <div class="col-sm-10">
            <div class="row">
                <h3>Game Titile</h3>
            </div>
            <div class="row">
                HASHTAGE
            </div>
        </div>
    </div>
    <div class="row">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick='showTabs("description")'>Game Description:</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick='showTabs("post")'>Post:</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick='showTabs("rating")'>Rating:</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick='showTabs("memberlist")'>Member List:</a>
            </li>
        </ul>
    </div>
    <div class="tabContent" id ="description"><?php include("infocard.php")?></div>
    <div class="tabContent" id ="post" style="display: none;"><?php include("postcard.php")?></div>
    <div class="tabContent" id ="rating" style="display: none;"><?php include("ratingcard.php")?></div>
    <div class="tabContent" id ="memberlist" style="display: none;"><?php include("membercard.php")?></div>
</div>

<script type="text/javascript" src="js/tools.js"></script>