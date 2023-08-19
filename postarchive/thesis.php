<?php include("common/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("common/head-tag-contents.php");?>

</head>
<body>


<?php include("common/navigation.php");?>

<div class="main" id="main">
	<!-- Introduction -->
	<section class="intro" id="intro">
		<div class="project__head">
			<div class="project__title">
				<h1 class="section__title">
					Building and evaluating the performance and impact of emoji recommendation models in Discord
				</h1>

				<p class="section__subtitle">
					Can emoji recommendations influence how people use emoji? What types of recommendations are most important?
				</p>				

			</div>

				
		</div>

		<div class="project__background">
			<div class="project__background--body">
				<h3 class="project__background--header">Project background</h3>
				<p> As more emojis are added to Unicode each year, the emoji keyboard becomes increasingly difficult to navigate. Users become unaware of all the emojis that are available to them. </p>

				<p>For my master's graduation project, I worked on implementing models for emoji recommendation, which could introduce novel emojis to users depending on their current text input. The models were tested in an automated, Discord-based experiment operated by chatbots I made. More details can be found in the <a href="http://essay.utwente.nl/85793/1/Sung_MA_EEMCS_2.pdf" target="_blank">thesis</a>.</p>
			</div>

			<div class="project__background--details">
				<dl class="project__background--detailslist">
					<dt class="firstdt"><h3>When</h3></dt>
						<dd>2019-2021</dd>
						<dd></dd>
					<dt><h3>Supervisors</h3></dt>
						<dd>Mariët Theune</dd>
						<dd>Lorenzo Gatti</dd>
					<dt><h3>Skills</h3></dt>
						<dd>Literature review</dd>
						<dd>Python</dd>
						<dd>NLP/ML</dd>
						<dd>Experiment design</dd>
						<dd>Data analysis</dd>
				</dl>
			</div>
		</div>

	</section>

	<!-- Current emoji section -->
	<section class="current-keyboards" id="current">
		<h2 class="section__title section__title--current">
			The Emoji Moment
		</h2>

		<div class="current__body">
			<figure>
				<img src="img/thesis/userflow.webp">
				<figcaption><i>Figure 1.</i> Video showing the emoji insertion process. This is with the Facebook messenger on desktop which has a built in emoji keyboard. </figcaption>
			</figure>

			<p>The process of sending a message that includes emojis generally look something like Figure 1. The user types the text portion of the message, then switches or opens the emoji keyboard to insert the emojis. At some point during the composition of the message, the user has what I call the "emoji moment", which is the moment the user thinks "an emoji goes here."</p>

			<figure>
				<ol class="userflow__list">
					<li>Compose message</li>
					<li>Emoji moment</li>
					<li>Switch to emoji keyboard</li>
					<li>Find emoji</li>
					<li>Insert emoji</li>
				</ol>
				<figcaption><i>Figure 2.</i> Steps a user takes to compose a message with emojis.</figcaption>

			</figure>

			<p>At the emoji moment, sometimes a user has particular emojis in mind. Other times, it may be an impetus to insert emoji, but the user does not know which one(s) yet until they browse the keyboard. For example, to express uneasiness, I might go with any of these: 😬🙃😶🙈⚰🕺🤸‍🛫 I might also try multiple of them to see how it looks with the text before I make my final decision.</p>

			<p>The problem which arises then, is in step 4, finding the emoji. Emoji keyboards are generally sorted into category tabs (e.g. smileys, animals, food, etc.). This allows the user to browse through with ease, given that they know what they're looking for. If they cannot find what they want, some keyboards have a search bar feature which can be used to find emojis based on keywords.</p>

			<p>Some keyboards, such as <a href="https://www.microsoft.com/en-us/swiftkey?activetab=pivot_1%3aprimaryr2">Swiftkey</a>, offers a recommended section in their emoji keyboard (Figure 3). This section suggests emojis based on the most recently typed words. For example, for the phrase "horse riding is so much fun", horse emojis as well as positive emojis are recommended. The Swiftkey recommended tab also includes some recently used emojis.</p>

			<figure>
				<img src="img/thesis/swiftkeyhorserec.png" alt="">
				<figcaption><i>Figure 3.</i> Example of Swiftkey's recommended tab after typing the phrase "horse riding is so much fun".</figcaption>
			</figure>
			
			<p>Improvements to the emoji insertion process can happen from the emoji moment to the point of emoji insertion. Some keyboards, such as Gboard, offers emoji suggestions in the auto-corrent or next word prediction bar while users are typing text (see Figure 4). These work well for nouns and verbs that have direct emoji counterparts (e.g. 🍰 when user types "cake"), however, it is more difficult for more ambiguous uses (e.g. expressing uneasiness). </p>

			<figure>
				<img src="img/thesis/fishgboard.png" alt="">
				<figcaption><i>Figure 4.</i> Example of Gboard's emoji suggestions which happens before the user switches to the emoji keyboard.</figcaption>
			</figure>

			<p>If suggestions while users are typing text work well, this could mean the user does not have to switch to the emoji keyboard at all, saving them a lot of time. However, the number of emojis that can be suggested in this space is limited. The next earliest opportunity for suggestions/recommendations, then, is after the user switches to the emoji keyboard. A recommended section in the emoji keyboard allows for a larger array of recommendations to be shown, and is thus the focus of this thesis. </p>

			<p>The goal of the thesis was to design emoji recommendation models, and to investigate whether a wider range of recommendations could increase the user's emoji vocabulary.</p>
				

	</section>

	<!-- Literature review section -->
	<section class="literature-review" id="literature">
		<h2 class="section__title section__title--literature">
			Literature review
		</h2>

		<div class="literature__body">
			<p>A literature review was conducted in order to understand how emojis are used in text messaging, as well as to gain an overview of current works concerning emoji prediction.</p>

			<h3 class="literature__subtitle">Emoji functions</h3>

			<p>Here are the main six ways emojis are used, along with an example:</p>

			<dl class="literature__functions">
				<dt class="functions__item"> <strong>Emphasis</strong>  - referring to concepts or objects mentioned previously in the text message.</dt>
				<dd class="functions__example">Burger King yeah yeah 🍔🍔</dd>
				<dd class="functions__example">Love this! 😍😍 <br> <br> </dd>

				<dt class="functions__item"> <strong>Illocutionary</strong> - clarifying/altering the intention of text or adding emotional information otherwise missing. </dt>
				<dd class="functions__example">Eggs for breakfast again 😋😋</dd>
				<dd class="functions__example">Eggs for breakfast again 🙄 <br> <br></dd>

				<dt class="functions__item"><strong>Social</strong> - performing social communicative acts such as backchannelling or conversation management.</dt>
				<dd class="functions__example">👋👋 Hello!</dd>
				<dd class="functions__example">A: New puppy alert :> <br>B: 🐩  <br> <br> </dd>

				<dt class="functions__item"><strong>Con⛺(tent)</strong> - adding non-emotional information otherwise missing from the text. May be used to disambiguate the message. Also includes emojis used to “spell”.</dt>
				<dd class="functions__example">Getting takeout today 🍣🍣🍤</dd>
				<dd class="functions__example">Just 🐻 with it <br> <br></dd>

				<dt class="functions__item"><strong>✨Aesthetic✨</strong> - adding decorative elements to text</dt>
				<dd class="functions__example">How are you doing? 🌸🌸</dd>
				<dd class="functions__example">💪Workout Schedule💪 <br> <br></dd>

				<dt class="functions__item"><strong>Reaction</strong> - replying to another person's prompt, usually a stand alone emoji or emoji string.</dt>
				<dd class="functions__example">A: dude I got engaged?! <br>B: 😲😲😲😲😲😲 <br> <br></dd>
			</dl>

			<p>The functions differ on how often they appear and how predictable they are. Content emojis, for example, are almost impossible to predict at the moment of insertion. You might be able to guess the "🐻" given "Just *blank* with it", but not when you're given "Just *blank*". On the other hand, emphasis emojis repeat what was already mentioned so are easy to predict. </p>

			<p>With this in mind, for my thesis, I chose to tackle emphasis and illocutionary emojis. Emphasis because of the aforementioned ease of implementation. And illocutionary because it is the most common function of emojis, especially in text messages.</p>
		</div>
	</section>



	<!-- Recommender models section -->
	<section class="recommender-models" id="models">
		<h2 class="section__title section__title--models">
			Emoji recommender models
		</h2>

		<div class="models__body">
			<p>Two main models were built: Related and Most Used, while a third Combined model adds the previous two's results together. The Related model was based on <a href="https://arxiv.org/abs/1609.08359" target="_blank">Eisner and colleague's (2016)</a> emoji2vec model, supported by an emoji sense dictionary built using the <a href="https://babelnet.org/">BabelNet</a> API. The Most Used model was a predictive trained using data from the <a href="https://sites.google.com/view/emotiongif-2020/" target="_blank">EmotionGIF2020</a> challenge.</p>
			
			<p>The Related model excelled at recommending emphasis emojis while the Most Used model recommended the most common emojis. With the two models combined, a wide range of emojis are covered. Below are some example inputs with the emoji recommendations of the different models:</p>


			<ul class="models__list ul-no-styling">
				<li><strong>Related</strong>
					<ol class="models__sublist">
						<li>I'd definitely rather swim<br>
						['🏃', '🏄', '🚣', '🏊', '🐠', '🐡', '🌊', '👙']</li>
						<li>cheese cake!<br>
							['🧀', '🍕', '🍥', '🍪', '🎂', '🍰', '🍮', '🎆', '👑']
						</li>
					</ol>
				</li>
				<li><strong>Most Used</strong>
					<ol class="models__sublist">
						<li>its surprisingly sunny right now<br>
							['😇', '😪', '😭', '😞', '💛', '💥', '🙏', '❗']
						</li>
						<li>Work, mostly, but also watched comedy<br>
							['😀', '🤪', '😎', '💯', '👏', '💪', '✨', '🎉']
						</li>
					</ol>
				</li>
				<li><strong>Combined</strong>
					<ol class="models__sublist">
						<li>Cloudy but kinda nice. Wish it was warmer <br>['😄', '🙂', '🤗', '😪', '😭', '💗', '💜', '💥', '💫', '🙏', '🌸', '⛅', '🌦', '🌧', '🌨', '🌩', '🌫', '🌬', '👞']</li>
						<li>Veggies! All of them please<br>['😋', '🤪', '😪', '😭', '💥', '👏', '🙏', '👅', '🍅', '🌽', '🍱', '🍛', '🍝', '🍠', '🍥', '✨', '🎉']</li>
					</ol>
				</li>
				
			</ul>

		</div>

	</section>

	<!-- Designing the experiment -->
	<section class="experiment" id="experiment">
		<h2 class="section__title section__title--experiment">Designing the experiment</h2>

		<div class="experiment__body">
			<p>The models were not perfect, but gave a good idea of the types of recommendations one could expect from each. My next problem was figuring out how to test the perception of recommendations.</p>
			<p>Ideally I would have wanted to implement a working phone keyboard that people could install and hold a short term study. This way, I could measure how they used emojis at the start versus the end of the experiment. However, I did not have the technical expertise to create an app.</p>

			<p>What was important was for people to see that the recommendations can respond to a variety of input and to try to simulate a conversation since the recommender was targeted for text messaging. To this end a Discord-based experiment was designed.</p>

			<p><a href="https://discord.com/" target="_blank">Discord</a> is platform for communities where people can hold voice calls, video calls, and send text messages. This is a platform I'm familiar with. It also allows for the creation of custom bots, which is the backbone for my experiments.</p>

			<figure>
				<img class="experiment__img" src="img/thesis/experimentflow.png" alt="experiment flow image">
				<figcaption><i>Figure 5.</i> Experiment flow. The Discord channel where the various phases take place are denoted by #channelName. There are three recommender conditions which the participants are assigned to randomly.</figcaption>
			</figure>

			<p>The experiment flow can be seen in Figure 5. The Admin Bot guided the participants through the different channels of the experiment server, while the Conversation Bot Connie held two short question-answer conversations with the participants. The first conversation had no recommendations, while during the second conversation, the Recommender Bot added emoji recommendations to the participant's message as reactions (see Figure 6). The participants can then select the emojis they might use from the recommendations. This was followed by a short evaluation survey.</p>

			<figure>
				<img class="experiment__img" loading="lazy" src="img/thesis/combined.gif">
				<figcaption><i>Figure 6.</i> Video showing Recommender Bot adding emoji recommendations to the participant's message.</figcaption>
			</figure>
			
		</div>

		
	</section>

	<!-- Data analysis section -->
	<section class="data-analysis" id="data">
		<h2 class="section__title section__title--data">Data analysis</h2>

		<div class="data__body">
			<p>Overall, participants did use more emojis as well as a higher variety of emojis with the recommender than without. It is important to note here that the design of the experiment probably had a big role to play in this effect.</p>

			<p>Between the models, participants used most emojis in the Related model, which was also rated highest on novelty of recommendations. The Most Used model was not perceived as well as the others, however, participants shown the Combined model did choose emojis from the Most Used model more often than those from the Related model. This means that although Most Used recommendations do not contribute to the positive perception of a recommender, are still crucial to the user.</p>

			<figure>
				<img src="img/thesis/h1summary.png">
				<figcaption><i>Figure 7.</i> Bar chart showing the difference in emoji count and emoji variability between the with and without recommender conditions. * signifies p<0.05, ** signifies p<0.01 </figcaption>
			</figure>

			<figure>
				<img src="img/thesis/h2summary.png">
				<figcaption><i>Figure 8.</i> Bar chart showing the emoji counts and variability between the different recommender conditions. * signifies p<0.05, ** signifies p<0.01</figcaption>
			</figure>

			<figure>
				<img src="img/thesis/h23summary.png">
				<figcaption><i>Figure 9.</i> Bar chart showing the evaluation survey outcome means for the different recommender conditions. Scores are averages of questions according to Table 4.1. * signifies p<0.05, ** signifies p<0.01 </figcaption>
			</figure>

			<figure>
				<img src="img/thesis/h24summary.png">				
				<figcaption><i>Figure 10.</i> Bar chart showing the model attribution breakdown of emojis counts within the Combined condition. </figcaption>
			</figure>
			
			



			<p>Detailed data analysis can be found in the <a href="http://essay.utwente.nl/85793/1/Sung_MA_EEMCS_2.pdf" target="_blank">thesis</a>.</p>
		</div>
	</section>

	<!-- Closing section -->
	<section class="closing" id="closing">
		<h2 class="section__title section__title--closing">Final thoughts</h2>

		<div class="closing__body">
			<p>Emojis are becoming central to informal communication between friends and family. They fill in much of the paralinguistics that is otherwise missing from text messages. Emojis are also unique in that it mainly exists in the digital world, a truly technology-mediated form of communication. As such, the tools surrounding emojis play a big role in how these digital conversation are carried out. From which emojis are added by Unicode, to the implementation of emojis by each provider, to emoji keyboard design. It is not trivial. 
			</p>
		</div>

		<h3 >Inspiring emoji works</h3>
		<p>Here are some of my favourite emoji papers and recent developments:</p>
		<ul>
			<li><a href="https://www.researchgate.net/profile/Hannah-Miller-18/publication/306396532_Blissfully_happy_or_ready_to_fight_Varying_Interpretations_of_Emoji/links/57bce40d08ae6c703bc527c1/Blissfully-happy-or-ready-to-fight-Varying-Interpretations-of-Emoji.pdf" target="_blank">Miller, H., Thebault-Spieker, J., Chang, S., Johnson, I., Terveen, L., & Hecht, B. (2016, March). “Blissfully Happy” or “Ready toFight”: Varying Interpretations of Emoji. In Proceedings of the International AAAI Conference on Web and Social Media (Vol. 10, No. 1).</a></li>
			<li><a href="https://www.languageatinternet.org/articles/2019/gawne" target="_blank">Gawne, L., & McCulloch, G. (2019). Emoji as digital gestures. language@ internet, 17(2).</a></li>
			<li><a href="http://ranjithakumar.net/resources/opico.pdf" target="_blank">Khandekar, S., Higg, J., Bian, Y., Won Ryu, C., O. Talton Iii, J., & Kumar, R. (2019, May). Opico: a study of emoji-first communication in a mobile social app. In Companion Proceedings of The 2019 World Wide Web Conference (pp. 450-458).</a></li>
			<li><a href="https://blog.google/products/android/emoji-kitchen-new-mashups-mixing-experience/" target="_blank">Emoji Kitchen on Gboard</a></li>
		</ul>
	</section>

</div>

<script src="./js/index.js"></script>
<script src="./js/menu.js"></script>

</body>
</html>