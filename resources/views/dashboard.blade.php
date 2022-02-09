<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Incorporating the external style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>Nick Meade - Dashboard</title>
	</head>

	<body>
		<div class="grid-container">
			<div class="aside">
				<!-- Aside Menu -->
				<aside>
					<div class="dropdown">
						<button class="dropbtn">
							<figure>
								<img class="logo" src="resources/images/hz-logo.png" alt="HZ Logo">
								<figcaption><img class="menu" src="resources/images/menu.png"></figcaption>
							</figure>
						</button>
						<div class="dropdown-content">
							<a href="https://hz.nl/en" target="_blank">HZ Website</a>
							<a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" target="_blank">HBO-ICT Course &#38 Examination Regulations</a>
							<a href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf" target="_blank">HBO-ICT Implementation Regulations </a>
							<a href="https://learn.hz.nl/my/" target="_blank">HZ-Learn Environment</a>
							<a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">MS Teams Environment</a>
							<a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">MyHZ Study Progress Page</a>
							<a href="https://github.com/NickGMeade" target="_blank">Github Environment</a>
						</div>
					</div>
				</aside>
			</div>
			<div class="header">
				<!-- Page Header -->
				<header>
					<h1>Dashboard</h1>
				</header>
			</div>
			<div class="nav">
				<!-- Navigation Bar -->
				<nav>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="profile">Profile</a></li>
						<li><a class="active" href="dashboard">Dashboard</a></li>
						<li><a href="faq">FAQ</a></li>
						<li><a href="blog">Blog </a></li>
					</ul>
				</nav>
			</div>
			<div class="dashboard-article">
				<!-- Main Text Body -->
				<main>
					<article>
					<!-- For updating the grade's colour index, use the classes 'completed', 'inprogress' or 'incomplete' -->
					<!-- Unused cells & tables are currently hidden, to unhide any relevant cells remove the 'hidden' and 'hidden' classes -->

						<!-- Quartile #1 Table Start -->
						<table>
							<tr>
								<th colspan="5"><h2>Study Progress 2021/22</h2></th>
							</tr>
							<tr>
								<th colspan="5">Quartile #1</th>
							</tr>
							<tr>
								<th>Module</th>
								<th>Assignment</th>
								<th>EC</th>
								<th>Progress</th>
								<th>Grade</th>
							</tr>
							<tr>
								<td>Programme and Career Orientation </td>
								<td>Assessment</td>
								<td>2.5</td>
								<td class="inprogress">In Progress</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>Computer Science Basics</td>
								<td>Written Exam</td>
								<td>5</td>
								<td class="incomplete">Not Complete</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>Programming Basics</td>
								<td>Case Study</td>
								<td>5</td>
								<td class="incomplete">Not Complete</td>
								<td>TBA</td>
							</tr>
						<!-- Quartile #2  Table Start -->
							<tr>
								<th colspan="5">Quartile #2</th>
							</tr>
							<tr>
								<th>Module</th>
								<th>Assignment</th>
								<th>EC</th>
								<th>Progress</th>
								<th>Grade</th>
							</tr>
							<tr>
								<td rowspan="2">Object Orientated Programming</td>
								<td>Case Study</td>
								<td rowspan="2">10</td>
								<td  rowspan="2"class="incomplete">Not Complete</td>
								<td rowspan="2">TBA</td>
							</tr>
							<tr>
								<td>Project</td>
							</tr>
						<!-- Quartile #3  Table Start-->
							<tr>
								<th colspan="5">Quartile #3</th>
							</tr>
							<tr>
								<th>Module</th>
								<th>Assignment</th>
								<th>EC</th>
								<th>Progress</th>
								<th>Grade</th>
							</tr>
							<tr>
								<td>Framework Development 1</td>
								<td>Case Study</td>
								<td>5</td>
								<td class="incomplete">Not Completed</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td rowspan="3">Framework Project 1</td>
								<td>Project</td>
								<td rowspan="3">7.5</td>
								<td rowspan="3" class="incomplete">Not Completed</td>
								<td rowspan="3">TBA</td>
							</tr>
							<tr>
								<td>Assessment</td>
							</tr>
							<tr>
								<td>Report</td>
							</tr>
						<!-- Quartile #4 Table Start -->
							<tr>
								<th colspan="5">Quartile #4</th>
							</tr>
							<tr>
								<th>Module</th>
								<th>Assignment</th>
								<th>EC</th>
								<th>Progress</th>
								<th>Grade</th>
							</tr>
							<tr>
								<td rowspan="3">Framework Project 2</td>
								<td>Portfolio</td>
								<td rowspan="3">10</td>
								<td rowspan="3" class="incomplete">Not Completed</td>
								<td rowspan="3">TBA</td>
							</tr>
							<tr>
								<td>Project</td>
							</tr>
							<tr>
								<td>Assessment</td>
							</tr>
							<tr>
								<th colspan="5">Full Year</th>
							</tr>
							<tr>
								<th>Module</th>
								<th>Assignment</th>
								<th>EC</th>
								<th>Progress</th>
								<th>Grade</th>
							</tr>
							<tr>
								<td>Personal Professional Development</td>
								<td>Portfolio</td>
								<td>12.5</td>
								<td class="inprogress">In Progress</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>IT Personality 1</td>
								<td>Portfolio</td>
								<td>1.25</td>
								<td class="inprogress">In Progress</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>IT Personality 2</td>
								<td>Portfolio</td>
								<td>1.25</td>
								<td class="inprogress">In Progress</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>NL Basic 01 - Dutch A1</td>
								<td>Written Exam</td>
								<td>1.25</td>
								<td class="inprogress">In Progress</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>NL Basic 02 - Dutch A1</td>
								<td>Written Exam</td>
								<td>1.25</td>
								<td class="incomplete">Not Completed</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>NL Basic 03 - Dutch A1</td>
								<td>Portfolio</td>
								<td>1.25</td>
								<td class="incomplete">Not Completed</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td>NL Basic 04 - Dutch A1</td>
								<td>Portfolio</td>
								<td>1.25</td>
								<td class="incomplete">Not Completed</td>
								<td>TBA</td>
							</tr>
						</table>
						<div id="current-progress">
							<h2>Current Progress</h2>
							<progress max="60" value="0"></progress>
							</br>
							<div id="current-ec">
								<h3>&#8657; 0 EC</h3>
							</div>
							<div id="end-ec">
								<h3>60EC</h3>
							</div>
						</div>
					</article>
				</main>
			</div>
			<div class="footer">
				<!-- Page Footer -->
				<footer><h3> &#169 Nicholas Meade 2021 </h3></footer>
			</div>
		</div>
	</body>
</html>
