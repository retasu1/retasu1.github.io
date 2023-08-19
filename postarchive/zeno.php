<?php include("common/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("common/head-tag-contents.php");?>
</head>

<?php include("common/navigation.php");?>

<body>

<div class="main">
	<!-- Introduction -->
	<section class="intro" id="intro">
		<div class="project__head">
			<h1 class="section__title section__title--intro">
				Zeno dress-up
			</h1>

			<p class="section__subtitle section__subtitle--intro">
				A dress-up game for children on the autism spectrum disorder (ASD)
			</p>				
		</div>


		<div class="project__background">
			<div class="project__background--body">
				<h3 class="project__background--header">Project background</h3>
				<p> For this project, me and a teammate designed a triadic dress-up game to be played cooperatively between a child, an adult, and Zeno the robot (Figure 1).</p>

				<p>The game was designed with input from a literature review and interview with experts. Apart from designing the game flow and script, we also designed facial expressions and body movements for Zeno.</p>

				<p>We conducted a pilot study with a peer as well as two rounds of user tests on typically developing children who overall enjoyed the game.</p>
			</div>

			<div class="project__background--details">
				<dl class="project__background--detailslist">
					<dt class="firstdt"><h3>When</h3></dt>
						<dd>2017-2018</dd>
					<dt><h3>Project team</h3></dt>
						<dd>Natasha Eibich</dd>
						<dd>Lilian Sung</dd>
					<dt><h3>Supervisors</h3></dt>
						<dd>Pauline Chevalier</dd>
						<dd>Bob Schadenberg</dd>
					<dt><h3>Skills</h3></dt>
						<dd>Literature review</dd>
						<dd>Requirements gathering</dd>
						<dd>Gesture design</dd>
						<dd>User tests with children</dd>
						<dd>Wizard-of-Oz</dd>
						<dd>Data analysis</dd>
				</dl>
			</div>
				
		</div> <!--intro 2 column part -->		
	</section>

	<section class="requirements section-normal" id="requirements">
		<h2 class="section__title section__title--requirements">
			Requirements gathering
		</h2>

		<div class="requirements__body">
			<p>A literature review was carried out in order to understand the needs of children with autism and how they may react to Zeno the robot. My teammate was also able to connect with and interview educators who had experience working with autistic children. </p> 

			<p>From the literature and interviews we learned that ASD is a wide diagnosis; each child may have different struggles and needs. With that said, many children with autism struggle with social skills. In a classroom setting, a teacher may focus on turn-taking, joint attention, and empathy. </p> 

			<p>With the above in mind, we decided to design a triadic game to be played between the child, Zeno, and an adult (could be parent, teacher, or therapist). Each party in the game has their own user needs that must be accounted for. These requirements are outlined below:</p>

			<h3>Adult</h3>

			<p>The adult (could be a teacher, therapist, or parent) mediates the interaction between the child and Zeno, guiding the child if needed. The adult can also step in and stop the game if necessary. The game needs to have interaction moments which the adult can partake in. </p>

			<h3>Child</h3>

			<p>While the objective of the game is to teach the child social skills, it was also important for the child to find the game engaging and not upsetting or stressful. Stress or frustration could come from: 1) the game being too difficult (in terms of motor or communication skills), 2) unclear instructions or non constructive feedback, and 3) sensory distress, caused by unexpected noise and other stimuli. </p>

			<h3>Zeno</h3>

			<p>For the project, Zeno was not autonomous, instead, he was controlled by a Wizard-of-Oz (WOZ; someone behind the scenes). The game needs to be designed with Zeno's capabilities in mind (e.g. movement range). The script and game flow also had to be flexible so the WOZ could respond to the child's actions adequately. For example, shorter sentences and action sequences are preferred over longer ones.</p>

			<figure>
				<img src="img/zeno/zenointro.png" alt="">
				<figcaption><i>Figure 1.</i> Zeno with his clothes on.</figcaption>
			</figure>

			

		</div>
	</section>

	<section class="game-design" id="game">
		<h2 class="section__title section__title--game">Game design</h2>
		<div class="game__body">
			<p>We wanted to design a game which focused on encouraging the child to empathise with Zeno as he undergoes a variety of emotions. For example, we could show the child a short video of Zeno interacting and responding to various objects, then perhaps having Zeno and the child talk about those same objects. However, as we started exploring the types of emotions Zeno could show, we realised that if there are objects Zeno likes, there would also be objects Zeno doesn't like. We were hesitant to involve explicit negative emotions in the game, so we explored other options.</p>

			<p>The game we ultimately settled on was a dress-up game, where the child has to dress Zeno up for different scenarios (i.e. summer or winter). The game itself is much more neutral, with the adult prompting perspective taking or turn taking when they see fit. For example, Zeno smiles when he is properly dressed for winter, at which point the adult could ask "how does Zeno feel?" The prototype gameflow can be seen in Figure 2.</p>

			<figure>
				<img class="gameflow__img1" src="img/zeno/game1.png">
				<figcaption><i>Figure 2.</i> First iteration of the game flow with Zeno. Dark orange boxes are actions by Zeno/WOZ, light orange boxes are actions or decisions by the child or adult. Zeno thanks the child/adult after each correct article of clothing, then asks whether they would like a dance. This is so that the extra music/movements do not come as a surprise to the child (in line with our research into the needs of children with ASD).
				</figcaption>
			</figure>

			
		</div>
	</section>

	<section class="user-testing" id="usertests">
		<h2 class="section__title section__title--usertests">User tests</h2>
		<div class="user_body">
			<p>A trial run was carried out with an adult instead of a child in order to get some early feedback about the flow of the game. From the feedback we decided to change Zeno's and the adult's script to provide more context and clarity for the child.</p>

			<h3 class="subsection__title">First round</h3>
			<p>The first round of user tests were conducted with typically developing Dutch children aged 6-10 who were on a school trip to the DesignLab at the University of Twente. The setup can be seen in Figure 3.</p>

			<figure>
				<img class="setup1__img" src="img/zeno/setup1pic.png" alt="The Wizard-of-Oz and observer are behind the table, the child and interacting adult are in front of the table. On the table is a screen, which Zeno is standing in front of, and a pile of clothes. There is also a camera set up on the top left corner to record the interaction.">
				<figcaption><i>Figure 3.</i> Set up for the first round of user tests.</figcaption>
			</figure>
			

			<p>The interactions were recorded (when permission from the parents was given). After the game, the child was guided through a short questionnaire about their experience. The questionnaire used Likert scale questions with smiley (or frowny) faces to indicate agreement.</p>	

			<p>From the user test we found out that there were a few problems with the game flow and usability. First, the dance which Zeno performs after every correct item of clothing was fun at first, but tedious after the third or fourth time. Second, the context for the game was also not completely clear. Third, multiple children had difficulty putting on one of the shirts. Finally, the children were often surprised by Zeno's movement.</p>	

			<p>Before the second round of tests we made adjustments to the scripts, clarifying the context of the game and making it more flexible with more opportunities for improvisation. We also added shorter feedback lines Zeno can provide after each item of clothing, moving the dance to the end of each scenario. We also added the ability for the WOZ to raise Zeno's arms to make it easier to put on the shirt. Lastly, we turned on life-like behaviour for Zeno, which means he makes little movements from time to time, so that children are not surprised when he moves. The new game flow can be seen in Figure 4.</p>

			<figure>
				<img src="img/zeno/game2.png">
				<figcaption><i>Figure 4.</i> Second iteration of the game flow with Zeno. Dark orange boxes are actions by Zeno/WOZ, light orange boxes are actions or decisions by the child or adult. </figcaption>
			</figure>
					
		
			<h3 class="subsection__title">Second round</h3>
			<p>The second round of user tests were carried out at a daycare on the campus of the University of Twente with children aged between 6 and 12. We were given a small room to carry out the user tests, which was less distracting than in the first round and more similar to a therapy setting.</p>

			<figure>
				<img class="setup2__img" src="img/zeno/setup2.png" alt="The room in trangular, with the point facing down. There is a cupboard on the top left and a sofa on the top right. The adult and child are sitting on the sofa. In front of the sofa is a table with Zeno and his clothes. The observer and Wizard-of-Oz are sitting between the sofa and cupboard. There are two bookshelves in the bottom corner, the camera sits on one of these shelves.">
				<figcaption><i>Figure 5.</i> Room set-up for the second round of user tests.</figcaption>
			</figure>
			

			<p>Many of the changes we made had a positive impact on the experience of the game. The children were more open to conversation and deliberated their choices for longer, though this was possibly due to the more serious setting of the day care versus a school outing.</p>

		</div>

		
	</section>

	<section class="discussion" id="discussion">
		<h2 class="section__title section__title--discussion">Discussion</h2>
		<div class="discussion__body">
			<p>Overall, our game was well received by children. When Zeno displayed excitement, most of the children got excited too. One big caveat of the results of our user testing is that we did not have the opportunity to test on children with autism, nor was the game evaluated by people who have extensive experience with children with autism. Thus, even though our users rated the game as fun, there are likely many elements that still needs to be tweaked or changed to account for specific sensory needs of children with autism.</p>

			<p>With that said, I enjoyed the project very much. This was the first time I worked with a robot such as Zeno, so there were many new things to learn such as how to program his movements and facial expressions. Another big learning point was in designing the evaluation so that it was easy to answer for children. The questions had to be concise, and we had to make sure it cannot be misunderstood.</p>
		</div>
	</section>



</div> <!-- /main -->

	<script src="./js/index.js"></script>
	<script src="./js/menu.js"></script>

</body>
</html>