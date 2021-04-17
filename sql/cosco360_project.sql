-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 08:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sample`
--
DROP table `blogs`;
DROP TABLE `users`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` boolean NOT NULL,
  `pfp` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `blogs` (
    `username` varchar(255) NOT NULL,
    `title` varchar(255) NOT NULL,
    `category` varchar(255) NOT NULL,
    `picture` varchar(255),
    `content` text NOT NULL,
    `comments` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`,`pfp` ) VALUES
('markhayes', 'mark', 'hayes', 'mark.hayes@email.com', 'ea82410c7a9991816b5eeeebe195e20a', true, '../pfp/grinch.jpg');
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('paulz', 'paul', 'z', 'paul.z@email.com', '6c63212ab48e8401eaf6b59b95d816a9', true);
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('magicjonsen', 'joseph', 'magic', 'joseph@email.com', 'cb07901c53218323c4ceacdea4b23c98', true);
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('bobsmith', 'bob', 'smith', 'bob@email.com', '9f9d51bc70ef21ca5c14f307980a29d8', false);
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('defaultblogger', 'blogger', 'default', 'blog@email.com', 'c21f969b5f03d33d43e04f8f136e7682', false);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'How to Slow Your Life', 'lifestyle', '../blogimages/P5800838.jpg', 'Two years ago, on a brightly lit stage in West L.A., Maria Shriver asks me this:

But how? How do you do it? What would you tell someone who wants to slow their life, but can’t? Who feels totally buried already?
I pause, blink at the lights. I say something about how there’s no easy formula, how it’s different for everyone, but how we can start by simply paying attention. Get off the phone. Breathe. Survey our lives, look for triggers, invite passion into the day.
But of course there’s more.
I’m a firm believer that living slowly is possible in any season. It takes practice, of course, to see past the mechanics of it all – to peer at your current circumstances and call the whole lot of a gift. It takes practice to remind yourself that perfection is not just around the corner, that arrivals do not exist, that a better set of circumstances do not necessarily lead to a better life.
After all, slow living has never been about logistics. It’s about linguistics.
—
The question is not what slow living looks like, who can achieve it, how to master it, where to do it.
The question is not “What is slow living?” but instead is “What is slow living for?”
And the answer is simple: Each other.Slow living is for connection, for community. For looking a crossing guard in the eye when we thank them. For making the time to help the woman in aisle 9 find the olives. For having the space in our day to welcome an impromptu visit from neighbors, for having the space in our mind to open the door wide even though the hallway’s a mess.
It is thinking about the way we live, and asking ourselves why.
—
And so, of course we can all do this. In any season, at any moment.
But if you feel buried, here’s a shovel:
Do not victimize yourself.
You are not buried alive until you are buried alive. Call it what it is; resist the urge to exaggerate your current state of living. Chances are, if you are reading this, you’re noticing a bit of a chasm between the life you lead and the life you want to lead, and here’s a secret: we all have this chasm. We all have this gap. There is nothing broken in you that is not broken in everyone. We are each conditioned to want something different than what we have been given. And so, you have two options: (1) Chase someday, or (2) Accept today. I recommend the latter. Remind yourself that you are here, breathing, alive and well(ish). For now, let that be enough.
Notice it.
The trick, then, is to notice the chasm. So what, you’re not yet who you want to be? Who is? Live with the tension. Cozy up in the space between; get comfortable with the discomfort. This is life, in all its glory. Do not numb it. Do not wish it away hoping for days void of hardship. Once you’ve noticed the chasm, you’re well on your way to the good work: figuring out what it means to live a life that’s ripe with limitations and riddled with lessons, but resounding in love.
Consider your compass.
We’re not talking goals here. Life is immeasurable, with a path that winds in the most unfathomable, incredible way. Rather than setting a goal to encourage the arrival, consider setting a compass to encourage the journey. A compass guides graciously, rather than mandates mercilessly. It offers a gentle whisper that yes, you’re headed in the right direction. It is ever-necessary in navigating your life with conviction and curiosity, rather than convention and conformity. Find your compass in something unchanging, something that you deem true and stable and secure. (Mine is here.)
Put on your boots.
Listen. I know what it’s like to have a crippling mortgage. I know the stress of mounting medical bills, of mouths to feed, of requesting overtime hours under fluorescent lights. There is much of this in my book, and so I will simply cut to the chase: after the 2008 financial crisis, Ken and I fought hard to carve out a life with little-to-no overhead.  We budgeted only for needs, not wants. We spent weekends and evenings building separate freelance portfolios, quitting our weekday 9-to-5s once we’d created sustainable demand for our work. We ate peanut butter sandwiches for dinner and called it lovely. We moved to an area where purchasing a home in cash was possible, even probable, where we could live a flexible life that wasn’t dictated or constrained by finances. I quit shopping for sport. We gave generously. We simplified in every area possible, and yes, there was a trade-off (there is always a trade-off). It was ever worth it.
Forget “but.”
You will be tempted to resist making a change because of the “but.” But what will our family think? But what will my career look like? But what if it’s too hard? It is wise to survey the “but,” to consider it a lesson in preparedness, to let it inform your plans. And then it is wise to proceed anyway.
Allow failure.
We needed to live the fast life to understand why we needed to live a slower one. We needed to chase the wrong things, to learn the hard lessons the hard way. The failing nearly always comes before the learning, and sometimes, yes, even after the learning. It is an impossible step to skip. Allow it. Learn from it, and re-learn from it again and again.
Walk ahead.
Take one step; start small. Experiment. Ask yourself what area of your life brings the most stress, currently? Get specific. What stumbling blocks are ahead? Move them, or move around them. My girlfriend dreads picking up the dry cleaning, so she now keeps a strict No Dry Clean Only clothing policy in her home. Another friend despises her inbox, so she rewards herself with a Skittle for every email answered. Infuse tiny joys into your day in whatever way you can. You have far more power over this than you think.
Lighten your load.
We are a culture of more. When we see a roadblock, the temptation is to throw more stuff at the problem – distract, distract, distract. And yet, often times, the solution is to offer less. I know a mother of eight who felt buried in dish duty, but instead of adding a dishwasher, she simply offered less dishes: One plate/glass/utensil per day, per kid. If they want to eat my next meal, she’d say, they’ll have their dish cleaned and ready. Boundaries bring clarity, creativity and perspective. Insist on them.
Look up.
It is nearly impossible to navigate your path when you’re looking down, staring at the phone, scrolling through journeys on vastly different terrain. Lift your eyes. Do you see it? Your path is here. Focus. Pay attention. Greet the people you meet along the way. Look at the wide sky, offer thanks for your smallness.
Survey your surroundings.
If you’ve been consulting your compass for long enough, your surroundings will look vastly different than they used to. Don’t forget to peer at the path behind you. Don’t forget to see how far you’ve come, see where you’ve tripped, see where you’ve detoured, see where you reoriented back onto your path. Peer at the panoramic. Call it beautiful.', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Have a Nice Weekend', 'lifestyle', '../blogimages/2.jpg', 'What are you up to this weekend? We have a new ice cream spot in our neighborhood and it has become the boys’ life goal to become regulars. We also have a new tradition of watching an episode of Full House in bed every night — it’s such a childhood flashback. Hope you have a good weekend — Ramadan Kareem — and here are a few links from around the web…
I’m excited to look glowy this summer.
How cool is this rooftop studio apartment?
The new movie Together Together looks compelling.
“Rage is the only language I have left.” (New York Times)
Delicious. Also, this.
Roxane Gay on how she chooses art.
Wouldn’t it be fun to stay in a treehouse hotel?
These outdoor pieces are making me crave warmer weather.
Hahaha.
Lincoln Center will look different this summer. (New York Magazine)
Plus, two reader comments:
Says Rosie on talking to kids about sex: “My mom did such a good job teaching us about the importance of women enjoying sex that I thought only women had orgasms until I actually started having sex. I truly believed that the whole point was for the girl to get off and the guy was just doing it for her to be nice and/or make a baby.”
Says Katie on what’s your second chance this year: “My partner of seven years and I broke up in February — the day before Valentine’s Day. Because of things too many to name, we still live together. BUT I am moving out TOMORROW! I have never lived alone before so this will be my first place all by myself at 28 years old. A second chance for love, home and life, in my adorable new apartment. I can’t wait to see how things unfold.”', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Our Favourite Waffle Recipe', 'food', '../blogimages/food.jpg', 'I was recently contacted by Got Milk? to see if I was interested in partnering with them for a blog post.
Considering that milk was such a huge staple of my childhood (like a totally normal person, I collected Got Milk? mustache magazine ads in a binder) and because every member of my family drinks milk every day, this was a no-brainer for me. I was raised on glasses of milk. From age 1 to 18, my brother and I had milk with our dinner every single time my family sat down at the table (so six of seven nights a week). When I go to Sacramento to visit my parents, they pour my glass of milk without asking. (And I drink it without compliant.)
"Drink you milk" was part of the chorus I heard growing up. (Along with "do your best," "take the laundry upstairs" and the Full House theme song.) If I do my job right, it will be part of Ellerie''s as well. (Along with "finish your Harry Potter," "bring in the backyard tomato harvest" and "do you want to go craft supply shopping?")
Wholewheatwaffles
Anyway, I''m excited to share one of our favorite whole wheat waffle recipes with you today. We eat cereal and milk for breakfast most mornings, but on weekends, we get a little more exciting (you can see our pancake recipe here) and sometimes that includes waffles (made with milk, of course).
Waffles1
This recipe makes three dense (and delicious) waffles, feel free to increase it to fit your needs.
1 egg
3/4 C wheat flour
1/4 C white flour
2 Tbsp wheat germ
1/8 tsp salt
3/4 tsp baking powder
3/4 C milk (we used whole milk)
1 Tbsp honey
2 Tbsp butter (melted)
Waffles2
Separate the egg. Set aside the yolk (to be used later) and beat the whites with a hand mixer until stiff.
Waffles3
Combine the dry ingredients in a large bowl.
Waffles4
Combine the wet ingredients. I like to beat the egg yolk then mix with the melted butter and honey before adding the milk.
Waffles5
Mix the wet into the dry and stir just until you can''t see dry ingredients anymore (do not over mix).
Waffles6
Add in your strawberries (or other fruit choice).
Waffles7
Fold in your egg whites. This is what will keep the waffle more on the light and fluffy side (again, take care not to over mix).
Pour the mixture into your waffle iron (we have this one). This is a thick batter and you can sort of scoop it into place. Follow the cooking directions according to your waffle iron.
Strawberrywaffles
Serve right away...ideally with whipped cream and more fruit! Since I had the hand-mixer out for the egg whites anyway, I decided to make up some whipped cream. I combined 1/2 C cream, a dash of vanilla and 1tsp sugar and whipped until it was the right consistency.
Familybreakfast
So good. And as far as sweet breakfasts go, these are pretty healthy and properly filling (we''re not all starving again at 10am). All three of us are fans (though Ellerie perfers that hers is broken into bite-sized pieces).', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'The Soul-Satisfying, Packed Pasta I Make Every Week (At Least)', 'food', '../blogimages/pasta.jpg', 'I could tell you I don''t like to play favorites with pasta. Every fusilli alla vodka, spaghetti swirled with butter and pepper, and blistered tomato-topped capellini is equally beautiful in my eyes. But the truth is: There''s one pasta recipe that''s truly a cut above the rest. Jonah and I came across it while I still worked at Food52, and have made it nearly every week since, which means (pause for quick math), I''ve eaten it approximately 286 times, and still find it incomparably soul-satisfying and craving-sating. I''ve mentioned it over the years in The List, but it''s truly a travesty that it never received a dedicated post, until now.
This secret to this pasta is that it essentially takes every delicious pasta ingredient—caramelized onions, roast chicken, sun-dried tomatoes, white wine, cream, chorizo, pesto—and combines them into one Super Pasta. (Why aren''t more people talking about this pasta??) Over the years, we''ve made small tweaks to the original, like making our own penne from scratch with this pasta maker, but there''s really not much to improve upon. Once you add the chorizo to the pot of onions and garlic, it turns into a richly gooey, savory mess that clings to each penne and is brightened by the pesto you serve it with. Below is my take on Creamy Penne with Roast Chicken, Chorizo, and Pesto, which is enough for four generous portions:
You will need:
For the homemade pasta:
2 cups all-purpose flour
Juice from 1/2 lemon
1 egg yolk
Or, one 16-ounce box of penne pasta
For the sauce:
2 tablespoons olive oil
1 onion, chopped
3 cloves pressed garlic
One 12-ounce package Soyrizo (I prefer Trader Joe''s or El Burrito brand) or Mexican chorizo, casing removed
1/3 cup chopped sun-dried tomatoes
1/4 cup white wine
2 cups rotisserie or roast chicken, torn into bite-sized pieces
1/2 cup cream
1/2 cup shredded Parmesan cheese, plus more for serving
1 handful chopped parsley (optional)
Pesto, to serve (I love this budget-friendly recipe, or Trader Joe''s store-bought!)
Special equipment:
Philips Pasta Maker (entirely optional!)
How to make it:
1. If using boxed pasta, skip this step! No news here: I''m obsessed with my pasta maker and prefer to make fresh pasta (for the convenience of not having to keep every shape in my pantry, and because it tastes better). If making the pasta fresh, add 2 cups flour to Philips Pasta Maker with the penne shape on, and follow instructions for "Pasta with Egg/Flavored Pasta." Add 1 egg yolk and juice from half a lemon to your measuring cup, then fill with water as instructed (mine called for 190 ml for 2 cups of flour, but yours may require a different yield), and cut pasta into 1 1/2-inch pieces.
2. Bring a large pot of salted water to boil as you begin to make the sauce.
3. In a large pot (I use the largest I own), heat olive oil until it shimmers over medium heat and add the onion. Cook until softened and just beginning to brown, about 7 minutes.
4. Add garlic, sun-dried tomatoes, and chorizo. Cook for about 6 to 10 minutes, until it begins to stick to the bottom of the pot.
5. Add wine to deglaze (so satisfying!), then add in the chicken and cream. Cook on low, to warm it all as you cook the pasta.
6. Add fresh pasta to the boiling water and cook until just al dente, about 2 to 3 minutes. (Alternatively, follow package instructions to cook penne and keep an eye on your sauce—turn it down, if needed.) Reserve 1 cup pasta water before draining.
7. Add drained pasta directly to sauce, with 1/2 cup to 1 cup pasta water to thin, as needed. Fold in the Parmesan and parsley, if using.
8. Serve with pesto, chili flakes, and more Parmesan, Enjoy!', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', '8 Compelling Reasons to Live with Less', 'lifestyle', '../blogimages/fbless.jpg', 'Sometimes figuring out how to live with less is the easy part. You can get rid of clutter in many ways including simplicity challenges like …
minimalist fashion challenge Project 333
the minimalism game
Decluttering Burst: let go of one hundred things in less than an hour
and, there are plenty of articles to help you declutter like …
Declutter These 52 Things From Your Life Today
Decluttering 101: 10 Rules To Help You Live With Less Stuff
7 Tiny Steps for the Beginner Minimalist
No matter your approach, if you want any of your simplifying efforts to stick, it is so important to understand why you want to live with less.
You can spend your life in a cycle of shopping > organizing > accumulating > decluttering > holiday gift overload > spring cleaning > repeat, or you can identify your why and break the cycle.
LIVING WITH LESS
Why do you want to live with less?
Once you know your why, write it down and use it as emotional leverage.
Connect to your why when …
things get tough
you are tempted with a semi-annual or holiday sale
decluttering feels overwhelming
you think shopping will make you feel better
Your why may change over time and it’s ok to have more than one reason. To help you brainstorm your why, here are 8 compelling reasons to live with less.
1. Health
If you discover that your clutter is stressful and that clutter might be making you sick, prioritize your mental and physical health and let go.
I knew stress made me feel sick and contributed to feeling rundown and overwhelmed, not to mention to MS relapses and symptoms, but I never thought my clutter was stressful, until I took a closer look.
My clutter was a constant reminder of my debt and discontent. That’s stressful.
Walking into a cluttered home at the end of a stressful work day made me even more stressed.
Managing my clutter; organizing, cleaning, and worrying about my stuff was stressful.
Dealing with the emotions about the clutter was very stressful.
It takes more than decluttering to combat chronic stress, but it’s a strong start. Every positive change you make and every step taken towards a healthier life will provide confidence and momentum to make the next change.
Other things that have helped me eliminate chronic stress include, creating a morning routine, moving my body regularly and meditation.
2. Clarity
Brain fog? Can’t think straight? Easily distracted? We are overwhelmed with everything we have to think about, manage and pay attention to on a daily basis. One of my favorite quotes from Thrive is from Iain Thomas, “And every day, the world will drag you by the hand, yelling, “This is important! And this is important! And this is important! You need to worry about this! And this! And this!” And each day, it’s up to you to yank your hand back, put it on your heart and say, “No. This is what’s important.”
When you begin to eliminate the stuff and the fluff, it will become easier and easier to clearly identify and protect the things that your heart knows are important.
3. Joy
Living with less will you give you room to create more joy in your life. Letting go and getting simple provides time for long walks, slow meals, meaningful conversations, or anything else that brings you real joy.
4. Rest
We’ve done a big disservice by portraying rest and relaxation as something you get if you work hard, can do if you get everything done by the end of the day or something you deserve if you are completely run down and burnt out.
Contrary to popular belief, rest is not a reward but instead an essential part of your health and healing journey (a.k.a. your life). Living with less makes it easier to reclaim your right to rest.
5. Silence
Peace and quiet shouldn’t be considered a luxury. You deserve moments of complete silence everyday. It’s a noisy, noisy world but you can better navigate and appreciate it by fueling up on silence and solitude.
6. Light
Travel light. Live light. Feel light. Be light. It’s as good as it sounds.
7. Time
If you would rather spend time with people you love and doing things you love instead of organizing and managing your stuff, living with less can help. Less stuff means less time cleaning, less time looking for things, and less time putting stuff where it belongs.
8. Purpose
If you want to find purpose and discover what matters most to you, get rid of everything that doesn’t.
Which why resonates most with you?', null);


INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Future Perfect', 'lifestyle', '../blogimages/nerd.jpg', 'I was a nerd. Growing up, I chose marching band over sports. I opted for chat rooms over roller-rinks. I rifled through Goosebumps books and spent every Saturday night watching Snick.
Like most nerds, I eventually broke (or should I say, attempted to break) out of my shell – went off to college, spent a year drinking copious amounts of cheap beer, and did everything I could to deny my nerdy roots.
Somewhere along the way I combined my knack for all things nerd and my outgoing personality to become the man I am today. A married man with an amazing wife – a marathon runner – a business owner. Every part of who I was has shaped me into the person that I am.
But if you would’ve looked at my resume even a few years ago – you wouldn’t at all see the person that’s writing these words. There’s no way a piece of paper or an interview could have accurately articulated everything I have to offer.
As Jason Fried says: “One of the biggest challenges when hiring someone is envisioning the person the’ll become.”
As my company has grown and transitioned. As folks have come and gone – I’ve questioned my ability to find the right people. My problem? I’ve been looking for perfect people – and the truth is, there are very few of them.
Fried continues: “There’s a lot of future perfect people. People who have the potential to become the perfect person in the perfect role if just given the right opportunity.”
Man, I wish I could’ve convinced all the girls who snubbed me in high-school that I had the potential to become “future-perfect”. Right, I’m sure that would’ve landed me a few more dates.
But Fried’s point is incredibly poignant, whether you’re in a position to hire or looking to get hired.
A resume and an interview about the person you have been – even the person that you are today – can only explain so much. What those who are hiring want to see, and what those who want to be hired need to show, is their potential to do great things. The potential to be the perfect person in the perfect role – if given the right opportunity.
Maybe you’ve been working in IT for 10 years and are looking to get into a creative field, but don’t have the resume or portfolio to back it up. Maybe you’re an accountant who wants to open a coffee shop, trying to prove to investors that you’re idea is viable and profitable. Maybe you’re simply lacking the qualifications articulated for your dream job, but know you’re the best fit.
When hiring, I don’t focus on where an individual has been – but instead – where they want to be (and how they plan to get there). Because I know all too well that where you’ve been isn’t always a good indication of where you’re going.
As Fried says: “As the owner of a company, few things make me prouder than seeing someone excelling in a way that their resume/portfolio/references wouldn’t have suggested they could.”
Don’t lean on your resume. Don’t rely on your portfolio. Don’t focus on where you’ve been. Focus on where you want to be – and let that shine through.
It’s not about forgetting your weekends spent playing Crash Bandicoot. It’s about striving to be a little better. You know, like Goldeneye, or Mario Kart, or NBA Jam, or heck, even the original Tomb Raider.
Who am I kidding? I’m still a nerd.', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Redefine Normal. Act Accordingly. Be Remarkable.', 'lifestyle', '../blogimages/normal.jpg', 'World Domination Summit 2013 is in the books. Here I am on a plane, sitting, thinking, and reflecting. Reflecting on an absolute blur of a weekend. One full of inspiration, curiosity, laughs, tears, affirmation, and fulfillment. World Domination Summit has many definitions, but at its foundation it is simply a gathering of remarkable people doing remarkable things.
It’s easy to feel pretty unremarkable. It’s easy to give in to the conventional. Tess Vigeland, described during her presentation (which was absolutely one of the highlights of the weekend for me) the roller-coaster she experiences day to day – one that universally resonated with the nearly 3,000 hustlers and dreamers sitting in Arlene Schnitzer Concert Hall, including yours truly…
One day, you feel unstoppable. Like a total badass. Like you can do absolutely anything and nothing, nothing, will stand in your way. And yet the next day you convince yourself you’re a total fuck-up. That you’ve been kidding yourself all along. That you should pack it in and pack it up and just give up.
“What the hell are you doing?” – I ask myself this literally almost every day. If the first step to solving a problem is admitting you have one, then here I am publicly admitting I have a problem: I am a self doubter. I ride the roller-coaster Tess so poignantly identified. One day, a total badass. The next? Feeling worthless. Worried, no, downright terrified that everything I’ve built will all come crumbling down. That it’s all been a big mistake.
Now let’s be clear, a little doubt and fear can be and is an incredibly powerful motivator. As I’ve been coined with saying, “Fear of failure keeps you humble AND hungry”. It grounds you, keeps your ego in check, and drives you to do great and wonderful, epic shit. Fear is natural. Fear is healthy. Let’s all repeat that together until we actually start believing it.
WHO BELIEVES IN ME? DO I BELIEVE IN MYSELF?
The problem, truly, is simply believing in yourself. I have a family who believes in me, friends who believe in me, co-workers who believe in me, and as I learned this weekend at World Domination Summit, a slew of folks that, up until a couple days ago, I’d only known through a blog or from Twitter, who really, truly believe in me.
But with all these amazing people in my life who tell me they’re amazed by the work I’m doing, the things I write, and the stuff I have to say. While I think I’ve answered the question, “Who believes in me?”, the question I’m left wrestling with is “Do I believe in myself?”
How do I get out of my own way? How do I discover what makes me remarkable? How do I believe it? How do I embrace that I’m living a remarkable life?
THE NEW NORMAL.
Alexis Grant summarized her thoughts post-World Domination, saying the following:
“By surrounding myself with go-getters, I have shifted my own reality, and because of that, my normal has changed.”
She goes on to say,
“It feels normal to dream, and then actually act on those dreams…Once things feel normal, you begin to act differently, too. You push the boundaries more. You go bigger. You realize even more is possible, and then you set your sights on new, bigger goals.
A lightbulb I’ve been trying to run on for years suddenly exploded in my head as I read this. I realized that my struggle, as it comes to believing in myself, in really, truly getting out of my own way, is embracing the “new normal”.
The normal I’ve been stuck in is the one that says I’m too young and inexperienced to run a successful business. That I’m too out of shape to run marathons. It says that I have a great wife, a house, no debt, and an amazing company – but it’s all too good to be true and something’s gotta’ give.
The normal I’ve found myself stuck in keeps telling me this is all a big joke and that I should stop kidding myself.
But then there’s the new normal (also known as reality). The normal of having run a successful company for three years that’s continuing to grow well. The normal of having the freedom to work with who I want, when I want, from where I want. The normal that allows me the opportunity to travel and see new places, speak at events, enjoy new cities with my wife, and share my insight with the world around me. The normal that’s seen me run four full marathons and three halves in the past 18 months, when previously I couldn’t run a few blocks.
I have created a new normal for myself. I’ve raised the bar. I’ve totally changed the idea of what it means to “go back to reality” on a Monday. I’ve got a great job and a great life sitting right in front of me that I’ve managed to lose sight of. I’m doing and have done remarkable things. I am remarkable. And for the first time, I’m actually starting to believe it.
WE ARE ALL REMARKABLE PEOPLE.
If this is sounding very Jack Handy (gosh darnit, people like me) – let me redirect the focus back to you. We are all remarkable. But maybe, like me, you’ve been struggling to recognize and discover what truly makes you remarkable. Maybe, like me, you’ve simply lost perspective on the remarkable things you’re doing.
So let me remind you: You’re hustling. You’re working hard. You’re trying new things and coming up with new ideas. You’re writing blogs, pouring your heart out for others to see. You’re starting amazing companies. You’re inventing new ideas and improving upon existing ones. You’re traveling the world and experiencing new things. You’re falling in love. You care. You do. You matter.
World Domination Summit was a conference. A gathering of people who listened to speakers share their stories and insight. And when you put it that way, this sounds pretty unremarkable.
What was remarkable about World Domination Summit was that this convergence of passionate, curious, motivated, remarkable individuals brought out the best – the absolute best – in each other. We shared ideas, expressed fears, opened up about failures, and most importantly, recognized our successes. Together, we began to redefine “normal”.
“Normal” and “ordinary” get a bad rep – and perhaps for good reason. None of us want to do anything or be anything less than remarkable. No one is excited about living a normal, ordinary life. Normal represents giving in to fear, being weary of risks, and doing what we’re “supposed” to do.
But something pretty amazing happens when you redefine normal, and more importantly, start living your new normal.
So I leave you with a few questions:
What is your normal?
What will be your new normal?
How can you bridge the gap between normal and new normal?
What will you do today to start?
When it feels normal to dream, you’ll start pursuing your dreams. When it feels normal to try something new, you’ll take action on your ideas. When you believe that you are, in fact, remarkable, you’ll do remarkable things.
Thank you, World Domination Summit, and all the wonderful people I met, for reminding me of how great life can be, and how great life is. I’ll see you all again next year!
Here’s to, in our own unique, distinct, exciting ways, redefining normal and being remarkable!', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Daily Crunch: Squarespace files go public', 'technology', '../blogimages/tech.jpg', 'Squarespace is going public, Apple shares some music payment details and Twitter bans the founder of the right-wing media organization Project Veritas. This is your Daily Crunch for April 16, 2021.
The big story: Squarespace files to go public
Squarespace has filed to go public via direct listing on the New York Stock Exchange, under the ticker symbol SQSP. The company behind the popular website builder has seen its revenue grow 28% year-over-year, from $484.8 million in 2019 to $621.1 in 2020. And it reported net income of $30.6 million last year.
Also worth noting: The majority of voting power still rests with founder and CEO Anthony Casalena.
The tech giants
Apple Music streaming revenue detailed in letter to artists — Things start at around a penny-per-stream, which is about double what Spotify pays out.
Google misled consumers over location data settings, Australia court finds — The case relates to personal location data collected by Google through Android mobile devices between January 2017 and December 2018.
Twitter bans James O’Keefe of Project Veritas over fake account policy — O’Keefe has already said that he will sue the company for defamation.
Startups, funding and venture capital
Level raises $27M from Khosla, Lightspeed ‘to rebuild insurance from the ground up’ — Level aims to give companies a more flexible way to offer benefits to employees.
Oxbotica raises $13.8M from Ocado to build autonomous vehicle tech for the online grocer’s logistics network — Ocado is treating this as a strategic investment to develop AI-powered, self-driving systems that will work across its operations.
Soona raises $10.2M to make remote photo and video shoots easy — Customers ship their products to Soona, then watch the shoot remotely and offer immediate feedback.
Advice and analysis from Extra Crunch
The IPO market is sending us mixed messages — Summing up the IPO news from UiPath, Coinbase, Grab, AppLovin and Zenvia.
Data scientists: Bring the narrative to the forefront — In our collective infatuation with data, what’s often overlooked is the role that storytelling plays in extracting real value from it.
Enterprise security attackers are one password away from your worst day — Exabeam’s Ralph Pisani argues that the world has changed, but cybersecurity hasn’t kept pace.
(Extra Crunch is our membership program, which helps founders and startup teams get ahead. You can sign up here.)
Everything else
Reform the US low-income broadband program by rebuilding Lifeline — America’s Lifeline program is a monthly subsidy designed to help low-income families afford critical communications services.
GM’s second $2.3B battery plant with LG Chem to open in late 2023 — The plant will supply the automaker with the cells needed for the 30 electric vehicle models it plans to launch by mid decade.
Pakistan temporarily blocks social media — The Pakistani government ordered the Pakistan Telecommunication Authority to block social media platforms including Twitter, Facebook, WhatsApp, YouTube and Telegram for several hours today.', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Peloton responds to concerns over Apple GymKit integration', 'fitness', '../blogimages/fitt.jpg', 'Third-party hardware integration can be a tricky thing. Peloton this week raised some eyebrows by dropping Apple GymKit compatibility for its Bike Bootcamp program. Users were, naturally, quick to react. The situation left some wondering whether the move was a direct response to Apple’s recent entry into the home exercise market with Fitness+.
A Peloton spokesperson offered the following statement to TechCrunch, “Apple GymKit is designed to work with equipment-based cardio workouts. However, Peloton recently implemented GymKit with Bike Bootcamp, a multi-disciplinary class type that combines strength and cardio, which the feature does not support. Members can still use GymKit to sync their cycling-only workouts to their Apple Watch from the Bike+.”
The comment appears to reflect one of the bigger issues with its initial GymKit implementation. Designed with the gym in mind, Apple’s program engages with specific exercise equipment. In other words, use the integration on the treadmill and the Watch specifically goes to work tracking run metrics. Use it with a bike and it tracks cycling.
A program like Bike Bootcamp complicates things, adding to the mix things like weightlifting. The implementation was likely outside of third-party guidelines around GymKit implementation. The bigger issue for Peloton owners is that GymKit was a primary distinguisher between the standard Peloton bike and the Bike+ — two products with a $500 gulf between them.
Truth is, for now at least, working together is still a net positive for both parties. Apple may have its own fitness platform, but Peloton has a huge footprint — one that likely has significant overlap with Apple Watch users. GymKit may have been developed with gyms in mind, but people haven’t visited the gym much in the past year, and there’s a reasonable expectation that the industry might never entirely bounce back.
For Peloton’s part, it’s probably good to play nice with the company that utterly dominates the smartwatch category.', null);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `blogs`
    ADD FOREIGN KEY (username)
    REFERENCES `users` (username)
    ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
