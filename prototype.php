<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<div id="demo" style="font-weight:bold; text-align:center;
color:red; margin-top:100px;">
<div v-show="active">Show</div>
<div @mouseover="mouseOver">Hover over me!</div>
</div>
<br /><br /><br />

<div id="example-1" style="font-weight:bold; text-align:center;
color:red;">
<button v-on:click="counter += 1">Add 1</button>
<p>The button above has been clicked {{ counter }} times.</p>
</div>

<script type="text/javascript" src="vue.min.js"></script>
<script "text/javascript" src="prototype.js"></script>
</body>
</html>
