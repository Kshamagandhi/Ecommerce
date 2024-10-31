-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 07:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boomit`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `a_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `reg_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cname`) VALUES
(14, 'CHAIR'),
(15, 'TABLE'),
(16, 'SOFASET'),
(17, 'Living Room'),
(18, 'dining table'),
(19, ''),
(20, ''),
(21, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `msg`, `date`) VALUES
(3, 'adnmladdml', 'adfnkadfn', '', '2022-08-05'),
(4, 'dvqdvqdvdwv', 'wvdvdv', 'dvd', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

CREATE TABLE `ordermaster` (
  `o_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone` varchar(10) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordermaster`
--

INSERT INTO `ordermaster` (`o_id`, `p_id`, `qty`, `name`, `city`, `address`, `phone`, `u_id`) VALUES
(50, 1, 50, 'wgwgwwgsd', 'afbffsfbfb', 'sfgafgf', 'svsfg', 39);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL,
  `c_id` int(5) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `detail` mediumtext NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `c_id`, `photo`, `detail`, `price`) VALUES
(38, 'Ikea Italian Chair (Wood , Black)', 14, 'product/2.jpg', ' Product Dimensions	76D x 50W x 8H Centimeters Colour	Black Material	Wood Back Style	Arrow Back Furniture Finish	Bend Maximum Weight Recommendation	110 Kilograms Item Weight	250 Grams Brand	Ikea Style	Italianate Frame Material	Alloy Steel', 1500),
(39, 'AmazonBasics Steel Zero Gravity Reclining Lounge P', 14, 'product/3.jpg', 'Zero-gravity outdoor chair provides a stress-free weightless feel for optimal relaxation Powder-coated steel frame for strength and lightweight portability Double bungee support system securely connects the weather-resistant Textilene fabric to the frame Weather-resistant Textilene fabric stands up to outdoor elements, offers comfortable breathability, and doesn’t retain heat 90 kg weight capacity; padded headrest and gently contoured arm rests Weighing just 7.5 Kg, the portable zero-gravity chair can be transported easily from one location to another Measures 43.3 x 25.5 x 35.5 inches (LxWxH) 1 year limited warranty', 4000),
(40, 'MSJ Mitria Traders Mughal s Wooden & Iron Rocking ', 14, 'product/4.jpg', 'COLOUR:- BROWN AND BLACK MATERIAL:- WOOD AND WROUGHT IRON Material - High Quality Seasoned Wood & Wrought Iron Pain & Heals your mind while rolling on it. Perfect gift for Grand Paa Perfect For - An Elegant Collection of Home Decor Features: Folding chair easy to carry anywhere and self assembly. Long life durable chair', 5500),
(41, 'Nemi Agency Nilkamal Super Strong Crystal PP Plast', 14, 'product/5.jpg', 'Brand : Nilkamal Product Dimensions: Length (60.8 cm), Width (62 cm), Height (80.8 cm) Primary Material: Plastic Color: Iron Black, Style: Contemporary No Assembly Required: The product is delivered in a pre-assembled state Warranty: 1 year on product Blend very well with plush Interiors and exquisite exteriors. Light in weight and easily stackable', 2500),
(42, 'Charming Wing Back Chair in Beige Colour', 14, 'product/6.jpg', 'Product Dimension(In Inch): Length: 35 X Width: 22 X Height: 24 Primary Material: Sheesham Wood | Secondary Material: Solid MDF/Plywood Depending On Availability | Product Name: Wooden Armchair For Living Room. Give Your Home A Luxurious Look With Sheesham Wooden Armchair | Fits In Your Space, Fits On Your Budget. Assembly Or Installation Is Based On Diy (Do It Yourself) Basis. We Provide The Best Quality Products. Every Product Goes Through A Tough Quality Check To Ensure That We Can Serve Our Best Way. Only Made In India Products. In Absence Of A Service Lift, Our Delivery Partner Shall Only Make A Delivery To The Ground Floor Of Your Apartment. Extra Charges Applicable Per Floor On Delivery To The Customer’S Floor (On Request) In Such Cases. If A Customer Wants To Claim Warranty , Share Photos And Videos Of Defect Parts , If We Find Manufacturing Issues , Defect Parts Will Be Return & Replaced, But Customers Have To Pack The Product Back In The Original Condition For Arranging The Successful Return Pickup For Replacement. 10 Days Replacement Only: This Item Is Eligible For Free Replacement, Within 10 Days Of Delivery, In An Unlikely Event Of Damaged, Defective Or Different/Wrong Item Delivered To You. Please Keep The Item In Its Original Condition, Original Packaging, With User Manual, Warranty Cards, And Original Accessories In Manufacturer Packaging For A Successful Return Pick-Up.', 19000),
(43, 'Esquire Coffee Table Black, Plastic Table Used for', 15, 'product/7.jpg', 'Table design	Coffee Table Product Dimensions	41.5D x 79.5W x 46H Centimeters Room Type	Home Office Colour	Others Frame Material	Plastic Top Material Type	Plastic Special Feature	Easy to handle', 1500),
(46, 'Callas Multipurpose Foldable Laptop Table with Cup Holder | Drawer | Mac Holder | Table Holder Study Table, Breakfast Table, Foldable and Portable/Ergonomic & Rounded Edges/Non-Slip Legs (WA-27-Black)', 15, 'product/8.jpg', '【WATCH, PLAY, STUDY - WITHOUT LEAVING THE BED! 】- Are you an avid lover of comfy bed? or now youre recovering from a past surgery,what you need most is here! It perfectly fits a small size laptop,or tablet & phone, also read or do arts and crafts while sitting on the sofa or having breakfast in bed.', 999),
(47, 'Smart Homez Bamboo Multi Purpose Laptop Table with Two Cooling fans and a Drawer', 15, 'product/9.jpg', 'Avoid Laptop Sliding, Adjustable Pre-Set Angle Positions (5 Angles). Comes with Small Drawer and Cup Holder. Adjustable Height, Foldable Legs with Side mini table for External Mouse. Panel Size 520*300*12 mm, Height 235 315 (adjustable), Angle of Panel 0 30% (adjustable)', 1500),
(48, 'Display and Accent Table Side Table Wooden,Side Table Wooden Coffee Stand Home Storage Organizer for Living Room Bedroom', 15, 'product/10.jpg', 'About Space’s must-have wooden side table will elevate your home and complement your lifestyle. Made of high-quality engineered wood, this multipurpose side table can be used in both the bedroom and living room.', 1500),
(49, 'Yogi MART', 15, 'product/11.jpg', 'Clever folding design allows the legs to fold flat so you can easily put it behind the door or the corner of home when not in use. No need to install everytime you use.', 500),
(50, 'L Shape 8 Seater Sofa Set for Living Room with Center Table and 2 Puffy Fabric (Black, Left Side)', 16, 'product/12.jpg', 'L Shape 8- (3 +3+1+1) seater sofa with lounger made from high-quality fabric all color Primary Material: Solidwood, Upholstery Material: Fabric, Top Material No assembly required the product is delivered in a preassembled state.(only legs to fix by the customer)', 30000),
(51, 'HITECH FURNITURES Solid Sheesham Wood Eight Seater Sofa Set + Four Puffy + Center Table for Living Room | Home | Office | 3+2+1 -Black', 16, 'product/13.jpg', 'Primary Material: Wood, secondary material: Foam Upholstery Material: Fabric, Color : Multi Colour Relaxed and comfortable experience: The sleek modern sofa is suitable for office, bedroom, living room or other occasional seating area. Decorate your home/house/office for your guest or family to chill together. Chrome Shining legs and all The material which is used of good Quality and solid indian material', 46000),
(52, 'WOODBONDS™ Alpha Solid Wood Velvet Button Tufted 3 Seater Chesterfield Sofa Set for Living Room in Purple Color', 16, 'product/14.jpg', 'Over All Product Dimensions : Length 83, Width - 33, Height - 32, Seating Height (Floor to Seat) - 18, Seating Depth - 28 (All dimensions are in Inches). Before placing an order please make sure that product can be enter esily in your home Sofa Frame Material: Solid Sal Wood, Sal wood framework that makes it a very strong and durable sofa, Secondary Frame material : 18 mm ply wood,Seat construction : Spring and Elastic webbing belt', 27000),
(53, 'Torque - Jamestown L Shape 8 Seater Fabric Sofa Set for Living Room with Center Table and 2 Puffy (Right Side, Aqua Blue)', 16, 'product/15.jpg', 'L Shape Sofa, 6 seater sofa, Dimensions - W 30 x D 71 x H 29 inches Premium quality has passed 10+ quality tests; has high tensile strength, does not lose colour while rubbing and is pilling resistant Made with Solid Wood Frame and high density foam; Upholstery material: Fabric, Leg Material: fibre legs, durability-tested with 110 kg on individual seats.', 37000),
(54, 'Woodcart Wooden 5 Seater Sofa Set for Living Room | 3+1+1 Seater Sofa for Office & Lounge | Five Seater Sofa Sets with Side Magzine & Newspaper Holder for Home', 16, 'product/16.jpg', 'Product Dimensions(In Inch): Single Seater: Length 29.5 X Width 29.5 X Height 34 | Three Seater: Length 69.5 X Width 29 X Height 34 Primary Material: Sheesham Wood | Secondary Material: MDF (Is Only Applicable For Those Products Which Have Drawers) | Product Name: Wooden Five Seater Sofa For Living Room & Office.', 28000),
(55, 'Urooz Macramé Wooden Wall Hanging Shelf |988| Modern Chic Woven Macrame Tapestries, Wall Art Home Decor for Apartment, Dorm, Bedroom, Living Room', 17, 'product/17.jpg', 'Quality: Our handmade macrame wall hanging shelf is made of 4mm macrame cotton cord, Compared with other 3mm Boho Rope , it is stronger, durable, and beautiful. Process : This Macrame Wall Hanging Shelf is made from 4 mm cotton twisted cord. Macrame color is natural. This Wall Hanging Shelf is made of 100% pure cotton cords, clean color and it is very soft, with no bad smell at all.', 2000),
(56, 'Dime Store Engineered Wood Floating Shelf Wall Mount Wall Shelves for Living Room Bedroom Storage Shelf for Home Decor Items (Standard, Brown)', 17, 'product/18.jpg', 'Keep Items in Place: Our floating shelves for wall offer adequate storage space, you can clear the clutter by organizing them on the wall without taking up much space. You can also hang them separately to display books, pictures frames, plants, tidy up jars, bottles, bathing articles, or other items in the bathroom, bedroom, kitchen, living room. The ledge on the floating shelf can prevent items from falling off or sliding forward.', 1500),
(57, 'Acco & Deco Wall Shelves | Corner Hanging Shelf for Living Room | Zig Zag Home Decor Floating Display Rack Storage Organizer with Engineered Wood Finish Set of 5 Tiers (Brown Finish)', 17, 'product/19.jpg', 'A PERFECT CORNER UTILITY: It offers 5 tiers of ample vertical storage with beautifully styled rounded shelf corners. It is a practical solution for small space and a perfect way to add style to enhance and customize to your home.', 900),
(58, 'Anikaa Revolt Engineered Wood Wall Mount TV Unit/TV Stand/Wall Set Top Box Stand/TV Cabinet/TV Entertainment Unit (Wenge)(Ideal for 42.52 Inch)(D.I.Y)', 17, 'product/20.jpg', 'Product dimensions: Length (120cm / 47.2in) x Breadth (25cm / 9.8in) x Height (82cm / 32.2in) Made of Particle Board (High grade prelam engineering wood with natural wood grain finish.) Product Warranty: 1 year against manufacturing defects.', 1000),
(59, 'Ethnic Karigari Artificial Flower Pots Faux Plants with Pot Set of 6 Small Size Studio Plants for Home Decor, Living Room, Balcony, Multicolor', 17, 'product/21.jpg', 'Artificial flower, well made and vibrantly colored, looks realistic and beautiful. Perfect for decorating wedding party, home and garden, office, coffee house and so on. Garden, kitchen, windowsill, living room, dining table, bedroom, patio, forecourt, birthdays, Valentines Day to fill your heart with pleasure.', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `password`, `birthdate`, `city`, `address`) VALUES
(7, 'dev', 'dev@gmail.com', 'dev', '2020-11-11', 'dev', 'dev'),
(9, 'dev', 'dev@gmail.com', 'dev', '2000-02-11', 'def', 'd'),
(10, 'qdjdafn', 'devshah@gmal.com', 'askfjkfj', '0222-02-05', 'adfmnjsfn', 'mkfskf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `ordermaster`
--
ALTER TABLE `ordermaster`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordermaster`
--
ALTER TABLE `ordermaster`
  MODIFY `o_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
