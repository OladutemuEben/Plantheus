-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2019 at 05:42 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
CREATE TABLE IF NOT EXISTS `blog_comments` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `post_id` int(100) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `body` varchar(250) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `postTitle` varchar(225) NOT NULL,
  `postDesc` text NOT NULL,
  `postCont` text NOT NULL,
  `pdf_name` varchar(50) NOT NULL,
  `post_id` int(100) NOT NULL,
  `postDate` varchar(200) NOT NULL,
  `countcomment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category`, `tag`, `author`, `postTitle`, `postDesc`, `postCont`, `pdf_name`, `post_id`, `postDate`, `countcomment`) VALUES
(7, 'Agriculture', 'Beginnings', 'Ebenezer', 'Starting Your Own Garden', 'Ever considered growing your own plants (whether for food or ornamental purposes) on a very small scale? Have you even gone ahead to take steps in establishing this but have had your efforts prove futile? Cheer up! For starting your own garden isnâ€™t rocket science. By diligently taking the right steps suggested in this article, you can be sure to own that much desired garden of yours.', '<p>\r\n\r\n</p><p></p>\r\n\r\n<p><strong>Step 1: Choose the type of Plant you want</strong></p><p>The first step before carrying out any physical work is to decide on what kind of plant(s) you want in your garden. Do I want flowers or vegetables? What kind of flowers do I want? What type of vegetables do I want? These are the questions you should clearly answer in order to effectively plan out your garden.</p><p><strong>Step 2: Pick a Place to grow your Plants</strong></p><p>Based on how much land space you have and how much your chosen plants will need, you should go on to pick the place you want to grow them. Should you be limited in availability of land, you can decide to grow your garden indoors by using containers to hold the gardening soil and plants in place, thereby maximizing your limited space.</p><p><strong>Step 3: Set your Budget</strong></p><p>In order to be able to cater for your garden all the way, it is important that you know and set out the amount of money youâ€™ll be needing to effectively run it. This budget may include expenses such as; gardening tools, plant pots or containers, plant seedlings, compost, etc.</p><p><strong>Step 4: Prepare the Soil</strong></p><p>Having put in place necessary plans to cultivate your garden, go on to get the soil ready for the actual planting. This involves securing the right soil and adding organic matter in form of compost and aged manure to improve its nutrients.</p><p><strong>Step 5: Plant, Care and Maintain</strong></p><p>Having done all of the above, go ahead and plant. Remember that plants are living things that require sunlight, water, air and nutrients to grow and do well to ensure they get enough of these requirements. Prune when necessary and practice an efficient maintenance culture for your garden in order to get the best out of your plants.</p><p><strong>&nbsp;</strong></p><p>The beauty and amazement of watching a plant grow from seed to maturity is one of the things having a garden will give you. So go on and start that beautiful garden.</p><p><strong>P.S: If you were to own a garden, what plants would you have in it?</strong></p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; (Please leave your comments in the response section)</strong></p>\r\n\r\n<br><p></p>', 'starting-your-own-garden.jpeg', 19361, 'Monday, April 8th, 2019  15:45:11 pm', ''),
(10, 'Technology', 'Farmers', 'Ebenezer', 'Technology in Agriculture', 'Over the years, man has experienced several technological advances that have had a tremendous impact on his way of living. These advances can be observed in spheres including; information &amp; communication, transportation, healthcare and many more. Among these areas is another which deserves much emphasis â€“ Agriculture', '<p></p>\r\n\r\n<p>Contained in this article are the advances technology application to agriculture makes possible with the ultimate aim of increasing crop and animal yield.</p><ul><li><strong>Use of Machinery</strong></li></ul><p>With the help of machines like; tractors, harrows, sprayers, harvesters, etc., made available via technology, time spent on farm work is drastically reduced, at the same time increasing productivity.</p><p>&nbsp;</p><ul><li><strong>Efficient Transportation</strong></li></ul><p>Moving crops from farms to the markets where they are to be sold is made easier and faster with the availability of modern vehicles to transport them. This way, damage to crops is avoided and consumers get fresh products.</p><p>&nbsp;</p><ul><li><strong>Availability of Irrigation Channels</strong></li></ul><p>Through implements such as water pumps to draw water from natural sources, farmers get to supply water to their crops on a constant basis without having to depend on rain or direct supply from natural sources.</p><p>&nbsp;</p><ul><li><strong>Early Disease Detection</strong></li></ul><p>With the integration of Artificial Intelligence into smartphone applications, it is now possible to quickly detect the diseases affecting crops and take proper preventive measures to stop their spread.</p><p>&nbsp;</p><ul><li><strong>Genetic Engineering</strong></li></ul><p>Technology has so advanced to make available, Hybrid plants and animals. These hybrids are genetically enhanced via cross-breeding and other methods, to make them resistant to pests and diseases, thus enabling them to have increased yield.</p><p>&nbsp;</p><ul><li><strong>Development of Animal Feeds</strong></li></ul><p>Due to insufficiency of natural feeds (grass, worms and the likes) for animals, technology has made artificially produced feeds available. These feeds contain essential nutrients needed by the animals and ultimately help to improve their health and productivity.</p><p><strong>&nbsp;</strong></p><p>With technology, there are safer growing conditions for crops, safer foods, reduced environmental impacts, and better efficiencies. It is therefore of paramount importance that avenues are continuously provided for farmers (especially local farmers in African countries) to have access to these technological tools and enjoy all the benefits they provide.</p>\r\n\r\n<p><br></p>', 'technology-in-agriculture.jpeg', 19369, 'Monday, April 8th, 2019  15:45:11 pm', '1'),
(11, 'Making Money', 'Farmers', 'Ebenezer', 'Why Are Farmers Not Making as Much as They Can?', '<p>If you had your primary school education in Nigeria, you must have come across storybooks or comprehension passages in which farmers were one of the characters. And how were these farmers described? Rich, famous, comfortable, fat? of course not. What you get are thin hardworking poor fellows whose only chance at getting rich is by discovering hidden bags of gold, silver or diamonds on their farmlands.</p><br>', '<p>\r\n\r\n</p>\r\n\r\n<p>This perception of farmers is not only predominant in this country but as well in other parts of the world (maybe not to the same degree as in the stories). But then, what could be the source of this perception, which to some extent is true? Why are farmers not getting as many monetary rewards for their labor as they can?</p><p>With emphasis on small scale crop farmers, the reasons may include; banks taking interests on loans taken by the farmers, fertilizer suppliers exploiting them, the problem of pests and diseases and so on. Taking note of the fact that customers donâ€™t necessarily care how much effort has gone into making a product but only want the best at the cheapest price, one would understand better the reason behind the inability of farmers to maximize profit.</p><p>One challenge deserving emphasis is the issue faced with middlemen. These people who act as intermediaries between the farmers and final buyers eat away substantial portions of the farmersâ€™ income. Many of them manipulate agriculture commodity prices due to lack of farmersâ€™ access to market information and particularly pricing information, having many farmers receiving less than 30% of the price of their produce. It is popularly known that â€œraw material producers are not rewarded, whereas, industry marketing and advertisement managers and others make a lot.â€</p><p>Another cogent reason is the loss incurred by farmers due to the invasion of pests and diseases. As we all know, all that pests such as locust, armyworm, fruit flies and rodents do to crops is consume as much as they can and destroy many others. This obviously results in a drastic reduction in the amount of produce, as diseases also do. These diseases can be caused by living organisms like; fungi, bacteria, and viruses or non-living causes such as herbicides, nutrient deficiency, and pollution.</p><p>In resolving these challenges, it is important that small scale farmers begin to see farming as a proper job-employment, capable of catering for the needs of all its employees. They also must be well aware of the true value of their products and learn to approach farming as a business that must have equal expenditures and income.</p><p>One other vital resource they can optimize is Technology. With the aid of mobile applications like â€˜Plantheus,â€™ farmers can easily diagnose the diseases on their crops and take early measures to curb their spread. Also with the advent of modern equipment such as tractors, harvesters, and drones to increase crop production and monitor growth, the use of inefficient methods that require much manual labour can be eliminated.</p><p>By implementing these suggestions, farmers will be able to make close enough to how much they can and wonâ€™t have to depend on hidden bags of gold in order to become rich after all!</p>\r\n\r\n<p>\r\n\r\n<br></p>', 'why-farmers-are-not-making-as-much.jpeg', 33472, 'Monday, April 8th, 2019  08:17:55 am', ''),
(12, 'Plants Talk', 'Farmers', 'Victor', 'What if Plants could talk?', 'Plants, we know, are living things that usually make their own food, reproduce, and grow. They are an essential part of human life; providing us with food, clothing and several products. However as much as they are living, they are not known to possess the ability to speak. But then, what if they could?', '<p></p>\r\n\r\n<p>If plants could talk, theyâ€™lld probably tell you how boring it is, sitting all day in a spot, doing nothing but receiving light, air, and occasionally water. Theyâ€™ll go on to how they wish to travel and explore the worldâ€¦how their counterparts in other geographical locations are probably faring better than them. Some will whine and complain about the parasitic neighbours (weeds) who are unfairly taking nutrients meant for them.</p><p>The proud ones among them could spend all day boasting about how important they are and how much money they generate, while the feeble will spend time complaining about how they feel sick and are not getting the necessary and right medications from their owners. But then, they canâ€™t (at least not like we can understand). How then are we supposed to know the specific needs of plants, especially of the likes of those who complain about health issues?</p><p>One available tool for addressing this latter issue is through the application of technology for plant disease diagnosis. This technology optimizes computer vision (which is an Artificial Intelligence technology that helps devices to detect objects in images or video streams). By integrating this technology into mobile applications (e.g <strong>Plantheus</strong>), farmers and gardeners alike will be able to run real-time disease diagnostics, identify the specific plant diseases and get suggestions regarding the preventive measures to take in order to treat and stop their spread.</p><p>With the application of Artificial Intelligence based technology to the growing of plants, their needs (obviously not their fantasies) can be met without having to hear them talk!</p><p>&nbsp;</p><p>P.S: What else do you think plants would say if they could talk?  (Do well to leave your answers in the response section)</p>\r\n\r\n<p></p><p><b><br></b></p>', 'what-if-plants-could-talk.jpeg', 51972, 'Monday, April 8th, 2019  15:45:11 pm', ''),
(24, 'Agriculture', 'Youth Engagement', 'Victor', 'Youth Engagement in Agriculture', '<p>\r\n\r\nOver the years, there has been an increase in the call for youths to be actively involved in the field of Agriculture and emphasis has been consistently placed on the need for them to participate in areas involving this sector. But then, someone will ask; â€œwhatâ€™s the fuss about youth involvement in agriculture?â€ If you happen to also be asking this very question, then youâ€™re reading just the right article to enlighten you. \r\n\r\n<br></p>', '<p>\r\n\r\n</p><p>Over the years, there has been an increase in the call for youths to be actively involved in the field of Agriculture and emphasis has been consistently placed on the need for them to participate in areas involving this sector. But then, someone will ask; â€œwhatâ€™s the fuss about youth involvement in agriculture?â€ If you happen to also be asking this very question, then youâ€™re reading just the right article to enlighten you.&nbsp;</p><p><br>The older generation; who constitute the larger portion of those active in the agricultural sector, will at some point be unable to effectively function in this sector and later on, totally unable to. The youths who are their successors, will then be the ones take on the responsibility of cultivating food. More so, youths have more likelihood to adapt new technologies and effectively utilize them to sustainably increase agricultural productivity.<br>It is however obvious that several challenges are faced in getting youths to actively participate in agriculture, especially in the African continent. They include; low profitability, unattractiveness of the job, high risks, and poor security of land tenure, some of which lead to youths migrating from rural to urban areas and ultimately leading to shortage of farmers in the future. Understanding how vital the youth to the global sustainability of agriculture, it is very important that efforts are geared by relevant bodies, to engage the youth in ways to actively get involved in the sector. Among several means to accomplish this include:</p><p>â€¢Optimization of Information and Communication Technologies (ICT) to help young people spread knowledge, build networks and find employment.<br>â€¢Strengthening of higher education in agriculture.<br>â€¢Integration of agriculture into school curriculum.<br>â€¢Provision of easy access to land and credit.<br>â€¢Utilization of social media for agriculture promotion.<br>â€¢Increase and enhancement of the profitability of agriculture.</p><p>By implementing these suggestions, youth will be better engaged to envisage a promising future in Agriculture and go on to pursue careers in agricultural-based industries.</p>\r\n\r\n<br><p></p>', 'youth-engagement-in-agriculture.png', 85312, 'Monday, May 13th, 2019  16:30:33 pm', '$'),
(25, 'Agriculture', 'The Future', 'Ayomide', 'The Future of Agriculture', '<p>\r\n\r\nThe world as we know it, is on a continuously evolving plane. Every sector of manâ€™s activities continues to experience advancement, especially with the advent of technology. With this understanding, it is important that everyone gets to understand what the future of the sectors look like, in order to be relevant and to be able to maximize opportunities to effectively function in them. Join us as we look into what the future holds for the agricultural sector.<br></p>', '<p>\r\n\r\n</p><div><div><div><p>The world as we know it, is on a continuously evolving plane. Every sector of manâ€™s activities continues to experience advancement, especially with the advent of technology. With this understanding, it is important that everyone gets to understand what the future of the sectors look like, in order to be relevant and to be able to maximize opportunities to effectively function in them. Join us as we look into what the future holds for the agricultural sector.</p><p>The key feature to the future of agriculture is known to be <strong><em>Smart Farming</em>.</strong>Smart farming entails the use of modern technology to improve existing farm practices in order to increase the efficiency and ultimately the quality and quantity of farm products. The major technological tools thatâ€™ll facilitate <em>smart farming</em>&nbsp;include:</p><ul><li><strong>Artificial Intelligence (A.I)</strong><br>The use of A.I â€“ powered mobile applications such as <em>Plantheus, Agrivi,</em>&nbsp;and <em>Plantix</em>&nbsp;will help to diagnose crop diseases, suggest solutions, aid communication with local farmers and ultimately improve and increase crop yield.</li><li><strong>Drones and Rovers</strong><br>By equipping aerial vehicles (drones) with surveillance technology and through the use of little A.I-powered land rovers, farmers will be able to monitor hundreds of acres of farm land and this will allow them to address land and crop issues in real-time.</li><li><strong>Internet of Things (IoT) and Sensors</strong><br>IoT connects and integrates objects, people, information and systems for intelligent production and services, and will be used to advance precision, broad reach and efficiency in agriculture.</li></ul><p>All these tools will generally help to improve; seeding and planting, harvesting, weed control and crop maintenance, watering and irrigation.</p><p>With the insight weâ€™ve provided you into the future of agriculture, you should go on to explore ways in which you can hone skills in order to be relevant in this sector and enjoy the benefits it has to offer in the future.</p></div></div></div><div><div><br>\r\n\r\n</div></div><br><p></p>', 'the-future-of-agriculture.png', 13618, 'Monday, May 13th, 2019  16:31:50 pm', '$'),
(22, 'Agriculture', 'The Instrumentality of E-Agriculture', 'Ebenezer', 'The Instrumentality of E-Agriculture', '<p>\r\n\r\n<strong>E-Agriculture</strong>&nbsp;refers to the process of deploying, adopting and accepting ICTs into the different aspects of the Agricultural Value-Chain. According to the United Nationâ€™s Food and Agricultural Organization (FAO), it involves the conceptualization, design, development, evaluation and application of creative ways of deploying ICTs to improve outcomes in the Agricultural sector.<br></p>', '<p>\r\n\r\n</p><p><strong>E-Agriculture</strong>&nbsp;refers to the process of deploying, adopting and accepting ICTs into the different aspects of the Agricultural Value-Chain. According to the United Nationâ€™s Food and Agricultural Organization (FAO), it involves the conceptualization, design, development, evaluation and application of creative ways of deploying ICTs to improve outcomes in the Agricultural sector. It takes advantage of smartphone technologies, big data analytics, social networking and other cutting edge technologies to ensure that farmers and stakeholders have actionable information upon which to improve their process and generate more income.</p><p>Listed below are other vital benefits provided by this advancement in Agriculture:</p><ul><li>Reduction of Agricultural produce loss and wastage resulting from lack of proper storage knowledge and lack of market to the rural farmers.</li><li>Dissemination of information of high yielding varieties to the farmer and where to buy them.</li><li>Provision of information on right planting time, spacing and other tips that will improve yield.</li><li>Provision of the right information on the use of herbicides, pesticides and fertilizers.</li><li>Provision of proper and efficient market information to enable profit to the farmer.</li><li>Assisting of Farmers to have access to government policies and programs.</li><li>Assisting of farmers to have access to information about credit facilities.</li></ul><p>Considering these numerous benefits E-Agriculture offers, efforts should be made by all relevant stakeholders in the sector to help farmers maximize it in order to increase their crop yield, create employment opportunities and solve food problem on a global scale.</p>\r\n\r\n<br><p></p>', 'the-instrumentality-of-e-agriculture.jpeg', 72636, 'Monday, May 13th, 2019  16:21:44 pm', '$'),
(23, 'Agriculture', 'The Sprouting of a Seed', 'Ayomide', 'The Sprouting of a Seed', '<p>\r\n\r\nEver wondered how exactly seeds germinate into full grown plants? Ever imagined the particular processes and stages of growth they undergo before becoming those maize-yielding plants or the orange-producing trees? Well, youâ€™ve come across just the right post to give you insight into this process and then some\r\n\r\n<br></p>', '<p>\r\n\r\n</p><p>Ever wondered how exactly seeds germinate into full grown plants? Ever imagined the particular processes and stages of growth they undergo before becoming those maize-yielding plants or the orange-producing trees? Well, youâ€™ve come across just the right post to give you insight into this process and then some.</p><p>Seeds, though usually small (with some being tiny), contain food nutrients and all the genetic instructions needed to sprout to life as plants. The first thing they do after being planted, is grow roots. This is in order to gain stability and can be seen as setting a proper foundation for the upcoming structure. Once the roots have firm holds in the soil, a small plant will begin to spring up and gradually extend into the soil. After this germination, the plant steadily grows into a larger one, manufacturing its own food from the nutrients and mineral elements it takes up from the soil.</p><p>The growth of a seed is not only dependent on its internal provisions but as well as external factors such as, light, food, right temperature and water. The needed amount of light can be received from the Sun and artificial sources (such as electric bulbs). This light is essential to enable the growing plant to convert its energy to food (a process called photosynthesis).</p><p>Water, an essential source of life, is obtained from the soil and absorbed into the plant through its roots, and to its stems and leaves. It helps the plant remain moist as necessary and to make its food. With further growth of the plant is a corresponding further stretch of its roots to get necessary water in the soil.</p><p>Warm temperatures facilitate the growth of plants by triggering chemical reactions within the plantâ€™s cells, thus speeding up transpiration, respiration and photosynthesis.<br>â€¦<br>One beautiful thing about nature is the subtle way in which it teaches us important lessons. Just as the Ants tell of the importance of hard work, so can we learn from the growth process of a seed, that anything worthwhile takes time and the right influence of certain factors.</p><p>We should always recognize that within us lay potentials to do great things. We should remember to consciously and patiently nurture these potentials, reach for the right and necessary influences and go on to grow to be the best we can be.</p><p><em>â€œWhat lies behind us <br>and what lies ahead of us are tiny matters <br>compared to what lies within usâ€</em><br>-<strong>Henry David Thoreau</strong></p>\r\n\r\n<br><p></p>', 'the-sprouting-of-a-seed.jpeg', 85412, 'Monday, May 13th, 2019  16:26:41 pm', '$');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `post_id` int(100) NOT NULL,
  `reply_id` int(50) NOT NULL,
  `comment_id` int(10) NOT NULL,
  `body` varchar(200) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_replies`
--

DROP TABLE IF EXISTS `sub_replies`;
CREATE TABLE IF NOT EXISTS `sub_replies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subreply_name` varchar(50) NOT NULL,
  `subreply_email` varchar(50) NOT NULL,
  `reply_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `comment_id` int(10) NOT NULL,
  `subreply_body` varchar(250) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reply_id` (`reply_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `other_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `surname`, `last_name`, `other_name`, `password`) VALUES
(1, 'Plantheus', 'App', '', '', 'ece8e8637acbdcb434573e4d82bfbc19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
