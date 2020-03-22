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
	<br>Software Engineer on Video Data Infrastructure
	<br>Twitter
</p>

<!-- previous work block -->
<div class="text-hold">
	Previous work:
	<ul>
		<li>Wayfair (2017 - 2019): Software Engineer on Customer Data Systems</li>
		<li>Charles River Analytics (2017): Intern with Sensor Processing and Networking Division</li>
		<li>MathWorks (2015, 2016): Intern with Computational Biology Team, MATLAB Editor Team</li>
		<li>Department of Computer Science (2014 - 2017): TA for Cosi 11a, 29a, 166b + 167b, 121b</li>
		<li>Department of Biology (2013 - 2016): Research Assistant at Rosbash Lab, Nelson Lab, and Lau Lab</li>
	</ul>
	
	<a href="https://github.com/paxorus"><img class="logo" src="images/logo-github.png"></a>
	<a href="mailto:prakhar@brandeis.edu?Subject=Hi,%20Prakhar!" target="_top"><img class="logo" src="images/logo-gmail.png"></a>
	<a href="https://www.linkedin.com/in/tectonic"><img class="logo" src="images/logo-linkedin.png"></a>
	<a href="https://www.facebook.com/prakhar.studios"><img class="logo" src="images/logo-facebook.png"></a>
</div>

<br>

<div class="text-hold">
	Previous education:
	<ul>
		<li>Brandeis University, B.S. in Math, Biology, and Computer Science (2017)</li>
		<li>Acton-Boxborough Regional High School (2013)</li>
	</ul>
</div>

<br>

<div class="text-hold">
<table id="course-table"><tbody>
<tr>
	<td data-class-name="Programming in Java and C">Cosi 11a</td>
	<td data-class-name="Archaeology of Power">Anth 136a</td>
	<td data-class-name="Honors Organic Chemistry">Chem 25a</td>
	<td data-class-name="Honors Linear Algebra">Math 22a</td>
</tr>
<tr>
	<td data-class-name="Advanced Programming Techniques">Cosi 12b</td>
	<td data-class-name="Visual Politics of Museum Exhibition">Uws 1a</td>
	<td data-class-name="Honors Organic Chemistry">Chem 25b</td>
	<td data-class-name="Honors Multivariable Calculus">Math 22b</td>
	<td data-class-name="Genetics and Genomics">Biol 14a</td>
</tr>
<tr>
	<!-- went to Australia -->
	<td data-class-name="Biostatistics">Biol 51a</td>
</tr>
<tr>
	<td data-class-name="Data Structures">Cosi 21a</td>
	<td data-class-name="Discrete Structures">Cosi 29a</td>
	<td data-class-name="Chemical Biology">Cbio 101a</td>
	<td data-class-name="Computational Molecular Biology">Cosi 178a</td>
	<td data-class-name="Physics Laboratory I">Phys 19a</td>
</tr>
<tr>
	<td data-class-name="Scientific Data Processing in Matlab">Cosi 177a</td>
	<td data-class-name="Cells and Organisms">Biol 15b</td>
	<td data-class-name="Advanced Cellular Biology">Biol 100b</td>
	<td data-class-name="Introductory Physics II">Phys 11b</td>
</tr>
<tr>
	<!-- interned at MathWorks -->
</tr>
<tr>
	<td data-class-name="Probability">Math 36a</td>
	<td data-class-name="Combinatorics">Math 39a</td>
	<td data-class-name="Mobile Application Development">Cosi 153a</td>
	<td data-class-name="Introduction to Comparative Studies">Anth 1a</td>
	<td data-class-name="General Biology Laboratory">Biol 18b</td>
</tr>
<tr>
	<td data-class-name="Population Genetics/Genomics">Nbio 123b</td>
	<td data-class-name="Structure and Interpretation of Computer Programs">Cosi 121b</td>
	<td data-class-name="Theory of Computation">Cosi 130a</td>
	<td data-class-name="Research Internship and Analysis">Biol 93a</td>
	<td data-class-name="General Biology Laboratory">Biol 18a</td>
</tr>
<tr>
	<!-- interned at MathWorks -->
	<td data-class-name="Introduction to Drawing">Fa 3a</td>
</tr>
<tr>
	<td data-class-name="Symbolic Logic">Phil 6a</td>
	<td data-class-name="Evolution and Biodiversity">Biol 16a</td>
	<td data-class-name="Operating Systems">Cosi 131a</td>
	<td data-class-name="Big Data Analysis">Cosi 129a</td>
	<td data-class-name="Programming for Linguistics">Ling 131a</td>
	<td data-class-name="Organic Chemistry Laboratory I">Chem 29a</td>
</tr>
<tr>
	<td data-class-name="Groups">Math 28a</td>
	<td data-class-name="Differential Equations">Math 37a</td>
	<td data-class-name="Introduction to Differential Geometry">Math 102a</td>
	<td data-class-name="Introduction to Complex Analysis">Math 115a</td>
	<td data-class-name="3D Game Development and Networking in Blender">Cosi 98b</td>
	<td data-class-name="Organic Chemistry Laboratory II">Chem 29b</td>
</tr>
</tbody></table>
</div>

<p class="text-hold">
Last updated: 22 March 2020
</p>

</body>

<script src="jquery.min.js"></script>
<script>
var SCALE=.6;

function handlerIn(evt) {
	// set "Biostatistics"
	this.dataset.classCode = this.textContent;
	$(this).text(this.dataset.className);
	$(this).css("color", "#22aaff");
}

function handlerOut(evt) {
	// set "Biol 51a"
	$(this).text(this.dataset.classCode);
	$(this).css("color", "#ffffff");
}

$(document).ready(function () {
	$("td").hover(handlerIn, handlerOut);
	$("td").css("min-width", $("#course-table").width()/6);
});
</script>

</html>