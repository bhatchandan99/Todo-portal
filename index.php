<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>

<div class="container" >
	<center>
		<h1> TO-DO Webpage</h1>
	</center>
</div>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="style.css">

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<br><br>

					<center>
						<h2><a href="list.php" target="_blank">Click to view all tasks </a><br><br></h2>
					</center>

	<div class='credits'>
			<div class="container">
				<div class="bhat" align-content= "center">

          <center>
            <h1> Welcome to the Faculty registration page.</h1>
            <div style="border: solid 2px; padding: 20px; width: 600px;">
              <form name="user" method="POST" action="add_todo.php">
                Your Name:
                <input type="text" name="id" required><br><br>
                Task:
                <input type="text" name="task" required><br><br>
                Deadline:
                <input type="date" name="date" required><br><br>
               Time:
                <input type="time" id="appt" name="appt">
                <input type="submit" name="register" value="Submit">

              </form>
            </div>
          </center>

				</div>
		<!--span>

			by &nbsp;
			<a href='https://twitter.com/pixelia_me' rel='noopener noreferrer' target='_blank' title='Noel Delgado'>
				<svg height='12' viewBox='0 0 57 30'>

					<path d='M28.1312,9.5341 C29.7966,9.5341 32.1025,10.627 34.248,12.368 C49.3297,11.5836 53.8793,-0.4796 55.5773,0.6783 C57.8326,3.2476 50.8638,16.3535 39.4,19.088 C39.8655,20.2628 40.1364,21.4786 40.1364,22.6983 C40.1364,25.9478 38.837,26.7409 36.7281,28.8974 L36.704,28.824 C36.4799,29.0276 36.208,29.2318 35.8945,29.4 C35.8945,29.4 36.1346,27.0065 34.9341,26.7672 C34.9341,26.7672 34.3739,27.4054 33.0133,27.2459 C32.8532,25.8896 32.293,25.4109 32.1329,25.3311 C31.4126,25.4109 30.9324,26.5278 30.132,26.5278 C29.8,26.1969 29.5184,25.5615 29.312,24.972 C29.0201,25.4221 28.6036,26.1128 28.2512,26.2885 C27.8796,26.2885 27.1476,25.2858 26.836,24.832 C26.6262,25.4581 26.3285,26.1707 25.9702,26.5278 C25.1699,26.5278 24.6896,25.4109 23.9694,25.3311 C23.8093,25.4109 23.249,25.8896 23.089,27.2459 C21.7284,27.4054 21.1681,26.7672 21.1681,26.7672 C19.9676,27.0065 20.2077,29.4 20.2077,29.4 C19.6122,29.0804 19.1739,28.6307 18.908,28.304 L18.8667,28.3947 C17.1544,26.3262 16.1259,25.5896 16.1259,22.6983 C16.1259,21.4938 16.3637,20.2895 16.784,19.128 C5.2094,16.4922 -1.8448,3.2615 0.4227,0.6783 C2.119,-0.4785 6.6627,11.5578 21.708,12.364 C23.8143,10.6244 26.1724,9.5341 28.1312,9.5341 Z M28.8514,20.3048 C28.8514,20.3048 30.4121,21.7409 32.213,21.7409 C34.0137,21.7409 35.3343,19.3474 35.3343,19.3474 L28.8514,20.3048 Z M20.6879,19.3474 C20.6879,19.3474 22.2486,21.7409 24.0494,21.7409 C25.8502,21.7409 27.1707,20.3048 27.1707,20.3048 L20.6879,19.3474 Z' fill-rule='evenodd'>
					</path>
				</svg>
			</a>
		</span-->


	</div>
  	</div>


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.8.2/pixi.min.js'></script>
	<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/PixiPlugin.min.js'></script><script  src="./script.js"></script>
</body>

</html>
