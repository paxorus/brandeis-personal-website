<!doctype html>
<html>
<head>
	<title>Welcome!</title>
	<style>
		body {
			font-family: Calibri, Arial, sans-serif;
			color: white;
			font-size: 18px;
			overflow-x: hidden;
			background-image: url('images/milky-way-mountains-background.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}
		/*#background-image {opacity: 0.7; position: fixed; bottom: 0; left: 50%; z-index: -5;}*/
		#background-image {opacity: 0.7; position: : fixed; background-image: cover;}
		.text-hold {background-color: rgba(0,0,0,0.5); padding: 10px;}
		#course-table {width: 100%;}
		td {text-align: center; cursor: pointer;}
		a:hover, a:active{color: #4AF;}
		a:link, a:visited {color: #08F;}
		.logo {cursor: pointer; width: 50px; border: 5px solid rgba(0, 0, 0, 0);}
		.logo:hover {border-color: rgba(255, 255, 255, .25); border-radius: 50px;}
	</style>
</head>
<body>

<!-- header block -->
<p class="text-hold">
	Prakhar Sahay
	<br />Software Engineer on Video Data Infrastructure
	<br />Twitter
	<br />
	<br />

	<a href="https://github.com/paxorus"><img class="logo" src="images/logo-github.png" /></a>
	<a href="mailto:prakhar@brandeis.edu?Subject=Hi,%20Prakhar!" target="_top"><img class="logo" src="images/logo-gmail.png" /></a>
	<a href="https://www.linkedin.com/in/tectonic"><img class="logo" src="images/logo-linkedin.png" /></a>
	<a href="https://www.facebook.com/prakhar.studios"><img class="logo" src="images/logo-facebook.png" /></a>
</p>

<!-- previous work block -->
<div class="text-hold">
	Previous work:
	<ul>
		<li>Wayfair (2017 - 2019): Software Engineer on Customer Data Systems</li>
		<li>Charles River Analytics (2017): Intern with Sensor Processing and Networking Division</li>
		<li>MathWorks (2015, 2016): Intern with Computational Biology Team, MATLAB Editor Team</li>
	</ul>
</div>

<br>

<div class="text-hold">
	Previous education:
	<ul>
		<li>Brandeis University, B.S. in Math, Biology, and Computer Science (2017)</li>
		<li>Department of Computer Science (2014 - 2017): TA for Cosi 11a, 29a, 166b + 167b, 121b</li>
		<li>Department of Biology (2013 - 2016): Research Assistant at Rosbash Lab, Nelson Lab, and Lau Lab</li>
		<li>Acton-Boxborough Regional High School (2013)</li>
	</ul>
</div>

<br>

<div class="text-hold">
<table id="course-table"><tbody>
<tr>
	<td data-course-id="Cosi 11a">Programming in Java and C</td>
	<td data-course-id="Anth 136a">Archaeology of Power</td>
	<td data-course-id="Chem 25a">Honors Organic Chemistry</td>
	<td data-course-id="Math 22a">Honors Linear Algebra</td>
</tr>
<tr>
	<td data-course-id="Cosi 12b">Advanced Programming Techniques</td>
	<td data-course-id="Uws 1a">Visual Politics of Museum Exhibition</td>
	<td data-course-id="Chem 25b">Honors Organic Chemistry</td>
	<td data-course-id="Math 22b">Honors Multivariable Calculus</td>
	<td data-course-id="Biol 14a">Genetics and Genomics</td>
</tr>
<tr>
	<!-- went to Australia -->
	<td data-course-id="Biol 51a">Biostatistics</td>
</tr>
<tr>
	<td data-course-id="Cosi 21a">Data Structures</td>
	<td data-course-id="Cosi 29a">Discrete Structures</td>
	<td data-course-id="Cbio 101a">Chemical Biology</td>
	<td data-course-id="Cosi 178a">Computational Molecular Biology</td>
	<td data-course-id="Phys 19a">Physics Laboratory I</td>
</tr>
<tr>
	<td data-course-id="Cosi 177a">Scientific Data Processing in Matlab</td>
	<td data-course-id="Biol 15b">Cells and Organisms</td>
	<td data-course-id="Biol 100b">Advanced Cellular Biology</td>
	<td data-course-id="Phys 11b">Introductory Physics II</td>
</tr>
<tr>
	<!-- interned at MathWorks -->
</tr>
<tr>
	<td data-course-id="Math 36a">Probability</td>
	<td data-course-id="Math 39a">Combinatorics</td>
	<td data-course-id="Cosi 153a">Mobile Application Development</td>
	<td data-course-id="Anth 1a">Introduction to Comparative Studies</td>
	<td data-course-id="Biol 18b">General Biology Laboratory</td>
</tr>
<tr>
	<td data-course-id="Nbio 123b">Population Genetics/Genomics</td>
	<td data-course-id="Cosi 121b">Structure and Interpretation of Computer Programs</td>
	<td data-course-id="Cosi 130a">Theory of Computation</td>
	<td data-course-id="Biol 93a">Research Internship and Analysis</td>
	<td data-course-id="Biol 18a">General Biology Laboratory</td>
</tr>
<tr>
	<!-- interned at MathWorks -->
	<td data-course-id="Fa 3a">Introduction to Drawing</td>
</tr>
<tr>
	<td data-course-id="Phil 6a">Symbolic Logic</td>
	<td data-course-id="Biol 16a">Evolution and Biodiversity</td>
	<td data-course-id="Cosi 131a">Operating Systems</td>
	<td data-course-id="Cosi 129a">Big Data Analysis</td>
	<td data-course-id="Ling 131a">Programming for Linguistics</td>
	<td data-course-id="Chem 29a">Organic Chemistry Laboratory I</td>
</tr>
<tr>
	<td data-course-id="Math 28a">Groups</td>
	<td data-course-id="Math 37a">Differential Equations</td>
	<td data-course-id="Math 102a">Introduction to Differential Geometry</td>
	<td data-course-id="Math 115a">Introduction to Complex Analysis</td>
	<td data-course-id="Cosi 98b">3D Game Development and Networking in Blender</td>
	<td data-course-id="Chem 29b">Organic Chemistry Laboratory II</td>
</tr>
</tbody></table>
</div>

<p class="text-hold">
Last updated: 22 March 2020
</p>

</body>

<script src="jquery.min.js"></script>
<script>
function handlerIn(evt) {
	// set "Biol 51a"
	this.dataset.courseFullName = this.textContent;
	const formerHeight = $(this).height();
	$(this).text(this.dataset.courseId);
	$(this).css("color", "#22aaff");
	$(this).height(formerHeight);
}

function handlerOut(evt) {
	// set "Biostatistics"
	$(this).text(this.dataset.courseFullName);
	$(this).css("color", "#ffffff");
}

$(document).ready(function () {
	$("td").hover(handlerIn, handlerOut);
	$("td").css("min-width", $("#course-table").width()/6);
});
</script>

</html>