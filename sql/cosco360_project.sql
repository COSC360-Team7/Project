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

/*INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Have a Nice Weekend', 'lifestyle', '../blogimages/2.jpg', '', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Have a Nice Weekend', 'lifestyle', '../blogimages/2.jpg', '', null);

INSERT INTO `blogs` (`username`, `title`, `category`, `picture`, `content`,`comments`) VALUES
('defaultblogger', 'Have a Nice Weekend', 'lifestyle', '../blogimages/2.jpg', '', null);*/
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
    REFERENCES `users` (username);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
