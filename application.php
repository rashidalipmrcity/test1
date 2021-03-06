<?php
session_start();
if (!isset($_SESSION['user_id']))
		{
		echo '<script type="text/javascript">alert("Please Login Again..");</script>';
		 header("location:index.php");
		}
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet">
<script src="js/angular.min.js"></script>
<script src='js/app.js'></script>
<script src='js/controllers.js'></script>
</head>
<body>
<div ng-app="TaskManager" >
<div class="container">
<div class="content" ng-controller="taskController">
<h1>To-Do List</h1>
<p class="tagline">Todo Application</p>
<form>
<div class="inputContainer">
<input type="text" id="description" class="taskName" placeholder="What do you need to do?" ng-model="newTask">
<label for="description">Description</label>
</div>
<div class="inputContainer half last"> <i class="fa fa-caret-down selectArrow"></i>
<select id="category" class="taskCategory" ng-model="newTaskCategory" ng-options="obj.name for obj in categories">
<option class="disabled" value="">Choose a category</option>
</select>
<label for="category">Category</label>
</div>
<div class="inputContainer half last right">
<input type="date" id="dueDate" class="taskDate" ng-model="newTaskDate">
<label for="dueDate">Due Date</label>
</div>
<div class="row">
<button class="taskAdd" ng-click="addNew()"><i class="fa fa-plus icon"></i>Add task</button>
<button class="taskDelete" ng-click="deleteTask()"><i class="fa fa-trash-o icon"></i>Delete Tasks</button>
<button class="taskDelete" ng-click="deleteTask()"><i class="fa fa-trash-o icon"></i>Update Tasks</button>
<button><i class="fa fa-trash-o icon"><a href="logout.php">Logout</a></i></button>
</div>
</form>
<ul  class="taskList">
<li class="taskItem" ng-repeat="taskItem in taskItem track by $index" ng-model="taskItem">
<input type="checkbox" class="taskCheckbox" ng-model="taskItem.complete" ng-change="save()">
<span class="complete-{{taskItem.complete}}">{{taskItem.description}}</span> <span class="category-{{taskItem.category}}">{{taskItem.category}}</span> <strong class="taskDate complete-{{taskItem.complete}}"><i class="fa fa-calendar"></i>{{taskItem.date | date : 'mediumDate'}}</strong> </li>
</ul>
<!-- taskList -->
</div>
<!-- content -->
</div> <!-- container --> </div>

</body>
</html>