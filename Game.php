<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
<section>
	<h1>Game Matematika</h1>
	<div class="centerdiv">
		<div class="insertbox">
			<div class="box1">
				<input type="text" id="v1">
	</div>
	<div class="box1">
		<p>+</p>
	</div>
	<div class="box1">
		<input type="text" id="v2">
	</div></div>
	<div class="middlebox">
		<input type="text" id="answer">
	</div>
	<div class="sentbox">
		<button onclick="jsGame()">Check Answer</button>
	</div></div>
</section>
<script>
	let n1 = Math.floor(Math.random()*10+1);
	let n2 = Math.floor(Math.random()*10+1);

	document.getElementById('v1').value = n1;
	document.getElementById('v2').value = n2;

	let ans = n1 + n2;

	const jsGame = () => {
		var usera = document.getElementById('answer').value;
		if (usera == ans) {
			alert('Jawabanmu Benar');
		} else {
			alert("Jawaban yang benar yaitu"+ans+ ".Coba Ulangi.");
		}
		document.getElementById('answer').value ="";
		n1 = Math.floor(Math.random()*10+1);
		n2 = Math.floor(Math.random()*10+1);

		document.getElementById('v1').value = n1;
		document.getElementById('v2').value = n2:

		ans = n1 + n2;
	}
</script>
</body>
</html>