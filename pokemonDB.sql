-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 10:44 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pokemonDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `tId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `profilePic` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `pokeclass` varchar(50) NOT NULL,
  `about` varchar(1000) NOT NULL,
  PRIMARY KEY (`tId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`tId`, `email`, `fname`, `lname`, `password`, `profilePic`, `sex`, `hometown`, `pokeclass`, `about`) VALUES
(1, 'ashketchum@pokedex.com', 'Ash', 'Ketchum', 'ashketchum', 'http://i.imgur.com/d9p657u.png', 'Male', 'Kanto', 'Trainer', 'Ash Ketchum is the main protagonist of the Pokemon anime series who has always dreamed of becoming a Pokemon Master. As soon as he was ten years old, he rushed to Professor Oak''s Laboratory to get his first Pokemon. He is the first character to be introduced in the series. Originally wanting to choose Squirtle, Ash ended up getting the Pokemon Pikachu, and left on his journey.'),
(2, 'misty@pokedex.com', 'Misty', NULL, 'misty', 'http://i.imgur.com/n1C8tLS.png', 'Female', 'Cerulean City', 'Gym Leader', 'Misty is a character whose first appearance was in the very first episode of the anime series, Pokemon - I Choose You!. In this episode, she first meets Ash after fishing him out of the water when he was trying to get away from a flock of Spearow. Ash then takes Misty''s bike from her in order to escape the Spearow, which is then wrecked by Pikachu''s Thunder Shock. Misty then tracks down Ash and follows him around on his adventures until he can pay her back, although she eventually forgets about the bike and becomes one of Ash''s closest friends in the process. ');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE IF NOT EXISTS `pokemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(50) NOT NULL,
  `generation` int(11) NOT NULL,
  `species` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `ownerID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`id`, `name`, `type`, `region`, `gender`, `image`, `generation`, `species`, `description`, `ownerID`) VALUES
(1, 'Pikachu', 'Electric', 'Kanto', 'Male', 'http://i.imgur.com/qDQi0Z3.png', 1, 'Mouse', 'Pikachu is an Electric-type Pokemon introduced in Generation I. Pikachu is famous for being the most well-known and recognizable Pokemon. Over the years, Pikachu has become so popular that it serves as the Pokemon franchise mascot. It is the Version Mascot for the game Pokemon Yellow. It is also well known from the anime, where Ash Ketchum, the protagonist, owns a Pikachu. It evolves from Pichu when leveled up with high friendship and evolves into Raichu when exposed to a Thunder Stone. ', NULL),
(2, 'Jigglypuff', 'Fairy', 'Kanto', 'Female', 'http://i.imgur.com/I88eavw.png', 1, 'Balloon', 'Jigglypuff is a Fairy-type Pokemon introduced in Generation I. Before Generation VI, it was pure Normal-type. Jigglypuff is a balloon Pokemon. Its body is globular, pink, fluffy, cuddly, and accented with stubby appendages, a tiny tuft of a single curl of hair, and enormous blue eyes, featuring green eyes for its alternate color version. Its skin is rubbery and stretchy.', NULL),
(3, 'Squirtle', 'Water', 'Kanto', 'Male', 'http://i.imgur.com/DyVhclT.png', 1, 'Tiny Turtle', 'Squirtle is the Water-type Starter Pokemon of the Kanto region. Squirtle is a small, light-blue Pokemon with an appearance similar to that of a turtle. Like turtles, Squirtle has a shell that covers its body with holes that allow its limbs, tail, and head to be exposed. Unlike a turtle, Squirtle is ordinarily bipedal. ', NULL),
(4, 'Bulbasaur', 'Grass', 'Kanto', 'Male', 'http://i.imgur.com/Pus5mvs.png', 1, 'Seed', 'Bulbasaur is a Grass-type Pokemon introduced in Generation I. It is one of the three Starter Pokemon of the Kanto region - the other two being Charmander and Squirtle. Bulbasaur resembles a small, squatting dinosaur that walks on four legs and has a large bulb on its back that is able to shoot seeds out of. It also has large red eyes and very sharp teeth. Its skin is a light turquoise color with dark green spots. It has three claws on all its four legs. Its most notable feature, however, is the aforementioned bulb on its back, which as the Pokedex states, was planted on it at birth.', NULL),
(5, 'Charmander', 'Fire', 'Kanto', 'Male', 'http://i.imgur.com/63taHEy.png', 1, 'Lizard', 'Charmander is a Fire-type Pokemon. It, along with Bulbasaur and Squirtle, is a Starter Pokemon of the Kanto region. Charmander is a small, bipedal, dinosaur-like Pokemon. Most of its body is colored orange, while its underbelly is a light yellow color. Charmander, along with all of its evolved forms, has a flame that is constantly burning on the end of their tails.', NULL),
(6, 'Eevee', 'Normal', 'Kanto', 'Male', 'http://i.imgur.com/ZixM3Te.png', 1, 'Evolution', 'Eevee is a Normal-type Pokemon introduced in Generation I. It is well-known for being the Pokemon with the highest number of evolution possibilities, with 8. Eevee is a small quadruped mammalian fennec fox-like creature with bushy brown fur. Its muzzle is blunt and cat-like, with a small black triangular nose. It has a fluffy cream-colored mane around its neck, and a short bushy fox-like tail with a cream-colored tip. Eevee has round deep brown eyes, long rabbit-like ears, and pink paw pads on its feet. Its paws are small with three toes and no visible claws. In its shiny form, Eevee has white fur instead of brown.', NULL),
(7, 'Cyndaquil', 'Fire ', 'Johto', 'Male', 'http://i.imgur.com/0YPL1Bh.png', 2, 'Fire Mouse', 'Cyndaquil is the Fire-type Starter Pokemon of the Johto region. Cyndaquil is a small quadrupedal Pokemon that hold a resemblance to an echidna. They are covered with a flame-resistant fur that is dark blue in color on its back to its head and light yellow on its underside. There are also four red spots of fur on the back that flames can be projected from. A shiny Cyndaquil has yellow fur on its back instead of dark blue.', NULL),
(8, 'Chikorita', 'Grass', 'Johto', 'Female', 'http://i.imgur.com/80vNw5r.png', 2, 'Leaf', 'Chikorita is the Grass-type Starter Pokemon of the Johto region. Chikorita are a small dinosaur-like Pokemon, particularly resembling a Sauropoda. They are a light green color and their eyes are dull red. Around its neck are tiny buds that have the ability to shoot out into long vines. Its most notable feature''s the large leaf on the top of its head. They have four short legs with one toenail on each foot. Chikorita is docile and friendly, spending a lot of time in the sun to soak up the sun''s rays. ', NULL),
(9, 'Totodile', 'Water', 'Johto', 'Male', 'http://i.imgur.com/c1ciqSA.png', 2, 'Big Jaw', 'Totodile is the Water-type Starter Pokemon of the Johto region. Totodile is a small Pokemon that appear as bipedal crocodiles. While most of a Totodile''s body is blue, they have a yellow, v-shaped marking across their chest, red eyes, and red spikes that go down its back to its tail. These Pokemon are well known for their large mouths, filled with razor sharp teeth.', NULL),
(10, 'Pichu', 'Electric', 'Johto', 'Female', 'http://i.imgur.com/HWGuTju.png', 2, 'Tiny Mouse', 'Pichu is an Electric-type Baby Pokemon introduced in Generation II. Pichu are very small, plump, yellow rodent-like Pokemon. It bears a similar appearance to its evolved form Pikachu, but varies in a number of ways. Pichu have diamond shaped ears on the top of their head, with the edges being black and the interior yellow. Underneath their head is a black pattern, that somewhat resembles a collar. Their tails are completely black, and resemble a small lightning bolt, similar to its evolved forms which are larger. Pichu also have round, pink sacs on their cheeks, used for storing electricity. ', NULL),
(11, 'Umbreon', 'Dark', 'Johto', 'Male', 'http://i.imgur.com/pZr25QL.png', 2, 'Moonlight', 'Umbreon is a Dark-type Pokemon introduced in Generation II. Umbreon is a quadrupedal mammalian Pokemon that resembles a black rabbit or a black fox. It has mainly sleek black fur with luminescent yellow rings encircling its ears and tail, and round yellow circular patterns on its forehead and on each of its upper legs. The rings glow when under the influence of moonlight. Its physical characteristics are vulpine-like, with a short muzzle with a small triangular nose. It has crimson eyes and unlike it''s fellow evolutions, it also has visible oval shaped pupils colored black. It has a slightly bushy black tail with a single yellow ring encircling its thickest part; the tail thins out at the tip.', NULL),
(12, 'Lugia', 'Psychic Flying', 'Johto', 'N/A', 'http://i.imgur.com/ILO8Xt1.png', 2, 'Diving', 'Lugia is a Psychic/Flying Legendary Pokemon. It is the Version Mascot for Pokemon Silver and its remake, Pokemon SoulSilver. Lugia is an immense, draconian mythical Pokemon with avian qualities. It has silver-white feathers over most of its body, except for its blue underbelly. Lugia has ten fins running along its back, which stand upward while flying, but lie flat on its back in the water and on land. The fins are used as rudders for steering in the air and are flattened in the water to reduce resistance. It has two powerful rear legs with three-toed feet, and two wings with large, finger-like feathers, giving the appearance of hands.', NULL),
(13, 'Treecko', 'Grass', 'Hoenn', 'Male', 'http://i.imgur.com/N5bgs2g.png', 3, 'Wood Gecko', 'Treecko is the Grass-type Starter Pokemon of the Hoenn region, introduced in Generation III. Treecko are small, bipedal, lizard-like Pokemon. They have two dark green, leaf-like tails, and a red underside, similar to its evolutions Grovyle, and Sceptile. Each of its hands and feet have three digits. It has bright yellow eyes and skinny reptilian pupils. The bottom of its feet are sticky, enabling them to cling to things.', NULL),
(14, 'Torchic', 'Fire', 'Hoenn', 'Male', 'http://i.imgur.com/cCQBtdM.png', 3, 'Chick', 'Torchic is the Fire-type Starter Pokemon of the Hoenn region. Torchic is a small chick-like Pokemon. Its soft, fluffy plumage is mainly bright orange, with tiny yellow developing wings, and a yellow plume of three feathers atop its head. It has a small, tan beak, and large black eyes. It has tan-colored talons with three digits.', NULL),
(15, 'Gardevoir', 'Psychic Fairy', 'Hoenn', 'Female', 'http://i.imgur.com/n7oehi7.png', 3, 'Embrace', 'Gardevoir is a Psychic/Fairy Pokemon introduced in Generation III. Previously a pure Psychic-type prior to Generation VI, it is one of the two final evolved forms of Ralts. Gardevoir is a humanoid sylph-like, Pokemon. It stands over five feet tall. The classical tutu-type skirt seen with Kirlia is now a long, flowing white gown that completely covers its legs, giving the appearance that it is floating. Gardevoir have long, slender, white legs underneath their gown. The inside of its gown is green in color. The red horns that were once on Kirlia''s and Ralts'' head have moved down onto Gardevoir''s chest and back.', NULL),
(16, 'Flygon', 'Ground Dragon', 'Hoenn', 'Female', 'http://i.imgur.com/trrA8VC.png', 3, 'Mystic', 'Flygon is a Ground/Dragon-type Pokemon introduced in Generation III. Flygon can whip up sandstorms to protect itself. Its wings seem to be "singing" when they are flapped. Also, Flygon''s eyes are protected from sand by red membranes. Flygon can also learn moves like Sand Tomb and Earthquake. Flygon has the ability Levitate, which makes all Ground-type moves ineffective. ', NULL),
(17, 'Latios', 'Dragon Psychic', 'Hoenn', 'Male', 'http://i.imgur.com/a2th6TJ.png', 3, 'Eon', 'Latios is a Dragon/Psychic-type Legendary Pokemon introduced in Generation III. It is Latias''s male counterpart. Latios looks similar to Latias, though it is blue and a bit larger; it is also similar to Lugia. Latios has an upside-down, white teardrop shape in the center of its blue face. In the middle of his chest, Latios has a red triangle, much like Latias'', whose is blue, showing in some way they are related. ', NULL),
(18, 'Mudkip', 'Water', 'Hoenn', 'Male', 'http://i.imgur.com/bmdyC2c.png', 3, 'Mud Fish', 'Mudkip is the Water-type Starter Pokemon of the Hoenn region, introduced in Generation III. Mudkip is a small quadrupedal amphibious Pokemon that resembles mudskippers and axolotls. It is cyan blue in color, with a light blue neck, underbelly and tail. It has a large upright segmented fin atop its head, and large orange cheeks with three pointed whisker-like feelers on each. It has short legs and small paws with three toes on each, and a very large fin-like tail. ', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
