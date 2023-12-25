<?php
require "../../../app/Models/TeamModel.php";

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $country = $_POST['country'];
    $league = $_POST['league'];
    $stadium = $_POST['stadium'];
    $coach = $_POST['coach'];
    $logo = $_POST['logo'];
    $team->update($name, $country, $league, $stadium, $coach, $logo);
    header("Location: ../../Public/pages/dashboard/teams.php");
} else if (isset($_POST['delete'])){
    $team->delete("teams",$_POST['id']);
    header("Location: ../../Public/pages/dashboard/teams.php");
} else if (isset($_POST['add'])){
    $name = $_POST['name'];
    $country = $_POST['country'];
    $league = $_POST['league'];
    $stadium = $_POST['stadium'];
    $coach = $_POST['coach'];
    $logo = $_POST['logo'];
    $team->create($name, $country, $league, $stadium, $coach, $logo);
    header("Location: ../../Public/pages/dashboard/teams.php");
} else {
    header("Location: ../../Public/pages/dashboard/teams.php");
}

