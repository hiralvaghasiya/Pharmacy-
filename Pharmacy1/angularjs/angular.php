<!DOCTYPE html>
<html>
<head>
	<title>Angular Js</title>
</head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>
<div ng-app="">
Name:<input type="text" ng-model="name" placeholder="Enter Name Here">
<h1>Hello {{name}}</h1>
</body>
</html>